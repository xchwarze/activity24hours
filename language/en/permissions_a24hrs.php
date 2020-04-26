<?php
/**
 *
 * @package - Activity 24 hours. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020 Rich McGirr (RMcGirr83)
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACL_U_A24HRS_VIEW'	=> 'Allow to view the “24 hour activity stats” extension',
));
