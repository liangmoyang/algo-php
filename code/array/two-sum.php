<?

/**
 * 解法一：暴力枚举法，两个for逐个匹配对比
 */
function twoSum($nums, $target)
{
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if ($nums[$i] + $nums[$j] == $target) {
                return [$i, $j];
            }
        }
    }
}

/**
 * 哈希解法（类似）
 * [2,7,11,15],target=9
 * 遍历数组，如：2，那么需要的值就是9-2=7
 * 在数组中寻找7，有值，则返回当前索引和目标索引
 * array_search必须判断为非false：[3,3]同值的情况下，会匹配到下标0导致条件不符合
 */
function twoSum_1($nums, $target) {

    for($i = 0;$i< count($nums);$i++){
        $sub = $target - $nums[$i];

        $is_has = array_search($sub,$nums);
        if($is_has !== false && $is_has != $i){
            return [$is_has,$i];
        }
    }

    return [];
}
