<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:41:"F:\WWW\tp5/app/admin\view\user\index.html";i:1525247718;s:46:"F:\WWW\tp5\app\Admin\view\template\layout.html";i:1525242426;s:45:"F:\WWW\tp5\app\Admin\view\template\error.html";i:1521442834;s:47:"F:\WWW\tp5\app\Admin\view\template\success.html";i:1521442834;s:47:"F:\WWW\tp5\app\Admin\view\User\data_header.html";i:1521442834;s:51:"F:\WWW\tp5\app\Admin\view\template\data_footer.html";i:1521442834;}*/ ?>
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
        <div class="box">
            <div class="box-body">
                <form class="form-inline" name="searchForm" id="searchForm" action="" method="GET">
                    <div class="form-group">
                        <input value="<?php echo !empty($keywords)?$keywords : '' ;; ?>"
                               name="keywords" id="keywords" class="form-control input-sm" placeholder="帐号/用户名/手机号/邮箱">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-search"></i> 查询
                        </button>
                    </div>
                    <div class="form-group">
                        <button onclick="clear_form()" class="btn btn-sm btn-default" type="button"><i
                                class="fa  fa-eraser"></i> 清空查询
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <?php if($showDataHeader): if($showDataHeader): ?>
<div class="box-header">
    <?php if($showDataHeaderDeleteButton): ?>
    <button type="button" data-toggle="modal" data-target="#modal" class="btn btn-danger btn-sm" title="批量删除数据，请谨慎使用此功能"
            onclick="dels()">
        删除
    </button>
    <?php endif; if($showDataHeaderAddButton): ?>
    <div class="pull-right">
        <a href="add.html" class="btn btn-sm btn-default pull-right button-add-data">
            <i class="fa fa-plus"></i>
            新增
        </a>
    </div>
    <!--<script src="/public/static/Admin/plugins/layer/layer.js"></script>
    <script>
        $(function(){
            $(".button-add-data").click(function () {
                layer.open({
                    type: 2,
                    area: ['80%', '80%'],
                    fixed: false, //不固定
                    minmax: false,
                    closeBtn: 2,
                    title: '添加数据',
                    content: 'add.html'
                });
            });
        });
    </script>-->
    <?php endif; ?>
</div>
<?php endif; endif; ?>
            <div class="box-body table-responsive">
                <table id="datalist" class="table table-hover table-bordered datatable" width="100%">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" onclick="check_all(this)" class="checkbox" placeholder="全选/取消">
                        </th>
                        <th>用户ID</th>
                        <th>帐号</th>
                        <th>姓名</th>
                        <th>角色</th>
                        <th>手机</th>
                        <th>邮箱</th>
                        <th>是否启用</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$list): ?>
                    <tr>
                        <td>
                            <input type="checkbox" onclick="check_this(this)" name="data-checkbox"
                                   data-id="<?php echo $list['id']; ?>" class="checkbox data-list-check" value="<?php echo $list['id']; ?>"
                                   placeholder="选择/取消">
                        </td>
                        <td><?php echo $list['id']; ?></td>
                        <td><?php echo $list['name']; ?></td>
                        <td><?php echo $list['nick_name']; ?></td>
                        <td>
                            <?php if(is_array($list['adminGroup']) || $list['adminGroup'] instanceof \think\Collection || $list['adminGroup'] instanceof \think\Paginator): if( count($list['adminGroup'])==0 ) : echo "" ;else: foreach($list['adminGroup'] as $key=>$listson): ?>
                            <small class="label bg-blue"><?php echo $listson['adminGroup']['name']; ?></small>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </td>
                        <td><?php echo $list['mobile']; ?></td>
                        <td><?php echo $list['email']; ?></td>
                        <td><?php echo $list['status_text']; ?></td>
                        <td class="td-do">
                            <a href="edit.html?id=<?php echo $list['id']; ?>"
                               class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a data-toggle="modal" data-target="#modal"
                               class="btn btn-danger btn-xs"
                               title="删除" onclick="del(<?php echo $list['id']; ?>)">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
    <?php echo $page; ?>
    <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">
        <?php if(isset($total)): ?>
        <small>共<?php echo $total; ?>条记录</small>
        &nbsp;
        <?php endif; ?>
        <small>每页显示</small>
        &nbsp;
        <select class="input-sm grid-per-pager select-page-rows" onchange="change_page_rows(this)">
            <option value="10" <?php if($webData['list_rows']==10): ?>selected=""<?php endif; ?>>10</option>
            <option value="20" <?php if($webData['list_rows']==20): ?>selected=""<?php endif; ?>>20</option>
            <option value="30" <?php if($webData['list_rows']==30): ?>selected=""<?php endif; ?>>30</option>
            <option value="50" <?php if($webData['list_rows']==50): ?>selected=""<?php endif; ?>>50</option>
            <option value="100" <?php if($webData['list_rows']==100): ?>selected=""<?php endif; ?>>100</option>
        </select>
        &nbsp;
        <small>条记录</small>
    </label>
</div>
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