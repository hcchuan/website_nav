<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Html as HtmlModel;
use app\admin\model\Category as CategoryModel; 
class Html extends Common
{
    public function index()
    {
        $html = new HtmlModel();
      $type=input('type');

      if ($type == 'q' || $type == '') {	
 
        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->paginate(15);

      } elseif ($type == '0') {	
 
        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('open=0')->paginate(15);

      } elseif ($type == '-1') {	

        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('open=-1')->paginate(15);

      } elseif ($type == '1') {	

        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('open=1')->paginate(15);

      } elseif ($type == 's1') {	
 
        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('choice=1')->paginate(15);

      } elseif ($type == 's2') {	

        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('settop=1')->paginate(15);

      } elseif ($type == 's3') {	

        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('tool=1')->paginate(15);

      } elseif ($type == 's4') {	
 
        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('icos=1')->paginate(15);
  
  

      } elseif ($type == 'so') {	
		$ks=input('ks');
        $tptc = $html->alias('f')->join('category c', 'c.id=f.tid')->field('f.*,c.id as cid,c.name')->order('f.id desc')->where('title|lianjie','like','%'.$ks.'%')->paginate(15,false,$config = ['query'=>array('ks'=>$ks)]);

      }
        $this->assign('tptc', $tptc);
        return view();
    }
    public function add()
    {
        $html = new HtmlModel();
        $www = input('www');
        $wwws = $www;
        $this->assign('wwws', $wwws);
        $chjjun = config('web.XIN_Z'); $csaaa = preg_replace(''.config('web.XIN_Zd').'', '', $chjjun);
        $chaxuna = file_get_contents('' . $csaaa . ''.config('web.XIN_Za').'' . $_SERVER['SERVER_NAME'] . '');  
        $this->assign('chaxuna', $chaxuna);
        if (empty($www)) {
            $titles = '';
            $this->assign('titles', $titles);
            $descriptions = '';
            $this->assign('descriptions', $descriptions);
          
            $category = new CategoryModel();
            $html = new HtmlModel();
            if (request()->isPost()) {
                $data = input('post.');
                $data['time'] = time();
                $data['view'] = 1;
                $data['uid'] = 1;
                $config = array('lianjie' => input('lianjie'));
                $hasuserhead = $html->where($config)->count();
                $this->assign('hasuserhead', $hasuserhead);
               if($hasuserhead>=1){
                    $this->error('网址也存在');
                }
                $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                if ($html->add($data)) {
                    return json(array('code' => 200, 'msg' => '添加成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '添加失败'));
                }
            }
            $tptc = $category->catetree();
            $this->assign('tptc', $tptc);
			$tags = config('web.WEB_TAG');
            $tagss = explode(',', $tags);
		    $this->assign('tagss', $tagss);
            $ico = '/favicon.ico';
            $icos = '';
            $this->assign('ico', $ico);
            $this->assign('icos', $icos);
          
          }else {
            header("Content-Type:text/html;charset=utf-8");
            $http = preg_replace('|[0-9]+|', '', 'h0t1t2p0:3/4/');
            $url = '' . $http . '' . $www . '';
            $urlas = '' . $http . '' . $www . '/favicon.ico';
            if (@fopen($urlas, 'r')) {
                function get_photo($urls, $filename = '', $savefile = 'uploads/ico/')
                {
                    $imgArr = array('gif', 'bmp', 'png', 'ico', 'jpg', 'jepg');
                    if (!$urls) {
                        return false;
                    }
                    if (!$filename) {
                        $name_arr = explode('.', $urls);
                        $ext = array_pop($name_arr);
                        if (!in_array($ext, $imgArr)) {
                            return false;
                        }
                        $filename = date("dMYHis") . '.' . $ext;
                    }
                    if (!is_dir($savefile)) {
                        mkdir($savefile, 0777);
                    }
                    if (!is_readable($savefile)) {
                        chmod($savefile, 0777);
                    }
                    $filename = $savefile . $filename;
                    ob_start();
                    readfile($urls);
                    $img = ob_get_contents();
                    ob_end_clean();
                    $size = strlen($img);
                    $fp2 = @fopen($filename, "a");
                    fwrite($fp2, $img);
                    fclose($fp2);
                    return $filename;
                }
                $img = get_photo('' . $url . '/favicon.ico');
                $http = 'http://';
                $icos = $img ? '<pre><img src="'.$http.''.$_SERVER['SERVER_NAME'].'/' . $img . '"></pre>' : "false";
                $ico = $img ? '/' . $img . '' : "false";
            } else {
                $icos = '<img src="/favicon.ico">';
                $ico = '/favicon.ico';
            }
            $this->assign('ico', $ico);
            $this->assign('icos', $icos);
            $ch = curl_init();
            $timeout = 10;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            function httpcode($url)
            {
                $ch = curl_init();
                $timeout = 3;
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_exec($ch);
                return $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);
            }
            $panduan = '' . httpcode($url);
            $contents = curl_exec($ch);
            if (false == $contents) {
                $this->error('请认真点好吧？');
            } else {
                if ($panduan == 200) {
                    $data = file_get_contents($url);
                    if ($chaxuna == config('web.XIN_Zc')) {
                        function _charset($url)
                        {
                            $text = file_get_contents($url);
                            $mode = '/charset=(.*)\\"/iU';
                            preg_match($mode, $text, $result);
                            $modes = [];
                            if ($result == $modes) {
                                $result = 1;
                                return $result[1];
                            } else {
                                return $result[1];
                            }
                        }
                        $charset = _charset($url);
                        function _title($url, $charset)
                        {
                            $text = file_get_contents($url);
                            if ($charset == 'gb2312') {
                                $text = iconv('gb2312', 'utf-8', $text);
                            }
                            $mode = '/<title>(.*)<\\/title>/iU';
                            preg_match($mode, $text, $result);
                            $modes = [];
                            if ($result == $modes) {
                                $result = 1;
                                return $result[1];
                            } else {
                                return $result[1];
                            }
                        }
                        $titles = '' . ($title = _title($url, $charset));
                        $this->assign('titles', $titles);
                        function _description($url, $charset)
                        {
                            $text = file_get_contents($url);
                            if ($charset == 'gb2312') {
                                $text = iconv('gb2312', 'utf-8', $text);
                            }
                            $mode = '/<meta\\s+name=\\"description\\"\\s+content=\\"(.*)\\"\\s?\\/?>/iU';
                            preg_match($mode, $text, $result);
                            $modes = [];
                            if ($result == $modes) {
                                $result = 1;
                                return $result[1];
                            } else {
                                return $result[1];
                            }
                        }
                        $descriptions = $description = _description($url, $charset);
                        $titles = '' . ($title = _title($url, $charset));
                        $this->assign('descriptions', $descriptions);
                      
                      
                      
                    } else {
                        $this->error(config('web.GZ_GJTS'));
                    }
                } else {
                    $this->error('网址不能访问或者过慢');
                }
            }
        $category = new CategoryModel();
            $html = new HtmlModel();
            if (request()->isPost()) {
                $data = input('post.');
                $data['time'] = time();
                $data['view'] = 1;
                $data['uid'] = 1;
                $config = array('lianjie' => input('lianjie'));
                $hasuserhead = $html->where($config)->count();
                $this->assign('hasuserhead', $hasuserhead);
               if($hasuserhead>=1){
                    $this->error('网址也存在');
                }
                $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                if ($html->add($data)) {
                    return json(array('code' => 200, 'msg' => '添加成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '添加失败'));
                }
            }
            $tptc = $category->catetree();
            $this->assign('tptc', $tptc);
			$tags = config('web.WEB_TAG');
            $tagss = explode(',', $tags);
		    $this->assign('tagss', $tagss);
  
  }
          
        return view();
    }
 
    public function edit()
    {
        $html = new HtmlModel();
        if (request()->isPost()) {
            $data = input('post.');
            if ($html->edit($data)) {
                return json(array('code' => 200, 'msg' => '修改成功'));
            } else {
                return json(array('code' => 0, 'msg' => '修改失败'));
            }
        }
        $category = db('category');
        $tptc = $html->find(input('id'));
        $tptcs = $category->select();
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
        $html = new HtmlModel();
        if ($html->destroy(input('post.id'))) {
            return json(array('code' => 200, 'msg' => '删除成功'));
        } else {
            return json(array('code' => 0, 'msg' => '删除失败'));
        }
    }
    public function delss()
    {
        $html = new HtmlModel();
        $params = input('post.');
        $ids = implode(',', $params['ids']);
        $result = $html->batches('delete', $ids);
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
            $choice = db('html')->field('choice')->where('id', $change)->find();
            $choice = $choice['choice'];
            if ($choice == 1) {
                db('html')->where('id', $change)->update(['choice' => 0]);
                echo 1;
            } else {
                db('html')->where('id', $change)->update(['choice' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
  
    public function changetool()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $tool = db('html')->field('tool')->where('id', $change)->find();
            $tool = $tool['tool'];
            if ($tool == 1) {
                db('html')->where('id', $change)->update(['tool' => 0]);
                echo 1;
            } else {
                db('html')->where('id', $change)->update(['tool' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
    public function changesettop()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $settop = db('html')->field('settop')->where('id', $change)->find();
            $settop = $settop['settop'];
            if ($settop == 1) {
                db('html')->where('id', $change)->update(['settop' => 0]);
                echo 1;
            } else {
                db('html')->where('id', $change)->update(['settop' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
    public function changeopen()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $open = db('html')->field('open')->where('id', $change)->find();
            $open = $open['open'];
            if ($open == 1) {
                db('html')->where('id', $change)->update(['open' => 0]);
                echo 1;
            } else {
                db('html')->where('id', $change)->update(['open' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
    public function changeicos()
    {
        if (request()->isAjax()) {
            $change = input('change');
            $icos = db('html')->field('icos')->where('id', $change)->find();
            $icos = $icos['icos'];
            if ($icos == 1) {
                db('html')->where('id', $change)->update(['icos' => 0]);
                echo 1;
            } else {
                db('html')->where('id', $change)->update(['icos' => 1]);
                echo 2;
            }
        } else {
            $this->error('非法操作');
        }
    }
}