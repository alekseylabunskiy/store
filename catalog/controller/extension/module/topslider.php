<?php
class ControllerExtensionModuleTopslider extends Controller {
	public function index($setting) {
		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');

            $store_id = $this->config->get('config_store_id');
            $customisation_general = $this->config->get('customisation_general_store');
            $data['layoutid'] = 1;
            if (isset($customisation_general["layoutid"][$store_id])) {
                $data['layoutid'] = $customisation_general["layoutid"][$store_id];
            }
            $data['layout_type_footer'] = 1;
            if (isset($customisation_general["footertype"][$store_id])) {
                $data['layout_type_footer'] = $customisation_general["footertype"][$store_id];
            }


            return $this->load->view('extension/module/topslider', $data);
		}
	}
}