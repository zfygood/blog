<?php
namespace app\admin\controller;
use think\Db;
use app\common\Article;
class Articles extends Base
{
    public $model = null;

    public function __construct()
    {
        parent::__construct();
        $this->model !=null?:$this->model=new Article();
    }

    /**
     *
     */
    public function load()
    {
        if($this->request->isAjax() && $this->request->isPost()) {
            $this->success('请求成功','',sys_config_get('article_path'));
        }
    }

    /**
     * @return array
     */
    public function index()
    {
        if($this->request->isAjax()){
            $params = $this->request->param();
            !empty($params['title'])?:$params['title']='';
            return (['code'=>'0','msg'=>'请求成功','count'=>$this->model->article_count($params['title']),'data'=>$this->model->article_list($params['page'],$params['limit'],$params['title'])]);
        }
    }

    /**
     * @return mixed
     */
    public function add()
    {
        return $this->fetch('article/article_add');
    }

    /**
     *
     */
    public function doadd()
    {
        if($this->request->isAjax()){
            $this->model->article_add($this->request->param())?$this->success('发表成功'):$this->error('发表失败');
        }
    }

    /**
     *
     */
    public function uploads()
    {
        $this->request->isAjax() ?: $this->error('请求方式错误');
        $file = $this->request->file('file');
        $info = $file->validate(['ext' => 'jpg,png,gif'])->move('uploads/image');
        $info ? $this->success('上传成功', '', '/uploads/image/' . $info->getSaveName()) : $file->getError();
//             return (['code'=>0,'msg'=>'上传成功','path'=>'/uploads/image/'.$info->getSaveName()]);
    }

    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function edit()
    {
        $id = $this->request->param('id');
        !empty($id)?:$this->error('id不能为空');
        $result = $this->model->find($id);
        $result?:$this->error('id不正确');
        $info = sys_config_get('article_edit');
        $this->success('请求成功','',['data'=>$result,'info'=>$info]);
    }

    /**
     *
     */
    public function update()
    {
        $this->request->isAjax()&&$this->request->isPost()?:$this->error('请求方式不正确');
        $id = $this->request->param('id');
        $this->model->edit($id,$this->request->param())?$this->success('修改成功'):$this->error('修改失败');

    }

    /**
     *
     */
    public function delete()
    {
        $this->request->isAjax()&&$this->request->isPost()?:$this->error('请求方式错误');
        $this->model->del($this->request->param('id'))?$this->success('删除成功'):$this->error('删除失败');
    }

}

