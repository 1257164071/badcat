
# Create table base_permissio(
# 	id int primary key auto_increment COMMENT '权限表',
# 	permissio CHAR(20) NOT NULL COMMENT '权限名称',
# 	permissio_name CHAR(20) NOT NULL COMMENT '控制器名'
#
# )ENGINE=InnoDB DEFAULT CHARSET = utf8;

###############################################
CREATE TABLE base_accessory(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '统一附件表',
  order_no CHAR(20) COMMENT '单号',
  type int DEFAULT '0' COMMENT '附件类型 0图片 1视频 2其他',
  message char(40) DEFAULT '附件说明' COMMENT '',
  accessory_date DATETIME COMMENT '提交时间'
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

#收支管理
CREATE TABLE  base_depart_income_plan(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '部门收入计划主表',
  plan_no CHAR(20) COMMENT '单号',
  year_no CHAR(20) COMMENT '计划年度',
  month_no CHAR(20) COMMENT '月份',
  department_code INT COMMENT '计划部门',
  department_name CHAR(20) COMMENT '计划部门名称',
  plan_man INT COMMENT '编制人员',
  plan_man_name CHAR(20) COMMENT '名称',
  plan_date DATETIME COMMENT '计划制定日期',
  plan_flag INT DEFAULT'0' COMMENT  '计划状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待财务审核 3-财务审核退回 4、财务审批通过',
  depart_leader_checkman INT COMMENT '部门领导人，系统记录审批账号',
  depart_leader_checkman_name CHAR(20) COMMENT '部门领导人名称',
  depart_leader_check_time DATETIME COMMENT '部门领导审批时间',
  depart_leader_check_text CHAR(80) COMMENT '部门领导审批意见',
  finance_checkman int COMMENT '财务审批人',
  finance_checkman_name CHAR(20) COMMENT '财务审批人名称',
  finance_check_time DATETIME COMMENT '财务审批时间',
  finance_check_text CHAR(80) COMMENT '财务审批意见',
  real_book_flag  INT DEFAULT '0' COMMENT '收入登记标志 0-等待登记 1-已经登记',
  real_book_date DATETIME COMMENT '部门领导人名称',
  real_book_man INT COMMENT '登记人',
  real_book_man_name CHAR(20) COMMENT '登记人名称',
  real_book_man_text CHAR(20) COMMENT '登记情况'
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE base_depart_budget_detail(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '收入计划明细表',
  plan_no CHAR(20) COMMENT '计划单号',
  type_code CHAR(20) COMMENT '预算类别编码',
  type_name CHAR(20) COMMENT '预算类别名称',
  plan_name CHAR(20) COMMENT '计划名称',
  plan_desc VARCHAR(255) COMMENT '计划信息描述',
  income_amt DECIMAL(8,2) COMMENT '收入金额',
  img_path char(80) COMMENT '图片'
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE base_depart_budget_execution(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '预算执行',
  execution_no CHAR(20) COMMENT '预算执行单编码',
  year_no CHAR(20) COMMENT '预算执行年度',
  month_no CHAR(20) COMMENT '执行月份',
  department_code INT COMMENT '预算执行部门',
  department_name CHAR(20) COMMENT '预算执行部门名称',
  budget_man INT COMMENT '预算员',
  budget_man_name CHAR(20) COMMENT '预算员名称',
  budget_date CHAR(20) COMMENT '预算制定日期',
  budget_flag CHAR(20) DEFAULT'0' COMMENT '预算状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待财务审核 3-财务审核退回 4、财务审批通过',
  depart_leader_checkman INT COMMENT '部门领导人，系统记录审批账号',
  depart_leader_checkman_name CHAR(20) COMMENT '部门领导人名称',
  depart_leader_check_time DATETIME COMMENT '部门领导审批时间',
  depart_leader_check_text CHAR(20) COMMENT '部门领导审批意见',
  finance_checkman INT COMMENT '财务审批人',
  finance_checkman_name CHAR(20) COMMENT '财务审批人名称',
  finance_check_time CHAR(20) COMMENT '财务审批时间',
  finance_check_text CHAR(20) COMMENT '财务审批意见',
  real_execution_flag INT DEFAULT'0' COMMENT '预算执行标志 0-等待登记 1-已经登记',
  real_execution_date DATETIME COMMENT '预算执行登记时间',
  real_execution_man INT COMMENT '预算执行登记人',
  real_execution_man_name INT COMMENT '预算执行登记人名称',
  real_execution_text INT COMMENT '预算执行情况'

)ENGINE = InnoDB DEFAULT CHARSET = utf8;

#部门预算执行明细表
CREATE TABLE base_depart_income_plan_detail(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '部门预算执行明细表',
  execution_no CHAR(20) COMMENT '预算执行单编码',
  type_code CHAR(20) COMMENT '预算类别编码',
  type_name CHAR(20) COMMENT '预算类别名称',
  budget_name CHAR(20) COMMENT '预算执行名称',
  budget_desc VARCHAR(255) COMMENT '预算执行信息描述',
  budget_amt DECIMAL(8,2) COMMENT '预算执行金额',
  img_path char(80) COMMENT '图片'

)ENGINE = InnoDB DEFAULT CHARSET = utf8;

#支出借款申请单
CREATE TABLE base_depart_loan(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '支出借款申请单',
  loan_no CHAR(20) COMMENT '借款单号',
  year_no CHAR(20) COMMENT '年度',
  month_no CHAR(20) COMMENT '月份',
  department_code INT COMMENT '借款人部门',
  department_name CHAR(20) COMMENT '借款人部门名称',
  loan_man INT COMMENT '借款人员',
  loan_man_name CHAR(20) COMMENT '名称',
  loan_text VARCHAR(100) COMMENT '借款明细说明',
  loan_date DATETIME COMMENT '借款人日期',
  loan_flag INT DEFAULT'0' COMMENT '状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待财务审核 3-财务审核退回 4、财务审批通过',
  depart_leader_checkman CHAR(20) COMMENT '部门领导人，系统记录审批账号',
  depart_leader_checkman_name CHAR(20) COMMENT '部门领导人名称',
  depart_leader_check_time DATETIME COMMENT '部门领导审批时间',
  depart_leader_check_text CHAR(20) COMMENT '部门领导审批意见',
  finance_checkman INT COMMENT '财务审批人',
  finance_checkman_name CHAR(20) COMMENT '财务审批人名称',
  finance_check_time CHAR(20) COMMENT '财务审批时间',
  finance_check_text CHAR(20) COMMENT '财务审批意见',
  real_return_flag INT DEFAULT'0' COMMENT '借款归还标志 0-等待登记 1-已经登记',
  real_return_date DATETIME COMMENT '借款归还登记时间',
  real_execution_man INT COMMENT '借款归还登记人',
  real_return_man_name INT COMMENT '预算执行登记人名称',
  real_return_text INT COMMENT '归还登记情况'

)ENGINE = InnoDB DEFAULT CHARSET = utf8;

#费用报销申请单 depart_expenses

CREATE TABLE base_depart_expenses(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '支出借款申请单',
  expenses_no CHAR(20) COMMENT '报销单号',
  year_no CHAR(20) COMMENT '年度',
  month_no CHAR(20) COMMENT '月份',
  department_code INT COMMENT '报销人部门',
  department_name CHAR(20) COMMENT '报销人部门名称',
  expenses_man INT COMMENT '报销人员',
  expenses_man_name CHAR(20) COMMENT '名称',
  execution_text CHAR(20) COMMENT '明细',
  expenses_date DATETIME COMMENT '报销日期',
  expenses_flag INT DEFAULT'0' COMMENT '状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待财务审核 3-财务审核退回 4、财务审批通过',
  depart_leader_checkman CHAR(20) COMMENT '部门领导人，系统记录审批账号',
  depart_leader_checkman_name CHAR(20) COMMENT '部门领导人名称',
  depart_leader_check_time DATETIME COMMENT '部门领导审批时间',
  depart_leader_check_text CHAR(20) COMMENT '部门领导审批意见',
  finance_checkman INT COMMENT '财务审批人',
  finance_checkman_name CHAR(20) COMMENT '财务审批人名称',
  finance_check_time CHAR(20) COMMENT '财务审批时间',
  finance_check_text CHAR(20) COMMENT '财务审批意见',
  real_do_flag INT DEFAULT'0' COMMENT '报销办理标志 0-等待登记 1-已经登记',
  real_do_date DATETIME COMMENT '报销办理登记时间',
  real_do_man INT COMMENT '报销办理登记人',
  real_do_man_name INT COMMENT '报销办理登记人名称',
  real_do_text INT COMMENT '报销办理说明'

)ENGINE = InnoDB DEFAULT CHARSET = utf8;

#采购业务管理

CREATE TABLE base_depart_purchase(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '采购业务管理',
  purchase_no CHAR(20) COMMENT '采购申请单号',
  year_no CHAR(20) COMMENT '年度',
  month_no CHAR(20) COMMENT '月份',
  department_code INT COMMENT '采购申请人部门',
  department_name CHAR(20) COMMENT '采购申请部门名称',
  purchase_man INT COMMENT '采购申请人员',
  purchase_man_name CHAR(20) COMMENT '名称',
  purchase_date DATETIME COMMENT '采购申请日期',
  purchase_flag INT COMMENT '状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待局领导审核 3-局领导审核退回 4、局领导审批通过',
  depart_leader_checkman CHAR(20) COMMENT '部门领导人，系统记录审批账号',
  depart_leader_checkman_name CHAR(20) COMMENT '部门领导人名称',
  depart_leader_check_time DATETIME COMMENT '部门领导审批时间',
  depart_leader_check_text CHAR(20) COMMENT '部门领导审批意见',
  manage_leader_checkman INT COMMENT '局领导审批人',
  manage_leader_checkman_name CHAR(20) COMMENT '局领导审批人名称',
  manage_leader_check_time CHAR(20) COMMENT '局领导审批时间',
  manage_leader_check_text CHAR(20) COMMENT '局审批意见',
  real_do_flag INT COMMENT '采购执行办理标志 0-等待办理 1-已经办理',
  real_do_date DATETIME COMMENT '采购执行办理登记时间',
  real_do_man INT COMMENT '采购执行办理登记人',
  real_do_man_name CHAR(20) COMMENT '报销办理登记人名称',
  real_do_text VARCHAR(100) COMMENT '采购执行办理情况',
  tender_do_flag INT DEFAULT'0' COMMENT '招标办理标志 -1不需要招标 0-等待办理 1-已经办理',
  tender_do_date DATETIME COMMENT '招标办理登记时间',
  tender_do_man INT COMMENT '招标办理登记人',
  real_do_text1 CHAR(100)  COMMENT '招标办理情况',
  check_do_flag CHAR(20) DEFAULT'0' COMMENT '采购验收标志 0-等待办理 1-已经办理',
  check_do_date DATETIME  COMMENT '采购验收登记时间',
  check_do_man CHAR(20)  COMMENT '采购验收登记人',
  check_do_man_name CHAR(20)  COMMENT '采购验收登记人姓名',
  check_do_text CHAR(20)  COMMENT '采购验收情况'
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

#合同管理
CREATE TABLE base_contract(
  id int PRIMARY KEY AUTO_INCREMENT COMMENT '合同管理',
  contract_no CHAR(20) COMMENT '合同编码',
  year_no CHAR(20) COMMENT '合同年度',
  month_no CHAR(20) COMMENT '月份',
  department_code INT COMMENT '合同拟定部门',
  department_name CHAR(20) COMMENT '合同拟定部门名称',
  contract_date DATETIME COMMENT '合同制定日期',
  contract_start_date DATETIME COMMENT '合同生效开始日期',
  contract_end_date DATETIME COMMENT '合同生效结束日期',
  contract_A CHAR(20) COMMENT '签约甲方',
  contract_B CHAR(20) COMMENT '签约乙方',
  contract_name CHAR(20) COMMENT '合同标题',
  contract_text VARCHAR(255) COMMENT '合同内容',
  contract_amt DECIMAL(8,2) COMMENT '合同金额',
  contract_flag CHAR(20) DEFAULT'0' COMMENT '状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待局领导审核 3-局领导审核退回 4、局领导审批通过',
  depart_leader_checkman CHAR(20) COMMENT '部门领导人，系统记录审批账号',
  depart_leader_checkman_name CHAR(20) COMMENT '部门领导人名称',
  depart_leader_check_time DATETIME COMMENT '部门领导审批时间',
  depart_leader_check_text CHAR(100) COMMENT '部门领导审批意见',

  manage_leader_checkman INT COMMENT '局领导审批人',
  manage_leader_checkman_name CHAR(20) COMMENT '局领导审批人名称',
  manage_leader_check_time CHAR(20) COMMENT '局领导审批时间',
  manage_leader_check_text CHAR(20) COMMENT '局审批意见'

)ENGINE = InnoDB DEFAULT CHARSET = utf8;
