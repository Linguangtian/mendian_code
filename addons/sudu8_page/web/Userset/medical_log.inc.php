<?php


global $_GPC, $_W;
$uniacid = $_W['uniacid'];
$opt = isset(self::$_GPC["opt"])?self::$_GPC["opt"]:"display";
if($opt == 'display'){
    $user_id=$_GPC["user_id"]?$_GPC["user_id"]:0;
    $key=$_GPC["key"];
    $betime=$_GPC["betime"];
    $endtime=$_GPC["endtime"];
    $user_info = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_user')." WHERE id = :id" , array(':id' => $user_id));
    $where=' ';
    if($user_id){
        $where.=' and ml.userid='.$user_id;
    }
    if($_GPC["key"])$where.=' and ml.title like \'%'.$_GPC["key"].'%\' ';
    if($betime)$where.=' and ml.create_time > \''.$betime.'\' ';
    if($endtime)$where.=' and ml.create_time < \''.$endtime.'\' ';


    $total = pdo_fetchcolumn("SELECT count(*) FROM ".tablename('sudu8_page_medical_log')."as ml WHERE ml.uniacid = :uniacid".$where , array(':uniacid' => $_W['uniacid']));
    $pageindex = max(1, intval($_GPC['page']));
    $pagesize = 10;
    $p = ($pageindex-1) * $pagesize;
    $pager = pagination($total, $pageindex, $pagesize);
    $medicallog_list =  pdo_fetchall("SELECT ml.*,u.nickname FROM ".tablename('sudu8_page_medical_log')." as ml "
             ."left join ".tablename('sudu8_page_user')." as u on u.openid=ml.openid  WHERE ml.uniacid = :uniacid ".$where." ORDER BY ml.ml_id desc  LIMIT " . $p . "," . $pagesize, array(':uniacid' => $uniacid));



}
//添加页面 +修改页面+添加功能+修改功能
elseif ($opt == 'post'){
    $user_id=$_GPC["user_id"]?$_GPC["user_id"]:0;
    $ml_id=$_GPC["ml_id"]?$_GPC["ml_id"]:0;
    $user_info = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_user')." WHERE id = :id" , array(':id' => $user_id));
    if(!$user_info){
       message('用户不存在！', $this->createWebUrl('Userset', array('op'=>'display','opt'=>"types",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
    }

    if(!empty($ml_id)){
        $case = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_medical_log')." WHERE ml_id = :ml_id" , array(':ml_id' => $ml_id));

    }


    if (checksubmit('submit')) {
        $data = array(
            "uniacid" => $_W['uniacid'],
            "openid" => $user_info['openid'],
            "userid"=>$user_id,
            "title"=>$_GPC['title'],
            "doctor_name"=>$_GPC['doctor_name'],
            "description"=>$_GPC['description'],
            "create_time"=>date('Y-m-d H:i:s',time()),
        );
        if(empty($ml_id)){
            $res = pdo_insert('sudu8_page_medical_log', $data);
            if (!empty($res)) {
                $new_mlid = pdo_insertid();
              //  message('新增成功!',$this->createWebUrl('Userset', array('op'=>'Medical_log','opt'=>"post",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],'mlid'=>$new_mlid)), 'success');
                message('新增成功！', $this->createWebUrl('Userset', array('op'=>'display','opt'=>"types",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
            }
        }else{
            $res = pdo_update('sudu8_page_medical_log', $data, array('ml_id' => $ml_id));
            message('更新成功!');
        }

    }




 // message($title, $this->createWebUrl('Commentset', array('op'=>'duogoods','opt'=>"types",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],'id'=>$id)), 'success');
}if ($opt == 'delete') {
    $ml_id=$_GPC["ml_id"]?$_GPC["ml_id"]:0;
    if($ml_id) pdo_delete('sudu8_page_medical_log', array('ml_id' => $ml_id ,'uniacid' => $uniacid));
    message('删除成功!', $this->createWebUrl('Userset', array('op'=>'Medical_log','opt'=>"display",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],'user_id'=>$_GPC['user_id'])), 'success');
}

return include self::template('web/Userset/MedicalLog');
