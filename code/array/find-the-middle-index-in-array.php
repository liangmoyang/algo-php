<?php

/**
 * 找到数组的中间位置
 * https://leetcode.cn/problems/find-the-middle-index-in-array/
 * 2023-7-28
 */

// 左边的所有的值乘以2，加上当前的值等于总数
function solution($nums){
    $count = array_sum($nums);

    $left = 0;
    foreach($nums as $k=>$v){
        if($left*2 + $v == $count){
            return $k;
        }

        $left += $v;
    }

    return -1;
}