angular.module('usersApp', [])

.controller('mainController', function($scope, $http) {

  $scope.sortType = 'first_name';
  $scope.sortReverse = false;
  $scope.searchUser = '';
	
	$http.get("data/users.json").then(function(response){
		 $scope.users = response.data;
	}, function(error) {
		alert("Error loading file: " + error.data);
	});
  	
	$scope.delete = function(user) {
		var index = $scope.user.findIndex(function(obj) {return obj.id == user.id});
		
		$scope.users.splice(index, 1);
	}
	
});
