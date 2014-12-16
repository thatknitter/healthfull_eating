;( function() {
    'use strict';

    angular.module('healthApp')
    
    .controller('FormAdder', function() {
      var $button = $('button');
      $button.click(addQuick);
      var itemNum = 1;
      
      function addQuick() {
        var $list = $('<li></li>');
        var title = 'Quick Item' + itemNum;
        var $label = $('<label>' + title + '<label>');
        var $formItem = $('<input class="form-control" type="text" ng-model="recipe.newRecipe.quick' + itemNum + '">');
        var $target = $('.target');
                
        $list.append($label);
        $list.append($formItem);
        $target.append($list);
        
        console.log('this works');
        itemNum = itemNum + 1;

      }

    });


  }());
