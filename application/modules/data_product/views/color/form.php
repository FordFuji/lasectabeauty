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
							<form action="<?php echo site_url('data_product/backend/color_save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<?php
/*
							<div class="form-group">
					            <label class="col-md-3 control-label">Image 2</label>
					            <div class="col-md-9">
                       				<input type="file" name="color_name_image2" id="color_name_image2" class="form-control"> Recommend 85 x 87 px
<?php
if(!empty($row)) {
	if($row->color_name_image2 != '') {
?>
									<br><img src="<?php echo base_url('uploads/color/'.$row->color_name_image2);?>" width="150">							
<?php
	}
}
?>
                       				
					            </div>
					        </div> 
<?php
*/
?>
							<div class="form-group">
					            <label class="col-md-3 control-label">Color Code</label>
					            <div class="col-md-9">
                       				<input type="text" name="color_code" id="color_code" class="form-control" value="<?php if(!empty($row)) echo $row->color_code;?>">
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Color Name</label>
					            <div class="col-md-9">
                       				<input type="text" name="color_name" id="color_name" class="form-control" value="<?php if(!empty($row)) echo $row->color_name;?>">
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Color Name(Ar)</label>
					            <div class="col-md-9">
                       				<input type="text" name="color_name_ar" id="color_name_ar" class="form-control" value="<?php if(!empty($row)) echo $row->color_name_ar;?>">
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
