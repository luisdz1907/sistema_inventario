<?php 
  function debugCode($data){
    echo "<pre>";
     var_dump($data);
    echo "</pre>";
    exit;
 }

 function alertError($mensaje){
  return '<div class="alert-error mt-2 text-center">'.$mensaje.'</div>';
 }
 function alertSuccess($mensaje){
  return '<div class="alert-success mt-2 text-center">'.$mensaje.'</div>';
 }
