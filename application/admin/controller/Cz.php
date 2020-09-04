<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\controller;
use think\Controller;
class Cz extends Common
{
    
	
	public function index()
    {
        $dingdan=db('dingdan');
        $tptc=$dingdan->order('add_time desc')->paginate(15);
        $this->assign('tptc',$tptc);
        return view();
    }

 
 
	public function dels(){
		$dingdan=db('dingdan');
 
		if($dingdan->Delete(input('post.id'))){
			return json(array('code'=>200,'msg'=>'删除成功'));
		}else{
			return json(array('code'=>0,'msg'=>'删除失败'));
		}
	}
	public function changeshow(){
        if(request()->isAjax()){
			$change=input('change');
			$status=db('dingdan')->field('status')->where('id',$change)->find();
			$status=$status['status'];
			if($status==1){
				db('dingdan')->where('id',$change)->update(['status'=>0]);
				echo 1;
			}else{
				db('dingdan')->where('id',$change)->update(['status'=>1]);
				echo 2;
			}
		}else{
            $this->error('非法操作');
		}
    }


}
