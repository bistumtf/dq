<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
 <meta http-equiv=Content-Type content="text/html;charset=utf-8"/>
<script src="http://dq//Public/js/jquery_1.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://dq//Public/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://dq//Public/js/ueditor/ueditor.all.js"></script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="http://dq//Public/js/ueditor/lang/zh-cn/zh-cn.js"></script>


    <link href="http://dq//Public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://dq//Public/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
      <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!-- page specific plugin styles -->
    <!-- fonts -->
    <!-- ace styles -->

    <link rel="stylesheet" href="http://dq//Public/assets/css/ace.css" />
    <link rel="stylesheet" href="http://dq//Public/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="http://dq//Public/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->

    <script src="http://dq//Public/assets/js/ace-extra.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
            <div class="main-content">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try { ace.settings.check('breadcrumbs', 'fixed') } catch (e) { }
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home home-icon"></i>
                            <a href="#">首页</a>
                        </li>
                        <li class="active">控制台</li>
                    </ul><!-- .breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                <i class="icon-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div><!-- #nav-search -->
                </div>

                <div class="page-content">
                    <div class="page-header">
                        <h1>
                            控制台
                            <small>
                                <i class="icon-double-angle-right"></i>
                                查看
                            </small>
                        </h1>
                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <div class="alert alert-block alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="icon-remove"></i>
                                </button>

                                <i class="icon-ok green"></i>

                                欢迎使用
                                <strong class="green">
                                    Ace后台管理系统
                                    <small>(v1.2)</small>
                                </strong>
                                ,轻量级好用的后台管理系统模版.
                            </div>

                            <div class="row">
                                <div class="space-6"></div>

                                <div class="col-sm-7 infobox-container">
                                    <div class="infobox infobox-green  ">
                                        <div class="infobox-icon">
                                            <i class="icon-comments"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">32</span>
                                            <div class="infobox-content">2个评论</div>
                                        </div>
                                        <div class="stat stat-success">8%</div>
                                    </div>

                                    <div class="infobox infobox-blue  ">
                                        <div class="infobox-icon">
                                            <i class="icon-twitter"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">11</span>
                                            <div class="infobox-content">新粉丝</div>
                                        </div>

                                        <div class="badge badge-success">
                                            +32%
                                            <i class="icon-arrow-up"></i>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-pink  ">
                                        <div class="infobox-icon">
                                            <i class="icon-shopping-cart"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">8</span>
                                            <div class="infobox-content">新订单</div>
                                        </div>
                                        <div class="stat stat-important">4%</div>
                                    </div>

                                    <div class="infobox infobox-red  ">
                                        <div class="infobox-icon">
                                            <i class="icon-beaker"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">7</span>
                                            <div class="infobox-content">调查</div>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-orange2  ">
                                        <div class="infobox-chart">
                                            <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-data-number">6,251</span>
                                            <div class="infobox-content">页面查看次数</div>
                                        </div>

                                        <div class="badge badge-success">
                                            7.2%
                                            <i class="icon-arrow-up"></i>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-blue2  ">
                                        <div class="infobox-progress">
                                            <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                                <span class="percent">42</span>%
                                            </div>
                                        </div>

                                        <div class="infobox-data">
                                            <span class="infobox-text">交易使用</span>

                                            <div class="infobox-content">
                                                <span class="bigger-110">~</span>
                                                剩余58GB
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-6"></div>

                                    <div class="infobox infobox-green infobox-small infobox-dark">
                                        <div class="infobox-progress">
                                            <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                                <span class="percent">61</span>%
                                            </div>
                                        </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">任务</div>
                                            <div class="infobox-content">完成</div>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-blue infobox-small infobox-dark">
                                        <div class="infobox-chart">
                                            <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                        </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">获得</div>
                                            <div class="infobox-content">$32,000</div>
                                        </div>
                                    </div>

                                    <div class="infobox infobox-grey infobox-small infobox-dark">
                                        <div class="infobox-icon">
                                            <i class="icon-download-alt"></i>
                                        </div>

                                        <div class="infobox-data">
                                            <div class="infobox-content">下载次数</div>
                                            <div class="infobox-content">1,205</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vspace-sm"></div>

                                <div class="col-sm-5">
                                    <div class="widget-box">
                                        <div class="widget-header widget-header-flat widget-header-small">
                                            <h5>
                                                <i class="icon-signal"></i>
                                                访问来源
                                            </h5>

                                            <div class="widget-toolbar no-border">
                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    本周
                                                    <i class="icon-angle-down icon-on-right bigger-110"></i>
                                                </button>

                                                <ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
                                                    <li class="active">
                                                        <a href="#" class="blue">
                                                            <i class="icon-caret-right bigger-110">&nbsp;</i>
                                                            本周
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                                            上周
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                                            本月
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                                            上月
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <div id="piechart-placeholder"></div>

                                                <div class="hr hr8 hr-double"></div>

                                                <div class="clearfix">
                                                    <div class="grid3">
                                                        <span class="grey">
                                                            <i class="icon-facebook-sign icon-2x blue"></i>
                                                            &nbsp; likes
                                                        </span>
                                                        <h4 class="bigger pull-right">1,255</h4>
                                                    </div>

                                                    <div class="grid3">
                                                        <span class="grey">
                                                            <i class="icon-twitter-sign icon-2x purple"></i>
                                                            &nbsp; tweets
                                                        </span>
                                                        <h4 class="bigger pull-right">941</h4>
                                                    </div>

                                                    <div class="grid3">
                                                        <span class="grey">
                                                            <i class="icon-pinterest-sign icon-2x red"></i>
                                                            &nbsp; pins
                                                        </span>
                                                        <h4 class="bigger pull-right">1,050</h4>
                                                    </div>
                                                </div>
                                            </div><!-- /widget-main -->
                                        </div><!-- /widget-body -->
                                    </div><!-- /widget-box -->
                                </div><!-- /span -->
                            </div><!-- /row -->

                            <div class="hr hr32 hr-dotted"></div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="widget-box transparent">
                                        <div class="widget-header widget-header-flat">
                                            <h4 class="lighter">
                                                <i class="icon-star orange"></i>
                                                热门域名
                                            </h4>

                                            <div class="widget-toolbar">
                                                <a href="#" data-action="collapse">
                                                    <i class="icon-chevron-up"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <table class="table table-bordered table-striped">
                                                    <thead class="thin-border-bottom">
                                                        <tr>
                                                            <th>
                                                                <i class="icon-caret-right blue"></i>
                                                                名称
                                                            </th>

                                                            <th>
                                                                <i class="icon-caret-right blue"></i>
                                                                价格
                                                            </th>

                                                            <th class="hidden-480">
                                                                <i class="icon-caret-right blue"></i>
                                                                状态
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>internet.com</td>

                                                            <td>
                                                                <small>
                                                                    <s class="red">$29.99</s>
                                                                </small>
                                                                <b class="green">$19.99</b>
                                                            </td>

                                                            <td class="hidden-480">
                                                                <span class="label label-info arrowed-right arrowed-in">销售中</span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>online.com</td>

                                                            <td>
                                                                <small>
                                                                    <s class="red"></s>
                                                                </small>
                                                                <b class="green">$16.45</b>
                                                            </td>

                                                            <td class="hidden-480">
                                                                <span class="label label-success arrowed-in arrowed-in-right">可用</span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>newnet.com</td>

                                                            <td>
                                                                <small>
                                                                    <s class="red"></s>
                                                                </small>
                                                                <b class="green">$15.00</b>
                                                            </td>

                                                            <td class="hidden-480">
                                                                <span class="label label-danger arrowed">待定</span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>web.com</td>

                                                            <td>
                                                                <small>
                                                                    <s class="red">$24.99</s>
                                                                </small>
                                                                <b class="green">$19.95</b>
                                                            </td>

                                                            <td class="hidden-480">
                                                                <span class="label arrowed">
                                                                    <s>无货</s>
                                                                </span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>domain.com</td>

                                                            <td>
                                                                <small>
                                                                    <s class="red"></s>
                                                                </small>
                                                                <b class="green">$12.00</b>
                                                            </td>

                                                            <td class="hidden-480">
                                                                <span class="label label-warning arrowed arrowed-right">售完</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /widget-main -->
                                        </div><!-- /widget-body -->
                                    </div><!-- /widget-box -->
                                </div>

                                <div class="col-sm-7">
                                    <div class="widget-box transparent">
                                        <div class="widget-header widget-header-flat">
                                            <h4 class="lighter">
                                                <i class="icon-signal"></i>
                                                销售统计
                                            </h4>

                                            <div class="widget-toolbar">
                                                <a href="#" data-action="collapse">
                                                    <i class="icon-chevron-up"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main padding-4">
                                                <div id="sales-charts"></div>
                                            </div><!-- /widget-main -->
                                        </div><!-- /widget-body -->
                                    </div><!-- /widget-box -->
                                </div>
                            </div>

                            <div class="hr hr32 hr-dotted"></div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="widget-box transparent" id="recent-box">
                                        <div class="widget-header">
                                            <h4 class="lighter smaller">
                                                <i class="icon-rss orange"></i>
                                                最近
                                            </h4>

                                            <div class="widget-toolbar no-border">
                                                <ul class="nav nav-tabs" id="recent-tab">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#task-tab">任务</a>
                                                    </li>

                                                    <li>
                                                        <a data-toggle="tab" href="#member-tab">会员</a>
                                                    </li>

                                                    <li>
                                                        <a data-toggle="tab" href="#comment-tab">评论</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main padding-4">
                                                <div class="tab-content padding-8 overflow-visible">
                                                    <div id="task-tab" class="tab-pane active">
                                                        <h4 class="smaller lighter green">
                                                            <i class="icon-list"></i>
                                                            可拖拽排序列表
                                                        </h4>

                                                        <ul id="tasks" class="item-list">
                                                            <li class="item-orange clearfix">
                                                                <label class="inline">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"> 问答</span>
                                                                </label>

                                                                <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                                                    <span class="percent">42</span>%
                                                                </div>
                                                            </li>

                                                            <li class="item-red clearfix">
                                                                <label class="inline">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"> BUG修复</span>
                                                                </label>

                                                                <div class="pull-right action-buttons">
                                                                    <a href="#" class="blue">
                                                                        <i class="icon-pencil bigger-130"></i>
                                                                    </a>

                                                                    <span class="vbar"></span>

                                                                    <a href="#" class="red">
                                                                        <i class="icon-trash bigger-130"></i>
                                                                    </a>

                                                                    <span class="vbar"></span>

                                                                    <a href="#" class="green">
                                                                        <i class="icon-flag bigger-130"></i>
                                                                    </a>
                                                                </div>
                                                            </li>

                                                            <li class="item-default clearfix">
                                                                <label class="inline">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl">添加新的特征</span>
                                                                </label>

                                                                <div class="inline pull-right position-relative dropdown-hover">
                                                                    <button class="btn btn-minier bigger btn-primary">
                                                                        <i class="icon-cog icon-only bigger-120"></i>
                                                                    </button>

                                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">
                                                                        <li>
                                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done">
                                                                                <span class="green">
                                                                                    <i class="icon-ok bigger-110"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                <span class="red">
                                                                                    <i class="icon-trash bigger-110"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>

                                                            <li class="item-blue clearfix">
                                                                <label class="inline">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"> 更新模版脚本</span>
                                                                </label>
                                                            </li>

                                                            <li class="item-grey clearfix">
                                                                <label class="inline">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"> 添加新皮肤</span>
                                                                </label>
                                                            </li>

                                                            <li class="item-green clearfix">
                                                                <label class="inline">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"> 升级服务端</span>
                                                                </label>
                                                            </li>

                                                            <li class="item-pink clearfix">
                                                                <label class="inline">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"> 清理垃圾</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div id="member-tab" class="tab-pane">
                                                        <div class="clearfix">
                                                            <div class="itemdiv memberdiv">
                                                                <div class="user">
                                                                    <img alt="Bob Doe's avatar" src="assets/avatars/user.jpg" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Bob Doe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">20 min</span>
                                                                    </div>

                                                                    <div>
                                                                        <span class="label label-warning label-sm">pending</span>

                                                                        <div class="inline position-relative">
                                                                            <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="icon-angle-down icon-only bigger-120"></i>
                                                                            </button>

                                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                        <span class="green">
                                                                                            <i class="icon-ok bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                        <span class="orange">
                                                                                            <i class="icon-remove bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                        <span class="red">
                                                                                            <i class="icon-trash bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv memberdiv">
                                                                <div class="user">
                                                                    <img alt="Joe Doe's avatar" src="assets/avatars/avatar2.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Joe Doe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">1 hour</span>
                                                                    </div>

                                                                    <div>
                                                                        <span class="label label-warning label-sm">pending</span>

                                                                        <div class="inline position-relative">
                                                                            <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="icon-angle-down icon-only bigger-120"></i>
                                                                            </button>

                                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                        <span class="green">
                                                                                            <i class="icon-ok bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                        <span class="orange">
                                                                                            <i class="icon-remove bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                        <span class="red">
                                                                                            <i class="icon-trash bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv memberdiv">
                                                                <div class="user">
                                                                    <img alt="Jim Doe's avatar" src="assets/avatars/avatar.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Jim Doe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">2 hour</span>
                                                                    </div>

                                                                    <div>
                                                                        <span class="label label-warning label-sm">pending</span>

                                                                        <div class="inline position-relative">
                                                                            <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="icon-angle-down icon-only bigger-120"></i>
                                                                            </button>

                                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                        <span class="green">
                                                                                            <i class="icon-ok bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                        <span class="orange">
                                                                                            <i class="icon-remove bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                        <span class="red">
                                                                                            <i class="icon-trash bigger-110"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv memberdiv">
                                                                <div class="user">
                                                                    <img alt="Alex Doe's avatar" src="assets/avatars/avatar5.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Alex Doe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">3 hour</span>
                                                                    </div>

                                                                    <div>
                                                                        <span class="label label-danger label-sm">blocked</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv memberdiv">
                                                                <div class="user">
                                                                    <img alt="Bob Doe's avatar" src="assets/avatars/avatar2.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Bob Doe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">6 hour</span>
                                                                    </div>

                                                                    <div>
                                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv memberdiv">
                                                                <div class="user">
                                                                    <img alt="Susan's avatar" src="assets/avatars/avatar3.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Susan</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">yesterday</span>
                                                                    </div>

                                                                    <div>
                                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv memberdiv">
                                                                <div class="user">
                                                                    <img alt="Phil Doe's avatar" src="assets/avatars/avatar4.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Phil Doe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">2 days ago</span>
                                                                    </div>

                                                                    <div>
                                                                        <span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv memberdiv">
                                                                <div class="user">
                                                                    <img alt="Alexa Doe's avatar" src="assets/avatars/avatar1.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Alexa Doe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">3天以前</span>
                                                                    </div>

                                                                    <div>
                                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="center">
                                                            <i class="icon-group icon-2x green"></i>

                                                            &nbsp;
                                                            <a href="#">
                                                                查看所有会员 &nbsp;
                                                                <i class="icon-arrow-right"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hr hr-double hr8"></div>
                                                    </div><!-- member-tab -->

                                                    <div id="comment-tab" class="tab-pane">
                                                        <div class="comments">
                                                            <div class="itemdiv commentdiv">
                                                                <div class="user">
                                                                    <img alt="Bob Doe's Avatar" src="assets/avatars/avatar.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Bob Doe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="green">6 min</span>
                                                                    </div>

                                                                    <div class="text">
                                                                        <i class="icon-quote-left"></i>
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                    </div>
                                                                </div>

                                                                <div class="tools">
                                                                    <div class="inline position-relative">
                                                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="icon-angle-down icon-only bigger-120"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                            <li>
                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                    <span class="green">
                                                                                        <i class="icon-ok bigger-110"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                    <span class="orange">
                                                                                        <i class="icon-remove bigger-110"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                    <span class="red">
                                                                                        <i class="icon-trash bigger-110"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv commentdiv">
                                                                <div class="user">
                                                                    <img alt="Jennifer's Avatar" src="assets/avatars/avatar1.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Jennifer</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="blue">15 min</span>
                                                                    </div>

                                                                    <div class="text">
                                                                        <i class="icon-quote-left"></i>
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                    </div>
                                                                </div>

                                                                <div class="tools">
                                                                    <div class="action-buttons bigger-125">
                                                                        <a href="#">
                                                                            <i class="icon-pencil blue"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="icon-trash red"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv commentdiv">
                                                                <div class="user">
                                                                    <img alt="Joe's Avatar" src="assets/avatars/avatar2.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Joe</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="orange">22 min</span>
                                                                    </div>

                                                                    <div class="text">
                                                                        <i class="icon-quote-left"></i>
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                    </div>
                                                                </div>

                                                                <div class="tools">
                                                                    <div class="action-buttons bigger-125">
                                                                        <a href="#">
                                                                            <i class="icon-pencil blue"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="icon-trash red"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="itemdiv commentdiv">
                                                                <div class="user">
                                                                    <img alt="Rita's Avatar" src="assets/avatars/avatar3.png" />
                                                                </div>

                                                                <div class="body">
                                                                    <div class="name">
                                                                        <a href="#">Rita</a>
                                                                    </div>

                                                                    <div class="time">
                                                                        <i class="icon-time"></i>
                                                                        <span class="red">50 min</span>
                                                                    </div>

                                                                    <div class="text">
                                                                        <i class="icon-quote-left"></i>
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                                                                    </div>
                                                                </div>

                                                                <div class="tools">
                                                                    <div class="action-buttons bigger-125">
                                                                        <a href="#">
                                                                            <i class="icon-pencil blue"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="icon-trash red"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="hr hr8"></div>

                                                        <div class="center">
                                                            <i class="icon-comments-alt icon-2x green"></i>

                                                            &nbsp;
                                                            <a href="#">
                                                                See all comments &nbsp;
                                                                <i class="icon-arrow-right"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hr hr-double hr8"></div>
                                                    </div>
                                                </div>
                                            </div><!-- /widget-main -->
                                        </div><!-- /widget-body -->
                                    </div><!-- /widget-box -->
                                </div><!-- /span -->

                                <div class="col-sm-6">
                                    <div class="widget-box ">
                                        <div class="widget-header">
                                            <h4 class="lighter smaller">
                                                <i class="icon-comment blue"></i>
                                                会话
                                            </h4>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <div class="dialogs">
                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="Alexa's Avatar" src="assets/avatars/avatar1.png" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="icon-time"></i>
                                                                <span class="green">4秒钟前</span>
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">Alexa</a>
                                                            </div>
                                                            <div class="text">大家好啊</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-minier btn-info">
                                                                    <i class="icon-only icon-share-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="John's Avatar" src="assets/avatars/avatar.png" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="icon-time"></i>
                                                                <span class="blue">38秒以前</span>
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">John</a>
                                                            </div>
                                                            <div class="text">框架很好用嘛</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-minier btn-info">
                                                                    <i class="icon-only icon-share-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="Bob's Avatar" src="assets/avatars/user.jpg" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="icon-time"></i>
                                                                <span class="orange">2分钟以前</span>
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">Bob</a>
                                                                <span class="label label-info arrowed arrowed-in-right">admin</span>
                                                            </div>
                                                            <div class="text">欢迎大家使用ACE后台管理系统.</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-minier btn-info">
                                                                    <i class="icon-only icon-share-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="Jim's Avatar" src="assets/avatars/avatar4.png" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="icon-time"></i>
                                                                <span class="grey">3分钟以前</span>
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">Jim</a>
                                                            </div>
                                                            <div class="text">大家多提提BUG</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-minier btn-info">
                                                                    <i class="icon-only icon-share-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="itemdiv dialogdiv">
                                                        <div class="user">
                                                            <img alt="Alexa's Avatar" src="assets/avatars/avatar1.png" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="time">
                                                                <i class="icon-time"></i>
                                                                <span class="green">4分钟以前</span>
                                                            </div>

                                                            <div class="name">
                                                                <a href="#">Alexa</a>
                                                            </div>
                                                            <div class="text">继续支持ACE后台系统</div>

                                                            <div class="tools">
                                                                <a href="#" class="btn btn-minier btn-info">
                                                                    <i class="icon-only icon-share-alt"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form>
                                                    <div class="form-actions">
                                                        <div class="input-group">
                                                            <input placeholder="Type your message here ..." type="text" class="form-control" name="message" />
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-sm btn-info no-radius" type="button">
                                                                    <i class="icon-share-alt"></i>
                                                                    发送
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!-- /widget-main -->
                                        </div><!-- /widget-body -->
                                    </div><!-- /widget-box -->
                                </div><!-- /span -->
                            </div><!-- /row -->
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content -->
<form action="http://dq/index.php?m=Item&c=Index&a=uploadLiquor" method="post" enctype="multipart/form-data">
<table>

	<tr>
		<td>标题:</td><td><input name="title"/></td>
	</tr>
	<tr>
		<tr>
		<td><input type="file" name="file[]"/></td>
		<td><input type="button" id="add_file" value='增加'/></td>
	</tr>
	</tr>
	<tr>
		<td>酒类型:</td>
		<td>
			<select name="type">
				<option value="1">1</option>
			</select>
		</td>
	</tr>
	<tr>
		<td><select name="country" id="s1"> <option>国家 </option> </select> </td>
		<td><select name="province" id="s2"> <option>省份、州 </option> </select> </td>
		<td><select name="county" id="s3"> <option>地级市、县 </option> </select> </td>
	</tr>
	<tr>
		<td>酒精度:</td><td><input name="alcohol"/></td>
	</tr>
	<tr>
		<td>饮酒温度:</td><td><input name="tempera"/></td>
	</tr>
	<tr>
		<td>酒等级:</td><td><input name="level"/></td>
	</tr>
	<tr>
		<td>价格:</td><td><input name="price"/></td>
	</tr>
	<tr>
		<td>总量:</td><td><input name="total"/></td>
	</tr>
	<tr>
		<td colspan="2">
