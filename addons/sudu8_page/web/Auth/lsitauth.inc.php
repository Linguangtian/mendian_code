<?php
$act = isset(self::$_GPC["act"])?self::$_GPC["act"]:"display";
if($act == 'display'){
    $sql = "SELECT * FROM ".tablename('sudu8_page_mcategory')." ORDER BY sort DESC";
    $list = pdo_fetchall($sql);

    $list = \Core\vender\Factory::array_to_tree($list,0);

    return include self::template('web/Auth/index');
}
if($act == 'adduser'){
    load()->model('user');
    $group = user_group();
    return include self::template('web/Auth/adduser');
}
if($act == 'saveadduser'){
    load()->model('user');
    global $_W,$_GPC;
    $insert_user = array(
        'username' => trim($_GPC['username']),
        'remark' => trim($_GPC['remark']),
        'password' => trim($_GPC['password']),
        'repassword' => trim($_GPC['repassword']),
        'type' => ACCOUNT_OPERATE_CLERK
    );
    if (empty($insert_user['username'])) {
        echo json_encode(['code' => 0,'message' => '必须输入用户名，格式为 1-15 位字符，可以包括汉字、字母（不区分大小写）、数字、下划线和句点。']);exit;
    }
    $operator = array();
    if (user_check(array('username' => $insert_user['username']))) {
        echo json_encode(['code' => 0,'message' => '非常抱歉，此用户名已经被注册，你需要更换注册名称！']);exit;
    }
    if (empty($insert_user['password']) || istrlen($insert_user['password']) < 8) {
        echo json_encode(['code' => 0,'message' => '必须输入密码，且密码长度不得低于8位。']);exit;
    }
    if ($insert_user['repassword'] != $insert_user['password']) {
        echo json_encode(['code' => 0,'message' => '两次输入密码不一致']);exit;
    }
    unset($insert_user['repassword']);
    $uid = user_register($insert_user);
    if (!$uid) {
        echo json_encode(['code' => 0,'message' => '注册账号失败']);exit;
    }

//    $permission_d = [
//        'uniacid' => $_W['uniacid'],'uid' => $uid,'type' => 'sudu8_page','permission' => 'sudu8_page_menu_base','url' => ''
//    ];
    $permission = $_GPC['module_permission'];
    foreach ($permission as $k => $v){
        $td = [
            'uniacid' => $_W['uniacid'],'uid' => $uid,
            'type' => $k,
            'permission' => implode('|',$v),
            'url' => ''
        ];

        pdo_insert("users_permission",$td);
    }

    pdo_insert('uni_account_users', array('uniacid' => $_W['uniacid'], 'uid' => $uid, 'role' => 'clerk'));

    pdo_insert("sudu8_page_muser",['uid' => $uid,'uniacid' => self::$_W['uniacid']]);
    return $this->returnResult(1,'注册成功');
}

if($act == 'setauth'){
    $catelists = pdo_fetchall("SELECT id,cate_name,pid FROM ".tablename('sudu8_page_mcategory')." WHERE stat = 1 ORDER BY sort DESC");
    $list = \Core\vender\Factory::array_to_trees($catelists,0);
    $uid = self::$_GPC['userid'];
    /*获取用户的默认权限*/
    $auth = pdo_get("sudu8_page_mauth",array('userid' => $uid,'uniacid' => self::$_W['uniacid']));
    if(!empty($auth['parent'])) $auth['parent'] = explode(',',$auth['parent']);
    if(!empty($auth['child'])) $auth['child'] = explode(',',$auth['child']);
    if(!empty($auth['mini'])) $auth['mini'] = explode(',',$auth['mini']);
    return include self::template('web/Auth/setauth');
}

if($act == 'savesetauth'){
    $data = $_POST;
    if(count($data['parent']) > 0){
        $data['parent'] = implode(',',$data['parent']);
    }

    if(count($data['child']) > 0){
        $data['child'] = implode(',',$data['child']);
    }

    if(count($data['mini']) > 0){
        $data['mini'] = implode(',',$data['mini']);
    }

    $data['userid'] = isset($data['uid'])?$data['uid']:0;
    unset($data['uid']);
    if($data['userid'] == 0){
        return $this->returnResult(0,'参数错误');
    }

    $idata = pdo_get("sudu8_page_mauth",array('userid' => $data['userid']));
    if($idata && $idata['userid'] == $data['userid']){
        $uid = $data['userid'];unset($data['userid']);
        pdo_update("sudu8_page_mauth",$data,array('userid' => $uid,'uniacid' => self::$_W['uniacid']));
        cache_clean();
        $sql = "SELECT * FROM ".tablename('sudu8_page_muser')." WHERE `uid` = ".$data['userid']." AND `uniacid` = ".self::$_W['uniacid'];
        if(!pdo_fetch($sql)){
            pdo_insert("sudu8_page_muser",['uid' => $uid,'uniacid' => self::$_W['uniacid']]);
        }
        return $this->returnResult(1,'更新成功');
    }else{
        $data['uniacid'] = self::$_W['uniacid'];
        $result = pdo_insert("sudu8_page_mauth",$data);
        cache_clean();
        $sql = "SELECT * FROM ".tablename('sudu8_page_muser')." WHERE `uid` = ".$data['userid']." AND `uniacid` = ".self::$_W['uniacid'];
        if(!pdo_fetch($sql)){
            pdo_insert("sudu8_page_muser",['uid' => $data['userid'],'uniacid' => self::$_W['uniacid']]);
        }
        return $this->returnResult($result?1:0,$result?'操作成功':'操作失败');
    }

}

