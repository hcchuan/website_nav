<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"./application/admin\view\login_index.html";i:1562852839;s:72:"I:\work\project\php\website_nav\application\admin\view\index_footer.html";i:1562852545;}*/ ?>
<!--
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>后台管理系统</title>
<link rel="stylesheet" href="/public/css/admin.css">
<link rel="stylesheet" href="/public/layui/css/layui.css">
<script src="/public/layer/layer.js" type="text/javascript"></script>
<script src="/public/layui/layui.js" type="text/javascript"></script>
</head>
<body id="login">
<div class="login">
<h2>后台管理系统</h2>
<form class="layui-form">
<div class="layui-form-item">
<input type="text" name="username" placeholder="请输入账号" required lay-verify="required" autocomplete="off" class="layui-input">
</div>
<div class="layui-form-item">
<input type="password" name="password" placeholder="请输入密码" required lay-verify="required" autocomplete="off" class="layui-input">
</div>
<div class="layui-form-item">
<input type="text" name="kouling" placeholder="请输入口令" required lay-verify="required" autocomplete="off" class="layui-input">
</div>
<div class="layui-form-item">
<button style="padding: 0 102px;" class="layui-btn" lay-submit="" lay-filter="login_index">立即登录</button>
</div>
</form>
<script>
layui.use('form',function(){
  var form = layui.form()
  ,jq = layui.jquery;

  form.on('submit(login_index)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000']
    });
    var param = data.field;
    jq.post('<?php echo url("login/index"); ?>',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.href = '<?php echo url("index/index"); ?>';
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
    return false;
  });

})
</script>
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