<div>
    <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
</div>
</td>

	</tr>
	<tr>
		<td>
			
			<input type="button" onclick="form_submit()"value="提交"/></td>
	</tr>
	<div style="display:none"><textarea name="content" id="textarea_content"></textarea></div>
</table>
</form>
<script>
function form_submit(){
        var content=getContent();
	$("#textarea_content").html(content);
}
$("#add_file").click(function(){
		$(this).parent().siblings().append('<tr><td><input type="file" name="file[]"/></td></tr>');
		})

</script>











<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
       // arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        //arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        return arr.join("\n");
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
















<SCRIPT LANGUAGE="JavaScript"> 
<!-- 
function Dsy() 
{ 
this.Items = {}; 
} 
Dsy.prototype.add = function(id,iArray) 
{ 
this.Items[id] = iArray; 
} 
Dsy.prototype.Exists = function(id) 
{ 
if(typeof(this.Items[id]) == "undefined") return false; 
return true; 
} 

function change(v){ 
var str="0"; 
for(i=0;i <v;i++){ str+=("_"+(document.getElementById(s[i]).selectedIndex-1));}; 
var ss=document.getElementById(s[v]); 
with(ss){ 
  length = 0; 
  options[0]=new Option(opt0[v],opt0[v]); 
  if(v && document.getElementById(s[v-1]).selectedIndex>0 || !v) 
  { 
  if(dsy.Exists(str)){ 
    ar = dsy.Items[str]; 
    for(i=0;i <ar.length;i++)options[length]=new Option(ar[i],ar[i]); 
    if(v)options[1].selected = true; 
  } 
  } 
  if(++v <s.length){change(v);} 
} 
} 

