<?php
 goto uQz5t; eqMmK: $listV = pdo_fetchall("\x53\x45\x4c\x45\x43\x54\40\52\x20\106\122\117\115\x20" . tablename("\163\x75\x64\165\x38\137\160\x61\147\145\x5f\143\x61\164\145") . "\x20\127\x48\x45\122\x45\40\x75\x6e\151\x61\143\151\x64\40\x3d\40\x3a\165\156\x69\141\143\x69\144\x20\x61\156\x64\40\143\x69\144\x20\x3d\40\72\143\x69\x64\x20\x4f\122\x44\105\x52\40\x42\x59\x20\x6e\165\155\40\x44\x45\123\103\54\x69\x64\x20\x44\105\x53\103", array("\x3a\165\x6e\x69\x61\x63\x69\x64" => $uniacid, "\x3a\x63\151\x64" => 0)); goto SnqxR; JUd12: $cateid = $_GPC["\x63\x61\x74\x65\151\x64"]; goto CrqJJ; CrqJJ: $chid = $_GPC["\143\x68\x69\x64"]; goto eqMmK; SnqxR: $listAll = array(); goto ACc2B; uQz5t: global $_GPC, $_W; goto IDRL1; H2rol: qyNuZ: goto ZxWBY; IDRL1: $uniacid = $_W["\165\x6e\x69\x61\x63\151\144"]; goto JUd12; ACc2B: foreach ($listV as $key => $val) { goto VLa7N; VLa7N: $id = intval($val["\x69\144"]); goto lIMIY; cjMn4: $listP["\x64\141\x74\141"] = $listS; goto S5GDZ; FySpw: gXr98: goto r_hOo; S5GDZ: array_push($listAll, $listP); goto FySpw; Rjdzz: $listS = pdo_fetchAll("\123\105\114\105\103\x54\40\x2a\40\106\122\117\115\40" . tablename("\163\x75\x64\x75\x38\x5f\160\x61\147\x65\137\143\x61\x74\x65") . "\40\x57\x48\x45\122\105\x20\x75\156\x69\x61\x63\x69\144\x20\x3d\x20\x3a\x75\156\151\x61\x63\151\x64\40\141\156\144\40\143\151\144\x20\x3d\x20\72\151\x64\40\117\122\x44\105\x52\40\102\131\x20\156\x75\x6d\40\x44\x45\x53\x43\54\x69\x64\x20\x44\105\x53\x43", array("\x3a\x75\x6e\151\141\x63\151\144" => $uniacid, "\72\x69\x64" => $id)); goto cjMn4; lIMIY: $listP = pdo_fetch("\x53\105\x4c\105\x43\x54\40\52\x20\x46\x52\x4f\115\40" . tablename("\x73\x75\144\165\70\x5f\x70\141\147\x65\x5f\143\x61\x74\145") . "\x20\127\110\105\122\105\x20\x75\156\x69\141\x63\151\144\40\75\x20\72\165\x6e\151\x61\143\151\144\40\x61\156\144\40\151\144\40\75\x20\x3a\x69\x64\40\x4f\x52\x44\105\122\40\102\x59\40\156\165\x6d\40\x44\x45\x53\103\x2c\x69\x64\x20\104\105\123\x43", array("\72\x75\156\x69\141\x63\x69\x64" => $uniacid, "\72\151\x64" => $id)); goto Rjdzz; r_hOo: } goto H2rol; ZxWBY: return include self::template("\x77\145\x62\x2f\103\x61\164\x65\57\144\151\163\160\x6c\141\x79");