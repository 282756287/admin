<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:42:"F:\WWW\tp5/app/admin\view\index\index.html";i:1525239830;}*/ ?>
<div class="row">
    <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> 你好,<?php echo $webData['user_info']['nick_name']; ?>:</h4>
            欢迎来到后台管理系统，左侧为菜单区域，右侧为功能区。
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3>后台介绍</h3>
            </div>
            <div class="box-body table-responsive">
                <div class="content body">
                    <section id="introduction">

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">访问信息</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover table-bordered">
                    <tbody>
                    <tr>
                        <td>您的系统</td>
                        <td><?php echo $sys['os']; ?></td>
                        <td>浏览器</td>
                        <td><?php echo $sys['browser']; ?></td>
                    </tr>
                    <tr>
                        <td>ip地址</td>
                        <td><?php echo $sys['ip']; ?></td>
                        <td>城市</td>
                        <td><?php echo $sys['city']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>