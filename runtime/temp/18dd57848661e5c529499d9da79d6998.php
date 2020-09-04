<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:38:"./template/default/pc/index_index.html";i:1563766869;s:69:"I:\work\project\php\website_nav\template\default\pc\index_header.html";i:1563714225;s:69:"I:\work\project\php\website_nav\template\default\pc\index_footer.html";i:1563714714;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php echo config('web.WEB_TIT'); ?>
		</title>
		<meta name="keywords" content="<?php echo config('web.WEB_KEY'); ?>">
		<meta name="description" content="<?php echo config('web.WEB_DES'); ?>">
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
      <div class="guojiz">
      <?php if(config('web.PZ-FG') == 1): ?>
		 
			<div class="indexSearch">
				<div class="layui-clear">
					<a href="https://www.baidu.com" class="bdlogo" target="_blank">
						<img src="/template/default/public/pc/img/baidu1.png">
					</a>
					<div class="mys-bar barb">
						<input name="bar" type="radio" id="tab-4" checked="checked">
						<label for="tab-4">
							百度搜索
						</label>
						<div class="mys-bar-con">
							<div class="search bar4">
								<form class="form" action="https://www.baidu.com/s" target="_blank">
									<input type="text" class="soso" required="required" name="wd" value=""
									placeholder="百度搜索">
									<button class="sosoan" type="submit">
									</button>
								</form>
							</div>
						</div>
						<input name="bar" type="radio" id="tab-1">
						<label for="tab-1">
							本地搜索
						</label>
						<div class="mys-bar-con">
							<div class="search bar1">
								<form class="form" action="<?php if(config('web.WEB_URL') == 1): ?>/search.html<?php else: ?>/index.php/search.html<?php endif; ?>">
									<input type="text" class="soso" required="required" name="ks" value=""
									placeholder="搜索本站收录的网址">
									<button target="_blank" class="sosoan" type="submit">
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        
          <?php elseif(config('web.PZ-FG') == 2): ?>
       <div class="page-top" style="height:600px;margin-top: -14px;"  >
		<div class="wraps">
				<div class="head_logo_so">
					<div class="head_logo_h1">
						<div class="logo_titl"><a href="/" target="_parent"><img src="<?php echo config('web.logo'); ?>" height="60" alt=""></a><span></span></div>
						<div class="head_h1">
							<h1>Guojiz网址导航大全</h1>
							<p><?php echo config('web.WEB_TIT'); ?></p>
						</div>
					</div>
					<div class="head_soso">
						<form action="https://www.baidu.com/s" target="_blank">
						<div class="container">
							<div class="search">
							    <input type="text" class="soso" required="required" name="wd" value=""placeholder="百度搜索一下">
                              
								    </div>
							</div>
						<button class="submit" type="submit"  style="<?php if(config('web.GZ_BB') == 0): elseif(config('web.GZ_BB') == 1): ?>background: -webkit-linear-gradient(45deg, #848184 0%, #89878e 100%);<?php elseif(config('web.GZ_BB') == 2): ?>    background: -webkit-linear-gradient(45deg, #dc204c 0%, #bc4b19 100%);<?php elseif(config('web.GZ_BB') == 3): ?>background: -webkit-linear-gradient(45deg, #1b8409 0%, #47ba41 100%);<?php elseif(config('web.GZ_BB') == 4): ?>background: -webkit-linear-gradient(45deg, #f1b008 0%, #b1cf0b 100%);<?php elseif(config('web.GZ_BB') == 5): ?>background: -webkit-linear-gradient(45deg, #1d20f5 0%, #3f58e3 100%);<?php elseif(config('web.GZ_BB') == 6): ?>    background: -webkit-linear-gradient(45deg, #09090a 0%, #29292f 100%);<?php elseif(config('web.GZ_BB') == 7): ?><?php echo config('web.XIN_A'); endif; ?>" >百度一下</button>
					</form></div>
					<div id="dvmq" style=" height: 22px;" class="box">
						<h2>随机推荐:</h2>
					   <ul>	 
                         <?php if(is_array($guojizcai) || $guojizcai instanceof \think\Collection || $guojizcai instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojizcai) ? array_slice($guojizcai,0,8, true) : $guojizcai->slice(0,8, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>			        
                         <li><a class="topdj" data-id="<?php echo $vo['id']; ?>" href="http://<?php echo $vo['lianjie']; ?>/<?php echo config('web.WEB_HZ'); ?>" target="_blank">	<?php echo msubstr($vo['title'],0,10,'utf-8',true); ?></a></li>
                         <?php endforeach; endif; else: echo "" ;endif; ?>				   
                      </ul>
	
                  </div>

                  <div style="background-color: #0e0e0d36;height: 70px;border-radius: 2px;padding:5px;margin-top: 120px;margin-bottom:0px;">
                    <h3 style="color: #ff00ff;"><marquee scrollamount="5" font="" style="margin-top: 20px;COLOR: #c1bebe;FONT-SIZE: 15pt;WIDTH: 100%;"><b><?php echo config('web.PZ-GD'); ?></b></marquee></h3>
                  </div>				
          </div>	
				<div class="head_new_gj">
				<div class="head_new">
					<ul>
                      <?php if(is_array($tpto) || $tpto instanceof \think\Collection || $tpto instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($tpto) ? array_slice($tpto,0,10, true) : $tpto->slice(0,10, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>					
                      <li><a href="<?php if(config('web.WEB_URL') == 1): ?>/view/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/view/<?php echo $vo['id']; ?>.html<?php endif; ?>" title="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></a></li>
                      <?php endforeach; endif; else: echo "" ;endif; ?>		
                       <li><a href="/list.html" title="更多..">查看全部</a></li>
                  </ul>
				</div>
				<div class="zhanbang">
					<div><a href="#">收录网站 <?php echo $swang; ?> 个</a></div>
					<div><a href="#">未审站点 <?php echo $wwang; ?> 个</a></div>
					<div><a href="<?php if(config('web.WEB_URL') == 1): ?>/add.html<?php else: ?>/index.php/add.html<?php endif; ?>">申请收录</a></div>
				</div>
				<div class="gongju">
					<div class="gongju_title">免费工具<a href="#" class="iconfont icon-gengduo1"><span></span></a></div>
					<div class="xiaogongju">
                      <?php if(is_array($guojizgj) || $guojizgj instanceof \think\Collection || $guojizgj instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojizgj) ? array_slice($guojizgj,0,10, true) : $guojizgj->slice(0,10, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
						<div class="guojiz_icon"><img src="<?php if($vo['ico'] != ''): ?><?php echo $vo['ico']; else: ?>http://<?php echo $vo['lianjie']; ?>/favicon.ico<?php endif; ?>"><a  class="topdj" data-id="<?php echo $vo['id']; ?>" href="http://<?php echo $vo['lianjie']; ?>/<?php echo config('web.WEB_HZ'); ?>" target="_blank" ><?php echo $vo['title']; ?></a></div>
                      <?php endforeach; endif; else: echo "" ;endif; ?>

					</div>
				</div>
			</div>
		</div>	
	</div> 
          <?php endif; ?>
			<article style="margin-top:-10px;">
				<div>
					<div class="indexgg layui-clear">
						<?php if(is_array($guojizgg) || $guojizgg instanceof \think\Collection || $guojizgg instanceof \think\Paginator): $i = 0; $__LIST__ = $guojizgg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['fl'] == 1): ?><?php echo htmlspecialchars_decode($vo['title']); endif; endforeach; endif; else: echo "" ;endif; ?>
					</div>
                  <?php if(config('web.PZ-J') == 1): ?>
					<ul class="indexWebList1 layui-clear">
						<div class="title">
							<h3>
								优站精选
							</h3>
							<!--<a style="color: #9E9E9E;" href="/choice.html" target="_blank">更多...</a> -->
						</div>
						<?php if(is_array($guojizjing) || $guojizjing instanceof \think\Collection || $guojizjing instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojizjing) ? array_slice($guojizjing,0,28, true) : $guojizjing->slice(0,28, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class="dropdown">
							<a class="topdj" data-id="<?php echo $vo['id']; ?>" href="http://<?php echo $vo['lianjie']; ?>/<?php echo config('web.WEB_HZ'); ?>" target="_blank">
								<img src="<?php if($vo['ico'] != ''): ?><?php echo $vo['ico']; else: ?>http://<?php echo $vo['lianjie']; ?>/favicon.ico<?php endif; ?>">
								<?php echo $vo['title']; ?>
							</a>
							<div class="dropdown-content">
								<a href="http://<?php echo $vo['lianjie']; ?>/<?php echo config('web.WEB_HZ'); ?>" class="topdj" data-id="<?php echo $vo['id']; ?>" target="_blank">
									直接访问
								</a>
								<?php if(config('web.WEB_URL') == 1): ?>
								<a href="/daohang/<?php echo $vo['id']; ?>.html" target="_blank">
									<?php else: ?>
									<a href="/index.php/daohang/<?php echo $vo['id']; ?>.html" target="_blank">
										<?php endif; ?>网站详情
									</a>
							</div>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
                  <?php endif; if(is_array($guojizgg) || $guojizgg instanceof \think\Collection || $guojizgg instanceof \think\Paginator): $i = 0; $__LIST__ = $guojizgg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['fl'] == 3): ?><?php echo htmlspecialchars_decode($vo['title']); endif; endforeach; endif; else: echo "" ;endif; if(config('web.PZ-ZD') == 1): ?>
					<ul class="indexWebList1 layui-clear">
						<div class="title">
							<h3>
								置顶推荐
							</h3>
						</div>
						<?php if(is_array($guojiztui) || $guojiztui instanceof \think\Collection || $guojiztui instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojiztui) ? array_slice($guojiztui,0,28, true) : $guojiztui->slice(0,28, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class="dropdown">
							<a class="topdj" data-id="<?php echo $vo['id']; ?>" href="http://<?php echo $vo['lianjie']; ?>/<?php echo config('web.WEB_HZ'); ?>" target="_blank">
								<?php if($vo['icos'] == 1): ?> <img src="<?php if($vo['ico'] != ''): ?><?php echo $vo['ico']; else: ?>http://<?php echo $vo['lianjie']; ?>/favicon.ico<?php endif; ?>"><?php else: endif; ?>
								<?php echo $vo['title']; ?>
							</a>
							<div class="dropdown-content">
								<a class="topdj" data-id="<?php echo $vo['id']; ?>" href="http://<?php echo $vo['lianjie']; ?>/<?php echo config('web.WEB_HZ'); ?>" target="_blank">
									直接访问
								</a>
								<?php if(config('web.WEB_URL') == 1): ?>
								<a href="/daohang/<?php echo $vo['id']; ?>.html" target="_blank">
									<?php else: ?>
									<a href="/index.php/daohang/<?php echo $vo['id']; ?>.html" target="_blank">
										<?php endif; ?>网站详情
									</a>
							</div>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
                  <?php endif; ?>
					<div class="other layui-clear">
						<div class="left">
                          


                          <div class="slideshow-container">
   
                            <?php if(is_array($guojizxt) || $guojizxt instanceof \think\Collection || $guojizxt instanceof \think\Paginator): $i = 0; $__LIST__ = $guojizxt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
                              <a href="<?php if(config( 'web.WEB_URL') == 1): ?>/xq/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/xq/<?php echo $vo['id']; ?>.html<?php endif; ?>" target="_blank">
  
                            <div class="mySlides fade">
    
                              <div class="numbertext">推荐</div>
   
                              <img src="<?php echo Pic($vo['content']); ?>" style="height: 220px;width:100%">
   
                              <div class="text"><?php echo $vo['title']; ?></div>
 
                            </div>

                            </a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

   
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
 
                            <a class="next" onclick="plusSlides(1)">❯</a>

                          </div>   
 
    
                          <?php if(config('web.PZ-GJ') == 1): ?>
							<div class="tools layui-clear">
								<div class="title">
									<h3>
										免费工具
									</h3>
									<a class="iconfont icon-gengduo1" href="#">
									</a>
								</div>
								<?php if(is_array($guojizgj) || $guojizgj instanceof \think\Collection || $guojizgj instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojizgj) ? array_slice($guojizgj,0,8, true) : $guojizgj->slice(0,8, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
								<a class="topdj" data-id="<?php echo $vo['id']; ?>" href="http://<?php echo $vo['lianjie']; ?>/<?php echo config('web.WEB_HZ'); ?>" target="_blank">
									<img src="<?php if($vo['ico'] != ''): ?><?php echo $vo['ico']; else: ?>http://<?php echo $vo['lianjie']; ?>/favicon.ico<?php endif; ?>">
									<?php echo $vo['title']; ?>
								</a>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
                          <?php endif; if(is_array($guojizgg) || $guojizgg instanceof \think\Collection || $guojizgg instanceof \think\Paginator): $i = 0; $__LIST__ = $guojizgg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['fl'] == 2): ?><?php echo htmlspecialchars_decode($vo['title']); endif; endforeach; endif; else: echo "" ;endif; if(config('web.PZ-CAI') == 1): ?>
							<div class="top">
								<div class="title">
									<h3>
										猜你喜欢
									</h3>
									<!-- <a class="iconfont icon-gengduo1" href="/bang.html"></a>-->
								</div>
								<ul class="content_rank">
									<?php if(is_array($guojizcai) || $guojizcai instanceof \think\Collection || $guojizcai instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojizcai) ? array_slice($guojizcai,0,10, true) : $guojizcai->slice(0,10, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
									<li>
										<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/daohang/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/daohang/<?php echo $vo['id']; ?>.html<?php endif; ?>" target="_blank" class="layui-clear">
											<h3>
												<?php echo msubstr($vo['title'],0,10,'utf-8',true); ?>
											</h3>
											<span>
												<?php echo $vo['view']; ?> 人次
											</span>
										</a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
                          <?php endif; if(config('web.PZ-GX') == 1): ?>
							<div class="top">
								<div class="title">
									<h3>
										资源更新
									</h3>
									<a href="/wang.html">...</a>
								</div>
								<ul class="content_rank">
									<?php if(is_array($wang) || $wang instanceof \think\Collection || $wang instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($wang) ? array_slice($wang,0,10, true) : $wang->slice(0,10, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;if($vo['open'] == 1): ?>
									<li>
										<a href="<?php echo $vo['lianjie']; ?>" target="_blank" class="layui-clear">
											<h3>
												<?php echo msubstr($vo['title'],0,10,'utf-8',true); ?>
											</h3>
											<span <?php if(date( 'Ymd') == date( 'Ymd',$vo['time'])): ?>style="color:red"<?php endif; ?>>
												<?php echo friendlyDate($vo['time']); ?>
											</span>
										</a>
									</li>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
                          <?php endif; if(config('web.PZ-PHB') == 1): ?>
							<div class="top">
								<div class="title">
									<h3>
										排行榜
									</h3>
								</div>
								<ul class="content_rank">
									<?php if(is_array($guojiztop) || $guojiztop instanceof \think\Collection || $guojiztop instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojiztop) ? array_slice($guojiztop,0,10, true) : $guojiztop->slice(0,10, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
									<li>
										<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/daohang/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/daohang/<?php echo $vo['id']; ?>.html<?php endif; ?>" target="_blank" class="layui-clear">
											<i>
											</i>
											<h3>
												<?php echo msubstr($vo['title'],0,10,'utf-8',true); ?>
											</h3>
											<span>
												<?php echo $vo['view']; ?> 人次
											</span>
										</a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
                          <?php endif; if(config('web.PZ-JPH') == 1): ?>
							<div class="top">
								<div class="title">
									<h3>
										今日排行
									</h3>
								</div>
								<ul class="content_rank">
									<?php if(is_array($guojizjin) || $guojizjin instanceof \think\Collection || $guojizjin instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojizjin) ? array_slice($guojizjin,0,10, true) : $guojizjin->slice(0,10, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
									<li>
										<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/daohang/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/daohang/<?php echo $vo['id']; ?>.html<?php endif; ?>" target="_blank" class="layui-clear">
											<i>
											</i>
											<h3>
												<?php echo msubstr($vo['title'],0,10,'utf-8',true); ?>
											</h3>
											<span>
												<?php echo $vo['count']; ?> 人次
											</span>
										</a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
                          <?php endif; ?>
                          
                          
						</div>
                      <?php if(config('web.PZ-NEW') == 1): ?>
						<div class="right you">
                           
							<ul class="indexWebList moneyList layui-clear">
								<div class="title">
									<h3>
										最新收录
									</h3>
								</div>
								<?php if(is_array($guojiznews) || $guojiznews instanceof \think\Collection || $guojiznews instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($guojiznews) ? array_slice($guojiznews,0,10, true) : $guojiznews->slice(0,10, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
								<li>
									<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/daohang/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/daohang/<?php echo $vo['id']; ?>.html<?php endif; ?>" target="_blank">
										<?php if($vo['icos'] == 1): ?> 
										<img src="<?php if($vo['ico'] != ''): ?><?php echo $vo['ico']; else: ?>http://<?php echo $vo['lianjie']; ?>/favicon.ico<?php endif; ?>">
										<?php else: endif; ?><?php echo $vo['title']; ?>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
                      <?php endif; if(config('web.PZ-FL') == 1): ?>
						<div class="right you">
							<div class="title">
								<h3>
									分类
								</h3>
							</div>
							<?php if(is_array($artbycatelist) || $artbycatelist instanceof \think\Collection || $artbycatelist instanceof \think\Paginator): $i = 0; $__LIST__ = $artbycatelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<div class="list layui-clear">
								<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/view/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/view/<?php echo $vo['id']; ?>.html<?php endif; ?>" target="_blank" class="titles">
									<?php echo $vo['name']; ?>
								</a>
								<ul>
									<?php if(is_array($vo['artlists']) || $vo['artlists'] instanceof \think\Collection || $vo['artlists'] instanceof \think\Paginator): $k = 0; $__LIST__ = $vo['artlists'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
									<li>
										<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/daohang/<?php echo $v['id']; ?>.html<?php else: ?>/index.php/daohang/<?php echo $v['id']; ?>.html<?php endif; ?>" target="_blank">
											<?php if($v['icos'] == 1): ?> 
											<img src="<?php if($v['ico'] != ''): ?><?php echo $v['ico']; else: ?>http://<?php echo $v['lianjie']; ?>/favicon.ico<?php endif; ?>">
											<?php endif; ?> <?php echo $v['title']; ?>
										</a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									<li>
										<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/view/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/view/<?php echo $vo['id']; ?>.html<?php endif; ?>" target="_blank">
											<i class="layui-icon">
												
											</i>
										</a>
									</li>
								</ul>
							</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
                      <?php endif; if(config('web.PZ-NEWS') == 1): ?>
						<div class="right you">
							<div class="newslist">
								<div class="title">
									<h3>
										更新文章
									</h3>
									<a style="color: #9E9E9E;" href="<?php if(config( 'web.WEB_URL') == 1): ?>/news.html<?php else: ?>/index.php/news.html<?php endif; ?>" target="_blank">
										更多...
									</a>
								</div>
								<ul class="layui-clear" style="overflow:scroll;overflow-x:hidden;height:472px;">
									<?php if(is_array($guojizx) || $guojizx instanceof \think\Collection || $guojizx instanceof \think\Paginator): $i = 0; $__LIST__ = $guojizx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo ): $mod = ($i % 2 );++$i;?>
									<li>
										<a href="<?php if(config( 'web.WEB_URL') == 1): ?>/xq/<?php echo $vo['id']; ?>.html<?php else: ?>/index.php/xq/<?php echo $vo['id']; ?>.html<?php endif; ?>" class="layui-clear" target="_blank">
											<div class="img">
												<img src="<?php echo Pic($vo['content']); ?>" height="120">
											</div>
											<div class="info" >
												<h3 <?php if(date( 'Ymd') == date( 'Ymd',$vo['time'])): ?>style="color:red"<?php endif; ?>>
													<?php echo $vo['title']; ?>
												</h3>
												<span <?php if(date( 'Ymd') == date( 'Ymd',$vo['time'])): ?>style="color:red"<?php endif; ?>>
													<?php echo date('m-d',$vo['time']); ?>
												</span>
											</div>
										</a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
							</div>
						</div>
                       <?php endif; ?>
					</div>
				</div>
			</article>
		</div>    
      <script>  
        layui.use(['form', 'upload'],function() {     
          var form = layui.form, 
              jq = layui.jquery;     
          jq(".topdj").bind("topdj").click(function() {       
            var url = "<?php echo url("index/index/topdj"); ?>";   
            var id = jq(this).data('id');
            jq.post(url, {             
              id: id      
            },function(data) {});          
          });                
        })    
      </script>
		 
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
  <script src="/template/default/public/pc/js/xin.js"></script>
  <?php if(config('web.PZ-YY') == 1): endif; ?>
</html>