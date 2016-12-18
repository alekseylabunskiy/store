<?php
class ModelTestimonialsTestimonials extends Model {
	public function addTestimonials($data) {
		$this->event->trigger('pre.admin.testimonials.add', $data);

		$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials SET sort_order = '" . (int)$data['sort_order'] . "', image = '" . (isset($data['image']) ? $this->db->escape($data['image']) : '') . "', bottom = '" . (isset($data['bottom']) ? (int)$data['bottom'] : 0) . "', show_title = '" . (isset($data['show_title']) ? (int)$data['show_title'] : 0) . "', status = '" . (int)$data['status'] . "', show_description = '" . (isset($data['show_description']) ? (int)$data['show_description'] : 0) . "'");

		$testimonials_id = $this->db->getLastId();

		foreach ($data['testimonials_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_description SET testimonials_id = '" . (int)$testimonials_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', intro = '" . $this->db->escape($value['intro']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		if (isset($data['testimonials_related'])) {
			foreach ($data['testimonials_related'] as $related_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_related SET testimonials_id = '" . (int)$testimonials_id . "', related_id = '" . (int)$related_id . "'");
			}
		}


		if (isset($data['testimonials_store'])) {
			foreach ($data['testimonials_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_to_store SET testimonials_id = '" . (int)$testimonials_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		if (isset($data['testimonials_layout'])) {
			foreach ($data['testimonials_layout'] as $store_id => $layout_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_to_layout SET testimonials_id = '" . (int)$testimonials_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
			}
		}

		if (isset($data['keyword'])) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_url_alias SET query = 'testimonials_id=" . (int)$testimonials_id . "', keyword = '" . $this->db->escape($data['keyword']) . "'");
		}

		$this->cache->delete('testimonials');

		$this->event->trigger('post.admin.testimonials.add', $testimonials_id);

		return $testimonials_id;
	}

	public function editTestimonials($testimonials_id, $data) {
		$this->event->trigger('pre.admin.testimonials.edit', $data);

		$this->db->query("UPDATE " . DB_PREFIX . "testimonials SET sort_order = '" . (int)$data['sort_order'] . "', image = '" . (isset($data['image']) ? $this->db->escape($data['image']) : '') . "', bottom = '" . (isset($data['bottom']) ? (int)$data['bottom'] : 0) . "', show_title = '" . (isset($data['show_title']) ? (int)$data['show_title'] : 0) . "', status = '" . (int)$data['status'] . "', show_description = '" . (isset($data['show_description']) ? (int)$data['show_description'] : 0) . "' WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_description WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		foreach ($data['testimonials_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_description SET testimonials_id = '" . (int)$testimonials_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', intro = '" . $this->db->escape($value['intro']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_related WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		if (isset($data['testimonials_related'])) {
			foreach ($data['testimonials_related'] as $related_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_related SET testimonials_id = '" . (int)$testimonials_id . "', related_id = '" . (int)$related_id . "'");
			}
		}



		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_to_store WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		if (isset($data['testimonials_store'])) {
			foreach ($data['testimonials_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_to_store SET testimonials_id = '" . (int)$testimonials_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_to_layout WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		if (isset($data['testimonials_layout'])) {
			foreach ($data['testimonials_layout'] as $store_id => $layout_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_to_layout SET testimonials_id = '" . (int)$testimonials_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_url_alias WHERE query = 'testimonials_id=" . (int)$testimonials_id . "'");

		if ($data['keyword']) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_url_alias SET query = 'testimonials_id=" . (int)$testimonials_id . "', keyword = '" . $this->db->escape($data['keyword']) . "'");
		}

		$this->cache->delete('testimonials');

		$this->event->trigger('post.admin.testimonials.edit', $testimonials_id);
	}

	public function copyTestimonials($testimonials_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) WHERE b.testimonials_id = '" . (int)$testimonials_id . "' AND bd.language_id = '" . (int)$this->config->get('config_language_id') . "'");
		if ($query->num_rows) {
			$data = $query->row;

			$data['keyword'] = '';
			$data['status'] = '0';

			$testimonials_descriptions = $this->getTestimonialsDescription($testimonials_id);
			
			foreach ($testimonials_descriptions as $result) {
				$testimonials_description_data[$result['language_id']] = array(
					'language_id'	   => $result['language_id'],
					'title'            => (strlen('Copy of ' . $result['title']) < 255 ? 'Copy of ' . $result['title'] : $result['title']),
					'intro'  	       => $result['intro'],
					'description'      => $result['description'],
					'meta_title'       => $result['meta_title'],
					'meta_description' => $result['meta_description'],
					'meta_keyword'     => $result['meta_keyword'],
				);
			}

			$data['testimonials_description'] = $testimonials_description_data;
			$data['testimonials_related'] = $this->getTestimonialsRelated($testimonials_id);
			$data['testimonials_layout'] = $this->getTestimonialsLayouts($testimonials_id);
			$data['testimonials_store'] = $this->getTestimonialsStores($testimonials_id);

			$this->addTestimonials($data);
		}
	}

	public function deleteTestimonials($testimonials_id) {
		$this->event->trigger('pre.admin.testimonials.delete', $testimonials_id);

		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials WHERE testimonials_id = '" . (int)$testimonials_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_description WHERE testimonials_id = '" . (int)$testimonials_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_related WHERE testimonials_id = '" . (int)$testimonials_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_to_store WHERE testimonials_id = '" . (int)$testimonials_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_to_layout WHERE testimonials_id = '" . (int)$testimonials_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_url_alias WHERE query = 'testimonials_id=" . (int)$testimonials_id . "'");

		$this->cache->delete('testimonials');

		$this->event->trigger('post.admin.testimonials.delete', $testimonials_id);
	}

	public function getTestimonials($testimonials_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT keyword FROM " . DB_PREFIX . "testimonials_url_alias WHERE query = 'testimonials_id=" . (int)$testimonials_id . "') AS keyword FROM " . DB_PREFIX . "testimonials WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		return $query->row;
	}

	public function getTestimonialss($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

			if (!empty($data['filter_title'])) {
				$sql .= " AND bd.title LIKE '%" . $this->db->escape($data['filter_title']) . "%'";
			}

			if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
				$sql .= " AND b.status = '" . (int)$data['filter_status'] . "'";
			}

			$sort_data = array(
				'bd.title',
				'b.status',
				'b.sort_order'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY bd.title";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC";
			} else {
				$sql .= " ASC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}

			$query = $this->db->query($sql);

			return $query->rows;
		} else {
			$testimonials_data = $this->cache->get('testimonials.' . (int)$this->config->get('config_language_id'));

			if (!$testimonials_data) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY bd.title");

				$testimonials_data = $query->rows;

				$this->cache->set('testimonials.' . (int)$this->config->get('config_language_id'), $testimonials_data);
			}

			return $testimonials_data;
		}
	}

	public function getTestimonialsDescription($testimonials_id) {
		$testimonials_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials_description WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		foreach ($query->rows as $result) {
			$testimonials_description_data[$result['language_id']] = array(
				'language_id'      => $result['language_id'],
				'title'            => $result['title'],
				'intro'  	       => $result['intro'],
				'description'      => $result['description'],
				'meta_title'       => $result['meta_title'],
				'meta_description' => $result['meta_description'],
				'meta_keyword'     => $result['meta_keyword'],
			);
		}

		return $testimonials_description_data;
	}

	public function getTestimonialsRelated($testimonials_id) {
		$testimonials_related_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials_related WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		foreach ($query->rows as $result) {
			$testimonials_related_data[] = $result['related_id'];
		}

		return $testimonials_related_data;
	}



	public function getTestimonialsStores($testimonials_id) {
		$testimonials_store_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials_to_store WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		foreach ($query->rows as $result) {
			$testimonials_store_data[] = $result['store_id'];
		}

		return $testimonials_store_data;
	}

	public function getTestimonialsLayouts($testimonials_id) {
		$testimonials_layout_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials_to_layout WHERE testimonials_id = '" . (int)$testimonials_id . "'");

		foreach ($query->rows as $result) {
			$testimonials_layout_data[$result['store_id']] = $result['layout_id'];
		}

		return $testimonials_layout_data;
	}

	public function getTotalTestimonialss() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "testimonials");

		return $query->row['total'];
	}

	public function getTotalTestimonialssByLayoutId($layout_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "testimonials_to_layout WHERE layout_id = '" . (int)$layout_id . "'");

		return $query->row['total'];
	}
}