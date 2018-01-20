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
        return  $this->allowField(true)->save($data)?true:false;
    }

    public function article_all()
    {
        return $this->order('update_time desc')->select();
    }
    public function article_find($id)
    {
        $result = $this->where('id',$id)->find();
        return empty($result)?false:$result;
    }

    public function del($id)
    {
        $result = $this->where('id',$id)->delete();
        return $result?true:false;
    }

    public function edit($id,$data)
    {
        $result = $this->where('id',$id)->update($data);
        return $result==1 || $result==0?true:false;
    }

    public function article_inc($id)
    {
        $result = $this->where('id',$id)->setInc('num',1);
    }
}