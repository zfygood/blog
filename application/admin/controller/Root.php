<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use app\admin\model\Admin;
class Root extends Base
{
    protected $model = null;
    public function __construct()
    {
        parent::__construct();
        $this->model !=null?:$this->model=new Admin();
    }

    public function list()
    {
        if($this->request->isAjax()){
            return (['code'=>0,'msg'=>'请求成功','count'=>$this->model->user_count(),'data'=>$this->model->user()]);
        }
        return $this->fetch('root/index');
    }
}