<?php

$act = isset(self::$_GPC["act"])?self::$_GPC["act"]:"display"; echo $act;
global $_GPC, $_W;
$uniacid = $_W['uniacid'];
$opt = $_GPC['opt'];
$wxapp = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_xiaofeigu_log')." WHERE uniacid = :uniacid" , array(':uniacid' => $uniacid));

var_dump($wxapp);exit;





return include self::template('web/Shopset/xiaofeigu');