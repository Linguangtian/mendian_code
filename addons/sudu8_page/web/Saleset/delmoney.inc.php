<?php
 goto nZEiw; iSvIY: goto VShP6; goto IE80h; r_hc2: xd30G: goto phJwq; WsyDv: VShP6: goto U_Kau; PLNFr: $i++; goto B97ux; U_Kau: if (!checksubmit("\163\x75\142\155\x69\x74")) { goto M2OXs; } goto fHm7H; Ju_s1: iLsVZ: goto MekPF; Aq68F: v_J07: goto pdnm5; RqhNt: $num = 0; goto iSvIY; pfpPm: $moneyoff = pdo_fetchall("\x53\105\114\105\103\x54\40\x2a\40\106\122\117\x4d\x20" . tablename("\163\x75\x64\x75\x38\137\160\141\x67\x65\x5f\x6d\x6f\156\145\171\157\146\146") . "\x20\127\x48\x45\122\x45\40\x75\156\x69\x61\143\151\x64\x20\x3d\40\x3a\165\156\x69\141\143\151\144\x20\157\x72\144\145\x72\40\x62\x79\40\x72\x65\x61\143\150\40\x61\163\x63", array("\x3a\165\156\x69\x61\143\x69\x64" => $uniacid)); goto q5JU4; phJwq: message("\344\xbf\235\345\xad\230\xe6\210\220\xe5\x8a\237\41", $this->createWebUrl("\x53\x61\x6c\145\x73\145\164", array("\x6f\160" => "\144\x65\154\x6d\157\156\145\171", "\x63\x61\164\x65\151\144" => $_GPC["\143\141\164\145\x69\x64"], "\x63\x68\151\144" => $_GPC["\x63\150\x69\x64"])), "\x73\x75\143\x63\x65\x73\x73"); goto L9Ipe; B97ux: goto v_J07; goto iiwSB; MekPF: VILAW: goto PLNFr; uMnHJ: $num = count($moneyoff); goto WsyDv; nZEiw: global $_GPC, $_W; goto BYJMC; BYJMC: $uniacid = $_W["\165\x6e\x69\x61\143\151\144"]; goto pfpPm; ZNXCp: $i = 1; goto Aq68F; PjvXs: if (!($_GPC["\156\165\155"] > 0)) { goto xd30G; } goto ZNXCp; q5JU4: if ($moneyoff) { goto AJ3fB; } goto RqhNt; pdnm5: if (!($i <= $_GPC["\156\x75\x6d"])) { goto ZGSou; } goto tyRgI; L7Kc8: $data = array("\165\x6e\x69\x61\143\x69\x64" => $uniacid, "\162\145\x61\x63\x68" => $_GPC["\162\145\141\x63\x68" . $i], "\144\145\154" => $_GPC["\144\x65\154" . $i]); goto p66LT; IE80h: AJ3fB: goto uMnHJ; tyRgI: if (!(!empty($_GPC["\x72\145\141\143\150" . $i]) && !empty($_GPC["\x64\x65\x6c" . $i]))) { goto iLsVZ; } goto L7Kc8; L9Ipe: M2OXs: goto exd2N; p66LT: pdo_insert("\163\x75\144\x75\x38\137\160\x61\x67\x65\x5f\155\x6f\156\x65\x79\157\x66\146", $data); goto Ju_s1; fHm7H: pdo_delete("\163\x75\x64\x75\70\137\x70\x61\x67\145\137\155\157\156\x65\x79\157\146\146", array("\x75\156\151\x61\143\x69\x64" => $uniacid)); goto PjvXs; iiwSB: ZGSou: goto r_hc2; exd2N: return include self::template("\167\145\142\x2f\x53\141\x6c\x65\x73\145\x74\57\x64\145\x6c\155\157\156\145\x79");