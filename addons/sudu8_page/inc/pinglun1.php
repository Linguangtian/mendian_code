<?php



	global $_GPC, $_W;
		$uniacid = $_W['uniacid'];
		$id = intval($_GPC['id']);
		$flag = intval($_GPC['comms']);
		if($flag==1){
			$comment = pdo_fetchAll("SELECT distinct  a.id,a.text,a.createtime,a.follow,b.avatar,b.nickname FROM ".tablename('sudu8_page_comment')." as a LEFT JOIN ".tablename('sudu8_page_user')." as b on a.openid = b.openid and a.uniacid = b.uniacid WHERE a.uniacid = :uniacid and a.aid = :id and a.flag = 1 order by a.follow desc,a.id desc" , array(':uniacid' => $uniacid,':id' => $id));
		}else{
			$comment = pdo_fetchAll("SELECT distinct  a.id,a.text,a.createtime,a.follow,b.avatar,b.nickname FROM ".tablename('sudu8_page_comment')." as a LEFT JOIN ".tablename('sudu8_page_user')." as b on a.openid = b.openid and a.uniacid = b.uniacid WHERE a.uniacid = :uniacid and a.aid = :id and a.flag != 2 order by a.follow desc,a.id desc" , array(':uniacid' => $uniacid,':id' => $id));
		}
		if($comment){
			foreach ($comment as $k => $v) {
				$comment[$k]['ctime'] = date('Y年m月d日 H:i:s',$v['createtime']);
			}
		}
		return $this->result(0, 'success', $comment);