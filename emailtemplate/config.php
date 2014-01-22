<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.Overrides
 *
 * @copyright   Copyright (C) 2012 Don Gilbert. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
define('OVERRIDES', dirname(__FILE__).'');

// Use JLoader to register all the classes you want to override
JLoader::register('JMail', OVERRIDES.'/libraries/joomla/mail/mail.php', true);