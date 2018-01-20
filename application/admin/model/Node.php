<?php
namespace app\admin\model;

use think\Model;

class Node extends Model
{
    public function noderole()
    {
        return $this->hasOne('NodeRole','nid');
    }
}