<?php
class ModelCustomGeneral extends Model {
    public function getCurrentLayout() {
        if ($this->config->get('config_maintenance')) {
            $route = '';

            if (isset($this->request->get['route'])) {
                $part = explode('/', $this->request->get['route']);

                if (isset($part[0])) {
                    $route .= $part[0];
                }
            }

            // Show site if logged in as admin
            //$this->user = new User($this->registry);

            if (($route != 'payment') && !$this->user->isLogged()) {
                $layout_id = '';
            } else {
                if (isset($this->request->get['route'])) {
                    $route = $this->request->get['route'];
                } else {
                    $route = 'common/home';
                }
                $layout_id = 0;

                if ($route == 'product/category' && isset($this->request->get['path'])) {
                    $this->load->model('catalog/category');

                    $path = explode('_', (string)$this->request->get['path']);

                    $layout_id = $this->model_catalog_category->getCategoryLayoutId(end($path));
                }

                if ($route == 'product/product' && isset($this->request->get['product_id'])) {
                    $this->load->model('catalog/product');

                    $layout_id = $this->model_catalog_product->getProductLayoutId($this->request->get['product_id']);
                }

                if ($route == 'information/information' && isset($this->request->get['information_id'])) {
                    $this->load->model('catalog/information');

                    $layout_id = $this->model_catalog_information->getInformationLayoutId($this->request->get['information_id']);
                }
                if (!$layout_id) {
                    $this->load->model('design/layout');
                    $layout_id = $this->model_design_layout->getLayout($route);
                }

                if (!$layout_id) {
                    $layout_id = $this->config->get('config_layout_id');
                }


            }

        } else {
            if (isset($this->request->get['route'])) {
                $route = $this->request->get['route'];
            } else {
                $route = 'common/home';
            }
            $layout_id = 0;
            if ($route == 'product/category' && isset($this->request->get['path'])) {
                $this->load->model('catalog/category');

                $path = explode('_', (string)$this->request->get['path']);

                $layout_id = $this->model_catalog_category->getCategoryLayoutId(end($path));
            }

            if ($route == 'product/product' && isset($this->request->get['product_id'])) {
                $this->load->model('catalog/product');

                $layout_id = $this->model_catalog_product->getProductLayoutId($this->request->get['product_id']);
            }

            if ($route == 'information/information' && isset($this->request->get['information_id'])) {
                $this->load->model('catalog/information');

                $layout_id = $this->model_catalog_information->getInformationLayoutId($this->request->get['information_id']);
            }
            if (!$layout_id) {
                $this->load->model('design/layout');
                $layout_id = $this->model_design_layout->getLayout($route);
            }

            if (!$layout_id) {
                $layout_id = $this->config->get('config_layout_id');
            }
        }


        $query = $this->db->query("SELECT route FROM " . DB_PREFIX . "layout_route WHERE layout_id='".(int)$layout_id."' AND store_id = '" . (int)$this->config->get('config_store_id') . "' ");

        if ($query->num_rows) {
            $layout_route = $query->row["route"];

            if ($layout_route == 'common/home'){
                $layout_id = 1;
            } elseif ($layout_route == 'product/product') {
                $layout_id = 2;
            } elseif ($layout_route == 'product/category') {
                $layout_id = 3;
            }





            return $layout_id;
        } else {
            return 0;
        }
    }

    public function getModuleImage($thumb) {

        $string = $thumb;

        $string1  = explode('-',$string);
        $string2 = array_pop($string1);
        $row=substr($string2, 0, strpos($string2, "."));

        $settings  = explode('x',$row);
        return $settings;

    }

    public function getBreadcrumbs($breadcrumbs) {
        $breadcrumbs_block = '';
        $breadcrumbs_block.= '
        <div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb--ys pull-left">';

        foreach ($breadcrumbs as $k => $breadcrumb) {
            $breadcrumbs_block.= '<li class="'.($k == 0 ? 'home-link' : ($k == (count($breadcrumbs) - 1) ? 'active' : '')).'">';
            if ($k == (count($breadcrumbs) - 1)) {
                $breadcrumbs_block.= $breadcrumb['text'];
            } else {
                $breadcrumbs_block.= '<a class="'.(count($breadcrumbs)-1).'" href="'.$breadcrumb['href'].'">'.$breadcrumb['text'].'</a>';
            }
            $breadcrumbs_block.= '</li>';

        }
        $breadcrumbs_block.= '
                </ol>
            </div>
        </div>
        ';

        return $breadcrumbs_block;
    }

    public function getDateEnd($product_id) {
        $query = $this->db->query("SELECT date_end FROM ".DB_PREFIX."product_special WHERE product_id='".filter_var($product_id, FILTER_SANITIZE_NUMBER_INT)."' AND customer_group_id = '" . (int)$this->config->get('config_customer_group_id') . "' ");

        if ($query->num_rows) {
            $special_date = $query->row['date_end'];
        } else {
            $special_date = false;
        }
        return $special_date;
    }

