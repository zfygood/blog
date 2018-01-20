<?php /*a:2:{s:63:"D:\wamp\www\tp5\application/admin/view\article\article_add.html";i:1513337239;s:55:"D:\wamp\www\tp5\application/admin/view\Public\head.html";i:1513239338;}*/ ?>
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
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    贤心
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
                    <a class="" href="javascript:;">内容管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo url('admin/articles/index'); ?>">文章管理</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="javascript:;">列表三</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">解决方案</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">列表一</a></dd>
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
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <fieldset class="layui-elem-field layui-field-title">
                    <legend>文章发表</legend>
                    <div class="layui-field-box">
                        <div id="articleContent" class="">
                            <form class="layui-form form-main" action="<?php echo url('admin/articles/doadd'); ?>">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">标题</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="title" required="" lay-verify="required"
                                               placeholder="请输入标题" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">描述</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="descr" required="" lay-verify="required"
                                               placeholder="请输入标题" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">分类</label>
                                    <div class="layui-input-block" id="input-z">
                                        <select name="categoryId" lay-verify="required">
                                            <option value=""></option>
                                            <option value="1">ASP.NET MVC</option>
                                            <option value="2">SQL Server</option>
                                            <option value="3">Entity Framework</option>
                                            <option value="4">Web前端</option>
                                            <option value="5">C#基础</option>
                                            <option value="6">杂文随笔</option>
                                            <option value="7">.NET Core</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">文本域</label>
                                    <div class="layui-input-block">
                                        <div class="ke-container ke-container-default"
                                             style="width: 100%;position: relative;z-index:0">
                                            <div style="display:block;" class="ke-toolbar" unselectable="on">
                                                <script type="text/javascript" charset="utf-8"
                                                        src="__STATIC__/js/ueditor.config.js"></script>
                                                <script type="text/javascript" charset="utf-8"
                                                        src="__STATIC__/js/ueditor.all.min.js"></script>
                                                <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                                                <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                                                <script type="text/javascript" charset="utf-8"
                                                        src="__STATIC__/js/zh-cn.js"></script>
                                                <script id="editor" name="content" type="text/plain"
                                                        style="width:100%;height:400px;"></script>
                                                <script type = "text/javascript">
                                                    var ue = UE.getEditor('editor');
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="layui-form-item" style="position:relative;">
                                    <label class="layui-form-label">封面</label>
                                    <div class="layui-input-inline">
                                        <input id="articleCoverSrc" name="articleCoverSrc" type="hidden">
                                        <img id="imagelist" class="img-cover"
                                             src="__UPLOADS__/f378de5e68af0f82ea8856619656f454.jpg" alt="封面">
                                    </div>
                                    <div class="layui-input-inline" style="position:absolute;bottom:0;">
                                        <button type="button" class="layui-btn" id="imageup" style="background:royalblue" lay-ext="jpg|png|bmp">上传图片</button>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" style="background:royalblue" lay-submit="" lay-filter="formAddArticle">立即提交</button>
                                        <button id="articleBack" type="button"  class="layui-btn layui-btn-primary">返回列表</button>
                                    </div>
                                </div>
                            </form>
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
<script src="__STATIC__/layui/layui.js"></script>
<script>
    layui.use(['form', 'upload'], function () {
        var form = layui.form //只有执行了这一步，部分表单元素才会自动修饰成功
            , upload = layui.upload;
        form.on('submit(formAddArticle)', function(data){
            console.log(data.elem) //被执行事件的元素DOM对象，一般为button对象
            console.log(data.form) //被执行提交的form对象，一般在存在form标签时才会返回
            console.log(data.field) //当前容器的全部表单字段，名值对形式：{name: value}
        });
        upload.render({
            elem: '#imagelist'
            ,url: '<?php echo url("admin/articles/uploads"); ?>'
            ,accept: 'image'
            ,auto: false //选择文件后不自动上传
            ,bindAction: '#imageup' //指向一个按钮触发上传
            ,done: function(res, index, upload) {
                //假设code=0代表上传成功
                if (res.code == 0) {
                    alert(res.path);
                    $('#imagelist').attr('src',res.path);
                }
            }
        });

        form.render();
    });

</script>

</body>
</html>