;( function() {
    'use strict';

    angular.module('healthApp')
    .factory('authFactory', function(FIREBASE_URL) {
      var factory = {}, ref = new Firebase(FIREBASE_URL);

      factory.login = function(email, pass, cb) {
        ref.authWithPassword({
          email : email,
          password : pass
        }, function(error, authData) {
          if (error === null) {
            console.log('User logged in successfully', authData);
            cb();
          } else {
            console.log('Error logging in user:', error);
          }
        });
      };

      factory.logout = function(cb) {
        ref.unauth(function() {
          cb();
        });
      };

      factory.register = function(email, pass, cb) {
        ref.createUser({
          email : email,
          password : pass
        }, function(error, authData) {
          if (error === null) {
            console.log('User created successfully', authData);
            cb();
          } else {
            console.log('Error creating user:', error);
          }
        });
      };

      factory.resetPassword = function(email) {
        ref.resetPassword({
          email : email
        }, function(error) {
          if (error === null) {
            console.log('Password reset email sent successfully');
          } else {
            console.log('Error sending password reset email:', error);
          }
        });
      };

      return factory;
    }).controller('LoginController', function(authFactory, $scope, $location) {
      var vm = this;

      vm.login = function() {
        authFactory.login(vm.email, vm.password, function() {
          $location.path('/');
          $scope.$apply();
        });
      };

      vm.register = function() {
        authFactory.register(vm.email, vm.password, function() {
          vm.login();
        });
      };

      vm.forgotPassword = function() {
        authFactory.resetPassword(vm.email);
      };
    })
    .controller('LogoutController', function($scope, $location, authFactory) {
      authFactory.logout(function() {
        $location.path('/');
        $scope.$apply();
      });
    })
    .controller('FormAdder', function($http, $routeParams) {
      var vm = this;
      vm.recipes = [];
      vm.newRecipe = {};
      vm.newRecipe.quickOverviewItems = [];
      vm.newRecipe.equipmentItems = [];
      vm.newRecipe.freshIngredients = [];
      vm.newRecipe.pantryFreshIngredients = [];
      vm.newRecipe.pantryDryIngredients = [];
      vm.newRecipe.herbSpices = [];
      vm.newRecipe.directions = [];

      $http.get('https://healthrecipes.firebaseio.com/').success(function(data) {
        vm.heathrecipes = data;
      }).error(function(err) {
        alert('There has been a problem connecting to the API.');
      });

      vm.addQuick = function(){
        vm.newRecipe.quickOverviewItems.push({overview: ""});
      };

      vm.addEquip = function(){
        vm.newRecipe.equipmentItems.push({overview: ""});
      };

      vm.addFresh = function(){
        vm.newRecipe.freshIngredients.push({overview: ""});
      };

      vm.addPanFresh = function(){
        vm.newRecipe.pantryFreshIngredients.push({overview: ""});
      };

      vm.addPanDry = function(){
        vm.newRecipe.pantryDryIngredients.push({overview: ""});
      };

      vm.addHerb = function(){
        vm.newRecipe.herbSpices.push({overview: ""});
      };

     vm.addDirection = function(){
       vm.newRecipe.directions.push({overview: ""});
     };


      vm.addRecipe = function() {
        var name = vm.newRecipe.name;
        $http.post('https://healthrecipes.firebaseio.com/recipes.json', vm.newRecipe).success(function(data) {
          vm.recipeItem[data.name] = vm.newRecipe;
        }).error(function(err) {
          alert('Recipe could not be added.');
        });
        vm.recipes.push(vm.newRecipe);
        vm.newRecipe = null;
      };

    })
    .controller('ShowController', function(recipeFactory) {
      var vm = this;
      recipeFactory.listRecipes(function(data) {
        vm.recipes = data;
      });
    })
    .controller('EpicEditor', function(articleFactory) {
      var editor = new EpicEditor().load();
      var vm = this;

      vm.articleOptions = articleFactory.articleOptions;
      
    });

  }());
