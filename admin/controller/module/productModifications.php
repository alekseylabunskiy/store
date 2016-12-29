<?php
class ControllerModuleProductModifications extends Controller
{
    public function index()
    {
        //Языковые настройки
        $this->load->language('module/ProductModifications');
        $this->document->setTitle($this->language->get('heading_title'));
        $data['heading_title'] = $this->language->get('heading_title');

        // регистрируем модуль
        $this->load->model('setting/setting');
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('ProductModifications', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $data['success'] = $this->session->data['success'] ;
        }

        //Текущий токен
        $data['token'] = $this->session->data['token'];

        $data['button_cancel'] = $this->language->get('button_cancel');
        $data['button_save'] = $this->language->get('button_save');
        $data['text_edit'] = $this->language->get('text_edit');
        $data['entry_status'] = $this->language->get('entry_status');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');

        //Ошибки
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->request->post['category_status'])) {
            $data['category_status'] = $this->request->post['category_status'];
        } else {
            $data['category_status'] = $this->config->get('category_status');
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
            'href' => $this->url->link('extension/module/productModifications', 'token=' . $this->session->data['token'], true)
        );

        // кнопки
        $data['action'] = $this->url->link('module/productModifications', 'token=' . $this->session->data['token'], true);
        $data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], true);

        // подключаем с админской части шапки колонки слева и футера
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        // передаем данные на отрисовку
        $this->response->setOutput($this->load->view('module/ProductModifications.tpl', $data));
    }


    /**
     * Проверка разрешения на изменение
     */

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'module/ProductModifications')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}