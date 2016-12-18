<?php

/* ------------------------------------------------------------------------------------- */
/*  OpenCart ControllerStartupMaintenance (with modififications for the Override Engine) */
/*                                                                                       */
/*  Original file Copyright © 2016 by Daniel Kerr (www.opencart.com)                     */
/*  Modifications Copyright © 2016 by J.Neuhoff (www.mhccorp.com)                        */
/*                                                                                       */
/*  This file is part of OpenCart.                                                       */
/*                                                                                       */
/*  OpenCart is free software: you can redistribute it and/or modify                     */
/*  it under the terms of the GNU General Public License as published by                 */
/*  the Free Software Foundation, either version 3 of the License, or                    */
/*  (at your option) any later version.                                                  */
/*                                                                                       */
/*  OpenCart is distributed in the hope that it will be useful,                          */
/*  but WITHOUT ANY WARRANTY; without even the implied warranty of                       */
/*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                        */
/*  GNU General Public License for more details.                                         */
/*                                                                                       */
/*  You should have received a copy of the GNU General Public License                    */
/*  along with OpenCart.  If not, see <http://www.gnu.org/licenses/>.                    */
/* ------------------------------------------------------------------------------------- */

class ControllerStartupMaintenance extends Controller {
	public function index() {
		if ($this->config->get('config_maintenance')) {
			// Route
			if (isset($this->request->get['route']) && $this->request->get['route'] != 'startup/router') {
				$route = $this->request->get['route'];
			} else {
				$route = $this->config->get('action_default');
			}			

			$ignore = array(
				'common/language/language',
				'common/currency/currency'
			);

			// Show site if logged in as admin
			$this->user = $this->factory->newCart_User($this->registry);

			if ((substr($route, 0, 7) != 'payment' && substr($route, 0, 3) != 'api') && !in_array($route, $ignore) && !$this->user->isLogged()) {
				return new Action('common/maintenance');
			}
		}
	}
}
