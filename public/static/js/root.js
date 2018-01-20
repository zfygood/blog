layui.define(['table','laypage', 'layer','element'],function (exports) {
    var table = layui.table;
    var laypage = layui.laypage;
    var layer = layui.layer;
    var element = layui.element;
    //第一个实例
    table.render({
        elem: '#demo'
        , url: '/admin/root/list' //数据接口
        , page: true //开启分页
        , size: 'lg'
        ,id: 'testReload'
        , cols: [[ //表头
            {field: 'id', title: 'ID', width: 200, sort: true, align: 'center'}
            , {field: 'username', title: '管理员', width: 200, align: 'center'}
            , {field: 'logintime', title: '登录时间', width: 200, align: 'center'}
            , {field: 'register', title: '创建时间', width: 200, align: 'center'}
            , {toolbar: '#barDemo', title: '操作', width: 600, align: 'center'}
        ]]
    });
    var $ = layui.$, active = {
        reload: function(){
            var demoReload = $('#demoReload');
            //执行重载
            table.reload('testReload', {
                page: {
                    curr: 1 //重新从第 1 页开始
                }
                ,where: {
                    title: demoReload.val()
                }
            });
        }
    };
    table.on('tool(test)', function(obj){
        var data = obj.data;
        if(obj.event === 'detail'){
            layer.msg('ID：'+ data.id + ' 的查看操作');
        } else if(obj.event === 'del'){
            layer.confirm('真的删除行么', function(index){
                obj.del();
                layer.close(index);
                $.post("/admin/articles/delete",{'id':data.id},function(res){
                    if(res.code==1){
                        layer.msg(res.msg);
                    }
                })
            });
        } else if(obj.event === 'edit'){
            $(this).attr('href','/admin/articles/edit/id/'+data.id)
        }
    });
    
    $('.demoTable .layui-btn').on('click', function(){
        var type = $(this).data('type');
        active[type] ? active[type].call(this) : '';
    });

    exports('root',{});
});
