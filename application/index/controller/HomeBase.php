<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use Captcha\Captcha;
use think\Cache;
use think\Config;
use think\Session;
use think\Request;
use app\index\model\Html as HtmlModel;
use app\index\model\Member as MemberModel;
class HomeBase extends Controller
{
    public function _initialize()
    {
        if (!session('userid') || !session('username')) {
        $show['show'] = 1;
        $tpto = Db::name('category')->where($show)->order('sort desc')->limit(120)->select();
        $this->assign('tpto', $tpto);
        $GZdh = Db::name('links')->where($show)->order('px desc')->select();
        $this->assign('GZdh', $GZdh);
        $keyss = Db::name('member')->where('userid = 1')->value('key');
        $this->assign('keyss', $keyss);
        $newscate = Db::name('newscate')->where($show)->order('id desc')->limit(120)->select();
        $this->assign('newscate', $newscate);
        $guojizgg = Db::name('banner')->where($show)->order('id desc')->select();
        $this->assign('guojizgg', $guojizgg);
        $html = Db::name('html')->where('open = 1')->select();
        $this->assign('html', $html);
        $htmls = Db::name('html')->order('id desc')->select();
        $this->assign('htmls', $htmls);
        $news = Db::name('news')->where($show)->order('id desc')->select();
        $this->assign('news', $news);
        $newscate = Db::name('newscate')->where($show)->order('id desc')->select();
        $this->assign('newscate', $newscate);
        $wang = Db::name('wang')->where('open = 1')->order('id desc')->select();
        $this->assign('wang', $wang);
        $wangcate = Db::name('wangcate')->where($show)->order('id desc')->select();
        $this->assign('wangcate', $wangcate);
        $guojizcai = Db::name('html')->where('open = 1')->orderRaw('rand()')->select();
        $this->assign('guojizcai', $guojizcai);
        $dan = Db::name('dan')->where($show)->order('id desc')->select();
        $this->assign('dan', $dan);
        //分类展示网址
        $artbycatelist = Db::name('category')->where($show)->order('sort desc')->select();
        foreach ($artbycatelist as $k => $v) {
            $artbycatelist[$k]['artlists'] = get_articles_by_cid($v['id'], 5);
        }
        $this->assign('artbycatelist', $artbycatelist);

            
        } else {
        $show['show'] = 1;
        $tpto = Db::name('category')->where($show)->order('sort desc')->limit(120)->select();
        $this->assign('tpto', $tpto);
        $GZdh = Db::name('links')->where($show)->order('px desc')->select();
        $this->assign('GZdh', $GZdh);
        $keyss = Db::name('member')->where('userid = 1')->value('key');
        $this->assign('keyss', $keyss);
        $newscate = Db::name('newscate')->where($show)->order('id desc')->limit(120)->select();
        $this->assign('newscate', $newscate);
        $guojizgg = Db::name('banner')->where($show)->order('id desc')->select();
        $this->assign('guojizgg', $guojizgg);
        $html = Db::name('html')->where('open = 1')->select();
        $this->assign('html', $html);
        $htmls = Db::name('html')->order('id desc')->select();
        $this->assign('htmls', $htmls);
        $news = Db::name('news')->where($show)->order('id desc')->select();
        $this->assign('news', $news);
        $newscate = Db::name('newscate')->where($show)->order('id desc')->select();
        $this->assign('newscate', $newscate);
        $wang = Db::name('wang')->where('open = 1')->order('id desc')->select();
        $this->assign('wang', $wang);
        $wangcate = Db::name('wangcate')->where($show)->order('id desc')->select();
        $this->assign('wangcate', $wangcate);
        $guojizcai = Db::name('html')->where('open = 1')->orderRaw('rand()')->select();
        $this->assign('guojizcai', $guojizcai);
        $dan = Db::name('dan')->where($show)->order('id desc')->select();
        $this->assign('dan', $dan);
        //分类展示网址
        $artbycatelist = Db::name('category')->where($show)->order('sort desc')->select();
        foreach ($artbycatelist as $k => $v) {
            $artbycatelist[$k]['artlists'] = get_articles_by_cid($v['id'], 5);
        }
        $this->assign('artbycatelist', $artbycatelist);
            $uid = session('userid');
            $member = Db::name('member')->where("userid = {$uid}")->find();
            $this->assign('member', $member);
        }
      
      
    }
}