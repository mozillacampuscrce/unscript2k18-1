<html>
<head>
	<title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="652807989103-m7m0fobg3qba9pd96vbep81t9apdfmj5.apps.googleusercontent.com">


    <link href="static/dist/semantic-ui/semantic.min.css" rel="stylesheet" type="text/css" />
    <script src="static/dist/jquery/jquery.min.js"></script>
	<script src="admin.js"></script>
	<style>
body{
background-color:f1f1f1;
}
</style>
</head>
<body>
	
<div class="ui container" id="dynamic" style="margin-top:90px">


<div class="ui text container">
<div class="ui attached message">
  <div class="header">Access Panel!</div>
</div>

<form class="ui form attached fluid loading segment" method="POST" action="logincheck.php">
  	<input type="hidden" name="frmLogin" value="true">
  <div class="field">
    <label>Username</label>
    <input placeholder="Enter your Username" name="username" type="text" autofocus required>
  
  </div>
  <div class="field">
    <label>Password</label>
    <input type="password" placeholder="Enter your password" name="password" required>
  </div>
  <div class="inline field">
    <div class="ui checkbox"><input type="checkbox" id="rememberPass"><label>Remember me</label></div>
  </div>
 <div style="text-align:center">
 <input type="submit" name="login" class="ui blue submit button" tabindex=3 value="Login!"> 
</div>

<div class="g-signin2" data-onsuccess="onSignIn"></div>

</form>

<div class="ui bottom attached warning message">
<i class="icon help"></i> Forgotten password? Just use Username as<a href="#0"> admin</a> and password as <a href="#">password</a> to access.
</div>





</div>
</div>
</body>
</html>
