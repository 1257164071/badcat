<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords"
          content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>内控管理系统</title>

    <!--icheck-->
    <link href="/badcat/Public/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
    <link href="/badcat/Public/js/iCheck/skins/square/square.css" rel="stylesheet">
    <link href="/badcat/Public/js/iCheck/skins/square/red.css" rel="stylesheet">
    <link href="/badcat/Public/js/iCheck/skins/square/blue.css" rel="stylesheet">

    <!--dashboard calendar-->
    <link href="/badcat/Public/css/clndr.css" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="js/morris-chart/morris.css">

    <!--common-->
    <link href="/badcat/Public/css/style.css" rel="stylesheet">
    <link href="/badcat/Public/css/style-responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/badcat/Public/js/html5shiv.js"></script>
    <script src="/badcat/Public/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->

    <div class="header-section">

    <!--toggle button start-->
    <a class="toggle-btn"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->

    <!--search start-->
    <form class="searchform" action="index.html" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..."/>
    </form>
    <!--search end-->

    <!--notification menu start -->
    <div class="menu-right">
        <ul class="notification-menu">
            <!--<li>-->
                <!--<a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">-->
                    <!--<i class="fa fa-envelope-o"></i>-->
                    <!--<span class="badge">5</span>-->
                <!--</a>-->
                <!--<div class="dropdown-menu dropdown-menu-head pull-right">-->
                    <!--<h5 class="title">You have 5 Mails </h5>-->
                    <!--<ul class="dropdown-list normal-list">-->
                        <!--<li class="new">-->
                            <!--<a href="">-->
                                <!--<span class="thumb"><img src="images/photos/user1.png" alt=""/></span>-->
                                <!--<span class="desc">-->
                                          <!--<span class="name">John D <span-->
                                                  <!--class="badge badge-success">new</span></span>-->
                                          <!--<span class="msg">Lorem ipsum dolor sit amet...</span>-->
                                        <!--</span>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<span class="thumb"><img src="images/photos/user2.png" alt=""/></span>-->
                                <!--<span class="desc">-->
                                          <!--<span class="name">Jonathan Smith</span>-->
                                          <!--<span class="msg">Lorem ipsum dolor sit amet...</span>-->
                                        <!--</span>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<span class="thumb"><img src="images/photos/user3.png" alt=""/></span>-->
                                <!--<span class="desc">-->
                                          <!--<span class="name">Jane Doe</span>-->
                                          <!--<span class="msg">Lorem ipsum dolor sit amet...</span>-->
                                        <!--</span>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<span class="thumb"><img src="images/photos/user4.png" alt=""/></span>-->
                                <!--<span class="desc">-->
                                          <!--<span class="name">Mark Henry</span>-->
                                          <!--<span class="msg">Lorem ipsum dolor sit amet...</span>-->
                                        <!--</span>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<span class="thumb"><img src="images/photos/user5.png" alt=""/></span>-->
                                <!--<span class="desc">-->
                                          <!--<span class="name">Jim Doe</span>-->
                                          <!--<span class="msg">Lorem ipsum dolor sit amet...</span>-->
                                        <!--</span>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li class="new"><a href="">Read All Mails</a></li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</li>-->
            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <?php echo ($_SESSION['userMsg']['user_name']); ?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <li><a href="<?php echo U('Login/loginout');?>"><i class="fa fa-sign-out"></i> 登出</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!--notification menu end -->

