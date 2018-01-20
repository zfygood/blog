layui.define(['table','laypage','jquery', 'layer','element'],function (exports) {
    var table = layui.table;
    var laypage = layui.laypage;
    var layer = layui.layer;
    var element = layui.element;
    var $ = layui.jquery;
    //第一个实例
    table.render({
        elem: '#demo'
        , url: '/admin/articles/index' //数据接口
        , page: true //开启分页
        , size: 'lg'
        ,id: 'testReload'
        , cols: [[ //表头
            {field: 'id', title: 'ID', width: 120, sort: true, align: 'center'}
            , {field: 'title', title: '标题', width: 200, align: 'center'}
            , {field: 'author', title: '作者', width: 200, align: 'center'}
            , {field: 'num', title: '浏览量', width: 100, align: 'center'}
            , {field: 'create_time', title: '创建时间', width: 200, align: 'center'}
            , {field: 'update_time', title: '修改时间', width: 200, align: 'center'}
            , {toolbar: '#barDemo', title: '操作', width: 200, align: 'center'}
        ]]
    });
     active = {
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
            $.ajax({
                type:'post',
                url:'/admin/articles/edit',
                async:'false',
                data:{id:data.id},
                success:function(data){
                    infos = data.data;
                    $("#table").html(infos.info)
                     for(a in infos.data){
                        foo = $(eval(('"'+'.'+a+'"'))).selector;
                        if(a=='pic'){
                            $(eval('"'+foo+'"')).attr('src',infos.data[a]);
                        }else if(a=='content'){
                            ue.ready(function(){
                                a = 'content';
                                html = ue.setContent(''+infos.data[a]);
                            })  
                        }else if(a=='category'){
                            $('select[name="category"]>option').each(function(){
                                if($(this).val()==infos.data['category']){
                                    $(this).attr('selected',true);
                                    $('.layui-select-title').children().val($(this).html());
                                }
                            })
                        }else {
                            $(eval('"'+foo+'"')).val(infos.data[a]);
                        }

                    }
                }
            })
        }
    });
    
    $('.demoTable .layui-btn').on('click', function(){
        var type = $(this).data('type');
        active[type] ? active[type].call(this) : '';
    });



    exports('article',{});
});
