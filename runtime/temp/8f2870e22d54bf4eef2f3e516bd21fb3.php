<?php /*a:1:{s:55:"D:\wamp\www\tp5\application/admin/view\login\login.html";i:1513171775;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>Zfy,博客后台登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="__STATIC__/css/admin.css" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <link type="favicon" rel="shortcut icon" href="__STATIC__/image/timg.jpg" />

    <!--//webfonts-->
    <script src="__static__/layui/lay/modules/jquery.js"></script>
</head>
<body>
<script>$(document).ready(function(c) {
    $('.close').on('click', function(c){
        $('.login-form').fadeOut('slow', function(c){
            $('.login-form').remove();
        });
    });
});
</script>
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
    <form class="layui-form" action="<?php echo url('admin/login/dologin'); ?>" method="post">
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
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;

        //日期
        laydate.render({
            elem: '#date'
        });
        laydate.render({
            elem: '#date1'
        });

        //创建一个编辑器
        var editIndex = layedit.build('LAY_demo_editor');

        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 5){
                    return '用户名必须填写5位';
                }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,content: function(value){
                layedit.sync(editIndex);
            }
        });

        //监听指定开关
        form.on('submit(formlogin)', function(data){
            layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
                offset: '6px'
            });
            layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });

        监听提交
        form.on('submit(formlogin)', function(data){
            layer.alert(JSON.stringify(data.field), {
                title: '最终的提交信息'
            })
            return false;
        });


    });
</script>
</html>