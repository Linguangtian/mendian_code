<?php
 goto zbcxT; fHq2G: $_W["\160\x61\147\x65"]["\x74\151\x74\x6c\x65"] = "\345\244\232\xe8\247\204\346\xa0\274\xe5\x95\206\xe5\223\201\xe8\xae\276\347\xbd\xae"; goto BEs9H; BEs9H: $yunfeidata = pdo_fetch("\x53\105\x4c\105\103\124\x20\x2a\40\x46\x52\x4f\115\x20" . tablename("\x73\165\x64\x75\70\137\x70\x61\147\145\137\x64\x75\x6f\137\160\x72\157\144\x75\x63\164\x73\137\171\165\156\146\145\151") . "\40\127\110\105\x52\105\40\165\156\x69\141\x63\x69\144\40\75\40\x3a\165\x6e\151\x61\143\151\144", array("\x3a\165\156\x69\x61\143\x69\144" => $_W["\x75\156\x69\x61\143\x69\x64"])); goto DcC9Z; zf1ow: $data["\x75\156\x69\x61\x63\x69\x64"] = $uniacid; goto nYHVd; OD8HK: $data = array("\171\x66\145\x69" => $_GPC["\x79\165\156\x66\x65\151"], "\x62\171\x6f\x75" => $_GPC["\x62\141\x6f\x79\x6f\165"]); goto BgjVq; PJwJ4: $uniacid = $_W["\165\x6e\151\x61\x63\x69\x64"]; goto fHq2G; GViQ3: goto Z4_UJ; goto jItwR; zCveG: Z4_UJ: goto I5MtO; jItwR: Vmy3i: goto zf1ow; I5MtO: message("\xe8\277\220\350\264\xb9\xe8\256\xbe\347\275\xae\346\210\220\xe5\212\x9f\41", $this->createWebUrl("\123\141\x6c\145\163\x65\x74", array("\x6f\x70" => "\144\147\x67\x73\172", "\x63\141\164\145\x69\x64" => $_GPC["\x63\x61\x74\x65\151\x64"], "\143\x68\x69\144" => $_GPC["\x63\150\x69\x64"])), "\x73\x75\x63\x63\145\163\163"); goto JeIRx; zbcxT: global $_GPC, $_W; goto PJwJ4; EKY9Q: pdo_update("\x73\165\144\x75\x38\x5f\160\x61\x67\x65\137\144\x75\157\x5f\x70\162\x6f\144\x75\x63\x74\x73\137\x79\165\156\x66\145\x69", $data, array("\165\156\x69\x61\143\151\x64" => $uniacid)); goto GViQ3; DcC9Z: if (!checksubmit("\x73\165\142\x6d\151\164")) { goto XqBZx; } goto OD8HK; UkoC4: pdo_insert("\163\165\x64\x75\70\x5f\x70\x61\x67\145\x5f\144\165\157\x5f\160\x72\x6f\x64\x75\x63\164\x73\137\171\165\156\x66\x65\x69", $data); goto zCveG; BgjVq: if (empty($yunfeidata)) { goto Vmy3i; } goto EKY9Q; nYHVd: $data["\x66\x6f\162\x6d\x73\x65\x74"] = 0; goto UkoC4; JeIRx: XqBZx: goto Ej4lh; Ej4lh: return include self::template("\167\x65\x62\57\123\141\154\x65\x73\x65\164\x2f\144\147\x67\x73\x7a");