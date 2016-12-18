<?php

/* ---------------------------------------------------------------------------------- */
/*  OpenCart Action (with support for the Override Engine)                            */
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

class Action {
	private $id;
	private $route;
	private $method = 'index';

	private $properties = array();
	private static $factory = null;


	public function __construct($route,$factory=null) {
		if (self::$factory == null) {
			self::$factory=$factory;
		}

		$this->id = $route;
		
		// if there is a factory find the action properties through there
		if (self::$factory) {
			$this->properties = self::$factory->actionProperties($route);
			return;
		}
			
		$parts = explode('/', preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route));

		// Break apart the route
		while ($parts) {
			$file = DIR_APPLICATION . 'controller/' . implode('/', $parts) . '.php';

			if (is_file($file)) {
				$this->route = implode('/', $parts);		

				break;
			} else {
				$this->method = array_pop($parts);
			}
		}
	}

	public function getId() {
		return $this->id;
	}

	public function execute($registry, array $args = array()) {
		// Stop any magical methods being called
		if (substr($this->method, 0, 2) == '__') {
			return new \Exception('Error: Calls to magic methods are not allowed!');
		}

		$route = isset($this->properties['route']) ? $this->properties['route'] : $this->route;
		$file = isset($this->properties['file']) ? $this->properties['file'] : DIR_APPLICATION . 'controller/' . $route . '.php';
		$class = isset($this->properties['class']) ? $this->properties['class'] : $class = 'Controller' . preg_replace('/[^a-zA-Z0-9]/', '', $route);
		$method = isset($this->properties['method']) ? $this->properties['method'] : $this->method;

		// Initialize the class
		if (is_file($file)) {
			$factory = $registry->get('factory');
			if ($factory) {
				$controller = $factory->newController( $file, $class );
			} else {
				include_once($file);
				$controller = new $class($registry);
			}
		} else {
			return new \Exception('Error: Could not call ' . $route . '/' . $method . '!');
		}

		$class = get_class($controller);
		$reflection = new ReflectionClass($class);
		
		if ($reflection->hasMethod($method) && $reflection->getMethod($method)->getNumberOfRequiredParameters() <= count($args)) {
			return call_user_func_array(array($controller, $method), $args);
		} else {
			return new \Exception('Error: Could not call ' . $route . '/' . $method . '!');
		}
	}
}
