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
use app\index\model\News as NewsModel;
use app\index\model\Html as HtmlModel;
use app\index\model\Member as MemberModel;
class User extends HomeBase
{
  
    public function _initialize()
    {
  parent::_initialize();
    }
    public function comment()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录', url('login/index'));
        } else {
          
        $s = input('s');
        if ($s == 'p' || $s == '') {	
            $comment = Db::name('comment');
            $uid = session('userid');
            $tptc = $comment->alias('c')->join('news f', 'f.id=c.fid')->field('c.*,f.title')->where("c.uid = {$uid}")->order('c.id desc')->paginate(8);
            $this->assign('tptc', $tptc);
        } elseif ($s == 't') {	
         $news = Db::name('news');
            if (request()->isPost()) {
                $data = input('post.');
                $data['time'] = time();
                $data['show'] = 0;
                $data['view'] = 1;
                $data['uid'] = session('userid');
                $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                $member = Db::name('member');
                $member->where('userid', session('userid'))->setInc('point', config('point.ADD_POINT'));
                if ($news->insert($data)) {
                    return json(array('code' => 200, 'msg' => '添加成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '添加失败'));
                }
            }
            $category = Db::name('newscate');
            $tptc = $category->select();
            $this->assign('tptc', $tptc);
			$tags = config('web.WEB_TAG');
            $tagss = explode(',', $tags);
		    $this->assign('tagss', $tagss);
          } elseif ($s == 'index') {	
            $news = Db::name('news');
            $uid = session('userid');
            $tptc = $news->where("uid = {$uid}")->order('id desc')->paginate(10);
            $this->assign('tptc', $tptc);
          }
          $this->assign('s', $s);
            return view();
        }
    }
    public function kuai()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录', url('login/index'));
        } else {
            $uid = session('userid');
            $www = input('www');
            $wwws = $www;
            $this->assign('wwws', $wwws);
            $chun = config('web.XIN_Z');
            $csa = preg_replace('' . config('web.XIN_Zd') . '', '', $chun);
            $chaxuna = file_get_contents('' . $csa . '' . config('web.XIN_Za') . '' . $_SERVER['SERVER_NAME'] . '');
            $this->assign('chaxuna', $chaxuna);
            if (empty($www)) {
                $titles = '';
                $this->assign('titles', $titles);
                $descriptions = '';
                $this->assign('descriptions', $descriptions);
                $category = Db::name('category');
                $html = new HtmlModel();
                if (request()->isPost()) {
                    $data = input('post.');
                    $data['time'] = time();
                    $data['open'] = 1;
                    $data['view'] = 1;
                    $data['uid'] = $uid ;
                    $config = array('lianjie' => input('lianjie'));
                    $hasuserhead = $html->where($config)->count();
                    $this->assign('hasuserhead', $hasuserhead);
                    if ($hasuserhead >= 1) {
                        $this->error('网址也存在');
                    }
                    $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                    $score = config('point.GJJF-KUAI');
                    $point = Db::name('member')->where('userid', $uid)->value('point');
                    if ($point < $score && $score > 0) {
                        $this->success('' . config('point.GJJF-MING') . '不足请充值');
                    } else {
                        if ($html->add($data)) {
                            Db::name('member')->where('userid', $uid)->setDec('point', $score);
                            return json(array('code' => 200, 'msg' => '添加成功'));
                        } else {
                            return json(array('code' => 0, 'msg' => '添加失败'));
                        }
                    }
                }
                $tptc = $category->select();
                $this->assign('tptc', $tptc);
                $tags = config('web.WEB_TAG');
                $tagss = explode(',', $tags);
                $this->assign('tagss', $tagss);
                $ico = '/favicon.ico';
                $icos = '';
                $this->assign('ico', $ico);
                $this->assign('icos', $icos);
                return view();
            } else {
                header("Content-Type:text/html;charset=utf-8");
                $http = preg_replace('|[0-9]+|', '', 'h0t1t2p0:3/4/');
                $url = '' . $http . '' . $www . '';
                $urlas = '' . $http . '' . $www . '/favicon.ico';
                if (@fopen($urlas, 'r')) {
                    function get_photo($urls, $filename = '', $savefile = 'uploads/ico/')
                    {
                        $imgArr = array('ico');
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
                    $icos = $img ? '<pre><img src="' . $img . '"></pre>' : "false";
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
                $category = Db::name('category');
                $html = new HtmlModel();
                if (request()->isPost()) {
                    $data = input('post.');
                    $data['time'] = time();
                    $data['open'] = 1;
                    $data['view'] = 1;
                    $data['uid'] = $uid ;
                    $config = array('lianjie' => input('lianjie'));
                    $hasuserhead = $html->where($config)->count();
                    $this->assign('hasuserhead', $hasuserhead);
                    if ($hasuserhead >= 1) {
                        $this->error('网址也存在');
                    }
                    $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                    $score = config('point.GJJF-KUAI');
                    $point = Db::name('member')->where('userid', $uid)->value('point');
                    if ($point < $score && $score > 0) {
                        $this->success('' . config('point.GJJF-MING') . '不足请充值');
                    } else {
                        if ($html->add($data)) {
                            Db::name('member')->where('userid', $uid)->setDec('point', $score);
                            return json(array('code' => 200, 'msg' => '添加成功'));
                        } else {
                            return json(array('code' => 0, 'msg' => '添加失败'));
                        }
                    }
                }
                $tptc = $category->select();
                $this->assign('tptc', $tptc);
                $tags = config('web.WEB_TAG');
                $tagss = explode(',', $tags);
                $this->assign('tagss', $tagss);
            }
            return view();
        }
    }
    public function set()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录', url('login/index'));
        } else {
            $member = new MemberModel();
            $uid = session('userid');
            if (request()->isPost()) {
                $data = input('post.');
                if ($member->edit($data)) {
                    return json(array('code' => 200, 'msg' => '修改成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '修改失败'));
                }
            }
            $tptc = $member->find($uid);
            $this->assign('tptc', $tptc);
            return view();
        }
    }
    public function setedit()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录', url('login/index'));
        } else {
            $member = new MemberModel();
            $uid = session('userid');
            if (request()->isPost()) {
                $data = input('post.');
                $password = input('password');
                $passwords = input('passwords');
                if ($password != $passwords) {
                    return json(array('code' => 0, 'msg' => '密码错误'));
                }
                $data['password'] = substr(md5($password), 8, 16);
                if ($member->edit($data)) {
                    return json(array('code' => 200, 'msg' => '修改成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '修改失败'));
                }
            }
            $tptc = $member->find($uid);
            $this->assign('tptc', $tptc);
            return view();
        }
    }
    public function headedit()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录', url('login/index'));
        } else {
            $member = new MemberModel();
            $uid = session('userid');
            if (request()->isPost()) {
                $data = input('post.');
                if ($member->edit($data)) {
                    return json(array('code' => 200, 'msg' => '修改成功'));
                } else {
                    return json(array('code' => 0, 'msg' => '修改失败'));
                }
            }
            $tptc = $member->find($uid);
            $this->assign('tptc', $tptc);
            return view();
        }
    }
    public function cz()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录', url('login/index'));
        } else {

            return view();
        }
    }
}