<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('extension/extension');

		$data['analytics'] = array();

		$analytics = $this->model_extension_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get($analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get($analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		$data['text_home'] = $this->language->get('text_home');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_shopping_cart'] = $this->language->get('text_shopping_cart');
		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));

		$data['text_account'] = $this->language->get('text_account');
		$data['text_register'] = $this->language->get('text_register');
		$data['text_login'] = $this->language->get('text_login');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_transaction'] = $this->language->get('text_transaction');
		$data['text_download'] = $this->language->get('text_download');
		$data['text_logout'] = $this->language->get('text_logout');
		$data['text_checkout'] = $this->language->get('text_checkout');
		$data['text_category'] = $this->language->get('text_category');
		$data['text_all'] = $this->language->get('text_all');

		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

		// Menu
		$this->load->model('catalog/category');

            /* theme's changes */
                            $this->load->model('custom/general');
                $customisation_translation = $this->config->get('customisation_translation_store');
                $store_id = $this->config->get('config_store_id');
                $lang = $this->config->get('config_language_id');
                $theme = $this->config->get('config_theme');
            /* end theme's changes */
                    

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {

            /***theme's changes***/
                $category_top_level = $this->model_custom_general->getOptionByCategoryId($category['category_id']);
                $product_right_slider = $this->model_custom_general->getOption1ByCategoryId($category['category_id'],'ctop');
                $product_slider_type = $this->model_custom_general->getOption1ByCategoryId($category['category_id'],'vtop');

                $product_width = $this->config->get($theme.'_image_product_width');
                $product_height = $this->config->get($theme.'_image_product_height');
                $title = isset($customisation_translation[$lang]["dd_title"][$store_id]) && $customisation_translation[$lang]["dd_title"][$store_id] != '' ? $customisation_translation[$lang]["dd_title"][$store_id] : 'Latest';

                $category_href = $this->url->link('product/category', 'path=' . $category['category_id']);
                $category_menu_slider = $this->model_custom_general->renderProductsList($product_slider_type, $title, $category['category_id'], $category_href, $product_width, $product_height);

                /***end theme's changes***/
                    
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {

                    /***theme's changes***/
                    $grandchildren_data = array();
                    $grandchildren = $this->model_catalog_category->getCategories($child['category_id']);
                    $category_sub_level = $this->model_custom_general->getOptionByCategoryId($child['category_id']);

                    foreach ($grandchildren as $grandchild) {
                        $grandchildren_data[] = array(
                            'name'  => $grandchild['name'],
                            'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'].'_'.$grandchild['category_id'])
                        );

                    }
                    /***end theme's changes***/

                    
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(

                        /***theme's changes***/
                        'grandchildren' => $grandchildren_data,
                        'category_sub_level' => $category_sub_level,
                        /***end theme's changes***/

                    
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],

                    /***theme's changes***/
                    'category_top_level' => $category_top_level,
                    'product_right_slider' => $product_right_slider,
                    'category_menu_slider' => $category_menu_slider,
                    'category_class' => $this->model_custom_general->getBlogCatClass($children_data),
                    /***end theme's changes***/

                    
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');

		// For page specific css
		if (isset($this->request->get['route'])) {
			if (isset($this->request->get['product_id'])) {
				$class = '-' . $this->request->get['product_id'];
			} elseif (isset($this->request->get['path'])) {
				$class = '-' . $this->request->get['path'];
			} elseif (isset($this->request->get['manufacturer_id'])) {
				$class = '-' . $this->request->get['manufacturer_id'];
			} elseif (isset($this->request->get['information_id'])) {
				$class = '-' . $this->request->get['information_id'];
			} else {
				$class = '';
			}

			$data['class'] = str_replace('/', '-', $this->request->get['route']) . $class;
		} else {
			$data['class'] = 'common-home';
		}


        /***theme's changes***/
        $data['config_telephone'] = $this->config->get('config_telephone');
        $data['config_fax'] = $this->config->get('config_fax');
        $data['config_open'] = $this->config->get('config_open');

        $data['layoutid'] = 1;
        $data['pages_link_url'] = 1;
        $data['search_block'] = 1;
        $data['cart_button'] = 1;
        $data['header_service_buttons'] = 1;
        $data['top_button'] = 1;
        $data['css_file'] = 0;
        $data['headertype'] = 1;
        $data['customitem_item_url1'] = 'index.php';
        $data['blog_link_status'] = 1;
        $data['blog_link_url'] = 'index.php?route=simple_blog/article';
        $data['pages_link_url'] = 'index.php';
        $data['pages_status'] = 1;
        $data['additional_page_checkout_status'] = 1;
        $data['additional_page_account_status'] = 1;
        $data['preloader'] = 1;
        $data['product_catalog_mode'] = 0;

        $data['theme'] = $this->config->get('config_theme');
        $data['store_id'] = $this->config->get('config_store_id');
        $data['lang'] = $this->config->get('config_language_id');

        $this->load->model('catalog/information');
        $this->load->model('catalog/category');

        $customisation_general = $this->config->get('customisation_general_store');
        $customisation_products = $this->config->get('customisation_products_store');
        $data['customisation_general'] = $this->config->get('customisation_general_store');
        $data['customisation_colors'] = $this->config->get('customisation_colors_store');
        $data['customisation_products'] = $this->config->get('customisation_products_store');
        $data['customisation_translation'] = $this->config->get('customisation_translation_store');

        $data['layout_id'] = $this->model_custom_general->getCurrentLayout();

        if (isset($customisation_general["headertype"][$store_id])) {
            if ($data['layout_id'] != 1 && $customisation_general["headertype"][$store_id] == 2) {
                $data['headertype'] = 1;
            } else {
                $data['headertype'] = $customisation_general["headertype"][$store_id];
            }
        }
        if (isset($customisation_general["layoutid"][$store_id])) {$data['layoutid'] = $customisation_general["layoutid"][$store_id];}
        if (isset($customisation_general["css_file"][$store_id])) {$data['css_file'] = $customisation_general["css_file"][$store_id];}
        if (isset($customisation_general["preloader"][$store_id])) {$data['preloader'] = $customisation_general["preloader"][$store_id];}
        if (isset($customisation_general["preloader_html"][$store_id])) {$data['preloader_html'] = html_entity_decode($customisation_general["preloader_html"][$store_id], ENT_QUOTES, 'UTF-8');}
        if (isset($customisation_general["top_button"][$store_id])) {$data['top_button'] = $customisation_general["top_button"][$store_id];}
        if (isset($customisation_general["pages_link_url"][$store_id])) {$data['pages_link_url'] = $customisation_general["pages_link_url"][$store_id];}
        if (isset($customisation_general["search_block"][$store_id])) {$data['search_block'] = $customisation_general["search_block"][$store_id];}
        if (isset($customisation_general["cart_button"][$store_id])) {$data['cart_button'] = $customisation_general["cart_button"][$store_id];}
        if (isset($customisation_general["header_service_buttons"][$store_id])) {$data['header_service_buttons'] = $customisation_general["header_service_buttons"][$store_id];}
        if (isset($customisation_general["customitem_item_url1"][$store_id])) {$data['customitem_item_url1'] = $customisation_general["customitem_item_url1"][$store_id];}
        if (isset($customisation_general["blog_link_status"][$store_id])) {$data['blog_link_status'] = $customisation_general["blog_link_status"][$store_id];}
        if (isset($customisation_general["blog_link_url"][$store_id])) {$data['blog_link_url'] = $customisation_general["blog_link_url"][$store_id];}
        if (isset($customisation_general["pages_status"][$store_id])) {$data['pages_status'] = $customisation_general["pages_status"][$store_id];}
        if (isset($customisation_general["additional_page_checkout_status"][$store_id])) {$data['additional_page_checkout_status'] = $customisation_general["additional_page_checkout_status"][$store_id];}
        if (isset($customisation_general["additional_page_account_status"][$store_id])) {$data['additional_page_account_status'] = $customisation_general["additional_page_account_status"][$store_id];}
        if (isset($customisation_products["product_catalog_mode"][$store_id])) {$data['product_catalog_mode'] = $customisation_products["product_catalog_mode"][$store_id];}

        $data['informations'] = array();

        foreach ($this->model_catalog_information->getInformations() as $result) {
                $data['informations'][] = array(
                    'title' => $result['title'],
                    'information_id' => $result['information_id'],
                    'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
                );
        }


        $data['logo_transparent'] = $this->model_custom_general->getLogoTransparent();


        $data['css'] = $this->load->controller('common/css');
        $data['top_slider'] = $this->load->controller('common/top_slider');
        $data['search_mobile'] = $this->load->controller('common/search_mobile');
        /***end theme's changes***/

                    
		return $this->load->view('common/header', $data);
	}
}
