<?


$user = JFactory::getUser();

// If we're working with a GUEST
if($user->guest == 1)
{
	$why_join = get_message_why_join_community();

	echo "
		<h2>Join the Community!</h2>
		<ul>$why_join</ul>

		<h2>Become a Member</h2>

		<table>
			<tr>
				<td>
					<div class='well-small amp-pill' style='display:inline-block;'>
						<div style='padding:6px 0px;'>
                                                        <a href='/support/component/users?view=registration' class='btn btn-primary btn' style='display:block'>Create an Account</a><br />
							<a href='/support/login-with-facebook' class='login_with_facebook_btn' style='display:block'>Login with Facebook</a><br />
							<a href='/support/login-with-google' class='login_with_google_btn' style='display:block;'>Login with Google+</a>
						</div>
					</div>
				</td>
				<td style='width:300px;padding-left:15px;' valign='top'>To become a Customer Community member, all you need to do is log into our Support Center!</td>
			</tr>
		</table>

        <h2>Already a Member?</h2>

                You may log in with either your support center login or your social media account via the right panel.

	";
}
// If we're working with a REGISTERED USER
else
{
	JFactory::getApplication()->enqueueMessage('Thank you for logging in!','success');

	echo "
	<p>Redirecting...</p>
	<script type='text/javascript'>
		setTimeout(\"location.href = '/support/community-support';\",1500);
	</script>
	";
}






function get_message_why_join_community()
{
	switch($_GET['membership'])
	{
		// c = current customer
		case "c":
			$why_join = "
				<li>If you are customer, get special priority help not available from our normal support team particularly in coding, command line, design, more, and more.</li>
				<li>Help other customers and Community Members and get special rewards including discounts, event invitations, and free goodies.</li>
			";
			break;
		// m = member, not a customer
		default:
			$why_join = "
				<li>When you are logged in when asking a question, you will get priority over non-members.  Customers will still have the top priority though.</li>
				<li>Help other customers and get special rewards including discounts, event invitations, and free goodies.</li>
			";
			break;
	}
	return $why_join;
}






?>
