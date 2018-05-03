<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Request;
// 应用公共文件

/**
 * @return string
 * 获取当前方法名和操作名
 */
function Obtain_model(){
    $request= Request::instance();
    $module_name=$request->module();
    $controller_name=$request->controller();
    $action=$request->action();
    return $module_name.'/'.$controller_name.'/'.$action;
}

function Head_img($img){
    if(isset($img)){
        return $img;
    }else{
        return '/public/static/admin/images/qq64.png';
    }
}

/*******************************************************字母W***********************************************************/
//写日志文件到txt文件
function write_log_txt($log){
    $newLog = array(
        '日志时间' => date('Y-m-d H:i:s'),
        '日志内容' => $log
    );
    $logName = 'test_logs';
    $logData = F($logName);
    if(!empty($logData)){
        array_unshift($logData,$newLog);
    }else{
        $logData = array(
            $newLog
        );
    }
    if(count($logData)>500){
        array_pop($logData);
    }
    S($logName,$logData);
}