<?php

/* ---------------------------------------------------------------------------------- */
/*  OpenCart ModelDecorator (used by the the Override Engine)                         */
/*                                                                                    */
/*  Copyright © 2016 by J.Neuhoff (www.mhccorp.com)                                   */
/*                                                                                    */
/*  This file is part of the Override Engine for OpenCart.                            */
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

class ModelDecorator {

	protected $object;
	protected $route;


	public function __construct( $object, $route ) {
		$this->object = $object; // model instance
		$this->route = $route;   // route of the class, e.g. 'catalog/product'
	}


	public function __get( $key ) {
		return $this->object->__get( $key );
	}


	public function __set( $key, $val ) {
		$this->object->__set( $key, $val );
	}


	protected function before( $method, $arguments ) {
		// do an event trigger before calling the method
		$route = $this->route.'/'.$method;
		$trigger = 'model/'.$this->route.'/'.$method.'/before';
		$result = $this->event->trigger($trigger, array_merge(array(&$route), $arguments));
		if ($result) {
			return $result;
		}	
		return null;
	}


	protected function after( $method, $arguments, &$output ) {
		// do an event trigger after having called the method
		$route = $this->route.'/'.$method;
		$trigger = 'model/'.$this->route.'/'.$method.'/after';
		$result = $this->event->trigger($trigger, array_merge(array(&$route, &$output), $arguments));
		if ($result) {
			return $result;
		}
		return null;
	}


	public function __call( $method, $arguments ) {
	
		// make sure it's a callable method
		if (!is_callable(array($this->object, $method))) {
			trigger_error("Error: Unable to call public method '$method' in class '" . get_class($this->object) . "'");
			exit;
		}

		// call pre-action 
		$result = $this->before( $method, $arguments );
		if ($result) {
			return $result;
		}

		// call the method
		$output = call_user_func_array(array($this->object, $method), $arguments);

		// call post-action
		$result = $this->after( $method, $arguments, $output );
		if ($result) {
			return $result;
		}
		
		return $output;
	}
}