var dsy = new Dsy(); 

dsy.add("0",["中华人民共和国","韩国","日本","新加坡","马来西亚","菲律宾","沙特阿拉伯","朝鲜","越南","缅甸","德国","英国","法国","爱尔兰","波兰","西班牙","意大利","俄罗斯","荷兰","美国","加拿大","巴西","阿根廷","新西兰","澳大利亚","印度","埃及"]); 

dsy.add("0_0",["安徽","北京","福建","甘肃","广东","广西","贵州","海南","河北","河南","黑龙江","湖北","湖南","吉林","江苏","江西","辽宁","内蒙古","宁夏","青海","山东","山西","陕西","上海","四川","天津","西藏","新疆","云南","浙江","重庆"]); 

dsy.add("0_0_0",["安庆","蚌埠","巢湖","池州","滁州","阜阳","合肥","淮北","淮南","黄山","六安","马鞍山","宿州","铜陵","芜湖","宣城","亳州"]); 
dsy.add("0_0_1",["北京"]); 
dsy.add("0_0_2",["福州","龙岩","南平","宁德","莆田","泉州","三明","厦门","漳州"]); 
dsy.add("0_0_3",["白银","定西","甘南藏族自治州","嘉峪关","金昌","酒泉","兰州","临夏回族自治州","陇南","平凉","庆阳","天水","武威","张掖"]); 
dsy.add("0_0_4",["潮州","东莞","佛山","广州","河源","惠州","江门","揭阳","茂名","梅州","清远","汕头","汕尾","韶关","深圳","阳江","云浮","湛江","肇庆","中山","珠海"]); 
dsy.add("0_0_5",["百色","北海","崇左","防城港","桂林","贵港","河池","贺州","来宾","柳州","南宁","钦州","梧州","玉林"]); 
dsy.add("0_0_6",["安顺","毕节","贵阳","六盘水","黔东南苗族侗族自治州","黔南布依族苗族自治州","黔西南布依族苗族自治州","铜仁","遵义"]); 
dsy.add("0_0_7",["白沙黎族自治县","保亭黎族苗族自治县","昌江黎族自治县","澄迈县","定安县","东方","海口","乐东黎族自治县","临高县","陵水黎族自治县","琼海","琼中黎族苗族自治县","三亚","屯昌县","万宁","文昌","五指山","儋州"]); 
dsy.add("0_0_8",["保定","沧州","承德","邯郸","衡水","廊坊","秦皇岛","石家庄","唐山","邢台","张家口"]); 
dsy.add("0_0_9",["安阳","鹤壁","济源","焦作","开封","洛阳","南阳","平顶山","三门峡","商丘","新乡","信阳","许昌","郑州","周口","驻马店","漯河","濮阳"]); 
dsy.add("0_0_10",["大庆","大兴安岭","哈尔滨","鹤岗","黑河","鸡西","佳木斯","牡丹江","七台河","齐齐哈尔","双鸭山","绥化","伊春"]); 
dsy.add("0_0_11",["鄂州","恩施土家族苗族自治州","黄冈","黄石","荆门","荆州","潜江","神农架林区","十堰","随州","天门","武汉","仙桃","咸宁","襄樊","孝感","宜昌"]); 
dsy.add("0_0_12",["常德","长沙","郴州","衡阳","怀化","娄底","邵阳","湘潭","湘西土家族苗族自治州","益阳","永州","岳阳","张家界","株洲"]); 
dsy.add("0_0_13",["白城","白山","长春","吉林","辽源","四平","松原","通化","延边朝鲜族自治州"]); 
dsy.add("0_0_14",["常州","淮安","连云港","南京","南通","苏州","宿迁","泰州","无锡","徐州","盐城","扬州","镇江"]); 
dsy.add("0_0_15",["抚州","赣州","吉安","景德镇","九江","南昌","萍乡","上饶","新余","宜春","鹰潭"]); 
dsy.add("0_0_16",["鞍山","本溪","朝阳","大连","丹东","抚顺","阜新","葫芦岛","锦州","辽阳","盘锦","沈阳","铁岭","营口"]); 
dsy.add("0_0_17",["阿拉善盟","巴彦淖尔盟","包头","赤峰","鄂尔多斯","呼和浩特","呼伦贝尔","通辽","乌海","乌兰察布盟","锡林郭勒盟","兴安盟"]); 
dsy.add("0_0_18",["固原","石嘴山","吴忠","银川"]); 
dsy.add("0_0_19",["果洛藏族自治州","海北藏族自治州","海东","海南藏族自治州","海西蒙古族藏族自治州","黄南藏族自治州","西宁","玉树藏族自治州"]); 
dsy.add("0_0_20",["滨州","德州","东营","菏泽","济南","济宁","莱芜","聊城","临沂","青岛","日照","泰安","威海","潍坊","烟台","枣庄","淄博"]); 
dsy.add("0_0_21",["长治","大同","晋城","晋中","临汾","吕梁","朔州","太原","忻州","阳泉","运城"]); 
dsy.add("0_0_22",["安康","宝鸡","汉中","商洛","铜川","渭南","西安","咸阳","延安","榆林"]); 
dsy.add("0_0_23",["上海"]); 
dsy.add("0_0_24",["阿坝藏族羌族自治州","巴中","成都","达州","德阳","甘孜藏族自治州","广安","广元","乐山","凉山彝族自治州","眉山","绵阳","南充","内江","攀枝花","遂宁","雅安","宜宾","资阳","自贡","泸州"]); 
dsy.add("0_0_25",["天津"]); 
dsy.add("0_0_26",["阿里","昌都","拉萨","林芝","那曲","日喀则","山南"]); 
dsy.add("0_0_27",["阿克苏","阿拉尔","巴音郭楞蒙古自治州","博尔塔拉蒙古自治州","昌吉回族自治州","哈密","和田","喀什","克拉玛依","克孜勒苏柯尔克孜自治州","石河子","图木舒克","吐鲁番","乌鲁木齐","五家渠","伊犁哈萨克自治州"]); 
dsy.add("0_0_28",["保山","楚雄彝族自治州","大理白族自治州","德宏傣族景颇族自治州","迪庆藏族自治州","红河哈尼族彝族自治州","昆明","丽江","临沧","怒江傈傈族自治州","曲靖","思茅","文山壮族苗族自治州","西双版纳傣族自治州","玉溪","昭通"]); 
dsy.add("0_0_29",["杭州","湖州","嘉兴","金华","丽水","宁波","绍兴","台州","温州","舟山","衢州"]); 
dsy.add("0_0_30",["重庆"]); 
dsy.add("0_1",["汉城特別市","釜山广域市","大邱广域市","仁川广域市","光州广域市","大田广域市","蔚山广域市","京畿道","江原道","忠清北道","忠清南道","全罗北道","全罗南道","庆尚北道","庆尚南道","济州道"]); 
dsy.add("0_1_0",["汉城"]); 
dsy.add("0_1_1",["釜山","机张郡"]); 
dsy.add("0_1_2",["大邱","达城郡"]); 
dsy.add("0_1_3",["仁川","江华郡","瓮津郡"]); 
dsy.add("0_1_4",["光州"]); 
dsy.add("0_1_5",["大田"]); 
dsy.add("0_1_6",["蔚山","蔚州郡"]); 
dsy.add("0_1_7",["水原市","城南市","安山市","高阳市","安养市","富川市"]); 
dsy.add("0_1_8",["春川市","原州市","江陵市"]); 
dsy.add("0_1_9",["清州市"]); 
dsy.add("0_1_10",["天安市"]); 
dsy.add("0_1_11",["全州市","群山市","益山市"]); 
dsy.add("0_1_12",["木浦市","丽水市","顺天市"]); 
dsy.add("0_1_13",["浦项市","龟尾市","庆州市"]); 
dsy.add("0_1_14",["昌原市","马山市","晋州市"]); 
dsy.add("0_1_15",["济州市","西归浦市","北济州郡","南济州郡"]); 


