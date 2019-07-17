<?php
$mailsubject=$_POST["s_title"]."-".$_POST["s_report_name"];
$mailbody="患者姓名：".$_POST["s_name"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["s_sex"]." ".$_POST["s_age"]."<br/>";
$mailbody=$mailbody."联系方式：<b>".$_POST["s_report_phone"]."</b><br/>";
$mailbody=$mailbody."检查时间：".$_POST["s_report__time"]."<br/>";
$mailbody=$mailbody."患者类型：".$_POST["s_report_people_type"]."<br/>";
$mailbody=$mailbody."<div style='border-bottom:1px dashed #eee'>检查报告相关数值</div>";
$mailbody=$mailbody."尿酸：".$_POST["s_report_niaosuan"]."umol/L<br/>";
$mailbody=$mailbody."类风湿因子：".$_POST["s_report_yinzi"]."IU/ml<br/>";
$mailbody=$mailbody."超敏C反应蛋白：".$_POST["s_report_danbai"]."mg/L<br/>";
$mailbody=$mailbody."抗链球菌溶血素'0'：".$_POST["s_report_kanglianqiu"]."u/ml<br/>";
$mailbody=$mailbody."血沉：".$_POST["s_report_xuechen"]."mm/h<br/>";
$mailbody=$mailbody."人类白细胞抗原B27：".$_POST["s_report_b27"]."+/-<br/>";
$mailbody=$mailbody."<div style='border-bottom:1px dashed #eee'>其余相关信息</div>";
$mailbody=$mailbody."填写时间：".$_POST["s_time"]."<br/>";
$mailbody=$mailbody."来路页面：".$_POST["s_referrer"]."<br/>";
$mailbody=$mailbody."当前页面：".$_POST["s_url"]."<br/>";
$mailbody=$mailbody."表单位置：".$_POST["s_location"]."<br/>";
$mailbody=$mailbody."需求类型：".$_POST["s_type"]."<br/>";
$mailbody=$mailbody."访客IP：".$_POST["s_ip"]."<br/>";

//其他的表单项目以此类推
$mailtype 		= 	"HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
$mailsubject 	= 	'=?GB2312?B?'.base64_encode($mailsubject).'?=';//邮件主题
$mailfrom  	= 	'=?GB2312?B?'.base64_encode($mailfrom).'?=';//发件人
?>