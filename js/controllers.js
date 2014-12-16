;(function(){
  'use strict';
  
  angular.module('healthApp')
  
  function addQuick($form, item){
    var $list = $('li');
    var $title = 'Quick Item' + $itemNum;
    var $itemNum = 1;
    var $formItem = 'hello';
    var $button = $('button');
    
    function draw(){
      $(this).html($list + $title + $formItem);
    }
    
    $button.click(draw);
    console.log('this works');
    $itemNum = $itemNum + 1;
    
  }
  
}());