dsy.add("0_2",["东京都","神奈川县","大阪府","爱知县","北海道","兵库县","京都府","福冈县","神奈川县","埼玉县","广岛县","宫城县","福冈县","千叶县"]); 
dsy.add("0_2_0",["东京"]); 
dsy.add("0_2_1",["横滨市"]); 
dsy.add("0_2_2",["大阪市"]); 
dsy.add("0_2_3",["名古屋市 "]); 
dsy.add("0_2_4",["札幌市"]); 
dsy.add("0_2_5",["神戸市"]); 
dsy.add("0_2_6",["京都市"]); 
dsy.add("0_2_7",["福冈市"]); 
dsy.add("0_2_8",["川崎市"]); 
dsy.add("0_2_9",["埼玉市"]); 
dsy.add("0_2_10",["广岛市"]); 
dsy.add("0_2_11",["仙台市"]); 
dsy.add("0_2_12",["北九州市 "]); 
dsy.add("0_2_13",["千叶市"]); 


dsy.add("0_3",["新加坡"]); 
dsy.add("0_3_0",["新加坡"]); 


dsy.add("0_4",["吉打 Kedah","槟榔屿 Pulau Pinang","霹雳 Perak","吉兰丹 Kelantan","丁加奴 Terengganu","彭亨 Pahang","雪兰莪 Selangor","吉隆坡联邦直辖区 Kuala Lumpur","布特拉再也联邦直辖区 Putrajaya","森美兰 Sembilan","马六甲 Melaka","柔佛 Johor","斗湖省 Tawau","山打根省 Sandakan","西海岸省 Pantai Barat"]); 
dsy.add("0_4_0",["亚罗士打 Alor Setar","浮罗交怡 Langkawi","古邦巴素 Kubang Pasu","巴东得腊 Padang Terap","哥打士打 Kota Setar"]); 
dsy.add("0_4_1",["槟城 George Town","北区（北海） Utara (Butterworth)","中区（大山脚） Tengah (Bkt. Mertajam)","南区（高渊） Selatan (Nibong Tebal)","东北 Timur Laut"]); 
dsy.add("0_4_2",["怡保 Ipoh","拉律-马当 Larut & Matang","近打 Kinta","江沙 Kuala Kangsar"]); 
dsy.add("0_4_3",["哥打巴鲁 Kota Baharu","道北 Tumpat","哥登峇鲁 Kota Bharu","巴西马 Pasir Mas"]); 
dsy.add("0_4_4",["瓜拉丁加奴 Kuala Terengganu","勿述 Besut","瓜拉丁加奴 Kuala Terengganu","龙运 Dungun","甘马挽 Kemaman"]); 
dsy.add("0_4_5",["关丹 Kuantan","金马仑高原 Cameron Highlands","立卑 Lipis","关丹 Kuantan","而连突 Jerantut"]); 
dsy.add("0_4_6",["莎亚南 Shah Alam ","沙白安南 Sabak Bernam","乌鲁雪兰莪 Ulu Selangor","瓜拉雪兰莪 Kuala Selangor"]); 
dsy.add("0_4_7",["吉隆坡 Kuala Lumpur"]); 
dsy.add("0_4_8",["布特拉再也 Putrajaya"]); 
dsy.add("0_4_9",["芙蓉 Seremban","日叻务 Jelebu","仁保 Jempol"]); 
dsy.add("0_4_10",["马六甲 Melaka","亚罗牙也 Alor Gajah"]); 
dsy.add("0_4_11",["新山 Johor Baharu","昔加末 Segamat","丰盛港 Mersing","居銮 Keluang"]); 
dsy.add("0_4_12",["斗湖 Tawau","拿笃 Lahad Datu"]); 
dsy.add("0_4_13",["山打根 Sandakan","京那巴登岸 Kinabatangan"]); 
dsy.add("0_4_14",["哥打京那峇鲁（亚庇） Kota Kinabalu","兰脑 Ranau","古打毛律 Kota Belud","斗亚兰 Tuaran"]); 


