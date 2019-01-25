<?php

  function countHandShake($people){
    $result = '';
    for($i=$people - 1;$i>=1;$i--){
      $result = $result + $i;
    }
    return "result : $result handshake from $people people";
  }

  echo countHandShake(4);