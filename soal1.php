<?php

  function json(){
    $data = array(
      'itemId' => '12341822',
      'itemName' => 'basic t-shirt',
      'price' => 70000,
      'availableColorAndSize' => array(
       array(
        'color' => 'red',
        'size' => 'S,M,L',
       ),
       array(
        'color' => 'solid black',
        'size' => 'M,L',
       )
      ),
      'freeShiping' => false
      
    );

    return json_encode($data);
  }

  echo json();