dsy.add("0_5",["伊罗戈斯 Ilocos","卡加延河谷 Cagayan","中央吕宋 Central Luzon","甲拉巴松 Calabarzon","比科尔 Bicol","西米沙鄢 Western Visayas","中米沙鄢 Central Visayas","东米沙鄢 Eastern Visayas","国家首都区 National Capital Region"]); 
dsy.add("0_5_0",["圣费尔南多* San Fernando"]); 
dsy.add("0_5_1",["土格加劳 Tuguegarao"]); 
dsy.add("0_5_2",["圣费尔南多* San Fernando"]); 
dsy.add("0_5_3",["奎松城 Quezon"]); 
dsy.add("0_5_4",["黎牙实比 Legaspi"]); 
dsy.add("0_5_5",["伊洛伊洛 Legaspi"]); 
dsy.add("0_5_6",["宿务 Cebu"]); 
dsy.add("0_5_7",["塔克洛班 Tacloban"]); 
dsy.add("0_5_8",["马尼拉 Manila"]); 


dsy.add("0_6",["利雅得 Ar Riyad","麦加 Makkah","麦地那 Al Madinah","东部 Ash Sharqiyah","卡西姆 Al Qasim","哈伊勒 Ha'il","塔布克 Tabuk","北部边疆 Al Hudud ash Shamaliyah","吉赞 Jizan","纳季兰 Najran","巴哈 Al Bahah","朱夫 Al Jawf","阿西尔 ‘Asir"]); 
dsy.add("0_6_0",["利雅得 Riyad","海耶 Al-Kharj"]); 
dsy.add("0_6_1",["麦加 Makkah","吉达 Jiddah","塔伊夫 At-Ta'if"]); 
dsy.add("0_6_2",["麦地那 Madinah","延布 Yanbu' al-Bahr"]); 
dsy.add("0_6_3",["达曼 Dammam","胡富夫 Al-Hufūf","姆巴拉兹 Al-Mubarraz","朱拜勒 Al-Jubayl","哈费尔巴廷 Hafar al-Bātin"]); 
dsy.add("0_6_4",["布赖代 Buraydah"]); 
dsy.add("0_6_5",["哈伊勒 Ha'il"]); 
dsy.add("0_6_6",["塔布克 Tabuk"]); 
dsy.add("0_6_7",["阿尔阿尔 Ar'ar"]); 
dsy.add("0_6_8",["吉赞 Jizan"]); 
dsy.add("0_6_9",["纳季兰 Najran"]); 
dsy.add("0_6_10",["巴哈 Al Bahah"]); 
dsy.add("0_6_11",["塞卡卡 Sakaka"]); 
dsy.add("0_6_12",["艾卜哈 Abhā","海米斯穆谢特 Khamīs Mushayt"]); 


