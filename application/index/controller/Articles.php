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
        $id = $this->request->param('id');
        $comment = Db::name('comment')->where(['article_id'=>$id])->select();
        $this->model->article_inc($id);
        $result  = $this->model->article_find($id);
        $result?:$this->error('此文章不存在');
        $this->assign('result',$result);
        $this->assign('comment',$comment);
        return   $this->fetch('index/detail');
    }

    public function comment()
    {
        $content = addslashes($this->request->param('content'));
        $username = addslashes($this->request->param('username'));
        $email = addslashes($this->request->param('email'));
        $id = intval($this->request->param('id'));
        if(empty($content)){
            $this->error('内容必填');
        }
        if(empty($username)){
            $this->error('昵称必填');
        }
        if(strlen($username)>30){
            $this->error('昵称过长');
        }
        if(empty($email)){
            $this->error('邮箱必填');
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $this->error('邮箱格式不正确');
        }
        $time = time();
        $data = [
            'article_id'=>$id,
            'username'=>$username,
            'email' =>$email,
            'content'=>$content,
            'create_time'=>$time,
            'status'=>'1',
        ];
        $result = Db::name('comment')->insert($data);
        if($result){
            $date = date('Y-m-d H:i:s',$time);
            $this->success('评论成功','',$date);
        }else{
            $this->error('评论失败');
        }
    }
}