    public function getManufacturerImage($manufacturer_id) {

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "manufacturer m LEFT JOIN " . DB_PREFIX . "manufacturer_to_store m2s ON (m.manufacturer_id = m2s.manufacturer_id) WHERE m.manufacturer_id = '" . (int)$manufacturer_id . "' AND m2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");
        if ($query->num_rows) {
            $manufacturer_image = $query->row['image'];
        } else {
            $manufacturer_image = false;
        }

        return $manufacturer_image;
    }
    public function getManufacturerImageProductPage($manufacturer_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "manufacturer m LEFT JOIN " . DB_PREFIX . "manufacturer_to_store m2s ON (m.manufacturer_id = m2s.manufacturer_id) WHERE m.manufacturer_id = '" . (int)$manufacturer_id . "' AND m2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");
        if ($query->num_rows) {
            $manufacturer_image = $query->row['image'];
        } else {
            $manufacturer_image = false;
        }

        return $manufacturer_image;
    }

    public function getCategoryOptionById($category_href) {
        if (isset($category_href)) {
            $parts = explode('=', (string)$category_href);
        } else {
            $parts = array();
        }
        $category_id = end($parts);


        if (is_numeric($category_id)) {
            $category_id = $category_id;
        } else {
            $parts = explode('/', (string)$category_id);
            $category_id = end($parts);
            $query = $this->db->query("SELECT query as query FROM ".DB_PREFIX."url_alias WHERE keyword='".$this->db->escape($category_id)."'");
            if ($query->num_rows) {
                $parts = explode('=', (string)$query->row['query']);
                $category_id = end($parts);
            }

        }

        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

        return $query->row;
    }

    public function getCategoryOptionHref($category_href, $option) {
        if (isset($category_href)) {
            $parts = explode('=', (string)$category_href);
        } else {
            $parts = array();
        }
        $category_id = end($parts);


        if (is_numeric($category_id)) {
            $category_id = $category_id;
        } else {
            $parts = explode('/', (string)$category_id);
            $category_id = end($parts);
            $query = $this->db->query("SELECT query as query FROM ".DB_PREFIX."url_alias WHERE keyword='".$this->db->escape($category_id)."'");
            if ($query->num_rows) {
                $parts = explode('=', (string)$query->row['query']);
                $category_id = end($parts);
            }

        }

        $column_exists_option = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "category LIKE '".$option."' ");
        if ($column_exists_option->num_rows) {
            $query = $this->db->query("SELECT DISTINCT `".$option."` FROM " . DB_PREFIX . "category cd WHERE cd.category_id = '" . (int)$category_id . "' ");
            if ($query->rows) {
                $category_option = $query->row["$option"];
            } else {
                $category_option = '';
            }
        } else {
            $category_option = '';
        }
        return $category_option;
    }
    public function getSubCategoryOptionById($category_href) {
        if (isset($category_href)) {

            $parts = explode('_', (string)$category_href);
            $str0=strpos($category_href, "sort_order");

            if ($str0 == true) {
                $category_id = $parts[count($parts)-2];
            } else {
                $category_id = end($parts);

            }

        } else {
            $parts = array();
        }

        if (is_numeric($category_id)) {
            $category_id = $category_id;
        } else {

            $str1=strpos($category_id, "?");

            if ($str1 == true) {
                $category_id=substr($category_id, 0, $str1);
            }

            $parts = explode('/', (string)$category_id);
            $category_id = end($parts);


            $query = $this->db->query("SELECT query as query FROM ".DB_PREFIX."url_alias WHERE keyword='".$this->db->escape($category_id)."'");
            if ($query->num_rows) {
                $parts = explode('=', (string)$query->row['query']);
                $category_id = end($parts);
            }

        }

        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

        return $query->row;

    }
    public function getSubCategoryId($category_href) {
        if (isset($category_href)) {
            $parts = explode('_', (string)$category_href);
        } else {
            $parts = array();
        }
        $category_id = end($parts);

        if (is_numeric($category_id)) {
            $category_id = $category_id;
        } else {
            $parts = explode('/', (string)$category_id);
            $category_id = end($parts);
            $query = $this->db->query("SELECT query as query FROM ".DB_PREFIX."url_alias WHERE keyword='".$this->db->escape($category_id)."'");
            if ($query->num_rows) {
                $parts = explode('=', (string)$query->row['query']);
                $category_id = end($parts);
            }

        }
        return $category_id;
    }
    public function getCategoryUrl($category_id) {

        $query = $this->db->query("SELECT keyword FROM ".DB_PREFIX."url_alias WHERE query='category_id=".(int)$category_id."' ");

        if (isset($query->row["keyword"]) && $this->config->get("config_seo_url") == 1) {
            $category_link = $query->row["keyword"];
        } else {
            $category_link = $category_id;
        }

        return $category_link;
    }

    public function getInformationHref($information_id) {
        $information_href = $this->url->link('information/information', 'information_id=' . $information_id);
        return $information_href;
    }

    public function renderProductsList($product_slider_type, $title,$category_id,$category_href, $product_width, $product_height) {

        $this->load->model('tool/image');
        $category_limit = 3;

        $filter_data_category = array('filter_category_id'=> $category_id, 'filter_filter'=> '', 'sort' => 'p.sort_order', 'order'=>'ASC', 'start' => '', 'limit' => $category_limit);
        $results_category = $this->model_catalog_product->getProducts($filter_data_category);

        if (sizeof($results_category) == 0){$results_category = '';}

        if ($results_category != ''){
            $products_category = array();

            foreach ($results_category as $result_category) {
                if ($result_category['image']) {
                    $image = $this->model_tool_image->resize($result_category['image'], $product_width, $product_height);
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $product_width, $product_height);
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($result_category['price'], $result_category['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if ((float)$result_category['special']) {
                    $special = $this->currency->format($this->tax->calculate($result_category['special'], $result_category['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $special = false;
                }


                $products_category[] = array(
                    'product_id'  => $result_category['product_id'],
                    'thumb'       => $image,
                    'name'        => $result_category['name'],
                    'price'       => $price,
                    'special'     => $special,
                    'href'        => $this->url->link('product/product', 'product_id=' . $result_category['product_id'])
                );
            }
        }
        /* end output for category1 */


        if (isset($products_category)) :
            $category_menu_slider = '';

            $category_menu_slider.= '<a href="'.$category_href.'" class="megamenu__subtitle"><span>'.$title.'</span></a>';
        if ($product_slider_type == 1) {
            $category_menu_slider.= '
            <div class="vertical-carousel vertical-carousel-1 special-carousel">';
                    foreach ($products_category as $product) :
                        $category_menu_slider.= '
                    <div class="vertical-carousel__item '.$category_id.'">
                        <div class="vertical-carousel__item__image pull-left">
                            <a href="'.$product['href'].'">
                                <img class="img-responsive" src="'.str_replace(' ', '%20',$product['thumb']).'" alt="'.$product['name'].'" />
                            </a>
                        </div>
                        <div class="vertical-carousel__item__title">
                            <h2><a href="'.$product['href'].'">'.$product['name'].'</a></h2>
                        </div>
                        <div class="price-box">';
                            if ($product['special']) {
                            $category_menu_slider.= '<span class="price-box__old">'.$product['price'].'</span><br>'.$product['special'];
                             } else {
                                $category_menu_slider.= '<span class="price regular">'.$product['price'].'</span>';
                             }
                             $category_menu_slider.= '
                        </div>
                    </div>';
                    endforeach;
            $category_menu_slider.= '</div>';
          } else {
            $category_menu_slider.= '<div class="carousel-products top-latest-carousel">';

            foreach ($products_category as $product) :
                $category_menu_slider.= '
            <div>
                <div class="product">
                    <div class="product__inside">
                        <div class="product__inside__image">
                            <a href="'.$product['href'].'">
                                <img class="img-responsive"  src="'.str_replace(' ', '%20',$product['thumb']).'" alt="'.$product['name'].'" />
                            </a>
                        </div>
                        <div class="product__inside__name">
                            <h2><a href="'.$product['href'].'">'.$product['name'].'</a></h2>
                        </div>
                        <div class="product__inside__price price-box">';
                            if ($product['special']) {
                                $category_menu_slider.= '<span class="price-box__old">'.$product['price'].'</span><br>'.$product['special'];
                            } else {
                                $category_menu_slider.= '<span class="price regular">'.$product['price'].'</span>';
                            }
                            $category_menu_slider.= '
                        </div>
                    </div>
                </div>
            </div>';
            endforeach;
            $category_menu_slider.= '</div>';

         }
        return $category_menu_slider;
        endif;
    }

    public function getProductOption($product_id, $option, $html = '') {
        $column_exists_option = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product_description LIKE '".$option."' ");
        if ($column_exists_option->num_rows) {
            $query = $this->db->query("SELECT DISTINCT `".$option."` FROM " . DB_PREFIX . "product_description pd WHERE pd.product_id = '" . (int)$product_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' ");
            if ($query->rows) {
                $custom1 = $query->row[$option];
                if ($html == 1){
                    $custom = html_entity_decode($custom1, ENT_QUOTES, 'UTF-8');
                } else {
                    $custom = $custom1;
                }
            } else {
                $custom = '';
            }
        } else {
            $custom = '';
        }

        return $custom;
    }

    public function getOptionProductTable($product_id, $option, $html = '') {
        $column_exists_option = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product LIKE '".$option."' ");
        if ($column_exists_option->num_rows) {
            $query = $this->db->query("SELECT DISTINCT `".$option."` FROM " . DB_PREFIX . "product p WHERE p.product_id = '" . (int)$product_id . "' ");
            if ($query->rows) {
                $custom1 = $query->row[$option];
                if ($html == 1){
                    $custom = html_entity_decode($custom1, ENT_QUOTES, 'UTF-8');
                } else {
                    $custom = $custom1;
                }
            } else {
                $custom = '';
            }
        } else {
            $custom = '';
        }

        return $custom;
    }

    public function getCssClass($column_left,$column_right,$no_class='') {
        if ($column_left && $column_right) {
            $class = 'col-md-8 col-lg-6 col-xl-8';
        } elseif ($column_left || $column_right) {
            $class = 'col-md-8 col-lg-9 col-xl-10';
        } else {
            if ($no_class == 1) {
                $class = '';
            } else {
                $class = 'col-md-12 col-lg-12 col-xl-12';
            }
        }
        return $class;
    }

    public function getBlogCatClass($category_children) {
        switch (count($category_children)) {
            case 2:
                $class = 'col-half';
                break;
            case 3:
                $class = 'col-one-third';
                break;
            case 4:
                $class = 'col-one-fourth';
                break;
            case 5:
                $class = 'col-one-fifth';
                break;
            case 6:
                $class = 'col-one-third';
                break;
            case 7:
                $class = 'col-one-fourth';
                break;
            case 8:
                $class = 'col-one-fourth';
                break;
            case 9:
                $class = 'col-one-third';
                break;
            case 10:
                $class = 'col-one-fourth';
                break;
            case 11:
                $class = 'col-one-fourth';
                break;
            case 12:
                $class = 'col-one-fourth';
                break;
            default:
                $class = '';
        }

        return $class;
    }

    public function getLogoTransparent() {
        if ($this->request->server['HTTPS']) {
            $server = $this->config->get('config_ssl');
        } else {
            $server = $this->config->get('config_url');
        }

        if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
            $logo = $server . 'image/catalog/logo-transparent/' . $this->config->get('config_logo');
        } else {
            $logo = '';
        }

        return $logo;
    }

    public function getNewsletterBlock($newsletter_title,$your_apikey,$my_list_unique_id,$newsletter_button,$newsletter_placeholder) {
        $newsletter_block = '';

$newsletter_block.= '<div class="mobile-collapse">';
?>


        <?php if (!isset($newsletter_title)) {
        $newsletter_block.= '<h4 class="text-left title-under  mobile-collapse__title">NEWSLETTER SIGNUP</h4>';

            } else {
                if ($newsletter_title != ''):
             $newsletter_block.= '
                    <h4 class="text-left  title-under  mobile-collapse__title">'.$newsletter_title.'</h4>';
                endif;
            }
        ?>

        <?php  if (isset($your_apikey) && isset($my_list_unique_id) && $your_apikey != '' && $my_list_unique_id != '') {
            $newsletter_block.= '
        <div class="mobile-collapse__content">
            <form class="form-inline" id="signup" action="'.$_SERVER['PHP_SELF'].'" method="get">
                <input name="email" id="email" type="text" class="subscribe-form__input"  value=""  placeholder="'.$newsletter_placeholder.'">
                <input name="apikey" id="apikey" type="hidden" class="form-control" value="'.$your_apikey.'" >
                <input name="listid" id="listid" type="hidden" class="form-control" value="'.$my_list_unique_id.'" >
                <button name="submit" type="submit" class="btn btn--ys btn--xl">'.(isset($newsletter_button) ? $newsletter_button : "subscribe").'</button>
                <span id="response"></span>
            </form>
        </div>';
         } else {
            $newsletter_block.= '
        <h4 class="mailchimp_error">Enter API key and List ID for your Mailchimp account!</h4>';
        }
        $newsletter_block.= '</div>';

        return $newsletter_block;


    }


    /***for new version 2.3.0.0***/
    public function getOptionByCategoryId($category_id) {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");
        return $query->row;
    }

    public function getOption1ByCategoryId($category_id, $option) {
        $column_exists_option = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "category LIKE '".$option."' ");
        if ($column_exists_option->num_rows) {
            $query = $this->db->query("SELECT DISTINCT `".$option."` FROM " . DB_PREFIX . "category cd WHERE cd.category_id = '" . (int)$category_id . "' ");
            if ($query->rows) {
                $category_option = $query->row["$option"];
            } else {
                $category_option = '';
            }
        } else {
            $category_option = '';
        }
        return $category_option;
    }



}