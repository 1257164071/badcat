<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/11
 * Time: 15:22
 */
namespace Home\Controller;
use Think\Controller;
class ZcjkController extends Controller
{
    //支出借款申请
    public function apply()
    {
        header('Content-Type: text/html; charset=utf-8');

        $department_code=$_SESSION['userMsg']['department_id'];
        $zcjk=M("zhichujiekuan")->where("department_code='{$department_code}'")->select();
//        echo M()->getLastSql();
//        var_dump($zcjk);
//        exit;

        $this->assign('info',$zcjk);
        $this->display();
    }
    //增加支出借款
    public function zcjk_add(){

        $this->display();
    }
    public function zcjk_addd(){
        header('Content-Type: text/html; charset=utf-8');

        if($_POST['year_no'] == ""){
            echo "<script>alert('年份不能为空');</script>";
            echo "<script>history.go(-1);</script>";die;
        }elseif ($_POST['month_no'] == ""){
            echo "<script>alert('月份不能为空');</script>";
            echo "<script>history.go(-1);</script>";die;
        }elseif ($_POST['loan_text'] == ""){
            echo "<script>alert('借款明细不能为空');</script>";
            echo "<script>history.go(-1);</script>";die;
        }else{
            $_POST['department_code']=$_SESSION['userMsg']['department_id'];
            $_POST['department_name']=M('department')->where("id={$_SESSION['userMsg']['department_id']}")->find()['depart_name'];
            $_POST['loan_man']=$_SESSION['userMsg']['id'];
            $_POST['loan_man_name']=$_SESSION['userMsg']['user_name'];

            $_POST['loan_no']=rand('10000000','99999999');
            //$_POST['budget_no']="{$_POST['year_no']}"."{$_POST['department_id']}";
            $_POST['loan_date']=date('Y-m-d H:i:s',time());

            $rs=M('zhichujiekuan')->add($_POST);
            if($rs){
                $href=U('Zcjk/apply');
                echo "<script>window.location.href='$href'</script>";
            }else{
                echo "<script>alert('添加失败！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";die;
            }
        }
    }

