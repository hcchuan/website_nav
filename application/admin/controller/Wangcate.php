<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Wangcate as WangcateModel;
class Wangcate extends Common
{
    protected $beforeActionList = ['delsoncate' => ['only' => 'dels']];
    public function index()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $wangcate = new WangcateModel();
        $tptc = $wangcate->catetree();
        $this->assign('tptc', $tptc);
        return view();
       }   
    }
    public function add()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
         $wangcate = new WangcateModel();
        if (request()->isPost()) {
            $data = input('post.');
            $data['time'] = time();
            if ($wangcate->add($data)) {
                return json(array('code' => 200, 'msg' => '添加成功'));
            } else {
                return json(array('code' => 0, 'msg' => '添加失败'));
            }
        }
        $tptc = $wangcate->catetree();
        $this->assign('tptc', $tptc);
        }
        return view();
    }
    public function edit()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $wangcate = new WangcateModel();
        if (request()->isPost()) {
            $data = input('post.');
            if ($wangcate->edit($data)) {
                return json(array('code' => 200, 'msg' => '修改成功'));
            } else {
                return json(array('code' => 0, 'msg' => '修改失败'));
            }
        }
        $tptc = $wangcate->find(input('id'));
        $tptcs = $wangcate->catetree();
        $this->assign(array('tptcs' => $tptcs, 'tptc' => $tptc));
        }
        return view();
    }
    public function dels()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $dels = db('wangcate')->delete(input('id'));
        if ($dels) {
            return json(array('code' => 200, 'msg' => '删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '删除失败'));
        }
       }
    }
    public function delsoncate()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $cateid = input('id');
        $wangcate = new WangcateModel();
        $sonids = $wangcate->getchilrenid($cateid);
        if ($sonids) {
            db('wangcate')->delete($sonids);
        }
          }
    }
    public function changeshow()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        if (request()->isAjax()) {
            $change = input('change');
            $show = db('wangcate')->field('show')->where('id', $change)->find();
            $show = $show['show'];
            if ($show == 1) {
                db('wangcate')->where('id', $change)->update(['show' => 0]);
                echo 1;
            } else {
                db('wangcate')->where('id', $change)->update(['show' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
          }
    }
    public function changesidebar()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        if (request()->isAjax()) {
            $change = input('change');
            $sidebar = db('wangcate')->field('sidebar')->where('id', $change)->find();
            $sidebar = $sidebar['sidebar'];
            if ($sidebar == 1) {
                db('wangcate')->where('id', $change)->update(['sidebar' => 0]);
                echo 1;
            } else {
                db('wangcate')->where('id', $change)->update(['sidebar' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
          }
    }
}