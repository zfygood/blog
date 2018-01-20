<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Session;

class Base extends Controller
{
    public function initialize()
    {
        parent::initialize();
        if(empty(Session::get('admin.id'))){
            $this->error(lang('Please login first'),url('/user'));
        }

        $controller = strtolower($this->request->controller());

        $action = $this->request->action();

        $nodelist = Session::get('nodelist');
        if(empty($nodelist[$controller])||!in_array($action,$nodelist[$controller])){
            $this->error('无权限访问');
        }

    }

}