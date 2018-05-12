angular.module('usersApp', [])

.controller('mainController', function($scope, $http) {

  $scope.sortType = 'first_name';
  $scope.sortReverse = false;
  $scope.searchUser = '';
	
	$http.get("data/users.json").then(function(response){
		 $scope.users = response.data;
		 $scope.usersFiltered = response.data;
	}, function(error) {
		alert("Error loading file: " + error.data);
	});
	  	
	$scope.delete = function() {
		
		var tempArray = angular.copy($scope.usersFiltered);
		var index = 0;
		
		tempArray.forEach(function(obj) {
				
			if (obj.delete) {
				index = $scope.users.findIndex(function(user) {return obj.id == user.id});
				
				if (index != -1)
					$scope.users.splice(index, 1);
				
				index = $scope.usersFiltered.findIndex(function(user) {return obj.id == user.id});

				if (index != -1)
					$scope.usersFiltered.splice(index, 1);
			}
		});
	}
	
	$scope.filter = function(filter){
		if (filter == 'All') {
			$scope.usersFiltered = $scope.users; 
		}
		else {
			$scope.usersFiltered = [];
			
			$scope.users.forEach(function(obj) {
				
				if (obj.gender == filter) {
					$scope.usersFiltered.push(obj);
				}
			});
		}
		
	}
	
});
