<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:39:"F:\WWW\tp5/app/admin\view\user\add.html";i:1525248490;s:46:"F:\WWW\tp5\app\Admin\view\template\layout.html";i:1525242426;s:45:"F:\WWW\tp5\app\Admin\view\template\error.html";i:1521442834;s:47:"F:\WWW\tp5\app\Admin\view\template\success.html";i:1521442834;s:51:"F:\WWW\tp5\app\Admin\view\template\form_header.html";i:1521442834;s:47:"F:\WWW\tp5\app\Admin\view\User\form_footer.html";i:1521442834;}*/ ?>
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
                                    <a href="<?php echo url('admin_user/profile'); ?>" class="btn btn-default btn-flat">个人资料</a>
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
            <form id="dataForm" class="form-horizontal dataForm" action="" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="fields-group">
                        <?php if(isset($info)): ?>
                        <input id="id" name="id" value="<?php echo $info['id']; ?>" hidden placeholder="请勿修改">
                        <?php endif; ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">角色</label>
                            <div class="col-sm-8">
                                <div class="input-group iconpicker-container">
                                    <?php if(is_array($roles) || $roles instanceof \think\Collection || $roles instanceof \think\Paginator): if( count($roles)==0 ) : echo "" ;else: foreach($roles as $key=>$r): ?>
                                    <input class="checkbox-inline checkbox" <?php echo $r['checked']; ?> type="checkbox"
                                           name="parent_id[]" id="parent_<?php echo $r['id']; ?>" value="<?php echo $r['id']; ?>"/>
                                    <label  style="margin:10px 20px 10px 3px"  for="parent_<?php echo $r['id']; ?>"><?php echo $r['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">帐号</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input maxlength="20" id="name" name="name" value="<?php echo (isset($info['name']) && ($info['name'] !== '')?$info['name']:''); ?>" class="form-control" placeholder="请输入用户帐号">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa  fa-eye-slash"></i></span>
                                    <input maxlength="20" type="password" id="password" name="password" class="form-control" placeholder="不修改无需填写">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nick_name" class="col-sm-2 control-label">姓名或昵称</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <input maxlength="20" id="nick_name" name="nick_name" value="<?php echo (isset($info['nick_name']) && ($info['nick_name'] !== '')?$info['nick_name']:''); ?>" class="form-control" placeholder="请输入用户姓名或昵称">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">手机号</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="tel" maxlength="11" id="mobile" name="mobile" value="<?php echo (isset($info['mobile']) && ($info['mobile'] !== '')?$info['mobile']:''); ?>" class="form-control" placeholder="请输入用户手机号">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">邮箱</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input maxlength="50" type="email" id="email" name="email" value="<?php echo (isset($info['email']) && ($info['email'] !== '')?$info['email']:''); ?>" class="form-control" placeholder="请输入用户邮箱">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-sm-2 control-label">头像</label>
                            <div class="col-sm-8">
                                <div class="input-group file-caption-main">
                                    <div tabindex="500" class="form-control file-caption  kv-fileinput-caption">
                                        <div class="file-caption-name">
                                            <i class="glyphicon glyphicon-file kv-caption-icon"></i>
                                        </div>
                                    </div>
                                    <div class="input-group-btn">
                                        <div tabindex="500" class="btn btn-primary btn-file"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;  <span class="hidden-xs">浏览</span><input type="file" class="avatar" name="avatar" id="avatar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($info)): ?>
                        <div class="form-group">
                        <label class="col-sm-2 control-label">当前头像</label>
                        <div class="col-sm-8">
                            <div class="input-group file-caption-main">
                                <img src="<?php echo $info['avatar']; ?>" style="max-width: 150px;max-height: 150px">
                            </div>
                        </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">是否启用</label>
                            <div class="col-sm-8">
                                <div class="input-group iconpicker-container">
                                    <input <?php if((isset($info) && $info['status']==1) || !isset($info)): ?>checked<?php endif; ?>
                                           value="<?php echo (isset($info['status']) && ($info['status'] !== '')?$info['status']:'1'); ?>"
                                           class="switch-is-show" type="checkbox" placeholder="status-switch">
                                    <input id="status" name="status" class="input_status" value="<?php echo (isset($info['status']) && ($info['status'] !== '')?$info['status']:'1'); ?>" type="hidden" />
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
<script src="/public/static/Admin/plugins/layer/layer.js"></script>
<script>
    var pre_url = "<?php echo (isset($pre_url) && ($pre_url !== '')?$pre_url:''); ?>";
    $(function () {
        $(".dataForm").submit(function (e) {
                    e.preventDefault();
                    var form_action = $(this).attr('action');
                    var form_method = $(this).attr('method');
                    var form_data = new FormData($(this)[0]);
                    console.log('%cajax submit start!', ';color:#333333');
                    console.log('action:' + form_action);
                    console.log('method:' + form_method);
                    console.log('data:' + form_data);
                    $.ajax({
                                url: form_action,
                                dataType: 'json',
                                type: form_method,
                                data: form_data,
                                async: false,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function (result) {
                                    console.log('submit success!');
                                    if (result.code === 1) {
                                        console.log('%cresult success', ';color:#00a65a');
                                        layer.msg(result.msg);
                                        setTimeout(function () {
                                            goUrl(result.url);
                                        },500);
                                    } else {
                                        console.log('%cresult fail', ';color:#f39c12');
                                        layer.msg(result.msg);
                                    }
                                },
                                error: function (xhr, type, errorThrown) {
                                    //异常处理；
                                    console.log('%csubmit fail!', ';color:#dd4b39');
                                    console.log();
                                    console.log("type:" + type + ",readyState:" + xhr.readyState + ",status:" + xhr.status);
                                    console.log("url:" + form_action);
                                    console.log("data:" + form_data);
                                    layer.msg('访问错误');
                                }
                            }
                    );
                    return false;
                }
        );
    });

    function goUrl(url_data) {
        if (url_data.type !== undefined) {
            if(url_data.type===1){
                window.history.back();
            }else if(url_data.type===2){
                window.location.reload();
            }else if(url_data.type===3){
                window.location.href=url_data.url;
            }else if(url_data.type===4){
                console.log('不做任何操作');
            }else{
                console.log('位置跳转类型');
            }
        }
    }
</script>
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