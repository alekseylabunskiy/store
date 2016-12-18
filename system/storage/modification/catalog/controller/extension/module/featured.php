<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_tax'] = $this->language->get('text_tax');

		$data['button_cart'] = $this->language->get('button_cart');
		$data['button_wishlist'] = $this->language->get('button_wishlist');
		$data['button_compare'] = $this->language->get('button_compare');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		if (!empty($setting['product'])) {
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);

			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}


/***theme's changes***/
                    $data['store_id'] = $this->config->get('config_store_id');
                    $data['lang'] = $this->config->get('config_language_id');
                    $lang = $this->config->get('config_language_id');
                    $store_id = $this->config->get('config_store_id');
                    $this->load->model('custom/general');

                    $data['customisation_slider'] = $this->config->get('customisation_slider_store');
                    $data['customisation_general'] = $this->config->get('customisation_general_store');
                    $data['customisation_products'] = $this->config->get('customisation_products_store');
                    $data['customisation_translation'] = $this->config->get('customisation_translation_store');

                    $data['images'] = array();

                    if ($product_info['image']) {
                        $image_quickview = $this->model_tool_image->resize($product_info['image'],$this->config->get($this->config->get('config_theme') . '_image_quickview_width'), $this->config->get($this->config->get('config_theme') . '_image_quickview_height'));
                    } else {
                        $image_quickview = $this->model_tool_image->resize('placeholder.png', $this->config->get($this->config->get('config_theme') . '_image_quickview_width'), $this->config->get($this->config->get('config_theme') . '_image_quickview_height'));
                    }
                    if ((float)$product_info['special']) {
                        $discount = '-'.round((($product_info['price'] - $product_info['special'])/$product_info['price'])*100, 0).'%';
                    } else {
                        $discount = false;
                    }

                    $data['additional_images1'] = array();
                    $results_images = $this->model_catalog_product->getProductImages($product_info['product_id']);

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


                    if ($product_info['manufacturer']) {
                        $brand_logo_path = $this->model_custom_general->getManufacturerImage($product_info['manufacturer_id']);
                        $brand_logo = $this->model_tool_image->resize($brand_logo_path, $this->config->get($this->config->get('config_theme') . '_image_brand_width'), $this->config->get($this->config->get('config_theme') . '_image_brand_height'));
                        $brand = urlencode($brand_logo);
                    } else {
                        $brand = '';
                    }

                    $stock_text = isset($customisation_translation[$lang]["text_instock"][$store_id]) && $customisation_translation[$lang]["text_instock"][$store_id] != '' ? $customisation_translation[$lang]["text_instock"][$store_id] : 'In stock';

                    if ($product_info['quantity'] <= 0) {
                        $stock = $product_info['stock_status'];
                    } elseif ($this->config->get('config_stock_display')) {
                        $stock = $product_info['quantity'];
                    } else {
                        $stock = $stock_text;
                    }

                    $data['lookbook'] = $this->load->controller('common/lookbook');
                    /***end theme's changes***/
                    
					$data['products'][] = array(
						'product_id'  => $product_info['product_id'],

                        /***theme's changes***/
                        'width_settings'       => $setting['width'],
                        'height_settings'       => $setting['height'],
                        'short_description'       => $this->model_custom_general->getProductOption($product_info['product_id'],'short_description',1),
                        'quantity'  => $product_info['quantity'],
                        'stock_status'  => $product_info['stock_status'],
                        'brand'  => $brand,
                        'image_quickview'  => $image_quickview,
                        'special_end_date'  => $this->model_custom_general->getDateEnd($product_info['product_id']),
                        'stock'  => urlencode($stock),
                        'date_available'  => $product_info['date_available'],
                        'discount'  => $discount,
                        'additional_images'  => $data['additional_images1'],

                        /***end theme's changes***/

                    
						'thumb'       => $image,
						'name'        => $product_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,
						'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					);
				}
			}
		}

		if ($data['products']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}