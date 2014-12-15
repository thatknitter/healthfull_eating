;(function(){
  'use strict';
  
  angular.module('healthApp')
    .config(function($routeProvider){
      $routeProvider
      .when('/', {
        templateUrl: 'views/home.html'
      })
      .when('/food_highlights', {
        templateUrl: 'views/food_highlights/fh_main.html'
      })
      .when('/cooking_school', {
        templateUrl: 'views/cooking_school/cs_main.html'
      })
      .when('/nutrition_science', {
        templateUrl: 'views/nutrition_science/ns_main.html'
      })
      .when('/recipes', {
        templateUrl: 'views/recipes/recipes_main.html'
      })
      .when('/gizmo', {
        templateUrl: 'views/comingsoon.html'
      })
      .when('/pantry', {
        templateUrl: 'views/comingsoon.html'
      })
      .when('/organized', {
        templateUrl: 'views/comingsoon.html'
      })
      .when('/forums', {
        templateUrl: 'views/comingsoon.html'
      })
      .when('/mystuff', {
        templateUrl: 'views/comingsoon.html'
      })
      .otherwise({redirectTo: '/'});
    });
  
}());
