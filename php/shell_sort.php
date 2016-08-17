<?php
/**
 * 希尔排序
 */
// function shell_sort(array &$arrData){
//   $length = count($arrData);
//   $n = floor($length/2);
//   $f = floor($n/2);
//   for ($x = $n; $x >= 1 ; $x = $f) {
//     for ($i=$n; $i <$length ; $i++) {
//       $temp = $arrData[$i];
//       $j = $i -$x;
//       while ($j >= 0 && $temp < $arrData[$j])
//       {
//         $arrData[$j + $x] = $arrData[$j];
//         $j -= $x;
//       }
//       $arrData[$j + $x] = $temp;
//     }
//   }
//   // return $arrData;
// }
function shell_sort(array $arr){
    // 将$arr按升序排列
    $len = count($arr);
    $f = 3;// 定义因子
    $h = 1;// 最小为1
    while ($h < $len/$f){
        $h = $f*$h + 1; // 1, 4, 13, 40, 121, 364, 1093, ...
    }
    while ($h >= 1){  // 将数组变为h有序
        for ($i = $h; $i < $len; $i++){  // 将a[i]插入到a[i-h], a[i-2*h], a[i-3*h]... 之中 （算法的关键
            for ($j = $i; $j >= $h;  $j -= $h){
                if ($arr[$j] < $arr[$j-$h]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j-$h];
                    $arr[$j-$h] = $temp;
                }
                //print_r($arr);echo '<br/>'; // 打开这行注释，可以看到每一步被替换的情形
            }
        }
        $h = intval($h/$f);
    }
    return $arr;
}
$arr = array(23,13,33,44,53,4,6,22,489,2,2,3,2,65,89,320,54,360,11,999);
$res = shell_sort($arr);
echo '<pre>';
print_r($res);
echo '</pre>';
