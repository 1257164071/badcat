<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    //用户登陆页面
    public function login(){
        $this->display();
    }
    //检查登陆
    public function checkLogin(){
        header('Content-Type: text/html; charset=utf-8');
        //print_r($_POST);
        $user_code = "";
        $user_pwd = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["user_code"])) {
                echo "<script>alert('用户编码不能为空！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";
                die;
            } else {
                $user_code = ($_POST["user_code"]);
            }

            if (empty($_POST["user_pwd"])) {
                echo "<script>alert('密码不能为空！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";
                die;
            } else {
                $user_pwd = ($_POST["user_pwd"]);
            }
        }
        $user_pwd=md5($user_pwd);

        $rs=M("user")->where("user_code='{$user_code}' and user_pwd='{$user_pwd}'")->find();

        if($rs){
            $_SESSION['userMsg']=$rs;
            $href=U('Index/index');
            echo "<script>alert('登陆成功！')</script>";
            echo "<script>window.location.href='$href'</script>";
        }else{
            echo "<script>alert('用户名或密码错误！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }
    }
    //退出登陆
    public function loginout(){
        unset($_SESSION['userMsg']);
        $href=U('Login/login');
        echo "<script>window.location.href='$href'</script>";
    }

    //用户注册
    public function register(){

        $this->display();
    }
    public function regis(){
        header('Content-Type: text/html; charset=utf-8');

        // var_dump($_POST);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["user_name"])) {
                echo "<script>alert('用户名称不能为空！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";
            }elseif (empty($_POST["user_code"])) {
                echo "<script>alert('账号不能为空！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";
            }elseif (empty($_POST["user_pwd"])) {
                echo "<script>alert('密码不能为空！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";
            } elseif (empty($_POST["user_pwd2"])) {
                echo "<script>alert('重复密码不能为空！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";
            }elseif($_POST['user_pwd']!=$_POST['user_pwd2']){
                echo "<script>alert('两次密码不一致！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";
            } else {
                //判断是否重复
                $user_code = ($_POST["user_code"]);
                $rs=M('user')->where("user_code='{$user_code}'")->find();
                if($rs){
                    echo "<script>alert('用户编码重复！');</script>";
                    echo "<script>history.go(-1);location.reload()</script>";
                }else{
                    unset($_POST['user_pwd2']);
                    $_POST['user_pwd']=md5($_POST['user_pwd']);
                    $_POST['last_login_time']=date("Y-m-d H:i:s",time());
                    $rs=M('user')->add($_POST);
                    if($rs){
                        $href=U('Index/index');
                        echo "<script>alert('注册成功！');</script>";
                        echo "<script>window.location.href='$href'</script>";
                        //用户信息存储
                        $_POST['id']=$rs;
                        $_POST['permissio']="13,";
                        $_SESSION['userMsg']=$_POST;
                    }
                }
            }

        }


    }

}