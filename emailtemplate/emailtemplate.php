<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.Emailtemplate
 *
 * @copyright   Copyright (C) 2014 Mark Boland. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_BASE') or die;

/**
 * System plugin to override core classes terms.
 *
 * @package     Joomla.Plugin
 * @subpackage  System.Emailtemplate
 * @since       3.2
 */
class PlgSystemEmailtemplate extends JPlugin
{
	/**
	* @var boolean
	*/
	protected $autoloadLanguage = true;
	
	/* We do our thing in the __construct method
	 * so that our overridden classes will be
	 * available everywhere
	 */
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);
				
		include_once 'config.php';
	}
}
