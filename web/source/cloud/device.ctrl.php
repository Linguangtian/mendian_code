<?php
/**
* [淘淘源码铺微擎系统 System] Copyright (c) 2018 www.330code.com
 */
defined('IN_IA') or exit('Access Denied');
if ($do == 'online') {
	header('Location: //we7.jcxbhm.com/app/api.php?referrer='.$_W['setting']['site']['key']);
	exit;
} elseif ($do == 'offline') {
	header('Location: //we7.jcxbhm.com/app/api.php?referrer='.$_W['setting']['site']['key'].'&standalone=1');
	exit;
} else {
}
template('cloud/device');
