<?php
 goto NLUzP; Cdwve: $item = pdo_fetch("\123\105\x4c\105\x43\x54\40\x2a\x20\106\122\x4f\x4d\x20" . tablename("\x73\165\x64\x75\x38\137\x70\x61\x67\x65\137\142\141\156\x6e\x65\x72") . "\x20\x57\110\x45\x52\105\40\151\144\40\75\x20\x3a\x69\x64\x20\x61\156\144\x20\165\x6e\x69\141\x63\151\x64\40\x3d\x20\72\165\156\x69\x61\x63\151\x64\x20", array("\x3a\151\x64" => $id, "\x3a\165\x6e\151\141\143\151\x64" => $uniacid)); goto JiYCG; dK_Ym: S4Xrg: goto S7ogw; voHgr: message("\345\210\240\351\x99\244\346\x88\220\xe5\x8a\x9f\41", $this->createWeburl("\x44\x69\171", array("\151\x64" => $id, "\x6f\x70\x74" => "\x62\x61\x6e\156\x65\x72", "\x6f\x70" => "\x62\x61\156\156\x65\x72", "\143\141\x74\x65\x69\144" => $_GPC["\143\141\x74\x65\x69\x64"], "\x63\150\x69\x64" => $_GPC["\143\x68\151\144"])), "\163\x75\143\x63\145\x73\x73"); goto Dx7dz; O4Cwr: lQf_i: goto qPomI; FURhq: message("\xe5\233\xbe\xe7\x89\207\xe6\267\xbb\xe5\x8a\240\346\210\x90\xe5\212\x9f\41", $this->createWeburl("\104\x69\171", array("\151\144" => $id, "\x6f\160\164" => "\142\x61\156\x6e\x65\x72", "\x6f\160" => "\142\141\x6e\156\145\x72", "\143\141\164\x65\x69\144" => $_GPC["\143\x61\164\145\x69\x64"], "\x63\150\x69\144" => $_GPC["\x63\150\x69\144"], "\151\144" => $item["\x69\144"])), "\x73\165\x63\143\x65\x73\x73"); goto u8opV; H2mME: $_GPC["\x66\x6c\141\147"] = 1; goto O4Cwr; QyQC7: $row = pdo_fetch("\x53\105\x4c\x45\103\124\40\52\40\106\122\117\x4d\x20" . tablename("\x73\165\x64\x75\70\137\160\x61\x67\x65\x5f\x62\141\156\x6e\x65\x72") . "\x20\x57\110\105\122\105\40\x69\144\40\75\40\x3a\151\x64\40\141\156\144\x20\165\x6e\151\x61\143\x69\144\x20\75\40\72\165\x6e\151\x61\143\x69\144\x20", array("\x3a\x69\144" => $id, "\72\165\156\x69\141\143\x69\x64" => $uniacid)); goto zpXC0; kZ3eE: $uniacid = $_W["\165\156\151\141\x63\151\144"]; goto nLv1b; JT9rn: $ops = array("\x62\141\x6e\156\x65\x72", "\160\x6f\163\164", "\144\145\154\145\164\145"); goto CIVeq; JiYCG: if (!checksubmit("\x73\x75\142\155\151\x74")) { goto T1yix; } goto NBJvk; SkMEO: goto VUZrF; goto CkRAC; nLv1b: $opt = $_GPC["\157\x70\164"]; goto JT9rn; u8opV: T1yix: goto R58Tv; wAWMa: if (!($opt == "\x64\145\x6c\x65\164\145")) { goto yfVvK; } goto sE94M; CIVeq: $opt = in_array($opt, $ops) ? $opt : "\x62\x61\156\156\145\162"; goto BDPKu; NLUzP: global $_GPC, $_W; goto kZ3eE; ulM34: pdo_delete("\x73\165\x64\165\70\137\x70\x61\x67\x65\137\x62\x61\156\156\145\x72", array("\x69\144" => $id, "\165\x6e\151\141\x63\151\144" => $uniacid)); goto voHgr; kJD1t: pdo_update("\163\165\144\x75\70\x5f\160\x61\147\x65\137\x62\x61\x6e\156\x65\x72", $data, array("\x69\x64" => $item["\151\x64"])); goto SkMEO; R58Tv: GCOeH: goto wAWMa; ZSOWF: $list = pdo_fetchall("\x53\105\x4c\x45\x43\124\x20\x2a\40\x46\122\117\x4d\x20" . tablename("\163\165\144\x75\x38\137\160\141\x67\145\137\142\141\156\156\x65\x72") . "\40\127\110\x45\122\105\40\165\x6e\x69\x61\143\151\x64\40\x3d\40\x3a\165\156\151\x61\143\151\x64\40\x61\x6e\144\x20\x74\x79\160\145\x20\x3d\x27\x62\x61\x6e\156\x65\162\47\40\117\122\104\x45\122\x20\102\x59\x20\156\165\x6d\x20\104\105\x53\x43\x2c\x69\x64\40\104\x45\x53\103", array("\72\x75\156\x69\141\x63\x69\x64" => $uniacid)); goto dK_Ym; qPomI: $data = array("\165\156\x69\x61\x63\151\x64" => $_W["\x75\156\151\141\x63\151\x64"], "\156\x75\x6d" => intval($_GPC["\x6e\x75\155"]), "\x74\171\160\x65" => $_GPC["\164\171\x70\145"], "\146\x6c\x61\x67" => $_GPC["\x66\x6c\x61\147"], "\x70\x69\x63" => $_GPC["\x70\x69\x63"], "\165\162\154" => trim($_GPC["\x75\162\154"]), "\144\x65\163\x63\x70" => $_GPC["\x64\145\x73\x63\160"]); goto HVlwb; b1mEG: pdo_insert("\163\165\x64\165\x38\137\160\141\147\145\x5f\142\x61\156\x6e\x65\162", $data); goto cP4uc; BDPKu: if (!($opt == "\x62\x61\156\x6e\x65\x72")) { goto S4Xrg; } goto ZSOWF; cP4uc: VUZrF: goto FURhq; HVlwb: if (empty($item["\x69\x64"])) { goto rgObL; } goto kJD1t; CkRAC: rgObL: goto b1mEG; zpXC0: if (!empty($row)) { goto SujPN; } goto veLRQ; S7ogw: if (!($opt == "\x70\x6f\x73\164")) { goto GCOeH; } goto jAitD; Dx7dz: yfVvK: goto DXO1x; sE94M: $id = intval($_GPC["\151\x64"]); goto QyQC7; jAitD: $id = intval($_GPC["\151\144"]); goto Cdwve; NBJvk: if (!is_null($_GPC["\146\154\141\147"])) { goto lQf_i; } goto H2mME; veLRQ: message("\xe5\233\276\347\x89\207\xe4\270\215\345\255\x98\345\234\250\xe6\x88\x96\346\x98\257\xe5\267\262\xe7\273\x8f\xe8\xa2\xab\345\210\240\xe9\231\244\xef\274\201"); goto U2GP3; U2GP3: SujPN: goto ulM34; DXO1x: return include self::template("\167\145\142\57\x44\x69\x79\x2f\142\x61\156\156\145\x72");