<?php

/* ---------------------------------------------------------------------------------- */
/*  OpenCart library class Language (with modififications for the Override Engine)    */
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

class Language {
	private $default = 'en-gb';
	private $directory;
	private $data = array();
	private static $factory = null;

	public function __construct($directory = '', $factory = null) {
		if (self::$factory==null) {
			self::$factory = $factory;
		}
		$this->directory = $directory;
	}

	public function get($key) {
		return (isset($this->data[$key]) ? $this->data[$key] : $key);
	}
	
	public function set($key, $value) {
		$this->data[$key] = $value;
	}
	
	// Please dont use the below function the Opencart project is thinking getting rid of it.
	public function all() {
		return $this->data;
	}
	
	// Please dont use the below function the Opencart project is thinking getting rid of it.
	public function merge(&$data) {
		array_merge($this->data, $data);
	}
			
	public function load($filename, &$data = array()) {
		if (self::$factory) {
			$_ = self::$factory->loadLanguage($filename, $this->default, $this->directory);
			$this->data = array_merge( $this->data, $_ );
			return $this->data;
		}

		$_ = array();

		$file = DIR_LANGUAGE . 'english/' . $filename . '.php';
		
		// Compatibility code for old extension folders
		$old_file = DIR_LANGUAGE . 'english/' . str_replace('extension/', '', $filename) . '.php';
		
		if (is_file($file)) {
			require($file);
		} elseif (is_file($old_file)) {
			require($old_file);
		}

		$file = DIR_LANGUAGE . $this->default . '/' . $filename . '.php';

		// Compatibility code for old extension folders
		$old_file = DIR_LANGUAGE . $this->default . '/' . str_replace('extension/', '', $filename) . '.php';
		
		if (is_file($file)) {
			require($file);
		} elseif (is_file($old_file)) {
			require($old_file);
		}

		$file = DIR_LANGUAGE . $this->directory . '/' . $filename . '.php';

		// Compatibility code for old extension folders
		$old_file = DIR_LANGUAGE . $this->directory . '/' . str_replace('extension/', '', $filename) . '.php';
		
		if (is_file($file)) {
			require($file);
		} elseif (is_file($old_file)) {
			require($old_file);
		}

		$this->data = array_merge($this->data, $_);

		return $this->data;
	}
}
