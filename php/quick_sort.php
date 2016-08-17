<?php
/**
 * 快速排序
 */

 function quickSort($arr){
   $length = count($arr);
     if($length>1){
         $key=$arr[0];
         $left=array();
         $right=array();
         for($i=1;$i<$length;$i++){
             if($arr[$i]<=$key){
                 $left[]=$arr[$i];
             }elseif($arr[$i]>$key){
                 $right[]=$arr[$i];
             }
         }
         $left=quickSort($left);
         $right=quickSort($right);
         return array_merge($left,array($key),$right);
     }else{
         return $arr;
     }
 }
function sort_quick(array $arrData){
  $len = count($arrData);
  if ($len > 1) {
  $key = $arrData[0];
  $arrLeft = array();
  $arrRight = array();
  $arrmid = array();
  foreach ($arrData as $value) {
    if ($value < $key) {
      $arrLeft[] = $value;//小的放左边
    }
    if($value > $key) {
      $arrRight[] = $value; //大的放右边
    }
    if ($value == $key) {
      $arrmid[] = $value;
    }
  }

    $arrLeft = sort_quick($arrLeft);
    $arrRight = sort_quick($arrRight);
    return array_merge($arrLeft,$arrmid,$arrRight);
  }else {
    return $arrData;
  }
}
// $list = array(51,6,73,2,5,9,33,50,3,4,6,1,67);
$list = array(23,98,54,2,9,62,0,1,34,2);
// $list = array(23,98);
$res = sort_quick($list);
// $res = quickSort($list);
print_r($res);
// sort_quick($list);
