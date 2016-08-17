<?php
/**
 * 选择排序
 * 排序思路：
 *       每一步中选取剩余数据中最小或最大值来重新排列，从而达到排序的目的。
 * 流程：
 *      （1）首先从原始数据中选择最小的一个数据，将其和位于第一个位置的数据进行交换。
 *      （2）然后从剩余数据中选择次小的数据，将其和第二个位置的数据进行交换。
 *      （3）再用同样的方法不断重复，直到最后两个数据完成交换，便可按照从小到大的顺序排列好。
 */
function select_sort(array $arrData){
  $length = count($arrData);
  for ($i=0; $i < $length - 1; $i++) {
    $min = $arrData[$i];
    $index = $i;
    for ($j= $i +1 ; $j < $length; $j++) {
      //从小到大排序
      if ($arrData[$j] < $min)
      // if ($arrData[$j] > $min)
      //从大到小排序
      {
        $min = $arrData[$j];
        $index = $j;
      }
    }
    if ($index != $i) {
      $temp = $arrData[$i];
      $arrData[$i] = $min;
      $arrData[$index] = $temp;
    }
  }
  return $arrData;
}
$arr = array(23,13,33,44,53,4,6,22,489,2,65,89,320,54,360,11,999);
$res = select_sort($arr);
print_r($res);
