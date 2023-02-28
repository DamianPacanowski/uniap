<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="332992306225-n5ahs2s93la6004brn9u6la04rk47o95.apps.googleusercontent.com">
<div class="g-signin2" data-onsuccess="onSignIn"></div>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>



<?php
	if($_SERVER['REQUEST_URI']=='/')
	{
		$body=
			''		
		;
	}
	else
	{
		$body_file_url='body.php';
		if(file_exists($body_file_url))
		{
			include($body_file_url);
		}
	}
	if(isset($body))
	{
		echo$body;
	}
	
?>

