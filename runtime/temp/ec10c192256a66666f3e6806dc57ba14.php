<?php /*a:2:{s:60:"D:\wamp\www\blog/application/admin/view\article\article.html";i:1513583661;s:56:"D:\wamp\www\blog/application/admin/view\Public\head.html";i:1515110741;}*/ ?>


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
    }).use('article');

</script>
