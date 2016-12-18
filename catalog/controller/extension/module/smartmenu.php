<?php
class ControllerExtensionModuleSmartmenu extends Controller {
	public function index() {
		$this->load->language('extension/module/smartmenu');

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_account'] = $this->language->get('text_account');
        $data['text_checkout'] = $this->language->get('text_checkout');
        $data['checkout'] = $this->url->link('checkout/checkout', '', true);
        $data['account'] = $this->url->link('account/account', '', true);

        // Menu
        $this->load->model('catalog/information');
        $this->load->model('custom/general');

        $this->load->model('catalog/category');

        $this->load->model('catalog/product');

        $data['categories'] = array();


        $data['store_id'] = $this->config->get('config_store_id');
        $data['lang'] = $this->config->get('config_language_id');
        $data['customisation_general'] = $this->config->get('customisation_general_store');
        $data['customisation_translation'] = $this->config->get('customisation_translation_store');

        $data['informations'] = array();

        foreach ($this->model_catalog_information->getInformations() as $result) {
            $data['informations'][] = array(
                'title' => $result['title'],
                'information_id' => $result['information_id'],
                'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
            );
        }



        if(isset($this->request->get['route'])) {
            $route = $this->request->get['route'];
        } else {
            $route = 'common/home';
        }

        $route = explode("/", $route);

        if($this->config->get('simple_blog_status')) {
            $this->load->model('simple_blog/article');

            $count_blog_categories = $this->model_simple_blog_article->getTotalCategories(0);
        }

        if (isset($count_blog_categories) && $this->config->get('simple_blog_display_category') && $this->config->get('simple_blog_status')) {

            $categories = $this->model_simple_blog_article->getCategories(0);

            foreach ($categories as $category) {
                if ($category['top']) {
                    // Level 2
                    $children_data = array();

                    $children = $this->model_simple_blog_article->getCategories($category['simple_blog_category_id']);

                    foreach ($children as $child) {

                        $article_total = $this->model_simple_blog_article->getTotalArticles($child['simple_blog_category_id']);
                        if ($child['image']) {
                            $this->load->model('tool/image');

                            $image = $this->model_tool_image->resize($child['image'], 205, 130);
                        } else {
                            $image = false;
                        }

                        $children_data[] = array(
                            'image'  => $image,
                            'external_link' => $child['external_link'],
                            'name'  => $child['name'],
                            'href'  => $this->url->link('simple_blog/category', 'simple_blog_category_id=' . $category['simple_blog_category_id'] . '_' . $child['simple_blog_category_id'])
                        );
                    }

                    $menu_class = 'simple_blog';

                    // Level 1
                    $data['categories'][] = array(
                        'name'     => $category['name'],
                        'external_link' => $category['external_link'],
                        'blog_category_column' => $category['blog_category_column'],
                        'children' => $children_data,
                        'menu_class' => $menu_class,
                        'column'   => $category['blog_category_column'] ? $category['blog_category_column'] : 1,
                        'href'     => $this->url->link('simple_blog/category', 'simple_blog_category_id=' . $category['simple_blog_category_id'])
                    );
                }
            }

        }
        //else {
        $categories = $this->model_catalog_category->getCategories(0);

        foreach ($categories as $category) {
            if ($category['top']) {
                /***theme's changes***/
                $this->load->model('custom/general');
                $customisation_translation = $this->config->get('customisation_translation_store');
                $store_id = $this->config->get('config_store_id');
                $lang = $this->config->get('config_language_id');
                $theme = $this->config->get('config_theme');


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

                    $product_total = $this->model_catalog_product->getTotalProducts($filter_data);

                    $children_data[] = array(
                        /***theme's changes***/
                        'grandchildren' => $grandchildren_data,
                        'category_sub_level' => $category_sub_level,
                        /***end theme's changes***/

                        'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $product_total . ')' : ''),
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
        //}





        return $this->load->view('extension/module/smartmenu', $data);
	}
}