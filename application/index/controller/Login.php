<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\index\controller;
use app\index\controller\HomeBase;
use think\Controller;
use think\Db;
use Captcha\Captcha;
use think\Cache;
use think\Config;
use think\Session;
use think\Request;
use app\index\model\Member as MemberModel;
class Login extends HomeBase
{
  
    public function _initialize()
    {
  parent::_initialize();
    }
    public function index()
    {
        $member = new MemberModel();
        if(session('userid')!=''){
            $this->error('你已登录',url('/'));
        }
		if (request()->isPost()) {
            $data = input('post.');
			$status['status'] = 1;
            $user = $member->where($status)->where('usermail', $data['usermail'])->find();
 
          
            if ($user) {
                if ($user['password'] == substr(md5($data['password']), 8, 16)) {
					session('userhead', $user['userhead']);
                    session('username', $user['username']);
                    session('userid', $user['userid']);
					session('point', $user['point']);
					$member->where('userid',session('userid'))->setInc('point',config('point.GJJF-DL'));
                    return json(array('code' => 200, 'msg' => '登录成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '密码错误'));
                }
            } else {
                return json(array('code' => 0, 'msg' => '账号错误'));
            }
          
 
          
          
        }
        return view();
    }
    public function reg()
    {
        $member = new MemberModel();
      
        if (request()->isPost()) {
            $data = input('post.');
			$webreg = 1;
            $password = input('password');
            $passwords = input('passwords');
            $mail = $member->where('usermail', $data['usermail'])->find();
            if (!$mail) {
                $user = $member->where('username', $data['username'])->find();
                if (!$user) {
                    if ($password != $passwords) {
                        return json(array('code' => 0, 'msg' => '两次密码不一样'));
                    }
					if ($webreg != config('web.WEB_REG')) {
                        return json(array('code' => 0, 'msg' => '已关闭会员注册'));
                    }
                    $data['regtime'] = time();
                    $data['grades'] = 0;
                    $data['status'] = config('web.WEB_REG');
                    $data['point'] = config('point.GJJF-ZC');
                    $data['userhead'] = '/public/img/touxiang.jpg';
                    $data['userip'] = $_SERVER['REMOTE_ADDR'];
                    $data['password'] = substr(md5($password), 8, 16);
                  
                  
                if (isset($_REQUEST['authcode'])) {
                   // session_start();
                    if (strtolower($_REQUEST['authcode']) == $_SESSION['authcode']) {
                    if ($member->add($data)) {
                        return json(array('code' => 200, 'msg' => '注册成功'));
                    } else {
                        return json(array('code' => 0, 'msg' => '注册失败'));
                    }
                  } else {
                        $this->error('验证码错误');
                    }
                                     
                }
                      
                } else {
                    return json(array('code' => 0, 'msg' => '该昵称已存在'));
                }
            } else {
                return json(array('code' => 0, 'msg' => '该邮箱已存在'));
            }
        }
        return view();
    }
 
 
  
    public function logout()
    {
        session("userid", NULL);
        session("username", NULL);
		session("usermail", NULL);
        session("kouling", NULL);
        return json(array('code' => 200, 'msg' => '退出成功'));
        return NULL;
    }
}