dsy.add("0_7",["平壤直辖市","罗先直辖市","平安南道","平安北道","慈江道","两江道","咸镜北道","咸镜南道","黄海北道","黄海南道","江原道"]); 
dsy.add("0_7_0",["平壤"]); 
dsy.add("0_7_1",["罗津"]); 
dsy.add("0_7_2",["南浦特级市","平城市","顺川市","德川市","安州市","价川市"]); 
dsy.add("0_7_3",["新义州市","龟城市","定州市"]); 
dsy.add("0_7_4",["江界市","满浦市","煕川市"]); 
dsy.add("0_7_5",["恵山市"]); 
dsy.add("0_7_6",["清津市","金策市","会宁市"]); 
dsy.add("0_7_7",["咸兴市","兴南市","新浦市","端川市"]); 
dsy.add("0_7_8",["沙里院市","松林市","开城市"]); 
dsy.add("0_7_9",["海州市"]); 
dsy.add("0_7_10",["元山市","文川市"]); 


dsy.add("0_8",["河内市","山罗","奠边","谅山","河西","清化","义安","广南","嘉莱","多乐","平福","金瓯"]); 
dsy.add("0_8_0",["河内市"]); 
dsy.add("0_8_1",["山罗"]); 
dsy.add("0_8_2",["奠边府市","孟雷"]); 
dsy.add("0_8_3",["谅山市"]); 
dsy.add("0_8_4",["河东","山西"]); 
dsy.add("0_8_5",["清化市","岑山","拜尚"]); 
dsy.add("0_8_6",["荣市","扩路"]); 
dsy.add("0_8_7",["三歧","会安"]); 
dsy.add("0_8_8",["波来古市","安溪"]); 
dsy.add("0_8_9",["邦美蜀市"]); 
dsy.add("0_8_10",["东帅"]); 
dsy.add("0_8_11",["金瓯市"]); 


