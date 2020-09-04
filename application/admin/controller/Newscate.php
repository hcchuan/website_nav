<?php

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Newscate as NewscateModel;
class Newscate extends Common
{
    protected $beforeActionList = ['delsoncate' => ['only' => 'dels']];
    public function index()
    {

        $newscate = new NewscateModel();
        $tptc = $newscate->catetree();
        $this->assign('tptc', $tptc);
        return view(); 
    }
    public function add()
    {
       $newscate = new NewscateModel();
       $news = $newscate->count();
       $this->assign('news', $newscate);
       $ksdx = db('member')->where('userid = 1')->value('key');
        if ($ksdx == '0' or $ksdx == '') {
          if ($news >= config('web.XIN_Zw')) {   
           $this->error(config('web.GZ_PTTS'));
         } else {if (request()->isPost()) {
            $data = input('post.');
            $data['time'] = time();
            if ($newscate->add($data)) { 
              return json(array('code' => 200, 'msg' => '添加成功'));
            } else {  return json(array('code' => 0, 'msg' => '添加失败'));
            }
           }
         }
        } else {
        if (request()->isPost()) {
            $data = input('post.');
            $data['time'] = time();
            if ($newscate->add($data)) {
                return json(array('code' => 200, 'msg' => '添加成功'));
            } else {
                return json(array('code' => 0, 'msg' => '添加失败'));
            }
           }
          }
        $tptc = $newscate->catetree();
        $this->assign('tptc', $tptc);
        return view();
    }
    public function edit()
    {

        $newscate = new NewscateModel();
        if (request()->isPost()) {
            $data = input('post.');
            if ($newscate->edit($data)) {
                return json(array('code' => 200, 'msg' => '修改成功'));
            } else {
                return json(array('code' => 0, 'msg' => '修改失败'));
            }
        }
        $tptc = $newscate->find(input('id'));
        $tptcs = $newscate->catetree();
        $this->assign(array('tptcs' => $tptcs, 'tptc' => $tptc));
        return view();
    }
    public function dels()
    {
        $dels = db('newscate')->delete(input('id'));
        if ($dels) {
            return json(array('code' => 200, 'msg' => '删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '删除失败'));
        }
    }
    public function delsoncate()
    {
        $cateid = input('id');
        $newscate = new NewscateModel();
        $sonids = $newscate->getchilrenid($cateid);
        if ($sonids) {
            db('newscate')->delete($sonids);
        }
    }
    public function changeshow()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $show = db('newscate')->field('show')->where('id', $change)->find();
            $show = $show['show'];
            if ($show == 1) {
                db('newscate')->where('id', $change)->update(['show' => 0]);
                echo 1;
            } else {
                db('newscate')->where('id', $change)->update(['show' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
    public function changesidebar()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $sidebar = db('newscate')->field('sidebar')->where('id', $change)->find();
            $sidebar = $sidebar['sidebar'];
            if ($sidebar == 1) {
                db('newscate')->where('id', $change)->update(['sidebar' => 0]);
                echo 1;
            } else {
                db('newscate')->where('id', $change)->update(['sidebar' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
}