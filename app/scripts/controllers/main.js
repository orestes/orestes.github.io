'use strict';

angular.module('orestes.io.app')
  .controller('MainCtrl', function ($scope) {
    $scope.technologies = [
      'php',
      'bower',
      'ant',
      'grunt',
      'AngularJS',
      'Karma'
    ];
  });
