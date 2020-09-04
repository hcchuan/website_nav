<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Dan as DanModel;
class Dan extends Common
{
    
	
	public function index()
    {
        $dan=new DanModel();
        $tptc=$dan->order('id desc')->paginate(15);
        $this->assign('tptc',$tptc);
        return view();
    }

	public function add()
    {
        $dan=new DanModel();
		if(request()->isPost()){
			$data = input('post.');
			$data['time']=time();
			if($dan->add($data)){
				return json(array('code'=>200,'msg'=>'添加成功'));
			}else{
				return json(array('code'=>0,'msg'=>'添加失败'));
			}
		}
		$tptc=$dan->select();
        $this->assign('tptc',$tptc);
		return view();
    }

	public function edit()
    {
        $dan=new DanModel();
        if(request()->isPost()){
            $data=input('post.');
            if($dan->edit($data)){
                return json(array('code'=>200,'msg'=>'修改成功'));
            }else{
                return json(array('code'=>0,'msg'=>'修改失败'));
            }
        }
		$tptc=$dan->find(input('id'));
        $this->assign('tptc',$tptc);
        return view();
    }

	public function dels(){
		$dan=new DanModel();
		if($dan->destroy(input('post.id'))){
			return json(array('code'=>200,'msg'=>'删除成功'));
		}else{
			return json(array('code'=>0,'msg'=>'删除失败'));
		}
	}

	public function delss(){
		$dan=new DanModel();
		$params = input('post.');
		$ids = implode(',', $params['ids']);
		$result = $dan->batches('delete',$ids);
		if($result){
			return json(array('code'=>200,'msg'=>'批量删除成功'));
		}else{
			return json(array('code'=>0,'msg'=>'批量删除失败'));
		}
	}

	public function changeshow(){
        if(request()->isAjax()){
			$change=input('change');
			$show=db('dan')->field('show')->where('id',$change)->find();
			$show=$show['show'];
			if($show==1){
				db('dan')->where('id',$change)->update(['show'=>0]);
				echo 1;
			}else{
				db('dan')->where('id',$change)->update(['show'=>1]);
				echo 2;
			}
		}else{
            $this->error('非法操作');
		}
    }


}
