(function() {

	'use strict';

	var userController = angular.module("userController",[])
    .controller('userController',['$scope', '$http','$rootScope' ,'$auth', '$state',function ($scope, $http, $rootScope, $auth, $state){
		
		$scope.users;
		$scope.error;

		$scope.getUsers = function(){
			$http.get('api/authenticate').success(function(users){
				$scope.users = users;
			}).error(function(error){
				$scope.error = error;
			});

		}

		$scope.logout = function(){
			$auth.logout().then(function(){
				localStorage.removeItem('user');
				$rootScope.authenticated = false;
				$rootScope.currentUser = null;
				$state.go('auth');
			});
		}
	}
	]);
})();