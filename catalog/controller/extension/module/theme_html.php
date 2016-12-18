<?php
class ControllerExtensionModuleThemeHTML extends Controller {
	public function index($setting) {

        /* find category id */
        $this->load->model('catalog/category');
        if (isset($this->request->get['path'])) {
            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $path = '';

            $parts = explode('_', (string)$this->request->get['path']);

            $category_id = (int)array_pop($parts);

            foreach ($parts as $path_id) {
                if (!$path) {
                    $path = (int)$path_id;
                } else {
                    $path .= '_' . (int)$path_id;
                }

                $category_info = $this->model_catalog_category->getCategory($path_id);

                if ($category_info) {
                    $data['breadcrumbs'][] = array(
                        'text' => $category_info['name'],
                        'href' => $this->url->link('product/category', 'path=' . $path . $url)
                    );
                }
            }
        } else {
            $category_id = 0;
        }

        $option = 'html_description';

        $column_exists_option = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "category_description LIKE '".$option."' ");

        if ($column_exists_option->num_rows) {
            $query = $this->db->query("SELECT DISTINCT html_description FROM " . DB_PREFIX . "category_description cd WHERE cd.category_id = '" . (int)$category_id . "' ");
            if ($query->rows) {
                $category_option = $query->row["$option"];
            } else {
                $category_option = '';
            }
        } else {
            $category_option = '';
        }
        $data['custom_block'] = html_entity_decode($category_option, ENT_QUOTES, 'UTF-8');
        $data['custom'] = $setting['custom'];


        if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
            $data['left'] = $setting['left'];


            return $this->load->view('extension/module/theme_html', $data);
		}
	}
}