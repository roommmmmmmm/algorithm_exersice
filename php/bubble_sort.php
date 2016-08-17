<?php
/**
* 冒泡排序 bubble sort
*
* 原理:多次循环进行比较，每次比较时将最大数移动到最上面。每次循环时，找出剩余变量里的最大值，然后减小查询范围。这样经过多次循环以后，就完成了对这个数组的排序
*/
function sort_bubble($list)
{
  $len = count($list);
  if(empty($len)){
    return $list;
  }

  for($i = 0;$i < $len; $i++)
  {
    for($j = $i + 1; $j < $len; $j++)
    {
      $flag = '';
      if($list[$i] > $list[$j]) // 从小到大
      //if($list[$i] < $list[$j]) // 从大到小
      {
        $tmp = $list[$i];
        $list[$i] = $list[$j];
        $list[$j] = $tmp;

        $flag = " change";
      }
      echo implode(',',$list).$flag."<br/>";
    }
    echo "-------------------------<br/>";
  }
  return $list;
}

$list = array(5,8,1,3,4,7,9,2,6,0);
$list = sort_bubble($list);
