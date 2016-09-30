<script src='/Empower/M-Power/admin/lib/login/app-login-form.js'></script>
<link rel='stylesheet' type='text/css' href='/Empower/M-Power/admin/lib/login/loginForm.css' />
<div class='wrapper' ng-app='app-login-form'>
	<div id='login-box' ng-controller='login-form'>
		<form ng-submit='loginRequest()' name='loginForm'>
			<label name='username'>Username: </label><input name="usernameInput" ng-minlength='6' id='username' ng-model='loginData.username'  required type='text'></input>
			<p class='error' ng-show="loginForm.usernameInput.$touched">{{invalidUsername}}</p>
			<label name='password'>Password: </label><input id='password' ng-model='loginData.password' required type='password'></input>
			<p class='error' ng-class='{"invalid-field": invalidPasswordCheck()}'>{{invalidPassword}}</p>
			<button>Forgot your password?</button>
			<input type='submit'></input>
		</form>
<!--		<p class='error'>{{errorMessage}}</p>-->
	</div>
</div>
