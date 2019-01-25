<?php


  function verifUsername($username){
    $five = substr($username,0,5);
    $char = substr($username,5,1);
    $two = substr($username,6,1).substr($username,7,1);
    if(strlen($username) > 8){
      return 'Username harus terdiri dari 8 Karakter. 5 huruf awalan huruf kecil, dilanjutkan dengan titik (.) atau garis bawah (_), diteruskan dengan 2 huruf besar. contoh dimas.AD';
    }else if(preg_match('/[A-Z]/', $five)){
     return '5 Karakter pertama harus huruf kecil';
    }else if(preg_match('/[a-z]/',$two)){
      return '2 Huruf dari belakang harus huruf besar';
    }else if($char != "." && $char != "_"){
      return '3 Karakter dari belakang setidaknya harus mengandung titik (.) atau garis bawah (_)';
    }else{
      return 'Username benar';
    } 
  }
  echo verifUsername('ddimas.AD');
  echo "\n";
  echo verifUsername('Dimas.AD');
  echo "\n";
  echo verifUsername('dimas.ad');
  echo "\n";
  echo verifUsername('dimas-AD');
  echo "\n";
  echo verifUsername('dimas.AD');