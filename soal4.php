<?php

  function countHandShake($people){
    $result = '';
    for($i=$people - 1;$i>=1;$i--){
      $result = $result + $i;
    }
    return 'result : '.$result;
  }

  echo countHandShake(6);