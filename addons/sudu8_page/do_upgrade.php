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
if(pdo_tableexists('sudu8_page_about')) {
	if(!pdo_fieldexists('sudu8_page_about',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_about')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_about')) {
	if(!pdo_fieldexists('sudu8_page_about',  'content')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_about')." ADD `content` mediumtext;");
	}	
}
if(pdo_tableexists('sudu8_page_about')) {
	if(!pdo_fieldexists('sudu8_page_about',  'header')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_about')." ADD `header` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_about')) {
	if(!pdo_fieldexists('sudu8_page_about',  'tel_box')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_about')." ADD `tel_box` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_about')) {
	if(!pdo_fieldexists('sudu8_page_about',  'serv_box')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_about')." ADD `serv_box` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_art_nav')) {
	if(!pdo_fieldexists('sudu8_page_art_nav',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_nav')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_art_nav')) {
	if(!pdo_fieldexists('sudu8_page_art_nav',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_nav')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_nav')) {
	if(!pdo_fieldexists('sudu8_page_art_nav',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_nav')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_nav')) {
	if(!pdo_fieldexists('sudu8_page_art_nav',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_nav')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_nav')) {
	if(!pdo_fieldexists('sudu8_page_art_nav',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_nav')." ADD `flag` int(1) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `cid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `type` int(1) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'bgcolor')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `bgcolor` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'url')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `url` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `flag` int(1) NOT NULL COMMENT '1启用 2不启用';");
	}	
}
if(pdo_tableexists('sudu8_page_art_navlist')) {
	if(!pdo_fieldexists('sudu8_page_art_navlist',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_art_navlist')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_360baby')) {
	if(!pdo_fieldexists('sudu8_page_auction_360baby',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_360baby')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_360baby')) {
	if(!pdo_fieldexists('sudu8_page_auction_360baby',  'uptime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_360baby')." ADD `uptime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_360baby')) {
	if(!pdo_fieldexists('sudu8_page_auction_360baby',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_360baby')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_column')) {
	if(!pdo_fieldexists('sudu8_page_auction_column',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_column')." ADD `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'cid';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_column')) {
	if(!pdo_fieldexists('sudu8_page_auction_column',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_column')." ADD `name` varchar(255) NOT NULL COMMENT '栏目名称';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_column')) {
	if(!pdo_fieldexists('sudu8_page_auction_column',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_column')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'user_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `user_id` varchar(255) NOT NULL COMMENT '用户';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'auction_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `auction_id` int(11) NOT NULL COMMENT '物品id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'deposit')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `deposit` float NOT NULL COMMENT '保证金';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'deposit_wx')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `deposit_wx` float NOT NULL COMMENT '微信付款额';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'out_trade_no')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `out_trade_no` varchar(255) NOT NULL COMMENT '订单号';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'out_refund_no')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `out_refund_no` varchar(255) NOT NULL COMMENT '退款号';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `createtime` datetime NOT NULL COMMENT '创建时间';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'stat')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `stat` int(11) NOT NULL COMMENT '状态 1：已退还 2：未退还';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'form_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `form_id` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_auction_deposit')) {
	if(!pdo_fieldexists('sudu8_page_auction_deposit',  'prepayid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_deposit')." ADD `prepayid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '上架物品id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `name` varchar(50) NOT NULL COMMENT '上架拍卖物名称';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'img')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `img` varchar(200) NOT NULL COMMENT '上架物品封面/缩略图';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'imglist')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `imglist` text COMMENT '组图';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'introduce')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `introduce` text COMMENT '上架物品介绍';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'Distribution_instructions')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `Distribution_instructions` text COMMENT '配送说明';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'rules')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `rules` float NOT NULL COMMENT '加价幅度';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'bond')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `bond` float DEFAULT '0' COMMENT '保证金';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `price` float NOT NULL COMMENT '市场价';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'basc_cost')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `basc_cost` float NOT NULL COMMENT '底价';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'starttime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `starttime` datetime NOT NULL COMMENT '起拍时间';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'endtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `endtime` datetime NOT NULL COMMENT '结束时间';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'stat')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `stat` int(1) DEFAULT '1' COMMENT '状态， 0 下架 1上架 2 完成 3 流拍';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'max_cost')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `max_cost` float DEFAULT '0' COMMENT '最高出价';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'max_user')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `max_user` varchar(255) COMMENT '出价最高者id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'flow')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `flow` int(11) DEFAULT '0' COMMENT '围观人数';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `uniacid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_auction_goodslist')) {
	if(!pdo_fieldexists('sudu8_page_auction_goodslist',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_goodslist')." ADD `cid` int(11) NOT NULL COMMENT '栏目id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_log')) {
	if(!pdo_fieldexists('sudu8_page_auction_log',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_log')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_log')) {
	if(!pdo_fieldexists('sudu8_page_auction_log',  'user_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_log')." ADD `user_id` varchar(255) NOT NULL COMMENT '出价人';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_log')) {
	if(!pdo_fieldexists('sudu8_page_auction_log',  'auction_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_log')." ADD `auction_id` int(11) NOT NULL COMMENT '出价物品id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_log')) {
	if(!pdo_fieldexists('sudu8_page_auction_log',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_log')." ADD `createtime` datetime NOT NULL COMMENT '时间';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_log')) {
	if(!pdo_fieldexists('sudu8_page_auction_log',  'cost')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_log')." ADD `cost` float NOT NULL COMMENT '出价';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_log')) {
	if(!pdo_fieldexists('sudu8_page_auction_log',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_log')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_message')) {
	if(!pdo_fieldexists('sudu8_page_auction_message',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_message')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_message')) {
	if(!pdo_fieldexists('sudu8_page_auction_message',  'mid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_message')." ADD `mid` varchar(255) NOT NULL COMMENT '模板id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_message')) {
	if(!pdo_fieldexists('sudu8_page_auction_message',  'url')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_message')." ADD `url` varchar(255) NOT NULL COMMENT 'url';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_message')) {
	if(!pdo_fieldexists('sudu8_page_auction_message',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_message')." ADD `uniacid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_message')) {
	if(!pdo_fieldexists('sudu8_page_auction_message',  'class')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_message')." ADD `class` varchar(255) NOT NULL COMMENT '类型';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'user_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `user_id` varchar(255) NOT NULL COMMENT '购买人';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'cost')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `cost` float NOT NULL COMMENT '金额';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'auction_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `auction_id` int(11) NOT NULL COMMENT '物品id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'created_at')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `created_at` datetime NOT NULL COMMENT '创建时间';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'update_at')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `update_at` datetime NOT NULL COMMENT '更新时间';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'paid_at')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `paid_at` datetime NOT NULL COMMENT '支付时间';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'order_no')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `order_no` varchar(255) NOT NULL COMMENT '订单号';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'fast_no')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `fast_no` varchar(255) NOT NULL COMMENT '快递单号';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'fastname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `fastname` varchar(200) NOT NULL COMMENT '快递名字';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'stat')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `stat` int(1) NOT NULL COMMENT '订单状态（0:待付款 1：待发货，2：已发货，3：已签收，4：删除）';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `address` varchar(255) NOT NULL COMMENT '地址';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'address_more')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `address_more` varchar(255) NOT NULL COMMENT '详细地址';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'userother')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `userother` varchar(255) NOT NULL COMMENT '留言';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'phone')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `phone` varchar(30) NOT NULL COMMENT '电话';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'fast')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `fast` int(1) NOT NULL DEFAULT '0' COMMENT '提醒发货';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'formid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `formid` varchar(255) NOT NULL COMMENT 'formid';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'cost_wx')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `cost_wx` float NOT NULL COMMENT '微信支付';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_order')) {
	if(!pdo_fieldexists('sudu8_page_auction_order',  'cost_purse')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_order')." ADD `cost_purse` float NOT NULL COMMENT '余额支付';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_remind')) {
	if(!pdo_fieldexists('sudu8_page_auction_remind',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_remind')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_remind')) {
	if(!pdo_fieldexists('sudu8_page_auction_remind',  'user_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_remind')." ADD `user_id` varchar(255) NOT NULL COMMENT '用户的id（识别）';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_remind')) {
	if(!pdo_fieldexists('sudu8_page_auction_remind',  'auction_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_remind')." ADD `auction_id` int(11) NOT NULL COMMENT '用户关注的拍卖物id';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_remind')) {
	if(!pdo_fieldexists('sudu8_page_auction_remind',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_remind')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_auction_remind')) {
	if(!pdo_fieldexists('sudu8_page_auction_remind',  'formid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_remind')." ADD `formid` varchar(255) NOT NULL COMMENT '用户发送提醒';");
	}	
}
if(pdo_tableexists('sudu8_page_auction_remind')) {
	if(!pdo_fieldexists('sudu8_page_auction_remind',  'stat')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_auction_remind')." ADD `stat` int(1) NOT NULL DEFAULT '0' COMMENT '1 已经提醒，0未提醒';");
	}	
}
if(pdo_tableexists('sudu8_page_banner')) {
	if(!pdo_fieldexists('sudu8_page_banner',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_banner')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_banner')) {
	if(!pdo_fieldexists('sudu8_page_banner',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_banner')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_banner')) {
	if(!pdo_fieldexists('sudu8_page_banner',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_banner')." ADD `type` char(20) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_banner')) {
	if(!pdo_fieldexists('sudu8_page_banner',  'pic')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_banner')." ADD `pic` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_banner')) {
	if(!pdo_fieldexists('sudu8_page_banner',  'url')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_banner')." ADD `url` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_banner')) {
	if(!pdo_fieldexists('sudu8_page_banner',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_banner')." ADD `flag` int(1) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_banner')) {
	if(!pdo_fieldexists('sudu8_page_banner',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_banner')." ADD `num` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_banner')) {
	if(!pdo_fieldexists('sudu8_page_banner',  'descp')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_banner')." ADD `descp` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'banner')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `banner` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `name` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'logo')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `logo` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'desc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `desc` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `address` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `time` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tel` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'longitude')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `longitude` varchar(20);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'latitude')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `latitude` varchar(20);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'about')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `about` text;");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'catename')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `catename` varchar(255) DEFAULT '产品 & 服务';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'catenameen')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `catenameen` varchar(255) DEFAULT 'Products and Services';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'copyright')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `copyright` varchar(255) DEFAULT '技术支持：小程序科技';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tel_b')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tel_b` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'index_style')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `index_style` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'about_style')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `about_style` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'prolist_style')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `prolist_style` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'slide')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `slide` varchar(2550) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'aboutCN')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `aboutCN` varchar(255) NOT NULL DEFAULT '门店介绍';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'aboutCNen')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `aboutCNen` varchar(255) NOT NULL DEFAULT 'About Store';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'index_about_title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `index_about_title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'footer_style')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `footer_style` varchar(255) COMMENT '底部样式';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'base_color')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `base_color` varchar(255) COMMENT '背景色';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'base_color2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `base_color2` varchar(255) COMMENT '前景色';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'index_pro_btn')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `index_pro_btn` varchar(255) COMMENT '产品标题样式';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'index_pro_lstyle')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `index_pro_lstyle` varchar(255) COMMENT '产品列表样式';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'index_pro_tstyle')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `index_pro_tstyle` varchar(255) COMMENT '产品列表标题样式';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'index_pro_ts_al')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `index_pro_ts_al` varchar(255) COMMENT '产品标题位置';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `uniacid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'base_color_t')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `base_color_t` varchar(10);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'c_title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `c_title` int(2);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'copyimg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `copyimg` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'video')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `video` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'v_img')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `v_img` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'i_b_x_ts')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `i_b_x_ts` int(2);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'i_b_y_ts')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `i_b_y_ts` int(2);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'catename_x')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `catename_x` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'catenameen_x')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `catenameen_x` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tel_box')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tel_box` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabbar_bg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabbar_bg` char(10);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabbar_tc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabbar_tc` char(10);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabbar')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabbar` text;");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabnum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabnum` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'copy_do')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `copy_do` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'copy_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `copy_id` int(5);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'base_tcolor')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `base_tcolor` varchar(10);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'color_bar')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `color_bar` char(8);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'c_b_bg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `c_b_bg` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'c_b_btn')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `c_b_btn` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'i_b_x_iw')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `i_b_x_iw` int(3);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'form_index')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `form_index` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabbar_tca')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabbar_tca` char(10);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabbar_time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabbar_time` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'config')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `config` varchar(1000);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabbar_t')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabbar_t` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'hxmm')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `hxmm` varchar(255) DEFAULT 'hx123456';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'logo2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `logo2` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'sharejf')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `sharejf` varchar(255) NOT NULL DEFAULT '10';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'sharetype')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `sharetype` int(1) NOT NULL DEFAULT '3';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'sharexz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `sharexz` int(11) NOT NULL DEFAULT '10';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'spcatename')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `spcatename` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'spcatenameen')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `spcatenameen` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'sp_i_b_y_ts')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `sp_i_b_y_ts` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'sptj_max')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `sptj_max` int(11) NOT NULL DEFAULT '10';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'sptj_max_sp')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `sptj_max_sp` int(11) NOT NULL DEFAULT '10';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'gonggao')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `gonggao` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'gonggaoUrl')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `gonggaoUrl` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'homepage')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `homepage` int(1) NOT NULL DEFAULT '1' COMMENT '1默认首页 2diy首页';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'bookname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `bookname` varchar(10) DEFAULT '在线预约';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'bookurl')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `bookurl` varchar(50) DEFAULT '/sudu8_page/book/book';");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabnum_new')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabnum_new` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_base')) {
	if(!pdo_fieldexists('sudu8_page_base',  'tabbar_new')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_base')." ADD `tabbar_new` varchar(8000);");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `cid` int(11) COMMENT '父栏目ID';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `uniacid` int(11) COMMENT 'uniacid';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `name` varchar(255) COMMENT '栏目名';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'ename')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `ename` varchar(255) COMMENT '栏目英文名';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'cdesc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `cdesc` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `type` varchar(20) COMMENT '栏目类型';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'show_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `show_i` int(1) COMMENT '首页显示';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'statue')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `statue` int(1) COMMENT '栏目状态';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `num` int(5) COMMENT '栏目排序';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'catepic')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `catepic` varchar(255) COMMENT '栏目图片';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'list_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `list_type` int(2) COMMENT '列表显示类型';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'list_style')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `list_style` int(2) COMMENT '列表样式';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'list_stylet')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `list_stylet` char(10) COMMENT '列表样式里的标题样式';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'list_tstyle')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `list_tstyle` int(2) COMMENT '首页标题样式';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'list_tstylel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `list_tstylel` int(2);");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'content')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `content` mediumtext;");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'name_n')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `name_n` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'pic_page_btn')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `pic_page_btn` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'cateconf')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `cateconf` varchar(500);");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'pic_page_bg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `pic_page_bg` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'list_style_more')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `list_style_more` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'slide_is')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `slide_is` int(1) NOT NULL DEFAULT '2';");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'cateslide')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `cateslide` varchar(2000);");
	}	
}
if(pdo_tableexists('sudu8_page_cate')) {
	if(!pdo_fieldexists('sudu8_page_cate',  'pagenum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_cate')." ADD `pagenum` int(11) DEFAULT '10';");
	}	
}
if(pdo_tableexists('sudu8_page_collect')) {
	if(!pdo_fieldexists('sudu8_page_collect',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_collect')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_collect')) {
	if(!pdo_fieldexists('sudu8_page_collect',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_collect')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_collect')) {
	if(!pdo_fieldexists('sudu8_page_collect',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_collect')." ADD `type` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_collect')) {
	if(!pdo_fieldexists('sudu8_page_collect',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_collect')." ADD `cid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_collect')) {
	if(!pdo_fieldexists('sudu8_page_collect',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_collect')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_comment')) {
	if(!pdo_fieldexists('sudu8_page_comment',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_comment')." ADD `id` int(255) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_comment')) {
	if(!pdo_fieldexists('sudu8_page_comment',  'aid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_comment')." ADD `aid` int(11) NOT NULL COMMENT '文章id';");
	}	
}
if(pdo_tableexists('sudu8_page_comment')) {
	if(!pdo_fieldexists('sudu8_page_comment',  'text')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_comment')." ADD `text` text NOT NULL COMMENT '评论内容';");
	}	
}
if(pdo_tableexists('sudu8_page_comment')) {
	if(!pdo_fieldexists('sudu8_page_comment',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_comment')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_comment')) {
	if(!pdo_fieldexists('sudu8_page_comment',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_comment')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_comment')) {
	if(!pdo_fieldexists('sudu8_page_comment',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_comment')." ADD `flag` int(1) DEFAULT '0' COMMENT '0未审  1通过  2不通过';");
	}	
}
if(pdo_tableexists('sudu8_page_comment')) {
	if(!pdo_fieldexists('sudu8_page_comment',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_comment')." ADD `createtime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_comment')) {
	if(!pdo_fieldexists('sudu8_page_comment',  'follow')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_comment')." ADD `follow` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_copyright')) {
	if(!pdo_fieldexists('sudu8_page_copyright',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_copyright')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_copyright')) {
	if(!pdo_fieldexists('sudu8_page_copyright',  'copycon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_copyright')." ADD `copycon` mediumtext;");
	}	
}
if(pdo_tableexists('sudu8_page_copyright')) {
	if(!pdo_fieldexists('sudu8_page_copyright',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_copyright')." ADD `uniacid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `num` int(11) NOT NULL DEFAULT '0' COMMENT '序号排序';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `title` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `uniacid` int(11) NOT NULL COMMENT '小程序ID';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `price` varchar(255) NOT NULL DEFAULT '0' COMMENT '优惠价格';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'pay_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `pay_money` varchar(255) NOT NULL DEFAULT '0' COMMENT '使用条件价格';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'btime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `btime` int(11) NOT NULL DEFAULT '0' COMMENT '使用开始日期';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'etime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `etime` int(11) NOT NULL DEFAULT '0' COMMENT '优惠券结束日期';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'counts')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `counts` int(11) NOT NULL DEFAULT '-1' COMMENT '优惠券总数';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'xz_count')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `xz_count` int(11) NOT NULL DEFAULT '0' COMMENT '每人限制领取数';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `creattime` int(11) NOT NULL COMMENT '优惠券创建时间';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `flag` int(1) NOT NULL DEFAULT '1' COMMENT '0关闭   1开启';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'color')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `color` char(10) NOT NULL DEFAULT '#ff6600';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon')) {
	if(!pdo_fieldexists('sudu8_page_coupon',  'nownum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon')." ADD `nownum` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_set')) {
	if(!pdo_fieldexists('sudu8_page_coupon_set',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_set')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_set')) {
	if(!pdo_fieldexists('sudu8_page_coupon_set',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_set')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_set')) {
	if(!pdo_fieldexists('sudu8_page_coupon_set',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_set')." ADD `flag` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `uniacid` int(11) COMMENT '小程序id';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `uid` int(11) COMMENT '用户id';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `cid` int(11) COMMENT '优惠券id';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'ltime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `ltime` int(11) DEFAULT '0' COMMENT '领取时间';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'utime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `utime` int(11) DEFAULT '0' COMMENT '使用时间';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'btime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `btime` int(11) DEFAULT '0' COMMENT '开始时间';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'etime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `etime` int(11) DEFAULT '0' COMMENT '结束时间';");
	}	
}
if(pdo_tableexists('sudu8_page_coupon_user')) {
	if(!pdo_fieldexists('sudu8_page_coupon_user',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_coupon_user')." ADD `flag` int(11) NOT NULL DEFAULT '0' COMMENT '0未使用1已使用2已过期';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage')) {
	if(!pdo_fieldexists('sudu8_page_diypage',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_diypage')) {
	if(!pdo_fieldexists('sudu8_page_diypage',  'index')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage')." ADD `index` int(1) NOT NULL DEFAULT '0' COMMENT '是否首页';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage')) {
	if(!pdo_fieldexists('sudu8_page_diypage',  'page')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage')." ADD `page` varchar(3000) NOT NULL COMMENT '页面信息';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage')) {
	if(!pdo_fieldexists('sudu8_page_diypage',  'items')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage')." ADD `items` text NOT NULL COMMENT '组件信息';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage')) {
	if(!pdo_fieldexists('sudu8_page_diypage',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage')." ADD `uniacid` int(5) NOT NULL COMMENT '公众号';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage')) {
	if(!pdo_fieldexists('sudu8_page_diypage',  'tpl_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage')." ADD `tpl_name` varchar(32) NOT NULL COMMENT '模板名称';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypage_sys',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage_sys')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_diypage_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypage_sys',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage_sys')." ADD `uniacid` int(5) NOT NULL COMMENT '小程序';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypage_sys',  'index')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage_sys')." ADD `index` int(1) NOT NULL DEFAULT '0' COMMENT '是否首页';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypage_sys',  'page')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage_sys')." ADD `page` varchar(3000) NOT NULL COMMENT '页面信息';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypage_sys',  'items')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage_sys')." ADD `items` mediumtext NOT NULL COMMENT '组件信息';");
	}	
}
if(pdo_tableexists('sudu8_page_diypage_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypage_sys',  'tpl_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypage_sys')." ADD `tpl_name` varchar(32) NOT NULL COMMENT '模板名称';");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'go_home')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `go_home` int(1) NOT NULL DEFAULT '1' COMMENT '1倒计时 2按钮';");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'kp')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `kp` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'kp_is')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `kp_is` int(1) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'kp_url')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `kp_url` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'kp_urltype')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `kp_urltype` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'kp_m')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `kp_m` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'tc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `tc` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'tc_is')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `tc_is` int(1) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'tc_url')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `tc_url` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'tc_urltype')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `tc_urltype` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'foot_is')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `foot_is` int(1) NOT NULL DEFAULT '1' COMMENT '1默认 2diy底部';");
	}	
}
if(pdo_tableexists('sudu8_page_diypageset')) {
	if(!pdo_fieldexists('sudu8_page_diypageset',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypageset')." ADD `pid` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl',  'pageid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl')." ADD `pageid` varchar(64) NOT NULL COMMENT '页面id列表';");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl',  'template_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl')." ADD `template_name` varchar(18) NOT NULL COMMENT '模板名称';");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl')." ADD `thumb` varchar(158) NOT NULL COMMENT '页面封面图';");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl')." ADD `uniacid` int(5) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl',  'create_time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl')." ADD `create_time` varchar(32) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl')." ADD `status` int(1) DEFAULT '2';");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl_sys',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl_sys')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl_sys',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl_sys')." ADD `uniacid` int(5) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl_sys',  'pageid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl_sys')." ADD `pageid` varchar(64) NOT NULL COMMENT '页面id列表';");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl_sys',  'template_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl_sys')." ADD `template_name` varchar(18) NOT NULL COMMENT '模板名称';");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl_sys',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl_sys')." ADD `thumb` varchar(158) NOT NULL COMMENT '页面封面图';");
	}	
}
if(pdo_tableexists('sudu8_page_diypagetpl_sys')) {
	if(!pdo_fieldexists('sudu8_page_diypagetpl_sys',  'create_time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_diypagetpl_sys')." ADD `create_time` varchar(32) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `cid` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'pcid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `pcid` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'type_x')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `type_x` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'type_y')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `type_y` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'type_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `type_i` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `price` float NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'mark_price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `mark_price` float NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'imgtext')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `imgtext` varchar(2000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'descs')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `descs` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'texts')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `texts` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `types` int(1) NOT NULL DEFAULT '1' COMMENT '1不启用规格 2启用规格';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'explains')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `explains` varchar(255) NOT NULL COMMENT '说明';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `score` varchar(255) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'xsl')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `xsl` int(11) NOT NULL DEFAULT '0' COMMENT '销售量';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products')) {
	if(!pdo_fieldexists('sudu8_page_duo_products',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products')." ADD `flag` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `name` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'mobile')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `mobile` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `address` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'more_address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `more_address` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'postalcode')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `postalcode` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'is_mo')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `is_mo` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_address')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_address',  'froms')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_address')." ADD `froms` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_gwc')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_gwc',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_gwc')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_gwc')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_gwc',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_gwc')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_gwc')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_gwc',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_gwc')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_gwc')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_gwc',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_gwc')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_gwc')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_gwc',  'pvid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_gwc')." ADD `pvid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_gwc')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_gwc',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_gwc')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_gwc')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_gwc',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_gwc')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_gwc')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_gwc',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_gwc')." ADD `flag` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'order_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `order_id` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `price` float NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'jsondata')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `jsondata` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'coupon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `coupon` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'jf')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `jf` varchar(255) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `address` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'm_address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `m_address` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'liuyan')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `liuyan` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'hxtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `hxtime` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'nav')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `nav` int(1) NOT NULL DEFAULT '1' COMMENT '1发货  2自提';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'kuadi')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `kuadi` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'kuaidihao')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `kuaidihao` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `flag` int(1) NOT NULL DEFAULT '0' COMMENT '0未支付1已支付2已结算3已过期';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'formid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `formid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'qxbeizhu')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `qxbeizhu` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'sid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `sid` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'payprice')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `payprice` float NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'prepayid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `prepayid` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'kuaidi_th')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `kuaidi_th` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'kuaidihao_th')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `kuaidihao_th` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_order')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_order',  'th_orderid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_order')." ADD `th_orderid` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'type1')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `type1` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'type2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `type2` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'type3')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `type3` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'kc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `kc` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'hnum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `hnum` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'comment')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `comment` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'salenum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `salenum` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_type_value')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_type_value',  'vsalenum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_type_value')." ADD `vsalenum` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_yunfei')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_yunfei',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_yunfei')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_yunfei')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_yunfei',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_yunfei')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_yunfei')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_yunfei',  'yfei')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_yunfei')." ADD `yfei` varchar(255) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_yunfei')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_yunfei',  'byou')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_yunfei')." ADD `byou` varchar(255) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_duo_products_yunfei')) {
	if(!pdo_fieldexists('sudu8_page_duo_products_yunfei',  'formset')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_duo_products_yunfei')." ADD `formset` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `cid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'pcid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `pcid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'counts')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `counts` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'true_price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `true_price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'labels')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `labels` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `flag` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'descimg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `descimg` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'desccon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `desccon` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_food')) {
	if(!pdo_fieldexists('sudu8_page_food',  'unit')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food')." ADD `unit` char(10) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_cate')) {
	if(!pdo_fieldexists('sudu8_page_food_cate',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_cate')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_food_cate')) {
	if(!pdo_fieldexists('sudu8_page_food_cate',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_cate')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_cate')) {
	if(!pdo_fieldexists('sudu8_page_food_cate',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_cate')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_cate')) {
	if(!pdo_fieldexists('sudu8_page_food_cate',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_cate')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_cate')) {
	if(!pdo_fieldexists('sudu8_page_food_cate',  'dateline')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_cate')." ADD `dateline` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_cate')) {
	if(!pdo_fieldexists('sudu8_page_food_cate',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_cate')." ADD `flag` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'order_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `order_id` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'username')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `username` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'usertel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `usertel` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `address` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'usertime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `usertime` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'userbeiz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `userbeiz` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'val')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `val` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `flag` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_food_order')) {
	if(!pdo_fieldexists('sudu8_page_food_order',  'zh')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_order')." ADD `zh` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `uniacid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'pname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `pname` varchar(255) NOT NULL COMMENT '打印机名称';");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `title` varchar(255) NOT NULL COMMENT '头部标题';");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'models')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `models` varchar(255) NOT NULL COMMENT '打印机类型';");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `status` int(1) NOT NULL DEFAULT '2' COMMENT '1开启  2不开启';");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'nid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `nid` varchar(255) NOT NULL COMMENT '打印机终端号';");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'nkey')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `nkey` varchar(255) NOT NULL COMMENT '终端号秘钥';");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `uid` varchar(255) NOT NULL COMMENT '用户id';");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'apikey')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `apikey` varchar(255) NOT NULL COMMENT '秘钥';");
	}	
}
if(pdo_tableexists('sudu8_page_food_printer')) {
	if(!pdo_fieldexists('sudu8_page_food_printer',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_printer')." ADD `createtime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'names')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `names` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'times')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `times` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'fuwu')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `fuwu` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'qita')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `qita` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'usname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `usname` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'ustel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `ustel` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'usadd')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `usadd` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'usdate')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `usdate` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'ustime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `ustime` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `score` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'phone')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `phone` varchar(15) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `address` varchar(100) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'tags')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `tags` varchar(100) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_sj')) {
	if(!pdo_fieldexists('sudu8_page_food_sj',  'notice')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_sj')." ADD `notice` varchar(200) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_tables')) {
	if(!pdo_fieldexists('sudu8_page_food_tables',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_tables')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_food_tables')) {
	if(!pdo_fieldexists('sudu8_page_food_tables',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_tables')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_tables')) {
	if(!pdo_fieldexists('sudu8_page_food_tables',  'tnum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_tables')." ADD `tnum` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_tables')) {
	if(!pdo_fieldexists('sudu8_page_food_tables',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_tables')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_food_tables')) {
	if(!pdo_fieldexists('sudu8_page_food_tables',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_food_tables')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_form_dd')) {
	if(!pdo_fieldexists('sudu8_page_form_dd',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_form_dd')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_form_dd')) {
	if(!pdo_fieldexists('sudu8_page_form_dd',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_form_dd')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_form_dd')) {
	if(!pdo_fieldexists('sudu8_page_form_dd',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_form_dd')." ADD `cid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_form_dd')) {
	if(!pdo_fieldexists('sudu8_page_form_dd',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_form_dd')." ADD `types` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_form_dd')) {
	if(!pdo_fieldexists('sudu8_page_form_dd',  'datys')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_form_dd')." ADD `datys` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_form_dd')) {
	if(!pdo_fieldexists('sudu8_page_form_dd',  'pagedatekey')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_form_dd')." ADD `pagedatekey` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_form_dd')) {
	if(!pdo_fieldexists('sudu8_page_form_dd',  'arrkey')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_form_dd')." ADD `arrkey` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_form_dd')) {
	if(!pdo_fieldexists('sudu8_page_form_dd',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_form_dd')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `cid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'val')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `val` varchar(20000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `flag` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'beizhu')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `beizhu` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'vtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `vtime` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'formid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `formid` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'source')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `source` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_formcon')) {
	if(!pdo_fieldexists('sudu8_page_formcon',  'fid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formcon')." ADD `fid` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_formlist')) {
	if(!pdo_fieldexists('sudu8_page_formlist',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formlist')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_formlist')) {
	if(!pdo_fieldexists('sudu8_page_formlist',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formlist')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formlist')) {
	if(!pdo_fieldexists('sudu8_page_formlist',  'formname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formlist')." ADD `formname` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formlist')) {
	if(!pdo_fieldexists('sudu8_page_formlist',  'tp_text')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formlist')." ADD `tp_text` varchar(8000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `name` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'tel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `tel` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'wechat')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `wechat` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `address` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'date')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `date` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'single')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `single` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'checkbox')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `checkbox` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'content')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `content` text;");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `time` int(10);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `status` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'vtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `vtime` int(10);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `uniacid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'sss_beizhu')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `sss_beizhu` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'timef')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `timef` varchar(10);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  't5')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `t5` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  't6')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `t6` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'c2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `c2` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  's2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `s2` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms')) {
	if(!pdo_fieldexists('sudu8_page_forms',  'con2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms')." ADD `con2` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'forms_head')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `forms_head` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'forms_head_con')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `forms_head_con` text;");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'forms_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `forms_name` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'forms_ename')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `forms_ename` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'forms_title_s')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `forms_title_s` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'success')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `success` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `name` varchar(255) DEFAULT '姓名';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'name_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `name_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'tel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `tel` varchar(255) DEFAULT '手机';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'tel_use')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `tel_use` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'tel_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `tel_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'wechat')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `wechat` varchar(255) DEFAULT '微信';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'wechat_use')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `wechat_use` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'wechat_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `wechat_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `address` varchar(255) DEFAULT '地址';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'address_use')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `address_use` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'address_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `address_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'date')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `date` varchar(255) DEFAULT '预约时间';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'date_use')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `date_use` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'date_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `date_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'single_n')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `single_n` varchar(255) DEFAULT '性别';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'single_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `single_num` int(2) DEFAULT '2';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'single_v')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `single_v` varchar(255) DEFAULT '男,女';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'single_use')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `single_use` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'single_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `single_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'checkbox_n')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `checkbox_n` varchar(255) DEFAULT '类型';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'checkbox_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `checkbox_num` int(2) DEFAULT '2';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'checkbox_v')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `checkbox_v` varchar(255) DEFAULT '栏目一,栏目二';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'checkbox_use')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `checkbox_use` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'content_n')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `content_n` varchar(255) DEFAULT '留言内容';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'content_use')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `content_use` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'content_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `content_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'checkbox_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `checkbox_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'mail_user')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `mail_user` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'mail_password')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `mail_password` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'mail_sendto')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `mail_sendto` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'forms_btn')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `forms_btn` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'mail_user_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `mail_user_name` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'forms_style')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `forms_style` int(2);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'forms_inps')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `forms_inps` int(2);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'subtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `subtime` int(2);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'time_use')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `time_use` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'time_must')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `time_must` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `time` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'tel_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `tel_i` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'wechat_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `wechat_i` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'address_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `address_i` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'date_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `date_i` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'time_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `time_i` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'single_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `single_i` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'checkbox_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `checkbox_i` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'content_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `content_i` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  't5')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `t5` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  't6')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `t6` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'c2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `c2` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  's2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `s2` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'con2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `con2` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_forms_config')) {
	if(!pdo_fieldexists('sudu8_page_forms_config',  'img1')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forms_config')." ADD `img1` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_formt')) {
	if(!pdo_fieldexists('sudu8_page_formt',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formt')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_formt')) {
	if(!pdo_fieldexists('sudu8_page_formt',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formt')." ADD `name` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formt')) {
	if(!pdo_fieldexists('sudu8_page_formt',  'val')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formt')." ADD `val` varchar(50) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_formt')) {
	if(!pdo_fieldexists('sudu8_page_formt',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_formt')." ADD `flag` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_collection')) {
	if(!pdo_fieldexists('sudu8_page_forum_collection',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_collection')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_collection')) {
	if(!pdo_fieldexists('sudu8_page_forum_collection',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_collection')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_collection')) {
	if(!pdo_fieldexists('sudu8_page_forum_collection',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_collection')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_collection')) {
	if(!pdo_fieldexists('sudu8_page_forum_collection',  'collection')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_collection')." ADD `collection` tinyint(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_collection')) {
	if(!pdo_fieldexists('sudu8_page_forum_collection',  'rid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_collection')." ADD `rid` int(11) NOT NULL COMMENT 'release表id';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_collection')) {
	if(!pdo_fieldexists('sudu8_page_forum_collection',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_collection')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment',  'rid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment')." ADD `rid` int(11) NOT NULL COMMENT '发布的id';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment')." ADD `uid` int(11) NOT NULL COMMENT '用户id';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment',  'content')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment')." ADD `content` mediumtext NOT NULL COMMENT '评论内容';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment')." ADD `flag` int(1) NOT NULL COMMENT '1显示 2不显示';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment',  'likesNum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment')." ADD `likesNum` int(11) NOT NULL COMMENT '点赞数';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment_likes',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment_likes')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment_likes',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment_likes')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment_likes',  'commentId')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment_likes')." ADD `commentId` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment_likes',  'likes')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment_likes')." ADD `likes` tinyint(1) NOT NULL COMMENT '1点赞 2不点赞';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment_likes',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment_likes')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_comment_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_comment_likes',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_comment_likes')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_func')) {
	if(!pdo_fieldexists('sudu8_page_forum_func',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_func')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_func')) {
	if(!pdo_fieldexists('sudu8_page_forum_func',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_func')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_func')) {
	if(!pdo_fieldexists('sudu8_page_forum_func',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_func')." ADD `title` mediumtext NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_func')) {
	if(!pdo_fieldexists('sudu8_page_forum_func',  'func_img')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_func')." ADD `func_img` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_func')) {
	if(!pdo_fieldexists('sudu8_page_forum_func',  'page_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_func')." ADD `page_type` int(1) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_func')) {
	if(!pdo_fieldexists('sudu8_page_forum_func',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_func')." ADD `num` int(11) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_func')) {
	if(!pdo_fieldexists('sudu8_page_forum_func',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_func')." ADD `status` int(1) NOT NULL DEFAULT '1' COMMENT '1启用 2不启用';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_func')) {
	if(!pdo_fieldexists('sudu8_page_forum_func',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_func')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_likes',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_likes')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_likes',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_likes')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_likes',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_likes')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_likes',  'likes')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_likes')." ADD `likes` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1点赞 2不点赞';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_likes',  'rid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_likes')." ADD `rid` int(11) NOT NULL COMMENT 'release表id';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_likes',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_likes')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'orderid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `orderid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'release_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `release_money` decimal(5,2) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'stick_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `stick_money` decimal(5,2) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'stick_days')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `stick_days` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `flag` int(1) NOT NULL DEFAULT '2' COMMENT '1已支付  2未支付';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_order')) {
	if(!pdo_fieldexists('sudu8_page_forum_order',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_order')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'fid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `fid` int(11) NOT NULL COMMENT '发布功能分类id';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'content')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `content` mediumtext NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'img')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `img` mediumtext NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `uid` int(11) NOT NULL COMMENT '发布人id';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'release_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `release_money` decimal(5,2) NOT NULL COMMENT '发布收费';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'hot')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `hot` tinyint(1) unsigned NOT NULL DEFAULT '2' COMMENT '是否推荐（1推荐 2不推荐）';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'hits')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `hits` int(11) NOT NULL COMMENT '浏览人数';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'likes')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `likes` int(11) NOT NULL COMMENT '点赞数';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'collection')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `collection` int(11) NOT NULL COMMENT '收藏数';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'comment')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `comment` int(11) NOT NULL COMMENT '评论数';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'telphone')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `telphone` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `address` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'stick')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `stick` int(1) NOT NULL DEFAULT '2' COMMENT '1置顶 2不置顶';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_release')) {
	if(!pdo_fieldexists('sudu8_page_forum_release',  'updatetime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_release')." ADD `updatetime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply',  'commentId')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply')." ADD `commentId` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply',  'content')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply')." ADD `content` mediumtext NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply',  'release_uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply')." ADD `release_uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply',  'likesNum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply')." ADD `likesNum` int(11) NOT NULL COMMENT '点赞数';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply_likes',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply_likes')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply_likes',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply_likes')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply_likes',  'replyId')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply_likes')." ADD `replyId` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply_likes',  'likes')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply_likes')." ADD `likes` tinyint(1) NOT NULL COMMENT '1点赞 2不点赞';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply_likes',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply_likes')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_reply_likes')) {
	if(!pdo_fieldexists('sudu8_page_forum_reply_likes',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_reply_likes')." ADD `createtime` datetime NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_set')) {
	if(!pdo_fieldexists('sudu8_page_forum_set',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_set')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_set')) {
	if(!pdo_fieldexists('sudu8_page_forum_set',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_set')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_set')) {
	if(!pdo_fieldexists('sudu8_page_forum_set',  'release_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_set')." ADD `release_money` decimal(5,2) NOT NULL DEFAULT '0.00';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_set')) {
	if(!pdo_fieldexists('sudu8_page_forum_set',  'stick_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_set')." ADD `stick_money` decimal(5,2) NOT NULL DEFAULT '10.00';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_stick')) {
	if(!pdo_fieldexists('sudu8_page_forum_stick',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_stick')." ADD `id` int(11) unsigned NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_stick')) {
	if(!pdo_fieldexists('sudu8_page_forum_stick',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_stick')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_forum_stick')) {
	if(!pdo_fieldexists('sudu8_page_forum_stick',  'rid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_stick')." ADD `rid` int(11) NOT NULL COMMENT '发布id';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_stick')) {
	if(!pdo_fieldexists('sudu8_page_forum_stick',  'stick')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_stick')." ADD `stick` int(1) NOT NULL COMMENT '是否置顶 1置顶 2不置顶';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_stick')) {
	if(!pdo_fieldexists('sudu8_page_forum_stick',  'stick_days')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_stick')." ADD `stick_days` int(11) NOT NULL COMMENT '置顶时长';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_stick')) {
	if(!pdo_fieldexists('sudu8_page_forum_stick',  'stick_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_stick')." ADD `stick_money` decimal(10,2) NOT NULL COMMENT '置顶费用';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_stick')) {
	if(!pdo_fieldexists('sudu8_page_forum_stick',  'stick_time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_stick')." ADD `stick_time` datetime NOT NULL COMMENT '置顶时间';");
	}	
}
if(pdo_tableexists('sudu8_page_forum_stick')) {
	if(!pdo_fieldexists('sudu8_page_forum_stick',  'stick_status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_forum_stick')." ADD `stick_status` int(1) NOT NULL COMMENT '置顶状态 1启用 2不启用';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'fx_cj')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `fx_cj` int(1) NOT NULL DEFAULT '4' COMMENT '1一级2二级3三级4不启用';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'sxj_gx')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `sxj_gx` int(1) NOT NULL DEFAULT '1' COMMENT '1点击分享2首次下单3首次付款';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'fxs_sz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `fxs_sz` int(1) NOT NULL DEFAULT '1' COMMENT '1无条件2申请3消费次数4消费金额5购买商品';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'fxs_sz_val')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `fxs_sz_val` varchar(255) NOT NULL DEFAULT '0' COMMENT '分销商规则值';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'fxs_xy')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `fxs_xy` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'one_bili')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `one_bili` int(11) NOT NULL DEFAULT '0' COMMENT '一级比例';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'two_bili')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `two_bili` int(11) NOT NULL DEFAULT '0' COMMENT '二级比例';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'three_bili')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `three_bili` int(11) NOT NULL DEFAULT '0' COMMENT '三级比例';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'txmoney')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `txmoney` float NOT NULL DEFAULT '10';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'certtext')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `certtext` varchar(2000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'keytext')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `keytext` varchar(2000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'catext')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `catext` varchar(2000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `thumb` varchar(255) NOT NULL COMMENT '分享推广图';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'miaos')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `miaos` int(11) NOT NULL DEFAULT '5';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'fx_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `fx_name` varchar(255) NOT NULL DEFAULT '分销商';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'sq_thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `sq_thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_gz')) {
	if(!pdo_fieldexists('sudu8_page_fx_gz',  'fxs_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_gz')." ADD `fxs_name` varchar(255) NOT NULL DEFAULT '分销商';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `openid` varchar(1000) NOT NULL COMMENT '消费者openid';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'parent_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `parent_id` varchar(1000) NOT NULL COMMENT '父级获得的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'parent_id_get')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `parent_id_get` float NOT NULL COMMENT '父级获得的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'p_parent_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `p_parent_id` varchar(1000) NOT NULL COMMENT '父级的父级的id';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'p_parent_id_get')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `p_parent_id_get` float NOT NULL COMMENT '父级的父级获得的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'p_p_parent_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `p_p_parent_id` varchar(1000) NOT NULL COMMENT '父级的父级的父级的id';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'p_p_parent_id_get')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `p_p_parent_id_get` float NOT NULL COMMENT '父级的父级的父级获得的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'order_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `order_id` varchar(1000) NOT NULL COMMENT '订单id';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_ls')) {
	if(!pdo_fieldexists('sudu8_page_fx_ls',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_ls')." ADD `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1待分成2已分成3取消分成';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_sq')) {
	if(!pdo_fieldexists('sudu8_page_fx_sq',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_sq')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_sq')) {
	if(!pdo_fieldexists('sudu8_page_fx_sq',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_sq')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_sq')) {
	if(!pdo_fieldexists('sudu8_page_fx_sq',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_sq')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_sq')) {
	if(!pdo_fieldexists('sudu8_page_fx_sq',  'truename')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_sq')." ADD `truename` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_sq')) {
	if(!pdo_fieldexists('sudu8_page_fx_sq',  'truetel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_sq')." ADD `truetel` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_sq')) {
	if(!pdo_fieldexists('sudu8_page_fx_sq',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_sq')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_sq')) {
	if(!pdo_fieldexists('sudu8_page_fx_sq',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_sq')." ADD `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3不通过';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `openid` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `money` float NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `types` int(1) NOT NULL DEFAULT '1' COMMENT '1余额2微信3支付宝';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'zfbzh')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `zfbzh` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'zfbxm')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `zfbxm` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3已拒绝';");
	}	
}
if(pdo_tableexists('sudu8_page_fx_tx')) {
	if(!pdo_fieldexists('sudu8_page_fx_tx',  'txtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_fx_tx')." ADD `txtime` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `title` varchar(255) NOT NULL COMMENT '活动名称';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'begin')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `begin` int(11) NOT NULL COMMENT '开始时间';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'end')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `end` int(11) NOT NULL COMMENT '结束时间';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'descp')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `descp` varchar(3000) NOT NULL COMMENT '活动说明';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `thumb` varchar(255) NOT NULL COMMENT '活动图片';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'bg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `bg` varchar(255) NOT NULL COMMENT '活动背景';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'text_img1')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `text_img1` varchar(255) NOT NULL COMMENT '文字标题图片button';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'text_img2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `text_img2` varchar(255) NOT NULL COMMENT '文字标题图片摇一摇';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'nav_color')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `nav_color` varchar(20) NOT NULL COMMENT '头部颜色';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'base')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `base` varchar(3000) NOT NULL COMMENT '基础设置，详见看云说明';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `status` int(1) NOT NULL COMMENT '0下架1上架';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'participate')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `participate` int(11) NOT NULL DEFAULT '0' COMMENT '参与人数';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'win')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `win` int(11) NOT NULL DEFAULT '0' COMMENT '获奖人数';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'browse')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `browse` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'share')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `share` int(11) NOT NULL DEFAULT '0' COMMENT '分享量';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_activity')) {
	if(!pdo_fieldexists('sudu8_page_lottery_activity',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_activity')." ADD `createtime` int(11) NOT NULL COMMENT '创建日期';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'aid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `aid` int(11) NOT NULL COMMENT '活动id';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `num` varchar(255) NOT NULL COMMENT '9宫格八个格子，多规格';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `title` varchar(255) NOT NULL COMMENT '奖项标题';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `thumb` varchar(255) NOT NULL COMMENT '图';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'total')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `total` int(11) NOT NULL COMMENT '总量';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'storage')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `storage` int(11) NOT NULL COMMENT '库存';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `types` int(1) NOT NULL COMMENT '1积分2余额3实物4优惠券';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'detail')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `detail` varchar(255) NOT NULL COMMENT '奖励详情';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'chance')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `chance` int(11) NOT NULL COMMENT '中奖概率';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_prize')) {
	if(!pdo_fieldexists('sudu8_page_lottery_prize',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_prize')." ADD `createtime` int(11) NOT NULL COMMENT '创建日期';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_record')) {
	if(!pdo_fieldexists('sudu8_page_lottery_record',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_record')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_record')) {
	if(!pdo_fieldexists('sudu8_page_lottery_record',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_record')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_record')) {
	if(!pdo_fieldexists('sudu8_page_lottery_record',  'aid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_record')." ADD `aid` int(11) NOT NULL COMMENT '活动id';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_record')) {
	if(!pdo_fieldexists('sudu8_page_lottery_record',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_record')." ADD `uid` int(11) NOT NULL COMMENT '中奖人id';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_record')) {
	if(!pdo_fieldexists('sudu8_page_lottery_record',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_record')." ADD `pid` int(11) COMMENT '奖品id';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_record')) {
	if(!pdo_fieldexists('sudu8_page_lottery_record',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_record')." ADD `createtime` int(11) NOT NULL COMMENT '抽奖时间';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_record')) {
	if(!pdo_fieldexists('sudu8_page_lottery_record',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_record')." ADD `status` int(1) NOT NULL COMMENT '0未中奖1已中奖2已领';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_share')) {
	if(!pdo_fieldexists('sudu8_page_lottery_share',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_share')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_share')) {
	if(!pdo_fieldexists('sudu8_page_lottery_share',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_share')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_share')) {
	if(!pdo_fieldexists('sudu8_page_lottery_share',  'aid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_share')." ADD `aid` int(11) NOT NULL COMMENT '活动id';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_share')) {
	if(!pdo_fieldexists('sudu8_page_lottery_share',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_share')." ADD `uid` int(11) NOT NULL COMMENT '用户id';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_share')) {
	if(!pdo_fieldexists('sudu8_page_lottery_share',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_share')." ADD `createtime` int(11) NOT NULL COMMENT '分享时间';");
	}	
}
if(pdo_tableexists('sudu8_page_lottery_share')) {
	if(!pdo_fieldexists('sudu8_page_lottery_share',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_lottery_share')." ADD `flag` int(1) NOT NULL COMMENT '0未成功1成功';");
	}	
}
if(pdo_tableexists('sudu8_page_mauth')) {
	if(!pdo_fieldexists('sudu8_page_mauth',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mauth')." ADD `id` int(10) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_mauth')) {
	if(!pdo_fieldexists('sudu8_page_mauth',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mauth')." ADD `uniacid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mauth')) {
	if(!pdo_fieldexists('sudu8_page_mauth',  'parent')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mauth')." ADD `parent` char(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mauth')) {
	if(!pdo_fieldexists('sudu8_page_mauth',  'child')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mauth')." ADD `child` char(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mauth')) {
	if(!pdo_fieldexists('sudu8_page_mauth',  'userid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mauth')." ADD `userid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mauth')) {
	if(!pdo_fieldexists('sudu8_page_mauth',  'mini')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mauth')." ADD `mini` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `id` int(10) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `pid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'cate_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `cate_name` varchar(32) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'sort')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `sort` int(5) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'objname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `objname` varchar(32) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'opt')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `opt` varchar(32) NOT NULL DEFAULT 'wb-display';");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'icon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `icon` varchar(32) NOT NULL DEFAULT 'wb-dashboard';");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `type` int(1) NOT NULL DEFAULT '0' COMMENT '节点还是栏目';");
	}	
}
if(pdo_tableexists('sudu8_page_mcategory')) {
	if(!pdo_fieldexists('sudu8_page_mcategory',  'stat')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_mcategory')." ADD `stat` int(1) NOT NULL DEFAULT '1' COMMENT '是否显示';");
	}	
}
if(pdo_tableexists('sudu8_page_message')) {
	if(!pdo_fieldexists('sudu8_page_message',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_message')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_message')) {
	if(!pdo_fieldexists('sudu8_page_message',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_message')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_message')) {
	if(!pdo_fieldexists('sudu8_page_message',  'mid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_message')." ADD `mid` varchar(255) NOT NULL COMMENT '模板消息id';");
	}	
}
if(pdo_tableexists('sudu8_page_message')) {
	if(!pdo_fieldexists('sudu8_page_message',  'url')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_message')." ADD `url` varchar(255) NOT NULL COMMENT '页面路径';");
	}	
}
if(pdo_tableexists('sudu8_page_message')) {
	if(!pdo_fieldexists('sudu8_page_message',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_message')." ADD `flag` int(1) NOT NULL COMMENT '1支付通知 2系统表单通知 3预约通知  4点餐支付通知 5积分兑换成功通知';");
	}	
}
if(pdo_tableexists('sudu8_page_message')) {
	if(!pdo_fieldexists('sudu8_page_message',  'attach')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_message')." ADD `attach` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_money')) {
	if(!pdo_fieldexists('sudu8_page_money',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_money')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_money')) {
	if(!pdo_fieldexists('sudu8_page_money',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_money')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_money')) {
	if(!pdo_fieldexists('sudu8_page_money',  'orderid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_money')." ADD `orderid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_money')) {
	if(!pdo_fieldexists('sudu8_page_money',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_money')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_money')) {
	if(!pdo_fieldexists('sudu8_page_money',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_money')." ADD `type` varchar(255) NOT NULL COMMENT '操作';");
	}	
}
if(pdo_tableexists('sudu8_page_money')) {
	if(!pdo_fieldexists('sudu8_page_money',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_money')." ADD `score` varchar(255) NOT NULL COMMENT '金钱';");
	}	
}
if(pdo_tableexists('sudu8_page_money')) {
	if(!pdo_fieldexists('sudu8_page_money',  'message')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_money')." ADD `message` varchar(255) NOT NULL COMMENT '说明';");
	}	
}
if(pdo_tableexists('sudu8_page_money')) {
	if(!pdo_fieldexists('sudu8_page_money',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_money')." ADD `creattime` int(11) NOT NULL COMMENT '时间';");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `name` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `type` varchar(20) NOT NULL COMMENT '模板类型';");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'statue')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `statue` int(1) NOT NULL DEFAULT '1' COMMENT '多栏目状态';");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'list_style')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `list_style` int(2) NOT NULL COMMENT '列表样式';");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'list_stylet')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `list_stylet` char(10) NOT NULL COMMENT '列表样式里的标题样式';");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'top_catas')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `top_catas` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_multicate')) {
	if(!pdo_fieldexists('sudu8_page_multicate',  'psize')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicate')." ADD `psize` int(11) DEFAULT '10';");
	}	
}
if(pdo_tableexists('sudu8_page_multicates')) {
	if(!pdo_fieldexists('sudu8_page_multicates',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicates')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_multicates')) {
	if(!pdo_fieldexists('sudu8_page_multicates',  'sort')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicates')." ADD `sort` int(5) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_multicates')) {
	if(!pdo_fieldexists('sudu8_page_multicates',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicates')." ADD `status` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_multicates')) {
	if(!pdo_fieldexists('sudu8_page_multicates',  'varible')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicates')." ADD `varible` varchar(12) NOT NULL COMMENT '筛选值名称';");
	}	
}
if(pdo_tableexists('sudu8_page_multicates')) {
	if(!pdo_fieldexists('sudu8_page_multicates',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicates')." ADD `pid` int(5) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_multicates')) {
	if(!pdo_fieldexists('sudu8_page_multicates',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_multicates')." ADD `uniacid` int(5) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_muser')) {
	if(!pdo_fieldexists('sudu8_page_muser',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_muser')." ADD `id` int(10) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_muser')) {
	if(!pdo_fieldexists('sudu8_page_muser',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_muser')." ADD `uid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_muser')) {
	if(!pdo_fieldexists('sudu8_page_muser',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_muser')." ADD `uniacid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `uniacid` int(11) COMMENT 'UID';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'statue')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `statue` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `type` int(2) COMMENT '首页，列表，单页，文章';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'style')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `style` int(2);");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'url')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `url` varchar(999) COMMENT '链接';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'box_p_tb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `box_p_tb` float COMMENT '外边距';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'box_p_lr')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `box_p_lr` float COMMENT '左右间距';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'number')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `number` int(2) COMMENT '数量';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'img_size')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `img_size` float COMMENT '图片大小';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'title_color')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `title_color` varchar(10) COMMENT '标题颜色';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'title_position')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `title_position` int(1) COMMENT '标题样式';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'title_bg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `title_bg` varchar(15) COMMENT '标题背景色';");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `name` varchar(50);");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'ename')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `ename` varchar(50);");
	}	
}
if(pdo_tableexists('sudu8_page_nav')) {
	if(!pdo_fieldexists('sudu8_page_nav',  'name_s')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_nav')." ADD `name_s` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `flag` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `type` int(2) NOT NULL COMMENT '0链接 1电话 2导航 3客服 4小程序 5.网页';");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `title` varchar(40) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'pic')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `pic` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'url')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `url` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_navlist')) {
	if(!pdo_fieldexists('sudu8_page_navlist',  'url2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_navlist')." ADD `url2` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'order_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `order_id` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `thumb` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'product')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `product` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'yhq')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `yhq` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'true_price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `true_price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'custime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `custime` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `flag` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'pro_user_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `pro_user_name` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'pro_user_tel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `pro_user_tel` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'pro_user_txt')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `pro_user_txt` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'overtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `overtime` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'reback')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `reback` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'is_more')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `is_more` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'coupon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `coupon` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'order_duo')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `order_duo` text;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'pro_user_add')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `pro_user_add` varchar(100);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'beizhu_val')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `beizhu_val` text;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'pay_price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `pay_price` float NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'dkscore')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `dkscore` float NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'nav')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `nav` int(1) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `address` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'formid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `formid` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'prepayid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `prepayid` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'tsid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `tsid` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'th_orderid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `th_orderid` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'qxbeizhu')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `qxbeizhu` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'appoint_date')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `appoint_date` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'form_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `form_id` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'emp_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `emp_id` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'modify_info')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `modify_info` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'kuaidi')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `kuaidi` varchar(64);");
	}	
}
if(pdo_tableexists('sudu8_page_order')) {
	if(!pdo_fieldexists('sudu8_page_order',  'kuaidihao')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_order')." ADD `kuaidihao` varchar(64);");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'xcxId')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `xcxId` varchar(255) NOT NULL COMMENT '小程序原始id';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'appId')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `appId` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'appSecret')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `appSecret` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `openid` varchar(255) NOT NULL COMMENT '客服openid';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'datasheet')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `datasheet` varchar(255) NOT NULL COMMENT '数据表名';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'id_field')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `id_field` varchar(255) NOT NULL COMMENT '用户表键值';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'openid_field')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `openid_field` varchar(255) NOT NULL COMMENT 'openid字段名';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'nickname_field')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `nickname_field` varchar(255) NOT NULL COMMENT 'nickname字段名';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_base')) {
	if(!pdo_fieldexists('sudu8_page_p_s_base',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_base')." ADD `flag` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_pic')) {
	if(!pdo_fieldexists('sudu8_page_p_s_pic',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_pic')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_pic')) {
	if(!pdo_fieldexists('sudu8_page_p_s_pic',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_pic')." ADD `openid` varchar(255) NOT NULL COMMENT '用户openid';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_pic')) {
	if(!pdo_fieldexists('sudu8_page_p_s_pic',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_pic')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_pic')) {
	if(!pdo_fieldexists('sudu8_page_p_s_pic',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_pic')." ADD `flag` int(1) NOT NULL COMMENT '1发 2';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_reply')) {
	if(!pdo_fieldexists('sudu8_page_p_s_reply',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_reply')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_reply')) {
	if(!pdo_fieldexists('sudu8_page_p_s_reply',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_reply')." ADD `type` int(1) COMMENT '1文本 2图片 3图文 4小程序卡片';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_reply')) {
	if(!pdo_fieldexists('sudu8_page_p_s_reply',  'content')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_reply')." ADD `content` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_reply')) {
	if(!pdo_fieldexists('sudu8_page_p_s_reply',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_reply')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_reply')) {
	if(!pdo_fieldexists('sudu8_page_p_s_reply',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_reply')." ADD `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1开启 2不开启';");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_user')) {
	if(!pdo_fieldexists('sudu8_page_p_s_user',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_user')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_p_s_user')) {
	if(!pdo_fieldexists('sudu8_page_p_s_user',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_p_s_user')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pro_score_get')) {
	if(!pdo_fieldexists('sudu8_page_pro_score_get',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pro_score_get')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_pro_score_get')) {
	if(!pdo_fieldexists('sudu8_page_pro_score_get',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pro_score_get')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pro_score_get')) {
	if(!pdo_fieldexists('sudu8_page_pro_score_get',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pro_score_get')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pro_score_get')) {
	if(!pdo_fieldexists('sudu8_page_pro_score_get',  'clickopenid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pro_score_get')." ADD `clickopenid` varchar(255) NOT NULL COMMENT '点击人openid';");
	}	
}
if(pdo_tableexists('sudu8_page_pro_score_get')) {
	if(!pdo_fieldexists('sudu8_page_pro_score_get',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pro_score_get')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pro_score_get')) {
	if(!pdo_fieldexists('sudu8_page_pro_score_get',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pro_score_get')." ADD `types` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pro_score_get')) {
	if(!pdo_fieldexists('sudu8_page_pro_score_get',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pro_score_get')." ADD `score` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pro_score_get')) {
	if(!pdo_fieldexists('sudu8_page_pro_score_get',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pro_score_get')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `num` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `title` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'text')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `text` mediumtext;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `thumb` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'ctime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `ctime` int(10);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'etime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `etime` int(10);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `type` varchar(20);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'desc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `desc` varchar(255) COMMENT '商品介绍';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `uniacid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `cid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pcid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pcid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'type_x')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `type_x` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'type_y')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `type_y` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'hits')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `hits` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'type_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `type_i` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'video')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `video` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `price` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'market_price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `market_price` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'label_1')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `label_1` int(11) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'label_2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `label_2` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'sale_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `sale_num` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `score` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'product_txt')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `product_txt` text;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_flag` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_kc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_kc` int(11) NOT NULL DEFAULT '-1';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_xz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_xz` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'sale_tnum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `sale_tnum` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'sale_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `sale_type` int(11) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'sale_time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `sale_time` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'labels')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `labels` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_flag_tel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_flag_tel` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_flag_data_name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_flag_data_name` varchar(40) DEFAULT '预约时间';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_flag_data')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_flag_data` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_flag_time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_flag_time` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_flag_ding')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_flag_ding` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'is_more')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `is_more` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'more_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `more_type` text;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'more_type_x')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `more_type_x` text;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'more_type_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `more_type_num` text;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `flag` int(1) DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'buy_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `buy_type` varchar(40) DEFAULT '购买';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'pro_flag_add')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `pro_flag_add` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'formset')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `formset` int(20) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'is_score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `is_score` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'score_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `score_num` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'con2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `con2` varchar(5000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'con3')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `con3` varchar(5000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'share_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `share_type` int(1) NOT NULL DEFAULT '1' COMMENT '1个人2仅群3个人加群';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'share_score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `share_score` varchar(255) NOT NULL DEFAULT '0' COMMENT '分享积分';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'share_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `share_num` int(11) NOT NULL DEFAULT '1' COMMENT '分享限制次数';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'share_gz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `share_gz` int(1) NOT NULL DEFAULT '1' COMMENT '1公共规则2自身规则';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'comment')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `comment` int(1) NOT NULL DEFAULT '1' COMMENT '评论功能 1开启 2不开启';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'multi')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `multi` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'top_catas')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `top_catas` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'sons_catas')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `sons_catas` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'mulitcataid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `mulitcataid` int(5) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'get_share_gz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `get_share_gz` int(1) NOT NULL DEFAULT '2';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'get_share_score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `get_share_score` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  ' get_share_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD ` get_share_num` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'get_share_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `get_share_num` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'shareimg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `shareimg` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'glnews')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `glnews` varchar(2000);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'kuaidi')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `kuaidi` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'sale_end_time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `sale_end_time` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'scoreback')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `scoreback` varchar(20) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'fx_uni')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `fx_uni` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'commission_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `commission_type` int(1);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'commission_one')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `commission_one` float;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'commission_two')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `commission_two` float;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'commission_three')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `commission_three` float;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'music_art_info')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `music_art_info` varchar(3000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'tableid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `tableid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'tableis')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `tableis` int(1) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_products')) {
	if(!pdo_fieldexists('sudu8_page_products',  'seller_remind')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_products')." ADD `seller_remind` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_pt_cate')) {
	if(!pdo_fieldexists('sudu8_page_pt_cate',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_cate')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_cate')) {
	if(!pdo_fieldexists('sudu8_page_pt_cate',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_cate')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_cate')) {
	if(!pdo_fieldexists('sudu8_page_pt_cate',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_cate')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_cate')) {
	if(!pdo_fieldexists('sudu8_page_pt_cate',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_cate')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_cate')) {
	if(!pdo_fieldexists('sudu8_page_pt_cate',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_cate')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `types` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'is_score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `is_score` int(1) NOT NULL DEFAULT '1' COMMENT '1不启用 2启用【启用积分抵扣】';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'is_tuanz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `is_tuanz` int(1) NOT NULL DEFAULT '1' COMMENT '1不启用2启用【启用团长优惠】';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'is_pt')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `is_pt` int(1) NOT NULL DEFAULT '2' COMMENT '1不启用2启用【是否自动成团】';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'pt_time')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `pt_time` int(11) NOT NULL DEFAULT '24' COMMENT '成团时间';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'fahuo')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `fahuo` int(11) NOT NULL DEFAULT '7' COMMENT '自动发货';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_gz')) {
	if(!pdo_fieldexists('sudu8_page_pt_gz',  'guiz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_gz')." ADD `guiz` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'order_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `order_id` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `price` float NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'jsondata')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `jsondata` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'coupon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `coupon` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'jf')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `jf` varchar(255) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `address` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'm_address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `m_address` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'liuyan')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `liuyan` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'hxtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `hxtime` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'nav')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `nav` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'kuadi')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `kuadi` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'kuaidihao')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `kuaidihao` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `flag` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `types` int(1) NOT NULL DEFAULT '1' COMMENT '1拼团2立即购买';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'pt_order')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `pt_order` varchar(255) NOT NULL COMMENT '拼团的订单id';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'ck')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `ck` int(1) NOT NULL DEFAULT '1' COMMENT '1开团2参团';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_order')) {
	if(!pdo_fieldexists('sudu8_page_pt_order',  'jqr')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_order')." ADD `jqr` int(1) NOT NULL DEFAULT '1' COMMENT '1买家2机器人';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `cid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'pcid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `pcid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'type_x')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `type_x` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'type_y')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `type_y` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'type_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `type_i` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `price` float NOT NULL DEFAULT '0' COMMENT '拼团价[显示用，一般设置最低]';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'mark_price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `mark_price` float NOT NULL DEFAULT '0' COMMENT '单买价[显示用]';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `thumb` varchar(255) NOT NULL COMMENT '缩略图';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'imgtext')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `imgtext` varchar(2000) NOT NULL COMMENT '组图';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'descs')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `descs` varchar(1000) NOT NULL COMMENT '简介';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'texts')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `texts` text NOT NULL COMMENT '详情';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `types` int(1) NOT NULL DEFAULT '1' COMMENT '拼团类型1单层团2阶梯团';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'explains')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `explains` varchar(255) NOT NULL COMMENT '标签';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'pt_min')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `pt_min` int(11) NOT NULL DEFAULT '2' COMMENT '拼团最小人数';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'pt_max')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `pt_max` int(11) NOT NULL DEFAULT '5' COMMENT '拼团最大人数';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `score` int(11) NOT NULL COMMENT '最多可抵用积分';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'xsl')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `xsl` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'tz_yh')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `tz_yh` int(11) NOT NULL DEFAULT '10';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'kuaidi')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `kuaidi` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro',  'shareimg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro')." ADD `shareimg` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'type1')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `type1` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'type2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `type2` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'type3')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `type3` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'kc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `kc` float NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `price` float NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'dprice')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `dprice` float NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_pro_val')) {
	if(!pdo_fieldexists('sudu8_page_pt_pro_val',  'comment')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_pro_val')." ADD `comment` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_robot')) {
	if(!pdo_fieldexists('sudu8_page_pt_robot',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_robot')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_robot')) {
	if(!pdo_fieldexists('sudu8_page_pt_robot',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_robot')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_robot')) {
	if(!pdo_fieldexists('sudu8_page_pt_robot',  'nickname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_robot')." ADD `nickname` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_robot')) {
	if(!pdo_fieldexists('sudu8_page_pt_robot',  'icon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_robot')." ADD `icon` varchar(2555) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_share')) {
	if(!pdo_fieldexists('sudu8_page_pt_share',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_share')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_share')) {
	if(!pdo_fieldexists('sudu8_page_pt_share',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_share')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_share')) {
	if(!pdo_fieldexists('sudu8_page_pt_share',  'shareid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_share')." ADD `shareid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_share')) {
	if(!pdo_fieldexists('sudu8_page_pt_share',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_share')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_pt_share')) {
	if(!pdo_fieldexists('sudu8_page_pt_share',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_share')." ADD `pid` int(11) NOT NULL COMMENT '商品id';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_share')) {
	if(!pdo_fieldexists('sudu8_page_pt_share',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_share')." ADD `creattime` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_share')) {
	if(!pdo_fieldexists('sudu8_page_pt_share',  'join_count')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_share')." ADD `join_count` int(11) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_pt_share')) {
	if(!pdo_fieldexists('sudu8_page_pt_share',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_pt_share')." ADD `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1正在进行2已完成3已过期';");
	}	
}
if(pdo_tableexists('sudu8_page_recharge')) {
	if(!pdo_fieldexists('sudu8_page_recharge',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_recharge')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_recharge')) {
	if(!pdo_fieldexists('sudu8_page_recharge',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_recharge')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_recharge')) {
	if(!pdo_fieldexists('sudu8_page_recharge',  'money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_recharge')." ADD `money` varchar(255) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_recharge')) {
	if(!pdo_fieldexists('sudu8_page_recharge',  'getmoney')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_recharge')." ADD `getmoney` varchar(255) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_recharge')) {
	if(!pdo_fieldexists('sudu8_page_recharge',  'getscore')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_recharge')." ADD `getscore` varchar(255) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_recharge')) {
	if(!pdo_fieldexists('sudu8_page_recharge',  'getcoupon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_recharge')." ADD `getcoupon` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_rechargeconf')) {
	if(!pdo_fieldexists('sudu8_page_rechargeconf',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_rechargeconf')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_rechargeconf')) {
	if(!pdo_fieldexists('sudu8_page_rechargeconf',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_rechargeconf')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_rechargeconf')) {
	if(!pdo_fieldexists('sudu8_page_rechargeconf',  'scroe')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_rechargeconf')." ADD `scroe` varchar(255) NOT NULL DEFAULT '100';");
	}	
}
if(pdo_tableexists('sudu8_page_rechargeconf')) {
	if(!pdo_fieldexists('sudu8_page_rechargeconf',  'money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_rechargeconf')." ADD `money` varchar(255) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_rechargeconf')) {
	if(!pdo_fieldexists('sudu8_page_rechargeconf',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_rechargeconf')." ADD `title` varchar(50) NOT NULL DEFAULT '充值有礼';");
	}	
}
if(pdo_tableexists('sudu8_page_rechargeconf')) {
	if(!pdo_fieldexists('sudu8_page_rechargeconf',  'score_shoppay')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_rechargeconf')." ADD `score_shoppay` int(11) NOT NULL DEFAULT '0' COMMENT '店内最大抵扣积分';");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'orderid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `orderid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `type` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `score` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'message')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `message` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'uuid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `uuid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score')) {
	if(!pdo_fieldexists('sudu8_page_score',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score')." ADD `types` varchar(20) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_cate')) {
	if(!pdo_fieldexists('sudu8_page_score_cate',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_cate')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_score_cate')) {
	if(!pdo_fieldexists('sudu8_page_score_cate',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_cate')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_cate')) {
	if(!pdo_fieldexists('sudu8_page_score_cate',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_cate')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_cate')) {
	if(!pdo_fieldexists('sudu8_page_score_cate',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_cate')." ADD `name` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_cate')) {
	if(!pdo_fieldexists('sudu8_page_score_cate',  'catepic')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_cate')." ADD `catepic` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_get')) {
	if(!pdo_fieldexists('sudu8_page_score_get',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_get')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_score_get')) {
	if(!pdo_fieldexists('sudu8_page_score_get',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_get')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_get')) {
	if(!pdo_fieldexists('sudu8_page_score_get',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_get')." ADD `title` varchar(255) NOT NULL COMMENT '标题';");
	}	
}
if(pdo_tableexists('sudu8_page_score_get')) {
	if(!pdo_fieldexists('sudu8_page_score_get',  'descp')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_get')." ADD `descp` varchar(255) NOT NULL COMMENT '简介';");
	}	
}
if(pdo_tableexists('sudu8_page_score_get')) {
	if(!pdo_fieldexists('sudu8_page_score_get',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_get')." ADD `score` float NOT NULL DEFAULT '0' COMMENT '积分数';");
	}	
}
if(pdo_tableexists('sudu8_page_score_get')) {
	if(!pdo_fieldexists('sudu8_page_score_get',  'link')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_get')." ADD `link` varchar(255) NOT NULL COMMENT '链接';");
	}	
}
if(pdo_tableexists('sudu8_page_score_get')) {
	if(!pdo_fieldexists('sudu8_page_score_get',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_get')." ADD `flag` int(1) NOT NULL COMMENT '0不开启 1开启';");
	}	
}
if(pdo_tableexists('sudu8_page_score_get')) {
	if(!pdo_fieldexists('sudu8_page_score_get',  'fixed')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_get')." ADD `fixed` int(2) COMMENT '系统自动添加的几条';");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'order_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `order_id` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'product')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `product` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `num` varchar(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `flag` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_score_order')) {
	if(!pdo_fieldexists('sudu8_page_score_order',  'custime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_order')." ADD `custime` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `cid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'hits')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `hits` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'sale_num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `sale_num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'buy_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `buy_type` varchar(255) NOT NULL DEFAULT '兑换';");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'text')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `text` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'desk')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `desk` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'product_txt')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `product_txt` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'market_price')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `market_price` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'pro_kc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `pro_kc` int(11) NOT NULL DEFAULT '-1';");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'sale_tnum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `sale_tnum` int(22) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'labels')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `labels` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_score_shop')) {
	if(!pdo_fieldexists('sudu8_page_score_shop',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_score_shop')." ADD `flag` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_share_img')) {
	if(!pdo_fieldexists('sudu8_page_share_img',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_img')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_share_img')) {
	if(!pdo_fieldexists('sudu8_page_share_img',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_img')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_share_img')) {
	if(!pdo_fieldexists('sudu8_page_share_img',  'ewmimg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_img')." ADD `ewmimg` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_share_img')) {
	if(!pdo_fieldexists('sudu8_page_share_img',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_img')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_share_img')) {
	if(!pdo_fieldexists('sudu8_page_share_img',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_img')." ADD `pid` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_share_img')) {
	if(!pdo_fieldexists('sudu8_page_share_img',  'sharethumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_img')." ADD `sharethumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_share_user')) {
	if(!pdo_fieldexists('sudu8_page_share_user',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_user')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_share_user')) {
	if(!pdo_fieldexists('sudu8_page_share_user',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_user')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_share_user')) {
	if(!pdo_fieldexists('sudu8_page_share_user',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_user')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_share_user')) {
	if(!pdo_fieldexists('sudu8_page_share_user',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_user')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_share_user')) {
	if(!pdo_fieldexists('sudu8_page_share_user',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_share_user')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_cate')) {
	if(!pdo_fieldexists('sudu8_page_shops_cate',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_cate')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_cate')) {
	if(!pdo_fieldexists('sudu8_page_shops_cate',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_cate')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_cate')) {
	if(!pdo_fieldexists('sudu8_page_shops_cate',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_cate')." ADD `name` varchar(50) NOT NULL COMMENT '分类名称';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_cate')) {
	if(!pdo_fieldexists('sudu8_page_shops_cate',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_cate')." ADD `num` int(11) NOT NULL COMMENT '排序越大越靠前';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_cate')) {
	if(!pdo_fieldexists('sudu8_page_shops_cate',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_cate')." ADD `flag` tinyint(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `title` varchar(255) NOT NULL COMMENT '标题';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'sid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `sid` int(11) COMMENT '所属店铺';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'buy_type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `buy_type` int(1) NOT NULL DEFAULT '0' COMMENT '0购买1预定';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'hot')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `hot` int(1) NOT NULL DEFAULT '0' COMMENT '0不推荐1推荐';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'pageview')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `pageview` int(11) NOT NULL DEFAULT '0' COMMENT '访问量';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'vsales')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `vsales` int(11) NOT NULL DEFAULT '0' COMMENT '虚拟销量';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'rsales')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `rsales` int(11) NOT NULL DEFAULT '0' COMMENT '真实销量';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'sellprice')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `sellprice` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '售价';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'marketprice')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `marketprice` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '市场价';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'storage')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `storage` int(11) NOT NULL DEFAULT '0' COMMENT '库存量';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `thumb` varchar(1000) COMMENT '缩略图';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'images')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `images` varchar(5000) COMMENT '产品组图';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'descp')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `descp` varchar(2000) COMMENT '产品详情';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `num` int(11) NOT NULL DEFAULT '0' COMMENT '排序越大越靠前';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `createtime` int(11) NOT NULL COMMENT '创建日期';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `flag` int(1) NOT NULL DEFAULT '1' COMMENT '0下架1上架';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_goods')) {
	if(!pdo_fieldexists('sudu8_page_shops_goods',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_goods')." ADD `status` int(1) NOT NULL DEFAULT '0' COMMENT '0未审核1已审核';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'apply')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `apply` int(1) NOT NULL DEFAULT '1' COMMENT '0不需要审核1需要';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'goods')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `goods` int(1) NOT NULL DEFAULT '1' COMMENT '商品0不需审核1需要';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'withdraw')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `withdraw` int(1) NOT NULL DEFAULT '1' COMMENT '提现0不需要审核1需要';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'minimum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `minimum` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '最低提现金额';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'bg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `bg` varchar(255) COMMENT '商户申请入驻页头部背景图';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'protocol')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `protocol` varchar(5000) COMMENT '商户入驻协议';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'tjnum')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `tjnum` int(11) NOT NULL DEFAULT '6' COMMENT '推荐数';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_set')) {
	if(!pdo_fieldexists('sudu8_page_shops_set',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_set')." ADD `num` int(11) NOT NULL DEFAULT '6' COMMENT '默认数';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `cid` varchar(50) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'username')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `username` varchar(50) NOT NULL DEFAULT 'admin' COMMENT '登录名';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'password')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `password` varchar(50) NOT NULL DEFAULT '12345' COMMENT '密码';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'tixian')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `tixian` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '可提现金额';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'logo')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `logo` varchar(255) COMMENT 'logo';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'bg')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `bg` varchar(255) COMMENT '背景图';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'yyzz')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `yyzz` varchar(255) NOT NULL COMMENT '营业执照';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'intro')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `intro` varchar(255) COMMENT '一句话简介';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'worktime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `worktime` varchar(255) COMMENT '营业时间';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `name` varchar(50) NOT NULL COMMENT '名字';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'tel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `tel` varchar(20) NOT NULL COMMENT '电话';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `address` varchar(50) NOT NULL COMMENT '地址';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'latitude')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `latitude` float(10,6) NOT NULL COMMENT '纬度';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'longitude')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `longitude` float(10,6) NOT NULL COMMENT '经度';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'star')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `star` float COMMENT '评分星星';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `flag` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态0下架1上架';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'hot')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `hot` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0不推荐，1推荐';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'authenticate')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `authenticate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否已认证0否1是';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'descp')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `descp` varchar(500) COMMENT '简介';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `title` varchar(20);");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `num` int(11) NOT NULL DEFAULT '0' COMMENT '排序越大越靠前';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `createtime` int(11) NOT NULL COMMENT '创建时间';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'images')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `images` varchar(2000) COMMENT '组图';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_shop')) {
	if(!pdo_fieldexists('sudu8_page_shops_shop',  'status')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_shop')." ADD `status` int(1) NOT NULL DEFAULT '0' COMMENT '0未审核1已审核';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'sid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `sid` int(11) NOT NULL COMMENT '商户id';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `money` float(10,2) NOT NULL COMMENT '金额';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'types')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `types` int(1) NOT NULL COMMENT '0微信1支付宝2银行卡';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'account')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `account` varchar(255) NOT NULL COMMENT '账号';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'beizhu')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `beizhu` varchar(1000) COMMENT '备注';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `flag` int(1) NOT NULL DEFAULT '0' COMMENT '0申请中1已通过2已拒绝';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `createtime` int(11) NOT NULL COMMENT '创建时间';");
	}	
}
if(pdo_tableexists('sudu8_page_shops_tixian')) {
	if(!pdo_fieldexists('sudu8_page_shops_tixian',  'txtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_shops_tixian')." ADD `txtime` int(11) COMMENT '提现时间';");
	}	
}
if(pdo_tableexists('sudu8_page_sign')) {
	if(!pdo_fieldexists('sudu8_page_sign',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_sign')) {
	if(!pdo_fieldexists('sudu8_page_sign',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_sign')) {
	if(!pdo_fieldexists('sudu8_page_sign',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign')." ADD `openid` varchar(100) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_sign')) {
	if(!pdo_fieldexists('sudu8_page_sign',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_sign')) {
	if(!pdo_fieldexists('sudu8_page_sign',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign')." ADD `score` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_sign_con')) {
	if(!pdo_fieldexists('sudu8_page_sign_con',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_con')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_sign_con')) {
	if(!pdo_fieldexists('sudu8_page_sign_con',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_con')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_sign_con')) {
	if(!pdo_fieldexists('sudu8_page_sign_con',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_con')." ADD `score` varchar(20) NOT NULL DEFAULT '10/20';");
	}	
}
if(pdo_tableexists('sudu8_page_sign_con')) {
	if(!pdo_fieldexists('sudu8_page_sign_con',  'max_score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_con')." ADD `max_score` int(11) NOT NULL DEFAULT '100000';");
	}	
}
if(pdo_tableexists('sudu8_page_sign_lx')) {
	if(!pdo_fieldexists('sudu8_page_sign_lx',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_lx')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_sign_lx')) {
	if(!pdo_fieldexists('sudu8_page_sign_lx',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_lx')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_sign_lx')) {
	if(!pdo_fieldexists('sudu8_page_sign_lx',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_lx')." ADD `openid` varchar(100) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_sign_lx')) {
	if(!pdo_fieldexists('sudu8_page_sign_lx',  'count')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_lx')." ADD `count` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_sign_lx')) {
	if(!pdo_fieldexists('sudu8_page_sign_lx',  'max_count')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_lx')." ADD `max_count` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_sign_lx')) {
	if(!pdo_fieldexists('sudu8_page_sign_lx',  'all_count')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_sign_lx')." ADD `all_count` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `thumb` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'logo')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `logo` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `title` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'lat')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `lat` varchar(20);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'lon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `lon` varchar(20);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'tel')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `tel` varchar(20);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'times')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `times` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'country')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `country` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'text')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `text` text;");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'dateline')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `dateline` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'title1')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `title1` varchar(50);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'title2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `title2` varchar(50);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'descp')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `descp` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'desc2')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `desc2` text NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'province')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `province` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'proid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `proid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'city')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `city` varchar(255);");
	}	
}
if(pdo_tableexists('sudu8_page_store')) {
	if(!pdo_fieldexists('sudu8_page_store',  'cityid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_store')." ADD `cityid` int(11);");
	}	
}
if(pdo_tableexists('sudu8_page_storeconf')) {
	if(!pdo_fieldexists('sudu8_page_storeconf',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_storeconf')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_storeconf')) {
	if(!pdo_fieldexists('sudu8_page_storeconf',  'mapkey')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_storeconf')." ADD `mapkey` varchar(50) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_storeconf')) {
	if(!pdo_fieldexists('sudu8_page_storeconf',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_storeconf')." ADD `flag` int(2) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_storeconf')) {
	if(!pdo_fieldexists('sudu8_page_storeconf',  'search')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_storeconf')." ADD `search` int(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_storeconf')) {
	if(!pdo_fieldexists('sudu8_page_storeconf',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_storeconf')." ADD `title` varchar(255) NOT NULL DEFAULT '门店';");
	}	
}
if(pdo_tableexists('sudu8_page_table')) {
	if(!pdo_fieldexists('sudu8_page_table',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_table')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_table')) {
	if(!pdo_fieldexists('sudu8_page_table',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_table')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_table')) {
	if(!pdo_fieldexists('sudu8_page_table',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_table')." ADD `name` varchar(50) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_table')) {
	if(!pdo_fieldexists('sudu8_page_table',  'columnstr')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_table')." ADD `columnstr` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_table')) {
	if(!pdo_fieldexists('sudu8_page_table',  'rowstr')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_table')." ADD `rowstr` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_table')) {
	if(!pdo_fieldexists('sudu8_page_table',  'selectstr')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_table')." ADD `selectstr` varchar(1000) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_table')) {
	if(!pdo_fieldexists('sudu8_page_table',  'proname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_table')." ADD `proname` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'uid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `uid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `pid` int(11) NOT NULL COMMENT '商品id';");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'tid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `tid` int(11) NOT NULL COMMENT 'table_id';");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'select_str')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `select_str` varchar(1000) NOT NULL COMMENT '已选';");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'appoint_date')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `appoint_date` date NOT NULL COMMENT '预约日期';");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `createtime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_tableselect')) {
	if(!pdo_fieldexists('sudu8_page_tableselect',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_tableselect')." ADD `flag` int(1) NOT NULL COMMENT '0未付款1已付款';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `id` int(10) unsigned NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `uniacid` int(10) unsigned COMMENT '小程序ID';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `openid` varchar(255) NOT NULL COMMENT '用户的唯一身份ID';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `createtime` int(11) unsigned NOT NULL COMMENT '加入时间';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'realname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `realname` varchar(20) COMMENT '真实姓名';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'nickname')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `nickname` varchar(20) NOT NULL COMMENT '昵称';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'avatar')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `avatar` varchar(255) NOT NULL COMMENT '头像';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'qq')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `qq` varchar(15) COMMENT 'QQ号';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'mobile')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `mobile` varchar(11) COMMENT '手机号码';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'gender')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `gender` tinyint(1) DEFAULT '0' COMMENT '性别(0:保密 1:男 2:女)';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'telephone')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `telephone` varchar(15) COMMENT '固定电话';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'idcardtype')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `idcardtype` tinyint(1) DEFAULT '1' COMMENT '证件类型：身份证 护照 军官证等';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'idcard')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `idcard` varchar(30) COMMENT '证件号码';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'address')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `address` varchar(255) COMMENT '邮寄地址';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'zipcode')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `zipcode` varchar(10) COMMENT '邮编';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'nationality')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `nationality` varchar(30) COMMENT '国籍';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'resideprovince')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `resideprovince` varchar(30) COMMENT '居住省份';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'residecity')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `residecity` varchar(30) COMMENT '居住城市';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'residedist')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `residedist` varchar(30) COMMENT '居住行政区/县';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'residecommunity')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `residecommunity` varchar(30) COMMENT '居住小区';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'residesuite')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `residesuite` varchar(30) COMMENT '小区、写字楼门牌号';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'graduateschool')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `graduateschool` varchar(50) COMMENT '毕业学校';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'company')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `company` varchar(50) COMMENT '公司';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'education')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `education` varchar(10) COMMENT '学历';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'occupation')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `occupation` varchar(30) COMMENT '职业';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'position')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `position` varchar(30) COMMENT '职位';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'revenue')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `revenue` varchar(10) COMMENT '年收入';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'affectivestatus')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `affectivestatus` varchar(30) COMMENT '情感状态';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'lookingfor')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `lookingfor` varchar(255) COMMENT ' 交友目的';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'bloodtype')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `bloodtype` varchar(5) COMMENT '血型';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'height')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `height` varchar(5) COMMENT '身高';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'weight')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `weight` varchar(5) COMMENT '体重';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'alipay')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `alipay` varchar(30) COMMENT '支付宝帐号';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'msn')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `msn` varchar(30) COMMENT 'MSN';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'taobao')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `taobao` varchar(30) COMMENT '阿里旺旺';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'site')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `site` varchar(30) COMMENT '主页';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'bio')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `bio` text COMMENT '自我介绍';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'interest')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `interest` text COMMENT '兴趣爱好';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `money` float NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'score')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `score` float NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `flag` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'p_p_parent_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `p_p_parent_id` varchar(1000) NOT NULL DEFAULT '0' COMMENT '父级的父级的父级';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'p_parent_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `p_parent_id` varchar(1000) NOT NULL DEFAULT '0' COMMENT '父级的父级';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'parent_id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `parent_id` varchar(1000) NOT NULL DEFAULT '0' COMMENT '父级';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'fxs')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `fxs` int(1) NOT NULL DEFAULT '1' COMMENT '1不是分销商2分销商';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'fxstime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `fxstime` int(11) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'fx_allmoney')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `fx_allmoney` float NOT NULL DEFAULT '0' COMMENT '分销获得过的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'fx_getmoney')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `fx_getmoney` float NOT NULL DEFAULT '0' COMMENT '分销已经提现的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'fx_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `fx_money` float NOT NULL DEFAULT '0' COMMENT '分销商获得过的钱分销可提现钱';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'p_get_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `p_get_money` float NOT NULL DEFAULT '0' COMMENT '父级获得的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'p_p_get_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `p_p_get_money` float NOT NULL DEFAULT '0' COMMENT '父父级获得的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'p_p_p_get_money')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `p_p_p_get_money` float NOT NULL DEFAULT '0' COMMENT '父父父级获得的钱';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'ewm')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `ewm` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'birth')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `birth` varchar(255) COMMENT '生日';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'vipid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `vipid` varchar(255) COMMENT 'vip卡号';");
	}	
}
if(pdo_tableexists('sudu8_page_user')) {
	if(!pdo_fieldexists('sudu8_page_user',  'vipcreatetime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_user')." ADD `vipcreatetime` int(11) COMMENT 'vip创建时间';");
	}	
}
if(pdo_tableexists('sudu8_page_usercenter_set')) {
	if(!pdo_fieldexists('sudu8_page_usercenter_set',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_usercenter_set')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_usercenter_set')) {
	if(!pdo_fieldexists('sudu8_page_usercenter_set',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_usercenter_set')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_usercenter_set')) {
	if(!pdo_fieldexists('sudu8_page_usercenter_set',  'usercenterset')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_usercenter_set')." ADD `usercenterset` varchar(5000);");
	}	
}
if(pdo_tableexists('sudu8_page_video_pay')) {
	if(!pdo_fieldexists('sudu8_page_video_pay',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_video_pay')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_video_pay')) {
	if(!pdo_fieldexists('sudu8_page_video_pay',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_video_pay')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_video_pay')) {
	if(!pdo_fieldexists('sudu8_page_video_pay',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_video_pay')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_video_pay')) {
	if(!pdo_fieldexists('sudu8_page_video_pay',  'pid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_video_pay')." ADD `pid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_video_pay')) {
	if(!pdo_fieldexists('sudu8_page_video_pay',  'orderid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_video_pay')." ADD `orderid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_video_pay')) {
	if(!pdo_fieldexists('sudu8_page_video_pay',  'paymoney')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_video_pay')." ADD `paymoney` float NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_video_pay')) {
	if(!pdo_fieldexists('sudu8_page_video_pay',  'creattime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_video_pay')." ADD `creattime` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_video_pay')) {
	if(!pdo_fieldexists('sudu8_page_video_pay',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_video_pay')." ADD `type` int(1) NOT NULL DEFAULT '1';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `id` int(10) unsigned NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `openid` varchar(255) NOT NULL COMMENT '申请人';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `uniacid` int(11) unsigned NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'vipid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `vipid` mediumtext NOT NULL COMMENT 'vip卡号';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'fid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `fid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '提交表单信息id';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'formid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `formid` varchar(255) NOT NULL COMMENT '模板消息formid';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'flag')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `flag` tinyint(1) unsigned NOT NULL DEFAULT '3' COMMENT '3未审核 1通过  2不通过';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'applytime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `applytime` datetime NOT NULL COMMENT '申请时间';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'examinetime')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `examinetime` datetime NOT NULL COMMENT '审核时间';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_apply')) {
	if(!pdo_fieldexists('sudu8_page_vip_apply',  'beizhu')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_apply')." ADD `beizhu` mediumtext NOT NULL COMMENT '审核不通过原因';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'isopen')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `isopen` tinyint(1) NOT NULL DEFAULT '1' COMMENT '会员卡0不开启1开启2强制开启';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'name')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `name` varchar(255) NOT NULL DEFAULT '会员卡' COMMENT '会员卡名称';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'recharge')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `recharge` tinyint(1) NOT NULL DEFAULT '0' COMMENT '充值0直接可用1开卡后可用';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'coupon')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `coupon` tinyint(1) NOT NULL DEFAULT '0' COMMENT '领优惠券0直接可用1开卡后可用';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'sign')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `sign` tinyint(1) NOT NULL DEFAULT '0' COMMENT '积分签到0直接可用1开卡后可用';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'exchange')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `exchange` tinyint(1) NOT NULL DEFAULT '0' COMMENT '积分兑换0直接可用1开卡后可用';");
	}	
}
if(pdo_tableexists('sudu8_page_vip_config')) {
	if(!pdo_fieldexists('sudu8_page_vip_config',  'formid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_vip_config')." ADD `formid` int(11) DEFAULT '0';");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'id')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'cid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `cid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'pcid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `pcid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'num')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `num` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'type')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `type` varchar(20) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'title')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `title` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'desc')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `desc` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'thumb')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `thumb` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `uniacid` int(11) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'type_i')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `type_i` int(1) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'appId')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `appId` varchar(20) NOT NULL;");
	}	
}
if(pdo_tableexists('sudu8_page_wxapps')) {
	if(!pdo_fieldexists('sudu8_page_wxapps',  'path')) {
		pdo_query("ALTER TABLE ".tablename('sudu8_page_wxapps')." ADD `path` varchar(255) NOT NULL;");
	}	
}
