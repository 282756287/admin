<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/23 0023
 * Time: 10:53
 */

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Cookie;
use think\Request;
use think\Session;

header("Content-type: text/html; charset=utf-8");
class Login extends Controller
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $user = Session('user');
        if(!empty($user)){
           $this->redirect('Index/Index');
        }
    }

    public function index(){
        $auth = Db::name('auth_rule')->where('rule_id=1')->find();
        if(!empty($auth)){
            $auths = Db::name('auth')->where(array('id'=>array('in',$auth['auth_id']),'status'=>'1'))->select();
        }
        print_r($auths);
        return $this->fetch();
    }

    /**
     * 登陆验证
     */
    public function chenlogin(){
        $data = input('','post');
        if(empty($data)){
            return ['code'=>-1,'msg'=>'参数错误'];
        }else{
            $user_name= request()->post('user_name');
            $password= request()->post('password');
            $result = Db::name('user')
                ->where(['username'=>$user_name])
                ->find();
            $inPWD=md5($password.$result['rand_str']);
            if(empty($result)){
                return ['code'=>-1,'msg'=>'用户不存在'];
            }
            if($result['password']==$inPWD){
                Db::name('user')->where(['username'=>$user_name])->update(['last_ip'=>request()->ip(),'last_time'=>time()]);
                session('user',$result);
                Cookie::forever('Admin',$result);
                return ['code'=>200,'msg'=>'登录成功!'];
            }else{
                return ['code'=>-1,'msg'=>'密码错误'];
            }
        }
    }


}