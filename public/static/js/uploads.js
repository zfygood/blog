layui.define(['form', 'upload','jquery','layer'], function (exports) {
    var $ = layui.jquery
    var layer = layui.layer
    var form = layui.form //只有执行了这一步，部分表单元素才会自动修饰成功
        , upload = layui.upload;
    form.on('submit(formAddArticle)', function(data){
        $.post('/admin/articles/doadd',{'title':data.field.title,'content':data.field.content,'pic':data.field.pic,'descr':data.field.descr,'author':data.field.author,'category':data.field.category},function(res){
            if(res.code==1){
                layer.msg(res.msg, {
                    icon: 1,
                    time: 2000 //2秒关闭（如果不配置，默认是3秒）
                }, function(){
                    location.href="/admin/articles/index";
                });
            }
        })
        console.log(data.elem) //被执行事件的元素DOM对象，一般为button对象
        console.log(data.form) //被执行提交的form对象，一般在存在form标签时才会返回
        console.log(data.field) //当前容器的全部表单字段，名值对形式：{name: value}
        return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
    });

    upload.render({
        elem: '#imagelist'
        ,url: '/admin/articles/uploads'
        ,accept: 'image'
        ,auto: false //选择文件后不自动上传
        ,bindAction: '#imageup' //指向一个按钮触发上传
        ,done: function(res, index, upload) {
            //假设code=0代表上传成功
            if (res.code == 1) {
                $("#imagelist").attr('src',res.data)
                $("#pic").val(res.data)
            }
        }
    });
    exports('uploads',{});
});