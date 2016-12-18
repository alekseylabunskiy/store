<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');


            /***theme's changes***/
            $lang = $this->config->get('config_language_id');
            $store_id = $this->config->get('config_store_id');

            $data['layoutid'] = 1;
            $data['newsletter_popup_status'] = 0;
            $data['newsletter_placeholder'] = 0;
            $data['apikey'] = 'test';
            $data['list_unique_id'] = 'test';
            $data['newsletter_promo'] = '';
            $data['newsletter_button'] = '';
            $data['newsletter_close'] = '';


            $data['store_id'] = $this->config->get('config_store_id');
            $customisation_general = $this->config->get('customisation_general_store');
            $this->load->model('custom/general');

            $data['layout_id'] = $this->model_custom_general->getCurrentLayout();

            if (isset($customisation_general["layoutid"][$store_id])) {$data['layoutid'] = $customisation_general["layoutid"][$store_id];}
            if (isset($customisation_general["newsletter_popup_status"][$store_id])) {$data['newsletter_popup_status'] = $customisation_general["newsletter_popup_status"][$store_id];}

            $data['newsletter_placeholder'] = (isset($customisation_general[$lang]["newsletter_placeholder"][$store_id]) ? $customisation_general[$lang]["newsletter_placeholder"][$store_id] : 'Your E-mail...');
            $data['newsletter_promo'] = html_entity_decode($customisation_general[$lang]["newsletter_promo"][$store_id], ENT_QUOTES, 'UTF-8');
            $data['newsletter_button'] = isset($customisation_general[$lang]["newsletter_button"][$store_id]) ? $customisation_general[$lang]["newsletter_button"][$store_id] : 'subscribe';
            $data['newsletter_close'] = $customisation_general[$lang]["newsletter_close"][$store_id];

            $data['config_logo'] = $this->config->get('config_logo');
            $data['config_name'] = $this->config->get('config_name');

            $data['boxed'] = $this->load->controller('common/boxed');
            $data['left_home'] = $this->load->controller('common/left_home');
            $data['left_home2'] = $this->load->controller('common/left_home2');
            $data['right_home'] = $this->load->controller('common/right_home');
            $data['right_home2'] = $this->load->controller('common/right_home2');
            $data['promo'] = $this->load->controller('common/promo');
            /***end theme's changes***/
                    
		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
