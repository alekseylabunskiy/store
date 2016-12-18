<?php
class ModelTestimonialsUrlAlias extends Model {
	public function getUrlAlias($keyword) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials_url_alias WHERE keyword = '" . $this->db->escape($keyword) . "'");

		return $query->row;
	}
	
	public function checkUrlAliasIsFree($keyword, $query = '') {
		$testimonials_alias = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials_url_alias WHERE keyword = '" . $this->db->escape($keyword) . "'");

		$oc_alias = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_alias WHERE keyword = '" . $this->db->escape($keyword) . "'");

		if ($testimonials_alias->num_rows == 0 && $oc_alias->num_rows == 0) {
			return true;
		} elseif ($oc_alias->num_rows != 0) {
			return false;
		} elseif ($testimonials_alias->row['query'] == $query) {
			return true;
		} else {
			return false;
		}
	}

	public function saveUrlAlias($keyword, $query) {
		$sqlquery = $this->db->query("SELECT * FROM " . DB_PREFIX . "testimonials_url_alias WHERE query = '" . $query . "' OR keyword = '" . $keyword . "'");
		
		if ($sqlquery->num_rows == 0) {
			$result = $this->db->query("INSERT INTO " . DB_PREFIX . "testimonials_url_alias SET query = '" . $query . "', keyword = '" . $keyword . "'");

			return $result;
		} else {
			return false;
		}
	}

	public function deleteUrlAlias($query) {
		$result = $this->db->query("DELETE FROM " . DB_PREFIX . "testimonials_url_alias WHERE query LIKE '%" . $query . "%'");

		return $result;
	}
}