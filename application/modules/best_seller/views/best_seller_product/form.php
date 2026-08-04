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
							<form action="<?php echo site_url('best_seller/backend/best_seller_save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
							<legend>Best Seller</legend>
							<div class="form-group">
					            <label class="col-md-3 control-label">Product 1</label>
					            <div class="col-md-9">
                       				<select name="product_id1" id="product_id1" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id1 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>
							
							<div class="form-group">
					            <label class="col-md-3 control-label">Product 2</label>
					            <div class="col-md-9">
                       				<select name="product_id2" id="product_id2" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id2 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">Product 3</label>
					            <div class="col-md-9">
                       				<select name="product_id3" id="product_id3" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id3 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">Product 4</label>
					            <div class="col-md-9">
                       				<select name="product_id4" id="product_id4" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id4 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">Product 5</label>
					            <div class="col-md-9">
                       				<select name="product_id5" id="product_id5" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id5 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">Product 6</label>
					            <div class="col-md-9">
                       				<select name="product_id6" id="product_id6" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id6 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">Product 7</label>
					            <div class="col-md-9">
                       				<select name="product_id7" id="product_id7" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id7 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">Product 8</label>
					            <div class="col-md-9">
                       				<select name="product_id8" id="product_id8" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id8 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">Product 9</label>
					            <div class="col-md-9">
                       				<select name="product_id9" id="product_id9" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id9 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">Product 10</label>
					            <div class="col-md-9">
                       				<select name="product_id10" id="product_id10" class="form-control">
									   	<option value="">Please Select</option>
<?php
if(!empty($rows)) {
	foreach($rows as $r) {
?>
										<option value="<?php echo $r->product_id;?>" <?php if(!empty($row) and $row->product_id10 == $r->product_id) echo 'selected';?>><?php echo $r->product_name;?></option>
<?php
	}
}
?>
									</select>
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
			CKEDITOR.instances.units_features_ckeditor.setData('');
		}
	</script>
</body>
</html>
