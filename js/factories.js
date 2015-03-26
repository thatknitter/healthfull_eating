;( function() {
    'use strict';
    
    angular.module('healthApp')
    .factory('recipeFactory', function(FIREBASE_URL, $http, $location){
      function _recipeURL(name){
        
        if (name) {
          return FIREBASE_URL + "recipes/" + name + '/.json';
        } else {
          return FIREBASE_URL + "recipes/" + '/.json';
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
        deleteRecipe: deleteRecipe,
        _recipeURL: _recipeURL
      };
      
    })
    .factory('articleFactory', function($http, $location){
      
      var articleOptions = {
        fh: 'Food Highlights',
        cs: 'Cooking School',
        ns: 'Nutrition Science',
        gizmo: 'Gizmos and Gadgets',
        pantry: 'Self-Reliant Pantry',
        org: 'The Organized Cook',
        misc: 'Miscellaneous Articles'
      };
      
      return{
        articleOptions: articleOptions
      };
    });
  
  }());
