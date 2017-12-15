<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Registration</title>

    <link href="/badcat/Public/css/style.css" rel="stylesheet">
    <link href="/badcat/Public/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/badcat/Public/js/html5shiv.js"></script>
    <script src="/badcat/Public/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="<?php echo U('Login/regis');?>" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">注册</h1>
            <img src="/badcat/Public/images/login-logo.png" alt=""/>
        </div>


        <div class="login-wrap">
            <p>请输入您的个人资料</p>
            <input type="text" autofocus="" placeholder="姓名" class="form-control" name="user_name">

            <input type="text" autofocus="" placeholder="帐号" class="form-control" name="user_code">
            <input type="password" placeholder="密码" class="form-control" name="user_pwd">
            <input type="password" placeholder="重复密码" class="form-control" name="user_pwd2">
            <label class="checkbox">
            </label>
            <div class="radios">
                <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
                    <input type="radio" checked="" value="1" id="radio-01" name="user_sex"> 男
                </label>
                <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
                    <input type="radio" value="1" id="radio-02" name="user_sex"> 女
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-lg btn-login btn-block">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                已经注册？
                <a href="<?php echo U('Login/login');?>" class="">
                    登录
                </a>
            </div>
        </div>

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/badcat/Public/js/jquery-1.10.2.min.js"></script>
<script src="/badcat/Public/js/bootstrap.min.js"></script>
<script src="/badcat/Public/js/modernizr.min.js"></script>

</body>
</html>