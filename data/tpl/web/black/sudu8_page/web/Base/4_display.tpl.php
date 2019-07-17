<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/common/header', TEMPLATE_INCLUDEPATH)) : (include template('web/common/header', TEMPLATE_INCLUDEPATH));?>

<div class="page">

    <div class="page_content">

       <form class="form-horizontal" action="" method="post">

		    <div class="panel panel-default">

		        <div class="panel-heading">

		            <h3 class="panel-title">基本信息管理</h3>

		        </div>

		        <div class="panel-body">

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">幻灯片</label>

		                <div class="form-controls col-sm-5">

		                     <?php  echo tpl_form_field_multi_image('slide',$item['slide']);?>

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">先传的排在后面</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">顶部LOGO</label>

		                <div class="form-controls col-sm-5">

		                    <?php  echo tpl_form_field_image('logo2', $item['logo2'])?>

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">最顶部长方形LOGO（200px X 70px）</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">门店背景</label>

		                <div class="form-controls col-sm-5">

		                    <?php  echo tpl_form_field_image('banner', $item['banner'])?>

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">建议750x330,不填有默认</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">门店logo</label>

		                <div class="form-controls col-sm-5">

		                    <?php  echo tpl_form_field_image('logo', $item['logo'])?>

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">门店背景上圆形LOGO（350px正方形）</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">门店视频</label>

		                <div class="form-controls col-sm-5">

		                    <textarea class="form-control" rows="3" name="video" placeholder=""><?php  echo $item['video'];?></textarea>

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">请添加mp4视频远程地址或腾讯视频网址，不填则首页视频板块不开启</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">视频默认图片</label>

		                <div class="form-controls col-sm-5">

		                    <?php  echo tpl_form_field_image('v_img', $item['v_img'])?>

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">默认则黑屏（大小720x410）</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">门店名称</label>

		                <div class="form-controls col-sm-5">

		                    <input type="text" name="name" id="name" value="<?php  echo $item['name'];?>" class="form-control ng-pristine ng-untouched ng-valid ng-empty"  placeholder="" autocomplete="off">

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">请输入门店名称</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">门店特色</label>

		                <div class="form-controls col-sm-5">

		                    <input type="text" name="desc" id="desc" value="<?php  echo $item['desc'];?>" class="form-control ng-pristine ng-untouched ng-valid ng-empty"  placeholder="" autocomplete="off">

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">请输入一句话介绍</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">门店地址</label>

		                <div class="form-controls col-sm-5">

		                    <input type="text" name="address" id="address" value="<?php  echo $item['address'];?>" class="form-control ng-pristine ng-untouched ng-valid ng-empty"  placeholder="" autocomplete="off">

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">请输入门店地址</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">营业时间</label>

		                <div class="form-controls col-sm-5">

		                    <input type="text" name="time" id="time" value="<?php  echo $item['time'];?>" class="form-control ng-pristine ng-untouched ng-valid ng-empty"  placeholder="" autocomplete="off">

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">请输入营业时间</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">联系电话</label>

		                <div class="form-controls col-sm-5">

		                    <input type="text" name="tel" id="tel" value="<?php  echo $item['tel'];?>" class="form-control ng-pristine ng-untouched ng-valid ng-empty"  placeholder="" autocomplete="off">

		                </div>

		                <div class="col-sm-1"></div>

		                <div class="form-controls col-sm-3 help-block">请输入联系电话</div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">经纬度 <span style="color: #c00">误填反</span></label>

		                <div class="form-controls col-sm-2">

		                    <input type="text" name="latitude" id="latitude" value="<?php  echo $item['latitude'];?>" class="form-control ng-pristine ng-untouched ng-valid ng-empty"  placeholder="" autocomplete="off">

		                </div>

		                <div class="form-controls col-sm-2 help-block" style="padding-left: 15px">纬度:30.88888</div>

		                <div class="form-controls col-sm-2">

		                    <input type="text" name="longitude" id="longitude" value="<?php  echo $item['longitude'];?>" class="form-control ng-pristine ng-untouched ng-valid ng-empty"  placeholder="" autocomplete="off">

		                </div>

		                <div class="form-controls col-sm-3 help-block" style="padding-left: 15px">经度:120.6666 <a href="http://lbs.qq.com/tool/getpoint/" target="_blank" style="color:#428BCA"> 经纬度查询</a></div>

		            </div>

		            <div class="form-group">

		                <label for="" class="control-label col-sm-2" style="margin-right:45px">门店简介</label>

		                <div class="form-controls col-sm-8">

		                    <textarea class="form-control" rows="6" id="about" name="about" placeholder=""><?php  echo $item['about'];?></textarea>

		                    <div class="help-block">请输门店简介，不填则不显示</div>

		                </div>

		            </div>

		        </div>

		    </div>

		    <div class="form-group">

		        <div class="col-sm-12">

		            <input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />

		            <input type="submit" class="btn btn-primary col-lg-1" name="submit" value="提交" />

		        </div>

		    </div>

		</form>

    </div>

</div>

