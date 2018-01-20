layui.define(['form', 'layedit', 'laydate','jquery'], function(exports){
    var form = layui.form
    var $ = layui.jquery
        ,layer = layui.layer
        ,layedit = layui.layedit
        ,laydate = layui.laydate;
    //日期
    laydate.render({
        elem: '#date'
    });
    laydate.render({
        elem: '#date1'
    });

    //创建一个编辑器
    var editIndex = layedit.build('LAY_demo_editor');

    //自定义验证规则
    form.verify({
        title: function(value){
            if(value.length < 5){
                return '用户名必须填写5位';
            }
        }
        ,pass: [/(.+){6,12}$/, '密码必须6到12位']
        ,content: function(value){
            layedit.sync(editIndex);
        }
    });

    //监听指定开关
    // form.on('submit(formlogin)', function(data){
    //     layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
    //         offset: '6px'
    //     });
    //     layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
    // });

    // 监听提交
    form.on('submit(formlogin)', function(data){
        $.post("/admin/login/dologin",{'username':data.field.username,'password':data.field.password},function(res){
            if(res.code==1){
                layer.msg(res.msg, {
                    icon: 1,
                    time: 2000 //2秒关闭（如果不配置，默认是3秒）
                }, function(){
                    location.href="/admin/index";
                });
            }else{
                layer.msg(res.msg);
            }
        })
        return false;
    });

    $(document).ready(function(c) {
        $('.close').on('click', function(c){
            $('.login-form').fadeOut('slow', function(c){
                $('.login-form').remove();
            });
        });
    });
    exports('login',{});
});