<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');

$profile_url = "/support/community-support/users/" . str_replace(".","&per;",$user->get('username'));
$profile_link = "<a href='/support/community-support/users/" . str_replace(".","&per;",$user->get('username')) . "'>" . htmlspecialchars($user->get('username')) . "</a>";

$user_profile_box = generate_html_for_user_profile_box();

?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form" name='login-form' class="form-vertical" style='margin:0px;'>

	<? echo $user_profile_box; ?>

	<div class="logout-button">

		<div style='text-align:center; padding:10px 0px 0px 0px; margin:10px 0px 0px 0px; border-top:1px solid #ddd;'>
			<a href='<? echo $profile_url; ?>'>View profile</a></li> | 
			<a href='/support/community-support/users/edit-profile'>Edit profile</a> | 
			<a href='' onClick="document.getElementById('login-form').submit(); return false;">Log out</a>
		</div>

		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.logout" />
		<input type="hidden" name="return" value="<?php echo $return; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
