<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('bootstrap.tooltip');

if( $_SERVER['REQUEST_URI'] == "/support/login" )
	return;
?>

<h3>Support Center Login</h3>
<div class='login_with_facebook'><a href='https://www.inmotionhosting.com/support/login-with-facebook'>Login with Facebook</a></div>
<div class='login_with_google'><a href='https://www.inmotionhosting.com/support/login-with-google'>Login with Google+</a></div>
<? // <div class='login_with_twitter'><a href='/support/login-with-twitter'>Login with Twitter</a></div> ?>
<? // <div class='login_with_amp'><a href='/support/login-with-amp'>Login with AMP</a></div> ?>
<div style='font-size:11px; width:100px; float:right; line-height:14px;'><a href='/support/login'>Can I login without using Social Media?</a></div>
<div style='clear:both;'></div>


<?

$session = JFactory::getSession();

$redirect_url = $_SERVER['REQUEST_URI'];
if( substr_count($redirect_url,"/support/login") < 1 )
	$session->set('new_after_login_url',$redirect_url);

?>
