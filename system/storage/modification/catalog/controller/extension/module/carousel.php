<?php
class ControllerExtensionModuleCarousel extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		//$this->document->addStyle('catalog/view/javascript/jquery/owl-carousel/owl.carousel.css');
		//$this->document->addScript('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js');


        /***theme's changes***/
        $data['store_id'] = $this->config->get('config_store_id');
        $data['lang'] = $this->config->get('config_language_id');
        $data['customisation_general'] = $this->config->get('customisation_general_store');
        $store_id = $this->config->get('config_store_id');
        if (isset($customisation_general["layoutid"][$store_id])) {$data['layoutid'] = $customisation_general["layoutid"][$store_id];} else {$data['layoutid'] = 1;}
        /***end theme's changes***/

                    
		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner($setting['banner_id']);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/carousel', $data);
	}
}