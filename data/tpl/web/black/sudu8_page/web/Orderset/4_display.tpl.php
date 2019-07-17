<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/common/header', TEMPLATE_INCLUDEPATH)) : (include template('web/common/header', TEMPLATE_INCLUDEPATH));?>
<style>
.we7-table{font-size: 12px;}
.we7-table>tbody>tr>td:first-child, .wechat-communication>tbody>tr>td:first-child{padding-left:15px}
.we7-table>tbody>tr>td{border: 1px solid #eee;}
.we7-table>tbody>tr>td img, .wechat-communication>tbody>tr>td img {max-width: 50px;}
.dingdan{color: #bbb;padding-left: 20px}
.border-top td{border:none !important}
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
<script type="text/javascript">
	function quxiao(id){
       	$("#orderfh").val(id);
        $(".loader").show();
        $("#qxdd").show();
    }
    function ycc(){
        $(".loader").hide();
        $("#bbdd").hide();
        $("#qxdd").hide();
    }
    function qxtijiao(){
	    var qxbeizhu = $("#qxbeizhu").val();
      	var order = $("#orderfh").val();
	    var newurl = document.URL+"&opt=qx&orderid="+order+"&qxbeizhu="+qxbeizhu;
	    location.href = newurl;
	}
	function shoscc(id){
        $("#orderfh2").val(id);
        $(".loader").show();
        $("#bbdd").show();
    }
    function tijiao(){
        var kuaidihao = $("#kuaidihao").val();
        if(kuaidihao == 0){
            alert("快递单号不能为空！");
            return false;
        }
        var order = $("#orderfh2").val();
        var kuaidi = $("#kuaidi").val();
        var newurl = document.URL+"&opt=fahuo&orderid="+order+"&kuaidi="+kuaidi+"&kuaidihao="+kuaidihao;
        location.href = newurl;
    }
</script>
<div class="page">
	<div class="page_content">
		<div style="height:80px">
			<h3 style="float: left;margin-top: 0;"><?php  if($opt == 'yh') { ?><?php  echo $userinfo['nickname'];?><?php  } ?>产品核销</h3>
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
		        </script>
		</div>
		<div>
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
		<?php  if(is_array($arr)) { foreach($arr as $item) { ?>
			<table class="table we7-table vertical-middle">
			<tr class="trorder">
				<td colspan="3" style="border:0;background:#f9f9f9">
		            <?php  echo $item['creattime'];?> <span class="dingdan">订单编号: <?php  echo $item['order_id'];?></span>
				</td>
				<td colspan="4" style="text-align:right;font-size:12px;border:0;background:#f9f9f9" class="aops">
					订单备注： <?php  echo $item['beizhu_val'];?> <?php  echo $item['pro_user_txt'];?>
				</td>
			</tr>
			<tr class="trbody">
				<td>
					<img src="<?php  echo $item['thumb'];?>" style="width:50px;height:50px;border:1px solid #eee; padding:1px;margin-right: 20px" onerror=""><?php  echo $item['product'];?>
				</td>
				<td style="width:200px;">
					<?php  echo $item['price'];?> x <?php  echo $item['num'];?>
				</td>
				<td style="width:200px;">
					<?php  if($item['coupon'] >0) { ?>
				        <span class="textbg">券</span><?php  echo $item['couponinfo']['title'];?><br>
				        <span class="textbg textbg2">减</span><?php  echo $item['couponinfo']['price'];?>
				    <?php  } ?>
				</td>
				<td style="width:100px;">
		            ￥<?php  echo $item['true_price'];?>
				</td>
				<?php  if($item['address']) { ?>
				<td style="width:300px;">
		            <?php  echo $item['address']['name'];?>
					<br>
	             	<?php  echo $item['address']['mobile'];?>
					<br>
					<?php  echo $item['address']['address'];?> <?php  echo $item['address']['more_address'];?>
				</td>
				<?php  } else { ?>
				<td style="width:300px;">
		            <?php  echo $item['pro_user_name'];?>
					<br>
	             	<?php  echo $item['pro_user_tel'];?>
					<br>
					<?php  echo $item['pro_user_add'];?>
				</td>
				<?php  } ?>
				<td style="width:200px;">
		<?php  if($item['flag'] ==0) { ?><span class="btn btn-default btn-sm">未支付</span><?php  } ?>
								<?php  if($item['flag'] ==1 && $item['nav'] == 1) { ?>
					<a class="btn btn-success btn-sm" onclick="shoscc(<?php  echo $item['id'];?>)"  >立即发货</a><!-- href="<?php  echo $this->createWebUrl('Orderset', array('opt' => 'hx','op'=>'display','cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],'order'=>$item['id']))?>" -->
					
					<a class="btn btn-danger btn-sm" onclick="quxiao(<?php  echo $item['id'];?>)">取消订单</a>
		                        <?php  } ?>
		                        <?php  if($item['flag'] ==1 && $item['nav'] == 2) { ?>
					<a class="btn btn-success btn-sm" onclick="return confirm('确定核销该订单？'); return false;" href="<?php  echo $this->createWebUrl('Orderset', array('opt' => 'hx','op'=>'display','cateid'=>$_GPC['cateid'],'chid'=>$_GPC['chid'],'order'=>$item['id']))?>" >立即核销</a>
					
					<a class="btn btn-danger btn-sm" onclick="quxiao(<?php  echo $item['id'];?>)">取消订单</a>
		                        <?php  } ?>
		                        <?php  if($item['flag'] ==2) { ?> 
					<span class="btn btn-success btn-sm">已完成</span>
									<?php  if($item['kuaidihao']) { ?>
										<br><?php  echo $item['kuaidi'];?>
										<br><?php  echo $item['kuaidihao'];?>
									<?php  } ?>
								<?php  } ?>
		                        <?php  if($item['flag'] ==-1) { ?> 
					<span class="btn btn-warning btn-sm">已关闭</span><?php  } ?>
		                        <?php  if($item['flag'] ==-2) { ?> 
					<span class="btn btn-warning btn-sm">订单无效</span><?php  } ?>
								<?php  if($item['flag'] == 5) { ?>
					<span class="btn btn-warning btn-sm">已取消</span><?php  } ?>
					<br>
					<?php  if($item['flag']==1 || $item['flag']==2) { ?>
		             <?php  echo $item['custime'];?>
		            <?php  } ?>
		            <?php  if($item['flag']==5) { ?>
		             取消原因：<?php  echo $item['qxbeizhu'];?>
		            <?php  } ?>
				</td>
			</tr>
			<?php  if($item['val']) { ?>
			<tr>
				<td colspan="7" style="line-height: 20px;">
		        <?php  if(is_array($item['val'])) { foreach($item['val'] as $item) { ?>
		                <?php  if($item['type']== 3) { ?>
		                <?php  echo $item['name'];?>：
		                        <?php  if(is_array($item['val'])) { foreach($item['val'] as $item2) { ?>
		                            <?php  echo $item2;?>,
		                        <?php  } } ?>
		               <?php  } ?>
		                <?php  if($item['type']== 5) { ?>
		                <?php  echo $item['name'];?>：
		                        <?php  if(is_array($item['z_val'])) { foreach($item['z_val'] as $item2) { ?>
		                           <a href="<?php  echo $item2;?>" target="_blank"><img src="<?php  echo $item2;?>" alt="" style="width:60px"></a>
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
</div>
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
    <div class="bbdd" id="bbdd" style="display:none">
        <div class="ddhh">
            <span>请填写快递单号</span>
            <div class="ddxx" onclick="ycc()">[关闭]</div>
        </div>
        <div>
            <form class="form-horizontal" action="" method="post">
                <input type="hidden" id="orderfh2" name="orderfh2">
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
