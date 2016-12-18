<?php
class ControllerExtensionModuleSpecial extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/special');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_tax'] = $this->language->get('text_tax');

		$data['button_cart'] = $this->language->get('button_cart');
		$data['button_wishlist'] = $this->language->get('button_wishlist');
		$data['button_compare'] = $this->language->get('button_compare');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_product->getProductSpecials($filter_data);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
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
					$rating = $result['rating'];
				} else {
					$rating = false;
				}


/***theme's changes***/
                $data['store_id'] = $this->config->get('config_store_id');
                $data['lang'] = $this->config->get('config_language_id');
                $lang = $this->config->get('config_language_id');
                $store_id = $this->config->get('config_store_id');
                $this->load->model('tool/image');
                $this->load->model('custom/general');

                $data['customisation_slider'] = $this->config->get('customisation_slider_store');
                $data['customisation_general'] = $this->config->get('customisation_general_store');
                $data['customisation_products'] = $this->config->get('customisation_products_store');
                $data['customisation_translation'] = $this->config->get('customisation_translation_store');

                $data['images'] = array();

                if ($result['image']) {
                    $image_quickview = $this->model_tool_image->resize($result['image'],$this->config->get($this->config->get('config_theme') . '_image_quickview_width'), $this->config->get($this->config->get('config_theme') . '_image_quickview_height'));
                } else {
                    $image_quickview = $this->model_tool_image->resize('placeholder.png', $this->config->get($this->config->get('config_theme') . '_image_quickview_width'), $this->config->get($this->config->get('config_theme') . '_image_quickview_height'));
                }
                if ((float)$result['special']) {
                    $discount = '-'.round((($result['price'] - $result['special'])/$result['price'])*100, 0).'%';
                } else {
                    $discount = false;
                }

                $data['additional_images1'] = array();
                $results_images = $this->model_catalog_product->getProductImages($result['product_id']);

                    if ($results_images) {
                        foreach ($results_images as $results_image) {
                            $data['additional_images1'][] = array(
                                'image' => $this->model_tool_image->resize($results_image['image'], $this->config->get($this->config->get('config_theme') . '_image_product_width'), $this->config->get($this->config->get('config_theme') . '_image_product_height')),
                                'image2x' => $this->model_tool_image->resize($results_image['image'], $this->config->get($this->config->get('config_theme') . '_image_product_width')*2, $this->config->get($this->config->get('config_theme') . '_image_product_height')*2)
                            );
                        }
                    } else {
                        $data['additional_images1'] = false;
                    }

                if ($result['manufacturer']) {
                    $brand_logo_path = $this->model_custom_general->getManufacturerImage($result['manufacturer_id']);
                    $brand_logo = $this->model_tool_image->resize($brand_logo_path, $this->config->get($this->config->get('config_theme') . '_image_brand_width'), $this->config->get($this->config->get('config_theme') . '_image_brand_height'));
                    $brand = urlencode($brand_logo);
                } else {
                    $brand = '';
                }

                $stock_text = isset($customisation_translation[$lang]["text_instock"][$store_id]) && $customisation_translation[$lang]["text_instock"][$store_id] != '' ? $customisation_translation[$lang]["text_instock"][$store_id] : 'In stock';

                if ($result['quantity'] <= 0) {
                    $stock = $result['stock_status'];
                } elseif ($this->config->get('config_stock_display')) {
                    $stock = $result['quantity'];
                } else {
                    $stock = $stock_text;
                }

                $data['lookbook'] = $this->load->controller('common/lookbook');
                /***end theme's changes***/
                    
				$data['products'][] = array(
					'product_id'  => $result['product_id'],

                    /***theme's changes***/
                    'width_settings'       => $setting['width'],
                    'height_settings'       => $setting['height'],
                    'short_description'       => $this->model_custom_general->getProductOption($result['product_id'],'short_description',1),
                    'quantity'  => $result['quantity'],
                    'stock_status'  => $result['stock_status'],
                    'brand'  => $brand,
                    'image_quickview'  => $image_quickview,
                    'special_end_date'  => $this->model_custom_general->getDateEnd($result['product_id']),
                    'stock'  => urlencode($stock),
                    'date_available'  => $result['date_available'],
                    'discount'  => $discount,
                    'additional_images'  => $data['additional_images1'],

                    /***end theme's changes***/

                    
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			return $this->load->view('extension/module/special', $data);
		}
	}
}