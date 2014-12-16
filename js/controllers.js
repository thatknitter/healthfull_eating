;( function() {
    'use strict';

    angular.module('healthApp')
    
    .controller('FormAdder', function() {
      var $quick = $('.quick');
      $quick.click(addQuick);

      var $equip = $('.equip');
      $equip.click(addEquip);
     
      var quickNum = 1;
      var equipNum = 1;
      
      function addQuick() {
        var $list = $('<li></li>');
        var title = 'Quick Item ' + quickNum;
        var $label = $('<label>' + title + '</label>');
        var $formItem = $('<input class="form-control" type="text" ng-model="recipe.newRecipe.quick' + quickNum + '">');
        var $target = $('.quickTarget');
                
        $list.append($label);
        $list.append($formItem);
        $target.append($list);
        quickNum = quickNum + 1;

      }
      
      function addEquip(){
        var $list = $('<li></li>');
        var title = 'Equipment ' + equipNum;
        var $label = $('<label>' + title + '</label>');
        var $formItem = $('<input class="form-control" type="text" ng-model="recipe.newRecipe.equip' + equipNum + '">');
        var $target = $('.equipTarget');
        
        $list.append($label);
        $list.append($formItem);
        $target.append($list);
        equipNum = equipNum + 1;
      }

    });


  }());
