<?


if( $user->guest )
	cannot_edit_profile_of_guest();
else
{
	if($_POST['task_a'] == "update_profile")
		update_user_profile($db,$user);

	display_edit_user_profile($db,$user);
}






function cannot_edit_profile_of_guest()
{
	echo "<p>Before you can edit your profile, you must first <a href='" . JURI::base() . "login'>login</a>.</p>";
}






function display_edit_user_profile($db,$user)
{
	$user_profile = load_user_profile($db,$user);

	echo "
<style>
	#edit_profile table tr th,
	#edit_profile table tr td {text-align:left;vertical-align:top}
	#edit_profile input[type=text] {width:97%}
</style>

<div class='item-page'>

	<div class='page-header'>
		<h1>Edit your profile</h1>
	</div>

	<p>Hello " . htmlentities($user->username, ENT_QUOTES) . "!</p>

	<p>On this page, you can edit your user profile.</p>

	<form method='post' name='edit_profile' id='edit_profile'>

		<input type='hidden' name='task_a' id='task_a' value='update_profile' />

		<table class='table'>

			<tr>
				<th>Twitter username</th>
				<td><strong>@</strong><input type='text' name='twitter_username' id='twitter_username' value='" . htmlentities($user_profile->twitter_username,ENT_QUOTES) . "' style='width:250px;' /></td>
			</tr>

			<tr>
                                <th>Facebook URL</th>
                                <td><input type='text' name='facebook_url' id='facebook_url' value='" . htmlentities($user_profile->facebook_url,ENT_QUOTES) . "' /></td>
                        </tr>

			<tr>
                                <th>Google+ URL</th>
                                <td><input type='text' name='google_url' id='google_url' value='" . htmlentities($user_profile->google_url,ENT_QUOTES) . "' /></td>
                        </tr>

			<tr>
				<th>Bio</th>
				<td>
					<script type='text/javascript' src='/support/components/com_pup/tinymce/js/tinymce/tinymce.min.js'></script>
					<script type='text/javascript'>
						tinymce.init({
						    selector: 'textarea.user_profile_bio',
						    plugins: [
						        // 'advlist autolink lists link image charmap print preview anchor',
					        	// 'searchreplace visualblocks code fullscreen',
						        // 'insertdatetime media table contextmenu paste moxiemanager'
						    ],
						    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
						});
					</script>
					<textarea class='user_profile_bio' name='user_profile_bio' id='user_profile_bio' style='width:100%;height:150;'>" . htmlentities($user_profile->bio,ENT_QUOTES) . "</textarea>
				</td>
			</tr>

			<tr>
				<th></th>
				<td><input type='submit' value='Update profile' class='btn btn-primary' /></td>
			</tr>

		</table>

	</form>

</div>
	";
}


?>
