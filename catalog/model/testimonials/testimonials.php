<?php
class ModelTestimonialsTestimonials extends Model {
	public function getTestimonials($testimonials_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE b.testimonials_id = '" . (int)$testimonials_id . "' AND bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b.status = '1' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		return $query->row;
	}

    public function getTestimonialss($limit = 0, $where_tags = array()) {
        $where = '';

        if ($where_tags) {
            $i = 1;

            foreach ($where_tags as $where_tag) {
                if ($i < count($where_tags)) {
                    $where .= $where_tag . ', ';
                } else {
                    $where .= $where_tag;
                }
                $i++;
            }
        }

        if ($where) {
            if ($limit == 0) {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' GROUP BY b.testimonials_id ORDER BY b.sort_order, LCASE(bd.title) ASC");
            } else {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' GROUP BY b.testimonials_id ORDER BY b.sort_order, LCASE(bd.title) ASC LIMIT " . (int)$limit);
            }
        } else {
            if ($limit == 0) {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' ORDER BY b.sort_order, LCASE(bd.title) ASC");
            } else {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' ORDER BY b.sort_order, LCASE(bd.title) ASC LIMIT " . (int)$limit);
            }
        }

        return $query->rows;
    }

    public function getTestimonialssBottom() {
        $blogs = $this->cache->get('testimonials.bottomblogs.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'));

        if (!$blogs) {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE b.bottom = '1' AND bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' ORDER BY b.sort_order, LCASE(bd.title) ASC");
            $blogs = $query->rows;

            $this->cache->set('testimonials.bottomblogs.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'), $blogs);

        }

        return $blogs;
    }

    public function getRandomTestimonialss($limit = 0, $where_tags = array()) {
        $where = '';

        if ($where_tags) {
            $i = 1;

            foreach ($where_tags as $where_tag) {
                if ($i < count($where_tags)) {
                    $where .= $where_tag . ', ';
                } else {
                    $where .= $where_tag;
                }
                $i++;
            }
        }

        if ($where) {
            if ($limit == 0) {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' GROUP BY b.testimonials_id ORDER BY b.sort_order, LCASE(bd.title) ASC");
            } else {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id)  WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' GROUP BY b.testimonials_id ORDER BY RAND() LIMIT " . (int)$limit);
            }
        } else {
            if ($limit == 0) {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' ORDER BY b.sort_order, LCASE(bd.title) ASC");
            } else {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' ORDER BY RAND() LIMIT " . (int)$limit);
            }
        }

        return $query->rows;
    }

    public function getTestimonialsRelated($testimonials_id) {
		$query = $this->db->query("SELECT related_id FROM " . DB_PREFIX . "testimonials_related br LEFT JOIN " . DB_PREFIX . "product p ON (br.related_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE br.testimonials_id = '" . (int)$testimonials_id . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.sort_order");

		return $query->rows;
	}

	public function getTestimonialsLayoutId($testimonials_id) {
		$query = $this->db->query("SELECT layout_id FROM " . DB_PREFIX . "testimonials_to_layout WHERE testimonials_id = '" . (int)$testimonials_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return $query->row['layout_id'];
		} else {
			return 0;
		}
	}


    public function countTestimonialss($where_tags = array()) {
        if (!$where_tags) {
            $count = $this->cache->get('testimonials.count.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'));

            if (!$count) {
                $query = $this->db->query("SELECT COUNT(DISTINCT b.testimonials_id) AS total FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1'");

                $count = $query->row['total'];

                $this->cache->set('testimonials.count.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id'), $count);
            }
        } else {
            $where = '';
            $i = 1;

            foreach ($where_tags as $where_tag) {
                if ($i < count($where_tags)) {
                    $where .= $where_tag . ', ';
                } else {
                    $where .= $where_tag;
                }
                $i++;
            }

            $query = $this->db->query("SELECT COUNT(DISTINCT b.testimonials_id) AS total FROM " . DB_PREFIX . "testimonials b LEFT JOIN " . DB_PREFIX . "testimonials_description bd ON (b.testimonials_id = bd.testimonials_id) LEFT JOIN " . DB_PREFIX . "testimonials_to_store b2s ON (b.testimonials_id = b2s.testimonials_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1' ");

            $count = $query->row['total'];
        }

        return $count;
    }



}
