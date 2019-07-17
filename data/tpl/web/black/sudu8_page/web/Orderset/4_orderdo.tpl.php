<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/common/header', TEMPLATE_INCLUDEPATH)) : (include template('web/common/header', TEMPLATE_INCLUDEPATH));?>
<style>
.we7-table{font-size: 12px;}
.we7-table>tbody>tr>td:first-child, .wechat-communication>tbody>tr>td:first-child{padding-left:15px}
.we7-table>tbody>tr>td{border: 1px solid #eee;}
.we7-table>tbody>tr>td img, .wechat-communication>tbody>tr>td img {max-width: 50px;}
.dingdan{color: #bbb;padding-left: 20px}
.border-top td{border:none !important}
.ssdd{
    width: 200px;
    border: 1px solid #dedede;
    padding: 20px 10px;
}
.zzcc{
    position: fixed;
    top: 0; 
    width: 100%;
    height: 100%;
    background-color: #000000;
    opacity: 0.4;
    z-index: 100000;
}
.bbdd{
    position: fixed;
    z-index: 100001;
    background-color: #ffffff;
    width: 400px;
    height: 220px;
    top: 50%;
    left: 50%;
    margin-top: -200px;
    margin-left: -110px;
    padding: 10px;
}
.ddhh{
    line-height: 30px;
    position: relative;
}
.ddxx{
    position: absolute;
    right: 0;
    top:0;
    cursor:pointer;
}
</style>
<div class="loader" style="display: none"></div>
      <!--取消star-->
<div class="bbdd" id="qxdd" style="display:none">
        <div class="ddhh">
            <div class="ddxx" onclick="ycc()">[关闭]</div>
        </div>
        <div>
        <div style="margin-top: 36px">
        <form class="form-horizontal" action="" method="post">
              <input type="hidden" id="orderfh" name="orderfh">
            <table class="table we7-table  vertical-middle" style="border:0">
                
                <tr>
                    <td style="width:95px">取消备注</td>
                    <td >
                        <input type="text" id="qxbeizhu" name="qxbeizhu" value="" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                    </td>
                </tr>
                <tr>
                    <td style="width:95px"></td>
                    <td >
                        <a onclick="qxtijiao()" class="btn btn-success btn-sm">提交</a>
                    </td>
                </tr>
            </table>
        </form> 
        </div>
    </div>
</div>    
<!--取消end-->
<script type="text/javascript">
                function search(){
                    var val = $("#order_id").val();
                    if(!val){
                        alert("定单号不能为空，请输入订单号！");
                        return;
                    }
                    var url = GetQueryString("order_id");
                    if(url=="null"){
                        var newurl = document.URL+"&order_id="+val;
                        location.href = newurl;
                    }else{
                        var newurl = document.URL.replace("&order_id="+url, "&order_id="+val);
                        location.href = newurl;
                    }
                }
                function GetQueryString(name){
                    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
                    var r = window.location.search.substr(1).match(reg);
                    if(r!=null)return  unescape(r[2]); return "null";
                }
                function xiaofei(id){
                    if(window.confirm('确定核销该订单？')){          
                        var newurl = document.URL+"&opt=hx&order="+id;
                        location.href = newurl;
                    }
                }
                function fahuo(id){
                    if(window.confirm('确定要结束该订单？')){          
                        var newurl = document.URL+"&opt=fh&order="+id;
                        location.href = newurl;
                    }
                }
                function allowth(id){
                    if(window.confirm('确定允许退货？退款将直接退回')){
                        var newurl = document.URL+"&opt=allowth&order="+id;
                        location.href = newurl;
                    }
                }
                function refuseth(id){
                    if(window.confirm('确定要拒绝该退货申请？')){
                        var newurl = document.URL+"&opt=refuseth&order="+id;
                        location.href = newurl;
                    }
                }
                function shoscc(id){
                    $("#orderfh").val(id);
                    $(".loader").show();
                    $(".la-ball-clip-rotate").hide();
                    //$('body').append('<div class="zzcc" id="zzcc" style="display:none"></div>');
                    $("#bbdd").show();
                }
                function ycc(){
                    $(".loader").hide();
                    $("#bbdd").hide();
                    $("#qxdd").hide();
                }
                function tijiao(){
                    var kuaidihao = $("#kuaidihao").val();
                    if(kuaidihao == 0){
                        alert("快递单号不能为空！");
                        return false;
                    }
                    var order = $("#orderfh").val();
                    var kuaidi = $("#kuaidi").val();
                    var newurl = document.URL+"&opt=fahuo&orderid="+order+"&kuadi="+kuaidi+"&kuaidihao="+kuaidihao;
                    location.href = newurl;
                }
                function quxiao(id){
                   $("#orderfh").val(id);
                    $(".loader").show();
                    $(".la-ball-clip-rotate").hide();
                    //$('body').append('<div class="zzcc" id="zzcc" style="display:none"></div>');
                    $("#qxdd").show();
                }
                 function qxtijiao(){
                    var qxbeizhu = $("#qxbeizhu").val();
                      var order = $("#orderfh").val();
                    var newurl = document.URL+"&opt=quxiao&orderid="+order+"&qxbeizhu="+qxbeizhu;
                    location.href = newurl;
                }
            </script>
<div class="page">
    <div class="page_content">
        <div style="height:80px">
            <h3 style="float: left;margin-top: 0;"><?php  if($opt == 'yh') { ?><?php  echo $userinfo['nickname'];?><?php  } ?>产品核销</h3>
        </div>
        <ul class="nav nav-tabs" style="margin-bottom: 30px;">
            <li <?php  if($opt == 'fahuosp') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('Orderset', array('opt' => 'fahuosp','op' => 'orderdo', 'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid']))?>">发货订单</a></li>
            <li <?php  if($opt == 'ziti') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('Orderset', array('opt' => 'ziti','op' => 'orderdo', 'cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid']))?>">自提订单</a></li>
        </ul>
    <!--发货-->
    <div class="bbdd" id="bbdd" style="display:none">
        <div class="ddhh">
            <span>请填写快递单号</span>
            <div class="ddxx" onclick="ycc()">[关闭]</div>
        </div>
        <div>
            <form class="form-horizontal" action="" method="post">
                <input type="hidden" id="orderfh" name="orderfh">
                <table class="table we7-table  vertical-middle" style="border:0">
                    <tr>
                        <td style="width:110px">快递：</td>
                        <td >
                            <select style="width:200px" id="kuaidi" name="kuaidi">
                                <option value="上门服务">上门服务</option>
                                <option value="商家配送">商家配送</option>
                                <option value="圆通">圆通</option>
                                <option value="申通">申通</option>
                                <option value="韵达">韵达</option>
                                <option value="中通">中通</option>
                                <option value="顺丰">顺丰</option>
                                <option value="天天">天天</option>
                                <option value="EMS">EMS</option>
                                <option value="其他">其他</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:95px">快递号/信息：</td>
                        <td >
                            <input type="text" id="kuaidihao" name="kuaidihao" value="" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                        </td>
                    </tr>
                    <tr>
                        <td style="width:95px"></td>
                        <td >
                            <a onclick="tijiao()" class="btn btn-success btn-sm">提交</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
        
        <div class="form-horizontal">
            <div style="margin-bottom: 15px; height: 50px;">
                <form class="form-horizontal" action="" method="post">
                    <label for="" class="control-label col-sm-2" style="margin-left:70px; margin-right:20px;">请输入订单号</label>
                    <div class="form-controls col-sm-5">
                        <input type="text" name="order_id" id="order_id" class="form-control ng-pristine ng-untouched ng-valid ng-empty" placeholder="" autocomplete="off">
                    </div>
                    <div class="col-sm-1">
                        <input type="button" onclick="search()" value="搜索" class="btn btn-default btn-sm" style="padding:7px 20px">
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-responsive border-top" style="table-layout: fixed;">
            <tr style="background:#f8f8f8">
                <td>
                    商品
                </td>
                <td style="width:200px;">
                    单价/数量
                </td>
                <td style="width:200px;">
                    营销活动
                </td>
                <td style="width:100px;">
                    实付金额
                </td>
                <td style="width:300px;">
                    联系方式
                </td>
                <td style="width:200px;">
                    状态
                </td>
            </tr>
        </table>
