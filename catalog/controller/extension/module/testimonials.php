<?php
class ControllerExtensionModuleTestimonials extends Controller {
	public function index($setting) {

        $this->load->language('extension/module/testimonials');


        if (isset($setting['module_description'][$this->config->get('config_language_id')]['title'])) {
			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['show_title'] = $setting['show_title'];
			$data['show_blogs'] = $setting['show_blogs'];
			$data['num_columns'] = $setting['num_columns'];
			$data['show_image'] = $setting['show_image'];

            $data['text_see_all'] = $this->language->get('text_see_all');
            $data['link_see_all'] = $this->url->link('information/contact');

            if (!isset($setting['template'])) {
				$setting['template'] = 'testimonials';
			}
			
			$this->load->model('testimonials/testimonials');
			$this->load->model('setting/setting');
			$this->load->model('tool/image');
			
			if ($this->config->get('testimonials_seo')) {
				require_once(DIR_APPLICATION . 'controller/testimonials/testimonials_seo.php');
				$testimonials_seo = new ControllerTestimonialsTestimonialsSeo($this->registry);
				$this->url->addRewrite($testimonials_seo);
			}
			
			$data['testimonialss'] = array();

            if (isset($setting['tags_to_show'])) {
                $where_tags = $setting['tags_to_show'];
            } else {
                $where_tags = array();
            }

            $blogs_count = $this->model_testimonials_testimonials->countTestimonialss($where_tags);


            $cache_id = md5(http_build_query($setting));
			
			$results = '';

            if (($setting['sort'] == 'sortorder') || ($setting['limit'] > $blogs_count)) {
                $results = $this->cache->get('testimonials.' . $cache_id . '.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'));
            }

            if (!$results) {
                if ($setting['sort'] == 'sortorder') {
                    $results = $this->model_testimonials_testimonials->getTestimonialss($setting['limit'], $where_tags);

                    $this->cache->set('testimonials.' . $cache_id . '.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'), $results);
                } elseif ($setting['limit'] < $blogs_count) {
                    $results = $this->model_testimonials_testimonials->getRandomTestimonialss($setting['limit'], $where_tags);
                } else {
                    $results = $this->model_testimonials_testimonials->getTestimonialss(0, $where_tags);

                    $this->cache->set('testimonials.' . $cache_id . '.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'), $results);
                }
            }


            if ($results) {
				if (isset($this->request->get['tltpath'])) {
					$path = $this->request->get['tltpath'];
				} elseif ($this->config->has('testimonials_path')) {
					$path = $this->config->get('testimonials_path');
				} else {
					$path = 'blogs';
				}

				foreach ($results as $result) {
					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}
					
						$data['testimonialss'][] = array(
							'testimonials_id'  		=> $result['testimonials_id'],
							'thumb'       		=> $image,
                            'title'       		=> html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8'),
                            'intro'       		=> html_entity_decode($result['intro'], ENT_QUOTES, 'UTF-8'),
							'show_description' 	=> ($data['show_blogs'] && $result['show_description'] ? $result['show_description'] : '0'),
							'href'        		=> ($data['show_blogs'] && $result['show_description'] ? $this->url->link('testimonials/testimonials', 'tltpath=' . $path . '&testimonials_id=' . $result['testimonials_id']) : '')
						);

				}

				if (strcmp($setting['template'], 'testimonials') != 0) {

                    $theme = $this->config->get('config_theme');
					//$pathtotpl = DIR_TEMPLATE . $this->config->get($theme . '_directory') . '/template/';

                    $pathtotpl = DIR_TEMPLATE .  $theme. '/template/';

                    //echo $pathtotpl;

					if (file_exists($pathtotpl . 'extension/module/' . $setting['template'] . '.tpl')) {
						$template = 'extension/module/' . $setting['template'];
					} else {
						$template = 'extension/module/testimonials';
					}
				} else {
					$template = 'extension/module/testimonials';
				}

                //return $this->load->view('extension/module/testimonials', $data);

                $data['store_id'] = $this->config->get('config_store_id');
                $data['customisation_general'] = $this->config->get('customisation_general_store');

                return $this->load->view($template, $data);
			}
		}
	}
}