<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/8/20
 * Time: 16:13
 */

namespace Home\Controller;

use Think\Controller;

Vendor('Sms.CCPRestSDK');
class SmsController extends Controller {

    //以下是手机验证码


    /**
     * 发送模板短信
     * @param to 手机号码集合,用英文逗号分开
     * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
     * @param $tempId 模板Id
     */
        function sendTemplateSMS($to,$datas,$tempId)
        {
            // 初始化REST SDK
            $accountSid='8a48b5514f1702fd014f29ec31de197a';
            //主帐号Token
            $accountToken= '1fb094b6f956426480f88e8d24f26950';
            //应用Id
            $appId='aaf98f894f4900a3014f499a536a0099';
            //请求地址，格式如下，不需要写https://
            $serverIP='sandboxapp.cloopen.com';
            //请求端口
            $serverPort='8883';
            //REST版本号
            $softVersion='2013-12-26';
            //global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;

            $rest = new \REST($serverIP,$serverPort,$softVersion);
            $rest->setAccount($accountSid,$accountToken);
            $rest->setAppId($appId);

            // 发送模板短信
            echo "Sending TemplateSMS to $to <br/>";
            $result = $rest->sendTemplateSMS($to,$datas,$tempId);
            if($result == NULL ) {
                echo "result error!";
               // break;
                exit;
            }
            if($result->statusCode!=0) {
                echo "error code :" . $result->statusCode . "<br>";
                echo "error msg :" . $result->statusMsg . "<br>";
                //TODO 添加错误处理逻辑
                return 0;
            }else{
                echo "Sendind TemplateSMS success!<br/>";
                // 获取返回信息
                $smsmessage = $result->TemplateSMS;
                echo "dateCreated:".$smsmessage->dateCreated."<br/>";
                echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
                //TODO 添加成功处理逻辑
                return 1;
            }
        }

}