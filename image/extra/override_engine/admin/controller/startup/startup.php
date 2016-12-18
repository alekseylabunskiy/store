<?php

/* ---------------------------------------------------------------------------------- */
/*  OpenCart ControllerStartupStartup (with modififications for the Override Engine)  */
/*                                                                                    */
/*  Original file Copyright © 2016 by Daniel Kerr (www.opencart.com)                  */
/*  Modifications Copyright © 2016 by J.Neuhoff (www.mhccorp.com)                     */
/*                                                                                    */
/*  This file is part of OpenCart.                                                    */
/*                                                                                    */
/*  OpenCart is free software: you can redistribute it and/or modify                  */
/*  it under the terms of the GNU General Public License as published by              */
/*  the Free Software Foundation, either version 3 of the License, or                 */
/*  (at your option) any later version.                                               */
/*                                                                                    */
/*  OpenCart is distributed in the hope that it will be useful,                       */
/*  but WITHOUT ANY WARRANTY; without even the implied warranty of                    */
/*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                     */
/*  GNU General Public License for more details.                                      */
/*                                                                                    */
/*  You should have received a copy of the GNU General Public License                 */
/*  along with OpenCart.  If not, see <http://www.gnu.org/licenses/>.                 */
/* ---------------------------------------------------------------------------------- */

class ControllerStartupStartup extends Controller {
	public function index() {
		// Settings
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '0'");
		
		foreach ($query->rows as $setting) {
			if (!$setting['serialized']) {
				$this->config->set($setting['key'], $setting['value']);
			} else {
				$this->config->set($setting['key'], json_decode($setting['value'], true));
			}
		}
		
		// Language
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "language` WHERE code = '" . $this->db->escape($this->config->get('config_admin_language')) . "'");
		
		if ($query->num_rows) {
			$this->config->set('config_language_id', $query->row['language_id']);
		}
		
		// Language
		$language = $this->factory->newLanguage($this->config->get('config_admin_language'));
		$language->load($this->config->get('config_admin_language'));
		$this->registry->set('language', $language);
		
		// Customer
		$this->registry->set('customer', $this->factory->newCart_Customer($this->registry));
		
		// Affiliate
		$this->registry->set('affiliate', $this->factory->newCart_Affiliate($this->registry));

		// Currency
		$this->registry->set('currency', $this->factory->newCart_Currency($this->registry));
	
		// Tax
		$this->registry->set('tax', $this->factory->newCart_Tax($this->registry));
		
		if ($this->config->get('config_tax_default') == 'shipping') {
			$this->tax->setShippingAddress($this->config->get('config_country_id'), $this->config->get('config_zone_id'));
		}

		if ($this->config->get('config_tax_default') == 'payment') {
			$this->tax->setPaymentAddress($this->config->get('config_country_id'), $this->config->get('config_zone_id'));
		}

		$this->tax->setStoreAddress($this->config->get('config_country_id'), $this->config->get('config_zone_id'));

		// Weight
		$this->registry->set('weight', $this->factory->newCart_Weight($this->registry));
		
		// Length
		$this->registry->set('length', $this->factory->newCart_Length($this->registry));
		
		// Cart
		$this->registry->set('cart', $this->factory->newCart_Cart($this->registry));
		
		// Encryption
		$this->registry->set('encryption', $this->factory->newEncryption($this->config->get('config_encryption')));
		
		// OpenBay Pro
		$this->registry->set('openbay', $this->factory->newOpenbay($this->registry));					
	}
}