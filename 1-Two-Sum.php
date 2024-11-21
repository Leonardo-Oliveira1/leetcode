<?php

// 1. Two Sum
// https://leetcode.com/problems/two-sum/
class Solution {

    /**
    * @param Int[] $nums
    * @param Int $target
    * @return Int[]
    */
    function twoSum($nums, $target) {
        
        $arr = [];
        for ($i=0; $i < count($nums) - 1; $i++) { 
            if($nums[$i] + $nums[$i+1] == $target){
                array_push($arr, $i);
                array_push($arr, $i + 1);
            }
        }

        // REMOVE THE COMMENT FROM THE LINE BELOW TO TEST
        // print_r($arr);

        return $arr;
    }

}

// TESTS
$solution = new Solution;
$solution->twoSum([2,7,11,15], 9); // EXPECTED [0,1]
$solution->twoSum([3,2,4], 6);     // EXPECTED [1,2]
$solution->twoSum([3,3], 6);       // EXPECTED [0,1]

?>