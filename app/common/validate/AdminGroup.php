<?php
/**
 * 后台角色验证类
 *
 */

namespace app\common\validate;

use think\Validate;

class AdminGroup extends Validate
{
    protected $rule = [
        'name' => 'require',
        'description' => 'require',
        'rules'    => 'require',
    ];

    protected $scene = [
        'add'  => ['name', 'description'],
        'edit' => ['name', 'description'],
    ];
}