<?php
class ControllerExtensionModuleCustomisation extends Controller {

    private $error = array();
    public function index() {
		$this->load->language('extension/module/customisation');

		$this->document->setTitle($this->language->get('heading_title_normal'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('customisation', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
        $data['success'] = $this->language->get('text_success');
        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_title'] = $this->language->get('entry_title');
        $data['entry_description'] = $this->language->get('entry_description');
        $data['text_yes'] = $this->language->get('text_yes');
        $data['text_no'] = $this->language->get('text_no');

        $data['entry_status'] = $this->language->get('entry_status');

		$data['help_code'] = $this->language->get('help_code');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

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
			'href' => $this->url->link('extension/module/customisation', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/module/customisation', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

        /*variables for theme */
        $data['mproduct'] = $this->url->link('catalog/mproduct', 'token=' . $this->session->data['token'], true);
        $data['mcategory'] = $this->url->link('catalog/mcategory', 'token=' . $this->session->data['token'], true);

        /* stores */
        if (isset($this->request->post['customisation_general_store'])) {
            $data['customisation_general_store'] = $this->request->post['customisation_general_store'];
        } else {
            $data['customisation_general_store'] = $this->config->get('customisation_general_store');
        }

        if (isset($this->request->post['customisation_products_store'])) {
            $data['customisation_products_store'] = $this->request->post['customisation_products_store'];
        } else {
            $data['customisation_products_store'] = $this->config->get('customisation_products_store');
        }
        if (isset($this->request->post['customisation_slider_store'])) {
            $data['customisation_slider_store'] = $this->request->post['customisation_slider_store'];
        } else {
            $data['customisation_slider_store'] = $this->config->get('customisation_slider_store');
        }
        if (isset($this->request->post['customisation_additional_store'])) {
            $data['customisation_additional'] = $this->request->post['customisation_additional_store'];
        } else {
            $data['customisation_additional_store'] = $this->config->get('customisation_additional_store');
        }
        if (isset($this->request->post['customisation_topslider_store'])) {
            $data['customisation_topslider_store'] = $this->request->post['customisation_topslider_store'];
        } else {
            $data['customisation_topslider_store'] = $this->config->get('customisation_topslider_store');
        }
        if (isset($this->request->post['customisation_translation_store'])) {
            $data['customisation_translation_store'] = $this->request->post['customisation_translation_store'];
        } else {
            $data['customisation_translation_store'] = $this->config->get('customisation_translation_store');
        }
        if (isset($this->request->post['customisation_blog_store'])) {
            $data['customisation_blog_store'] = $this->request->post['customisation_blog_store'];
        } else {
            $data['customisation_blog_store'] = $this->config->get('customisation_blog_store');
        }


        /* stores */



        $this->load->model('tool/image');

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        if (isset($this->request->post['customisation_rightimg'])) {
            $data['customisation_rightimg'] = $this->request->post['customisation_rightimg'];
        } else {
            $data['customisation_rightimg'] = $this->config->get('customisation_rightimg');
        }
        if (isset($this->request->post['customisation_rightimg']) && is_file(DIR_IMAGE . $this->request->post['customisation_rightimg'])) {
            $data['rightimg'] = $this->model_tool_image->resize($this->request->post['customisation_rightimg'], 100, 100);
        } elseif ($this->config->get('customisation_rightimg') && is_file(DIR_IMAGE . $this->config->get('customisation_rightimg'))) {
            $data['rightimg'] = $this->model_tool_image->resize($this->config->get('customisation_rightimg'), 100, 100);
        } else {
            $data['rightimg'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        if (isset($this->request->post['customisation_bgall'])) {
            $data['customisation_bgall'] = $this->request->post['customisation_bgall'];
        } else {
            $data['customisation_bgall'] = $this->config->get('customisation_bgall');
        }
        if (isset($this->request->post['customisation_bgall']) && is_file(DIR_IMAGE . $this->request->post['customisation_bgall'])) {
            $data['bgall'] = $this->model_tool_image->resize($this->request->post['customisation_bgall'], 100, 100);
        } elseif ($this->config->get('customisation_bgall') && is_file(DIR_IMAGE . $this->config->get('customisation_bgall'))) {
            $data['bgall'] = $this->model_tool_image->resize($this->config->get('customisation_bgall'), 100, 100);
        } else {
            $data['bgall'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }
        if (isset($this->request->post['customisation_contentbg'])) {
            $data['customisation_contentbg'] = $this->request->post['customisation_contentbg'];
        } else {
            $data['customisation_contentbg'] = $this->config->get('customisation_contentbg');
        }
        if (isset($this->request->post['customisation_contentbg']) && is_file(DIR_IMAGE . $this->request->post['customisation_contentbg'])) {
            $data['contentbg'] = $this->model_tool_image->resize($this->request->post['customisation_contentbg'], 100, 100);
        } elseif ($this->config->get('customisation_contentbg') && is_file(DIR_IMAGE . $this->config->get('customisation_contentbg'))) {
            $data['contentbg'] = $this->model_tool_image->resize($this->config->get('customisation_contentbg'), 100, 100);
        } else {
            $data['contentbg'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        if (isset($this->request->post['customisation_delimeter'])) {
            $data['customisation_delimeter'] = $this->request->post['customisation_delimeter'];
        } else {
            $data['customisation_delimeter'] = $this->config->get('customisation_delimeter');
        }
        if (isset($this->request->post['customisation_delimeter']) && is_file(DIR_IMAGE . $this->request->post['customisation_delimeter'])) {
            $data['delimeter'] = $this->model_tool_image->resize($this->request->post['customisation_delimeter'], 100, 100);
        } elseif ($this->config->get('customisation_delimeter') && is_file(DIR_IMAGE . $this->config->get('customisation_delimeter'))) {
            $data['delimeter'] = $this->model_tool_image->resize($this->config->get('customisation_delimeter'), 100, 100);
        } else {
            $data['delimeter'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        /* information pages */
        $this->load->model('catalog/information');

        //var_dump($this->model_catalog_information->getInformations());

        foreach ($this->model_catalog_information->getInformations() as $result) {
            $data['information_pages'][] = array(
                'title' => $result['title'],
                'information_id' => $result['information_id'],
                'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
            );
        }
        /* end information pages */

        $data['token'] = $this->session->data['token'];

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        /*end variables for theme */


        /* stores adding */
        $this->load->model('setting/store');
        $data['stores'] = $this->model_setting_store->getStores();


/*
        $stores = $data['stores'];

        foreach ($stores as $store) {

        }
        */


        /* end stores adding */

        if (isset($this->request->post['customisation_status'])) {
			$data['customisation_status'] = $this->request->post['customisation_status'];
		} else {
			$data['customisation_status'] = $this->config->get('customisation_status');
		}

        $this->document->addScript($this->config->get('config_url').'catalog/view/bs-colorpicker/js/colorpicker.js');
        $this->document->addStyle($this->config->get('config_url').'catalog/view/bs-colorpicker/css/colorpicker.css');
        $this->document->addStyle($this->config->get('config_url').'view/stylesheet/theme.css');

        //$data['config_url'] = $this->config->get('config_url');


        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/customisation', $data));
	}

    public function install(){
        $this->load->model('catalog/mproduct');
        $this->model_catalog_mproduct->createColumnsInProducts();

        $this->load->model('catalog/mcategory');
        $this->model_catalog_mcategory->createColumnsInCategories();

        $this->load->model('custom/database');
        $this->model_custom_database->createTables();

        $this->model_custom_database->makeSettings();

        $this->load->model('setting/setting');
        $this->session->data['success'] = $this->language->get('text_success');

    }

    protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/customisation')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
	}
}