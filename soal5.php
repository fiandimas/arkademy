<?php

  function countSameLetters($letters,$find){
    $result = '';
    $counter = 1;
    for($i=0;$i<$counter;$i++){
      if(@$letters[$i] != ""){
        if(@$letters[$i] == $find){
          $result++;
        }
        $counter++;
      }else{
        break;
      }
    }
    return "found ($result) of ($find) in ($letters)";
  }

  echo countSameLetters('alfian','a');