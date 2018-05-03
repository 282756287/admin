<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:45:"F:\WWW\tp5/app/admin\view\admin_menu\add.html";i:1521442834;s:46:"F:\WWW\tp5\app\Admin\view\template\layout.html";i:1525242426;s:45:"F:\WWW\tp5\app\Admin\view\template\error.html";i:1521442834;s:47:"F:\WWW\tp5\app\Admin\view\template\success.html";i:1521442834;s:51:"F:\WWW\tp5\app\Admin\view\template\form_header.html";i:1521442834;s:51:"F:\WWW\tp5\app\Admin\view\template\form_footer.html";i:1521442834;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title><?php echo (isset($webData['title']) && ($webData['title'] !== '')?$webData['title']:"后台管理"); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="application-name" content="BearAdmin">
    <meta itemprop="name" content="BearAdmin">
    <meta itemprop="image" content="/public/static/Admin/images/touch-icon-iphone-retina.png">
    <meta name="author" content="测试">

    <link rel="apple-touch-icon" href="/public/static/Admin/images/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/static/Admin/images/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/static/Admin/images/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/static/Admin/images/touch-icon-ipad-retina.png">

    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">

    <link rel="stylesheet" href="/public/static/Admin/css/app.min.css">

    <script>
        /*删除地址*/
        var data_del_url = "<?php echo (isset($webData['data_del_url']) && ($webData['data_del_url'] !== '')?$webData['data_del_url']:'del.html'); ?>";
        /*定义批量删除id*/
        var del_ids = [];
    </script>
    <script src="/public/static/Admin/js/app.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if(\think\Session::get('error_message')): ?>
    <script>
    $(function () {
        toastr.error('<?php echo \think\Session::get('error_message'); ?>');
    });
</script>

    <?php endif; if(\think\Session::get('success_message')): ?>
    <script>
    $(function () {
        toastr.success('<?php echo \think\Session::get('success_message'); ?>');
    });
</script>
    <?php endif; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a class="logo">
            <span class="logo-mini"><b>管理</b>后台</span>
            <span class="logo-lg"><b><?php if(!empty($project_name)): ?><?php echo $project_name; endif; ?></b>管理后台</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">切换导航</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo Head_img($webData['user_info']['avatar']); ?>" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"><?php echo $webData['user_info']['nick_name']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo Head_img($webData['user_info']['avatar']); ?>" class="img-circle"
                                     alt="User Image">
                                <p>
                                    <?php echo $webData['user_info']['nick_name']; ?>
                                    <small><?php echo $webData['user_info']['name']; ?></small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo url('User/profile'); ?>" class="btn btn-default btn-flat">个人资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo url('auth/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="control-sidebar"><i class="fa fa-cog"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo Head_img($webData['user_info']['avatar']); ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php if(!empty($user_info['name'])): ?><?php echo $user_info['name']; endif; ?></p>
                    <a><i class="fa fa-circle text-success"></i> 正常</a>
                </div>
            </div>
            <ul class="sidebar-menu">
                <?php echo $webData['left_menu']; ?>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?php echo $webData['title']; ?>
            </h1>
            <ol class="breadcrumb">
                <?php if(isset($webData['current_nav']) && !empty($webData['current_nav'])): ?>
                <li><a href="<?php echo url('admin/index/index'); ?>"><i class="fa fa-home"></i> 主页</a></li>
                <?php echo $webData['current_nav']; endif; ?>
            </ol>
        </section>
        <section class="content">
            <div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
    <h3 class="box-title"><?php echo (isset($webData['title']) && ($webData['title'] !== '')?$webData['title']:''); ?></h3>
    <div class="box-tools">
        <div class="btn-group pull-right" style="margin-right: 10px">
            <a href="index.html" class="btn flat btn-sm btn-default"><i
                    class="fa fa-list"></i>&nbsp;列表</a>
        </div>
        <div class="btn-group pull-right" style="margin-right: 10px">
            <a class="btn flat btn-sm btn-default form-history-back"><i class="fa fa-arrow-left"></i>&nbsp;返回</a>
        </div>
    </div>
