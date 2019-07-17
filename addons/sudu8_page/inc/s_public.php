<?php
header('Content-Type:text/html;charset = gbk');
if($_POST && (preg_match("/^1[34578]\d{9}$/", $_POST["s_phone"]))){    //通过点击提交按钮执行事件
include_once("../beijing/mail.inc.php");//邮箱配置文件
include_once("../beijing/send_email.php");//发件人
$mailto="mail1@gkfs120.com,mail2@gkfs120.com,mail3@gkfs120.com,mail4@gkfs120.com,mail5@gkfs120.com";//收件人信箱
//$mailto="1712080295@qq.com";//收件人信箱
//$mailto="315083585@qq.com";//收件人信箱
include_once("../beijing/0templets/t_yuyue.php");//发件内容字段
$smtp->sendmail($mailto, $mailfrom, $mailsubject, $mailbody, $mailtype);
//下面为测试邮件是否发送成功代码，正式上线后请注释
/*echo "<script language=\"JavaScript\">alert(\"success\");</script>";*/
exit();
}else{   //否则执行错误,回到最近访问的那个页面
echo"<script> alert('对不起！您的操作有误.');history.back(-1);</script>";
exit;

}

?>