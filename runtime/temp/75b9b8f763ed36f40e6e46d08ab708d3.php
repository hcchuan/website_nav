<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"./template/default/pc/index_news.html";i:1562931687;s:69:"I:\work\project\php\website_nav\template\default\pc\index_header.html";i:1563714225;s:69:"I:\work\project\php\website_nav\template\default\pc\index_footer.html";i:1563714714;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			全部文章 - <?php echo config('web.WEB_TIT'); ?>
		</title>
		<meta name="keywords" content="<?php echo config('web.WEB_KEY'); ?>">
		<meta name="description" content="<?php echo config('web.WEB_DES'); ?>">
      <link rel="stylesheet" href="/template/default/public/pc/css/mian.css"> 
      
<style type="text/css">
.newscss {
	border: 1px solid #fff;
	background: -webkit-linear-gradient(45deg, #dad5d5 0%, #eeeeee 100%);
}
</style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="/favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" href="/public/layui/css/layui.css">
  <link rel="stylesheet" href="/template/default/public/pc/css/public.css?20197"> 
  <link rel="stylesheet" href="/template/default/public/pc/css/index.css?20190627"> 
  <link rel="stylesheet" href="/template/default/public/pc/css/mini.css"> 
  <link rel="stylesheet" href="/template/default/public/pc/css/update.css?20190613-5"> 
  <script src="/public/layui/layui.js" type="text/javascript"></script>
  <script src="/public/js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="/template/default/public/pc/js/dropdown.js"></script>
</head>
<body>
<style type="text/css">
 .page-top {
  <?php if(config('web.GZ_BB') == 0): elseif(config('web.GZ_BB') == 1): ?>background: -webkit-linear-gradient(50deg, #979498 20% ,#9992a5 50%, #a6a4a7 50%, #59575a 80%, #252325 100%);<?php elseif(config('web.GZ_BB') == 2): ?>background: -webkit-linear-gradient(50deg, #e82c06 20% ,#f1a642 50%, #f70b4c 50%, #c16d04 80%, #f74b0a 100%);<?php elseif(config('web.GZ_BB') == 3): ?>background: -webkit-linear-gradient(50deg, #1fa504 20% ,#189623 50%, #2dd60f 50%, #017315 80%, #276104 100%);<?php elseif(config('web.GZ_BB') == 4): ?>background: -webkit-linear-gradient(50deg, #ec9225 20% ,#ce800f 50%, #ef8a11 50%, #d08110 80%, #f1870a 100%);<?php elseif(config('web.GZ_BB') == 5): ?>background: -webkit-linear-gradient(50deg, #2e3dcc 20% ,#1c1ff7 50%, #4e63f9 50%, #032f90 80%, #072d82 100%);<?php elseif(config('web.GZ_BB') == 6): ?>background: -webkit-linear-gradient(50deg, #09090a 20% ,#343435 50%, #434350 50%, #060910 80%, #090a0a 100%);<?php elseif(config('web.GZ_BB') == 7): ?><?php echo config('web.XIN_A'); endif; ?> 
}
.dropdown-content {
 
   <?php if(config('web.GZ_BB') == 0): elseif(config('web.GZ_BB') == 1): ?>border: 1px solid #848184;<?php elseif(config('web.GZ_BB') == 2): ?>border: 1px solid #dc204c; <?php elseif(config('web.GZ_BB') == 3): ?>border: 1px solid #1b8409;<?php elseif(config('web.GZ_BB') == 4): ?>border: 1px solid #f1b008; <?php elseif(config('web.GZ_BB') == 5): ?>border: 1px solid #1d20f5; <?php elseif(config('web.GZ_BB') == 6): ?>  border: 1px solid #09090a; <?php elseif(config('web.GZ_BB') == 7): ?>border: 1px solid #fff;<?php endif; ?>
}
.fenleiw-content,.web-nav,footer,.type li .hover, .indexWebList1 li:hover,.myskdbj,.myskd:hover {
   <?php if(config('web.GZ_BB') == 0): elseif(config('web.GZ_BB') == 1): ?>background: -webkit-linear-gradient(45deg, #848184 0%, #89878e 100%);<?php elseif(config('web.GZ_BB') == 2): ?>    background: -webkit-linear-gradient(45deg, #dc204c 0%, #bc4b19 100%);<?php elseif(config('web.GZ_BB') == 3): ?>background: -webkit-linear-gradient(45deg, #1b8409 0%, #47ba41 100%);<?php elseif(config('web.GZ_BB') == 4): ?>  background: -webkit-linear-gradient(45deg, #f0880c 0%, #ec9226 100%);<?php elseif(config('web.GZ_BB') == 5): ?>background: -webkit-linear-gradient(45deg, #1d20f5 0%, #3f58e3 100%);<?php elseif(config('web.GZ_BB') == 6): ?>    background: -webkit-linear-gradient(45deg, #09090a 0%, #29292f 100%);<?php elseif(config('web.GZ_BB') == 7): ?><?php echo config('web.XIN_A'); endif; ?>

}
.content > .left li .hover {
   <?php if(config('web.GZ_BB') == 0): elseif(config('web.GZ_BB') == 1): ?>background: -webkit-linear-gradient(45deg, #848184 0%, #89878e 100%);<?php elseif(config('web.GZ_BB') == 2): ?>    background: -webkit-linear-gradient(45deg, #dc204c 0%, #bc4b19 100%);<?php elseif(config('web.GZ_BB') == 3): ?>background: -webkit-linear-gradient(45deg, #1b8409 0%, #47ba41 100%);<?php elseif(config('web.GZ_BB') == 4): ?>background: -webkit-linear-gradient(45deg, #f1b008 0%, #b1cf0b 100%);<?php elseif(config('web.GZ_BB') == 5): ?>background: -webkit-linear-gradient(45deg, #1d20f5 0%, #3f58e3 100%);<?php elseif(config('web.GZ_BB') == 6): ?>    background: -webkit-linear-gradient(45deg, #09090a 0%, #29292f 100%);<?php elseif(config('web.GZ_BB') == 7): ?><?php echo config('web.XIN_A'); endif; ?>
border-left: 6px solid #96938d!important;
  }
 <?php if(config('web.GZ_BB') == 0): ?>
.content > .left li .hover {
    background: -webkit-linear-gradient(45deg, #d302e1 0%, #7909e1 100%);
}
 <?php endif; ?>
<?php echo config('web.XIN_B'); ?> 
</style>    
	<header>
		<nav class="web-nav">
			<div class="container layui-clear">
				<ul class="nav-ul">
  
                  <?php if(config('web.PZ-FG') == 1): ?>
                  <a href="/" class="logo">
						<img src="<?php echo config('web.logo'); ?>" height="60">
					</a>
                  <?php elseif(config('web.PZ-FG') == 2): endif; ?>
					<div class="hover">
						<li class="hover">
							<a href="/">
								网站首页
							</a>
						</li>
						<li class="fenleiw hover">
							<a href="/list.html">
								网址分类
							</a>
							<div class="fenleiw-content">
								<?php if(is_array($tpto) || $tpto instanceof \think\Collection || $tpto instanceof \think\Paginator): $i = 0; $__LIST__ = $tpto;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<lii>
									<?php if(config('web.WEB_URL') == 1): ?>
									<a href="/view/<?php echo $vo['id']; ?>.html" class="css<?php echo $vo['id']; ?>">
										<?php else: ?>
										<a href="/index.php/view/<?php echo $vo['id']; ?>.html" class="css<?php echo $vo['id']; ?>">
											<?php endif; ?><?php echo $vo['name']; ?>
										</a>
								</lii>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
                       <?php if(is_array($GZdh) || $GZdh instanceof \think\Collection || $GZdh instanceof \think\Paginator): $i = 0; $__LIST__ = $GZdh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class="hover">
							<a href="<?php echo $vo['links']; ?>" <?php if($vo['dj'] != 1): else: ?>target="_blank"<?php endif; ?>>
								<?php echo $vo['name']; ?>
							</a>
						</li>
                      <?php endforeach; endif; else: echo "" ;endif; ?>

					</div>
                  <?php if(config('web.PZ-TIME') == 1): ?>
                  <div id="Time"> </div>
                  <?php elseif(config('web.PZ-TIME') == 2): elseif(config('web.PZ-TIME') == 3): endif; ?>
                   
				</ul>
			</div>
            
		</nav>
	</header>
<script>
window.onload=function(){  
setInterval(function(){   
var date=new Date();   
var year=date.getFullYear(); //获取当前年份   
var mon=date.getMonth()+1; //获取当前月份   
var da=date.getDate(); //获取当前日   
var day=date.getDay(); //获取当前星期几   
var h=date.getHours(); //获取小时   
var m=date.getMinutes(); //获取分钟   
var s=date.getSeconds(); //获取秒   
var d=document.getElementById('Time');    
d.innerHTML='当前时间:'+year+'年'+mon+'月'+da+'日'+'星期'+day+' '+h+':'+m+':'+s;  },1000)  }
</script>
		<div class="bg">
		</div>
		<article style="margin-bottom:15px;">
			<div>
					<li class="layui-clear">
						<div class="fenlei">
							<div class="title searchweb">
								<h3>
									全部
								</h3>
								<form action="/newsso.html">
									<input type="text" name="ks" required="required" value="<?php echo input('ks');?>"
									placeholder="请输入搜索的关键字" />
									<input type="submit" class="layui-icon" id="search_btn" value="&#xe615;">
								</form>
							</div>
            <ul class="layui-clear" id="type_list">
              <li><a href="<?php if(config('web.WEB_URL') == 1): ?>/news.html<?php else: ?>/index.php/news.html<?php endif; ?>" class="wlzy newscss">全部</a></li>    
                <?php if(is_array($newscate) || $newscate instanceof \think\Collection || $newscate instanceof \think\Paginator): $i = 0; $__LIST__ = $newscate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>     
              <li><a href="<?php if(config('web.WEB_URL') == 1): ?>/article/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/article/<?php echo $vo['id']; ?>.html<?php endif; ?>" class="wlzy newscss<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></li>     
              <?php endforeach; endif; else: echo "" ;endif; ?>
              
          </ul>
                          
						</div>
					</li>
              
				<ul class="lists">
					<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
					<li class="layui-clear">
						<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/xq/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/xq/<?php echo $vo['id']; ?>.html<?php endif; ?>" class="weblogo" target="_blank">
							<img src="<?php echo pic($vo['content']); ?>" width="100" height="75" />
						</a>
						<p class="introduce">
							<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/xq/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/xq/<?php echo $vo['id']; ?>.html<?php endif; ?>" target="_blank" <?php if(date( 'Ymd') == date( 'Ymd',$vo['time'])): ?>style="color:red"<?php endif; ?>>
								<?php echo $vo['title']; ?>
							</a>
						</p>
						<span class="click" <?php if(date( 'Ymd') == date( 'Ymd',$vo['time'])): ?>style="color:red"
						<?php endif; ?>>
							<?php echo date('m-d',$vo['time']); ?>
						</span>
						<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/xq/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/xq/<?php echo $vo['id']; ?>.html<?php endif; ?>" class="go" target="_top">
							详情...
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<hr style="background-color: rgba(0,0,0,0);">
			<div class="layui-clear">
				<div class="pages">
					<?php echo $news->render(); ?>
				</div>
			</div>
			<hr style="background-color: rgba(0,0,0,0);">
		</article>
		 
<footer>
    <div>
        <ul class="layui-clear">
            <li><a href="<?php echo config('web.WEB_AUT'); ?>"target="_blank">QQ群</a></li>
            <li><a href="<?php if(config('web.WEB_URL') == 1): ?>/dans/2.html<?php else: ?>/index.php/dans/2.html<?php endif; ?>">广告合作</a></li>
            <li><a href="<?php if(config('web.WEB_URL') == 1): ?>/add.html<?php else: ?>/index.php/add.html<?php endif; ?>">申请收录</a></li>
            <li><a href="<?php if(config('web.WEB_URL') == 1): ?>/dans/1.html<?php else: ?>/index.php/dans/1.html<?php endif; ?>">关于我们</a></li>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo config('web.WEB_QQ'); ?>&site=qq&menu=yes" target="_blank">QQ咨询</a></li>
        </ul>
      <p class="copart">
<!-- 下面版权未授权用户不能去掉否则会跳转到官网强行修改后果自负 需要去版权请联系QQ50361804授权-->
            <a href="<?php echo config('web.WEB_COM'); ?>">Copyright© 2019</a>  <a target="_blank" href="http://www.guojiz.com/">Powered by Guojiz V2.2</a>  <?php echo config('web.WEB_ICP'); ?>，<?php echo config('web.WEB_TJ'); ?> <a>本站已经运行<a id="days">0</a>天</a>
<!-- 请修改下面的统计代码改为你自己的 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c73b08435655072b8172ee727cb915c3";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
       
      </p>
  </div>
</footer>
 

<!--下面自动推送代码-->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<div id="layui-sides" style="width: 50px!important;">
	<ul class="side-bars">
		<?php if(\think\Session::get('username') != ''): ?>
		<a href="/" onclick="layer.msg('首页...', {icon:10, shade: 0.1, time:0})"
		rel="nofollow">
			<li class="match">
				<img src="/template/default/public/pc/img/1215630.gif" height="30" width="30" />
			</li>
		</a>
		<a href="/user/set.html" onclick="layer.msg('设置...', {icon:10, shade: 0.1, time:0})"
		rel="nofollow">
			<li class="match">
				<img src="/template/default/public/pc/img/1215615.gif" height="30" width="30" />
			</li>
		</a>
		<a href="/user/comment.html" onclick="layer.msg('操作...', {icon:10, shade: 0.1, time:0})"
		rel="nofollow">
			<li class="match">
				<img src="/template/default/public/pc/img/1215606.gif" height="30" width="30" />
			</li>
		</a>
		<a href="/kuai.html" onclick="layer.msg('快审...', {icon:10, shade: 0.1, time:0})"
		rel="nofollow">
			<li class="match">
				<img src="/template/default/public/pc/img/1215610.gif" height="30" width="30" />
			</li>
		</a>
		<a href="/user/cz.html" onclick="layer.msg('充值...', {icon:10, shade: 0.1, time:0})"
		rel="nofollow">
			<li class="match">
				<img src="/template/default/public/pc/img/1215650.gif" height="30" width="30" />
			</li>
		</a>
		<?php else: ?>
		<a href="/" onclick="layer.msg('首页...', {icon:10, shade: 0.1, time:0})"
		rel="nofollow">
			<li class="match">
				<img src="/template/default/public/pc/img/1215630.gif" height="30" width="30" />
			</li>
		</a>
		<a href="/login/index.html" onclick="layer.msg('正在跳转登录页面', {icon:16, shade: 0.1, time:0})"
		rel="nofollow">
			<li class="match">
				<img src="/template/default/public/pc/img/1215631.gif" height="30" width="30" />
			</li>
		</a>
		<a href="/login/reg.html" onclick="layer.msg('正在跳转注册页面', {icon:16, shade: 0.1, time:0})"
		rel="nofollow">
			<li class="match">
				<img src="/template/default/public/pc/img/1215628.gif" height="30" width="30" />
			</li>
		</a>
		<?php endif; ?>
	</ul>
</div>
	<a href="javascript:;" id="dingbu" style="display: none;">
		<img src="/template/default/public/pc/img/1215611.gif" height="30" width="30" />
	</a>
<script>
	window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    console.log(121);
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("dingbu").style.display = "block";
    } else {
        document.getElementById("dingbu").style.display = "none";
    }
}
$("#dingbu").click(function() {
    $("html,body").animate({
        scrollTop: 0
    }, 500);

});
var s1 = '<?php echo config('web.PZ-YX'); ?>';
s1 = new Date(s1.replace(/-/g, "/"));
s2 = new Date();
var days = s2.getTime() - s1.getTime();
var number_of_days = parseInt(days / (1000 * 60 * 60 * 24));
document.getElementById('days').innerHTML = number_of_days;
</script>
		<script>
		</script>
		</body>

</html>