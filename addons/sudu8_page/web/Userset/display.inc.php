<?php


global $_GPC, $_W;
$uniacid = $_W['uniacid'];
$opt = $_GPC['opt'];
$ops = array('display', 'couspon', 'cousponpass', 'post', 'delete');
$opt = in_array($opt, $ops) ? $opt : 'display';
if($opt == 'display'){
    $total = pdo_fetchcolumn("SELECT count(*) FROM ".tablename('sudu8_page_user')." WHERE uniacid = :uniacid" , array(':uniacid' => $_W['uniacid']));
    $pageindex = max(1, intval($_GPC['page']));
    $pagesize = 10;
    $p = ($pageindex-1) * $pagesize;
    $pager = pagination($total, $pageindex, $pagesize);
    $user =  pdo_fetchall("SELECT * FROM ".tablename('sudu8_page_user')." WHERE uniacid = :uniacid ORDER BY `id` desc  LIMIT " . $p . "," . $pagesize, array(':uniacid' => $uniacid));

    foreach ($user as &$row) {
        $orders = pdo_fetch("SELECT count(*) as n FROM ".tablename('sudu8_page_order')." WHERE uniacid = :uniacid and openid = :openid" , array(':uniacid' => $_W['uniacid'],":openid" => $row['openid']));
        $row['orders'] = $orders['n'];
        $row2 = pdo_fetch("SELECT count(*) as n FROM ".tablename('sudu8_page_coupon_user')." WHERE uniacid = :uniacid and flag = 0 and uid=:uid" , array(':uid' => $row['id'] ,':uniacid' => $uniacid));
        $row['coupon'] =$row2['n'];
        if(!$row['mobile'] || $row['mobile']==""){
            $row['mobile'] = "暂未获取到该用户手机号";
        }
    }
}
if($opt == 'couspon'){
    $uid = $_GPC['uid'];
    $coupon =  pdo_fetchall("SELECT * FROM ".tablename('sudu8_page_coupon_user')." WHERE uniacid = :uniacid and uid = :uid" , array(':uniacid' => $_W['uniacid'],':uid' => $uid));
    foreach ($coupon as $key => &$res) {
        $couponinfo =  pdo_fetch("SELECT * FROM ".tablename('sudu8_page_coupon')." WHERE uniacid = :uniacid and id = :id" , array(':uniacid' => $_W['uniacid'],':id' => $res['cid']));
        $res['title'] = $couponinfo['title'];
    }
}
if($opt == 'cousponpass'){
    $id = $_GPC['id'];
    $uid = $_GPC['uid'];
    $data['utime'] = time();
    $data['flag'] = 1;
    $res = pdo_update('sudu8_page_coupon_user', $data, array('id' => $id));
    message('核销成功!', $this->createWebUrl('Userset', array('op'=>'display','cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
}

if($opt == 'post'){
    $id = $_GPC['id'];

    if(!empty($_GPC['mobile']) || !empty($_GPC['birth']) || !empty($_GPC['realname']||!empty($_GPC['is_medical_insurance'])  )){

        $mobile = $_GPC['mobile'];
        $birth = $_GPC['birth'];
        $realname = $_GPC['realname'];
        $is_medical_insurance = $_GPC['is_medical_insurance'];
        if(empty($mobile)){
            message('手机号不能为空！');
        }else{
            $data['mobile'] = $mobile;
        }
        if(empty($birth)){
            message('生日不能为空！');
        }else{
            $data['birth'] = $birth;
        }
        if(empty($realname)){
            message('真实姓名不能为空！');
        }else{
            $data['realname'] = $realname;
        }
        $data['is_medical_insurance'] = $is_medical_insurance;
        $result = pdo_update('sudu8_page_user', $data, array('id'=>$id));
        message('修改成功!', $this->createWebUrl('Userset', array('op'=>'display','cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
    }

    if(checksubmit('score')){
        $scoreNow = $_GPC['scoreNow'];
        $scoreNum = $_GPC['scoreNum'];
        $czjf_change = $_GPC['czjf_change'];
        if($czjf_change == '0'){
            $score = $scoreNow + $scoreNum;
        }else if($czjf_change == '1'){
            $score = $scoreNow - $scoreNum;
        }else{
            $score = $scoreNum;
        }

        $res = pdo_update('sudu8_page_user', array('score'=>$score), array('uniacid'=>$uniacid, 'id'=>$id));
        if($res >= 0){
            message('修改成功!', $this->createWebUrl('Userset', array('op'=>'display','opt'=>'post','id'=>$id,'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
        }
    }

    if(checksubmit('money')){
        $yueNow = $_GPC['yueNow'];
        $yueNum = $_GPC['yueNum'];
        $czye_change = $_GPC['czye_change'];
        if($czye_change == '0'){
            $money = $yueNow + $yueNum;
        }else if($czye_change == '1'){
            $money = $yueNow - $yueNum;
        }else{
            $money = $scoreNum;
        }

        $res = pdo_update('sudu8_page_user', array('money'=>$money), array('uniacid'=>$uniacid, 'id'=>$id));
        if($res >= 0){
            message('修改成功!', $this->createWebUrl('Userset', array('op'=>'display','opt'=>'post','id'=>$id,'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
        }
    }

    if(checksubmit('xiaofeigu')){
        $xfg_change = $_GPC['xfg_change'];
        $xfgNum = $_GPC['xfgNum'];
        $msg='修改成功';
        if($xfg_change==1){
            //增加
            $res = pdo_fetch('update'.tablename('sudu8_page_user').'set xiaofeigu=xiaofeigu+'.$xfgNum." WHERE uniacid = :uniacid and id = :id", array('uniacid'=>$uniacid, 'id'=>$id));

        }elseif($xfg_change==2){
            //减少
            $user =  pdo_fetch("SELECT * FROM ".tablename('sudu8_page_user')." WHERE uniacid = :uniacid and id = :id" , array(':uniacid' => $_W['uniacid'],':id'=> $res['cid']));
            if($user['xiaofeigu']-$xfgNum<0){
                $res = pdo_fetch('update'.tablename('sudu8_page_user').'set xiaofeigu=xiaofeigu-'.$xfgNum." WHERE uniacid = :uniacid and id = :id", array('uniacid'=>$uniacid, 'id'=>$id));
            }else{
                $msg='输入超过拥有值';
            }
        }
        message($msg, $this->createWebUrl('Userset', array('op'=>'display','opt'=>'post','id'=>$id,'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
    }


    $item = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_user') . " WHERE uniacid = :uniacid and id = :id", array(':uniacid'=>$uniacid, ':id'=>$id));
    $item['createtime'] = date('Y-m-d H:i:s', $item['createtime']);

    $this->createWebUrl('Userset', array('opt'=>'post', 'cateid'=>$_GPC['cateid'], 'chid'=>$_GPC['chid']), 'success');
}

if($opt == 'delete'){
    $id = $_GPC['id'];
    $result = pdo_delete('sudu8_page_user', array('uniacid'=>$uniacid, 'id'=>$id));
    if($result > 0){
        message('删除成功!', $this->createWebUrl('Userset', array('op'=>'display','cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
    }
}

return include self::template('web/Userset/display');