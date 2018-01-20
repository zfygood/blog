<?php
namespace app\admin\model;

use think\Model;

class NodeRole extends Model
{
    public function node()
    {
        return $this->belongsTo('Node');
    }
}