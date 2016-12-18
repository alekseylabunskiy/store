<?php
class ControllerExtensionModuleTestimonialsSettings extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/testimonials_settings');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		$this->load->model('localisation/language');
		$this->load->model('testimonials/url_alias');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('testimonials', $this->request->post);

			$this->model_testimonials_url_alias->deleteUrlAlias('tltpath=');

			$this->model_testimonials_url_alias->saveUrlAlias($this->db->escape($this->request->post['testimonials_path']), 'tltpath=' . $this->db->escape($this->request->post['testimonials_path']));
			
			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');

		$data['entry_path'] = $this->language->get('entry_path');
		$data['entry_path_title'] = $this->language->get('entry_path_title');
		$data['entry_show_path'] = $this->language->get('entry_show_path');
		$data['entry_num_columns'] = $this->language->get('entry_num_columns');
		$data['entry_show_image'] = $this->language->get('entry_show_image');
		$data['entry_width'] = $this->language->get('entry_width');
		$data['entry_height'] = $this->language->get('entry_height');
		$data['entry_seo'] = $this->language->get('entry_seo');
		$data['entry_status'] = $this->language->get('entry_status');

		$data['help_path'] = $this->language->get('help_path');
		$data['help_path_title'] = $this->language->get('help_path_title');
		$data['help_show_path'] = $this->language->get('help_show_path');
		$data['help_show_image'] = $this->language->get('help_show_image');
		$data['help_num_columns'] = $this->language->get('help_num_columns');
		$data['help_seo'] = $this->language->get('help_seo');
		$data['help_status'] = $this->language->get('help_status');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['testimonials_path'])) {
			$data['error_path'] = $this->error['testimonials_path'];
		} else {
			$data['error_path'] = '';
		}

		if (isset($this->error['testimonials_path_title'])) {
			$data['error_path_title'] = $this->error['testimonials_path_title'];
		} else {
			$data['error_path_title'] = array();
		}

		if (isset($this->error['testimonials_width'])) {
			$data['error_width'] = $this->error['testimonials_width'];
		} else {
			$data['error_width'] = '';
		}

		if (isset($this->error['testimonials_height'])) {
			$data['error_height'] = $this->error['testimonials_height'];
		} else {
			$data['error_height'] = '';
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
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/testimonials_settings', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/module/testimonials_settings', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

		if (isset($this->request->post['testimonials_status'])) {
			$data['testimonials_status'] = $this->request->post['testimonials_status'];
		} else {
			$data['testimonials_status'] = $this->config->get('testimonials_status');
		}

		if (isset($this->request->post['testimonials_path'])) {
			$data['testimonials_path'] = preg_replace('/\s/', '', $this->request->post['testimonials_path']);
		} elseif ($this->config->has('testimonials_path')) {
			$data['testimonials_path'] = $this->config->get('testimonials_path');
		} else {
			$data['testimonials_path'] = 'blogs';
		}

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['testimonials_path_title'])) {
			$data['testimonials_path_title'] = $this->request->post['testimonials_path_title'];
		} elseif ($this->config->has('testimonials_path_title')) {
			$data['testimonials_path_title'] = $this->config->get('testimonials_path_title');
		} else {
			$data['testimonials_path_title'] = array();
		}

		if (isset($this->request->post['testimonials_show_path'])) {
			$data['testimonials_show_path'] = $this->request->post['testimonials_show_path'];
		} elseif ($this->config->has('testimonials_show_path')) {
			$data['testimonials_show_path'] = $this->config->get('testimonials_show_path');
		} else {
			$data['testimonials_show_path'] = '1';
		}

		if (isset($this->request->post['testimonials_num_columns'])) {
			$data['testimonials_num_columns'] = $this->request->post['testimonials_num_columns'];
		} elseif ($this->config->has('testimonials_num_columns')) {
			$data['testimonials_num_columns'] = $this->config->get('testimonials_num_columns');
		} else {
			$data['testimonials_num_columns'] = '1';
		}

		if (isset($this->request->post['testimonials_show_image'])) {
			$data['testimonials_show_image'] = $this->request->post['testimonials_show_image'];
		} elseif ($this->config->has('testimonials_show_image')) {
			$data['testimonials_show_image'] = $this->config->get('testimonials_show_image');
		} else {
			$data['testimonials_show_image'] = '1';
		}

		if (isset($this->request->post['testimonials_width'])) {
			$data['testimonials_width'] = $this->request->post['testimonials_width'];
		} elseif ($this->config->has('testimonials_width')) {
			$data['testimonials_width'] = (int)$this->config->get('testimonials_width');
		} else {
			$data['testimonials_width'] = 200;
		}

		if (isset($this->request->post['testimonials_height'])) {
			$data['testimonials_height'] = $this->request->post['testimonials_height'];
		} elseif ($this->config->has('testimonials_height')) {
			$data['testimonials_height'] = (int)$this->config->get('testimonials_height');
		} else {
			$data['testimonials_height'] = 200;
		}

		if (isset($this->request->post['testimonials_seo'])) {
			$data['testimonials_seo'] = $this->request->post['testimonials_seo'];
		} else {
			$data['testimonials_seo'] = $this->config->get('testimonials_seo');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/testimonials_settings', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/testimonials_settings')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['testimonials_path']) < 3) || (utf8_strlen($this->request->post['testimonials_path']) > 64)) {
			$this->error['testimonials_path'] = $this->language->get('error_path');
		}

		$this->load->model('testimonials/url_alias');

		if (!$this->model_testimonials_url_alias->checkUrlAliasIsFree($this->request->post['testimonials_path'], 'tltpath=' . $this->request->post['testimonials_path'])) {
			$this->error['testimonials_path'] = sprintf($this->language->get('error_path_exist'));
		}

		if ($this->request->post['testimonials_show_path']) {
			foreach ($this->request->post['testimonials_path_title'] as $language_id => $value) {
				if ((utf8_strlen($value['path_title']) < 3) || (utf8_strlen($value['path_title']) > 64)) {
					$this->error['testimonials_path_title'][$language_id] = $this->language->get('error_path_title');
				}
			}
		}

		if ($this->request->post['testimonials_show_image']) {
			if (!$this->request->post['testimonials_width'] || ((int)$this->request->post['testimonials_width'] < 1)) {
				$this->error['testimonials_width'] = $this->language->get('error_width');
			}
	
			if (!$this->request->post['testimonials_height'] || ((int)$this->request->post['testimonials_height'] < 1)) {
				$this->error['testimonials_height'] = $this->language->get('error_height');
			}
		}

		return !$this->error;
	}

    public function uninstall() {
		$this->load->model('setting/setting');
		$this->model_setting_setting->deleteSetting('testimonials');
		$this->cache->delete('testimonials');
    }
}