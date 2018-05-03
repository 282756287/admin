<?php
/**
 * 后台配置文件
 * @author yupoxiong<i@yufuping.com>
 */

return [
    // 模板参数替换
    'view_replace_str' => [
        '__STATIC__'  => '/static/Admin',
        '__CSS__'     => '/static/Admin/css',
        '__JS__'      => '/static/Admin/js',
        '__IMAGES__'  => '/static/Admin/images',
        '__FONTS__'   => '/static/Admin/fonts',
        '__PLUGINS__' => '/static/Admin/plugins',
        '__AVATAR__' => '/uploads/Admin/avatar',
    ],

    'template'                   => [
        'layout_on'       => true,
        'layout_name'     => 'template/layout',
        'layout_item'     => '[__REPLACE__]',
    ],
    //分页配置
    'paginate'                   => [
        'type'      => '\tools\Bearpage',
        'var_page'  => 'page',
        'list_rows' => 10,
    ],

    //后台用户头像相关设置
    'admin_avatar'               => [
        'upload_path' => ROOT_PATH . 'public' . DS . 'uploads' . DS . 'Admin' . DS . 'avatar' . DS,
        'upload_url' => DS . 'uploads' . DS . 'Admin' . DS . 'avatar' . DS,
    ],
    //后台文件上传路径设置
    'file_upload_path'           => ROOT_PATH . 'public' . DS . 'uploads' . DS . 'Admin' . DS . 'admin_file' . DS,
    //上次传文件url显示路径
    'file_upload_url'            => DS . 'uploads' . DS . 'Admin' . DS . 'admin_file' . DS,
    'file_upload_max_size'       => 204800,
    //'file_upload_max_size'       => 3145728,
    'file_upload_ext'            => 'jpg,png,gif,doc,docx,xlsx',


    //后台文件上传路径设置
    'email_file_upload_path'     => ROOT_PATH . 'public' . DS . 'uploads' . DS . 'Admin' . DS . 'email_file' . DS,
    //上次传文件url显示路径
    'email_file_upload_url'      => DS . 'uploads' . DS . 'Admin' . DS . 'email_file' . DS,
    'email_file_upload_max_size' => 204800,//3145728,
    'email_file_upload_ext'      => 'jpg,png,gif,doc,docx,xlsx',


    //后台生成二维码设置
    'qrcode_path'                => ROOT_PATH . 'public' . DS . 'uploads' . DS . 'Admin' . DS . 'qrcode' . DS,
    //二维码url显示路径
    'qrcode_url'                 => DS . 'uploads' . DS . 'Admin' . DS . 'qrcode' . DS,

    //后台邮件相关参数设置
    'email_from_name'            => '于破熊', // 发件人
    'email_smtp'                 => 'smtp.163.com', // SMTP服务器
    'email_username'             => '填你的@163.com', // 账号
    'email_password'             => '填你的', // 密码

    'admin_auth'=>[
        'auth_on'           => 1, // 权限开关
        'auth_type'         => 1, // 认证方式，1为实时认证；2为登录认证。
        'auth_group'        => 'admin_groups', // 用户组数据表名
        'auth_group_access' => 'auth_group_access', // 用户-用户组关系表
        'auth_rule'         => 'admin_menus', // 权限规则表
        'auth_user'         => 'admin_users', // 用户信息表
    ],

];
