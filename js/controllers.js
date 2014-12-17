;( function() {
    'use strict';

    angular.module('healthApp')
    
    .controller('FormAdder', function($http, $routeParams) {
      var vm = this;
      
      $http.get('https://healthrecipes.firebaseio.com/')
      .success(function(data){
        vm.heathrecipes = data;
      }).error(function(err){
        alert('There has been a problem connecting to the API.');
      });
      
      var $quick = $('.quick');
      $quick.click(addQuick);

      var $equip = $('.equip');
      $equip.click(addEquip);
      
      var $fresh = $('.fresh');
      $fresh.click(addFresh);
      
      var $panFresh = $('.panFresh');
      $panFresh.click(addPanFresh);
      
      var $panDry = $('.panDry');
      $panDry.click(addPanDry);
      
      var $herbSpice = $('.herbSpice');
      $herbSpice.click(addHerb);
      
      var $direction = $('.direction');
      $direction.click(addDirection);
     
      var quickNum = 1;
      var equipNum = 1;
      var freshNum = 1;
      var panFreshNum = 1;
      var panDryNum = 1;
      var herbNum = 1;
      var dirNum = 1;
      
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
      
      function addFresh(){
        var $list = $('<li></li>');
        var title = 'Fresh Ingredient ' + freshNum;
        var $label = $('<label>' + title + '</label>');
        var $formItem = $('<input class="form-control" type="text" ng-model="recipe.newRecipe.fresh' + freshNum + '"></br>' + '<label>Amount</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.amount' + freshNum + '"></br>' + '<label>Ingredient Prep</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.prep' + freshNum + '"></br>' + '<label>Special Instructions</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.special' + freshNum + '">');
        var $target = $('.freshTarget');
        
        $list.append($label);
        $list.append($formItem);
        $target.append($list);
        freshNum = freshNum + 1;
      }
      
      function addPanFresh(){
        var $list = $('<li></li>');
        var title = 'Pantry Fresh Ingredient ' + panFreshNum;
        var $label = $('<label>' + title + '</label>');
        var $formItem = $('<input class="form-control" type="text" ng-model="recipe.newRecipe.panFresh' + panFreshNum + '"></br>' + '<label>Amount</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.panFamount' + panFreshNum + '"></br>' + '<label>Ingredient Prep</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.panFprep' + panFreshNum + '"></br>' + '<label>Special Instructions</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.panFspecial' + panFreshNum + '">');
        var $target = $('.panFreshTarget');
        
        $list.append($label);
        $list.append($formItem);
        $target.append($list);
        panFreshNum = panFreshNum + 1;
      }
      
      function addPanDry(){
        var $list = $('<li></li>');
        var title = 'Pantry Dry Ingredient ' + panDryNum;
        var $label = $('<label>' + title + '</label>');
        var $formItem = $('<input class="form-control" type="text" ng-model="recipe.newRecipe.panDry' + panDryNum + '"></br>' + '<label>Amount</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.pDamount' + panDryNum + '"></br>' + '<label>Ingredient Prep</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.pDprep' + panDryNum + '"></br>' + '<label>Special Instructions</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.pDspecial' + panDryNum + '">');
        var $target = $('.panDryTarget');
        
        $list.append($label);
        $list.append($formItem);
        $target.append($list);
        panDryNum = panDryNum + 1;
      }
      
      function addHerb(){
        var $list = $('<li></li>');
        var title = 'Herb &amp; Spices ' + herbNum;
        var $label = $('<label>' + title + '</label>');
        var $formItem = $('<input class="form-control" type="text" ng-model="recipe.newRecipe.herb' + herbNum + '"></br>' + '<label>Amount</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.herbAmount' + herbNum + '"></br>' + '<label>Ingredient Prep</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.herbPrep' + herbNum + '"></br>' + '<label>Special Instructions</label>' 
        + '<input class="form-control" type="text" ng-model="recipe.newRecipe.herbSpecial' + herbNum + '">');
        var $target = $('.herbTarget');
        
        $list.append($label);
        $list.append($formItem);
        $target.append($list);
        herbNum = herbNum + 1; 
      }
      
      function addDirection(){
        var $list = $('<li></li>');
        var title = 'Direction ' + dirNum;
        var $label = $('<label>' + title + '</label>');
        var $formItem = $('<input class="form-control" type="text" ng-model"recipe.newRecipe.direction' + dirNum + '">');
        var $target = $('.directionTarget'); 
        
        $list.append($label);
        $list.append($formItem);
        $target.append($list);
        dirNum = dirNum + 1;
      }
      
      vm.addRecipe = function(){
        $http.post(vm.recipeItem, vm.newRecipe)
        .success(function(data){
          vm.recipeItem[data.name] = vm.newRecipe;
        }).error(function(err){
          alert('Recipe could not be added.');
        });
        vm.recipes.push(vm.newRecipe);
        vm.newRecipe = null;
      };
      
    });


  }());
