<?

/**
 * 回文数
 * https://leetcode.cn/problems/palindrome-number/description/
 */


/**
 * 利用取模的方式/10逐个获取尾数，然后*10回文
 */
function isPalindrome($x)
{
    // 负数都不是回文数
    if ($x < 0) {
        return false;
    }

    // 如果最后一个位数是0，也不可能是回文数
    if ($x % 10 == 0 && $x != 0) {
        return false;
    }

    $revertedNumber = 0;

    // 因为原数值一直在/10，而回文数值在*10
    // 所以当回文数字大于原数值的时候，就是遍历到一半了
    while($x > $revertedNumber){
        $revertedNumber = $x % 10  + $revertedNumber * 10;
        $x = intval($x / 10); 
    }

    // 位数为偶数的时候
    if($x == $revertedNumber){
        return true;
    }

    // 位数为奇数的时候
    // 注意这里是回文数/10
    if(intval($revertedNumber / 10) == $x){
        return true;
    }
    
    return false;
}   

