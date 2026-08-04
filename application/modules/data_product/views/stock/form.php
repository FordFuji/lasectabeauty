		<!-- begin #content -->
		<div id="content" class="content">
			
			<!-- begin page-header -->
			<h1 class="page-header">Managed Form <small><?php if(!empty($title)) echo $title;?></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
<?php
	$this->form_validation->set_error_delimiters('<div style="color:red; padding-bottom:5px;" class="form-control parsley-error">', '</div><br>'); 
	echo validation_errors(); 
?>
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <h4 class="panel-title"><?php if(!empty($title)) echo $title;?></h4>
                        </div>
                        <div class="panel-body">
<?php
if(empty($id)) {
	$id = '';
}
?>
							<form action="<?php echo site_url('data_product/backend/stock_save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="form-group">
					            <label class="col-md-3 control-label">Product</label>
					            <div class="col-md-9">
                       				<select name="product_id" id="product_id" class="form-control">
                       					<option value="">Please Select</option>
<?php
if(!empty($productCtrl)) {
	foreach($productCtrl as $r) {
		
?>
                       					<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php

	}
}
?>
                       				</select>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Color</label>
					            <div class="col-md-9">
                       				<select name="color_id" id="color_id" class="form-control">
                       					<option value="">Please Select</option>
<?php
if(!empty($colorCtrl)) {
	foreach($colorCtrl as $r) {
		
?>
                       					<option value="<?php echo $r->color_id;?>" <?php if(!empty($row) and $row->color_id == $r->color_id) echo 'selected';?>><?php echo $r->color_code.' - '.$r->color_name;?></option>
<?php

	}
}
?>
                       				</select>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Stock</label>
					            <div class="col-md-9">
                       				<input type="number" step="0.01" name="stock_amount" id="stock_amount" class="form-control" value="<?php if(!empty($row)) echo $row->stock_amount;?>">
					            </div>
					        </div>
<?php 
if(!empty($row) and $row->stock_date_pre_order == null) {
	$date_diff = 0;
} elseif(!empty($row) and ($row->stock_date_pre_order != '' or $row->stock_date_pre_order != null or $row->stock_date_pre_order != '0000-00-00')) {
	$date_diff = ceil((strtotime($row->stock_date_pre_order) - strtotime(date('Y-m-d'))) /  (60 * 60 * 24));
} else {
	$date_diff = 0;	
}
?>
							<div class="form-group">
					            <label class="col-md-3 control-label">Date Pre Order</label>
					            <div class="col-md-9">
                       				<input type="number" name="date_pre_order" id="date_pre_order" class="form-control" value="<?php echo $date_diff;?>">
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Product Gallery</label>
					            <div class="col-md-9">
                       				<input type="file" name="product_gallery_image[]" id="product_gallery_image" class="form-control" multiple="true"> Recommend 487 x 645 px
<?php
if(!empty($galleryCtrl)) {
	foreach($galleryCtrl as $r) {
?>
									<br><img src="<?php echo base_url('uploads/product/'.$r->product_gallery_image);?>" width="150"> <a href="<?php echo site_url('data_product/backend/deleteProductGallery/'.$r->product_gallery_id.'/'.$r->stock_id);?>" onclick="return confirm('Confirm Delete');">Delete</a><br>
<?php
	}
}
?>
					            </div>
					        </div>
					        <div class="form-group">
								<label class="col-md-3 control-label"> </label>
								<div class="col-md-9">
									<button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
									<button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
								</div>
							</div>
							</form>                    
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
            
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	<!-- </div> -->
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('asset/backend/plugins/jquery/jquery-1.9.1.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/plugins/jquery/jquery-migrate-1.1.0.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/plugins/jquery-ui/ui/minified/jquery-ui.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url('asset/backend/crossbrowserjs/html5shiv.js');?>"></script>
		<script src="<?php echo base_url('asset/backend/crossbrowserjs/respond.min.js');?>"></script>
		<script src="<?php echo base_url('asset/backend/crossbrowserjs/excanvas.min.js');?>"></script>
	<![endif]-->
	<script src="<?php echo base_url('asset/backend/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/plugins/jquery-cookie/jquery.cookie.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('asset/backend/js/apps.min.js');?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_frontend('color_picker/css/colorpicker.css');?>" />
	<script type="text/javascript" src="<?php echo base_frontend('color_picker/js/colorpicker.js');?>"></script>

	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

	<script>
    	$(document).ready(function() {
    		$("#product_id").select2();
			$("#color_id").select2();
		});
	</script>
	<script>
		$(document).ready(function() {
			App.init();
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.color_ckeditor.setData('');
		}
		
		$('#color_code').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
				$(el).val(hex);
				$(el).ColorPickerHide();
			},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			}
		})
		.bind('keyup', function(){
			$(this).ColorPickerSetColor(this.value);
		});
	</script>
</body>
</html>
