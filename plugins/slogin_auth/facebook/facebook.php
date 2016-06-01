<?php
/**
 * Social Login
 *
 * @version 	1.0
 * @author		Arkadiy, Joomline
 * @copyright	© 2012. All rights reserved.
 * @license 	GNU/GPL v.3 or later.
 */

// No direct access
defined('_JEXEC') or die;

class plgSlogin_authFacebook extends JPlugin
{
    private $provider = 'facebook';

    public function onSloginAuth()
    {
        $redirect = JURI::base().'?option=com_slogin&task=check&plugin=facebook';

        $scope = 'email,user_photos,user_about_me,user_hometown,public_profile,user_birthday';

        if($this->params->get('repost_comments', 0))
        {
            $scope .= ',publish_actions,publish_stream';
            //$scope .= ',offline_access';
        }

        $params = array(
            'client_id=' . $this->params->get('id'),
            'redirect_uri=' . urlencode($redirect),
            'scope=' . $scope
        );

        $params = implode('&', $params);

        $url = 'http://www.facebook.com/dialog/oauth?' . $params;
        return $url;
    }

    public function onSloginCheck()
    {
        require_once JPATH_BASE.'/components/com_slogin/controller.php';

        $controller = new SLoginController();

        $input = JFactory::getApplication()->input;

        $request = null;

        $code = $input->get('code', null, 'STRING');

        $returnRequest = new SloginRequest();

        if ($code)
        {
            $token = $this->getToken($code);

// 			Получение данных о пользователе
// 			id, name, first_name, last_name, link, gender, timezone, locale, verified, updated_time
// 			email смотреть параметр scope в методе auth()!

            $ResponseUrl = 'https://graph.facebook.com/v2.2/me?access_token='.$token['access_token'].'&fields=id,name,first_name,last_name,link,gender,email,birthday';
            $request = json_decode($controller->open_http($ResponseUrl));

            if(empty($request)){
                echo 'Error - empty user data';
                exit;
            }
            else if(!empty($request->error)){
                echo 'Error - '. $request->error;
                exit;
            }

            //сохраняем данные токена в сессию
            //expire - время устаревания скрипта, метка времени Unix
            JFactory::getApplication()->setUserState('slogin.token', array(
                'provider' => $this->provider,
                'token' => $token['access_token'],
                'expire' => (time() + $token['expires']),
                'repost_comments' => $this->params->get('repost_comments', 0),
                'slogin_user' => $request->id,
                'app_id' => $this->params->get('id', 0),
                'app_secret' => $this->params->get('password', 0)
            ));

            $returnRequest->first_name  = $request->first_name;
            $returnRequest->last_name   = $request->last_name;
            $returnRequest->email       = $request->email;
            $returnRequest->id          = $request->id;
            $returnRequest->real_name   = $request->first_name.' '.$request->last_name;
            $returnRequest->sex         = $request->gender;
            $returnRequest->display_name = $request->name;
            $returnRequest->all_request  = $request;

            return $returnRequest;
        }
        else{
            echo 'Error - empty code';
            exit;
        }
    }

    public function getToken($code)
    {
        require_once JPATH_BASE.'/components/com_slogin/controller.php';
        $controller = new SLoginController();

        $redirect = urlencode(JURI::base().'?option=com_slogin&task=check&plugin=facebook');

        //подключение к API
        $params = array(
            'client_id=' . $this->params->get('id'),
            'client_secret=' . $this->params->get('password'),
            'code=' . $code,
            'redirect_uri='. $redirect
        );

        $params = implode('&', $params);

        $url = 'https://graph.facebook.com/oauth/access_token?' . $params;
        $data = $controller->open_http($url);
        parse_str($data, $data_array);

        if(empty($data_array['access_token'])){
            echo 'Error - empty access tocken';
            exit;
        }

        return $data_array;
    }

    public function onCreateSloginLink(&$links, $add = '')
    {
        $i = count($links);
        $links[$i]['link'] = 'index.php?option=com_slogin&task=auth&plugin=facebook' . $add;
#        $links[$i]['link'] = 'https://www.facebook.com/login.php?skip_api_login=1&api_key=209145459223160&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.0%2Fdialog%2Foauth%3Fredirect_uri%3Dhttp%253A%252F%252Fwww.inmotionhosting.com%252Fsupport%252F%253Foption%253Dcom_slogin%2526task%253Dcheck%2526plugin%253Dfacebook%26scope%3Demail%252Cuser_photos%252Cuser_about_me%252Cuser_hometown%252Cpublic_profile%252Cuser_birthday%26client_id%3D209145459223160%26ret%3Dlogin&cancel_url=http%3A%2F%2Fwww.inmotionhosting.com%2Fsupport%2F%3Foption%3Dcom_slogin%26task%3Dcheck%26plugin%3Dfacebook%26error%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%23_%3D_&display=page&locale=en_US' . $add;

        $links[$i]['class'] = 'facebookslogin';
        $links[$i]['plugin_name'] = $this->provider;
        $links[$i]['plugin_title'] = JText::_('COM_SLOGIN_PROVIDER_FACEBOOK');
    }
}
