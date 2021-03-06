;(function(){
  'use strict';
  
  angular.module('healthApp')
    .config(function($routeProvider){
      $routeProvider
      .when('/', {
        templateUrl: 'views/home.html'
      })
      .when('/food_highlights', {
        templateUrl: 'views/comingsoon.html'
      })
      .when('/cooking_school', {
        templateUrl: 'views/comingsoon.html'
      })
      .when('/nutrition_science', {
        templateUrl: 'views/comingsoon.html'
      })
      .when('/recipes', {
        templateUrl: 'views/recipes/recipe_inputer.html',
        controller: 'FormAdder',
        controllerAs: 'recipe'
      })
      .when('/gizmo', {
        templateUrl: 'views/recipes/recipe_table.html',
        controller: 'ShowController',
        controllerAs: 'show'
      })
      .when('/pantry/:id', {
        templateUrl: 'views/recipes/recipe_individual.html',
        controller: 'IndividualController',
        controllerAs: 'individual'
      })
      .when('/organized', {
        templateUrl: 'views/org_cook/editor.html',
        controller: 'EpicEditor',
        controllerAs: 'article'
      })
      .when('/forums', {
        templateUrl: 'views/comingsoon.html'
      })
      .when('/mystuff', {
        templateUrl: 'views/my_stuff/login.html',
        controller: 'LoginController',
        controllerAs: 'login'
      })
      .when('/vegetables', {
        templateUrl: 'views/food_highlights/food_types/vegetables.html'
      })
      .when('/fruits', {
        templateUrl: 'views/food_highlights/food_types/fruits.html'
      })
      .when('/whole_grains', {
        templateUrl: 'views/food_highlights/food_types/whole_grains.html'
      })
      .when('/legumes', {
        templateUrl: 'views/food_highlights/food_types/legumes.html'
      })
      .when('/nuts_seeds', {
        templateUrl: 'views/food_highlights/food_types/nuts_seeds.html'
      })
      .when('/fats', {
        templateUrl: 'views/food_highlights/food_types/fats_oils.html'
      })
      .when('/dairy_eggs', {
        templateUrl: 'views/food_highlights/food_types/dairy_eggs.html'
      })
      .when('/meat_poultry', {
        templateUrl: 'views/food_highlights/food_types/meat_poultry.html'
      })
      .when('/fish_seafood', {
        templateUrl: 'views/food_highlights/food_types/fish_seafood.html'
      })
      .when('/spices_herbs', {
        templateUrl: 'views/food_highlights/food_types/spices_herbs.html'
      })
      .when('/condiments', {
        templateUrl: 'views/food_highlights/food_types/condiments.html'
      })
      .when('/sweeteners', {
        templateUrl: 'views/food_highlights/food_types/sweeteners.html'
      })
      .otherwise({redirectTo: '/'});
    });
  
}());
