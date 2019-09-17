<?php
  function findMax($arr, $money) {
  $sum = 0; $max = 0; $n = count($arr);
  for ($i = 0; $i < $n; $i++){
      $temp_max = 0;
      $sum = $sum + $arr[$i];
      $temp_max++;
      for ($j = $i + 1; $j < $n; $j++)
      {
        $sum = $sum + $arr[$j];
        $temp_max++;
        if ($sum > $money)
        {
          $sum = $sum - $arr[$j];
          $temp_max--;
        }
      }
      if ($temp_max > $max){
        $max = $temp_max;
      }
    }
    return $max;
  }

  $arr = [1, 12, 5, 111, 200, 1000, 10];
  $money = 50;
  echo findMax($arr, $money)." Mainan";
 ?>
