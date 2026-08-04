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
							<form action="<?php echo site_url('home/backend/banner_save_update/');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
							<legend>Left</legend>
							<div class="form-group">
					            <label class="col-md-3 control-label">Image</label>
					            <div class="col-md-9">
                       				<input type="file" name="banner_image_left[]" id="banner_image" class="form-control" multiple="true"> Recommend 799 x 704 px
<?php
if(!empty($rowsLeft)) {
	foreach($rowsLeft as $r) {
		if($r->banner_image != '') {
?>
												<br><img src="<?php echo base_url('uploads/banner/'.$r->banner_image);?>" width="150"> <a href="<?php echo site_url('home/backend/banner_delete/'.$r->banner_id);?>" onclick="return confirm('Confirm Delete');">Delete</a><br>							
<?php
		}
	}
}
?>
                       				
					            </div>
					        </div>
							<legend>Right</legend>
							<div class="form-group">
					            <label class="col-md-3 control-label">Image</label>
					            <div class="col-md-9">
                       				<input type="file" name="banner_image_right[]" id="banner_image" class="form-control" multiple="true"> Recommend 799 x 704 px
<?php
if(!empty($rowsRight)) {
	foreach($rowsRight as $r) {
		if($r->banner_image != '') {
?>
												<br><img src="<?php echo base_url('uploads/banner/'.$r->banner_image);?>" width="150"> <a href="<?php echo site_url('home/backend/banner_delete/'.$r->banner_id);?>" onclick="return confirm('Confirm Delete');">Delete</a><br>							
<?php
		}
	}
}
?>
                       				
					            </div>
					        </div> 
					        <legend>Text</legend>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Text 1(En)</label>
					            <div class="col-md-9">
                       				<input type="text" name="text_text1" id="text_text1" class="form-control" value="<?php if(!empty($row)) echo $row->text_text1;?>">	
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Text 1(Ar)</label>
					            <div class="col-md-9">
                       				<input type="text" name="text_text1_ar" id="text_text1_ar" class="form-control" value="<?php if(!empty($row)) echo $row->text_text1_ar;?>">	
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Text 2(En)</label>
					            <div class="col-md-9">
                       				<input type="text" name="text_text2" id="text_text2" class="form-control" value="<?php if(!empty($row)) echo $row->text_text2;?>">	
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Text 2(Ar)</label>
					            <div class="col-md-9">
                       				<input type="text" name="text_text2_ar" id="text_text2_ar" class="form-control" value="<?php if(!empty($row)) echo $row->text_text2_ar;?>">	
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Text 3(En)</label>
					            <div class="col-md-9">
                       				<input type="text" name="text_text3" id="text_text3" class="form-control" value="<?php if(!empty($row)) echo $row->text_text3;?>">	
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Text 3(Ar)</label>
					            <div class="col-md-9">
                       				<input type="text" name="text_text3_ar" id="text_text3_ar" class="form-control" value="<?php if(!empty($row)) echo $row->text_text3_ar;?>">	
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
	
	<script>
		$(document).ready(function() {
			App.init();
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.banner_ckeditor.setData('');
		}
	</script>
</body>
</html>
