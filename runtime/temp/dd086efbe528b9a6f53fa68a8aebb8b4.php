<?php /*a:1:{s:56:"D:\wamp\www\blog/application/admin/view\login\login.html";i:1516429797;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>Zfy,博客后台登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="__STATIC__/css/admin.css" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <link type="favicon" rel="shortcut icon" href="__STATIC__/image/timg.jpg" />
</head>
<body>

<!--SIGN UP-->
<h1>Login Form</h1>
<div class="login-form">
    <div class="close"> </div>
    <div class="head-info">
        <label class="lbl-1"> </label>
        <label class="lbl-2"> </label>
        <label class="lbl-3"> </label>
    </div>
    <div class="clear"> </div>
    <div class="avtar">
        <img src="__STATIC__/image/icon.jpg" />
    </div>
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <div class="layui-input-block">
                <input type="text" name="username" lay-verify="title" autocomplete="off" placeholder="请输入账号" class="layui-input">
            </div>
        </div>
        <div class="key">
            <div class="layui-form-item">
                <div class="layui-input-inline">
                    <input type="password" name="password" lay-verify="pass" placeholder="请输入密码" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
    <div class="signin">
        <input type="submit" lay-submit="formSearch"  lay-filter="formlogin" value="Login" >
    </div>
    </form>

</div>
<div class="copy-rights">
</div>
</body>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>
<script>
    layui.config({
        version: false //一般用于更新模块缓存，默认不开启。设为true即让浏览器不缓存。也可以设为一个固定的值，如：201610
        , debug: false //用于开启调试模式，默认false，如果设为true，则JS模块的节点会保留在页面
        , base: '__STATIC__/js/' //设定扩展的Layui模块的所在目录，一般用于外部模块扩展
    }).use('login');
</script>
<script>
</script>
</html>