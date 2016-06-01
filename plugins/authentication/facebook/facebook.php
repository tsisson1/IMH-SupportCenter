<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Authentication.gmail
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * GMail Authentication Plugin
 *
 * @package     Joomla.Plugin
 * @subpackage  Authentication.gmail
 * @since       1.5
 */
class plgAuthenticationFacebook extends JPlugin
{
	/**
	 * This method should handle any authentication and report back to the subject
	 *
	 * @access	public
	 * @param   array	$credentials Array holding the user credentials
	 * @param	array   $options	Array of extra options
	 * @param	object	$response	Authentication response object
	 * @return	boolean
	 * @since 1.5
	 */
public function onUserAuthenticate($credentials, $options, &$response)
        {
                $db = JFactory::getDbo();






                if($_POST['login_type'] == "fb")
                {
                        $query = "SELECT * FROM #__login_facebook_userdata WHERE `state` = '" . addslashes($_POST['state']) . "' AND `code` = '" . addslashes($_POST['code']) . "' LIMIT 1;";
                        $db->setQuery($query);
                        $results = $db->loadObjectList();

			if(!$results)
				die('fblgnr');

                        $user_details = json_decode($results[0]->user_details);

			if( strlen($results[0]->email) < 5 )
				die('fble1');

			// do we need to setup a new username?
			if($_POST['new_username'] AND strlen($_POST['new_username']) > 5 AND strlen($_POST['new_username']) < 30)
			{
				if( username_already_exists($_POST['new_username']) )
				{
					die('fble2');
				}
				else
				{
					$query = "UPDATE #__login_facebook_userdata SET `username` = '" . addslashes($_POST['new_username']) . "' WHERE `facebook_id` = '" . $results[0]->facebook_id . "' LIMIT 1;";
					$db->setQuery($query);
					// $update_username = $db->loadObjectList(); // this is an update, not select
					try { $update_username = $db->execute(); } catch (Exception $e) { die('nq12181200'); }
					$username_for_login = addslashes($_POST['new_username']);
				}
			}
			else
			{
				$username_for_login = addslashes($results[0]->username);
			}

			// log the user in
                        $response->status               = JAuthentication::STATUS_SUCCESS;
                        $response->error_message = '';
                        $response->username = htmlspecialchars($username_for_login);
                        $response->fullname = $user_details->name;
                        $response->email = $user_details->email;

			// clear any prior state and code data
                        $query = "UPDATE #__login_facebook_userdata SET `state` = '', `code` = '' WHERE `state` = '" . addslashes($_POST['state']) . "' AND `code` = '" . addslashes($_POST['code']) . "';";
                        $db->setQuery($query);
                        // $results = $db->loadObjectList(); // this is an update, not select
			try { $result = $db->execute(); } catch (Exception $e) { die('nq12181158'); }
                }






                elseif($_POST['login_type'] == "gplus")
                {
                        $query = "SELECT * FROM #__login_google_userdata WHERE `latest_code` = '" . addslashes($_POST['code']) . "' LIMIT 1;";

                        $db->setQuery($query);
                        $results = $db->loadObjectList();

			// // echo "<pre>"; print_r($results); echo "</pre>";
                        // // echo "<pre>"; print_r($_POST); echo "</pre>";
			// // die();

			// do we need to configure a new username?
			if( $results[0]->username == "" AND strlen($_POST['new_username']) > 5 AND strlen($_POST['new_username']) < 30 )
			{
				// does the new username already exist?
				$query = "SELECT count(`id`) as 'current_usernames' FROM #__users WHERE `username` = '" . addslashes($_POST['new_username']) . "';";
				$db->setQuery($query);
	                        $results_current_usernames = $db->loadObjectList();
				if($results_current_usernames[0]->current_usernames == 0)
				{
					// set the new username and erase the latest_code value
					$query = "UPDATE #__login_google_userdata set `username` = '" . addslashes($_POST['new_username']) . "', `latest_code` = '' WHERE `latest_code` = '" . addslashes($results[0]->latest_code) . "' LIMIT 1;";
					$db->setQuery($query);
					try{
						$result = $db->query();
						$set_username = addslashes($_POST['new_username']);
					} catch (Exception $e) { };
				}
				else
				{
					$response->status               = JAuthentication::STATUS_FAILURE;
		                        $response->error_message        = JText::sprintf('JGLOBAL_AUTH_FAILED', "Username already exists!");
				}
			}
			else
			{
				$set_username = $results[0]->username;
			}

			// finally, log the user in, and go give brad a hi five for being super awesome
			$user_details = json_decode($results[0]->user_array);
			$user_profile = json_decode($results[0]->profile_array);
                        $response->status               = JAuthentication::STATUS_SUCCESS;
                        $response->error_message = '';
                        $response->username = htmlspecialchars($set_username);
                        $response->fullname = $user_profile->displayName;
                        $response->email = $user_details->email;
                }






		elseif($_POST['login_type'] == "tw")
		{
			$token = JSession::getFormToken();
			$token_present == false;
			foreach($_POST as $k => $v)
			{
				if($k == $token)
					$token_present = true;
			}
			if($token == false)
				die('twtknbd');

			// grab all of the user data
			$query = "SELECT * FROM #__login_twitter_userdata WHERE `token` = '" . stripslashes($token) . "';";
			$db->setQuery($query);
			$results = $db->loadObjectList();

			$set_username = $results[0]->username;

			// do we need to add a username?
			if(
				strlen($_POST['new_username']) >= 5 AND
				strlen($_POST['new_username']) < 30 AND
				$results[0]->username == ""
			)
			{
				// does the username already exist?
				if( username_already_exists($_POST['new_username']))
					die('twunalex');
				else
				{
					$query = "UPDATE #__login_twitter_userdata SET `username` = '" . addslashes($_POST['new_username']) . "', `email` = '" . addslashes($_POST['twitter_email']) . "' WHERE `twitter_id` = '" . $results[0]->twitter_id . "';";
					$db->setQuery($query);
					try { $update_username = $db->execute(); } catch (Exception $e) { die('updtwuner'); }
					$set_username = $_POST['new_username'];
					$set_email = $_POST['twitter_email'];
				}
			}
			
			$user_profile = json_decode($results[0]->profile_array);
			$response->status               = JAuthentication::STATUS_SUCCESS;
                        $response->error_message = '';
                        $response->username = addslashes(htmlspecialchars($set_username));
                        $response->fullname = $user_profile->name;
                        $response->email = $set_email;

			// reset the token
			$query = "UPDATE #__login_twitter_userdata SET `token` = '' WHERE `twitter_id` = '" . $results[0]->twitter_id . "' LIMIT 1;";
			$db->setQuery($query);
			try { $update_username = $db->execute(); } catch (Exception $e) { die('twrsttkqry'); }
		}






		elseif($_POST['login_type'] == "amp")
		{
			$token = JSession::getFormToken();
                        $token_present == false;
                        foreach($_POST as $k => $v)
                        {
                                if($k == $token)
                                        $token_present = true;
                        }
                        if($token == false)
                                die('amptknbd');

			// grab all of the user info
			$query = "SELECT * FROM #__login_amp_userdata WHERE `token` = '" . stripslashes($token) . "' LIMIT 1;";
			$db->setQuery($query);
			$results = $db->loadObjectList();

			$set_username = $results[0]->username;

			// are we adding a new username?
			if($_POST['new_username'])
			{
				// does the username already exist?
                                if( username_already_exists($_POST['new_username']))
                                        die('apualex');
                                else
                                {
                                        $query = "UPDATE #__login_amp_userdata SET `username` = '" . addslashes($_POST['new_username']) . "' WHERE `token` = '" . addslashes($token) . "' LIMIT 1;";
                                        $db->setQuery($query);
                                        try { $update_username = $db->execute(); } catch (Exception $e) { die('ampanusn'); }
                                        $set_username = $_POST['new_username'];
                                }
			}

                        $response->status               = JAuthentication::STATUS_SUCCESS;
                        $response->error_message = '';
                        $response->username = addslashes(htmlspecialchars($set_username));
                        $response->fullname = "AMP User";
                        $response->email = $results[0]->email;

			// reset the token
                        $query = "UPDATE #__login_amp_userdata SET `token` = '' WHERE `token` = '" . addslashes($token) . "' LIMIT 1;";
                        $db->setQuery($query);
                        try { $update_username = $db->execute(); } catch (Exception $e) { die('pmawrsttkqry'); }
		}






                else
		{
			$response->status               = JAuthentication::STATUS_FAILURE;
                        $response->error_message        = JText::sprintf('JGLOBAL_AUTH_FAILED', $message);
		}

	}
}






function username_already_exists($username)
{
	$db = JFactory::getDbo();
	$query = "SELECT count(`id`) as 'current_users' FROM #__users WHERE `username` = '" . addslashes($username) . "';";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	if($results[0]->current_users == 0)
		return false;
	return true;
}
