angular.module('tableApp', [])

.controller('mainController', function($scope) {
  $scope.sortType = 'name';
  $scope.sortReverse = false;
  $scope.searchBook = '';
  $scope.editRow = '';
	$scope.ID = '';
	
  $scope.books = [
    { name: 'Jonathan Blanco Resume.pdf', type: 'PDF', author: 'John', created: '3/6/2017', comments: 'resume', id: '0' },
    { name: 'Lighthouse.jpg', type: 'JPG', author: 'Johnny', created: '7/14/2009', comments: 'picture', id: '1' },
    { name: 'test.txt', type: 'Text', author: 'Me', created: '5/3/2017', comments: 'test', id: '2' }
  ];
  
	$scope.copy = function(book) {
		$scope.editRow = angular.copy(book);
		$scope.ID = book.id;
	}
	
	$scope.save = function(index) {
		$scope.books[index] = angular.copy($scope.editRow);
		
		$scope.cancel();
	}
	
	$scope.delete = function(index) {
		if (index != -1) {
			$scope.books.splice(index, 1);
		}
	}
	
	$scope.cancel = function() {
		$scope.editRow = [];
		$scope.ID = -1;
	}
	
});