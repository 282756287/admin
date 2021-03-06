<?php
/**
 * 后台管理员与角色关联模型
 * @author yupoxiong<i@yufuping.com>
 */

namespace app\common\model;

use think\Model;

class AuthGroupAccess extends Model
{
    //

    public function adminUser()
    {
        return $this->belongsTo('Users');
    }

    public function adminGroup()
    {
        return $this->belongsTo('AdminGroups','group_id','id')->field('id,name');
    }
}
