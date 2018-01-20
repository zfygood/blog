<?php
namespace app\admin\controller;

use think\facade\Cookie;
use app\common\Article;
class Index extends Base
{
    protected $model = null;
    public function __construct()
    {
        parent::__construct();
        $this->model !=null?:$this->model=new Article();
    }

    //后台首页
    public function index()
    {
        Cookie::get('ip')?:Cookie::set('ip',$this->request->ip());
        Cookie::get('time')?:Cookie::set('time',date('Y-m-d H:i:s',time()));
        $this->assign('article_count',$this->model->article_count());
        $this->assign('ip',Cookie::get('ip'));
        $this->assign('time',Cookie::get('time'));
        return $this->fetch();
    }
}