<?php  if($opt == 'fahuosp') { ?>
        <?php  if(is_array($orders)) { foreach($orders as $item) { ?>
        <table class="table we7-table vertical-middle">
            <tr class="trorder">
                <td colspan="3" style="border:0;background:#f9f9f9">
                    <?php  echo $item['creattime'];?> <span class="dingdan">订单编号: <?php  echo $item['order_id'];?></span>
                </td>
                <td colspan="4" style="text-align:right;font-size:12px;border:0;background:#f9f9f9" class="aops">
                    订单备注： <?php  echo $item['liuyan'];?>
                </td>
            </tr>
        <?php  if(is_array($item['jsondata'])) { foreach($item['jsondata'] as $index => $val) { ?>
        <tr>
            <td style="line-height: 24px">
                <img src="<?php  echo $val['proinfo']['thumb'];?>" style="width:50px;height:50px;border:1px solid #ccc; padding:1px;margin-right: 20px;display: block;;float: left;" onerror=""><strong><?php  echo $val['baseinfo']['title'];?></strong><br><span style="color: #666"><?php  echo $val['proinfo']['ggz'];?></span>
            </td>
            <td style="width:200px;"> 
                <?php  echo $val['proinfo']['price'];?>x<?php  echo $val['num'];?>
            </td>
            <?php  if($index == 0) { ?>
        <td style="width:200px;" rowspan="<?php  echo $item['counts'];?>">
            <?php  if($item['couponinfo']['price']) { ?>
            <!-- 优惠券：<?php  echo $item['couponinfo']['price'];?>元<span style="padding: 0 20px"></span> -->
                    <span class="textbg">券</span><?php  echo $item['couponinfo']['title'];?><br>
                    <span class="textbg textbg2">减</span><?php  echo $item['couponinfo']['price'];?>
            <?php  } ?>
            <?php  if($item['jf']>0) { ?>
            <br>
            <?php  echo $item['jf'];?>积分 抵扣<?php  echo $item['jfmoney'];?>元
            <?php  } ?>
        </td>
        <td style="width:100px;" rowspan="<?php  echo $item['counts'];?>">
            总价：<?php  echo $item['allprice'];?>
            <br/>
            实付：<?php  echo $item['price'];?>
        </td>
        <td style="width:300px;" rowspan="<?php  echo $item['counts'];?>">
            <?php  echo $item['address_get']['name'];?>
            <br>
             <?php  echo $item['address_get']['mobile'];?>
            <br>
            <?php  echo $item['address_get']['address'];?> <?php  echo $item['address_get']['more_address'];?> <?php  echo $item['address_get']['postalcode'];?>
        </td>
        <td style="width:200px;" rowspan="<?php  echo $item['counts'];?>">
            <?php  if($item['flag'] ==0) { ?><span class="btn btn-default btn-sm">未支付</span><?php  } ?>
            <?php  if($item['flag'] ==1 && $item['nav'] == 2) { ?>
                <a class="btn btn-success btn-sm" onclick="xiaofei(<?php  echo $item['id'];?>)">立即核销</a>
            <?php  } ?>
            <?php  if($item['flag'] ==1 && $item['nav'] == 1) { ?>
                <a class="btn btn-success btn-sm" onclick="shoscc(<?php  echo $item['id'];?>)">立即发货</a>
            <?php  } ?>
            <?php  if($item['flag'] ==2 && $item['nav'] == 1) { ?> <span class="btn btn-success btn-sm">已完成</span><br><?php  echo $item['hxtime'];?><?php  } ?>
            <?php  if($item['flag'] ==2 && $item['nav'] == 2) { ?> <span class="btn btn-success btn-sm">已核销</span><br><?php  echo $item['hxtime'];?><?php  } ?>
            <?php  if($item['flag'] ==3) { ?> <span class="btn btn-default btn-sm">已过期</span><?php  } ?>
            <?php  if($item['flag'] ==4) { ?> <a class="btn btn-success btn-sm">已发货</a><br><?php  echo $item['kuadi'];?><br><?php  echo $item['kuaidihao'];?><?php  } ?>
            <?php  if($item['flag'] ==5) { ?> <a class="btn btn-warning btn-sm">已取消</a><br>备注：<?php  echo $item['qxbeizhu'];?><?php  } ?>
            <?php  if($item['flag'] ==1 && $item['nav'] == 1) { ?> <a class="btn btn-danger btn-sm" onclick="quxiao(<?php  echo $item['id'];?>)">取消订单</a>  <?php  } ?>
            <?php  if($item['flag'] ==7) { ?> 
                <a class="btn btn-success btn-sm" onclick="allowth(<?php  echo $item['id'];?>)">允许退货</a> 
                <a class="btn btn-danger btn-sm" onclick="refuseth(<?php  echo $item['id'];?>)">拒绝退货</a> 
                <br>
                <?php  echo $item['kuaidi_th'];?>
                <br>
                <?php  echo $item['kuaidihao_th'];?>
            <?php  } ?>
            <?php  if($item['flag'] ==8) { ?> <span class="btn btn-default btn-sm">已退货</span> <?php  } ?>
            <?php  if($item['flag'] ==9) { ?> <span class="btn btn-default btn-sm">已拒绝退货</span> <?php  } ?>
        </td>
        <?php  } ?>
        </tr>
        <?php  } } ?>
        <?php  if($item['formcon']) { ?>
        <tr>
            <td colspan="6" style="line-height: 20px;">
            <?php  if(is_array($item['formcon'])) { foreach($item['formcon'] as $item) { ?>
                    <?php  if($item['type']== 3) { ?>
                    <?php  echo $item['name'];?>：
                            <?php  if(is_array($item['val'])) { foreach($item['val'] as $item2) { ?>
                                <?php  echo $item2;?>,
                            <?php  } } ?>
                   <?php  } ?>
                    <?php  if($item['type']== 5) { ?>
                    <?php  echo $item['name'];?>：
                            <?php  if(is_array($item['z_val'])) { foreach($item['z_val'] as $item2) { ?>
                               <a href="<?php  echo $item2;?>" target="_blank"></a><img src="<?php  echo $item2;?>" alt="" style="width:80px"></a>
                            <?php  } } ?>
                    <?php  } ?>
                    <?php  if($item['type']!= 5 && $item['type']!= 3) { ?>
                        <?php  echo $item['name'];?>：<?php  echo $item['val'];?>
                    <?php  } ?>
                    <br/>
                <?php  } } ?>
            </td>
        </tr>
        <?php  } ?>
    </table>
    <?php  } } ?>
    <div id="fenye">
        <?php  echo $pager;?>
    </div>
</div>
</div>
<?php  } ?>
<?php  if($opt == 'ziti') { ?>
        <?php  if(is_array($orders)) { foreach($orders as $item) { ?>
        <table class="table we7-table vertical-middle">
            <tr class="trorder">
                <td colspan="3" style="border:0;background:#f9f9f9">
                    <?php  echo $item['creattime'];?> <span class="dingdan">订单编号: <?php  echo $item['order_id'];?></span>
                </td>
                <td colspan="4" style="text-align:right;font-size:12px;border:0;background:#f9f9f9" class="aops">
                    订单备注： <?php  echo $item['liuyan'];?>
                </td>
            </tr>
        <?php  if(is_array($item['jsondata'])) { foreach($item['jsondata'] as $index => $val) { ?>
        <tr>
            <td style="line-height: 24px">
                <img src="<?php  echo $val['proinfo']['thumb'];?>" style="width:50px;height:50px;border:1px solid #ccc; padding:1px;margin-right: 20px;display: block;;float: left;" onerror=""><strong><?php  echo $val['baseinfo']['title'];?></strong><br><span style="color: #666"><?php  echo $val['proinfo']['ggz'];?></span>
            </td>
            <td style="width:200px;"> 
                <?php  echo $val['proinfo']['price'];?>x<?php  echo $val['num'];?>
            </td>
            <?php  if($index == 0) { ?>
        <td style="width:200px;" rowspan="<?php  echo $item['counts'];?>">
            <?php  if($item['couponinfo']['price']) { ?>
            优惠券：<?php  echo $item['couponinfo']['price'];?>元<span style="padding: 0 20px"></span>
            <?php  } ?>
            <?php  if($item['jf']>0) { ?>
            <br>
            <?php  echo $item['jf'];?>积分 抵扣<?php  echo $item['jfmoney'];?>元
            <?php  } ?>
        </td>
        <td style="width:100px;" rowspan="<?php  echo $item['counts'];?>">
            总价：<?php  echo $item['allprice'];?>
            <br/>
            实付：<?php  echo $item['price'];?>
        </td>
        <td style="width:300px;" rowspan="<?php  echo $item['counts'];?>">
            <?php  echo $item['address_get']['name'];?>
            <br>
             <?php  echo $item['address_get']['mobile'];?>
            <br>
            <?php  echo $item['address_get']['address'];?> <?php  echo $item['address_get']['more_address'];?> <?php  echo $item['address_get']['postalcode'];?>
        </td>
        <td style="width:200px;" rowspan="<?php  echo $item['counts'];?>">
            <?php  if($item['flag'] ==0) { ?><span class="btn btn-default btn-sm">未支付</span><?php  } ?>
            <?php  if($item['flag'] ==1 && $item['nav'] == 2) { ?>
                <a class="btn btn-danger btn-sm" onclick="xiaofei(<?php  echo $item['id'];?>)">到店提货</a>
            <?php  } ?>
            <?php  if($item['flag'] ==1 && $item['nav'] == 1) { ?>
                <a class="btn btn-danger btn-sm" onclick="shoscc(<?php  echo $item['id'];?>)">立即发货</a>
            <?php  } ?>
            <?php  if($item['flag'] ==2) { ?> <span class="btn btn-success btn-sm">已完成</span><br><?php  echo $item['hxtime'];?><?php  } ?>
            <?php  if($item['flag'] ==3) { ?> <span class="btn btn-default btn-sm">已过期</span><?php  } ?>
            <?php  if($item['flag'] ==4) { ?> <a class="btn btn-success btn-sm">已发货</a><br><?php  echo $item['kuadi'];?><br><?php  echo $item['kuaidihao'];?><?php  } ?>
            <?php  if($item['flag'] ==5) { ?> <a class="btn btn-warning btn-sm">已取消</a><br>备注：<?php  echo $item['qxbeizhu'];?><?php  } ?>
            <?php  if($item['flag'] ==1 && $item['nav'] == 1) { ?> <a  onclick="quxiao(<?php  echo $item['id'];?>)">取消订单</a>  <?php  } ?>
            <?php  if($item['flag'] ==7) { ?> 
                <a class="btn btn-success btn-sm" onclick="allowth(<?php  echo $item['id'];?>)">允许退货</a> 
                <a class="btn btn-danger btn-sm" onclick="refuseth(<?php  echo $item['id'];?>)">拒绝退货</a> 
                <br>
                <?php  echo $item['kuaidi_th'];?>
                <br>
                <?php  echo $item['kuaidihao_th'];?>
            <?php  } ?>
            <?php  if($item['flag'] ==8) { ?> <span class="btn btn-default btn-sm">已退货</span> <?php  } ?>
            <?php  if($item['flag'] ==9) { ?> <span class="btn btn-default btn-sm">已拒绝退货</span> <?php  } ?>
        </td>
        <?php  } ?>
        </tr>
        <?php  } } ?>
        <?php  if($item['formcon']) { ?>
        <tr>
            <td colspan="6" style="line-height: 20px;">
            <?php  if(is_array($item['formcon'])) { foreach($item['formcon'] as $item) { ?>
                    <?php  if($item['type']== 3) { ?>
                    <?php  echo $item['name'];?>：
                            <?php  if(is_array($item['val'])) { foreach($item['val'] as $item2) { ?>
                                <?php  echo $item2;?>,
                            <?php  } } ?>
                   <?php  } ?>
                    <?php  if($item['type']== 5) { ?>
                    <?php  echo $item['name'];?>：
                            <?php  if(is_array($item['z_val'])) { foreach($item['z_val'] as $item2) { ?>
                               <a href="<?php  echo $item2;?>" target="_blank"></a><img src="<?php  echo $item2;?>" alt="" style="width:80px"></a>
                            <?php  } } ?>
                    <?php  } ?>
                    <?php  if($item['type']!= 5 && $item['type']!= 3) { ?>
                        <?php  echo $item['name'];?>：<?php  echo $item['val'];?>
                    <?php  } ?>
                    <br/>
                <?php  } } ?>
            </td>
        </tr>
        <?php  } ?>

        <!--修改记录-->
        <?php  if($item['modify_info']) { ?>
        <tr>
            <td colspan="7" style="line-height: 20px;">
            <?php  echo $item['modify_info']['pro_name'];?>在<?php  echo date("Y-m-d H:i:s", $item['modify_info']['creattime'])?>申请修改预约信息为：姓名：<?php  echo $item['modify_info']['pro_name'];?>，电话：<?php  echo $item['modify_info']['pro_tel'];?>，地址：<?php  echo $item['modify_info']['pro_address'];?>，预约日期：<?php  echo date("Y-m-d H:i:s", $item['modify_info']['appoint_date'])?>  

            <?php  if($item['modify_info']['flag'] == 1) { ?>
            <a onclick="return confirm('确认通过该用户的修改请求？'); return false;" href="<?php  echo $this->createWebUrl('Orderset', array('opt' => 'acceptmodify','op'=>'yyyd','cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],'order'=>$item['id']))?>" style="color:green"> [确认修改]</a> 
            <a onclick="return confirm('确认拒绝该用户的修改请求？'); return false;" href="<?php  echo $this->createWebUrl('Orderset', array('opt' => 'refusemodify','op'=>'yyyd','cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],'order'=>$item['id']))?>" style="color:#f00"> [拒绝修改]</a> 
            <?php  } ?>
            <?php  if($item['modify_info']['flag'] == 2) { ?>
            <a href="javascript:;" style="color:green"> [已修改]</a>
            <?php  } ?>
            <?php  if($item['modify_info']['flag'] == 3) { ?>
            <a href="javascript:;" style="color:#f00"> [已拒绝修改]</a>
            <?php  } ?>
            </td>
        </tr>
        <?php  } ?>
        <!--修改记录-->
    </table>
    <?php  } } ?>
    <div id="fenye">
        <?php  echo $pager;?>
    </div>
</div>
</div>
<?php  } ?>