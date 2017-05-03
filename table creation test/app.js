angular.module('tableApp', [])

.controller('mainController', function($scope) {
  $scope.sortType     = 'name';
  $scope.sortReverse  = false;
  $scope.searchBook   = '';
  
  $scope.books = [
    { name: 'Jonathan Blanco Resume.pdf', type: 'PDF', author: 'John', created: '3/6/2017', comments: 'resume' },
    { name: 'Jonathan Blanco Resume\'s.docx', type: 'Word', author: 'Johnny', created: '3/6/2017', comments: 'resume word' },
    { name: 'test.txt', type: 'Text', author: 'Me', created: '5/3/2017', comments: 'test' }
  ];
  
});