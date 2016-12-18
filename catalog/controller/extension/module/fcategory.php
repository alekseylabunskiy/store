<?php
class ControllerExtensionModuleFcategory extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/fcategory');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['category_button'] = $this->language->get('category_button');

        $store_id = $this->config->get('config_store_id');
        $customisation_general = $this->config->get('customisation_general_store');
        $data['layoutid'] = 1;
        if (isset($customisation_general["layoutid"][$store_id])) {
            $data['layoutid'] = $customisation_general["layoutid"][$store_id];
        }

        $this->load->model('catalog/category');

        $this->load->model('tool/image');

		$data['categories'] = array();

        if (!empty($setting['category'])) {
			$categories = array_slice($setting['category'], 0, (int)$setting['limit']);

			foreach ($categories as $category_id) {
				$category_info = $this->model_catalog_category->getCategory($category_id);

                if (isset($category_info['image'])) {
                    $image = $this->model_tool_image->resize($category_info['image'], $setting['width'], $setting['height']);
                    $image2x = $this->model_tool_image->resize($category_info['image'], $setting['width']*2, $setting['height']*2);

                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
                    $image2x = $this->model_tool_image->resize('placeholder.png', $setting['width']*2, $setting['height']*2);
                }

                if ($category_info) {
					$data['categories'][] = array(
						'category_id'  => $category_info['category_id'],
                        'thumb'       => $image,
                        'thumb2x'       =>$image2x,
                        'name'        => $category_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
						'href'        => $this->url->link('product/category', 'path=' . $category_info['category_id'])
                    );

                }
			}
		}

		if ($data['categories']) {
            return $this->load->view('extension/module/fcategory', $data);
		}
	}
}