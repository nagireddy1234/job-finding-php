<?php 
require_once 'template.php';

function auto_load($class_name){
  require_once './components/'.$class_name.'php';
}
?>