</div>

    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content">

        <!-- header section start-->
        <div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="index.html"><img src="/badcat/Public/images/logo.png" alt=""></a>
    </div>

    <div class="logo-icon text-center">
        <a href="index.html"><img src="/badcat/Public/images/logo_icon.png" alt=""></a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">

        <!-- visible to small devices only -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media logged-user">
                <img alt="" src="/badcat/Public/images/photos/user-avatar.png" class="media-object">
                <div class="media-body">
                    <h4><a href="#">John Doe</a></h4>
                    <span>"Hello There..."</span>
                </div>
            </div>

            <h5 class="left-nav-title">Account Information</h5>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>主页</span></a></li>
            <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>基础数据</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('index/user_list');?>"> 用户列表</a></li>
                    <li><a href="<?php echo U('index/user_post');?>"> 用户权限分配</a></li>
                    <li><a href="<?php echo U('index/depart');?>"> 部门管理</a></li>
                    <li><a href="<?php echo U('index/work');?>"> 岗位管理</a></li>
                    <li><a href="<?php echo U('Depart/depart_type');?>"> 预算类别 </a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>预算管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('Depart/depart_man');?>"> 部门预算管理 </a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>预算审批</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('Depart/budget_check');?>"> 部门预算领导审核 </a></li>
                    <li><a href="<?php echo U('Depart/budget_check2');?>"> 部门预算财务审核</a></li>
                    <li><a href="<?php echo U('Depart/all_yusuan');?>"> 总预算提报 </a></li>
                    <li><a href="<?php echo U('Depart/shenpi_all');?>"> 总预算领导审批 </a></li>
                </ul>
            </li>


            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>收入管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('Income/income_man');?>"> 收入计划</a></li>
                    <li><a href="<?php echo U('Income/income_man_mingxi');?>"> 收入计划审批</a></li>
                    <li><a href="<?php echo U('Income/income_man_mingxi2');?>"> 收入计划财务审批</a></li>
                    <li><a href="<?php echo U('Income/income_checkin');?>"> 收入登记</a></li>
                    <li><a href="#"> 收入上缴</a></li>
                    <li><a href=""> 预算资金到账管理</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>预算执行管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('Income/execute_man');?>"> 预算执行申请</a></li>
                    <li><a href="<?php echo U('Income/execute_man_shenpi');?>"> 预算执行审批</a></li>
                    <li><a href="<?php echo U('Income/execute_man_shenpi2');?>"> 预算执行财务审批</a></li>
                    <li><a href="<?php echo U('Income/execute_man_zhichu');?>"> 预算执行支出</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>支出借款管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('Zcjk/apply');?>"> 支出借款申请</a></li>
                    <li><a href="<?php echo U('Zcjk/approve');?>"> 支出借款领导审批</a></li>
                    <li><a href="<?php echo U('Zcjk/cwapprove');?>"> 支出借款财务审批</a></li>
                    <li><a href="<?php echo U('Zcjk/back');?>"> 支出借款归还</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>费用报销管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('Income/apply_man');?>"> 费用报销申请</a></li>
                    <li><a href="<?php echo U('Income/apply_man_shenpi');?>"> 费用报销审批</a></li>
                    <li><a href="<?php echo U('Income/apply_man_shenpi2');?>"> 费用报销财务审批</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>资金归垫管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#"> 资金归垫申请</a></li>
                    <li><a href="#"> 资金归垫审批</a></li>
                    <li><a href="#"> 资金归垫归还</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>采购业务管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#"> 采购需求申请</a></li>
                    <li><a href="#"> 采购需求受理</a></li>
                    <li><a href="#"> 采购需求审批</a></li>
                    <li><a href="#"> 采购执行管理</a></li>
                    <li><a href="#"> 采购招标登记</a></li>
                    <li><a href="#"> 采购验收管理</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>合同管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('Income/pact_man');?>"> 合同档案管理</a></li>
                    <li><a href="Z"> 合同执行管理</a></li>
                    <li><a href="#"> 合同例外处理</a></li>
                    <li><a href="#"> 合同变更处理</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>建设项目管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#"> 项目档案管理</a></li>
                    <li><a href="#"> 项目进度管理</a></li>
                    <li><a href="#"> 项目完结管理</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>资产管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="#"> 固定资产档案</a></li>
                    <li><a href="#"> 年度折旧管理</a></li>
                    <li><a href="#"> 固定资产处置管理</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>统计查询</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('Depart/query_1');?>"> 部门预算单据查询</a></li>
                    <li><a href="<?php echo U('Depart/query_2');?>"> 年度单据查询</a></li>
                    <li><a href="<?php echo U('Income/query_execute');?>"> 预算执行查询</a></li>
                    <li><a href=""> 支出借款查询</a></li>
                    <li><a href=""> 费用报销查询</a></li>
                    <li><a href=""> 查询</a></li>

                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>个人管理</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo U('index/change_pwd');?>"> 密码修改</a></li>
                </ul>
            </li>



            <li><a href="<?php echo U('Login/loginout');?>"><i class="fa fa-sign-in"></i> <span>登出</span></a></li>

        </ul>
        <!--sidebar nav end-->

    </div>
