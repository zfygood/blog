<?php
namespace app\index\controller;

use think\Controller;
use app\common\Article;
use think\Db;

class Articles extends Controller{

    protected $model = null;

    public function __construct()
    {
        parent::__construct();
        $this->model !=null?:$this->model=new Article();
    }

    public function index()
    {
        $this->assign('article_all',$this->model->article_all());
        return $this->fetch('index/article');
    }

    public function detail()
    {
        $this->model->article_inc($this->request->param('id'));
        $result  = $this->model->article_find($this->request->param('id'));
        $result!==false?:$this->error('此文章不存在');
        $this->assign('result',$result);
        return   $this->fetch('index/detail');
    }
}