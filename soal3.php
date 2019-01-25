<?php

  function triangle($number){
    if($number > 10){
      echo 'Deret tidak boleh lebih dari 10';
    }else{
      for($i=1;$i<=$number;$i++){
        for($d=1;$d<=$i;$d++){
          echo $d.',  ';
        }
        echo "\n";
      }
    }
  }

  triangle(isset($_GET['deret']) ? $_GET['deret'] : 10);