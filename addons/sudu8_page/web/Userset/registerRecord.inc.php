<?php
 goto bpwSo; bpwSo: global $_GPC, $_W; goto LPbJZ; XTu0y: $pageindex = max(1, intval($_GPC["\160\x61\x67\145"])); goto UTczt; UTczt: $pagesize = 10; goto xaHH1; CB0QV: $ops = array("\144\x69\163\x70\x6c\x61\x79"); goto wO1kC; zG3tG: $pager = pagination($total, $pageindex, $pagesize); goto ZQKaM; ZQKaM: $records = pdo_fetchall("\123\x45\114\105\103\x54\x20\156\x69\143\153\x6e\141\x6d\x65\54\166\x69\x70\x69\x64\x2c\x76\151\160\x63\x72\x65\141\164\x65\164\151\x6d\145\x2c\141\166\141\x74\x61\162\40\x46\122\x4f\x4d\x20" . tablename("\163\x75\x64\x75\x38\137\x70\141\x67\145\x5f\x75\163\x65\x72") . "\127\110\x45\122\x45\40\x75\x6e\151\x61\x63\x69\144\40\x3d\x20\x3a\x75\156\151\x61\143\x69\144\40\141\x6e\x64\40\x76\151\x70\151\x64\40\151\x73\x20\156\157\164\40\116\125\x4c\114\x20\x4f\122\104\105\122\40\102\131\x20\166\x69\160\143\x72\145\x61\x74\145\x74\151\x6d\145\40\x64\145\163\143\40\114\111\x4d\111\x54\x20" . $p . "\x2c\61\x30", array("\x3a\165\x6e\151\x61\143\x69\x64" => $uniacid)); goto YkvJ7; LPbJZ: $uniacid = $_W["\165\x6e\x69\141\x63\151\144"]; goto ed4WG; jLxxl: $total = pdo_fetchcolumn("\x53\105\114\x45\x43\x54\x20\x63\157\x75\156\x74\50\52\51\x20\106\122\x4f\115\x20" . tablename("\163\x75\144\x75\70\137\160\x61\147\145\x5f\165\x73\145\162") . "\40\127\x48\105\122\x45\x20\165\156\x69\x61\x63\x69\x64\40\75\40\72\165\156\151\x61\143\151\144\40\141\x6e\x64\40\x76\151\x70\x69\144\40\151\163\x20\156\157\164\40\x6e\165\154\154", array("\72\165\156\x69\x61\143\151\144" => $uniacid)); goto XTu0y; xaHH1: $p = ($pageindex - 1) * $pagesize; goto zG3tG; ed4WG: $opt = $_GPC["\157\160\x74"]; goto CB0QV; YkvJ7: hqspt: goto s2Gwt; tffFQ: if (!($opt == "\144\x69\163\160\154\141\171")) { goto hqspt; } goto jLxxl; wO1kC: $opt = in_array($opt, $ops) ? $opt : "\144\x69\x73\x70\154\x61\171"; goto tffFQ; s2Gwt: return include self::template("\167\145\x62\x2f\125\x73\x65\162\x73\x65\164\57\162\145\147\x69\x73\x74\145\162\162\145\x63\x6f\x72\x64");