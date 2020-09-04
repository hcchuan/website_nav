<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\News as NewsModel;
use app\admin\model\Newscate as NewscateModel; 
class News extends Common
{
    public function index()
    {
        $news = new NewsModel();
		$ks=input('ks');
        $tptc = $news->alias('f')->join('newscate c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('title','like','%'.$ks.'%')->paginate(15,false,$config = ['query'=>array('ks'=>$ks)]);
        $this->assign('tptc', $tptc);
        return view();
    }
    public function add()
    {
      $newscate = new NewscateModel();
            $news = new NewsModel();
            if (request()->isPost()) {
                $data = input('post.');
                $data['time'] = time();
                $data['view'] = 1;
                $data['uid'] = 1;
                $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                if ($news->add($data)) {
                    return json(array('code' => 200, 'msg' => '添加成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '添加失败'));
                }
            }
            $tptc = $newscate->catetree();
            $this->assign('tptc', $tptc);
			$tags = config('web.WEB_TAG');
            $tagss = explode(',', $tags);
		    $this->assign('tagss', $tagss);
        return view();
    }
 
    public function edit()
    {
        $news = new NewsModel();
        if (request()->isPost()) {
            $data = input('post.');
            if ($news->edit($data)) {
                return json(array('code' => 200, 'msg' => '修改成功'));
            } else {
                return json(array('code' => 0, 'msg' => '修改失败'));
            }
        }
        $newscate = db('newscate');
        $tptc = $news->find(input('id'));
        $tptcs = $newscate->select();
        $this->assign(array('tptcs' => $tptcs, 'tptc' => $tptc));
      				
      $tags = config('web.WEB_TAG');
               
      $tagss = explode(',', $tags);
		        
      $this->assign('tagss', $tagss);
        return view();
    }
    public function doUploadPic()
    {
        $file = request()->file('FileName');
        $info = $file->move(ROOT_PATH . DS . 'uploads');
		if($info){
			$path = WEB_URL . DS . 'uploads' . DS .$info->getSaveName();
			echo str_replace("\\","/",$path);
        }
    }
    public function dels()
    {
        $news = new NewsModel();
        if ($news->destroy(input('post.id'))) {
            return json(array('code' => 200, 'msg' => '删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '删除失败'));
        }
    }
    public function delss()
    {
        $news = new NewsModel();
        $params = input('post.');
        $ids = implode(',', $params['ids']);
        $result = $news->batches('delete', $ids);
        if ($result) {
            return json(array('code' => 200, 'msg' => '批量删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '批量删除失败'));
        }
    }
    public function changechoice()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $choice = db('news')->field('choice')->where('id', $change)->find();
            $choice = $choice['choice'];
            if ($choice == 1) {
                db('news')->where('id', $change)->update(['choice' => 0]);
                echo 1;
            } else {
                db('news')->where('id', $change)->update(['choice' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
    public function changesttop()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $sttop = db('news')->field('sttop')->where('id', $change)->find();
            $sttop = $sttop['sttop'];
            if ($sttop == 1) {
                db('news')->where('id', $change)->update(['sttop' => 0]);
                echo 1;
            } else {
                db('news')->where('id', $change)->update(['sttop' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
    public function changeshow()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $show = db('news')->field('show')->where('id', $change)->find();
            $show = $show['show'];
            if ($show == 1) {
                db('news')->where('id', $change)->update(['show' => 0]);
                echo 1;
            } else {
                db('news')->where('id', $change)->update(['show' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
}