</div>
            <form id="dataForm" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="fields-group">
                        <?php if(isset($info)): ?>
                        <input id="id" name="id" value="<?php echo $info['id']; ?>" hidden placeholder="请勿修改">
                        <?php endif; ?>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">上级菜单</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <select name="parent_id" id="parent_id" class="form-control">
                                        <option value="0">/</option>
                                        <?php echo $selects; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <input maxlength="50" id="title" name="title" value="<?php echo (isset($info['title']) && ($info['title'] !== '')?$info['title']:''); ?>" class="form-control" placeholder="请输入菜单名称">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">url</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-internet-explorer"></i></span>
                                    <input maxlength="100" id="url" name="url" value="<?php echo (isset($info['url']) && ($info['url'] !== '')?$info['url']:''); ?>" class="form-control" placeholder="菜单url">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="icon" class="col-sm-2 control-label">图标</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <input maxlength="30" id="icon" name="icon" value="<?php echo (isset($info['icon']) && ($info['icon'] !== '')?$info['icon']:''); ?>" class="form-control" placeholder="请输入图标class">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort_id" class="col-sm-2 control-label">排序</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span>
                                    <input max="9999" min="1" type="number" id="sort_id" name="sort_id" value="<?php echo (isset($info['sort_id']) && ($info['sort_id'] !== '')?$info['sort_id']:'1000'); ?>" class="form-control" placeholder="默认1000">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="is_show" class="col-sm-2 control-label">是否显示</label>
                            <div class="col-sm-8">
                                <div class="input-group iconpicker-container">
                                    <input <?php if((isset($info) && $info['is_show']==1) || !isset($info)): ?>checked<?php endif; ?>
                                           value="<?php echo (isset($info['is_show']) && ($info['is_show'] !== '')?$info['is_show']:'1'); ?>"
                                           class="switch-is-show" type="checkbox" placeholder="status-switch">
                                    <input id="is_show" name="is_show" class="input_status" value="<?php echo (isset($info['is_show']) && ($info['is_show'] !== '')?$info['is_show']:'1'); ?>" type="hidden" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="log_type" class="col-sm-2 control-label">日志请求方式</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <select name="log_type" id="log_type" class="form-control">
                                        <option value="0">不记录日志</option>
                                        <?php if(is_array($requests) || $requests instanceof \think\Collection || $requests instanceof \think\Paginator): if( count($requests)==0 ) : echo "" ;else: foreach($requests as $key=>$r): ?>
                                        <option value="<?php echo $r['id']; ?>" <?php if(isset($info) && $info['log_type']==$r['id']): ?>selected<?php endif; ?>>
                                            <?php echo $r['title']; ?>
                                        </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
    <?php echo token(); ?>
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="btn-group pull-right">
            <button type="submit" class="btn flat btn-info pull-right dataform-sub">
                <?php echo (isset($sub_title) && ($sub_title !== '')?$sub_title:'保存'); ?>
            </button>
        </div>
        <div class="btn-group pull-left">
            <button type="reset" class="btn flat btn-warning">重置</button>
        </div>
    </div>
</div>
            </form>
        </div>
    </div>
</div>
        </section>
    </div>

    <!--删除操作modal-->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">提示</h4>
                </div>
                <div class="modal-body">
                    <p id="modal_message">您确认执行本次操作吗？</p>
                    <input name="modal_do_url" id="modal_do_url" value="" placeholder="modal_do_url" type="hidden">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                    <button onclick="modal_do()" type="button" class="btn btn-primary">确认</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>V</b> 1.0
        </div>
        <strong>Copyright &copy; 2018 <a></a>.</strong> All rights
        reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
        <div class="tab-content">
            <div class="tab-pane" id="control-sidebar-home-tab">
            </div>
        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
</body>
</html>
<script src="/public/static/Admin/js/demo.js" type="text/javascript"></script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?d740981d25ee4b445e195a1e4a37630b";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>