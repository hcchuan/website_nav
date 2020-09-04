<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Wang as WangModel;
use app\admin\model\Wangcate as WangcateModel; 
class Wang extends Common
{
    public function index()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $wang = new WangModel();
		$ks=input('ks');
        $tptc = $wang->alias('f')->join('wangcate c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('title','like','%'.$ks.'%')->paginate(15,false,$config = ['query'=>array('ks'=>$ks)]);
        $this->assign('tptc', $tptc);
          }
       $wangcate = new WangcateModel();
      $tptcs = $wangcate->catetree();
       $this->assign('tptcs', $tptcs);
        return view();
    }
    public function add()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
      $wangcate = new WangcateModel();
            $wang = new WangModel();
            if (request()->isPost()) {
                $data = input('post.');
                $data['time'] = time();
                $data['view'] = 1;
                $data['uid'] = 1;
              /*
               $config = array( 
                 'title' => input('title'), 
               ); 
               */
                if ($wang->add($data)) {
                    return json(array('code' => 200, 'msg' => '添加成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '添加失败'));
                }
            }
            $tptc = $wangcate->catetree();
            $this->assign('tptc', $tptc);
			$tags = config('web.WEB_TAG');
            $tagss = explode(',', $tags);
		    $this->assign('tagss', $tagss);
          }
        return view();
    }
 
    public function edit()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $wang = new WangModel();
        if (request()->isPost()) {
            $data = input('post.');
            if ($wang->edit($data)) {
                return json(array('code' => 200, 'msg' => '修改成功'));
            } else {
                return json(array('code' => 0, 'msg' => '修改失败'));
            }
        }
        $wangcate = db('wangcate');
        $tptc = $wang->find(input('id'));
        $tptcs = $wangcate->select();
        $this->assign(array('tptcs' => $tptcs, 'tptc' => $tptc));
      				
      $tags = config('web.WEB_TAG');
               
      $tagss = explode(',', $tags);
		        
      $this->assign('tagss', $tagss);
          }
        return view();
          
    }
    public function doUploadPic()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $file = request()->file('FileName');
        $info = $file->move(ROOT_PATH . DS . 'uploads');
		if($info){
			$path = WEB_URL . DS . 'uploads' . DS .$info->getSaveName();
			echo str_replace("\\","/",$path);
        }
          }
    }
    public function dels()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $wang = new WangModel();
        if ($wang->destroy(input('post.id'))) {
            return json(array('code' => 200, 'msg' => '删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '删除失败'));
        }
          }
    }
    public function delss()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        $wang = new WangModel();
        $params = input('post.');
        $ids = implode(',', $params['ids']);
        $result = $wang->batches('delete', $ids);
        if ($result) {
            return json(array('code' => 200, 'msg' => '批量删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '批量删除失败'));
        }
          }
    }

    public function changeopen()
    {
        $key = db('member')->where('userid = 1')->value('key');
        if ($key == '0' or $key == '') {
          return $this->error(config('web.GZ_TS'));
        } else {
        if (request()->isAjax()) {
            $change = input('change');
            $open = db('wang')->field('open')->where('id', $change)->find();
            $open = $open['open'];
            if ($open == 1) {
                db('wang')->where('id', $change)->update(['open' => 0]);
                echo 1;
            } else {
                db('wang')->where('id', $change)->update(['open' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
          }
    }

}