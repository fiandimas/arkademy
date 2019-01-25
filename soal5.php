<?php

  function countSameLetters($text,$find){
    $result = '';
    $counter = 1;
    for($i=0;$i<$counter;$i++){
      if(@$text[$i] != ""){
        if(@$text[$i] == $find){
          $result++;
        }
        $counter++;
      }else{
        break;
      }
    }
    return "found ($result) of ($find) in ($text)";
  }

  echo countSameLetters(isset($_GET['text']) ? $_GET['text'] : 'alfian',
  isset($_GET['find']) ? $_GET['find'] : 'a');