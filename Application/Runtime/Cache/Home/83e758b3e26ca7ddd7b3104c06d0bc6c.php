<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>预算执行审批</title>

    <!--data table-->
    <link rel="stylesheet" href="/badcat/Public/js/data-tables/DT_bootstrap.css"/>

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
                    <li><a href=""> 预算执行查询</a></li>
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
                预算执行审批
            </h3>

        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">

                        <div class="panel-body">
                            <div class="adv-table editable-table ">

                                <div class="space15"></div>
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                    <tr>

                                        <th>计划年度&月份</th>

                                        <th>预算执行部门</th>
                                        <th>预算员</th>
                                        <th>计划制定日期</th>
                                        <th>预算状态</th>
                                        <th>详情</th>
                                        <th>提交审核</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="">
                                            <td><?php echo ($v["year_no"]); ?>&<?php echo ($v["month_no"]); ?></td>
                                            <td><?php echo ($v["department_name"]); ?></td>
                                            <td><?php echo ($v["budget_man_name"]); ?></td>
                                            <td><?php echo ($v["budget_date"]); ?></td>
                                            <td class="center">
                                                <?php if($v["budget_flag"] == 0): ?>等待提交<?php endif; ?>
                                                <?php if($v["budget_flag"] == 1): ?>部门领导审核<?php endif; ?>
                                                <?php if($v["budget_flag"] == 2): ?>部门领导审核退回<?php endif; ?>
                                                <?php if($v["budget_flag"] == 3): ?>部门领导审核通过<?php endif; ?>
                                                <?php if($v["budget_flag"] == 4): ?>财务审核退回<?php endif; ?>
                                                <?php if($v["budget_flag"] == 5): ?>财务审核通过<?php endif; ?>
                                            </td>
                                            <td><a class="edit" target="" href="<?php echo U('Income/execute_man_mingxi');?>?id=<?php echo ($v['id']); ?>">查看明细</a></td>
                                            <!--<td><a class="edit" href="#" onclick="openwin(<?php echo ($v['id']); ?>)">查看明细</a></td>-->
                                            <td><a style="cursor:pointer" onclick='get_quanxian1("<?php echo ($v["id"]); ?>")' data-toggle="modal" data-target="#myModal1">审核</a></td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="<?php echo U('index/change_user');?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        分配组
                    </h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-success">

                        <div class="col-lg-4"><span>用户帐号:18265197620</span></div>
                        <div class="col-lg-4"><span>手机号:18265197620</span></div>
                        <div class="col-lg-4"><span>用户名称:府纷纷</span></div>
                        <br><br>
                        <div class="col-lg-6" style="text-align: center">当前岗位:府纷纷</div>
                        <div class="col-lg-6" style="text-align: center">当前岗位:府纷纷</div>
                        <br>
                    </div>

                    分配岗位<br><br>
                    <select class="form-control m-bot15">
                        <option>请选择</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select><br>
                    分配部门<br><br>
                    <select class="form-control m-bot15">
                        <option>请选择</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select><br>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>

                    <button type="submit" class="btn btn-primary">
                        确认
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!--领导审批的弹窗-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="<?php echo U('Income/shenhee2');?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        审核
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="zhichu" value="">
                    <div>审批意见:</div>
                    <textarea name="finance_check_text" rows="5" cols="75"></textarea>


                </div>
                <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">审核结果</label>
                    <div class="col-lg-10">
                        <select class="form-control m-bot15" name="budget_flag">

                            <option value="5">通过</option>
                            <option value="4">不通过</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">提交
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>


                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>


<!-- Placed js at the end of the document so the pages load faster -->
<script src="/badcat/Public/js/jquery-1.10.2.min.js"></script>
<script src="/badcat/Public/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/badcat/Public/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/badcat/Public/js/bootstrap.min.js"></script>
<script src="/badcat/Public/js/modernizr.min.js"></script>
<script src="/badcat/Public/js/jquery.nicescroll.js"></script>

<!--data table-->
<script type="text/javascript" src="/badcat/Public/js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="/badcat/Public/js/data-tables/DT_bootstrap.js"></script>

<!--common scripts for all pages-->
<script src="/badcat/Public/js/scripts.js"></script>

<!--script for editable table-->
<script src="/badcat/Public/js/editable-table.js4"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function () {
        EditableTable.init();
    });


    function get_quanxian(data) {

        $.ajax({
            url: "<?php echo U('index/ajaxUser_data');?>",
            type: 'POST',
            data:{data: data},
            success:function(data,textStatus,jqXHR){
                $(".modal-body").html(null);
                $(".modal-body").html(data);
            },
            error:function(xhr,textStatus){
                console.log('错误')
                console.log(xhr)
                console.log(textStatus)
            },
        })
    }

    function get_quanxian1(data) {
        document.getElementById('zhichu').value=data;

    }



    // function del_com(data){
    //     var r = confirm("确定要提报现有审批成功单据吗？");
    //     if(r == true){
    //         window.location.href="execute_man_pizhun"+'?id='+data;
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
    //
    // function del_com2(data){
    //     var r = confirm("确定要退回单据吗？");
    //     if(r == true){
    //         window.location.href="execute_man_tuihui"+'?id='+data;
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    //明细改为弹窗的js
    //    function openwin(data) {
    //        window.open ("yusuan_list?id="+data, "newwindow", "height=100, width=400, toolbar =no, menubar=no, scrollbars=no, resizable=no, location=no, status=no,top=0,") //写成一行
    //    }
</script>

</body>
</html>