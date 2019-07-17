<?php
//base
       global $_GPC, $_W;
        $uniacid = $_W['uniacid'];
        $op = $_GPC['op'];
        $ops = array('display', 'post', 'delete');
        $op = in_array($op, $ops) ? $op : 'display';
        //多门店列表
        if ($op == 'display'){
            $_W['page']['title'] = '多门店管理';
            $store =  pdo_fetchall("SELECT * FROM ".tablename('sudu8_page_store')." WHERE uniacid = :uniacid ORDER BY id DESC" , array(':uniacid' => $uniacid));
        }
        if ($op == 'post'){
            $id = intval($_GPC['id']);
            $item = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_store')." WHERE id = :id and uniacid = :uniacid ", array(':id' => $id ,':uniacid' => $uniacid));

            $item['thumb'] =  $item['thumb'];

            $item['text'] = unserialize($item['text']);
            if (checksubmit('submit')) {

                if(!$_GPC['title']){
                    message('多门店不能为空！');
                }
                if($_GPC['score']){
                    if($_GPC['score']<=0){
                        $_GPC['score']=1;
                    }
                    if($_GPC['score']>5){
                        $_GPC['score']=5;
                    }
                }
                $data = array(
                    "uniacid" => $uniacid,
                    "thumb" => $_GPC['thumb'],
                    "logo" => $_GPC['logo'],
                    "title" => $_GPC['title'],
                    "lat" => $_GPC['lat'],
                    "lon" => $_GPC['lon'],  
                    "tel" => $_GPC['tel'], 
                    "times" => $_GPC['times'], 
                    "title1" => $_GPC['title1'],
                    "title2" => $_GPC['title2'],
                    "descp" => $_GPC['descp'],
                    "country" => $_GPC['country'],
                    "text" => serialize($_GPC['text']),
                    "dateline" => time()         
                );
                if(empty($id)){
                    pdo_insert('sudu8_page_store', $data);
                }else{
                    pdo_update('sudu8_page_store', $data, array('id' => $id ,'uniacid' => $uniacid));
                }   
                message('多门店 添加/修改 成功!', $this->createWebUrl('store', array('op'=>'display')), 'success');
            }
        }
        //删除
        if ($op == 'delete') {
            $id = intval($_GPC['id']);
            $row = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_store')." WHERE id = :id and uniacid = :uniacid ", array(':id' => $id ,':uniacid' => $uniacid));
            if (empty($row)) {
                message('门店不存在或是已经被删除！');
            }
            pdo_delete('sudu8_page_store', array('id' => $id ,'uniacid' => $uniacid));
            message('删除成功!', $this->createWebUrl('store', array('op'=>'display')), 'success');
        }
        include $this->template('store');
