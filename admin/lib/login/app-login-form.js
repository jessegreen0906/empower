function bla($scope) {
	console.log('Hello world');
	$scope.$apply();
}

angular.module("app-login-form", []) 
	.controller("login-form", ["$scope", "$http", function($scope, $http) {
		$scope.errorMessage = "";
		$scope.invalidUsername = "Username is invalid";
		$scope.invalidPassword = "Password is invalid";
		$scope.loginData = {};
		
		$scope.loginRequest = function () {
			
			$http({
				method : 'POST',
				url : '/lib/login/loginService.php',
			}).then(function successCallback(data) {
				document.cookie = "name = "+data.data.cookieName+"; expires = "+data.data.cookieExpires;
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
