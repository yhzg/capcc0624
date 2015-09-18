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

       function subString_bit($str, $start, $length) {
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

    function subString($content,$length)
    {

        //对象，开始位置，长度，编码
        $content_1=iconv_substr($content,0,$length,'UTF-8');
        //dump($content_1);
        //查找最后一个句号
        $dot_po=strrpos($content_1,'。');
        //dump($dot_po);
        if($dot_po!=0)
        {
            $content_2=iconv_substr($content_1,0,$dot_po).'。';
        }else
        {
            $content_2='';
        }

        return $content_2;
    }

}