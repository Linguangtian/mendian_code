<?php 

load()->func('tpl');
define("ROOT_PATH",IA_ROOT.'/addons/sudu8_page/');
global $_GPC, $_W;
        $opt = $_GPC['opt'];
        $ops = array('index', 'list','post','listpost','delete','listdelete');
        $opt = in_array($opt, $ops) ? $opt : 'index';
        $uniacid = $_W['uniacid'];
        if ($opt == 'index'){
            $list = pdo_fetchall("SELECT * FROM ".tablename('sudu8_page_art_nav') ." WHERE uniacid = :uniacid", array(':uniacid' => $uniacid));
        }
        if ($opt == 'post'){
            $id = $_GPC['id'];
            $item = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_art_nav') ." WHERE uniacid = :uniacid and id = :id", array(':uniacid' => $uniacid,':id' => $id));
            if (checksubmit('submit')) {
                if(is_null($_GPC['flag'])){
                    $_GPC['flag'] = 1;
                }
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'num' => intval($_GPC['num']),
                    'flag' => intval($_GPC['flag']),
                    'title' => $_GPC['title']
                );
                if (empty($item['id'])) {
                    pdo_insert('sudu8_page_art_nav', $data);
                } else {
                    pdo_update('sudu8_page_art_nav', $data ,array('uniacid' => $uniacid,'id' => $id));
                }
                message('导航组添加/修改成功!', $this->createWebUrl('Commentset', array('op'=>'dbcd','opt'=>"post",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],"id"=>$id)), 'success');
            }
        }
        if ($opt == 'list'){
            $list = pdo_fetchAll("SELECT a.*,b.title as name FROM ".tablename('sudu8_page_art_navlist') ." as a LEFT JOIN ".tablename('sudu8_page_art_nav')." as b on a.cid = b.id WHERE a.uniacid = :uniacid ORDER BY a.num desc", array(':uniacid' => $uniacid));
        }
        if ($opt == 'listpost'){
            $id = $_GPC['id'];
            $item = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_art_navlist') ." WHERE uniacid = :uniacid and id = :id", array(':uniacid' => $uniacid,':id' => $id));
            include ROOT_PATH.'inc/RGBToHex.php';
            $item['bgcolor'] =  RGBToHex($item['bgcolor']);

            $cate = pdo_fetchAll("SELECT * FROM ".tablename('sudu8_page_art_nav') ." WHERE flag=1 and uniacid = :uniacid ORDER BY num desc", array(':uniacid' => $uniacid));
            if (checksubmit('submit')) {
                if(is_null($_GPC['flag'])){
                    $_GPC['flag'] = 1;
                }
               
       include ROOT_PATH.'inc/hex2rgb.php';
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'title' => $_GPC['title'],
                    'cid' => $_GPC['cid'],
                    'type' => intval($_GPC['type']),
                    'url' => $_GPC['url'],
                    'flag' => intval($_GPC['flag']),
                    'num' => intval($_GPC['num']),
                    'bgcolor' => hex2rgb($_GPC['bgcolor'])
                );
                if (empty($item['id'])) {
                    pdo_insert('sudu8_page_art_navlist', $data);
                } else {
                    pdo_update('sudu8_page_art_navlist', $data ,array('uniacid' => $uniacid,'id' => $id));
                }

                message('导航添加/修改成功!', $this->createWebUrl('Commentset', array('op'=>'dbcd','opt'=>"listpost",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],"id"=>$id)), 'success');
            }
        }
        //删除
        if ($opt == 'delete') {
            $id = intval($_GPC['id']);
            $row = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_art_nav')." WHERE id = :id and uniacid = :uniacid ", array(':id' => $id ,':uniacid' => $uniacid));
            if (empty($row)) {
                message('导航组不存在或是已经被删除！');
            }
            pdo_delete('sudu8_page_art_nav', array('id' => $id ,'uniacid' => $uniacid));
            message('删除成功', $this->createWebUrl('Commentset', array('op'=>'dbcd','opt'=>"index",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
        }
        if ($opt == 'listdelete') {
            $id = intval($_GPC['id']);
            $row = pdo_fetch("SELECT * FROM ".tablename('sudu8_page_art_navlist')." WHERE id = :id and uniacid = :uniacid ", array(':id' => $id ,':uniacid' => $uniacid));
            if (empty($row)) {
                message('导航不存在或是已经被删除！');
            }
            pdo_delete('sudu8_page_art_navlist', array('id' => $id ,'uniacid' => $uniacid));
            message('删除成功', $this->createWebUrl('Commentset', array('op'=>'dbcd','opt'=>"list",'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'])), 'success');
        }
return include self::template('web/Commentset/dbcd');
_GPC["\x74\x79\160\x65"]), "\165\x72\x6c" => $_GPC["\x75\162\154"], "\x66\154\x61\147" => intval($_GPC["\146\154\x61\x67"]), "\156\165\x6d" => intval($_GPC["\156\x75\155"]), "\142\x67\143\157\154\157\162" => hex2rgb($_GPC["\x62\x67\143\x6f\x6c\157\x72"])); goto sZZdf; muWJ0: $opt = in_array($opt, $ops) ? $opt : "\151\x6e\144\x65\x78"; goto pq1CV; ZjdkV: if (!checksubmit("\x73\x75\142\x6d\151\x74")) { goto Hz7oM; } goto VkXjv; u4t6a: $opt = $_GPC["\x6f\160\164"]; goto ke9Mu; v7zJp: $list = pdo_fetchall("\123\x45\x4c\105\x43\x54\40\x2a\40\x46\122\x4f\115\x20" . tablename("\x73\165\x64\x75\70\x5f\x70\x61\x67\145\x5f\x61\162\164\137\156\x61\166") . "\40\x57\110\x45\x52\x45\x20\x75\156\x69\141\x63\x69\x64\x20\75\x20\x3a\x75\156\x69\141\x63\151\x64", array("\72\165\156\x69\141\143\151\x64" => $uniacid)); goto XkEdE; xqmSb: pdo_insert("\x73\165\x64\165\70\x5f\x70\141\x67\145\137\x61\x72\x74\x5f\156\x61\x76\154\x69\163\164", $data); goto qxx4q; IeyVK: $data = array("\165\x6e\x69\x61\143\151\x64" => $_W["\x75\156\151\141\x63\x69\x64"], "\x6e\x75\x6d" => intval($_GPC["\x6e\x75\x6d"]), "\146\x6c\x61\x67" => intval($_GPC["\x66\154\141\x67"]), "\164\x69\164\x6c\145" => $_GPC["\x74\x69\x74\154\x65"]); goto MRRzx; uuMzs: message("\345\x88\240\351\x99\xa4\xe6\x88\x90\345\x8a\x9f", $this->createWebUrl("\x43\x6f\x6d\x6d\x65\x6e\164\163\x65\164", array("\157\160" => "\x64\142\x63\x64", "\157\x70\x74" => "\x69\156\x64\x65\170", "\x63\141\164\145\151\x64" => $_GPC["\143\141\164\x65\x69\x64"], "\143\150\151\x64" => $_GPC["\143\x68\x69\144"])), "\163\x75\143\143\x65\x73\x73"); goto erXWL; Ws9VW: pdo_delete("\163\x75\144\165\x38\137\160\141\x67\145\137\141\x72\x74\137\156\141\166", array("\x69\144" => $id, "\x75\x6e\151\x61\143\151\144" => $uniacid)); goto uuMzs; VkXjv: if (!is_null($_GPC["\x66\154\141\147"])) { goto vBxfS; } goto YURqj; pq1CV: $uniacid = $_W["\165\x6e\151\141\x63\x69\144"]; goto cG2os; GXCpx: message("\xe5\210\xa0\xe9\231\xa4\xe6\210\x90\xe5\x8a\237", $this->createWebUrl("\x43\x6f\x6d\x6d\145\156\x74\163\145\x74", array("\157\x70" => "\144\142\143\144", "\x6f\x70\164" => "\154\151\163\164", "\143\x61\x74\x65\151\144" => $_GPC["\143\x61\x74\145\x69\144"], "\x63\150\x69\x64" => $_GPC["\x63\150\x69\144"])), "\x73\165\143\143\145\x73\163"); goto jhqpF; ke9Mu: $ops = array("\151\x6e\x64\x65\170", "\154\x69\163\164", "\x70\157\x73\164", "\x6c\x69\163\164\160\x6f\x73\x74", "\x64\x65\154\145\164\x65", "\154\151\163\164\x64\x65\x6c\145\x74\x65"); goto muWJ0; YNlMc: if (!($opt == "\x6c\151\x73\164")) { goto yLosl; } goto ddupF; C0Lx0: $row = pdo_fetch("\123\105\114\x45\x43\124\40\52\x20\x46\122\117\x4d\40" . tablename("\163\165\x64\165\70\137\x70\141\147\145\137\x61\x72\164\137\x6e\141\x76\x6c\151\x73\x74") . "\40\x57\x48\105\x52\x45\40\x69\x64\40\75\x20\72\x69\x64\40\141\156\144\40\165\x6e\151\x61\143\151\x64\x20\75\40\72\165\x6e\x69\141\143\151\x64\40", array("\72\x69\x64" => $id, "\x3a\165\x6e\151\141\x63\x69\144" => $uniacid)); goto xH135; dZpL8: $id = $_GPC["\x69\144"]; goto IkA0n; bf9yg: yLosl: goto m6oHt; MKVPo: $cate = pdo_fetchAll("\123\105\114\x45\103\124\x20\x2a\40\x46\x52\x4f\x4d\40" . tablename("\x73\x75\144\x75\x38\x5f\x70\x61\x67\x65\137\x61\x72\164\137\156\x61\166") . "\x20\127\x48\105\x52\105\x20\x66\x6c\141\x67\75\x31\x20\141\x6e\144\x20\165\156\x69\141\143\151\144\x20\75\x20\72\165\x6e\151\x61\143\151\144\x20\117\x52\x44\x45\x52\40\x42\x59\x20\156\165\155\x20\144\x65\163\x63", array("\72\x75\x6e\x69\x61\x63\151\144" => $uniacid)); goto ZjdkV; W5OOg: if (!($opt == "\x64\145\x6c\145\x74\x65")) { goto wdfCL; } goto X9ILe; jhqpF: NpNvo: goto MNd7g; lhbXJ: if (!checksubmit("\163\x75\x62\155\x69\x74")) { goto pdSg8; } goto ZK2i4; chD_u: Hz7oM: goto zHLzG; VcQw_: message("\345\257\xbc\350\x88\252\xe4\xb8\215\xe5\xad\230\xe5\x9c\xa8\xe6\210\x96\346\x98\257\xe5\267\xb2\347\273\217\xe8\xa2\xab\xe5\x88\240\xe9\231\xa4\357\xbc\x81"); goto gmvxQ; YURqj: $_GPC["\x66\x6c\x61\x67"] = 1; goto SEWhp; RUsdQ: eXr1K: goto WGEKH; IkA0n: $item = pdo_fetch("\x53\x45\114\105\x43\x54\x20\52\40\106\122\117\x4d\40" . tablename("\x73\x75\144\165\70\x5f\160\x61\147\x65\137\141\162\x74\x5f\x6e\x61\x76") . "\x20\x57\110\105\122\105\40\x75\x6e\x69\141\143\151\144\x20\x3d\x20\x3a\165\156\151\141\143\x69\x64\x20\x61\x6e\144\x20\151\x64\x20\x3d\40\72\151\144", array("\72\165\x6e\151\141\x63\151\144" => $uniacid, "\72\151\x64" => $id)); goto lhbXJ; TbY9O: pdo_update("\x73\x75\x64\165\x38\x5f\160\141\x67\x65\137\x61\162\164\x5f\x6e\141\x76\154\151\163\164", $data, array("\165\156\151\141\143\151\x64" => $uniacid, "\x69\144" => $id)); goto fsOFw; yxHA9: $id = intval($_GPC["\151\144"]); goto C0Lx0; erXWL: wdfCL: goto tiYNT; XkEdE: tOWWH: goto AhvA1; l9uhQ: message("\xe5\257\xbc\350\x88\xaa\347\xbb\204\344\270\x8d\xe5\xad\230\345\234\250\346\210\226\346\230\257\345\267\xb2\xe7\xbb\x8f\350\xa2\253\xe5\x88\240\351\231\244\xef\274\201"); goto MIpMF; xH135: if (!empty($row)) { goto aCILG; } goto VcQw_; MNd7g: return include self::template("\x77\145\142\57\x43\x6f\155\155\x65\156\164\x73\145\x74\57\144\x62\x63\x64");