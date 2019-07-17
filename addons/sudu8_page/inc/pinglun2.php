<?php
	global $_GPC, $_W;
	$uniacid = $_W['uniacid'];
	$id = intval($_GPC['id']);
	$follow = pdo_fetch("SELECT id,follow FROM ".tablename('sudu8_page_comment') ."WHERE uniacid= :uniacid and id =:id",array(':uniacid' => $uniacid,':id' => $id));
	$follow = intval($follow['follow']) + 1;
	$data = array(
		'id' => $id,
		'follow' => $follow,
		);
	$result = pdo_update('sudu8_page_comment',$data,array('id' => $id));
	return $this->result(0, 'success', array('result' => 1));