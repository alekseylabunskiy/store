<?php
class ControllerCommonSearch extends Controller {
	public function index() {
		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}


            /***theme's changes***/
            $data['store_id'] = $this->config->get('config_store_id');
            $data['customisation_general'] = $this->config->get('customisation_general_store');
            /***end theme's changes***/
                    
		return $this->load->view('common/search', $data);
	}
}