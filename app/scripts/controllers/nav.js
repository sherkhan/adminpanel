'use strict';

angular.module('app')
.controller('NavigationController', function ($scope) {
  // Must use a wrapper object, otherwise "activeItem" won't work
  $scope.states = {};
  $scope.states.activeItem = 'item1';
  $scope.items = [{
    id: 'item1',
    href: '#/',
    title: 'Дашборд',
    icon: "fa-dashboard"
  }, {
    id: 'item2',
    href: '#/new',
    title: 'Новая задача',
    icon: "fa-fw fa-file"
  }];
});
