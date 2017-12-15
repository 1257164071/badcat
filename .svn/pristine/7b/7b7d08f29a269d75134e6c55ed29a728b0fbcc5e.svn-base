/*
 Navicat MySQL Data Transfer

 Source Server         : my
 Source Server Type    : MySQL
 Source Server Version : 100125
 Source Host           : localhost:3306
 Source Schema         : badcat

 Target Server Type    : MySQL
 Target Server Version : 100125
 File Encoding         : 65001

 Date: 13/12/2017 11:48:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for base_accessory
-- ----------------------------
DROP TABLE IF EXISTS `base_accessory`;
CREATE TABLE `base_accessory`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '统一附件表',
  `order_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '单号',
  `type` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0' COMMENT '附件类型 0图片 1视频 2其他',
  `message` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '附件说明',
  `accessory_date` datetime(0) NULL DEFAULT NULL COMMENT '提交时间',
  `path_img` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_accessory_copy1
-- ----------------------------
DROP TABLE IF EXISTS `base_accessory_copy1`;
CREATE TABLE `base_accessory_copy1`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '统一附件表',
  `order_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '单号',
  `type` int(11) NULL DEFAULT 0 COMMENT '附件类型 0图片 1视频 2其他',
  `message` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '附件说明',
  `accessory_date` datetime(0) NULL DEFAULT NULL COMMENT '提交时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_budget
-- ----------------------------
DROP TABLE IF EXISTS `base_budget`;
CREATE TABLE `base_budget`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '总预算表',
  `year_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '预算年度',
  `budget_man` int(11) NULL DEFAULT NULL COMMENT '预算员编制人员，公司预算员',
  `budget_man_name` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '预算员名称',
  `budget_date` datetime(0) NULL DEFAULT NULL COMMENT '预算编制日期',
  `budget_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '预算信息描述',
  `budget_amt` decimal(10, 2) NULL DEFAULT NULL COMMENT '预算金额',
  `budget_flag` tinyint(1) NULL DEFAULT 0 COMMENT '预算状态，0-等待上报，1-上报完成等待领导审批，2-领导审批完成',
  `leader_checkman` int(11) NULL DEFAULT NULL COMMENT '领导审批人',
  `leader_checkman_name` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '领导审批人姓名',
  `leader_check_time` datetime(0) NULL DEFAULT NULL COMMENT '领导审批时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_budget_type
-- ----------------------------
DROP TABLE IF EXISTS `base_budget_type`;
CREATE TABLE `base_budget_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '预算类别管理',
  `type_code` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '预算类别编码',
  `type_name` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '预算类别名称',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_contract
-- ----------------------------
DROP TABLE IF EXISTS `base_contract`;
CREATE TABLE `base_contract`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '合同管理',
  `contract_no` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '合同编码',
  `year_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '合同年度',
  `month_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '月份',
  `department_code` int(11) NULL DEFAULT NULL COMMENT '合同拟定部门',
  `department_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '合同拟定部门名称',
  `contract_date` datetime(0) NULL DEFAULT NULL COMMENT '合同制定日期',
  `contract_start_date` datetime(0) NULL DEFAULT NULL COMMENT '合同生效开始日期',
  `contract_end_date` datetime(0) NULL DEFAULT NULL COMMENT '合同生效结束日期',
  `contract_a` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '签约甲方',
  `contract_b` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '签约乙方',
  `contract_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '合同标题',
  `contract_text` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '合同内容',
  `contract_amt` decimal(8, 2) NULL DEFAULT 0.00 COMMENT '合同金额',
  `contract_flag` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0' COMMENT '状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待局领导审核 3-局领导审核退回 4、局领导审批通过',
  `depart_leader_checkman` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导人，系统记录审批账号',
  `depart_leader_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导人名称',
  `depart_leader_check_time` datetime(0) NULL DEFAULT NULL COMMENT '部门领导审批时间',
  `depart_leader_check_text` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导审批意见',
  `manage_leader_checkman` int(11) NULL DEFAULT NULL COMMENT '局领导审批人',
  `manage_leader_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '局领导审批人名称',
  `manage_leader_check_time` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '局领导审批时间',
  `manage_leader_check_text` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '局审批意见',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_depart_budget
-- ----------------------------
DROP TABLE IF EXISTS `base_depart_budget`;
CREATE TABLE `base_depart_budget`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门预算主表',
  `budget_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算单编码',
  `year_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算年度',
  `department_id` int(11) NULL DEFAULT NULL COMMENT '预算部门',
  `department_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算部门名称',
  `budget_man` int(11) NULL DEFAULT NULL COMMENT '预算员',
  `budget_man_name` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算员名称',
  `budget_date` datetime(0) NULL DEFAULT NULL COMMENT '预算制定日期',
  `budget_flag` tinyint(1) NULL DEFAULT 0 COMMENT '预算状态，0-等待提交，1-部门领导审核，2-部门领导审核退回，3-部门领导审核通过，等待财务审核，4-财务审核退回，5-财务审核通过',
  `depart_leader_checkman` int(11) NULL DEFAULT NULL COMMENT '部门领导人，系统记录审批账号',
  `depart_leader_checkman_name` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导人姓名',
  `depart_leader_check_time` datetime(0) NULL DEFAULT NULL COMMENT '部门领导审批时间',
  `finance_checkman` int(11) NULL DEFAULT NULL COMMENT '财务审批人',
  `finance_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批人名称',
  `finance_check_time` datetime(0) NULL DEFAULT NULL COMMENT '财务审批时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_depart_budget_detail
-- ----------------------------
DROP TABLE IF EXISTS `base_depart_budget_detail`;
CREATE TABLE `base_depart_budget_detail`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门预算执行明细表',
  `execution_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行单编码',
  `type_code` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算类别编码',
  `type_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算类别名称',
  `budget_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行名称',
  `budget_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行信息描述',
  `budget_amt` decimal(8, 2) NULL DEFAULT NULL COMMENT '预算执行金额',
  `img_path` char(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_depart_budget_execution
-- ----------------------------
DROP TABLE IF EXISTS `base_depart_budget_execution`;
CREATE TABLE `base_depart_budget_execution`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '预算执行',
  `execution_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行单编码',
  `year_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行年度',
  `month_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '执行月份',
  `department_code` int(11) NULL DEFAULT NULL COMMENT '预算执行部门',
  `department_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行部门名称',
  `budget_man` int(11) NULL DEFAULT NULL COMMENT '预算员',
  `budget_man_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算员名称',
  `budget_date` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算制定日期',
  `budget_flag` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0' COMMENT '预算状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待财务审核 3-财务审核退回 4、财务审批通过',
  `depart_leader_checkman` int(11) NULL DEFAULT NULL COMMENT '部门领导人，系统记录审批账号',
  `depart_leader_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导人名称',
  `depart_leader_check_time` datetime(0) NULL DEFAULT NULL COMMENT '部门领导审批时间',
  `depart_leader_check_text` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导审批意见',
  `finance_checkman` int(11) NULL DEFAULT NULL COMMENT '财务审批人',
  `finance_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批人名称',
  `finance_check_time` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批时间',
  `finance_check_text` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批意见',
  `real_execution_flag` int(11) NULL DEFAULT 0 COMMENT '预算执行标志 0-等待登记 1-已经登记',
  `real_execution_date` datetime(0) NULL DEFAULT NULL COMMENT '预算执行登记时间',
  `real_execution_man` int(11) NULL DEFAULT NULL COMMENT '预算执行登记人',
  `real_execution_man_name` int(11) NULL DEFAULT NULL COMMENT '预算执行登记人名称',
  `real_execution_text` int(11) NULL DEFAULT NULL COMMENT '预算执行情况',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_depart_expenses_bx
-- ----------------------------
DROP TABLE IF EXISTS `base_depart_expenses_bx`;
CREATE TABLE `base_depart_expenses_bx`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支出借款申请单',
  `expenses_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '报销单号',
  `year_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '年度',
  `month_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '月份',
  `department_code` int(11) NULL DEFAULT NULL COMMENT '报销人部门',
  `department_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '报销人部门名称',
  `expenses_man` int(11) NULL DEFAULT NULL COMMENT '报销人员',
  `expenses_man_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '名称',
  `execution_text` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '明细',
  `expenses_date` datetime(0) NULL DEFAULT NULL COMMENT '报销日期',
  `expenses_flag` int(11) NULL DEFAULT 0 COMMENT '状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待财务审核 3-财务审核退回 4、财务审批通过',
  `depart_leader_checkman` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导人，系统记录审批账号',
  `depart_leader_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导人名称',
  `depart_leader_check_time` datetime(0) NULL DEFAULT NULL COMMENT '部门领导审批时间',
  `depart_leader_check_text` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导审批意见',
  `finance_checkman` int(11) NULL DEFAULT NULL COMMENT '财务审批人',
  `income_amt` decimal(8, 2) NULL DEFAULT NULL COMMENT '金额',
  `finance_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批人名称',
  `finance_check_time` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批时间',
  `finance_check_text` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批意见',
  `real_do_flag` int(11) NULL DEFAULT 0 COMMENT '报销办理标志 0-等待登记 1-已经登记',
  `real_do_date` datetime(0) NULL DEFAULT NULL COMMENT '报销办理登记时间',
  `real_do_man` int(11) NULL DEFAULT NULL COMMENT '报销办理登记人',
  `real_do_man_name` int(11) NULL DEFAULT NULL COMMENT '报销办理登记人名称',
  `real_do_text` int(11) NULL DEFAULT NULL COMMENT '报销办理说明',
  `img_path` char(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_depart_income_plan
-- ----------------------------
DROP TABLE IF EXISTS `base_depart_income_plan`;
CREATE TABLE `base_depart_income_plan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门收入计划主表',
  `plan_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '单号',
  `year_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '计划年度',
  `month_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '月份',
  `department_code` int(11) NULL DEFAULT NULL COMMENT '计划部门',
  `department_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '计划部门名称',
  `plan_man` int(11) NULL DEFAULT NULL COMMENT '编制人员',
  `plan_man_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '名称',
  `plan_date` datetime(0) NULL DEFAULT NULL COMMENT '计划制定日期',
  `plan_flag` int(11) NULL DEFAULT 0 COMMENT '计划状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待财务审核 3-财务审核退回 4、财务审批通过',
  `depart_leader_checkman` int(11) NULL DEFAULT NULL COMMENT '部门领导人，系统记录审批账号',
  `depart_leader_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导人名称',
  `depart_leader_check_time` datetime(0) NULL DEFAULT NULL COMMENT '部门领导审批时间',
  `depart_leader_check_text` char(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '部门领导审批意见',
  `finance_checkman` int(11) NULL DEFAULT NULL COMMENT '财务审批人',
  `finance_checkman_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批人名称',
  `finance_check_time` datetime(0) NULL DEFAULT NULL COMMENT '财务审批时间',
  `finance_check_text` char(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '财务审批意见',
  `real_book_flag` int(11) NULL DEFAULT 0 COMMENT '收入登记标志 0-等待登记 1-已经登记',
  `real_book_date` datetime(0) NULL DEFAULT NULL COMMENT '部门领导人名称',
  `real_book_man` int(11) NULL DEFAULT NULL COMMENT '登记人',
  `real_book_man_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '登记人名称',
  `real_book_man_text` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '登记情况',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_depart_income_plan_detail
-- ----------------------------
DROP TABLE IF EXISTS `base_depart_income_plan_detail`;
CREATE TABLE `base_depart_income_plan_detail`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '收入计划明细表',
  `plan_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '计划单号',
  `type_code` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算类别编码',
  `type_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算类别名称',
  `plan_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '计划名称',
  `plan_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '计划信息描述',
  `income_amt` decimal(8, 2) NULL DEFAULT NULL COMMENT '收入金额',
  `img_path` char(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_department
-- ----------------------------
DROP TABLE IF EXISTS `base_department`;
CREATE TABLE `base_department`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门管理',
  `depart_code` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '部门编码',
  `depart_name` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '部门名称',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_notice
-- ----------------------------
DROP TABLE IF EXISTS `base_notice`;
CREATE TABLE `base_notice`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '通知公告',
  `notice_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公告编号',
  `notice_type` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公告类型',
  `notice_caption` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公告标题',
  `notice_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '公告简述',
  `notice_date` datetime(0) NULL DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_permissio
-- ----------------------------
DROP TABLE IF EXISTS `base_permissio`;
CREATE TABLE `base_permissio`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限表',
  `permissio` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '权限名称',
  `permissio_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '控制器名',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_user
-- ----------------------------
DROP TABLE IF EXISTS `base_user`;
CREATE TABLE `base_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户账户管理',
  `user_code` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户编码',
  `user_name` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户名',
  `user_pwd` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '密码',
  `work_name` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '岗位名',
  `user_sex` tinyint(1) NOT NULL COMMENT '性别  1.男2.女',
  `user_mobile` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '手机号',
  `department_id` int(11) NOT NULL COMMENT '所属部门',
  `last_login_time` datetime(0) NULL DEFAULT NULL COMMENT '最后一次登录时间',
  `permissio` char(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '权限',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_work
-- ----------------------------
DROP TABLE IF EXISTS `base_work`;
CREATE TABLE `base_work`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '岗位管理',
  `post_name` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '岗位名称，如出纳、会计、财务经理等',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for base_yusuan_zhixing
-- ----------------------------
DROP TABLE IF EXISTS `base_yusuan_zhixing`;
CREATE TABLE `base_yusuan_zhixing`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门预算执行明细表',
  `execution_no` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行单编码',
  `type_code` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算类别编码',
  `type_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算类别名称',
  `budget_name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行名称',
  `budget_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '预算执行信息描述',
  `budget_amt` decimal(8, 2) NULL DEFAULT NULL COMMENT '预算执行金额',
  `img_path` char(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;

DROP TABLE IF EXISTS `base_zhichujiekuan`;
CREATE TABLE `base_zhichujiekuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支出借款申请单',
  `loan_no` char(20) DEFAULT NULL COMMENT '借款单号',
  `year_no` char(20) DEFAULT NULL COMMENT '年度',
  `month_no` char(20) DEFAULT NULL COMMENT '月份',
  `department_code` int(11) DEFAULT NULL COMMENT '借款人部门',
  `department_name` char(20) DEFAULT NULL COMMENT '借款人部门名称',
  `loan_man` int(11) DEFAULT NULL COMMENT '借款人员',
  `loan_man_name` char(20) DEFAULT NULL COMMENT '名称',
  `loan_text` varchar(100) DEFAULT NULL COMMENT '借款明细说明',
  `loan_date` datetime DEFAULT NULL COMMENT '借款人日期',
  `loan_flag` int(11) DEFAULT '0' COMMENT '状态，0-等待提交，1-部门领导审核-2部门领导审核退回 3-部门领导审核通过，等待财务审核 4-财务审核退回 5、财务审批通过',
  `depart_leader_checkman` char(20) DEFAULT NULL COMMENT '部门领导人，系统记录审批账号',
  `depart_leader_checkman_name` char(20) DEFAULT NULL COMMENT '部门领导人名称',
  `depart_leader_check_time` datetime DEFAULT NULL COMMENT '部门领导审批时间',
  `depart_leader_check_text` char(20) DEFAULT NULL COMMENT '部门领导审批意见',
  `finance_checkman` int(11) DEFAULT NULL COMMENT '财务审批人',
  `finance_checkman_name` char(20) DEFAULT NULL COMMENT '财务审批人名称',
  `finance_check_time` datetime DEFAULT NULL COMMENT '财务审批时间',
  `finance_check_text` char(20) DEFAULT NULL COMMENT '财务审批意见',
  `real_return_flag` int(11) DEFAULT '0' COMMENT '借款归还标志 0-等待登记 1-已经登记',
  `real_return_date` datetime DEFAULT NULL COMMENT '借款归还登记时间',
  `real_execution_man` int(11) DEFAULT NULL COMMENT '借款归还登记人',
  `real_return_man_name` char(20) DEFAULT NULL COMMENT '预算执行登记人名称',
  `real_return_text` varchar(100) DEFAULT NULL COMMENT '归还登记情况',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

