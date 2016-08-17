<?php
/**
 * 插入排序
 * 排序思路：
 *       通过对未排序的数据逐个插入至合适的位置，从而达到排序的目的。
 * 流程：
 *      （1）首先对数组的前两个数据进行从小到大的排序。
 *      （2）接着将第3个数据与排好序的两个数据比较，将第3个数据插入到合适的位置。
 *      （3）然后，将第4个数据插入到已排好序的前3个数据中。
 *      （4）不断重复上述过程，直到把最后一个数据插入到合适的位置，便可按照从小到大的顺序排好。
 */
function insert_sort(array $arrData){
  $length = count($arrData);
  for ($i=1; $i <$length ; $i++) {
    $insert = $arrData[$i];
    $j = $i - 1;
    //从小到大
    while ($j >=0 && $insert < $arrData[$j])
    // while ($j >=0 && $insert > $arrData[$j])
    //从大到小
    {
        $arrData[$j+1] = $arrData[$j];
        $j--;
    }
    $arrData[$j+1] = $insert;
  }
  return $arrData;
}
$arr = array(23,13,33,44,53,4,6,22,489,2,65,89,320,54,360,11,999);
$res = insert_sort($arr);
echo '<pre>';
print_r($res);
echo '</pre>';
