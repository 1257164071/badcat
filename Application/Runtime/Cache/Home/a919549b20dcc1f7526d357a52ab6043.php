<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>内控管理系统</title>


    <link rel="stylesheet" type="text/css" href="/badcat/Public/js/bootstrap-datepicker/css/datepicker-custom.css" />
    <link rel="stylesheet" type="text/css" href="/badcat/Public/js/bootstrap-timepicker/css/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="/badcat/Public/js/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="/badcat/Public/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="/badcat/Public/js/bootstrap-datetimepicker/css/datetimepicker-custom.css" />

    <!--dropzone css-->
    <link href="/badcat/Public/js/dropzone/css/dropzone.css" rel="stylesheet"/>

    <!--common css-->
    <link href="/badcat/Public/css/style.css" rel="stylesheet">
    <link href="/badcat/Public/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
      <link rel="stylesheet" type="text/css" href="/badcat/Public/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

      <link href="/badcat/Public/css/style.css" rel="stylesheet">
      <link href="/badcat/Public/css/style-responsive.css" rel="stylesheet">


      <link href="/badcat/Public/css/style.css" rel="stylesheet">
      <link href="/badcat/Public/css/style-responsive.css" rel="stylesheet">

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
    <div class="main-content" >

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
                合同管理
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">合同管理</a>
                </li>
                <li class="active"> 合同录入</li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            录入合同档案
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal adminex-form" id="signupForm" method="post" action="<?php echo U('Income/pact_post_add');?>">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">合同单号</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname2" readonly value="<?php echo ($contract_no); ?>" name="contract_no" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">合同年度</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="year_no" type="text" />
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">月份</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="month_no" type="text" />
                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">合同生效开始日期</label>
                                        <div class="col-lg-10">
                                            <input class="form_datetime form-control" id="firstname" readonly name="contract_start_date" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">合同生效结束日期</label>
                                        <div class="col-lg-10">
                                            <input class="form_datetime form-control" id="firstname" readonly name="contract_end_date" type="text" />
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">签约甲方</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="contract_a" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">签约乙方</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="contract_b" type="text" />
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">合同标题</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="contract_name" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">合同金额</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="contract_amt" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">

                                        <label for="firstname" class="control-label col-lg-2">合同详情</label>

                                        <section class="panel">

                                            <div class="panel-body">
                                                <div class="form">
                                                    <form action="#" class="form-horizontal">
                                                        <div class="form-group">
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control ckeditor" name="contract_text" rows="6"></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="wrapper">

                                        <section class="panel">
                                            <header class="panel-heading">
                                                上传附件

                                            </header>
                                            <div class="panel-body">
                                                <form action="<?php echo U('Income/pact_upload');?>" class="dropzone" id="my-awesome-dropzone"></form>
                                            </div>
                                        </section>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input class="btn btn-primary" onclick="$('#signupForm').submit()" type="submit" value="提交">
                                            <button class="btn btn-default" style="margin-left: 100px" onclick="window.history.go(-1)" type="button">取消</button>

                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->

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

<script src="/badcat/Public/js/validation-init.js"></script>

<!--common scripts for all pages-->
<script src="/badcat/Public/js/html5shiv.js"></script>
<script src="/badcat/Public/js/respond.min.js"></script>



<!--pickers plugins-->
<script type="text/javascript" src="/badcat/Public/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/badcat/Public/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="/badcat/Public/js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/badcat/Public/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="/badcat/Public/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="/badcat/Public/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>


<script type="text/javascript" src="/badcat/Public/js/ckeditor/ckeditor.js"></script>

<script type="text/javascript" src="/badcat/Public/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="/badcat/Public/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>


<script src="/badcat/Public/js/dropzone/dropzone.js"></script>

<!--common scripts for all pages-->
<script src="/badcat/Public/js/scripts.js"></script>
<!--pickers initialization-->
<script src="/badcat/Public/js/pickers-init.js"></script>
<!--pickers plugins-->
<!--pickers initialization-->
</body>
</html>