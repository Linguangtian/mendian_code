<?php
$mailsubject=$_POST["s_title"]."-".$_POST["s_report_name"];
$mailbody="����������".$_POST["s_name"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_POST["s_sex"]." ".$_POST["s_age"]."<br/>";
$mailbody=$mailbody."��ϵ��ʽ��<b>".$_POST["s_report_phone"]."</b><br/>";
$mailbody=$mailbody."���ʱ�䣺".$_POST["s_report__time"]."<br/>";
$mailbody=$mailbody."�������ͣ�".$_POST["s_report_people_type"]."<br/>";
$mailbody=$mailbody."<div style='border-bottom:1px dashed #eee'>��鱨�������ֵ</div>";
$mailbody=$mailbody."���᣺".$_POST["s_report_niaosuan"]."umol/L<br/>";
$mailbody=$mailbody."���ʪ���ӣ�".$_POST["s_report_yinzi"]."IU/ml<br/>";
$mailbody=$mailbody."����C��Ӧ���ף�".$_POST["s_report_danbai"]."mg/L<br/>";
$mailbody=$mailbody."���������Ѫ��'0'��".$_POST["s_report_kanglianqiu"]."u/ml<br/>";
$mailbody=$mailbody."Ѫ����".$_POST["s_report_xuechen"]."mm/h<br/>";
$mailbody=$mailbody."�����ϸ����ԭB27��".$_POST["s_report_b27"]."+/-<br/>";
$mailbody=$mailbody."<div style='border-bottom:1px dashed #eee'>���������Ϣ</div>";
$mailbody=$mailbody."��дʱ�䣺".$_POST["s_time"]."<br/>";
$mailbody=$mailbody."��·ҳ�棺".$_POST["s_referrer"]."<br/>";
$mailbody=$mailbody."��ǰҳ�棺".$_POST["s_url"]."<br/>";
$mailbody=$mailbody."��λ�ã�".$_POST["s_location"]."<br/>";
$mailbody=$mailbody."�������ͣ�".$_POST["s_type"]."<br/>";
$mailbody=$mailbody."�ÿ�IP��".$_POST["s_ip"]."<br/>";

//�����ı���Ŀ�Դ�����
$mailtype 		= 	"HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
$mailsubject 	= 	'=?GB2312?B?'.base64_encode($mailsubject).'?=';//�ʼ�����
$mailfrom  	= 	'=?GB2312?B?'.base64_encode($mailfrom).'?=';//������
?>