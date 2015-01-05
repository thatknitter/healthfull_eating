;( function() {
    'use strict';
    
    angular.module('healthApp')
    .factory('recipeFactory', function(FIREBASE_URL, $http, $location){
      function _recipeURL(name){
        
        if (name) {
          return FIREBASE_URL + '/list/' + name + '.json';
        } else {
          return FIREBASE_URL + '/list.json';
        }

      }
      
      

    });
  
  }());
