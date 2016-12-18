<?php
class ControllerTestimonialsTestimonials extends Controller {
	public function index() {
		$this->load->language('testimonials/testimonials');

		$this->load->model('testimonials/testimonials');
		$this->load->model('catalog/product');
		$this->load->model('setting/setting');
		$this->load->model('tool/image');

		if ($this->config->get('testimonials_seo')) {
			require_once(DIR_APPLICATION . 'controller/testimonials/testimonials_seo.php');
			$testimonials_seo = new ControllerTestimonialsTestimonialsSeo($this->registry);
			$this->url->addRewrite($testimonials_seo);
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['tltpath'])) {
			$path = $this->request->get['tltpath'];
		} elseif ($this->config->has('testimonials_path')) {
			$path = $this->config->get('testimonials_path');
		} else {
			$path = 'blogs';
		}
		
		$data['show_path'] = $this->config->get('testimonials_show_path');

		if ($data['show_path']) {
			if ($this->config->has('testimonials_path_title')) {
				$tmp_title = $this->config->get('testimonials_path_title');
				$root_title = $tmp_title[$this->config->get('config_language_id')]['path_title'];
			} else {
				$root_title = $this->language->get('text_title');
			}
			
		}

		if (isset($this->request->get['testimonials_id'])) {
			$testimonials_id = (int)$this->request->get['testimonials_id'];
		} else {
			$testimonials_id = 0;
		}

		$testimonials_info = $this->model_testimonials_testimonials->getTestimonials($testimonials_id);

		if ($testimonials_info) {
			$this->document->setTitle($testimonials_info['meta_title']);
			$this->document->setDescription($testimonials_info['meta_description']);
			$this->document->setKeywords($testimonials_info['meta_keyword']);
			$this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');

			$this->document->addLink($this->url->link('testimonials/testimonials', 'tltpath=' . $path . '&testimonials_id=' . $testimonials_id), 'canonical');

			$data['breadcrumbs'][] = array(
				'text' => strip_tags(html_entity_decode($testimonials_info['title'], ENT_QUOTES, 'UTF-8')),
				'href' => $this->url->link('testimonials/testimonials', 'tltpath=' . $path . '&testimonials_id=' .  $testimonials_id)
			);
			
			$data['heading_title'] = html_entity_decode($testimonials_info['title'], ENT_QUOTES, 'UTF-8');
			$data['show_title'] = $testimonials_info['show_title'];

			if ($this->request->server['HTTPS']) {
				$data['blog_image'] = $this->config->get('config_ssl') . 'image/' . $testimonials_info['image'];
			} else {
				$data['blog_image'] = $this->config->get('config_url') . 'image/' . $testimonials_info['image'];
			}
			
			$data['description'] = html_entity_decode($testimonials_info['description'], ENT_QUOTES, 'UTF-8');
			$data['button_cart'] = $this->language->get('button_cart');
			$data['button_wishlist'] = $this->language->get('button_wishlist');
			$data['button_compare'] = $this->language->get('button_compare');
			$data['text_related'] = $this->language->get('text_related');
			$data['text_tax'] = $this->language->get('text_tax');
			$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

			$data['products'] = array();

			$testimonials_relateds = $this->model_testimonials_testimonials->getTestimonialsRelated($testimonials_id);

			foreach ($testimonials_relateds as $testimonials_related) {
				$result = $this->model_catalog_product->getProduct($testimonials_related["related_id"]);
				
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get($this->config->get('config_theme') . '_image_related_width'), $this->config->get($this->config->get('config_theme') . '_image_related_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get($this->config->get('config_theme') . '_image_related_width'), $this->config->get($this->config->get('config_theme') . '_image_related_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}



			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

            /* theme's changes */
            $store_id = $this->config->get('config_store_id');
            $data['layoutid'] = 1;
            if (isset($customisation_general["layoutid"][$store_id])) {$data['layoutid'] = $customisation_general["layoutid"][$store_id];}

            $this->response->setOutput($this->load->view('testimonials/testimonials', $data));
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('testimonials/testimonials', 'tltpath=' . $path . '&testimonials_id=' . $testimonials_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['button_continue'] = $this->language->get('button_continue');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}