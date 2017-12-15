<?php if (!defined('THINK_PATH')) exit();?>
    <div class="alert alert-success">

        <div class="col-lg-4"><span>用户帐号:<?php echo ($user["user_code"]); ?></span></div>
        <div class="col-lg-4"><span>手机号:<?php echo ($user["user_mobile"]); ?></span></div>
        <div class="col-lg-4"><span>用户名称:<?php echo ($user["user_name"]); ?></span></div>
        <br><br>
        <div class="col-lg-6" style="text-align: center">所属部门:<?php echo ($user["department_id"]); ?></div>
        <div class="col-lg-6" style="text-align: center">当前岗位:<?php echo ($user["work_name"]); ?></div>
        <br>
    </div>

<input name="id" value="<?php echo ($user["id"]); ?>" hidden>
    分配岗位<br><br>
    <select class="form-control m-bot15" name="work_name">
        <option value="">请选择</option>
        <?php if(is_array($work)): $i = 0; $__LIST__ = $work;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["post_name"]); ?>"><?php echo ($vo["post_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select><br>
    分配部门<br><br>
    <select class="form-control m-bot15" name="department_id">
        <option value="">请选择</option>
        <?php if(is_array($depa)): $i = 0; $__LIST__ = $depa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["depart_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select><br>