<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"./template/default/pc/user_set.html";i:1563700123;s:69:"I:\work\project\php\website_nav\template\default\pc\index_header.html";i:1563714225;s:69:"I:\work\project\php\website_nav\template\default\pc\index_footer.html";i:1563714714;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			基本设置 - <?php echo config('web.WEB_TIT'); ?>
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
		<style type="text/css">
			.wang { border: 1px solid #fff; background: #f1f1f1; } .wang{border:1px
			solid #ececec;background:#FFF;display:block;width:83px;text-align:center;color:#333;font-size:14px;border-radius:19px;max-width:100%;overflow:hidden;margin:0px
			auto;transition:0.2s all} .content { background: #fafafa; margin-bottom:
			10px; } .content > .right { background: #eeeeee; border: 20px solid #fafafa;
			} .content > .right { padding-top: 0px; } 
          .content > .left li .hover {background: #6ba7f0; border-left: 6px solid #f79306!important;}
          .tuichu { display: inline-block; height: 20px; line-height: 20px; padding:
			0 18px; background-color: #f5043e; color: #fff; white-space: nowrap; text-align:
			center; font-size: 14px; border: none; border-radius: 2px; cursor: pointer;
			opacity: .9; filter: alpha(opacity=90); }
		</style>
		<link rel="stylesheet" href="/template/default/public/pc/css/global.css">
		<article>
			<div class="content layui-clear">
				<ul class="left">
					<div align="center">
						<img id="headedit" src="<?php echo $member['userhead']; ?>" height="80" width="80">
						<li style="margin-top:10px;color: #0b5ab9;font-weight: bold;font-size: 18px;">
							<?php echo \think\Session::get('username'); ?>
						</li>
						<li>
							<button class="tuichu">
								退出
							</button>
						</li>
						<script>
							layui.use('form', function() {

    var form = layui.form()

    , jq = layui.jquery;

    jq('.tuichu').click(function() {

        var id = jq(this).data('id');

        var url = "<?php echo url('login/logout'); ?>";

        layer.confirm('确定要退出吗？', function(index) {

            loading = layer.load(20, {

                shade: [0.2, '#000']

            });

            jq.post(url, {
                id: id
            }, function(data) {

                location.reload();

                layer.msg(data.msg, {
                    icon: 1,
                    time: 1000
                }, function() {

                });

                layer.close(loading);

            });

        });

    });

});
						</script>
						<li>
							<?php echo config('point.GJJF-MING'); ?>:<?php echo $member['point']; ?>
						</li>
					</div>
					<li>
						<a href="/user/set.html"class="hover">
							<img src="/template/default/public/pc/img/1215615.gif">
							基本设置
						</a>
					</li>
					<li>
						<a href="/user/comment.html">
							<img src="/template/default/public/pc/img/1215606.gif">
							我的操作
						</a>
					</li>

					<li>
						<a href="/kuai.html">
							<img src="/template/default/public/pc/img/1215610.gif">
							快审提交
						</a>
					</li>
					<li>
						<a href="/user/cz.html">
							<img src="/template/default/public/pc/img/1215650.gif">
							积分充值
						</a>
					</li>
				</ul>
				<div class="right">
					<div style="padding: 10px;">
						<div class="layui-tab layui-tab-brief" lay-filter="user">
							<ul class="layui-tab-title" id="LAY_mine">
								<li class="layui-this" lay-id="info">
									我的资料
								</li>
								<li lay-id="avatar">
									头像
								</li>
								<li lay-id="pass">
									密码
								</li>
							</ul>
							<div class="layui-tab-content"style="padding: 20px;background: #ffffff;margin-top:20px;">
								<div class="layui-form layui-form-pane layui-tab-item layui-show">
									<form method="post">
										<input type="hidden" name="userid" value="<?php echo $tptc['userid']; ?>">
										<div class="layui-form-item">
											<label for="L_email" class="layui-form-label">
												邮箱
											</label>
											<div class="layui-input-inline">
												<input type="text" name="usermail" required lay-verify="required" autocomplete="off"
												value="<?php echo $tptc['usermail']; ?>" class="layui-input" disabled>
											</div>
										</div>
										<div class="layui-form-item">
											<label for="L_username" class="layui-form-label">
												昵称
											</label>
											<div class="layui-input-inline">
												<input type="text" name="username" required lay-verify="required|names"
												autocomplete="off" value="<?php echo $tptc['username']; ?>" class="layui-input" disabled>
											</div>
										</div>
										<div class="layui-form-item">
											<label for="L_username" class="layui-form-label">
												性别
											</label>
											<div class="layui-input-inline">
												<input type="radio" name="sex" value="1" title="男" <?php if($tptc['sex'] == 1): ?>checked<?php endif; ?>>
												<input type="radio" name="sex" value="0" title="女" <?php if($tptc['sex'] == 0): ?>checked<?php endif; ?>>
											</div>
										</div>
										<div class="layui-form-item">
											<label for="L_city" class="layui-form-label">
												城市
											</label>
											<div class="layui-input-inline">
												<input type="text" name="userhome" lay-verify="homes" autocomplete="off"
												value="<?php echo $tptc['userhome']; ?>" class="layui-input">
											</div>
										</div>
										<div class="layui-form-item layui-form-text">
											<label for="L_sign" class="layui-form-label">
												签名
											</label>
											<div class="layui-input-block">
												<textarea placeholder="随便写些什么刷下存在感" name="description" lay-verify="descrs"autocomplete="off" class="layui-textarea" style="height: 80px;"><?php echo $tptc['description']; ?></textarea>
											</div>
										</div>
										<div class="layui-form-item">
											<button class="layui-btn" lay-submit="" lay-filter="user_set">
												确认修改
											</button>
										</div>
									</form>
								</div>
								<div class="layui-form layui-form-pane layui-tab-item">
									<form method="post">
										<div class="layui-form-item">
											<div class="avatar-add">
												<p>
													建议尺寸168*168，支持jpg、png、gif，最大不能超过50KB
												</p>
												<div class="upload-img">
													<input type="hidden" name="userid" value="<?php echo $tptc['userid']; ?>">
													<input type="file" name="file" class="layui-upload-file" id="image">
													<input type="hidden" name="userhead" value="<?php echo $tptc['userhead']; ?>" class="layui-input">
												</div>
												<img id="headedit" src="<?php echo $tptc['userhead']; ?>">
											</div>
										</div>
										<div class="layui-form-item">
											<button class="layui-btn" lay-submit="" lay-filter="user_headedit">
												确认修改
											</button>
										</div>
									</form>
								</div>
								<div class="layui-form layui-form-pane layui-tab-item">
									<form method="post">
										<input type="hidden" name="userid" value="<?php echo $tptc['userid']; ?>">
										<div class="layui-form-item">
											<label class="layui-form-label">
												修改密码
											</label>
											<div class="layui-input-inline">
												<input type="password" name="password" required lay-verify="required|pass"
												autocomplete="off" class="layui-input">
											</div>
										</div>
										<div class="layui-form-item">
											<label class="layui-form-label">
												确认密码
											</label>
											<div class="layui-input-inline">
												<input type="password" name="passwords" required lay-verify="required|pass"
												autocomplete="off" class="layui-input">
											</div>
										</div>
										<div class="layui-form-item">
											<button class="layui-btn" lay-submit="" lay-filter="user_setedit">
												确认修改
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
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
layui.use(['form', 'upload', 'element'],function(){
  var form = layui.form()
  ,element = layui.element()
  ,jq = layui.jquery;

  layui.upload({
    url: '<?php echo url("index/upload/upimage"); ?>'
    ,elem:'#image'
	,ext: 'jpg|png|gif'
	,area: ['100px', '100px']
    ,before: function(input){
      loading = layer.load(2, {
        shade: [0.2,'#000'] 
      });
    }
    ,success: function(res){
      layer.close(loading);
      jq('input[name=userhead]').val(res.path);
	  headedit.src = ""+res.path;
      layer.msg(res.msg, {icon: 1, time: 1000});
    }
  }); 

  form.verify({
    names: function(value){
      if(value.length > 12){
        return '昵称必须小于12位';
      }
    }
	,homes: function(value){
      if(value.length > 6){
        return '城市必须小于6位';
      }
    }
	,descrs: function(value){
      if(value.length > 16){
        return '签名必须小于16位';
      }
    }
    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
    ,content: function(value){
      layedit.sync(editIndex);
    }
  });

  form.on('submit(user_set)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    var param = data.field;
    jq.post('<?php echo url("index/user/set"); ?>',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.href = '<?php echo url("index/user/set"); ?>';
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
    return false;
  });

  form.on('submit(user_setedit)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    var param = data.field;
    jq.post('<?php echo url("index/user/setedit"); ?>',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.href = '<?php echo url("index/user/set"); ?>';
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
    return false;
  });

  form.on('submit(user_headedit)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    var param = data.field;
    jq.post('<?php echo url("index/user/headedit"); ?>',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.href = '<?php echo url("index/user/set"); ?>';
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
    return false;
  });
  
});
</script>
		</body>

</html>