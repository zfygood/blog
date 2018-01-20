<?php /*a:1:{s:56:"D:\wamp\www\blog/application/index/view\index\index.html";i:1516429797;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zfy,博客首页</title>
    <link rel="stylesheet" href="__STATIC__/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="__STATIC__/css/style.css" media="all">
    <link type="favicon" rel="shortcut icon" href="__STATIC__/image/timg.jpg" />
</head>
<body>
    <ul class="layui-nav nav layui-header"  lay-filter="nav">
        <a class="blog-logo" href="#">Zfy</a>
        <li class="layui-nav-item layui-this"><a href="<?php echo url('/index'); ?>">网站首页</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('/article'); ?>">文章专栏</a></li>
        <li class="layui-nav-item"><a href="">资源分享</a></li>
        <li class="layui-nav-item"><a href="">点点滴滴</a></li>
        <li class="layui-nav-item"><a href="">关于本站</a></li>
    </ul>
<div class="layui-carousel" id="test">
    <div carousel-item>
        <img src="__STATIC__/image/timg.jpg">
    </div>
</div>

<div class="layui-container">
    <div class="blog-main">
        <div class="blog-ads">
            goodhacker
        </div>
        <div class="blog-left">
            <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="grid-demo">
                <div class="article-left">
                    <img src="<?php echo htmlentities($vo['pic']); ?>">
                </div>
                <div class="article-right">
                    <div class="article-title">
                        <a href="<?php echo url('index/articles/detail',array('id'=>$vo['id'])); ?>">Welcome </a>
                    </div>
                    <div class="article-Introduced">
                        <?php echo htmlentities($vo['descr']); ?>
                    </div>
                    <div class="article-time">
                        <span class="time"><?php echo htmlentities($vo['update_time']); ?></span>
                        <span class="category">杂谈</span>
                        <p class="commonts">
                            <i class="layui-icon icon" >&#xe63a;</i>
                            <span class="article-font">11</span>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="blog-right">
            <div class="blogerinfo">
                <div class="blogerinfo-figure">
                    <img src="__STATIC__/image/icon.jpg">
                </div>
                <div class="blogerinfo-nickname">
                    Zfy
                </div>
                <div class="blogerinfo-introduce">
                    95后程序员，php开发工程师
                </div>
                <div class="blogerinfo-location">
                    <i class="layui-icon icon">&#xe609;</i>
                    &nbsp;浙江-宁波
                </div>
                <div class="blogerinfo-contact">
                    等待开发
                </div>
            </div>
            <div class="blog-modules">
                <div class="blog-modules-title">
                    文章排行
                </div>
                <ul class="fa-ul blog-modules-ul">
                    <li class="artaway">
                        <i class="layui-icon icon">&#xe705;</i>
                        <a href="#" class="artcol">我的文章1</a>
                    </li >
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
    layui.use('element', function(){
        var element = layui.element;
    });
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#test'
            ,width: '1440' //设置容器宽度
            ,height:'500'
            ,arrow: 'always' //始终显示箭头
            ,anim: 'fade' //切换动画方式
            ,interval:'3000'
        });
    });
</script>

</html>