dsy.add("0_9",["实皆省 Sagaing","望濑县 Monywa","勃固省 Bago","马圭省 Magway","曼德勒省 Mandalay","德林达依省 Tanintharyi","伊洛瓦底省 Ayeyarwady","仰光省 Yangon","克钦邦 Kachin","克耶邦 Kayah","克伦邦 Kayin","钦邦 Chin","孟邦 Mon","若开邦 Rakhine","掸邦 Shan"]); 
dsy.add("0_9_0",["实皆 Sagaing"]); 
dsy.add("0_9_1",["望濑 Monywa"]); 
dsy.add("0_9_2",["勃固 Bago"]); 
dsy.add("0_9_3",["马圭 Magway"]); 
dsy.add("0_9_4",["曼德勒 Mandalay"]); 
dsy.add("0_9_5",["土瓦 Dawei"]); 
dsy.add("0_9_6",["勃生 Pathein"]); 
dsy.add("0_9_7",["仰光 Yangan "]); 
dsy.add("0_9_8",["密支那 Myitkyina"]); 
dsy.add("0_9_9",["垒固 Loi-kaw"]); 
dsy.add("0_9_10",["巴安 Pa-an"]); 
dsy.add("0_9_11",["哈卡 Haka"]); 
dsy.add("0_9_12",["毛淡棉 Mawlamyine"]); 
dsy.add("0_9_13",["实兑 Akyab"]); 
dsy.add("0_9_14",["东枝 Taunggyi"]); 


