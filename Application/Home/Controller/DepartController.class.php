<?php
namespace Home\Controller;
use Think\Controller;
class DepartController extends Controller {


    public  function _initialize(){
        if(session('userMsg') == null){
            header("location:".U('Home/login/login'));
            exit;
        }


        $session = session('userMsg');
        $res = $session['permissio'];
        $res = substr($res,0,strlen($res)-1);
        $res = explode(',',$res);
        $where = '';
        foreach ($res as $key => $val){
//            $res[$key] = M('permissio')->find($val)['permissio'];
            $where .= "id != ".$val.' and ';
        }

        $res = substr($where,0,strlen($where)-4);

        $res = M('permissio')->where($res)->select();
        $arr = array();
        foreach ($res as $key => $val){
            $arr[$key] = $val['permissio'];
        }


        $nologin = $arr;
        if(in_array(ACTION_NAME,$nologin)){
            echo "<script>alert('没有权限')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }
    }

    public function depart_man(){


        $res = M('depart_budget')->select();


        $this->assign('list',$res);
        $this->display();
    }


    public function depart_send(){

//        $user = M('user')->select();
//
//        $depa = M('department')->select();
//
//        $this->assign(array(
//            'user' => $user,
//            'depa' => $depa,
//        ));
        $this->display();
    }

    //预算单添加
    public function depart_send_add(){
        header('Content-Type: text/html; charset=utf-8');
        if(!$_POST['year_no']){
            $_POST['year_no']=date('Y');
        }


        $_POST['department_id']=$_SESSION['userMsg']['department_id'];
        $_POST['department_name']=M('department')->where("id={$_SESSION['userMsg']['department_id']}")->find()['depart_name'];
        $_POST['budget_man']=$_SESSION['userMsg']['id'];
        $_POST['budget_man_name']=$_SESSION['userMsg']['user_name'];

        //$_POST['depart_leader_checkman']=M('user')->where("id={$_POST['depart_leader_checkman']}")->find()['user_name'];
        $_POST['budget_no']="{$_POST['year_no']}"."{$_POST['department_id']}";
        $_POST['budget_date']=date('Y-m-d H:i:s',time());

        $rs=M('depart_budget')->add($_POST);
        if($rs){
            $href=U('Depart/depart_man');
            echo "<script>window.location.href='$href'</script>";
        }else{
            echo "<script>alert('添加失败！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }
    }
    //预算单删除
    public function depart_send_del(){
        header('Content-Type: text/html; charset=utf-8');
       // var_dump($_GET);
        $id = $_GET['id'];
        $res = M("depart_budget")->where(['id' => $_GET['id']])->select();
        $res = M('depart_budget_detail')->where(['budget_no'=>$res[0]['budget_no']])->select();
        if($res != null){
            echo "<script>alert('有预算明细未被删除！');</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }


        $rs=M("depart_budget")->where("id={$id}")->delete();
        if($rs){
            echo "<script>alert('删除成功！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }else{
            echo "<script>alert('删除失败！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }
    }
    public function depart_mingxi_del(){
        header('Content-Type: text/html; charset=utf-8');
        // var_dump($_GET);
        $id = $_GET['id'];
        $flag = M("depart_budget_detail")->where("id={$id}")->getField('budget_no');
        $flag = M('depart_budget_detail')->where(['budget_no' => $flag])->getField('budget_no');

        if($flag != 0){
            echo "<script>alert('已提交单据无法修改！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }

        $rs=M("depart_budget_detail")->where("id={$id}")->delete();
        if($rs){
            echo "<script>alert('删除成功！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }else{
            echo "<script>alert('删除失败！');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }
    }
    //预算明细添加
    public function mingxi_add(){
        header('Content-Type: text/html; charset=utf-8');

        if($_POST['type_code'] == ""){
            echo "<script>alert('预算类别不能为空');</script>";
            echo "<script>history.go(-1);</script>";die;
        }


        $res = M('depart_budget')->where(['budget_no'=>$_POST['budget_no']])->getField('budget_flag');
        if($res != 0){
            echo "<script>alert('已提交不能修改');</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }
        $arr=$this->upload();
       $_POST['img_path']="{$arr[0]['savepath']}"."{$arr[0]['savename']}";
        $_POST['type_name']=M('budget_type')->where("id={$_POST['type_code']}")->find()['type_name'];
        $rs=M("depart_budget_detail")->add($_POST);

        if($rs){
            $href=U('Depart/yusuan_list');
            echo "<script>alert('添加成功');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }else{
            echo "<script>alert('添加失败');</script>";
            echo "<script>history.go(-1);location.reload()</script>";
        }

    }

    public function depart_type(){

        $list = M('budget_type')->select();

        $this->assign('list',$list);

        $this->display();
    }

    public function yusuantype_add(){
        $post = I('post.');

        if($post['type_code'] == null){
            exit(0);
        }
        if($post['type_name'] == null){
            exit(0);
        }
        if($post['id'] == null){

            $res = M('budget_type')->where(['type_code' => $post['type_code']])->select();
            if($res != null){
                exit(0);
            }
            $res = M('budget_type')->data($post)->add();

        }else{
            $res = M('budget_type')->save($post);
        }
        if($res == null){
            exit(0);
        }else{
            echo 1;
            exit(0);
        }

    }

    public function yusuantype_del(){
        $post = I('post.id');

        $res = M('budget_type')->where(['id'=>$post])->delete();
        if($res == null){
            exit(0);
        }else{
            echo 1;
            exit(1);
        }
    }

    public function yusuan_list(){

        $id = I('get.id');
        $data = M('depart_budget')->where(['id' => $id])->select()[0];
        if($data == null){
            echo "<script>alert('错误')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }
        $money = M('depart_budget_detail')->where(['budget_no' => $data['budget_no']])->sum('budget_amt');

        $res = M('depart_budget_detail')->where(['budget_no' => $data['budget_no']])->order('id desc')->select();
        $this->assign('money',$money);
        $this->assign('data',$data);
        $this->assign('list',$res);
        $this->display();
    }

    public function add_mingxi(){

        $id = I('get.id');
        $data = M('depart_budget')->where(['id' => $id])->select()[0];
        if($data == null){
            echo "<script>alert('错误')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }
        $type = M('budget_type')->select();


        $this->assign('type',$type);
        $this->assign('data',$data);

        $this->display();
    }


    public function upload() {
        if ($_FILES['file']['name'] !='') {
            //如果有文件上传 上传附件
            return $this->_upload();
        }
    }

    // 文件上传
    protected function _upload() {
        import('@.ORG.UploadFile');
        //导入上传类
        $upload = new \Org\Util\UploadFile();
        //设置上传文件大小
        $upload->maxSize            = -1;
        //设置上传文件类型
        $upload->allowExts          = explode(',', 'jpg,mp4,jpeg,bmp,png');
        //设置附件上传目录
        $upload->savePath           = './Uploads/';
        // 设置引用图片类库包路径
        $upload->imageClassPath     = '@.ORG.Image';
        //设置上传文件规则
        $upload->saveRule           = 'uniqid';
        //删除原图
        $upload->thumbRemoveOrigin  = true;
        if (!$upload->upload()) {
            //捕获上传异常
            $this->error($upload->getErrorMsg());
        } else {
            //取得成功上传的文件信息
            $uploadList = $upload->getUploadFileInfo();

            import('@.ORG.Image');
        }
//        $model  = M('Photo');
        //保存当前数据对象
        $data['image']          = $_POST['image'];
        $data['create_time']    = NOW_TIME;
//        $list   = $model->add($data);

        return $uploadList;
    }


    public function hh(){
        $this->upload();
    }

    public function budget_check(){



        $res = M('depart_budget')->where(['budget_flag' => 1])->select();


        $this->assign('list',$res);
        $this->display();
    }

    public function budget_show(){

        $this->display();
    }




    public function ajaxImg(){

        $id = I('post.data');
        $res = M('depart_budget_detail')->where(['id' => $id])->select();

//        img_path


        if($res[0]['img_path'] !=null){
            $res[0]['img_path'] = $_SERVER['HTTP_HOST'].'/badcat'.substr($res[0]['img_path'],1);
        }else{
            $res[0]['img_path'] = null;
        }

        $this->assign('mingxi',$res[0]);
        $this->display();
    }

    public function submit_yusuan(){

        $id = I('get.id');
        $flag = M('depart_budget')->where(['id' => $id])->getField('budget_flag');
        if($flag != 0){
            echo "<script>alert('已提交')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }

        $res = M('depart_budget')->where(['id' => $id])->setField('budget_flag',1);
        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }
    }

    public function yusuan_list2(){

        $id = I('get.id');
        $data = M('depart_budget')->where(['id' => $id])->select()[0];
        if($data == null){
            echo "<script>alert('错误')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }


        $money = M('depart_budget_detail')->where(['budget_no' => $data['budget_no']])->sum('budget_amt');

        $this->assign('money',$money);

        $res = M('depart_budget_detail')->where(['budget_no' => $data['budget_no']])->order('id desc')->select();
        $this->assign('data',$data);
        $this->assign('list',$res);
        $this->display();
    }

    public function budget_check2(){
        $res = M('depart_budget')->where(['budget_flag' => 3])->select();


        $this->assign('list',$res);

        $this->display();
    }

    public function budget_show2(){

        $id = I('get.id');
        $data = M('depart_budget')->where(['id' => $id])->select()[0];
        if($data == null){
            echo "<script>alert('错误')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }

        $res = M('depart_budget_detail')->where(['budget_no' => $data['budget_no']])->order('id desc')->select();
        $this->assign('data',$data);
        $this->assign('list',$res);
        $this->display();
    }

    public function shenpin_queren(){

        $id = I('get.id');
        $data = M('depart_budget')->where(['id' => $id])->select()[0];

        if($data['budget_flag'] != 3){
            echo "<script>alert('无法审核')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }
        $res = M('depart_budget')->where(['id' => $id])->setField('budget_flag',5);

        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }

    }


    public function shenpin_fanhui(){

        $id = I('get.id');
        $data = M('depart_budget')->where(['id' => $id])->select()[0];

        if($data['budget_flag'] != 3){
            echo "<script>alert('无法审核')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }
        $res = M('depart_budget')->where(['id' => $id])->setField('budget_flag',4);

        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }

    }

    public function all_yusuan(){


        $res = M('budget')->select();
        foreach ($res as $key => $val){

            $res[$key]['budget_man']= M('user')->where(['id'=>$val['budget_man']])->getField('user_name');
        }

        $this->assign('list',$res);
        $this->display();
    }

    public function tibao_list(){
        $list = M('user')->select();


        $this->assign('list',$list);
        $this->display();
    }

    public function tibao_add(){
        $post = I('post.');

        $res = M('user')->where(['id'=> $post['budget_man']])->select();
        if($res == null){
            echo "<script>alert('请选择预算员')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }
        $post['budget_man'] = $res[0]['id'];
        $post['budget_man_name'] = $res[0]['user_name'];
        $post['budget_date'] = date('Y-m-d H:i:s',time());

        $post['budget_flag'] = 0;

        $res = M('budget')->data($post)->add();
        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }
    }

    public function all_del(){
        $id = I('get.id');
        $res = M('budget')->where(['id'=> $id])->getField('budget_flag');
        if($res != 0){
            echo "<script>alert('已经上报无法操作')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }
        $res = M('budget')->where(['id'=> $id])->delete();

        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }
    }

    public function all_tibao(){
        $id = I('get.id');
        $res = M('budget')->where(['id'=> $id])->getField('budget_flag');
        if($res != 0){
            echo "<script>alert('已经报单')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }
        $res = M('budget')->where(['id'=> $id])->setField('budget_flag',1);

        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }


    }

    public function shenpi_all(){

        $list = M('budget')->where(['budget_flag' => 1])->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function success_shenpi(){
        $id = I('get.id');
        $data = M('budget')->where(['id' => $id])->select()[0];
        if($data['budget_flag'] != 1){
            echo "<script>alert('无法审核')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }
        $res = M('budget')->where(['id' => $id])->setField('budget_flag',2);

        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }
    }

    public function fail_shenpi(){
        $id = I('get.id');
        $data = M('budget')->where(['id' => $id])->select()[0];

        if($data['budget_flag'] != 1){
            echo "<script>alert('无法审核')</script>";
            echo "<script>history.go(-1);location.reload()</script>";
            die;
        }
        $res = M('budget')->where(['id' => $id])->setField('budget_flag',3);

        if($res == null){
            echo "<script>alert('失败')</script>";
            echo "<script>history.go(-1);</script>";
            die;
        }else{
            echo "<script>alert('成功')</script>";
            echo "<script>history.go(-1);</script>";
        }
    }

    public function query_1(){

        $res = M('depart_budget')->select();


        $this->assign('list',$res);
        $this->display();
    }

    public function query_2(){

        $res = M('budget')->select();

        $this->assign('list',$res);

        $this->display();
    }


}