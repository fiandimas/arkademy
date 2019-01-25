<?php

  function countSameLetters($letters,$find){
    $result = '';
    for($i=0;$i<strlen($letters);$i++){
      if($letters[$i] == $find){
        $result++;
      }
    }
    return 'result = '.$result;
  }

  echo countSameLetters('alfian','a');