    //提交审核
    public function shenhe($id){
        header('Content-Type: text/html; charset=utf-8');

        $flag = M('zhichujiekuan')->where(['id' => $id])->getField('loan_flag');
        if($flag != 0){
            echo "<script>alert('已提交')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }

        $res = M('zhichujiekuan')->where(['id' => $id])->setField('loan_flag',1);
        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }
    }
    //删除支出借款申请
    public function zcjk_del($id){
        header('Content-Type: text/html; charset=utf-8');

        $flag=M('zhichujiekuan')->where("id={$id}")->find()['loan_flag'];
        if($flag != 0){
            echo "<script>alert('已提交单据无法修改！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }

        $rs=M("zhichujiekuan")->where("id={$id}")->delete();
        if($rs){
            echo "<script>alert('删除成功！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }else{
            echo "<script>alert('删除失败！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }
    }


    //支出借款领导审批
    public function approve(){
        header('Content-Type: text/html; charset=utf-8');

        $department_code=$_SESSION['userMsg']['department_id'];
        $zcjk=M("zhichujiekuan")->where("department_code='{$department_code}' and loan_flag=1")->select();


        $this->assign('info',$zcjk);

        $this->display();
    }
    //领导审核
   public function shenhee(){
       header('Content-Type: text/html; charset=utf-8');
        //var_dump($_POST);
//       if($_POST['depart_leader_check_text']==''){
//           echo "<script>alert('请填写审批意见！');</script>";
//           echo "<script>history.go(-1);location.reload()</script>";
//           die;
//       }elseif ($_POST['loan_flag']==''){
//           echo "<script>alert('请选择审核结果！');</script>";
//           echo "<script>history.go(-1);location.reload()</script>";
//           die;
//       }else{
           $_POST['depart_leader_check_time']=date('Y-m-d H:i:s',time());
           $_POST['depart_leader_checkman']=$_SESSION['userMsg']['id'];
           $_POST['depart_leader_checkman_name']=$_SESSION['userMsg']['user_name'];
           $re=M('zhichujiekuan')->where("id={$_POST['id']}")->save($_POST);
           if($re){
               echo "<script>alert('审批成功')</script>";
               echo "<script>history.go(-1);</script>";
           }else{
               echo "<script>alert('审批失败')</script>";
               echo "<script>history.go(-1);</script>";
               die;
           }
      // }

   }

   //支出借款财务审核
    public function cwapprove(){
        header('Content-Type: text/html; charset=utf-8');

        $department_code=$_SESSION['userMsg']['department_id'];
        $zcjk=M("zhichujiekuan")->where("department_code='{$department_code}' and loan_flag=3")->select();

        $this->assign('info',$zcjk);

        $this->display();
    }

    //财务审核
    public function cwshenhee(){
        header('Content-Type: text/html; charset=utf-8');
        //var_dump($_POST);
//        if($_POST['finance_check_text']==''){
//            echo "<script>alert('请填写审批意见！');</script>";
//            echo "<script>history.go(-1);location.reload()</script>";
//            die;
//        }elseif ($_POST['loan_flag']==''){
//            echo "<script>alert('请选择审核结果！');</script>";
//            echo "<script>history.go(-1);location.reload()</script>";
//            die;
//        }else{
            $_POST['finance_check_time']=date('Y-m-d H:i:s',time());
           $_POST['finance_checkman']=$_SESSION['userMsg']['id'];
           $_POST['finance_checkman_name']=$_SESSION['userMsg']['user_name'];
            $re=M('zhichujiekuan')->where("id={$_POST['id']}")->save($_POST);
            if($re){
                echo "<script>alert('审批成功')</script>";
                echo "<script>history.go(-1);</script>";
            }else{
                echo "<script>alert('审批失败')</script>";
                echo "<script>history.go(-1);</script>";
                die;
            }
        //}

    }
//    public function shenpi_queren(){
//        header('Content-Type: text/html; charset=utf-8');
//
//        $id = I('get.id');
//        $data = M('zhichujiekuan')->where(['id' => $id])->select()[0];
//
//        if($data['loan_flag'] != 1){
//            echo "<script>alert('无法审核')</script>";
//            echo "<script>history.go(-1);location.reload()</script>";
//            die;
//        }
//        $res = M('zhichujiekuan')->where(['id' => $id])->setField('loan_flag',3);
//
//        if($res == null){
//            echo "<script>alert('失败')</script>";
//            echo "<script>history.go(-1);</script>";
//            die;
//        }else{
//            echo "<script>alert('成功')</script>";
//            echo "<script>history.go(-1);</script>";
//        }
//
//    }
//
//
//    public function shenpi_fanhui(){
//        header('Content-Type: text/html; charset=utf-8');
//
//        $id = I('get.id');
//        $data = M('zhichujiekuan')->where(['id' => $id])->select()[0];
//
//        if($data['loan_flag'] != 1){
//            echo "<script>alert('无法审核')</script>";
//            echo "<script>history.go(-1);location.reload()</script>";
//            die;
//        }
//        $res = M('zhichujiekuan')->where(['id' => $id])->setField('loan_flag',2);
//
//        if($res == null){
//            echo "<script>alert('失败')</script>";
//            echo "<script>history.go(-1);</script>";
//            die;
//        }else{
//            echo "<script>alert('成功')</script>";
//            echo "<script>history.go(-1);</script>";
//        }
//
//    }

    //支出借款归还
    public function back(){
        header('Content-Type: text/html; charset=utf-8');
        $department_code=$_SESSION['userMsg']['department_id'];
        $zcjkgh=M("zhichujiekuan")->where("department_code='{$department_code}' and loan_flag=5")->select();

        $this->assign('info',$zcjkgh);
        $this->display();
    }
    //添加归还
    public function back_add(){
        header('Content-Type: text/html; charset=utf-8');

//        var_dump($_POST);
//            var_dump($_SESSION);
            if($_POST['real_return_text']==''){
                echo "<script>alert('请填写归还登记情况！');</script>";
                echo "<script>history.go(-1);location.reload()</script>";
            }else{
                $_POST['real_return_flag']=1;
                $_POST['real_return_date']=date('Y-m-d H:i:s',time());
                $_POST['real_execution_man']=$_SESSION['userMsg']['id'];
                $_POST['real_return_man_name']=$_SESSION['userMsg']['user_name'];
                $re=M('zhichujiekuan')->where("id={$_POST['id']}")->save($_POST);
                if($re){
                    echo "<script>alert('归还成功')</script>";
                    echo "<script>history.go(-1);</script>";
                }else{
                    echo "<script>alert('归还失败')</script>";
                    echo "<script>history.go(-1);</script>";
                }
            }

    }

    //支出借款详情
    public function back_detail($id){
        header('Content-Type: text/html; charset=utf-8');

        $info=M('zhichujiekuan')->where("id={$id}")->find();

//        var_dump($info);
//        exit;
        $this->assign('info',$info);
        $this->display();
    }

}