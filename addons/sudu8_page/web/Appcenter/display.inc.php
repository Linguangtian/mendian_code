<?php
$_W = self::$_W;
$act = isset(self::$_GPC['type']) ? self::$_GPC['type'] : self::$_GPC['act'];
if($act == 'mini'){
    $children = [];

    $plugin = self::$_GPC['plugin'];

    /*默认超级权限*/
    $sql = "SELECT name,title AS cate_name FROM ".tablename('modules')." WHERE `name` = '{$plugin}'";

    $children = pdo_fetchall($sql);

    $cname = $children[0]['cate_name'];

    foreach ($children as $k => $v){
        $children[$k]['type'] = 1;
        $sql = "SELECT title as cate_name,do as opt FROM ".tablename('modules_bindings')." WHERE `entry` = 'menu' AND `module` = '{$v['name']}'";
        $children[$k]['child'] = pdo_fetchall($sql);
    }
}

$ss = (int)cache_load($userid.'role_stat');
$status = $ss ? $ss : self::$_W['user']['type'];
$userid = self::$_W['user']['uid'];
if($status == 3){
    /*检测是否旧数据*/
    $sql = "SELECT * FROM ".tablename('sudu8_page_muser')." WHERE `uid` = ".$userid." AND `uniacid` = ".self::$_W['uniacid'];
    $olduser = pdo_fetch($sql);
    if(!$olduser){
        cache_write($userid.'role_stat',0);
        $status = 0;
    }else{
        cache_write($userid.'role_stat',1);
        $status = 1;
    }
}else{
    cache_write($userid.'role_stat',0);
    $status = 0;
}
if($status == 0){
    $frames = buildframes(FRAME);_calc_current_frames($frames);
    $plist = $frames['section']['platform_module_menu']['plugin_menu']['menu'];
}else{
    $sql = "SELECT mini FROM ".tablename('sudu8_page_mauth')." WHERE `userid` = {$userid} AND `uniacid` = ".self::$_W['uniacid'];
    $data = pdo_fetch($sql);
    $mini = explode(',',$data['mini']);
    if($mini){
        $str = '';
        foreach ($mini as $v){
            $str .= "'".$v."',";
        }
        $sql = "SELECT title,name as cate_name FROM ".tablename('modules')." WHERE `name` IN (".rtrim($str,',').")";
        $list = pdo_fetchall($sql);

        foreach ($list as $k => $v){
            $plist[$v['title']] = [
                'title' => $v['title'],
                'icon' => self::$_W['siteroot']."/addons/".$v['cate_name']."/icon.jpg",
                'cate_name' =>$v['cate_name'],
                'url' => self::$_W['siteroot']."/web/index.php?c=home&a=welcome&do=ext&m={$v['cate_name']}&version_id=".self::$_GPC['version_id'],
            ];
        }
    }
}


return include self::template('web/Appcenter/display');