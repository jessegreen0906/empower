angular.module("app-login-form", ['ngCookies'])
	.controller("login-form", ["$scope", "$http", "$cookies", function($scope, $http, $cookies) {
		$scope.errorMessage = "";
		$scope.invalidUsername = "Username is invalid";
		$scope.invalidPassword = "Password is invalid";
		$scope.loginData = {};
		
		$scope.loginRequest = function () {
			
			$http({
				method : 'POST',
				url : '/Empower/M-Power/admin/lib/login/loginService.php',
			}).then(function successCallback(data) {
				// document.cookie = "name = "+data.data.cookieName+"; expires = "+data.data.cookieExpires;
				$cookies.put("login", "sucess");
			}, function errorCallback(response) {
				$scope.errorMessage = data.data.errorMessage;
			});
		}
		$scope.invalidUsernameCheck =(angular.element(document.querySelector('#username')).hasClass("ng-invalid") && angular.element(document.querySelector('#username')).hasClass("ng-touched"));

		
		$scope.invalidPasswordCheck = function () {
			if ($("#password").hasClass("ng-invalid") && $("#password").hasClass("ng-touched")) {
				var output = true;
			} else {
				var output = false;
			}
			return output;
		};
	}]);
