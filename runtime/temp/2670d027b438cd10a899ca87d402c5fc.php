<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./application/admin\view\index_home.html";i:1562852769;s:72:"I:\work\project\php\website_nav\application\admin\view\index_header.html";i:1562852559;s:72:"I:\work\project\php\website_nav\application\admin\view\index_footer.html";i:1562852545;}*/ ?>
<!--
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
-->
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
.tpt-wp{margin:0 auto;width:100%}.tpt-cm{font-size:16px;color:#333;text-align:center;background:#FFF;height:60px;line-height:60px;padding:10px;margin:1px}.tpt-md-4{float:left}.tpt-md-3{float:left}.tpt-md-2{float:left}.tpt-md-1{width:100%}@media only screen and (max-width:767px){.tpt-md-4{width:50%}.tpt-md-3{width:100%}.tpt-md-2{width:100%}.tpt-ml-3{display:none}.tpt-mr-3{display:none}.tpt-ml-7{width:100%}.tpt-mr-7{width:100%}}@media only screen and (min-width:768px) and (max-width:1023px){.tpt-md-4{width:50%}.tpt-md-3{width:50%}.tpt-md-2{width:50%}.tpt-ml-3{display:none}.tpt-mr-3{display:none}.tpt-ml-7{width:100%}.tpt-mr-7{width:100%}}@media only screen and (min-width:1024px) and (max-width:1199px){.tpt-md-4{width:33.33333333%}.tpt-md-3{width:33.33333333%}.tpt-md-2{width:50%}.tpt-ml-3{float:left;width:30%}.tpt-mr-3{float:right;width:30%}.tpt-ml-7{float:left;width:70%}.tpt-mr-7{float:right;width:70%}}@media only screen and (min-width:1200px){.tpt-md-4{width:25%}.tpt-md-3{width:33.33333333%}.tpt-md-2{width:50%}.tpt-ml-3{float:left;width:30%}.tpt-mr-3{float:right;width:30%}.tpt-ml-7{float:left;width:70%}.tpt-mr-7{float:right;width:70%}.tpt-wp{width:100%;margin:0 auto}}@media screen and (max-width:768px){.tj{display:none}</style>
<div class="tpt-wp cl"style="margin-top: 20px;">
<ul>
<li class="tpt-md-4"><div class="tpt-cm">
<img class="tj" src="/public/img/zhuti.png" width="40" height="40"style="vertical-align:middle; margin: 0px 10px;" />收录：
<font color="#03f"><?php echo $swang; ?></font> 个
</div></li>
<li class="tpt-md-4"><div class="tpt-cm">
<img class="tj" src="/public/img/rent.png" width="40" height="40"style="vertical-align:middle; margin: 0px 10px;" />未通过：
  <font color="#03f"><?php echo $wwang; ?> </font>个
</div></li>
<li class="tpt-md-4"><div class="tpt-cm">
<img class="tj" src="/public/img/hui.png" width="40" height="40"style="vertical-align:middle; margin: 0px 10px;" />共计：
<font color="#03f"><?php echo $gwang; ?></font>个
</div></li>
<li class="tpt-md-4"><div class="tpt-cm">
<img class="tj" src="/public/img/hui.png" width="40" height="40"style="vertical-align:middle; margin: 0px 10px;" />新闻：
<font color="#03f"><?php echo $news; ?></font> 篇
</div></li>
</ul>
</div>
  
  <div class="tpt—index fly-panel fly-panel-user">
<blockquote style="margin-top: 100px;padding: 20px;border-left: 5px solid #009688;" class="layui-elem-quote">国际网址导航管理系统，温馨提醒：</blockquote>
<table width="100%">
<tr>
<td>尽管本程序在发布前已经经过严格测试，但我们依然强烈建议各位用户时常备份；</td>
<td>如果需要开启伪静态，请先确认服务器或空间添加了伪静态规则；</td>
</tr>
<tr>
<td>安装完成后请可以将index.php和admin.php里面安装代码删除；</td>
<td>安装好程序后，一定要记得修改默认的密码和口令；</td>
</tr>
</table>
<blockquote style="padding: 20px;border-left: 5px solid #009688;" class="layui-elem-quote">系统信息：</blockquote>
<table width="100%">
<tr><td width="110px">程序版本</td><td>Guojiz V2.2.20190712 导航管理系统 -  <a style="color:#FF5722;" ><?php if($key == 1): ?> 【初级授权】 到期时间<?php echo date("Y-m-d",$times); elseif($key == 2): ?>【高级授权】 到期时间<?php echo date("Y-m-d",$times); elseif($key == -1): ?>永久拉入黑名单<?php else: ?>【程序未授权】<?php endif; ?> </a><!--【 <a href="javascript:;" data-url="<?php echo url('index/deal_sql'); ?>" id="update" style="color:#FF5722;"  target="_blank">升级最新版本</a>】--></td></tr>
<tr><td>服务器类型</td><td><?php echo php_uname('s'); ?></td></tr>
<tr><td>PHP版本</td><td><?php echo PHP_VERSION; ?></td></tr>
<tr><td>Zend版本</td><td><?php echo Zend_Version(); ?></td></tr>
<tr><td>服务器解译引擎</td><td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td></tr>
<tr><td>服务器语言</td><td><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></td></tr>
<tr><td>服务器Web端口</td><td><?php echo $_SERVER['SERVER_PORT']; ?></td></tr>
</table>
<blockquote style="padding: 10px;border-left: 5px solid #009688;" class="layui-elem-quote">开发团队：</blockquote>
<table width="100%">
<tr><td width="110px">版权所有</td><td>梦雨工作室</td></tr>
<tr><td>特别提醒您</td><td>本程序均可免费下载使用，但严禁删除、隐藏或更改版权信息，且导致的一切损失由使用者自行承担。</td></tr>
</table>
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
</body>
</html>