dsy.add("0_10",["巴登-符腾堡 Baden-Württemberg","拜恩（巴伐利亚）  Bayern","柏 林 Berlin","勃兰登堡 Brandenburg","不来梅 Bremen","汉 堡 Hamburg","黑 森 Hessen","梅克伦堡-前波莫瑞 Mecklenburg-Vorpommern","下萨克森  Niedersachsen","北莱茵-威斯特法伦 Nordrhein-Westfalen","莱茵兰-普法尔茨 Rheinland-Pfalz","萨 尔 Saarland","萨克森 Sachsen","萨克森-安哈特 Sachsen-Anhalt","石勒苏益格-荷尔斯泰因 Schleswig-Holstein","图林根 Thüringen"]); 
dsy.add("0_10_0",["斯图加特  Stuttgart","卡尔斯鲁厄 Karlsruhe","弗赖堡 Freiburg","图宾根 Tübingen"]); 
dsy.add("0_10_1",["慕尼黑 München ","下拜恩 Niederbayern","上普法尔茨 Oberpfalz","上弗兰肯 Oberfranken","中弗兰肯 Mittelfranken","外弗兰肯 Unterfranken","施瓦本 Schwaben"]); 
dsy.add("0_10_2",["柏林 Berlin"]); 
dsy.add("0_10_3",["波茨坦 Potsdam"]); 
dsy.add("0_10_4",["不来梅 Bremen"]); 
dsy.add("0_10_5",["汉堡 Hamburg"]); 
dsy.add("0_10_6",["达姆施塔特 Darmstadt","吉森 Gieben","卡塞尔 Kassel"]); 
dsy.add("0_10_7",["什未林 Schwerin"]); 
dsy.add("0_10_8",["不伦瑞克 Braunschweig","汉诺威  Hannover"]); 
dsy.add("0_10_9",["杜塞尔多夫 Düsseldorf","科隆 Koln","明斯特 Münster","代特莫尔特 Detmold"]); 
dsy.add("0_10_10",["科布伦次 Koblenz ","特里尔 Trier","莱茵黑森-普法尔茨"]); 
dsy.add("0_10_11",["萨尔布吕肯 Saarbrücken"]); 
dsy.add("0_10_12",["开姆尼斯 Chemnitz","德累斯顿 Dresden","莱比锡 Leipzig"]); 
dsy.add("0_10_13",["德绍 Dessau","哈雷 Halle","马格德堡 Magdeburg"]); 
dsy.add("0_10_14",["基尔 Kiel"]); 
dsy.add("0_10_15",["埃尔富特 Erfurt"]); 
dsy.add("0_11",["英格兰 England","威尔士 Wales","苏格兰 Scotland","北爱尔兰 Northern Ireland"]); 
dsy.add("0_11_0",["坎布里亚 Cumbria","兰开夏 Lancashire ","布莱克本 Blackburn with Darwen","大曼彻斯特 Greater Manchester","柴郡 Cheshire ","诺森伯兰 Northumberland","达勒姆 Durham","北约克郡 North Yorkshire","约克郡东区 East Riding of Yorkshire","西约克郡 West Yorkshire","南约克郡 South Yorkshire","林肯郡 Lincolnshire","诺丁汉郡 Nottinghamshire","斯塔福德郡 Staffordshire","诺福克 Norfolk","伦敦 London","白金汉郡 Buckinghamshire","牛津郡 Oxfordshire","格洛斯特郡 Gloucestershire"]); 
dsy.add("0_11_1",["康威 Conwy *","圭内斯 Gwynedd","锡尔迪金 Ceredigion","波伊斯 Powys","彭布罗克郡 Pembrokeshire","卡马森郡 Carmarthenshire"]); 
dsy.add("0_11_2",["苏格兰高地 Highland","马里 Moray","阿伯丁郡 Aberdeenshire","安格斯 Angus","珀斯-金罗斯 Perth and Kinross","法夫 Fife","斯特灵 Stirling","阿盖尔-比特 Argyll and Bute","苏格兰边界 Scottish Borders","邓弗里斯-加洛韦 Dumfries and Galloway"]); 
dsy.add("0_11_3",["阿兹 Ards","卡斯尔雷 Castlereagh","唐 Down","贝尔法斯特 Belfast, City of","利斯本 Lisburn","巴利米纳 Ballymena","莫伊尔 Moyle","阿马 Armagh"]); 


dsy.add("0_12",["法兰西岛 Ile-de-France","香槟-阿登 Champagne-Ardenne","皮卡第 Picardie","上诺曼底 Haute-Normandie","中央 Centre","下诺曼底 Basse-Normandie","勃艮第 Bourgogne","北部-加莱海峡 Nord-pas-de-Calais","洛林 Lorraine","阿尔萨斯 Alsace","弗朗什孔泰 Franche-Comté","卢瓦尔河地区 Pays de la Loire","布列塔尼 Bretagne","普瓦图-夏朗德 Poitou-Charentes","阿基坦 Aquitaine","南部-比利牛斯 Midi-Pyrénées","利穆赞 Limousin","罗讷-阿尔卑斯 Rhone-Alpes","奥弗涅 Auvergne","朗格多克-鲁西永 Languedoc-Roussillon","普罗旺斯-阿尔卑斯-蓝色海岸 Provence-Alpes-Cote d'Azur","科西嘉 Corse"]); 
dsy.add("0_12_0",["巴黎 Paris"]); 
dsy.add("0_12_1",["兰斯 Reims"]); 
dsy.add("0_12_2",["亚眠 Ameiens"]); 
dsy.add("0_12_3",["鲁昂 Rouen"]); 
dsy.add("0_12_4",["奥尔良 Orléans"]); 
dsy.add("0_12_5",["卡昂 Caen"]); 
dsy.add("0_12_6",["第戎 Dijon"]); 
dsy.add("0_12_7",["里尔 Lille"]); 
dsy.add("0_12_8",["南锡 Nancy"]); 
dsy.add("0_12_9",["斯特拉斯堡 Strasbourg"]); 
dsy.add("0_12_10",["贝桑松 Besancon"]); 
dsy.add("0_12_11",["南特 Nantes"]); 
dsy.add("0_12_12",["雷恩 Rennes"]); 
dsy.add("0_12_13",["普瓦捷 Poitiers"]); 
dsy.add("0_12_14",["波尔多 Bordeaux"]); 
dsy.add("0_12_15",["图卢兹 Toulouse"]); 
dsy.add("0_12_16",["利摩日 Limoges"]); 
dsy.add("0_12_17",["里昂 Lyon"]); 
dsy.add("0_12_18",["克莱蒙费朗 Clerment-Ferrand"]); 
dsy.add("0_12_19",["蒙彼里埃 Montpellier"]); 
dsy.add("0_12_20",["马赛 Marseille"]); 
dsy.add("0_12_21",["阿雅克肖 Ajaccio"]); 
//--> 
</SCRIPT> 
<SCRIPT LANGUAGE = JavaScript> 
<!-- 
//** Power by Fason(2004-3-11) 
//** Email:fason_pfx@hotmail.com 

var s=["s1","s2","s3"]; 
var opt0 = ["国家","省份、州","地级市、县"]; 
function setup() 
{ 
for(i=0;i <s.length-1;i++) 
  document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")"); 
change(0); 
} 
setup();
//--> 
</SCRIPT> 
</body>
</html>