<?php
class ModelShippingNovaposhta extends Model {
	function getQuote($address) {
		$this->load->language('shipping/novaposhta');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('novaposhta_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if (!$this->config->get('novaposhta_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();

		if ($status) {
			$quote_data = array();

			$quote_data['novaposhta'] = array(
				'code'         => 'novaposhta.novaposhta',
				'title'        => $this->language->get('text_description'),
				'cost'         => 0.00,
				'tax_class_id' => 0,
				'text'         => '(за счет получателя)'//$this->currency->format(0.00)
			);

			$method_data = array(
				'code'       => 'novaposhta',
				'title'      => $this->language->get('text_title'),
				'quote'      => $quote_data,
				'sort_order' => $this->config->get('novaposhta_sort_order'),
				'error'      => false
			);
		}

		return $method_data;
	}

	public function getCities($zone_id)
    {
        $result = [];
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = '" . (int)$zone_id . "' AND status = '1'");

        $query1 = $this->db->query("SELECT * FROM " . DB_PREFIX . "cities_nova_poshta WHERE area LIKE '" . $query->row['code'] . "%'");

        foreach ($query1->rows as $row) {
            $result[] = $row;
        }
        return $result;
    }
}