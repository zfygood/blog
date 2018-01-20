<?php /*a:2:{s:55:"D:\wamp\www\blog/application/admin/view\root\index.html";i:1514699764;s:56:"D:\wamp\www\blog/application/admin/view\Public\head.html";i:1514700136;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Zfy,博客-后台首页</title>
    <link type="favicon" rel="shortcut icon" href="__STATIC__/image/timg.jpg"/>
    <link rel="stylesheet" href="__STATIC__/layui/css/layui.css">
    <link rel="stylesheet" href="__STATIC__/css/adminhome.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">Zfy</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="__STATIC__/image/timg.jpg" class="layui-nav-img">
                    zfy
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="<?php echo url('admin/login/logout'); ?>">退了</a></li>
        </ul>
    </div>
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="<?php echo url('admin/index/index'); ?>">首页</a>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;" >内容管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" data-url="<?php echo url('admin/articles/index'); ?>">文章管理</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="javascript:;">列表三</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">用户管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('admin/root/list'); ?>">管理员列表</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">云市场</a></li>
                <li class="layui-nav-item"><a href="">发布商品</a></li>
            </ul>
        </div>
    </div>

<div id="test"></div>
<div class="layui-body">
    <div style="margin:0;margin-top:4px;" class="layui-tab layui-tab-brief" lay-filter="tab" lay-allowclose="true">
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <fieldset class="layui-elem-field layui-field-title">
                <legend>文章列表</legend>
    <div class="demoTable">
        <div class="layui-inline">
            <input class="layui-input" name="id" id="demoReload" autocomplete="off">
        </div>
        <button class="layui-btn" data-type="reload" style="background:royalblue ">搜索</button>
        <a href="<?php echo url('admin/articles/add'); ?>" class="layui-btn" style="background:royalblue">发表文章</a>
    </div>
    <div class="layui-tab-item layui-show">
            <table id="demo" lay-filter="test">
            </table>
    </div>
            </fieldset>
        </div>
    </div>
    </div>
</div>
<script src="__STATIC__/layui/layui.js"></script>
<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<script>
    layui.config({
        version: false //一般用于更新模块缓存，默认不开启。设为true即让浏览器不缓存。也可以设为一个固定的值，如：201610
        , debug: false //用于开启调试模式，默认false，如果设为true，则JS模块的节点会保留在页面
        , base: '__STATIC__/js/' //设定扩展的Layui模块的所在目录，一般用于外部模块扩展
    }).use('root');

</script>
