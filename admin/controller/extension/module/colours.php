<?php
class ControllerExtensionModuleColours extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/colours');

        $this->document->setTitle($this->language->get('heading_title_normal'));

        $this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('colours', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_status'] = $this->language->get('entry_status');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['success'] = $this->language->get('text_success');
        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_title'] = $this->language->get('entry_title');
        $data['entry_description'] = $this->language->get('entry_description');
        $data['text_yes'] = $this->language->get('text_yes');
        $data['text_no'] = $this->language->get('text_no');


        if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title_normal'),
            'href' => $this->url->link('extension/module/colours', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/module/colours', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

        /* stores adding */
        $this->load->model('setting/store');
        $data['stores'] = $this->model_setting_store->getStores();

        if (isset($this->request->post['colours_store'])) {
            $data['colours_store'] = $this->request->post['colours_store'];
        } else {
            $data['colours_store'] = $this->config->get('colours_store');
        }

        if (isset($this->request->post['colours_status'])) {
            $data['colours_status'] = $this->request->post['colours_status'];
        } else {
            $data['colours_status'] = $this->config->get('colours_status');
        }
        $this->document->addScript($this->config->get('config_url').'catalog/view/bs-colorpicker/js/colorpicker.js');
        $this->document->addStyle($this->config->get('config_url').'catalog/view/bs-colorpicker/css/colorpicker.css');
        $this->document->addStyle($this->config->get('config_url').'view/stylesheet/theme.css');

        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/colours', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/colours')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

    //public function install() {
        // Register the event triggers
        //$this->load->model('extension/event');
        //$this->model_extension_event->addEvent('colours', 'catalog/controller/extension/module/featured/index/after', 'extension/module/colours/general');

    //}

    //public function uninstall() {
        // delete the event triggers
        //$this->load->model('extension/event');

        //$this->model_extension_event->deleteEvent('colours');
    //}


}