<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/6/26
 * Time: 9:18
 */

namespace Home\Controller;
use Think\Controller;

class subStringController extends Controller{

        function subString($str, $start, $length) {
            $i = 0;
            while($i < $start) {
                $ord = ord($str{$i});
                if($ord < 192) {
                    $i++;
                } elseif($ord <224) {
                    $i += 2;
                } else {
                    $i += 3;
                }
            }
            $result = '';
            while($i < $start + $length && $i < strlen($str)) {
                $ord = ord($str{$i});
                if($ord < 192) {
                    $result .= $str{$i};
                    $i++;
                } elseif($ord <224) {
                    $result .= $str{$i}.$str{$i+1};
                    $i += 2;
                } else {
                    $result .= $str{$i}.$str{$i+1}.$str{$i+2};
                    $i += 3;
                }
            }
            if($i < strlen($str)) {
                $result .= '';
            }
            return $result;
        }

        function subStringTail($str, $start, $length) {
            $i = 0;
            while($i < $start) {
                $ord = ord($str{$i});
                if($ord < 192) {
                    $i++;
                } elseif($ord <224) {
                    $i += 2;
                } else {
                    $i += 3;
                }
            }
            $result = '';
            while($i < $start + $length && $i < strlen($str)) {
                $ord = ord($str{$i});
                if($ord < 192) {
                    $result .= $str{$i};
                    $i++;
                } elseif($ord <224) {
                    $result .= $str{$i}.$str{$i+1};
                    $i += 2;
                } else {
                    $result .= $str{$i}.$str{$i+1}.$str{$i+2};
                    $i += 3;
                }
            }
            if($i < strlen($str)) {
                $result .= '...';
            }
            return $result;
        }

}