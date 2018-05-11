angular.module('usersApp', [])

.controller('mainController', function($scope, $http) {

  $scope.sortType = 'first_name';
  $scope.sortReverse = false;
  $scope.searchUser = '';
	
	$http.get("data/users.json", function(response){
		 $scope.users = response.data;
	}, function(error) {
		alert("Error loading file: " + error.data);
	});
  	
	$scope.delete = function(index) {
		if (index != -1) {
			$scope.users.splice(index, 1);
		}
	}
	
});
