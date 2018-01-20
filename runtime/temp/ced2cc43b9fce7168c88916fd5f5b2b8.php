<?php /*a:2:{s:65:"D:\wamp\www\blog/application/admin/view\article\article_edit.html";i:1513689032;s:56:"D:\wamp\www\blog/application/admin/view\Public\head.html";i:1515110741;}*/ ?>


<div class="layui-body">
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <fieldset class="layui-elem-field layui-field-title">
                    <legend>文章发表</legend>
                    <div class="layui-field-box">
                        <div id="articleContent" class="">
                            <form class="layui-form form-main" action="" method="post">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">标题</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="title" required="" lay-verify="required"
                                              id="yes" placeholder="请输入标题" autocomplete="off" class="layui-input"
                                            value="<?php echo htmlentities($info['title']); ?>"
                                        >
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">作者</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="author" required="" lay-verify="required"
                                               placeholder="请输入名称" autocomplete="off" class="layui-input"
                                               value="<?php echo htmlentities($info['author']); ?>">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">描述</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="descr" required="" lay-verify="required"
                                               placeholder="请输入描述" autocomplete="off" class="layui-input"
                                               value="<?php echo htmlentities($info['descr']); ?>">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">分类</label>
                                    <div class="layui-input-block" id="input-z">
                                        <select name="category" lay-verify="required">
                                            <option value=""></option>
                                            <option value="1" <?php if($info['category'] == 1): ?>selected<?php endif; ?>>ASP.NET MVC</option>
                                            <option value="2" <?php if($info['category'] == 2): ?>selected<?php endif; ?>>SQL Server</option>
                                            <option value="3" <?php if($info['category'] == 3): ?>selected<?php endif; ?>>Entity Framework</option>
                                            <option value="4" <?php if($info['category'] == 4): ?>selected<?php endif; ?>>Web前端</option>
                                            <option value="5" <?php if($info['category'] == 5): ?>selected<?php endif; ?>>C#基础</option>
                                            <option value="6" <?php if($info['category'] == 6): ?>selected<?php endif; ?>>杂文随笔</option>
                                            <option value="7" <?php if($info['category'] == 7): ?>selected<?php endif; ?>>.NET Core</option>
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
                                                        style="width:100%;height:400px;" value=""><?php echo $info['content']; ?></script>
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
                                        <input id="pic" name="pic" type="hidden">
                                        <img id="imagelist" class="img-cover"
                                             src="<?php echo htmlentities($info['pic']); ?>" alt="封面">
                                    </div>
                                    <div class="layui-input-inline" style="position:absolute;bottom:0;">
                                        <button type="button"  class="layui-btn" id="imageup" style="background:royalblue" lay-ext="jpg|png|bmp">上传图片</button>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" style="background:royalblue"  lay-submit="" lay-filter="formAddArticle">立即提交</button>
                                        <button id="articleBack" type="button"  class="layui-btn layui-btn-primary">返回列表</button>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>">
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
    layui.config({
        version: false //一般用于更新模块缓存，默认不开启。设为true即让浏览器不缓存。也可以设为一个固定的值，如：201610
        , debug: true //用于开启调试模式，默认false，如果设为true，则JS模块的节点会保留在页面
        , base: '__STATIC__/js/' //设定扩展的Layui模块的所在目录，一般用于外部模块扩展
    }).use('article_update');
</script>

</body>
</html>