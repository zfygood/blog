<?php /*a:1:{s:57:"D:\wamp\www\blog/application/index/view\index\detail.html";i:1521279939;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zfy,博客-文章专栏</title>
    <link rel="stylesheet" href="__STATIC__/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="__STATIC__/css/style.css" media="all">
    <link type="favicon" rel="shortcut icon" href="__STATIC__/timg.jpg"/>
    <link rel="stylesheet" href="__STATIC__/css/detail.css" media="all">
    <link rel="stylesheet" href="__STATIC__/css/prettify.css" media="all">
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

            <div class="article-detail shadow">
                <div class="article-detail-title">
                    <?php echo htmlentities($result['title']); ?>
                </div>
                <div class="article-detail-info">
                    <span>编辑时间：<?php echo htmlentities($result['update_time']); ?></span>
                    <span>作者：<?php echo htmlentities($result['author']); ?></span>
                    <span>浏览：1222</span>
                    <span>评论：14</span>
                </div>
                <div class="article-detail-content">
                    <?php echo $result['content'] ?>
                </div>
            </div>


            <div class="blog-module shadow" style="box-shadow: 0 1px 8px #a6a6a6;">
                <fieldset class="layui-elem-field layui-field-title" style="margin-bottom:0">
                    <legend>来说两句吧</legend>
                    <div class="layui-field-box">
                        <form class="layui-form" action="" id="comments">
                            <p style="color:grey">昵称</p><input type="text" required lay-verify="required" class="layui-input" name="username">
                            <p style="color:grey">邮箱</p><input type="text" required lay-verify="required" class="layui-input" name="email">
                            <br/>
                            <div class="layui-form-item">
                                <textarea name="content" lay-verify="content" id="remarkEditor"
                                          placeholder="请输入内容" class="layui-textarea">
                                                                </textarea>
                                <div class="layui-layedit">
                                    <div class="layui-unselect layui-layedit-tool"><i
                                            class="layui-icon layedit-tool-face" title="表情" layedit-event="face"
                                        "=""></i><span class="layedit-tool-mid"></span><i
                                                class="layui-icon layedit-tool-left" title="左对齐"
                                                lay-command="justifyLeft" layedit-event="left" "=""></i><i
                                                class="layui-icon layedit-tool-center" title="居中对齐"
                                                lay-command="justifyCenter" layedit-event="center" "=""></i><i
                                                class="layui-icon layedit-tool-right" title="右对齐"
                                                lay-command="justifyRight" layedit-event="right" "=""></i><span
                                                class="layedit-tool-mid"></span><i class="layui-icon layedit-tool-link"
                                                                                   title="插入链接" layedit-event="link"
                                        "=""></i></div>
                                    <div class="layui-layedit-iframe">
                                        <iframe id="LAY_layedit_1" name="LAY_layedit_1" textarea="remarkEditor"
                                                frameborder="0" style="height: 150px;"></iframe>
                                    </div>
                                </div>
                            </div>
                        <div class="layui-form-item">
                                <button class="layui-btn" style="background-color:royalblue" lay-submit="formRemark" lay-filter="formRemark">提交评论</button>
                            </div>
                        </form>
                    </div>
                </fieldset>
                <div class="blog-module-title">最新评论</div>
                <ul class="blog-comment">
                    <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="clone-com">
                        <div class="comment-parent">
                            <img src="__STATIC__/image/icon.jpg" alt="头像">
                            <div class="info">
                                <span class="username"><?php echo htmlentities($vo['username']); ?></span>
                                <span class="time"><?php echo htmlentities(date("y-m-d h:i:s",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></span>
                            </div>
                            <div class="content">
                                <p class="pl"><?php echo htmlentities($vo['content']); ?></p>
                                <p><br></p>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>

        <ul class="comments-test" style="display:none">
            <li class="clone-com1">
                <div class="comment-parent">
                    <img src="" alt="">
                    <div class="info">
                        <span class="username"></span>
                        <span class="time"></span>
                    </div>
                    <div class="content">
                        <p class="pl">评论一下吧</p>
                        <p><br></p>
                    </div>
                </div>
            </li>
        </ul>



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
    layui.use(['form','jquery','element','layedit'], function () {
        var form = layui.form;
        var $ = layui.jquery;
        var element = layui.element;
        var layedit = layui.layedit;
        var index = layedit.build('remarkEditor'); //建立编辑器
        //监听提交

        form.on('submit(formRemark)', function (data) {
            var users = $("input[name=username]");
            var emails = $("input[name=email]");
            var content = layedit.getContent(index);
            var username = users.val();
            var email = emails.val();
            var id = "<?php echo htmlentities($result['id']); ?>";
            var url = "<?php echo url('comment'); ?>";
            $.post(url,{'id':id,'content':content,'username':username,'email':email},function(res){
                if(res.code=='0'){
                    console.log(res);
                    layer.msg(res.msg);
                }else{
                    users.val('');
                    emails.val('');
                    layedit.build('remarkEditor');
                    var cl = $('.clone-com1').clone();
                    cl.find('.username').html(username);
                    cl.find('.time').html(res.data);
                    cl.find('.pl').html(content);
                    cl.attr('class','pl');
                    cl.appendTo($('.blog-comment'));
                }
            });
            return false;
        });
    });


</script>

</html>