<?php
namespace app\admin\model;

use think\Model;
use think\Db;
class Admin extends Model
{
    public function user()
    {
        return  $this->select();
    }

    public function user_count()
    {
        return $this->count();
    }

    public function auth($data)
    {
        $user = $this->get(function($query) use ($data){
            $query->where('username',$data['username']);
        });

        if(!$user){
            return false;
        }
        return md5($data['password'])==$user->password?$user:false;
    }

    public function power($id)
    {
        return Db::name('admin_role')
            ->alias('a')
            ->join('node_role b','b.rid=a.rid')
            ->join('node c','b.nid=c.id')
            ->where('a.uid',$id)
            ->select();
    }
}