<?php
function normal_search($arrData,$val) {
  $len = count($arrData);
  // var_dump($len);
  // exit;
  if($len == 0) {
    return 'the array is empty';
  }
  // for($i = 0;$i < $len; $i++ ) {
  //   // echo "find No.",$i + 1," value = ",$arrData[$i]," is = ",$val,"? <br/>";
  //   // 找到了
  //   if($arrData[$i] == $val)
  //   {
  //     return $i;
  //   }
  // }
  $index=array_search($val,$arrData);
  if ($index) {
    return $arrData[$index];
  }else {
    return 'The value is not in array';
  }
}
$arrData = array(4,51,6,73,2,5,9,33,50,3,4,6,1,4,67);
echo normal_search($arrData,6),"<br/>";
echo normal_search($arrData,66),"<br/>";
// 二分法查找(针对有序的列进行查找)
function binary_search($arrData,$val) {
  $len = count($arrData);
  if($len == 0) {
    return 'the array is empty';
  }

  $start = 0;
  $end = $len - 1;

  while($start <= $end) {
    $middle = intval(($start + $end)/2);
    echo "start = ",$start," end = ",$end," middle = ",$middle,"<br/>";
    if($arrData[$middle] == $val) {
      return $middle;
    } elseif ($arrData[$middle] > $val) {
      $end = $middle - 1 ;
    } elseif ($arrData[$middle] < $val) {
      $start = $middle + 1;
    }
  }
  return 'The value is not in array';
}

// 测试一下二分法查找
$arrData = array(1,2,3,4,5,7,8,9,11,23,56,100,104,578,1000);
echo binary_search($arrData,578),"<br/>";
echo binary_search($arrData,66),"<br/>";
