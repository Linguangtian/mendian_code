<?php
 goto jK_YM; FesXx: $pageindex = max(1, intval($_GPC["\x70\x61\147\145"])); goto c8IVM; Go_gq: $pagesize = 10; goto XWwkS; xAsMk: $pager = pagination($total, $pageindex, $pagesize); goto nblWs; dgfES: fAA_4: goto T7ow6; d8Q4i: $uniacid = $_W["\x75\x6e\x69\141\143\x69\x64"]; goto Dzhwu; A2wBY: $pager = pagination($total, $pageindex, $pagesize); goto UqBD5; qxZ7a: global $_GPC, $_W; goto d8Q4i; T0Aa7: $pager = pagination($total, $pageindex, $pagesize); goto b1q9s; ALNvY: dYOQr: goto OKDtd; xDmpe: $pagesize = 10; goto ORh7z; c8IVM: $pagesize = 10; goto oySAU; pJB6Q: if (!($opt == "\x73\160\145\x6e\x64")) { goto rCSSj; } goto x6ECk; jK_YM: define("\110\124\x54\x50\123\110\117\x53\x54", $_W["\x61\164\x74\141\x63\x68\165\162\154"]); goto qxZ7a; qQDkV: $pager = pagination($total, $pageindex, $pagesize); goto i8pQ7; ARfPZ: $all = pdo_fetchall("\123\x45\x4c\105\103\x54\x20\x69\x64\40\106\x52\x4f\x4d\40" . tablename("\x73\165\144\165\x38\x5f\160\x61\x67\x65\137\155\x6f\x6e\x65\171") . "\x20\40\x57\x48\x45\122\x45\x20\x75\156\x69\x61\143\x69\144\x20\75\40\72\165\156\x69\x61\x63\x69\x64\x20\x61\x6e\x64\x20\x73\143\x6f\x72\145\40\x3e\x20\60\x20\x6f\162\x64\x65\x72\x20\x62\x79\40\x63\162\145\141\x74\164\x69\x6d\x65\x20\144\145\x73\x63", array("\x3a\165\x6e\x69\141\143\x69\x64" => $uniacid)); goto gmkqX; i8pQ7: $scorelist = pdo_fetchall("\123\x45\x4c\105\x43\124\x20\x61\56\x2a\x2c\142\x2e\x61\x76\x61\164\141\162\x2c\x62\56\x6e\151\x63\x6b\x6e\x61\155\145\x20\106\x52\x4f\x4d\40" . tablename("\163\165\144\x75\x38\x5f\160\141\147\145\x5f\155\x6f\x6e\x65\x79") . "\40\141\163\40\x61\40\114\105\x46\124\x20\x4a\x4f\x49\x4e\x20" . tablename("\163\165\144\x75\70\137\160\141\147\x65\x5f\165\163\x65\x72") . "\x20\141\163\x20\142\x20\157\x6e\40\141\x2e\x75\151\144\x20\x3d\40\x62\56\151\144\x20\x20\127\x48\105\x52\105\40\141\x2e\165\x6e\x69\141\x63\151\x64\x20\x3d\40\x3a\x75\x6e\x69\141\x63\151\144\x20\141\x6e\x64\x20\141\56\163\x63\157\x72\145\x20\x3e\40\x30\40\141\156\x64\x20\141\56\x74\171\160\145\x20\75\x20\47\x61\x64\x64\47\40\157\162\144\x65\162\x20\142\171\x20\x61\x2e\x63\x72\x65\141\x74\164\x69\155\145\40\144\x65\163\143\40\x4c\111\x4d\x49\x54\40" . $p . "\x2c" . $pagesize, array("\x3a\165\x6e\151\141\x63\x69\x64" => $uniacid)); goto IbJAM; IbJAM: foreach ($scorelist as $k => &$v) { $v["\143\162\145\x61\164\164\151\x6d\x65"] = date("\131\x2d\155\55\144\40\x48\72\151\x3a\163", $v["\x63\x72\x65\141\x74\x74\x69\155\x65"]); Asxzl: } goto gPmoI; OpckL: $all = pdo_fetchall("\x53\105\114\x45\x43\x54\40\151\144\x20\x46\122\117\115\x20" . tablename("\x73\x75\144\165\70\137\160\x61\x67\145\137\155\x6f\156\x65\171") . "\x20\40\x57\110\x45\x52\105\x20\165\156\151\141\x63\151\x64\40\x3d\x20\72\x75\156\x69\x61\x63\x69\144\x20\141\156\x64\40\163\143\157\x72\145\40\x3e\x20\x30\40\x61\x6e\x64\40\164\171\160\145\40\x3d\x20\47\144\x65\154\x27\x20\x61\156\x64\40\155\145\163\163\x61\x67\145\40\75\40\x27\350\256\xba\345\235\x9b\xe4\xbf\xa1\xe6\x81\257\xe5\217\221\xe5\xb8\x83\47\40\x6f\x72\144\145\162\x20\x62\x79\x20\x63\x72\x65\x61\x74\x74\x69\155\x65\x20\144\x65\163\x63", array("\72\x75\156\x69\x61\x63\x69\144" => $uniacid)); goto JRQGv; fUaw9: $pageindex = max(1, intval($_GPC["\x70\141\147\145"])); goto IwjSe; Dzhwu: $opt = $_GPC["\157\160\x74"]; goto mAylD; ahv0h: $pager = pagination($total, $pageindex, $pagesize); goto MaEPn; ANPYH: if (!($opt == "\x66\157\162\165\x6d")) { goto Q5lj5; } goto OpckL; DYo52: $all = pdo_fetchall("\123\x45\x4c\105\103\124\x20\151\144\40\106\122\x4f\x4d\x20" . tablename("\163\165\144\165\70\x5f\x70\141\x67\x65\137\155\157\x6e\145\171") . "\x20\40\x57\x48\x45\122\x45\x20\165\156\151\x61\143\151\144\x20\75\x20\x3a\x75\x6e\151\141\143\151\x64\40\141\x6e\x64\40\x73\143\x6f\x72\x65\40\76\x20\60\x20\x61\156\144\40\x74\171\x70\145\40\75\x20\47\144\145\x6c\47\x20\x61\x6e\144\40\157\x72\144\x65\x72\x69\x64\40\x3d\x20\x31\x30\x30\x31\x20\x20\x6f\162\144\x65\x72\40\142\x79\40\x63\x72\x65\141\x74\x74\151\155\145\40\x64\145\163\143", array("\72\165\x6e\x69\141\x63\x69\x64" => $uniacid)); goto qeDow; x6ECk: $all = pdo_fetchall("\x53\105\114\105\x43\124\x20\x69\144\40\x46\x52\117\x4d\40" . tablename("\x73\x75\144\x75\x38\137\160\141\147\145\x5f\155\157\x6e\x65\x79") . "\x20\x20\x57\110\105\x52\105\x20\165\156\151\x61\143\x69\144\40\75\40\x3a\x75\156\x69\141\143\x69\x64\x20\141\156\x64\40\163\x63\x6f\x72\145\40\x3e\x20\x30\40\x61\156\x64\40\164\x79\x70\x65\40\x3d\x20\47\144\145\154\47\40\141\156\144\x20\155\145\x73\x73\x61\147\145\40\75\x20\47\xe6\266\210\xe8\xb4\271\346\211\xa3\xe9\207\x91\xe9\222\xb1\47\x20\157\x72\144\x65\x72\x20\x62\x79\40\x63\x72\x65\141\x74\x74\151\x6d\145\40\x64\145\163\143", array("\72\165\x6e\x69\141\x63\151\x64" => $uniacid)); goto MaTT7; V6dLY: $pageindex = max(1, intval($_GPC["\160\141\147\145"])); goto j9VsY; Iqg5T: BS759: goto pJB6Q; URAQ4: if (!($opt == "\163\x74\157\162\x65")) { goto vD8Nv; } goto DYo52; Nwc05: $pageindex = max(1, intval($_GPC["\160\141\147\x65"])); goto xDmpe; MaEPn: $scorelist = pdo_fetchall("\x53\x45\x4c\105\103\x54\40\x61\56\52\54\x62\x2e\141\x76\x61\164\x61\162\54\142\56\x6e\x69\143\x6b\x6e\141\155\145\x20\106\x52\x4f\x4d\x20" . tablename("\x73\165\144\x75\70\x5f\160\141\147\145\x5f\x6d\x6f\156\x65\171") . "\40\x61\x73\x20\x61\x20\114\x45\x46\124\40\x4a\x4f\111\x4e\x20" . tablename("\x73\165\144\165\70\x5f\160\141\147\x65\x5f\165\x73\145\162") . "\x20\141\163\40\x62\40\x6f\156\x20\x61\56\165\x69\144\40\x3d\40\142\56\151\x64\x20\40\127\110\105\122\105\x20\x61\x2e\165\x6e\x69\141\x63\x69\x64\x20\75\x20\72\x75\156\x69\141\x63\x69\144\40\x61\x6e\x64\40\141\56\163\143\x6f\162\x65\40\76\40\x30\x20\141\x6e\x64\40\x61\56\164\x79\160\145\x20\x3d\x20\47\144\x65\x6c\47\40\x61\156\144\40\155\x65\163\163\x61\x67\x65\x20\x3d\x20\x27\xe8\xae\272\xe5\235\233\xe4\277\xa1\346\201\257\345\217\221\xe5\xb8\203\47\x20\157\x72\x64\145\162\x20\x62\x79\x20\x61\x2e\x63\162\x65\x61\164\x74\x69\155\145\40\144\145\x73\143\x20\114\111\x4d\x49\x54\40" . $p . "\x2c" . $pagesize, array("\72\x75\156\x69\x61\x63\151\144" => $uniacid)); goto z6mhM; UgeNC: $all = pdo_fetchall("\123\x45\114\105\103\x54\40\151\144\x20\106\122\x4f\115\x20" . tablename("\163\165\x64\165\70\137\160\141\147\145\x5f\155\x6f\x6e\145\x79") . "\x20\40\127\110\105\122\105\x20\165\x6e\151\141\x63\151\x64\x20\x3d\40\72\x75\x6e\x69\141\x63\x69\x64\x20\x61\156\x64\x20\x73\x63\157\162\145\x20\x3e\40\60\40\141\156\x64\x20\x74\171\x70\145\40\x3d\x20\x27\141\144\144\x27\x20\157\162\x64\x65\162\40\142\x79\40\143\162\145\141\x74\x74\x69\x6d\x65\x20\144\145\163\x63", array("\72\165\x6e\151\x61\x63\x69\x64" => $uniacid)); goto PLwTn; OKDtd: if (!($opt == "\147\x65\x74")) { goto BS759; } goto UgeNC; lY4g2: MrKMo: goto fmelA; AeBcV: Q5lj5: goto MphNj; pu_K4: foreach ($scorelist as $k => &$v) { $v["\143\x72\x65\141\x74\164\x69\155\x65"] = date("\131\55\x6d\55\x64\x20\x48\72\151\x3a\x73", $v["\143\x72\x65\x61\x74\x74\x69\x6d\145"]); uFihG: } goto dgfES; b1q9s: $scorelist = pdo_fetchall("\123\105\x4c\105\103\124\x20\141\x2e\52\x2c\142\56\141\166\x61\x74\x61\x72\54\142\x2e\x6e\151\143\153\156\141\x6d\145\40\x46\x52\x4f\115\x20" . tablename("\x73\x75\144\165\x38\x5f\x70\141\x67\x65\x5f\x6d\x6f\156\x65\x79") . "\40\x61\163\40\141\x20\114\105\106\124\40\x4a\117\111\116\40" . tablename("\163\x75\144\165\x38\137\160\141\x67\145\137\165\x73\x65\162") . "\x20\x61\163\40\x62\x20\157\x6e\40\x61\x2e\165\x69\144\x20\75\x20\x62\56\151\144\x20\x20\127\x48\105\122\105\40\x61\56\x75\156\x69\x61\x63\x69\144\40\75\40\x3a\x75\156\151\x61\x63\151\144\40\141\156\x64\40\x61\56\163\x63\x6f\162\x65\x20\76\x20\60\x20\x61\x6e\144\x20\x61\56\x74\171\x70\x65\x20\x3d\40\47\x64\x65\x6c\x27\x20\141\156\144\x20\x6d\x65\163\163\141\147\x65\x20\x3d\x20\x27\346\266\210\xe8\xb4\xb9\xe6\x89\243\xe9\x87\x91\xe9\222\261\x27\40\x6f\x72\x64\x65\x72\40\x62\x79\40\141\x2e\x63\x72\x65\x61\164\x74\151\x6d\145\40\x64\x65\163\x63\40\x4c\111\115\x49\x54\40" . $p . "\54" . $pagesize, array("\x3a\165\156\151\141\x63\x69\x64" => $uniacid)); goto pu_K4; H217f: $p = ($pageindex - 1) * $pagesize; goto xAsMk; tpr5k: $p = ($pageindex - 1) * $pagesize; goto ahv0h; XWwkS: $p = ($pageindex - 1) * $pagesize; goto A2wBY; JRQGv: $total = count($all); goto V6dLY; IwjSe: $pagesize = 10; goto H217f; JE1WN: XRk2P: goto ALNvY; j9VsY: $pagesize = 10; goto tpr5k; wrsny: foreach ($scorelist as $k => &$v) { $v["\143\162\145\141\164\x74\x69\x6d\x65"] = date("\x59\55\x6d\x2d\x64\x20\110\x3a\x69\x3a\x73", $v["\x63\162\145\141\164\164\x69\155\x65"]); QDe9k: } goto JE1WN; PLwTn: $total = count($all); goto FesXx; T7ow6: rCSSj: goto URAQ4; ORh7z: $p = ($pageindex - 1) * $pagesize; goto T0Aa7; nblWs: $scorelist = pdo_fetchall("\123\x45\x4c\105\x43\x54\x20\141\56\x2a\54\x62\56\x61\166\141\164\141\x72\x2c\142\56\x6e\x69\x63\153\x6e\141\155\145\x20\106\x52\x4f\x4d\x20" . tablename("\x73\165\144\x75\x38\x5f\x70\141\x67\145\x5f\x6d\157\x6e\145\171") . "\40\141\163\40\141\40\114\105\x46\x54\40\x4a\117\x49\116\40" . tablename("\163\x75\144\165\x38\x5f\x70\x61\147\x65\137\x75\x73\x65\x72") . "\40\x61\163\40\x62\40\157\156\40\141\x2e\x75\151\x64\x20\x3d\40\142\x2e\x69\144\x20\x20\x57\x48\x45\122\105\40\141\56\x75\156\151\141\x63\151\144\40\x3d\40\72\x75\156\151\x61\143\x69\x64\x20\141\156\144\40\141\x2e\x73\143\157\162\x65\x20\76\40\x30\x20\40\157\162\144\145\162\40\x62\x79\x20\141\x2e\143\x72\145\141\164\x74\x69\x6d\x65\40\144\145\163\x63\x20\114\x49\115\x49\124\40" . $p . "\x2c" . $pagesize, array("\x3a\165\156\151\141\143\x69\x64" => $uniacid)); goto wrsny; z6mhM: foreach ($scorelist as $k => &$v) { $v["\143\162\x65\x61\x74\x74\x69\x6d\145"] = date("\131\x2d\x6d\x2d\x64\40\110\72\151\72\x73", $v["\x63\162\145\x61\164\x74\x69\x6d\145"]); EwbnI: } goto RVt0U; MaTT7: $total = count($all); goto Nwc05; kvHwd: $pageindex = max(1, intval($_GPC["\160\141\x67\145"])); goto Go_gq; qeDow: $total = count($all); goto kvHwd; gPmoI: NKCYs: goto Iqg5T; oySAU: $p = ($pageindex - 1) * $pagesize; goto qQDkV; llCpk: $opt = in_array($opt, $ops) ? $opt : "\x64\x69\163\x70\154\141\171"; goto WY5jv; mAylD: $ops = array("\144\x69\x73\x70\154\141\x79", "\x67\x65\x74", "\x73\x70\x65\156\x64", "\163\x74\157\x72\x65", "\146\x6f\x72\165\155"); goto llCpk; RVt0U: F0L6w: goto AeBcV; fmelA: vD8Nv: goto ANPYH; gmkqX: $total = count($all); goto fUaw9; WY5jv: if (!($opt == "\x64\x69\163\x70\154\141\171")) { goto dYOQr; } goto ARfPZ; XddaP: foreach ($scorelist as $k => &$v) { $v["\x63\x72\x65\x61\164\x74\151\x6d\145"] = date("\x59\x2d\155\55\144\40\110\72\151\x3a\163", $v["\143\x72\145\x61\164\x74\x69\155\x65"]); HKmFy: } goto lY4g2; UqBD5: $scorelist = pdo_fetchall("\x53\x45\x4c\105\x43\124\40\x61\x2e\x2a\x2c\x62\x2e\x61\x76\141\164\x61\162\x2c\x62\56\156\151\x63\153\x6e\x61\x6d\145\40\x46\122\x4f\x4d\x20" . tablename("\163\x75\x64\x75\x38\137\160\x61\x67\x65\x5f\x6d\157\x6e\145\x79") . "\x20\141\x73\40\141\x20\114\x45\106\124\x20\112\117\x49\x4e\40" . tablename("\x73\165\x64\x75\x38\137\160\x61\147\145\x5f\x75\x73\x65\x72") . "\40\141\163\x20\x62\x20\157\156\40\141\56\x75\x69\144\x20\75\x20\x62\x2e\x69\x64\40\x20\x57\x48\105\x52\x45\40\141\56\165\156\151\x61\143\151\144\40\75\40\72\165\156\x69\141\x63\151\144\40\141\x6e\144\40\x61\56\163\x63\157\162\145\x20\76\40\x30\x20\141\x6e\144\x20\141\56\164\x79\x70\x65\40\x3d\40\x27\144\145\x6c\x27\40\141\156\144\x20\x6f\x72\144\x65\162\x69\144\x20\x3d\40\x31\x30\x30\61\40\x6f\x72\144\145\162\40\142\x79\x20\141\x2e\143\162\x65\x61\164\x74\x69\x6d\145\40\x64\x65\163\143\40\x4c\111\x4d\x49\124\x20" . $p . "\54" . $pagesize, array("\72\165\156\x69\x61\143\151\x64" => $uniacid)); goto XddaP; MphNj: return include self::template("\x77\145\142\57\125\163\x65\162\163\x65\164\57\x6d\157\156\x65\171\x74\x75\x72\156\157\166\x65");