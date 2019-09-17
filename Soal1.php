<?php

  function findPair($array){
    $res = (array_count_values($array));
    $pair = 0;

    foreach ($res as $key => $value) {
      $result = (int)($value/2);
      $pair = $pair + $result;
    }
    return $pair;
  }

  $array = array(10, 20, 20, 10, 10, 30, 50, 10, 20);
  echo findPair($array)." Pasang Kaos Kaki";
?>
