<?php
header('Content-Type:text/html;charset = gbk');
if($_POST && (preg_match("/^1[34578]\d{9}$/", $_POST["s_phone"]))){    //ͨ������ύ��ťִ���¼�
include_once("../beijing/mail.inc.php");//���������ļ�
include_once("../beijing/send_email.php");//������
//$mailto="mail1@gkfs120.com,mail2@gkfs120.com,mail3@gkfs120.com,mail4@gkfs120.com,mail5@gkfs120.com";//�ռ�������
//$mailto="1712080295@qq.com";//�ռ�������
$mailto="563547352@qq.com";//�ռ�������
include_once("../beijing/0templets/t_yuyue.php");//���������ֶ�
$smtp->sendmail($mailto, $mailfrom, $mailsubject, $mailbody, $mailtype);
//����Ϊ�����ʼ��Ƿ��ͳɹ����룬��ʽ���ߺ���ע��
/*echo "<script language=\"JavaScript\">alert(\"success\");</script>";*/
exit();
}else{   //����ִ�д���,�ص�������ʵ��Ǹ�ҳ��
echo"<script> alert('�Բ������Ĳ�������.');history.back(-1);</script>";
exit;

}

?>