</div>

        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                主页
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">仪表盘</a>
                </li>
                <li class="active"> 我的仪表盘</li>
            </ul>
            <div class="state-info">
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>本年支出</span>
                            <h3 class="red-txt">45,600</h3>
                        </div>
                        <div id="income" class="chart-bar"></div>
                    </div>
                </section>
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>本年收入</span>
                            <h3 class="green-txt">45,600</h3>
                        </div>
                        <div id="expense" class="chart-bar"></div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-md-6">
                    <!--statistics start-->
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel purple">
                                <div class="symbol">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value"><?php echo ($jihua_num); ?></div>
                                    <div class="title">收入计划</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel red">
                                <div class="symbol">
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value"><?php echo ($yusuan_num); ?></div>
                                    <div class="title">预算计划</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel blue">
                                <div class="symbol">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">0</div>
                                    <div class="title"> 采购计划</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel green">
                                <div class="symbol">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value"><?php echo ($hetong_num); ?></div>
                                    <div class="title"> 合同档案</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--statistics end-->
                </div>
                <div class="col-md-6">
                    <!--more statistics box start-->
                    <div class="panel deep-purple-box">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div id="graph-donut" class="revenue-graph"></div>

                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <ul class="bar-legend">
                                        <li><span class="blue"></span> 财务科</li>
                                        <li><span class="green"></span> 水电科</li>
                                        <li><span class="purple"></span> 车管科</li>
                                        <li><span class="red"></span> 节能科</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--more statistics box end-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row revenue-states">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h4>预算执行进度分析</h4>
                                    <div class="icheck">
                                        <div class="square-red single-row">
                                            <div class="checkbox ">
                                                <input type="checkbox" checked>
                                                <label>正在进行</label>
                                            </div>
                                        </div>
                                        <div class="square-blue single-row">
                                            <div class="checkbox ">
                                                <input type="checkbox">
                                                <label>已经完成 </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul class="revenue-nav">
                                        <li><a href="#">年</a></li>
                                        <li><a href="#">月</a></li>
                                        <li class="active"><a href="#">日</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="clearfix">
                                        <div id="main-chart-legend" class="pull-right">
                                        </div>
                                    </div>

                                    <div id="main-chart">
                                        <div id="main-chart-container" class="main-chart">
                                        </div>
                                    </div>
                                    <ul class="revenue-short-info">
                                        <li>
                                            <h1 class="red">15%</h1>
                                            <p>预算1</p>
                                        </li>
                                        <li>
                                            <h1 class="purple">30%</h1>
                                            <p>预算1</p>
                                        </li>
                                        <li>
                                            <h1 class="green">84%</h1>
                                            <p>预算1</p>
                                        </li>
                                        <li>
                                            <h1 class="blue">28%</h1>
                                            <p>预算1</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <header class="panel-heading">
                            采购执行进度
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="goal-progress">
                                <li>

                                    <div class="details">
                                        <div class="title">
                                            <a href="#">详情</a> - 采购1
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 70%">
                                                <span class="">70%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="details">
                                        <div class="title">
                                            <a href="#">详情</a> - 采购1
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 91%">
                                                <span class="">91%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="details">
                                        <div class="title">
                                            <a href="#">详情</a> - 采购1
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 40%">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="details">
                                        <div class="title">
                                            <a href="#">详情</a> - 采购1
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 20%">
                                                <span class="">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    <div class="details">
                                        <div class="title">
                                            <a href="#">详情</a> - 采购1
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 45%">
                                                <span class="">45%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center"><a href="#">查看所有目标</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body extra-pad">
                            <h4 class="pros-title">部门收入统计 </h4>
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-1"></div>
                                    <p class="p-chart-title">Laptop</p>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-2"></div>
                                    <p class="p-chart-title">iPhone</p>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-3"></div>
                                    <p class="p-chart-title">iPad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body extra-pad">
                            <div class="col-sm-6 col-xs-6">
                                <div class="v-title"></div>
                                <div class="v-value">10,090</div>
                                <div id="visit-1"></div>
                                <div class="v-info">收入趋势统计</div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="v-title"></div>
                                <div class="v-value">8,173</div>
                                <div id="visit-2"></div>
                                <div class="v-info">支出趋势统计</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel green-box">
                        <div class="panel-body extra-pad">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="knob">
                                        <span class="chart" data-percent="79">
                                            <span class="percent">79% <span class="sm">收入完成率</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="knob">
                                        <span class="chart" data-percent="56">
                                            <span class="percent">56% <span class="sm">支出完成率</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <b>合同档案</b>
                            <div class="calendar-block ">

                                <div class="cal1">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <header class="panel-heading">
                            建设项目档案
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="to-do-list" id="sortable-todo">
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check"/>
                                        <label for="todo-check"></label>
                                    </div>
                                    <p class="todo-title">
                                        项目档案1
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check1"/>
                                        <label for="todo-check1"></label>
                                    </div>
                                    <p class="todo-title">
                                        项目档案2
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check2"/>
                                        <label for="todo-check2"></label>
                                    </div>
                                    <p class="todo-title">
                                        项目档案3
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check3"/>
                                        <label for="todo-check3"></label>
                                    </div>
                                    <p class="todo-title">
                                        项目档案4
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check4"/>
                                        <label for="todo-check4"></label>
                                    </div>
                                    <p class="todo-title">
                                        项目档案5
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>

                            </ul>
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" class="form-inline">
                                        <div class="form-group todo-entry">
                                            <input type="text" placeholder="输入你的任务列表" class="form-control"
                                                   style="width: 100%">
                                        </div>
                                        <button class="btn btn-primary pull-right" type="submit">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel blue-box twt-info">
                        <div class="panel-body">
                            <h3>日记板</h3>

                            <p>今天我要完成项目 <a href="#"></a>
                                两天内往后完成</p>
                        </div>
                    </div>
                    <div class="panel">

                        <div class="panel-footer custom-trq-footer">
                            <ul class="user-states">
                                <li>
                                    <i class="fa fa-heart"></i> 127
                                </li>
                                <li>
                                    <i class="fa fa-eye"></i> 853
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> 311
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2017 &copy; <a href="http://www.cident.cn/" target="_blank">临沂赛捷</a>
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/badcat/Public/js/jquery-1.10.2.min.js"></script>
<script src="/badcat/Public/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/badcat/Public/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/badcat/Public/js/bootstrap.min.js"></script>
<script src="/badcat/Public/js/modernizr.min.js"></script>
<script src="/badcat/Public/js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="/badcat/Public/js/easypiechart/jquery.easypiechart.js"></script>
<script src="/badcat/Public/js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="/badcat/Public/js/sparkline/jquery.sparkline.js"></script>
<script src="/badcat/Public/js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="/badcat/Public/js/iCheck/jquery.icheck.js"></script>
<script src="/badcat/Public/js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="/badcat/Public/js/flot-chart/jquery.flot.js"></script>
<script src="/badcat/Public/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="/badcat/Public/js/flot-chart/jquery.flot.resize.js"></script>


<!--Morris Chart-->
<script src="/badcat/Public/js/morris-chart/morris.js"></script>
<script src="/badcat/Public/js/morris-chart/raphael-min.js"></script>

<!--Calendar-->
<script src="/badcat/Public/js/calendar/clndr.js"></script>
<script src="/badcat/Public/js/calendar/evnt.calendar.init.js"></script>
<script src="/badcat/Public/js/calendar/moment-2.2.1.js"></script>
<script src="/badcat/Public/http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="/badcat/Public/js/scripts.js"></script>

<!--Dashboard Charts-->
<script src="/badcat/Public/js/dashboard-chart-init.js"></script>


</body>
</html>