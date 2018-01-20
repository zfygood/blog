<?php /*a:1:{s:58:"D:\wamp\www\blog/application/index/view\index\article.html";i:1516427603;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zfy,博客-文章专栏</title>
    <link rel="stylesheet" href="__STATIC__/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="__STATIC__/css/style.css" media="all">
    <link type="favicon" rel="shortcut icon" href="__STATIC__/timg.jpg"/>
</head>
<body>
<ul class="layui-nav nav layui-header" lay-filter="nav">
    <a class="blog-logo" href="">Zfy</a>
    <li class="layui-nav-item"><a href="<?php echo url('/index'); ?>">网站首页</a></li>
    <li class="layui-nav-item layui-this"><a href="<?php echo url('/article'); ?>">文章专栏</a></li>
    <li class="layui-nav-item"><a href="">资源分享</a></li>
    <li class="layui-nav-item"><a href="">点点滴滴</a></li>
    <li class="layui-nav-item"><a href="">关于本站</a></li>
</ul>

<div class="layui-container">
    <div class="blog-main">

        <div class="art-blog-ads">
            goodhacker
        </div>
        <div class="blog-left">
            <?php if(is_array($article_all) || $article_all instanceof \think\Collection || $article_all instanceof \think\Paginator): $i = 0; $__LIST__ = $article_all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="grid-demo">
                <div class="article-left">
                    <img src="__STATIC__/image/timg.jpg">
                </div>
                <div class="article-right">
                    <div class="article-title">
                        <a href="<?php echo url('index/articles/detail',array('id'=>$vo['id'])); ?>"><?php echo htmlentities($vo['title']); ?></a>
                    </div>
                    <div class="article-Introduced">
                        <?php echo htmlentities($vo['descr']); ?>
                    </div>
                    <div class="article-time">
                        <span class="time"><?php echo htmlentities($vo['update_time']); ?></span>
                        <span class="category">杂谈</span>
                        <p class="commonts">
                            <i class="layui-icon icon">&#xe63a;</i>
                            <span class="article-font">11</span>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="blog-right">
            <div class="blog-search">
                <form class="layui-form" action="">
                    <div class="layui-form-item">
                        <div class="search-keywords">
                            <input type="text" name="keywords" lay-verify="required" placeholder="输入关键词搜索"
                                   autocomplete="off" class="layui-input">
                        </div>
                        <div class="search-submit">
                            <a class="search-btn" lay-submit="formSearch" lay-filter="formSearch"><i
                                    class="layui-icon icon">&#xe615;</i></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="article-category">
                <div class="article-category-title">
                    分类导航
                </div>
                <a href="">web</a>
                <a href="">php</a>
                <a href="">java</a>
                <a href="">.net</a>
                <a href="">资源分享</a>
                <a href="">技术分享</a>
                <a href="">等待更新</a>
                <a href="">等待更新</a>

                <div class="clear"></div>
            </div>
            <div class="blog-modules">
                <div class="blog-modules-title">
                    文章排行
                </div>
                <ul class="fa-ul blog-modules-ul">
                    <li class="artaway">
                        <i class="layui-icon icon">&#xe705;</i>
                        <a href="#" class="artcol">我的文章1</a>
                    </li>
                    <li class="artaway">
                        <i class="layui-icon icon">&#xe705;</i>
                        <a href="#" class="artcol">我的文章2</a>
                    </li>
                    <li class="artaway">
                        <i class="layui-icon icon">&#xe705;</i>
                        <a href="#" class="artcol">我的文章3</a>
                    </li>
                    <li class="artaway">
                        <i class="layui-icon icon">&#xe705;</i>
                        <a href="#" class="artcol">我的文章4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

</body>
<script type="text/javascript" src="__STATIC__/layui/layui.js"></script>

<script>
    layui.use('element', function () {
        var element = layui.element;
    });
    layui.use('form', function () {
        var form = layui.form;

        //监听提交
        form.on('submit(formSearch)', function (data) {
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
</script>

</html>