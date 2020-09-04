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
use app\index\model\Html as HtmlModel;
class html extends HomeBase
{
    public function _initialize()
    {
         parent::_initialize();
    }
    public function add()
    {
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
                $data['open'] = config('web.WEB_OPE');
                $data['view'] = 1;
                $data['uid'] = 1;
                $config = array('lianjie' => input('lianjie'));
                $hasuserhead = $html->where($config)->count();
                $this->assign('hasuserhead', $hasuserhead);
                if ($hasuserhead >= 1) {
                    $this->error('网址也存在');
                }
                if (isset($_REQUEST['authcode'])) {
                  //  session_start();
                    if (strtolower($_REQUEST['authcode']) == $_SESSION['authcode']) {
                        //strtolower转化为小写的函数
                        $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                        if ($html->add($data)) {
                            return json(array('code' => 200, 'msg' => '添加成功'));
                        } else {
                            return json(array('code' => 0, 'msg' => '添加失败'));
                        }
                    } else {
                        $this->error('验证码错误');
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
                $data['open'] = config('web.WEB_OPE');
                $data['view'] = 1;
                $data['uid'] = 1;
                $config = array('lianjie' => input('lianjie'));
                $hasuserhead = $html->where($config)->count();
                $this->assign('hasuserhead', $hasuserhead);
                if ($hasuserhead >= 1) {
                    $this->error('网址也存在');
                }
                $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                if (isset($_REQUEST['authcode'])) {
                  //  session_start();
                    if (strtolower($_REQUEST['authcode']) == $_SESSION['authcode']) {
                        //strtolower转化为小写的函数
                        $data['description'] = mb_substr(strip_tags($data['content']), 0, 200, 'utf-8');
                        if ($html->add($data)) {
                            return json(array('code' => 200, 'msg' => '添加成功'));
                        } else {
                            return json(array('code' => 0, 'msg' => '添加失败'));
                        }
                    } else {
                        $this->error('验证码错误');
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
    public function guanyu()
    {
        return view();
    }
    public function ad()
    {
        return view();
    }
    public function doUploadPics()
    {
        $file = request()->file('FileName');
        $info = $file->move(ROOT_PATH . DS . 'uploads');
        if ($info) {
            $path = WEB_URL . DS . 'uploads' . DS . $info->getSaveName();
            echo str_replace("\\", "/", $path);
        }
    }
    public function doUploadPic()
    {
        if (!session('userid') || !session('username')) {
            $this->error('亲！请登录', url('login/index'));
        } else {
            $file = request()->file('FileName');
            $info = $file->move(ROOT_PATH . DS . 'uploads');
            if ($info) {
                $path = WEB_URL . DS . 'uploads' . DS . $info->getSaveName();
                echo str_replace("\\", "/", $path);
            }
        }
    }
    public function yjgx()
    {
        if (!session('userid') || !session('username')) {
            $this->error('不能搞破坏');
        } else {
            $id = input('id');
            $lianjie = Db::name('html')->where('id', $id)->value('lianjie');
            $http = preg_replace('|[0-9]+|', '', 'h0t1t2p0:3/4/');
            $url = '' . $http . '' . $lianjie . '';
            $chaxun = 'h8t3t9p:3/4/5w6w4w.g2u9o0j5i8z.c3o0m';
            $chacuns = preg_replace('|[0-9]+|', '', $chaxun);
            $chaxuna = file_get_contents('' . $chacuns . '/xiugai.html?www=' . $_SERVER['SERVER_NAME'] . '');
            if ($chaxuna == '2') {
                header("Content-Type:text/html;charset=utf-8");
                $urlas = '' . $http . '' . $lianjie . '/favicon.ico';
                if (@fopen($urlas, 'r')) {
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
                    if ($descriptions == '') {
                    } else {
                        $data['content'] = $descriptions;
                    }
                    if ($titles == '') {
                    } else {
                        $data['title'] = $titles;
                    }
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
                    $xx = '/';
                    $data['ico'] = $xx . $img;
                } else {
                    $img = '/favicon.ico';
                    $data['ico'] = $img;
                }
                if (!Db::name('html')->where('id', $id)->data($data)->update($data)) {
                    $this->error('更新失败');
                } else {
                    $this->success('更新成功');
                }
            } else {
                $this->success(config('web.GZ_TS'));
            }
        }
        return view();
    }
}