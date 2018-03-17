<?php
namespace app\index\controller;

use think\Controller;
use app\common\Article;
use think\Hook;
use think\route\dispatch\Callback;

class Index extends Controller
{
    protected $model = null;
    public function __construct()
    {
        parent::__construct();
        $this->model!=null ?:$this->model = new Article();
    }

    public function index()
    {
        $this->assign('result',$this->model->article_list($limit=10));
        return $this->fetch();
    }

}
