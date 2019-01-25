<?php

  function verifUsername($username){
    $fivelower = '';
    for($i=0;$i<5;$i++){
      $fivelower .= strtolower($username[$i]);
    }
    $rand = rand(0,1);
    $char = array(
      '0' => '.',
      '1' => '_'
    );
    $fivelower .= $char[$rand];
    $twoupper = range('A','Z');
    $result =  $fivelower.$twoupper[rand(0,25)].$twoupper[rand(0,25)];
    return $result;
  }

  echo verifUsername('dimas');

  