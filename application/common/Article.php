<?php
namespace app\common;

use think\Model;

class Article extends Model
{
    protected $autoWriteTimestamp = true;

    public function article_list($page='',$limit='',$title='')
    {
        $pages = ($page-1)*$limit;
        $result = empty($title)?$this->order('update_time desc')->limit($pages,$limit)->select():$this->order('update_time desc')->where('title','like',"%$title%")->limit($pages,$limit)->select();
        return $result;
    }

    public function article_count($title='')
    {
        return $this->where('title','like',"%$title%")->count();
    }

    public function article_add($data)
    {
        return  $this->allowField(true)->save($data);
    }

    public function article_all()
    {
        return $this->order('update_time desc')->select();
    }
    public function article_find($id)
    {
        return $this->where('id',$id)->find();
    }

    public function del($id)
    {
        return $this->where('id',$id)->delete();

    }

    public function edit($data)
    {
        $result = $this->where('id',$data['id'])->update($data);
        if($result<0){
            return false;
        }else{
            return true;
        }

    }

    public function article_inc($id)
    {
        $result = $this->where('id',$id)->setInc('num',1);
    }
}