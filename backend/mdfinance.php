<?php
/**
 * @package		MDFinance
 * @copyright	Copyright (c)2013 Martijn Hiddink / MardinkWebdesign.com
 * @license		GNU General Public License version 2 or later
 */

defined('_JEXEC') or die();

require_once JPATH_LIBRARIES.'/fof/include.php';

FOFDispatcher::getTmpInstance('com_mdfinance')->dispatch();