<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo self::$_W['uniaccount']['name']?>-<?php  echo $_W['uniacid'];?></title>
    <link rel="shortcut icon" href="<?php  if(!empty($_W['setting']['copyright']['icon'])) { ?><?php  echo $_W['attachurl'];?><?php  echo $_W['setting']['copyright']['icon'];?><?php  } else { ?>./resource/images/favicon.ico<?php  } ?>" />
    <link href="./resource/css/bootstrap.min.css?v=20180322" rel="stylesheet">
    <link href="./resource/css/common.css?v=20180322" rel="stylesheet">
    <script type="text/javascript">
        if(navigator.appName == 'Microsoft Internet Explorer'){
            if(navigator.userAgent.indexOf("MSIE 5.0")>0 || navigator.userAgent.indexOf("MSIE 6.0")>0 || navigator.userAgent.indexOf("MSIE 7.0")>0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
        window.sysinfo = {
        <?php  if(!empty($_W['uniacid'])) { ?>'uniacid': '<?php  echo $_W['uniacid'];?>',<?php  } ?>
        <?php  if(!empty($_W['acid'])) { ?>'acid': '<?php  echo $_W['acid'];?>',<?php  } ?>
        <?php  if(!empty($_W['openid'])) { ?>'openid': '<?php  echo $_W['openid'];?>',<?php  } ?>
        <?php  if(!empty($_W['uid'])) { ?>'uid': '<?php  echo $_W['uid'];?>',<?php  } ?>
        'isfounder': <?php  if(!empty($_W['isfounder'])) { ?>1<?php  } else { ?>0<?php  } ?>,
            'family': '<?php echo IMS_FAMILY;?>',
                'siteroot': '<?php  echo $_W['siteroot'];?>',
                'siteurl': '<?php  echo $_W['siteurl'];?>',
                'attachurl': '<?php  echo $_W['attachurl'];?>',
                'attachurl_local': '<?php  echo $_W['attachurl_local'];?>',
                'attachurl_remote': '<?php  echo $_W['attachurl_remote'];?>',
                'module' : {'url' : '<?php  if(defined('MODULE_URL')) { ?><?php echo MODULE_URL;?><?php  } ?>', 'name' : '<?php  if(defined('IN_MODULE')) { ?><?php echo IN_MODULE;?><?php  } ?>'},
            'cookie' : {'pre': '<?php  echo $_W['config']['cookie']['pre'];?>'},
            'account' : <?php  echo json_encode($_W['account'])?>,
            'server' : {'php' : '<?php  echo phpversion()?>'},
        };
    </script>
    <script>var require = { urlArgs: 'v=20180322' };</script>
    <script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="./resource/js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="./resource/js/app/util.js?v=20180322"></script>
    <script type="text/javascript" src="./resource/js/app/common.min.js?v=20180322"></script>
    <script type="text/javascript" src="./resource/js/require.js?v=20180322"></script>
    
</head>
<link rel="stylesheet" href="<?php echo ASSETS;?>/index.css?v=20180705">
<link rel="stylesheet" href="<?php echo ASSETS;?>/web-icons/web-icons.css">
<!--侧边栏start-->
<div class="asidebox clearfix">
    <div class="aside1">
        <a class="logo" href="">
            <img src="../attachment/headimg_<?php  echo $_W['uniacid'];?>.jpg" class="logoimg" />
        </a>
        <nav class="aside1_nav">
            <ul>
                <?php  $route = strtolower(self::$_GPC['do']); ?>
                <?php  if(is_array($syscatelist)) { foreach($syscatelist as $menu_id => $menu) { ?>
                <li class="<?php  if($route == strtolower($menu['objname'])) { ?>active1<?php  } ?>">
                    <a class="aside1_nav_a1" href="<?php echo $this->createWebUrl($menu['objname'],['op' => $menu['opt']?$menu['opt']:'display','cateid' => $menu['id']])?>">
                        <?php  if($menu['icon']) { ?>
                        <i class="<?php  echo $menu['icon'];?>"></i><?php  } else { ?><i class="wb-dashboard"></i><?php  } ?><?php  echo $menu['cate_name'];?>
                    </a>
                </li>
                <?php  } } ?>
                <li class="">
                    <a class="aside1_nav_a1" target="_blank" href="https://shimo.im/docs/fbETPHyU5P8dR9pD"><i class="wb-help-circle"></i>帮助</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="aside2 sidebar-2">
        <div class="aside2_title">功能列表</div>
        <nav class="aside2_nav">
            <ul>
                <?php $ops = isset(self::$_GPC['op'])?self::$_GPC['op']:'display'; ?>
                <?php
                     $type = isset(self::$_GPC['type']) ? self::$_GPC['type'] : '';
                ?>
                <?php  if(is_array($children)) { foreach($children as $k => $vv) { ?>
                <?php  if($vv['type'] == 0) { ?>
                <li class="<?php  if($ops == $vv['opt']) { ?>active2<?php  } ?>">
                    <i></i>
                    <?php  if($key_id > 0) { ?>
                        <a href="<?php  echo $this->createWebUrl($route,['op' => $vv['opt'],'key_id' => $key_id,'tplid' => 0,'cateid' => $cateid,'chid' => $vv['id']])?>"><?php  echo $vv['cate_name'];?></a>
                    <?php  } else { ?>
                        <a href="<?php  echo $this->createWebUrl($route,['op' => $vv['opt'],'cateid' => $cateid,'chid' => $vv['id']])?>"><?php  echo $vv['cate_name'];?></a>
                    <?php  } ?>
                </li>
                <?php  } else { ?>
                    <li>
                        <div class="sidebar-content" style="width: 100%;" id="aaa">
                            <i></i>
                            <a class="nav-item child-item" href="javascript:">
                                <span class="nav-pointer iconfont icon-play_fill" style="margin-left: 10px"></span>
                                <span><?php  echo $vv['cate_name'];?></span>
                            </a>
                            <?php  if(isset($vv['child'])) { ?>
                            <?php  if(is_array($vv['child'])) { foreach($vv['child'] as $vo) { ?>
                            <?php
                                if(isset(self::$_GPC['type']) && self::$_GPC['type'] == 'mini'){
                                    $active = 'active';
                                    $act = isset($vo['opt']) ? $vo['opt'] : '';
                                }else{
                                    $active = '';
                                }
                                if(isset(self::$_GPC['type']) && self::$_GPC['type'] == 'mini'){
                                    $vo['opt'] = $vv['name'];
                                }
                            ?>
                            <div class="sub-item-list <?php  if($k == 0) { ?>active<?php  } ?>" data-id="<?php  echo $vo['id'];?>" style="overflow: visible;">
                                <a class="nav-item <?php  if($act == self::$_GPC['act']) { ?>active<?php  } ?>" href="<?php  echo $this->createWebUrl($route,['op' => $vo['opt'],'cateid' => $cateid,'chid' => $vo['id'],'plugin' => $vv['name'],'type' => $type,'act' => $act])?>">
                                    <span><?php  echo $vo['cate_name'];?></span>
                                </a>
                            </div>
                            <?php  } } ?>
                            <?php  } ?>
                        </div>
                    </li>
                <?php  } ?>
                <?php  } } ?>
            </ul>
        </nav>
    </div>
    <script>
        $(document).on("click", ".child-item", function () {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }
            if ($($(this).parents('li')).find('.sub-item-list').hasClass('active')) {
                $($(this).parents('li')).find('.sub-item-list').removeClass('active');
            } else {
                $($(this).parents('li')).find('.sub-item-list').addClass('active');
            }
        });
        $(document).ready(function () {
            var child = parseInt("<?php  echo $chid;?>");
            $(".sub-item-list").each(function () {
                var flag = false;
                if(parseInt($(this).data('id')) == child){
                    $(this).parents('.sidebar-content').find('.nav-item').addClass('active');
                    $(this).addClass('active').siblings().addClass('active').find('a').removeClass('active');
                }
            });
        });
    </script>
    <div class="aside_user">
        v<?php  echo $Smodel['version']?>
    </div>
</div>
<!--侧边栏end-->
<!--主体start-->
<div class="contentbox">
    <!--主体头start-->
    <div class="content_head clearfix">
        <div class="content_head_left"><?php  echo $cname;?></div>
        <ul class="nav navbar-nav navbar-right " style="float: right !important;margin-right: 45px !important">
            <li class="dropdown">
                <a href="./index.php?c=user&a=logout"><i class="wi wi-back color-gray"></i>< 退出系统</a>
            </li>
            <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="wi wi-user color-gray"></i><?php  echo self::$_W['username']?> <span class="caret"></span></a>
            <ul class="dropdown-menu color-gray" role="menu">
              <!--  <li>
                    <a href="./index.php?c=user&amp;a=profile&amp;" target="_blank"><i class="wi wi-account color-gray"></i> 我的账号</a>
                </li>-->
                <li class="divider"></li>
                <li><a href="./index.php?c=cloud&amp;a=upgrade&amp;" target="_blank"><i class="wi wi-update color-gray"></i> 自动更新</a></li>
                <li><a href="./index.php?c=system&amp;a=updatecache&amp;" target="_blank"><i class="wi wi-cache color-gray"></i> 更新缓存</a></li>
                <li class="divider"></li>
                <li>
                    <a href="./index.php?c=user&amp;a=logout&amp;"><i class="fa fa-sign-out color-gray"></i> 退出系统</a>
                </li>
            </ul>
        </li>
        </ul>
    </div>