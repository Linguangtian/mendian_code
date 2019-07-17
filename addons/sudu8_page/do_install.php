<?php
pdo_query("CREATE TABLE IF NOT EXISTS `ims_sudu8_page_about` (
`uniacid` int(11) NOT NULL DEFAULT '0',
`content` mediumtext,
`header` int(1),
`tel_box` int(1),
`serv_box` int(1),
PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_art_nav` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`num` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`flag` int(1) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_art_navlist` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`cid` int(11) NOT NULL,
`type` int(1) NOT NULL,
`bgcolor` varchar(255) NOT NULL,
`url` varchar(255) NOT NULL,
`flag` int(1) NOT NULL COMMENT '1启用 2不启用',
`num` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_auction_360baby` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uptime` datetime NOT NULL,
`num` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_auction_column` (
`id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'cid',
`name` varchar(255) NOT NULL COMMENT '栏目名称',
`uniacid` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_auction_deposit` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` varchar(255) NOT NULL COMMENT '用户',
`auction_id` int(11) NOT NULL COMMENT '物品id',
`deposit` float NOT NULL COMMENT '保证金',
`deposit_wx` float NOT NULL COMMENT '微信付款额',
`out_trade_no` varchar(255) NOT NULL COMMENT '订单号',
`out_refund_no` varchar(255) NOT NULL COMMENT '退款号',
`createtime` datetime NOT NULL COMMENT '创建时间',
`uniacid` int(11) NOT NULL,
`stat` int(11) NOT NULL COMMENT '状态 1：已退还 2：未退还',
`form_id` varchar(255),
`prepayid` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_auction_goodslist` (
`id` int(11) NOT NULL AUTO_INCREMENT COMMENT '上架物品id',
`name` varchar(50) NOT NULL COMMENT '上架拍卖物名称',
`img` varchar(200) NOT NULL COMMENT '上架物品封面/缩略图',
`imglist` text COMMENT '组图',
`introduce` text COMMENT '上架物品介绍',
`Distribution_instructions` text COMMENT '配送说明',
`rules` float NOT NULL COMMENT '加价幅度',
`bond` float DEFAULT '0' COMMENT '保证金',
`price` float NOT NULL COMMENT '市场价',
`basc_cost` float NOT NULL COMMENT '底价',
`starttime` datetime NOT NULL COMMENT '起拍时间',
`endtime` datetime NOT NULL COMMENT '结束时间',
`stat` int(1) DEFAULT '1' COMMENT '状态， 0 下架 1上架 2 完成 3 流拍',
`max_cost` float DEFAULT '0' COMMENT '最高出价',
`max_user` varchar(255) COMMENT '出价最高者id',
`flow` int(11) DEFAULT '0' COMMENT '围观人数',
`uniacid` int(11),
`cid` int(11) NOT NULL COMMENT '栏目id',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_auction_log` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` varchar(255) NOT NULL COMMENT '出价人',
`auction_id` int(11) NOT NULL COMMENT '出价物品id',
`createtime` datetime NOT NULL COMMENT '时间',
`cost` float NOT NULL COMMENT '出价',
`uniacid` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_auction_message` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`mid` varchar(255) NOT NULL COMMENT '模板id',
`url` varchar(255) NOT NULL COMMENT 'url',
`uniacid` varchar(255) NOT NULL,
`class` varchar(255) NOT NULL COMMENT '类型',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_auction_order` (
`id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单id',
`user_id` varchar(255) NOT NULL COMMENT '购买人',
`cost` float NOT NULL COMMENT '金额',
`auction_id` int(11) NOT NULL COMMENT '物品id',
`created_at` datetime NOT NULL COMMENT '创建时间',
`update_at` datetime NOT NULL COMMENT '更新时间',
`paid_at` datetime NOT NULL COMMENT '支付时间',
`order_no` varchar(255) NOT NULL COMMENT '订单号',
`fast_no` varchar(255) NOT NULL COMMENT '快递单号',
`fastname` varchar(200) NOT NULL COMMENT '快递名字',
`stat` int(1) NOT NULL COMMENT '订单状态（0:待付款 1：待发货，2：已发货，3：已签收，4：删除）',
`uniacid` int(11) NOT NULL,
`address` varchar(255) NOT NULL COMMENT '地址',
`address_more` varchar(255) NOT NULL COMMENT '详细地址',
`userother` varchar(255) NOT NULL COMMENT '留言',
`phone` varchar(30) NOT NULL COMMENT '电话',
`fast` int(1) NOT NULL DEFAULT '0' COMMENT '提醒发货',
`formid` varchar(255) NOT NULL COMMENT 'formid',
`cost_wx` float NOT NULL COMMENT '微信支付',
`cost_purse` float NOT NULL COMMENT '余额支付',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_auction_remind` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` varchar(255) NOT NULL COMMENT '用户的id（识别）',
`auction_id` int(11) NOT NULL COMMENT '用户关注的拍卖物id',
`uniacid` int(11) NOT NULL,
`formid` varchar(255) NOT NULL COMMENT '用户发送提醒',
`stat` int(1) NOT NULL DEFAULT '0' COMMENT '1 已经提醒，0未提醒',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_banner` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`type` char(20) NOT NULL,
`pic` varchar(255) NOT NULL,
`url` varchar(255) NOT NULL,
`flag` int(1) NOT NULL,
`num` int(10) NOT NULL,
`descp` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_base` (
`banner` varchar(255),
`name` varchar(255),
`logo` varchar(255),
`desc` varchar(255),
`address` varchar(255),
`time` varchar(255),
`tel` varchar(255),
`longitude` varchar(20),
`latitude` varchar(20),
`about` text,
`catename` varchar(255) DEFAULT '产品 & 服务',
`catenameen` varchar(255) DEFAULT 'Products and Services',
`copyright` varchar(255) DEFAULT '技术支持：小程序科技',
`tel_b` varchar(255),
`index_style` varchar(255) NOT NULL,
`about_style` varchar(255) NOT NULL,
`prolist_style` varchar(255) NOT NULL,
`slide` varchar(2550) NOT NULL,
`aboutCN` varchar(255) NOT NULL DEFAULT '门店介绍',
`aboutCNen` varchar(255) NOT NULL DEFAULT 'About Store',
`index_about_title` varchar(255) NOT NULL,
`footer_style` varchar(255) COMMENT '底部样式',
`base_color` varchar(255) COMMENT '背景色',
`base_color2` varchar(255) COMMENT '前景色',
`index_pro_btn` varchar(255) COMMENT '产品标题样式',
`index_pro_lstyle` varchar(255) COMMENT '产品列表样式',
`index_pro_tstyle` varchar(255) COMMENT '产品列表标题样式',
`index_pro_ts_al` varchar(255) COMMENT '产品标题位置',
`uniacid` int(11),
`base_color_t` varchar(10),
`c_title` int(2),
`copyimg` varchar(255),
`video` varchar(255),
`v_img` varchar(255),
`i_b_x_ts` int(2),
`i_b_y_ts` int(2),
`catename_x` varchar(255),
`catenameen_x` varchar(255),
`tel_box` int(1),
`tabbar_bg` char(10),
`tabbar_tc` char(10),
`tabbar` text,
`tabnum` int(1),
`copy_do` int(1),
`copy_id` int(5),
`base_tcolor` varchar(10),
`color_bar` char(8),
`c_b_bg` varchar(255),
`c_b_btn` int(1),
`i_b_x_iw` int(3),
`form_index` int(1),
`tabbar_tca` char(10),
`tabbar_time` int(11),
`config` varchar(1000),
`tabbar_t` int(1) NOT NULL DEFAULT '1',
`hxmm` varchar(255) DEFAULT 'hx123456',
`logo2` varchar(255),
`sharejf` varchar(255) NOT NULL DEFAULT '10',
`sharetype` int(1) NOT NULL DEFAULT '3',
`sharexz` int(11) NOT NULL DEFAULT '10',
`spcatename` varchar(255),
`spcatenameen` varchar(255),
`sp_i_b_y_ts` int(1) NOT NULL DEFAULT '0',
`sptj_max` int(11) NOT NULL DEFAULT '10',
`sptj_max_sp` int(11) NOT NULL DEFAULT '10',
`gonggao` varchar(255),
`gonggaoUrl` varchar(255),
`homepage` int(1) NOT NULL DEFAULT '1' COMMENT '1默认首页 2diy首页',
`bookname` varchar(10) DEFAULT '在线预约',
`bookurl` varchar(50) DEFAULT '/sudu8_page/book/book',
`tabnum_new` int(11),
`tabbar_new` varchar(8000)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_cate` (
`id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
`cid` int(11) COMMENT '父栏目ID',
`uniacid` int(11) COMMENT 'uniacid',
`name` varchar(255) COMMENT '栏目名',
`ename` varchar(255) COMMENT '栏目英文名',
`cdesc` varchar(255),
`type` varchar(20) COMMENT '栏目类型',
`show_i` int(1) COMMENT '首页显示',
`statue` int(1) COMMENT '栏目状态',
`num` int(5) COMMENT '栏目排序',
`catepic` varchar(255) COMMENT '栏目图片',
`list_type` int(2) COMMENT '列表显示类型',
`list_style` int(2) COMMENT '列表样式',
`list_stylet` char(10) COMMENT '列表样式里的标题样式',
`list_tstyle` int(2) COMMENT '首页标题样式',
`list_tstylel` int(2),
`content` mediumtext,
`name_n` varchar(255),
`pic_page_btn` int(1) DEFAULT '0',
`cateconf` varchar(500),
`pic_page_bg` int(1) NOT NULL DEFAULT '0',
`list_style_more` int(1) NOT NULL DEFAULT '1',
`slide_is` int(1) NOT NULL DEFAULT '2',
`cateslide` varchar(2000),
`pagenum` int(11) DEFAULT '10',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_collect` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uid` int(11) NOT NULL,
`type` varchar(255) NOT NULL,
`cid` int(11) NOT NULL,
`uniacid` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_comment` (
`id` int(255) NOT NULL AUTO_INCREMENT,
`aid` int(11) NOT NULL COMMENT '文章id',
`text` text NOT NULL COMMENT '评论内容',
`openid` varchar(255) NOT NULL,
`uniacid` int(11) NOT NULL,
`flag` int(1) DEFAULT '0' COMMENT '0未审  1通过  2不通过',
`createtime` int(11) NOT NULL,
`follow` int(11) DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_copyright` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`copycon` mediumtext,
`uniacid` int(11),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_coupon` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`num` int(11) NOT NULL DEFAULT '0' COMMENT '序号排序',
`title` varchar(255),
`uniacid` int(11) NOT NULL COMMENT '小程序ID',
`price` varchar(255) NOT NULL DEFAULT '0' COMMENT '优惠价格',
`pay_money` varchar(255) NOT NULL DEFAULT '0' COMMENT '使用条件价格',
`btime` int(11) NOT NULL DEFAULT '0' COMMENT '使用开始日期',
`etime` int(11) NOT NULL DEFAULT '0' COMMENT '优惠券结束日期',
`counts` int(11) NOT NULL DEFAULT '-1' COMMENT '优惠券总数',
`xz_count` int(11) NOT NULL DEFAULT '0' COMMENT '每人限制领取数',
`creattime` int(11) NOT NULL COMMENT '优惠券创建时间',
`flag` int(1) NOT NULL DEFAULT '1' COMMENT '0关闭   1开启',
`color` char(10) NOT NULL DEFAULT '#ff6600',
`nownum` int(11),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_coupon_set` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_coupon_user` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) COMMENT '小程序id',
`uid` int(11) COMMENT '用户id',
`cid` int(11) COMMENT '优惠券id',
`ltime` int(11) DEFAULT '0' COMMENT '领取时间',
`utime` int(11) DEFAULT '0' COMMENT '使用时间',
`btime` int(11) DEFAULT '0' COMMENT '开始时间',
`etime` int(11) DEFAULT '0' COMMENT '结束时间',
`flag` int(11) NOT NULL DEFAULT '0' COMMENT '0未使用1已使用2已过期',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_diypage` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`index` int(1) NOT NULL DEFAULT '0' COMMENT '是否首页',
`page` varchar(3000) NOT NULL COMMENT '页面信息',
`items` text NOT NULL COMMENT '组件信息',
`uniacid` int(5) NOT NULL COMMENT '公众号',
`tpl_name` varchar(32) NOT NULL COMMENT '模板名称',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_diypage_sys` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(5) NOT NULL COMMENT '小程序',
`index` int(1) NOT NULL DEFAULT '0' COMMENT '是否首页',
`page` varchar(3000) NOT NULL COMMENT '页面信息',
`items` mediumtext NOT NULL COMMENT '组件信息',
`tpl_name` varchar(32) NOT NULL COMMENT '模板名称',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_diypageset` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`go_home` int(1) NOT NULL DEFAULT '1' COMMENT '1倒计时 2按钮',
`kp` varchar(255) NOT NULL,
`kp_is` int(1) NOT NULL,
`kp_url` varchar(255),
`kp_urltype` varchar(255) NOT NULL,
`kp_m` int(11) NOT NULL,
`tc` varchar(255) NOT NULL,
`tc_is` int(1) NOT NULL,
`tc_url` varchar(255) NOT NULL,
`tc_urltype` varchar(255) NOT NULL,
`foot_is` int(1) NOT NULL DEFAULT '1' COMMENT '1默认 2diy底部',
`pid` int(11) DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_diypagetpl` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`pageid` varchar(64) NOT NULL COMMENT '页面id列表',
`template_name` varchar(18) NOT NULL COMMENT '模板名称',
`thumb` varchar(158) NOT NULL COMMENT '页面封面图',
`uniacid` int(5) NOT NULL,
`create_time` varchar(32) NOT NULL,
`status` int(1) DEFAULT '2',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_diypagetpl_sys` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(5) NOT NULL,
`pageid` varchar(64) NOT NULL COMMENT '页面id列表',
`template_name` varchar(18) NOT NULL COMMENT '模板名称',
`thumb` varchar(158) NOT NULL COMMENT '页面封面图',
`create_time` varchar(32) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`num` int(11) NOT NULL,
`cid` int(11) NOT NULL DEFAULT '0',
`pcid` int(11) NOT NULL DEFAULT '0',
`type_x` int(1) NOT NULL DEFAULT '0',
`type_y` int(1) NOT NULL DEFAULT '0',
`type_i` int(1) NOT NULL DEFAULT '0',
`title` varchar(255) NOT NULL,
`price` float NOT NULL DEFAULT '0',
`mark_price` float NOT NULL DEFAULT '0',
`thumb` varchar(255) NOT NULL,
`imgtext` varchar(2000) NOT NULL,
`descs` varchar(1000) NOT NULL,
`texts` text NOT NULL,
`types` int(1) NOT NULL DEFAULT '1' COMMENT '1不启用规格 2启用规格',
`explains` varchar(255) NOT NULL COMMENT '说明',
`score` varchar(255) NOT NULL DEFAULT '0',
`xsl` int(11) NOT NULL DEFAULT '0' COMMENT '销售量',
`flag` int(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_address` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`name` varchar(255) NOT NULL,
`mobile` varchar(255) NOT NULL,
`address` varchar(1000) NOT NULL,
`more_address` varchar(1000) NOT NULL,
`postalcode` varchar(255) NOT NULL,
`is_mo` int(1) NOT NULL DEFAULT '1',
`creattime` int(11) NOT NULL,
`froms` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_gwc` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`uid` int(11) NOT NULL,
`pid` int(11) NOT NULL,
`pvid` int(11) NOT NULL,
`num` int(11) NOT NULL,
`creattime` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_order` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`uid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`order_id` varchar(255) NOT NULL,
`price` float NOT NULL,
`jsondata` text NOT NULL,
`coupon` int(11) NOT NULL DEFAULT '0',
`jf` varchar(255) NOT NULL DEFAULT '0',
`address` int(11) NOT NULL DEFAULT '0',
`m_address` varchar(1000) NOT NULL,
`liuyan` varchar(1000) NOT NULL,
`creattime` int(11) NOT NULL,
`hxtime` int(11) NOT NULL DEFAULT '0',
`nav` int(1) NOT NULL DEFAULT '1' COMMENT '1发货  2自提',
`kuadi` varchar(255) NOT NULL,
`kuaidihao` varchar(255) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '0' COMMENT '0未支付1已支付2已结算3已过期',
`formid` int(11) NOT NULL,
`qxbeizhu` varchar(255),
`sid` int(11) DEFAULT '0',
`payprice` float NOT NULL,
`prepayid` varchar(255),
`kuaidi_th` varchar(255),
`kuaidihao_th` varchar(255),
`th_orderid` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_type_value` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`pid` int(11) NOT NULL,
`type1` varchar(255) NOT NULL,
`type2` varchar(255) NOT NULL,
`type3` varchar(255) NOT NULL,
`kc` varchar(255) NOT NULL,
`price` varchar(255) NOT NULL,
`hnum` varchar(255) NOT NULL,
`thumb` varchar(255) NOT NULL,
`comment` varchar(255) NOT NULL,
`salenum` int(11) DEFAULT '0',
`vsalenum` int(11) DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_yunfei` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`yfei` varchar(255) NOT NULL DEFAULT '0',
`byou` varchar(255) NOT NULL DEFAULT '0',
`formset` int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`num` int(11) NOT NULL,
`cid` int(11) NOT NULL,
`pcid` int(11) NOT NULL,
`uniacid` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`thumb` varchar(255) NOT NULL,
`counts` int(11) NOT NULL,
`price` varchar(255) NOT NULL,
`true_price` varchar(255) NOT NULL,
`labels` varchar(255) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1',
`descimg` varchar(255),
`desccon` varchar(255),
`unit` char(10) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_cate` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`num` int(11) NOT NULL,
`uniacid` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`dateline` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_order` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`order_id` varchar(255) NOT NULL,
`uniacid` int(11) NOT NULL,
`username` varchar(255) NOT NULL,
`usertel` varchar(255) NOT NULL,
`address` varchar(255) NOT NULL,
`usertime` varchar(255) NOT NULL,
`userbeiz` varchar(255) NOT NULL,
`uid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`val` text NOT NULL,
`price` varchar(255) NOT NULL,
`creattime` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '0',
`zh` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_printer` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` varchar(255) NOT NULL,
`pname` varchar(255) NOT NULL COMMENT '打印机名称',
`title` varchar(255) NOT NULL COMMENT '头部标题',
`models` varchar(255) NOT NULL COMMENT '打印机类型',
`status` int(1) NOT NULL DEFAULT '2' COMMENT '1开启  2不开启',
`nid` varchar(255) NOT NULL COMMENT '打印机终端号',
`nkey` varchar(255) NOT NULL COMMENT '终端号秘钥',
`uid` varchar(255) NOT NULL COMMENT '用户id',
`apikey` varchar(255) NOT NULL COMMENT '秘钥',
`createtime` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_sj` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`thumb` varchar(255) NOT NULL,
`uniacid` int(11) NOT NULL,
`names` varchar(255) NOT NULL,
`times` varchar(255) NOT NULL,
`fuwu` varchar(255) NOT NULL,
`qita` varchar(255) NOT NULL,
`usname` int(1) NOT NULL DEFAULT '0',
`ustel` int(1) NOT NULL DEFAULT '0',
`usadd` int(1) NOT NULL DEFAULT '0',
`usdate` int(1) NOT NULL DEFAULT '0',
`ustime` int(1) NOT NULL DEFAULT '0',
`score` int(11) NOT NULL DEFAULT '0',
`phone` varchar(15) NOT NULL,
`address` varchar(100) NOT NULL,
`tags` varchar(100) NOT NULL,
`notice` varchar(200) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_tables` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`tnum` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`thumb` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_form_dd` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`cid` int(11) NOT NULL,
`types` varchar(255) NOT NULL,
`datys` int(11) NOT NULL,
`pagedatekey` int(11) NOT NULL,
`arrkey` int(11) NOT NULL,
`creattime` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_formcon` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`cid` int(11) NOT NULL,
`creattime` int(11) NOT NULL,
`val` varchar(20000) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '0',
`beizhu` varchar(255) NOT NULL,
`vtime` int(11),
`openid` varchar(255) NOT NULL,
`formid` varchar(255),
`source` varchar(255),
`fid` int(11) DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_formlist` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`formname` varchar(255) NOT NULL,
`tp_text` varchar(8000) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forms` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255),
`tel` varchar(255),
`wechat` varchar(255),
`address` varchar(255),
`date` varchar(255),
`single` varchar(255),
`checkbox` varchar(255),
`content` text,
`time` int(10),
`status` int(1) DEFAULT '0',
`vtime` int(10),
`uniacid` int(11),
`sss_beizhu` varchar(255),
`timef` varchar(10),
`t5` varchar(255),
`t6` varchar(255),
`c2` varchar(255),
`s2` varchar(255),
`con2` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forms_config` (
`uniacid` int(11) NOT NULL DEFAULT '0',
`forms_head` varchar(255),
`forms_head_con` text,
`forms_name` varchar(255),
`forms_ename` varchar(255),
`forms_title_s` varchar(255),
`success` varchar(255),
`name` varchar(255) DEFAULT '姓名',
`name_must` int(1) DEFAULT '1',
`tel` varchar(255) DEFAULT '手机',
`tel_use` int(1) DEFAULT '1',
`tel_must` int(1) DEFAULT '1',
`wechat` varchar(255) DEFAULT '微信',
`wechat_use` int(1) DEFAULT '1',
`wechat_must` int(1) DEFAULT '1',
`address` varchar(255) DEFAULT '地址',
`address_use` int(1) DEFAULT '1',
`address_must` int(1) DEFAULT '1',
`date` varchar(255) DEFAULT '预约时间',
`date_use` int(1) DEFAULT '1',
`date_must` int(1) DEFAULT '1',
`single_n` varchar(255) DEFAULT '性别',
`single_num` int(2) DEFAULT '2',
`single_v` varchar(255) DEFAULT '男,女',
`single_use` int(1) DEFAULT '1',
`single_must` int(1) DEFAULT '1',
`checkbox_n` varchar(255) DEFAULT '类型',
`checkbox_num` int(2) DEFAULT '2',
`checkbox_v` varchar(255) DEFAULT '栏目一,栏目二',
`checkbox_use` int(1) DEFAULT '1',
`content_n` varchar(255) DEFAULT '留言内容',
`content_use` int(1) DEFAULT '1',
`content_must` int(1) DEFAULT '1',
`checkbox_must` int(1) DEFAULT '1',
`mail_user` varchar(255),
`mail_password` varchar(255),
`mail_sendto` varchar(255),
`forms_btn` varchar(255),
`mail_user_name` varchar(255),
`forms_style` int(2),
`forms_inps` int(2),
`subtime` int(2),
`time_use` int(1) DEFAULT '1',
`time_must` int(1) DEFAULT '1',
`time` varchar(255),
`tel_i` int(1) DEFAULT '0',
`wechat_i` int(1) DEFAULT '0',
`address_i` int(1) DEFAULT '0',
`date_i` int(1) DEFAULT '0',
`time_i` int(1) DEFAULT '0',
`single_i` int(1) DEFAULT '0',
`checkbox_i` int(1) DEFAULT '0',
`content_i` int(1) DEFAULT '0',
`t5` varchar(255),
`t6` varchar(255),
`c2` varchar(255),
`s2` varchar(255),
`con2` varchar(255),
`img1` varchar(255),
PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_formt` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`val` varchar(50) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_collection` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uid` int(11) NOT NULL,
`uniacid` int(11) NOT NULL,
`collection` tinyint(1) NOT NULL DEFAULT '1',
`rid` int(11) NOT NULL COMMENT 'release表id',
`createtime` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_comment` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`rid` int(11) NOT NULL COMMENT '发布的id',
`uid` int(11) NOT NULL COMMENT '用户id',
`uniacid` int(11) NOT NULL,
`content` mediumtext NOT NULL COMMENT '评论内容',
`createtime` datetime NOT NULL,
`flag` int(1) NOT NULL COMMENT '1显示 2不显示',
`likesNum` int(11) NOT NULL COMMENT '点赞数',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_comment_likes` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`commentId` int(11) NOT NULL,
`likes` tinyint(1) NOT NULL COMMENT '1点赞 2不点赞',
`openid` varchar(255) NOT NULL,
`createtime` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_func` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`title` mediumtext NOT NULL,
`func_img` varchar(255) NOT NULL,
`page_type` int(1) NOT NULL,
`num` int(11) NOT NULL DEFAULT '1',
`status` int(1) NOT NULL DEFAULT '1' COMMENT '1启用 2不启用',
`createtime` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_likes` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uid` int(11) NOT NULL,
`uniacid` int(11) NOT NULL,
`likes` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1点赞 2不点赞',
`rid` int(11) NOT NULL COMMENT 'release表id',
`createtime` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_order` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`orderid` varchar(255) NOT NULL,
`uniacid` int(11) NOT NULL,
`release_money` decimal(5,2) NOT NULL,
`stick_money` decimal(5,2) NOT NULL,
`stick_days` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '2' COMMENT '1已支付  2未支付',
`createtime` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_release` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`fid` int(11) NOT NULL COMMENT '发布功能分类id',
`uniacid` int(11) NOT NULL,
`content` mediumtext NOT NULL,
`img` mediumtext NOT NULL,
`uid` int(11) NOT NULL COMMENT '发布人id',
`release_money` decimal(5,2) NOT NULL COMMENT '发布收费',
`hot` tinyint(1) unsigned NOT NULL DEFAULT '2' COMMENT '是否推荐（1推荐 2不推荐）',
`hits` int(11) NOT NULL COMMENT '浏览人数',
`likes` int(11) NOT NULL COMMENT '点赞数',
`collection` int(11) NOT NULL COMMENT '收藏数',
`comment` int(11) NOT NULL COMMENT '评论数',
`telphone` varchar(255) NOT NULL,
`address` varchar(255) NOT NULL,
`stick` int(1) NOT NULL DEFAULT '2' COMMENT '1置顶 2不置顶',
`createtime` datetime NOT NULL,
`updatetime` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_reply` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`commentId` int(11) NOT NULL,
`uniacid` int(11) NOT NULL,
`content` mediumtext NOT NULL,
`uid` int(11) NOT NULL,
`release_uid` int(11) NOT NULL,
`likesNum` int(11) NOT NULL COMMENT '点赞数',
`createtime` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_reply_likes` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`replyId` int(11) NOT NULL,
`likes` tinyint(1) NOT NULL COMMENT '1点赞 2不点赞',
`openid` varchar(255) NOT NULL,
`createtime` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_set` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`release_money` decimal(5,2) NOT NULL DEFAULT '0.00',
`stick_money` decimal(5,2) NOT NULL DEFAULT '10.00',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_forum_stick` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`rid` int(11) NOT NULL COMMENT '发布id',
`stick` int(1) NOT NULL COMMENT '是否置顶 1置顶 2不置顶',
`stick_days` int(11) NOT NULL COMMENT '置顶时长',
`stick_money` decimal(10,2) NOT NULL COMMENT '置顶费用',
`stick_time` datetime NOT NULL COMMENT '置顶时间',
`stick_status` int(1) NOT NULL COMMENT '置顶状态 1启用 2不启用',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_fx_gz` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`fx_cj` int(1) NOT NULL DEFAULT '4' COMMENT '1一级2二级3三级4不启用',
`sxj_gx` int(1) NOT NULL DEFAULT '1' COMMENT '1点击分享2首次下单3首次付款',
`fxs_sz` int(1) NOT NULL DEFAULT '1' COMMENT '1无条件2申请3消费次数4消费金额5购买商品',
`fxs_sz_val` varchar(255) NOT NULL DEFAULT '0' COMMENT '分销商规则值',
`fxs_xy` text NOT NULL,
`one_bili` int(11) NOT NULL DEFAULT '0' COMMENT '一级比例',
`two_bili` int(11) NOT NULL DEFAULT '0' COMMENT '二级比例',
`three_bili` int(11) NOT NULL DEFAULT '0' COMMENT '三级比例',
`txmoney` float NOT NULL DEFAULT '10',
`certtext` varchar(2000) NOT NULL,
`keytext` varchar(2000) NOT NULL,
`catext` varchar(2000) NOT NULL,
`thumb` varchar(255) NOT NULL COMMENT '分享推广图',
`miaos` int(11) NOT NULL DEFAULT '5',
`fx_name` varchar(255) NOT NULL DEFAULT '分销商',
`sq_thumb` varchar(255) NOT NULL,
`fxs_name` varchar(255) NOT NULL DEFAULT '分销商',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_fx_ls` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`openid` varchar(1000) NOT NULL COMMENT '消费者openid',
`parent_id` varchar(1000) NOT NULL COMMENT '父级获得的钱',
`parent_id_get` float NOT NULL COMMENT '父级获得的钱',
`p_parent_id` varchar(1000) NOT NULL COMMENT '父级的父级的id',
`p_parent_id_get` float NOT NULL COMMENT '父级的父级获得的钱',
`p_p_parent_id` varchar(1000) NOT NULL COMMENT '父级的父级的父级的id',
`p_p_parent_id_get` float NOT NULL COMMENT '父级的父级的父级获得的钱',
`order_id` varchar(1000) NOT NULL COMMENT '订单id',
`creattime` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1' COMMENT '1待分成2已分成3取消分成',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_fx_sq` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`truename` varchar(255) NOT NULL,
`truetel` varchar(255) NOT NULL,
`creattime` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3不通过',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_fx_tx` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`openid` varchar(1000) NOT NULL,
`money` float NOT NULL,
`creattime` int(11) NOT NULL,
`types` int(1) NOT NULL DEFAULT '1' COMMENT '1余额2微信3支付宝',
`zfbzh` varchar(255) NOT NULL,
`zfbxm` varchar(255) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3已拒绝',
`txtime` int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_lottery_activity` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`title` varchar(255) NOT NULL COMMENT '活动名称',
`begin` int(11) NOT NULL COMMENT '开始时间',
`end` int(11) NOT NULL COMMENT '结束时间',
`descp` varchar(3000) NOT NULL COMMENT '活动说明',
`thumb` varchar(255) NOT NULL COMMENT '活动图片',
`bg` varchar(255) NOT NULL COMMENT '活动背景',
`text_img1` varchar(255) NOT NULL COMMENT '文字标题图片button',
`text_img2` varchar(255) NOT NULL COMMENT '文字标题图片摇一摇',
`nav_color` varchar(20) NOT NULL COMMENT '头部颜色',
`base` varchar(3000) NOT NULL COMMENT '基础设置，详见看云说明',
`status` int(1) NOT NULL COMMENT '0下架1上架',
`participate` int(11) NOT NULL DEFAULT '0' COMMENT '参与人数',
`win` int(11) NOT NULL DEFAULT '0' COMMENT '获奖人数',
`browse` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
`share` int(11) NOT NULL DEFAULT '0' COMMENT '分享量',
`createtime` int(11) NOT NULL COMMENT '创建日期',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_lottery_prize` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`aid` int(11) NOT NULL COMMENT '活动id',
`num` varchar(255) NOT NULL COMMENT '9宫格八个格子，多规格',
`title` varchar(255) NOT NULL COMMENT '奖项标题',
`thumb` varchar(255) NOT NULL COMMENT '图',
`total` int(11) NOT NULL COMMENT '总量',
`storage` int(11) NOT NULL COMMENT '库存',
`types` int(1) NOT NULL COMMENT '1积分2余额3实物4优惠券',
`detail` varchar(255) NOT NULL COMMENT '奖励详情',
`chance` int(11) NOT NULL COMMENT '中奖概率',
`createtime` int(11) NOT NULL COMMENT '创建日期',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_lottery_record` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`aid` int(11) NOT NULL COMMENT '活动id',
`uid` int(11) NOT NULL COMMENT '中奖人id',
`pid` int(11) COMMENT '奖品id',
`createtime` int(11) NOT NULL COMMENT '抽奖时间',
`status` int(1) NOT NULL COMMENT '0未中奖1已中奖2已领',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_lottery_share` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`aid` int(11) NOT NULL COMMENT '活动id',
`uid` int(11) NOT NULL COMMENT '用户id',
`createtime` int(11) NOT NULL COMMENT '分享时间',
`flag` int(1) NOT NULL COMMENT '0未成功1成功',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_mauth` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`uniacid` int(10) NOT NULL,
`parent` char(255) NOT NULL,
`child` char(255) NOT NULL,
`userid` int(10) NOT NULL,
`mini` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_mcategory` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`pid` int(10) NOT NULL,
`cate_name` varchar(32) NOT NULL,
`sort` int(5) NOT NULL,
`objname` varchar(32) NOT NULL,
`opt` varchar(32) NOT NULL DEFAULT 'wb-display',
`icon` varchar(32) NOT NULL DEFAULT 'wb-dashboard',
`type` int(1) NOT NULL DEFAULT '0' COMMENT '节点还是栏目',
`stat` int(1) NOT NULL DEFAULT '1' COMMENT '是否显示',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_message` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`mid` varchar(255) NOT NULL COMMENT '模板消息id',
`url` varchar(255) NOT NULL COMMENT '页面路径',
`flag` int(1) NOT NULL COMMENT '1支付通知 2系统表单通知 3预约通知  4点餐支付通知 5积分兑换成功通知',
`attach` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_money` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`orderid` varchar(255) NOT NULL,
`uid` int(11) NOT NULL,
`type` varchar(255) NOT NULL COMMENT '操作',
`score` varchar(255) NOT NULL COMMENT '金钱',
`message` varchar(255) NOT NULL COMMENT '说明',
`creattime` int(11) NOT NULL COMMENT '时间',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_multicate` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`name` varchar(255) NOT NULL,
`type` varchar(20) NOT NULL COMMENT '模板类型',
`statue` int(1) NOT NULL DEFAULT '1' COMMENT '多栏目状态',
`list_style` int(2) NOT NULL COMMENT '列表样式',
`list_stylet` char(10) NOT NULL COMMENT '列表样式里的标题样式',
`top_catas` varchar(255) NOT NULL,
`psize` int(11) DEFAULT '10',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_multicates` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`sort` int(5) NOT NULL DEFAULT '1',
`status` int(1) NOT NULL DEFAULT '1',
`varible` varchar(12) NOT NULL COMMENT '筛选值名称',
`pid` int(5) NOT NULL DEFAULT '0',
`uniacid` int(5) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_muser` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`uid` int(10) NOT NULL,
`uniacid` int(10) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_nav` (
`id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
`uniacid` int(11) COMMENT 'UID',
`statue` int(1),
`type` int(2) COMMENT '首页，列表，单页，文章',
`style` int(2),
`url` varchar(999) COMMENT '链接',
`box_p_tb` float COMMENT '外边距',
`box_p_lr` float COMMENT '左右间距',
`number` int(2) COMMENT '数量',
`img_size` float COMMENT '图片大小',
`title_color` varchar(10) COMMENT '标题颜色',
`title_position` int(1) COMMENT '标题样式',
`title_bg` varchar(15) COMMENT '标题背景色',
`name` varchar(50),
`ename` varchar(50),
`name_s` int(1),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_navlist` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`num` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1',
`type` int(2) NOT NULL COMMENT '0链接 1电话 2导航 3客服 4小程序 5.网页',
`title` varchar(40) NOT NULL,
`pic` varchar(255) NOT NULL,
`url` varchar(255) NOT NULL,
`url2` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_order` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`order_id` varchar(255) NOT NULL,
`uid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`pid` int(11) NOT NULL,
`thumb` varchar(255),
`product` varchar(255),
`price` varchar(255) NOT NULL,
`num` int(11) NOT NULL,
`yhq` varchar(255) NOT NULL,
`true_price` varchar(255) NOT NULL,
`creattime` int(11) NOT NULL,
`custime` int(11),
`flag` int(11) NOT NULL DEFAULT '0',
`pro_user_name` varchar(255),
`pro_user_tel` varchar(255),
`pro_user_txt` text NOT NULL,
`overtime` int(11),
`reback` int(11) NOT NULL DEFAULT '0',
`is_more` int(1) NOT NULL DEFAULT '0',
`coupon` int(11),
`order_duo` text,
`pro_user_add` varchar(100),
`beizhu_val` text,
`pay_price` float NOT NULL DEFAULT '0',
`dkscore` float NOT NULL DEFAULT '0',
`nav` int(1) NOT NULL,
`address` int(11) NOT NULL,
`formid` int(11) DEFAULT '0',
`prepayid` varchar(255),
`tsid` int(11) DEFAULT '0',
`th_orderid` varchar(255),
`qxbeizhu` varchar(255),
`appoint_date` int(11) DEFAULT '0',
`form_id` varchar(255),
`emp_id` int(11),
`modify_info` varchar(255),
`kuaidi` varchar(64),
`kuaidihao` varchar(64),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_p_s_base` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`xcxId` varchar(255) NOT NULL COMMENT '小程序原始id',
`appId` varchar(255) NOT NULL,
`appSecret` varchar(255) NOT NULL,
`uniacid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL COMMENT '客服openid',
`datasheet` varchar(255) NOT NULL COMMENT '数据表名',
`id_field` varchar(255) NOT NULL COMMENT '用户表键值',
`openid_field` varchar(255) NOT NULL COMMENT 'openid字段名',
`nickname_field` varchar(255) NOT NULL COMMENT 'nickname字段名',
`flag` int(1) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_p_s_pic` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`openid` varchar(255) NOT NULL COMMENT '用户openid',
`uniacid` int(11) NOT NULL,
`flag` int(1) NOT NULL COMMENT '1发 2',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_p_s_reply` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`type` int(1) COMMENT '1文本 2图片 3图文 4小程序卡片',
`content` text NOT NULL,
`uniacid` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1' COMMENT '1开启 2不开启',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_p_s_user` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`openid` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pro_score_get` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`clickopenid` varchar(255) NOT NULL COMMENT '点击人openid',
`pid` int(11) NOT NULL,
`types` varchar(255) NOT NULL,
`score` int(11) NOT NULL DEFAULT '0',
`creattime` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_products` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`num` int(11),
`title` varchar(255),
`text` mediumtext,
`thumb` varchar(255),
`ctime` int(10),
`etime` int(10),
`type` varchar(20),
`desc` varchar(255) COMMENT '商品介绍',
`uniacid` int(11),
`cid` int(11),
`pcid` int(11),
`type_x` int(1),
`type_y` int(1),
`hits` int(11),
`type_i` int(1),
`video` varchar(255),
`price` varchar(255),
`market_price` varchar(255),
`label_1` int(11) DEFAULT '1',
`label_2` int(11) DEFAULT '0',
`sale_num` int(11),
`score` int(11),
`product_txt` text,
`pro_flag` int(11) DEFAULT '0',
`pro_kc` int(11) NOT NULL DEFAULT '-1',
`pro_xz` int(11) NOT NULL DEFAULT '0',
`sale_tnum` int(11) NOT NULL DEFAULT '0',
`sale_type` int(11) DEFAULT '1',
`sale_time` int(11) DEFAULT '0',
`labels` varchar(255),
`pro_flag_tel` int(1) NOT NULL DEFAULT '0',
`pro_flag_data_name` varchar(40) DEFAULT '预约时间',
`pro_flag_data` int(1) DEFAULT '0',
`pro_flag_time` int(1) DEFAULT '0',
`pro_flag_ding` int(1) DEFAULT '0',
`is_more` int(1) DEFAULT '0',
`more_type` text,
`more_type_x` text,
`more_type_num` text,
`flag` int(1) DEFAULT '1',
`buy_type` varchar(40) DEFAULT '购买',
`pro_flag_add` int(1) DEFAULT '0',
`formset` int(20) NOT NULL DEFAULT '0',
`is_score` int(1) NOT NULL DEFAULT '0',
`score_num` int(11) NOT NULL DEFAULT '0',
`con2` varchar(5000) NOT NULL,
`con3` varchar(5000) NOT NULL,
`share_type` int(1) NOT NULL DEFAULT '1' COMMENT '1个人2仅群3个人加群',
`share_score` varchar(255) NOT NULL DEFAULT '0' COMMENT '分享积分',
`share_num` int(11) NOT NULL DEFAULT '1' COMMENT '分享限制次数',
`share_gz` int(1) NOT NULL DEFAULT '1' COMMENT '1公共规则2自身规则',
`comment` int(1) NOT NULL DEFAULT '1' COMMENT '评论功能 1开启 2不开启',
`multi` int(1) NOT NULL DEFAULT '0',
`top_catas` varchar(255) NOT NULL,
`sons_catas` varchar(255) NOT NULL,
`mulitcataid` int(5) NOT NULL,
`get_share_gz` int(1) NOT NULL DEFAULT '2',
`get_share_score` int(11) NOT NULL DEFAULT '0',
` get_share_num` int(11) NOT NULL DEFAULT '0',
`get_share_num` int(11) NOT NULL DEFAULT '0',
`shareimg` varchar(255),
`glnews` varchar(2000),
`kuaidi` int(1) DEFAULT '0',
`sale_end_time` int(11) DEFAULT '0',
`scoreback` varchar(20) DEFAULT '0',
`fx_uni` int(1),
`commission_type` int(1),
`commission_one` float,
`commission_two` float,
`commission_three` float,
`music_art_info` varchar(3000) NOT NULL,
`tableid` int(11),
`tableis` int(1) DEFAULT '0',
`seller_remind` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_cate` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`num` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`creattime` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_gz` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`types` int(1) NOT NULL DEFAULT '1',
`is_score` int(1) NOT NULL DEFAULT '1' COMMENT '1不启用 2启用【启用积分抵扣】',
`is_tuanz` int(1) NOT NULL DEFAULT '1' COMMENT '1不启用2启用【启用团长优惠】',
`is_pt` int(1) NOT NULL DEFAULT '2' COMMENT '1不启用2启用【是否自动成团】',
`pt_time` int(11) NOT NULL DEFAULT '24' COMMENT '成团时间',
`fahuo` int(11) NOT NULL DEFAULT '7' COMMENT '自动发货',
`guiz` text NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_order` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`uid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`order_id` varchar(255) NOT NULL,
`price` float NOT NULL DEFAULT '0',
`jsondata` text NOT NULL,
`coupon` int(11) NOT NULL DEFAULT '0',
`jf` varchar(255) NOT NULL DEFAULT '0',
`address` int(11) NOT NULL DEFAULT '0',
`m_address` varchar(1000) NOT NULL,
`liuyan` varchar(1000) NOT NULL,
`creattime` int(11) NOT NULL,
`hxtime` int(11) NOT NULL DEFAULT '0',
`nav` int(1) NOT NULL DEFAULT '1',
`kuadi` varchar(255) NOT NULL,
`kuaidihao` varchar(255) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '0',
`types` int(1) NOT NULL DEFAULT '1' COMMENT '1拼团2立即购买',
`pt_order` varchar(255) NOT NULL COMMENT '拼团的订单id',
`ck` int(1) NOT NULL DEFAULT '1' COMMENT '1开团2参团',
`jqr` int(1) NOT NULL DEFAULT '1' COMMENT '1买家2机器人',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_pro` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`num` int(11) NOT NULL,
`cid` int(11) NOT NULL,
`pcid` int(11) NOT NULL,
`type_x` int(1) NOT NULL DEFAULT '0',
`type_y` int(1) NOT NULL DEFAULT '0',
`type_i` int(1) NOT NULL DEFAULT '0',
`title` varchar(255) NOT NULL,
`price` float NOT NULL DEFAULT '0' COMMENT '拼团价[显示用，一般设置最低]',
`mark_price` float NOT NULL DEFAULT '0' COMMENT '单买价[显示用]',
`thumb` varchar(255) NOT NULL COMMENT '缩略图',
`imgtext` varchar(2000) NOT NULL COMMENT '组图',
`descs` varchar(1000) NOT NULL COMMENT '简介',
`texts` text NOT NULL COMMENT '详情',
`types` int(1) NOT NULL DEFAULT '1' COMMENT '拼团类型1单层团2阶梯团',
`explains` varchar(255) NOT NULL COMMENT '标签',
`pt_min` int(11) NOT NULL DEFAULT '2' COMMENT '拼团最小人数',
`pt_max` int(11) NOT NULL DEFAULT '5' COMMENT '拼团最大人数',
`score` int(11) NOT NULL COMMENT '最多可抵用积分',
`xsl` int(11) NOT NULL DEFAULT '0',
`tz_yh` int(11) NOT NULL DEFAULT '10',
`kuaidi` int(1) NOT NULL DEFAULT '1',
`shareimg` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_pro_val` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`pid` int(11) NOT NULL,
`type1` varchar(255) NOT NULL,
`type2` varchar(255) NOT NULL,
`type3` varchar(255) NOT NULL,
`kc` float NOT NULL,
`price` float NOT NULL,
`dprice` float NOT NULL,
`thumb` varchar(255) NOT NULL,
`comment` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_robot` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`openid` varchar(255) NOT NULL,
`nickname` varchar(255) NOT NULL,
`icon` varchar(2555) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_share` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`shareid` varchar(255) NOT NULL,
`openid` varchar(255) NOT NULL,
`pid` int(11) NOT NULL COMMENT '商品id',
`creattime` int(11) NOT NULL DEFAULT '0',
`join_count` int(11) NOT NULL DEFAULT '1',
`flag` int(1) NOT NULL DEFAULT '1' COMMENT '1正在进行2已完成3已过期',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_recharge` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`money` varchar(255) NOT NULL DEFAULT '0',
`getmoney` varchar(255) NOT NULL DEFAULT '0',
`getscore` varchar(255) NOT NULL DEFAULT '0',
`getcoupon` int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_rechargeconf` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`scroe` varchar(255) NOT NULL DEFAULT '100',
`money` varchar(255) NOT NULL DEFAULT '1',
`title` varchar(50) NOT NULL DEFAULT '充值有礼',
`score_shoppay` int(11) NOT NULL DEFAULT '0' COMMENT '店内最大抵扣积分',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`orderid` varchar(255) NOT NULL,
`uid` int(11) NOT NULL,
`type` varchar(255) NOT NULL,
`score` varchar(255) NOT NULL,
`message` varchar(255) NOT NULL,
`creattime` int(11) NOT NULL,
`uuid` int(11) NOT NULL,
`pid` int(11) NOT NULL,
`types` varchar(20) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score_cate` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`num` int(11) NOT NULL,
`uniacid` int(11) NOT NULL,
`name` varchar(255) NOT NULL,
`catepic` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score_get` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`title` varchar(255) NOT NULL COMMENT '标题',
`descp` varchar(255) NOT NULL COMMENT '简介',
`score` float NOT NULL DEFAULT '0' COMMENT '积分数',
`link` varchar(255) NOT NULL COMMENT '链接',
`flag` int(1) NOT NULL COMMENT '0不开启 1开启',
`fixed` int(2) COMMENT '系统自动添加的几条',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score_order` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`order_id` varchar(255) NOT NULL,
`uid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`pid` int(11) NOT NULL,
`thumb` varchar(255) NOT NULL,
`product` varchar(255) NOT NULL,
`price` varchar(255) NOT NULL,
`num` varchar(11) NOT NULL,
`creattime` int(11) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '0',
`custime` int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score_shop` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`num` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`cid` int(11) NOT NULL,
`hits` int(11) NOT NULL,
`sale_num` int(11) NOT NULL,
`buy_type` varchar(255) NOT NULL DEFAULT '兑换',
`thumb` varchar(255) NOT NULL,
`text` text NOT NULL,
`desk` varchar(255) NOT NULL,
`product_txt` text NOT NULL,
`price` varchar(255) NOT NULL,
`market_price` varchar(255) NOT NULL,
`pro_kc` int(11) NOT NULL DEFAULT '-1',
`sale_tnum` int(22) NOT NULL DEFAULT '0',
`labels` varchar(255) NOT NULL,
`flag` int(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_share_img` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`ewmimg` varchar(255) NOT NULL,
`openid` varchar(255) NOT NULL,
`pid` int(11) NOT NULL DEFAULT '0',
`sharethumb` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_share_user` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`uid` int(11) NOT NULL,
`pid` int(11) NOT NULL,
`creattime` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_shops_cate` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`name` varchar(50) NOT NULL COMMENT '分类名称',
`num` int(11) NOT NULL COMMENT '排序越大越靠前',
`flag` tinyint(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_shops_goods` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`title` varchar(255) NOT NULL COMMENT '标题',
`sid` int(11) COMMENT '所属店铺',
`buy_type` int(1) NOT NULL DEFAULT '0' COMMENT '0购买1预定',
`hot` int(1) NOT NULL DEFAULT '0' COMMENT '0不推荐1推荐',
`pageview` int(11) NOT NULL DEFAULT '0' COMMENT '访问量',
`vsales` int(11) NOT NULL DEFAULT '0' COMMENT '虚拟销量',
`rsales` int(11) NOT NULL DEFAULT '0' COMMENT '真实销量',
`sellprice` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '售价',
`marketprice` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '市场价',
`storage` int(11) NOT NULL DEFAULT '0' COMMENT '库存量',
`thumb` varchar(1000) COMMENT '缩略图',
`images` varchar(5000) COMMENT '产品组图',
`descp` varchar(2000) COMMENT '产品详情',
`num` int(11) NOT NULL DEFAULT '0' COMMENT '排序越大越靠前',
`createtime` int(11) NOT NULL COMMENT '创建日期',
`flag` int(1) NOT NULL DEFAULT '1' COMMENT '0下架1上架',
`status` int(1) NOT NULL DEFAULT '0' COMMENT '0未审核1已审核',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_shops_set` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`apply` int(1) NOT NULL DEFAULT '1' COMMENT '0不需要审核1需要',
`goods` int(1) NOT NULL DEFAULT '1' COMMENT '商品0不需审核1需要',
`withdraw` int(1) NOT NULL DEFAULT '1' COMMENT '提现0不需要审核1需要',
`minimum` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '最低提现金额',
`bg` varchar(255) COMMENT '商户申请入驻页头部背景图',
`protocol` varchar(5000) COMMENT '商户入驻协议',
`tjnum` int(11) NOT NULL DEFAULT '6' COMMENT '推荐数',
`num` int(11) NOT NULL DEFAULT '6' COMMENT '默认数',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_shops_shop` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`openid` varchar(255) NOT NULL,
`cid` varchar(50) NOT NULL,
`username` varchar(50) NOT NULL DEFAULT 'admin' COMMENT '登录名',
`password` varchar(50) NOT NULL DEFAULT '12345' COMMENT '密码',
`tixian` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '可提现金额',
`logo` varchar(255) COMMENT 'logo',
`bg` varchar(255) COMMENT '背景图',
`yyzz` varchar(255) NOT NULL COMMENT '营业执照',
`intro` varchar(255) COMMENT '一句话简介',
`worktime` varchar(255) COMMENT '营业时间',
`name` varchar(50) NOT NULL COMMENT '名字',
`tel` varchar(20) NOT NULL COMMENT '电话',
`address` varchar(50) NOT NULL COMMENT '地址',
`latitude` float(10,6) NOT NULL COMMENT '纬度',
`longitude` float(10,6) NOT NULL COMMENT '经度',
`star` float COMMENT '评分星星',
`flag` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态0下架1上架',
`hot` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0不推荐，1推荐',
`authenticate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否已认证0否1是',
`descp` varchar(500) COMMENT '简介',
`title` varchar(20),
`num` int(11) NOT NULL DEFAULT '0' COMMENT '排序越大越靠前',
`createtime` int(11) NOT NULL COMMENT '创建时间',
`images` varchar(2000) COMMENT '组图',
`status` int(1) NOT NULL DEFAULT '0' COMMENT '0未审核1已审核',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_shops_tixian` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`sid` int(11) NOT NULL COMMENT '商户id',
`money` float(10,2) NOT NULL COMMENT '金额',
`types` int(1) NOT NULL COMMENT '0微信1支付宝2银行卡',
`account` varchar(255) NOT NULL COMMENT '账号',
`beizhu` varchar(1000) COMMENT '备注',
`flag` int(1) NOT NULL DEFAULT '0' COMMENT '0申请中1已通过2已拒绝',
`createtime` int(11) NOT NULL COMMENT '创建时间',
`txtime` int(11) COMMENT '提现时间',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_sign` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`openid` varchar(100) NOT NULL,
`creattime` int(11) NOT NULL,
`score` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_sign_con` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`score` varchar(20) NOT NULL DEFAULT '10/20',
`max_score` int(11) NOT NULL DEFAULT '100000',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_sign_lx` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`openid` varchar(100) NOT NULL,
`count` int(11) NOT NULL DEFAULT '0',
`max_count` int(11) NOT NULL DEFAULT '0',
`all_count` int(11) NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_store` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`thumb` varchar(255),
`logo` varchar(255),
`title` varchar(255),
`lat` varchar(20),
`lon` varchar(20),
`tel` varchar(20),
`times` varchar(255),
`country` varchar(255),
`text` text,
`dateline` int(11),
`title1` varchar(50),
`title2` varchar(50),
`descp` varchar(255),
`desc2` text NOT NULL,
`province` varchar(255),
`proid` int(11),
`city` varchar(255),
`cityid` int(11),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_storeconf` (
`uniacid` int(11) NOT NULL,
`mapkey` varchar(50) NOT NULL,
`flag` int(2) NOT NULL DEFAULT '0',
`search` int(1) NOT NULL DEFAULT '0',
`title` varchar(255) NOT NULL DEFAULT '门店',
KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_table` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`name` varchar(50) NOT NULL,
`columnstr` varchar(1000) NOT NULL,
`rowstr` varchar(1000) NOT NULL,
`selectstr` varchar(1000) NOT NULL,
`proname` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_tableselect` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`uid` int(11) NOT NULL,
`pid` int(11) NOT NULL COMMENT '商品id',
`tid` int(11) NOT NULL COMMENT 'table_id',
`select_str` varchar(1000) NOT NULL COMMENT '已选',
`appoint_date` date NOT NULL COMMENT '预约日期',
`createtime` int(11) NOT NULL,
`flag` int(1) NOT NULL COMMENT '0未付款1已付款',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_user` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`uniacid` int(10) unsigned COMMENT '小程序ID',
`openid` varchar(255) NOT NULL COMMENT '用户的唯一身份ID',
`createtime` int(11) unsigned NOT NULL COMMENT '加入时间',
`realname` varchar(20) COMMENT '真实姓名',
`nickname` varchar(20) NOT NULL COMMENT '昵称',
`avatar` varchar(255) NOT NULL COMMENT '头像',
`qq` varchar(15) COMMENT 'QQ号',
`mobile` varchar(11) COMMENT '手机号码',
`gender` tinyint(1) DEFAULT '0' COMMENT '性别(0:保密 1:男 2:女)',
`telephone` varchar(15) COMMENT '固定电话',
`idcardtype` tinyint(1) DEFAULT '1' COMMENT '证件类型：身份证 护照 军官证等',
`idcard` varchar(30) COMMENT '证件号码',
`address` varchar(255) COMMENT '邮寄地址',
`zipcode` varchar(10) COMMENT '邮编',
`nationality` varchar(30) COMMENT '国籍',
`resideprovince` varchar(30) COMMENT '居住省份',
`residecity` varchar(30) COMMENT '居住城市',
`residedist` varchar(30) COMMENT '居住行政区/县',
`residecommunity` varchar(30) COMMENT '居住小区',
`residesuite` varchar(30) COMMENT '小区、写字楼门牌号',
`graduateschool` varchar(50) COMMENT '毕业学校',
`company` varchar(50) COMMENT '公司',
`education` varchar(10) COMMENT '学历',
`occupation` varchar(30) COMMENT '职业',
`position` varchar(30) COMMENT '职位',
`revenue` varchar(10) COMMENT '年收入',
`affectivestatus` varchar(30) COMMENT '情感状态',
`lookingfor` varchar(255) COMMENT ' 交友目的',
`bloodtype` varchar(5) COMMENT '血型',
`height` varchar(5) COMMENT '身高',
`weight` varchar(5) COMMENT '体重',
`alipay` varchar(30) COMMENT '支付宝帐号',
`msn` varchar(30) COMMENT 'MSN',
`taobao` varchar(30) COMMENT '阿里旺旺',
`site` varchar(30) COMMENT '主页',
`bio` text COMMENT '自我介绍',
`interest` text COMMENT '兴趣爱好',
`money` float NOT NULL DEFAULT '0',
`score` float NOT NULL DEFAULT '0',
`flag` int(11) NOT NULL DEFAULT '0',
`p_p_parent_id` varchar(1000) NOT NULL DEFAULT '0' COMMENT '父级的父级的父级',
`p_parent_id` varchar(1000) NOT NULL DEFAULT '0' COMMENT '父级的父级',
`parent_id` varchar(1000) NOT NULL DEFAULT '0' COMMENT '父级',
`fxs` int(1) NOT NULL DEFAULT '1' COMMENT '1不是分销商2分销商',
`fxstime` int(11) NOT NULL DEFAULT '0',
`fx_allmoney` float NOT NULL DEFAULT '0' COMMENT '分销获得过的钱',
`fx_getmoney` float NOT NULL DEFAULT '0' COMMENT '分销已经提现的钱',
`fx_money` float NOT NULL DEFAULT '0' COMMENT '分销商获得过的钱分销可提现钱',
`p_get_money` float NOT NULL DEFAULT '0' COMMENT '父级获得的钱',
`p_p_get_money` float NOT NULL DEFAULT '0' COMMENT '父父级获得的钱',
`p_p_p_get_money` float NOT NULL DEFAULT '0' COMMENT '父父父级获得的钱',
`ewm` varchar(255) NOT NULL,
`birth` varchar(255) COMMENT '生日',
`vipid` varchar(255) COMMENT 'vip卡号',
`vipcreatetime` int(11) COMMENT 'vip创建时间',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_usercenter_set` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`usercenterset` varchar(5000),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_video_pay` (
`uniacid` int(11) NOT NULL,
`id` int(11) NOT NULL AUTO_INCREMENT,
`openid` varchar(255) NOT NULL,
`pid` int(11) NOT NULL,
`orderid` varchar(255) NOT NULL,
`paymoney` float NOT NULL,
`creattime` int(11) NOT NULL,
`type` int(1) NOT NULL DEFAULT '1',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_vip_apply` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`openid` varchar(255) NOT NULL COMMENT '申请人',
`uniacid` int(11) unsigned NOT NULL,
`vipid` mediumtext NOT NULL COMMENT 'vip卡号',
`fid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '提交表单信息id',
`formid` varchar(255) NOT NULL COMMENT '模板消息formid',
`flag` tinyint(1) unsigned NOT NULL DEFAULT '3' COMMENT '3未审核 1通过  2不通过',
`applytime` datetime NOT NULL COMMENT '申请时间',
`examinetime` datetime NOT NULL COMMENT '审核时间',
`beizhu` mediumtext NOT NULL COMMENT '审核不通过原因',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_vip_config` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`isopen` tinyint(1) NOT NULL DEFAULT '1' COMMENT '会员卡0不开启1开启2强制开启',
`name` varchar(255) NOT NULL DEFAULT '会员卡' COMMENT '会员卡名称',
`recharge` tinyint(1) NOT NULL DEFAULT '0' COMMENT '充值0直接可用1开卡后可用',
`coupon` tinyint(1) NOT NULL DEFAULT '0' COMMENT '领优惠券0直接可用1开卡后可用',
`sign` tinyint(1) NOT NULL DEFAULT '0' COMMENT '积分签到0直接可用1开卡后可用',
`exchange` tinyint(1) NOT NULL DEFAULT '0' COMMENT '积分兑换0直接可用1开卡后可用',
`formid` int(11) DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_sudu8_page_wxapps` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`cid` int(11) NOT NULL,
`pcid` int(11) NOT NULL,
`num` int(11) NOT NULL,
`type` varchar(20) NOT NULL,
`title` varchar(255) NOT NULL,
`desc` varchar(255) NOT NULL,
`thumb` varchar(255) NOT NULL,
`uniacid` int(11) NOT NULL,
`type_i` int(1) NOT NULL,
`appId` varchar(20) NOT NULL,
`path` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");
