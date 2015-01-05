;( function() {
    'use strict';
    
    angular.module('healthApp')
    .factory('recipeFactory', function(FIREBASE_URL, $http, $location){
      function _recipeURL(name){
        
        if (name) {
          return FIREBASE_URL + name + '/.json';
        } else {
          return FIREBASE_URL + '/.json';
        }

      }
      
      function getRecipe(name, cb){
        $http.get(_recipeURL(name))
        .success(function(data){
          cb(data);
        })
        .error(function(err){
          console.log(err);
        });
      }
      
      function listRecipes(cb){
        $http.get(_recipeURL())
        .success(function(data){
          cb(data);
        })
        .error(function(err){
          console.log(err);
        });
      }
      
      function deleteRecipe(nameId, cb){
        $http.delete(_recipeURL(nameId))
        .success(function(){
          cb();
        })
        .error(function(err){
          console.log(err);
        });
      }
      
      return{
        getRecipe: getRecipe,
        listRecipes: listRecipes,
        deleteRecipe: deleteRecipe
      };
      
    });
  
  }());
