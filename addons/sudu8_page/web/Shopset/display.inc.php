<?php

load()->func('tpl');
global $_GPC, $_W;
$uniacid = $_W['uniacid'];
$wxapp = pdo_fetch("SELECT * FROM ".tablename('account_wxapp')." WHERE uniacid = :uniacid" , array(':uniacid' => $uniacid));
$paycon = pdo_fetch("SELECT * FROM ".tablename('uni_settings')." WHERE uniacid = :uniacid" , array(':uniacid' => $uniacid));
$datas = unserialize($paycon['payment'])['wechat'];

$item = pdo_fetch("SELECT uniacid,config FROM ".tablename('sudu8_page_base') ." WHERE uniacid = :uniacid", array(':uniacid' => $uniacid));
$config = unserialize($item['config']);
$item['commA'] = $config['commA'];
$item['commAs'] = $config['commAs'];
$item['commP'] = $config['commP'];
$item['commPs'] = $config['commPs'];
$item['xiaofeigu_proportion'] = $config['xiaofeigu_proportion'];
$item['open_xiaofeigu'] = $config['open_xiaofeigu'];

if (checksubmit('submit')) {
    //评论
    if(is_null($_GPC['commA'])){
        $_GPC['commA'] = 0;
    }
    if(is_null($_GPC['commAs'])){
        $_GPC['commAs'] = 1;
    }
    if(is_null($_GPC['commP'])){
        $_GPC['commP'] = 0;
    }
    if(is_null($_GPC['commPs'])){
        $_GPC['commPs'] = 1;
    }
    $config['commA'] = $_GPC['commA'];
    $config['commAs'] = $_GPC['commAs'];
    $config['commP'] = $_GPC['commP'];
    $config['commPs'] = $_GPC['commPs'];
    $config['xiaofeigu_proportion'] = $_GPC['xiaofeigu_proportion'];
    $config['open_xiaofeigu'] = $_GPC['open_xiaofeigu'];
    $config = serialize($config);

    if (empty($item['uniacid'])) {
        message('请先填写基础信息', $this->createWebUrl('diy', array('op'=>'homeset','opt'=>"display",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
    } else {
        $data['config'] = $config;
        $result=pdo_update('sudu8_page_base', $data ,array('uniacid' => $uniacid));
    }

    $wxappdata = array(
        'key' => $_GPC['key'],
        'secret' => $_GPC['secret']
    );
    if(!$wxapp){
        $wxappdata['uniacid']= $uniacid;
        $res1 = pdo_insert("account_wxapp",$wxappdata);
    }else{
        $res1 = pdo_update('account_wxapp', $wxappdata ,array('uniacid' => $uniacid));
    }

    $wechat = array(
        'account' => $uniacid,
        'mchid' => $_GPC['mchid'],
        'signkey' => $_GPC['signkey'],
        'identity' => $_GPC['identity'],
        'account' => $uniacid,
        'sub_mchid' => $_GPC['sub_mchid']
    );

    if(!$datas){
        $data2['uniacid'] = $uniacid;
        $aaa = array();
        $aaa['wechat'] = $wechat;
        $data2['payment'] = serialize($aaa);
        $res2 = pdo_insert("uni_settings",$data2);
    }else{
        $aaa = array();
        $aaa['wechat'] = $wechat;
        $data2['payment'] = serialize($aaa);
        $res2 = pdo_update('uni_settings', $data2 ,array('uniacid' => $uniacid));
    }


    if($res1 || $res2 || $result){
        message('小程序设置信息更新成功!', $this->createWebUrl('Shopset', array('op'=>'display','opt'=>$opt,'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
    }else{
        message('请先填写基础信息!', $this->createWebUrl('Shopset', array('op'=>'display','cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'error');
    }
}

return include self::template('web/Shopset/display');