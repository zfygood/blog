<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\facade\Session;
use app\admin\model\Admin;
use think\facade\Cookie;
class Login extends Controller
{
    protected $model = null;

    public function __construct()
    {
//        if(Session::has('admin.id')){
//            $this->redirect('/admin/index');
//        }
        parent::__construct();
        $this->model!=null ?:$this->model=new Admin();
    }

    public function login()
    {

        return $this->fetch();
    }

    public function dologin()
    {
        $this->request->isPost() && $this->request->isAjax()?:$this->error('请求方式不正确');

        $this->request->url() == '/admin/login/dologin'?:$this->error('请求路径不正确');

        $param = $this->request->param();

        $result = $this->validate([
            'username'  => $param['username'],
            'password' => $param['password'],
        ],'app\admin\validate\Login');

        if($result!==true){
            $this->error($result);
        }

        $result = $this->model->auth($param);


        if($result!=false){
            $info = $this->model->power($result['id']);

            $nodelist['index'][] = 'index';

            foreach($info as $key=>$val){
                $nodelist[$val['controller']][] = $val['action'];
                if($val['action'] == 'add'){
                    $nodelist[$val['controller']][] = 'doadd';
                }
                if($val['action'] == 'edit'){
                    $nodelist[$val['controller']][] = 'update';
                    $nodelist[$val['controller']][] = 'uploads';
                }
            }
            Session::set('nodelist',$nodelist);
            Session::set('admin.id',$result);
            $this->success(lang('login successful'),'/admin/index');
        }else{
            $this->error(lang('login fail'));
        }

    }

    public function logout()
    {
        Session::delete('admin.id');
        Session::delete('nodelist');
        Cookie::delete('ip');
        Cookie::delete('time');
        $this->success(lang('Logout successful'), '/user');
    }
}