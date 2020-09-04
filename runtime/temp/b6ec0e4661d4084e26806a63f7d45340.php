<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./application/admin\view\index_index.html";i:1563715310;s:72:"I:\work\project\php\website_nav\application\admin\view\index_header.html";i:1562852559;s:72:"I:\work\project\php\website_nav\application\admin\view\index_footer.html";i:1562852545;}*/ ?>
<!--
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
-->
<!DOCTYPE html>
<html>
<head>  
  <title>Guojiz国际网址后台管理系统</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="/favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" href="/public/layui/css/layui.css">
  <link rel="stylesheet" href="/public/css/global.css">
  <script src="/public/layui/layui.js" type="text/javascript"></script>
  <script src="/public/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<style type="text/css">
.layui-nav-tree .layui-this{background-color: #393D49;color: #fff;}
  .adminlogo {height: 70px;margin-left:20px;}
@media screen and (max-width: 800px) { 
  .adminlogo {display:none;}
.yc {display:none;}
}
@media only screen and (min-width:800px){
.xs {display:none;}

}
.tooltip {
    position: relative;
}
.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
.tpt-header{background:#2a303c;width:100%;height:65px;position:relative;z-index:999;left:0;top:0}
.tpt-header .tpt-logo{float:left;line-height:65px}
.tpt-header .tpt-logo img{vertical-align:middle;margin:0 0 0 20px}
.tpt-header input{position:absolute;opacity:0;z-index:-1}
.tpt-nav{float:right;padding:0 30px}
.tpt-nav li{position:relative;float:left}
.tpt-nav .tpt-nav-li{position:relative;float:left;text-align:center;color:#fff;font-size:14px;cursor:pointer;padding:0 30px;height:65px;line-height:65px}
.tpt-nav label::after{position:absolute;right:0;top:0;color:#fff;content:"\25BC";-webkit-transition:all .35s;transition:all .35s}
.tpt-nav :hover+label::after{-webkit-transform:rotateX(180deg);transform:rotateX(180deg)}
.tpt-nav :hover .tpt-nav-ul{display:block}
.tpt-nav .tpt-nav-ul{display:none;position:absolute;left:0;top:61px;box-shadow:0 2px 4px rgba(0,0,0,.12);border-top:4px solid #FF5722;min-width:100%}
.tpt-nav .tpt-nav-ul li{background:#fff;height:40px;line-height:40px;width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.tpt-nav .tpt-nav-ul li a{display:block;color:#2a303c;font-size:14px;padding:0 20px;text-align:center}
.tpt-nav .tpt-nav-ul li a:hover{background:#f2f2f2}
@media only screen and (max-width:1023px){.tpt-header{background:#202124;height:55px}
.tpt-header .tpt-nav-btn::after{position:absolute;right:7px;top:50%;margin-top:-12px;width:27px;text-align:center;cursor:pointer;content:url(http://img.qiniutu.com/guojiz/ts.png)}
.tpt-header .tpt-nav{max-height:0;overflow:hidden}
.tpt-header input:checked~.tpt-nav{max-height:1000px}
.tpt-header .tpt-logo{float:none;width:100%;line-height:55px}
.tpt-nav{width:100%;padding:0;position:absolute}
.tpt-nav li{position:static;float:none}
.tpt-nav .tpt-nav-li{float:none;display:block;text-align:left;background:#16171A;color:#fff;height:55px;line-height:55px;padding:0 20px}
.tpt-nav label::after{right:13px}
.tpt-nav :hover+label::after{-webkit-transform:rotateX(0);transform:rotateX(0)}
.tpt-nav .tpt-nav-ul{max-height:0;overflow:hidden;display:block;position:relative;left:0;top:0;box-shadow:none;border:none}
.tpt-nav .tpt-nav-ul li{background:#16171A;height:50px;line-height:50px;width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.tpt-nav .tpt-nav-ul li a{color:#fff;font-size:14px;text-align:left}
.tpt-nav input:checked~.tpt-nav-ul{max-height:1000px}
.tpt-nav input[type=checkbox]:checked+label::after{-webkit-transform:rotateX(180deg);transform:rotateX(180deg)}
.tpt-nav .tpt-nav-ul li a:hover,.tpt-nav input[type=checkbox]:checked+label,.tpt-nav label:hover,.tpt-nav li a:hover{background:#202124}
}
</style>
  
 
  
<div class="header yc">
  <div class="main">
    <a href="/admin.php"><img class="adminlogo" src="/public/img/logo.png"></a>
    <div class="nav-user">
      <a class="avatar">
        <cite><?php echo \think\Session::get('username'); ?></cite>
        <i>管理员</i>
      </a>
      <div class="nav">
        <a class="yc" target="_blank" href="/index.php"><i class="layui-icon" style="top: 3px; font-size: 24px;padding-right: 8px;">&#xe609;</i>网站首页</a>
        <a class="xs" href="/admin.php"><i class="layui-icon" style="top: 3px; font-size: 24px;padding-right: 8px;">&#xe609;</i>后台首页</a>
        <a class="logi_logout" href="javascript:void(0)"><i class="layui-icon" style="top: 4px;font-size: 24px;padding-right: 8px;">&#x1006;</i>退出</a>
      </div>
    </div>
  </div>
</div>
  
<div class="tpt-header">
<div class="tpt-logo"><a href="/"><img src="/public/img/logo.png" height="60"></a></div>
<input id="nav-btn" type="checkbox">
<label class="tpt-nav-btn" for="nav-btn"></label>
<ul class="tpt-nav">
<li>
<input id="nav-2" type="checkbox"><label class="tpt-nav-li" for="nav-2">内容管理</label>
<ul class="tpt-nav-ul">
 <li><a href="<?php echo url('newscate/index'); ?>">文章分类</a></li>
  <li><a href="<?php echo url('news/index'); ?>">文章管理</a></li>
  <?php if($key == 1): ?> 
  <li><a href="<?php echo url('wangcate/index'); ?>">接入网站</a></li>
  <li><a href="<?php echo url('wang/index'); ?>">内容更新</a></li>
  <?php elseif($key == 2): ?>
  <li><a href="<?php echo url('wangcate/index'); ?>">接入网站</a></li>
  <li><a href="<?php echo url('wang/index'); ?>">内容更新</a></li>
  <?php else: endif; ?>
  <li><a href="<?php echo url('dan/index'); ?>">单页管理</a></li>
  <li><a href="<?php echo url('comment/index'); ?>">评论管理</a></li>
  </ul>
</li>
  
<li>
<input id="nav-3" type="checkbox"><label class="tpt-nav-li" for="nav-3">网址管理</label>
<ul class="tpt-nav-ul">

  <li><a href="<?php echo url('category/index'); ?>">网址分类</a></li>
  <li><a href="<?php echo url('html/index'); ?>">网址管理</a></li>
  <li><a href="<?php echo url('banner/index'); ?>">广告管理</a></li>
  <li><a href="<?php echo url('links/index'); ?>">导航连接</a></li>
  </ul>
</li>
 
  
  
  <li>
<input id="nav-4" type="checkbox"><label class="tpt-nav-li" for="nav-4">综合管理</label>
<ul class="tpt-nav-ul">

  <li><a href="<?php echo url('member/index'); ?>">会员管理</a></li>
  <li><a href="<?php echo url('config/index'); ?>">网站配置</a></li>
  <li><a href="<?php echo url('point/index'); ?>">积分配置</a></li>
  <li><a href="<?php echo url('cz/index'); ?>">积分配置</a></li>
  <li><a class="update_cache" href="javascript:void(0)">清理缓存</a></li>
  <li><a href="https://www.guojiz.com">官方网站</a></li>
  </ul>
</li>
</ul>
</div>
  
  
<div class="main fly-user-main layui-clear">
<ul class="layui-nav layui-nav-tree left_menu_ul">
	<li class="layui-nav-item layui-nav-itemed">
    <a href="javascript:;">内容管理</a>
    <dl class="layui-nav-child">
      <dd><a href="<?php echo url('newscate/index'); ?>" target="main"><i class="layui-icon">&#xe63c;</i>文章分类</a></dd>
      <dd><a href="<?php echo url('news/index'); ?>" target="main"><i class="layui-icon">&#xe63c;</i>文章管理</a></dd>
      <?php if($key == 1): ?>
      <dd><a href="<?php echo url('wangcate/index'); ?>" target="main"><i class="layui-icon">&#xe61f;</i>接入网站</a></dd>
      <dd><a href="<?php echo url('wang/index'); ?>" target="main"><i class="layui-icon">&#xe60a;</i>内容更新</a></dd>
      <?php elseif($key == 2): ?>
      <dd><a href="<?php echo url('wangcate/index'); ?>" target="main"><i class="layui-icon">&#xe61f;</i>接入网站</a></dd>
      <dd><a href="<?php echo url('wang/index'); ?>" target="main"><i class="layui-icon">&#xe60a;</i>内容更新</a></dd>
      <?php else: endif; ?>
      <dd><a href="<?php echo url('dan/index'); ?>" target="main"><i class="layui-icon">&#xe60a;</i>单页管理</a></dd>
      <dd><a href="<?php echo url('comment/index'); ?>" target="main"><i class="layui-icon">&#xe60a;</i>评论管理</a></dd>
    </dl>
    </li>
	<li class="layui-nav-item layui-nav-itemed">
    <a href="javascript:;">网址管理</a>
    <dl class="layui-nav-child">
      <dd><a href="<?php echo url('category/index'); ?>" target="main"><i class="layui-icon">&#xe61f;</i>网址分类</a></dd>
      <dd><a href="<?php echo url('html/index'); ?>" target="main"><i class="layui-icon">&#xe63c;</i>网址管理</a></dd>
      <dd><a href="<?php echo url('banner/index'); ?>" target="main"><i class="layui-icon">&#xe60d;</i>广告管理</a></dd>
	  <dd><a href="<?php echo url('links/index'); ?>" target="main"><i class="layui-icon">&#xe64e;</i>导航连接</a></dd>

    </dl>
    </li>
	<li class="layui-nav-item layui-nav-itemed">
    <a href="javascript:;">综合管理</a>
    <dl class="layui-nav-child">
	  <dd><a href="/admin.php/member/index.html" target="main"><i class="layui-icon">&#xe612;</i>会员管理</a></dd>
      <dd><a href="<?php echo url('config/index'); ?>" target="main"><i class="layui-icon">&#xe62c;</i>网站配置</a></dd>
      <dd><a href="<?php echo url('point/index'); ?>" target="main"><i class="layui-icon">&#xe62c;</i>积分配置</a></dd>
      <dd><a href="/admin.php/cz/index.html" target="main"><i class="layui-icon">&#xe62c;</i>充值记录</a></dd>
	  <dd><a class="update_cache" href="javascript:void(0)"><i class="layui-icon">&#xe640;</i>清理缓存</a></dd>
    </dl>
    </li>

	<li class="layui-nav-item layui-nav-itemed">
    <a href="javascript:;">其他管理</a>
    <dl class="layui-nav-child">
      <dd><a href="http://www.guojiz.com" target="_blank"><i class="layui-icon">&#xe61b;</i>官方网站</a></dd>
    </dl>
    </li>
</ul>
</div>

<div class="layui-body iframe-container">
<iframe class="admin-iframe" id="admin-iframe" name="main" src="<?php echo url('index/home'); ?>"></iframe>
</div>
<!--
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
-->
<div class="footer">
  <p class="bq">
  <a style="position: absolute;color: #FFF;display: none;" class="banquan" target="_blank" href="https://www.guojiz.com/">Guojiz网址导航</a>
  </p>
</div>
<script type="text/javascript">
layui.use(['layer', 'element','jquery'], function(){
  var layer = layui.layer
  ,element = layui.element()
  ,jq = layui.jquery;
  
  jq('.left_menu_ul .layui-nav-item').click(function(){
    jq('.left_menu_ul .layui-nav-item').removeClass('layui-this');
    jq(this).addClass('layui-this');
    jq("#iframe-mask").show();
    jq("#admin-iframe").load(function(){   
      jq("#iframe-mask").fadeOut(100);
    });
  });

  jq('.update_cache').click(function(){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    jq.getJSON('<?php echo url("index/update"); ?>',function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.reload();
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
  });

  jq('.logi_logout').click(function(){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    jq.getJSON('<?php echo url("login/logout"); ?>',function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.reload();
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
  });

});
</script>

</body>
</html>