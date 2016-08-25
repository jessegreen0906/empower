<script src='https://code.jquery.com/jquery-2.2.3.min.js'   integrity='sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo='   crossorigin='anonymous'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js'></script>

<script src='/lib/login/app-login-form.js'></script>
<link rel='stylesheet' type='text/css' href='/lib/login/loginForm.css' />
<div class='wrapper' ng-app='app-login-form'>
	<div id='login-box' ng-controller='login-form'>
		<form ng-submit='loginRequest()' name='loginForm'>
			<label name='username'>Username: </label><input ng-minlength='6' id='username' ng-model='loginData.username'  required type='text'></input>
			<p class='error invalid-field' ng-show='loginForm.username.$invalid' ng-class='{"invalid-field": invalidUsernameCheck}'>{{invalidUsername}}</p>
			<label name='password'>Password: </label><input id='password' ng-model='loginData.password' required type='password'></input>
			<p class='error' ng-class='{"invalid-field": invalidPasswordCheck()}'>{{invalidPassword}}</p>
			<button>Forgot your password?</button>
			<input type='submit'></input>
		</form>
		<p class='error'>{{errorMessage}}</p>
	</div>
</div>
