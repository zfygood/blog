<?php /*a:1:{s:56:"D:\wamp\www\blog/application/admin/view\index\index.html";i:1516628367;}*/ ?>
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
                        <dd><a href="javascript:;" data-url="/admin/articles/load" data-id="1">文章管理</a></dd>
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
    <div class="layui-body">
        <div style="margin:0;margin-top:4px;" class="layui-tab layui-tab-brief" lay-filter="tab" lay-allowclose="true">
            <ul class="layui-tab-title">
                <li lay-id="0" class="layui-this">首页</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <p style="padding: 10px 15px; margin-bottom: 20px; margin-top: 10px; border:1px solid #ddd;display:inline-block;">
                        上次登陆
                        <span style="padding-left:1em;">IP：<?php echo htmlentities($ip); ?></span>
                        <span style="padding-left:1em;">地点：未知</span>
                        <span style="padding-left:1em;">时间：<?php echo htmlentities($time); ?></span>
                    </p>
                    <fieldset class="layui-elem-field layui-field-title">
                        <legend>统计信息</legend>
                        <div class="layui-field-box">
                            <div style="display: inline-block; width: 100%;">
                                <div class="ht-box layui-bg-blue">
                                    <p id="totalCount">0</p>
                                    <p>用户总数</p>
                                </div>
                                <div class="ht-box layui-bg-green">
                                    <p id="todayLogin">0</p>
                                    <p>今日登陆</p>
                                </div>
                                <div class="ht-box layui-bg-orange">
                                    <p id="articleCount"><?php echo htmlentities($article_count); ?></p>
                                    <p>文章总数</p>
                                </div>
                                <div class="ht-box layui-bg-cyan">
                                    <p id="resourceCount">0</p>
                                    <p>资源总数</p>
                                </div>
                                <div class="ht-box layui-bg-black">
                                    <p id="noteCount">0</p>
                                    <p>笔记总数</p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>
<script src="__STATIC__/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element','jquery','layer'], function(){
        var $ = layui.jquery;
        var layer = layui.layer;
        var element = layui.element;
        element.on('nav(test)',function(elem){
            var url = $(elem).find('a').attr('data-url');
            var id  = $(elem).find('a').attr('data-id');
            var title = $(elem).find('a').text();
            var tabTitleDiv = $('.layui-tab[lay-filter=\'tab\']').children('.layui-tab-title');
            var exist = tabTitleDiv.find('li[lay-id=' + id + ']');
            if (exist.length > 0) {
                //切换到指定索引的卡片
                element.tabChange('tab', id);
            }else{
                var index = layer.load(1);
                $.ajax({
                    type:'post',
                    url:url,
                    success:function(data){
                        if(data.code==1){
                            layer.close(index);
                            element.tabAdd('tab', { title: title, content: data.data, id: id });
                            element.tabChange('tab', id);
                        }else{
                            layer.close(index);
                            layer.msg(data.msg, { icon: 2 });
                        }
                    },
                })
            }
        })
    });

</script>
</body>
</html>