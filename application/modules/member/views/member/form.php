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
                        	<div class="col-md-6">
                        		
<?php
if(!empty($shippingCtrl)) {
	$i = 1;
	foreach($shippingCtrl as $r) {
?>
								<legend>Shipping Address <?php echo $i;?> <?php if(!empty($row) and $row->member_shipping_address_id == $r->member_shipping_address_id) echo '(Default)';?></legend>
	                        	<div class="form-group">
						            <label class="col-md-3 control-label" align="right">Name Surname</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_shipping_address_first_name.' '.$r->member_shipping_address_last_name;?>
						            </div>
						        </div>
						        <br><br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Phone Number</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_shipping_address_mobile;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Email</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_shipping_address_email;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Address</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_shipping_address_address;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Province</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_shipping_address_province;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">District</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_shipping_address_district;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Sub District</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_shipping_address_sub_district;?>
						            </div>
						        </div>
						        <br>  	
<?php
		$i++;
	}
}
?>
					        </div>
					        
                        	<div class="col-md-6">
                        		
<?php
if(!empty($billingCtrl)) {
	$i = 1;
	foreach($billingCtrl as $r) {
		
?>
								<legend>Billing Address <?php echo $i;?> <?php if(!empty($row) and $row->member_billing_address_id == $r->member_billing_address_id) echo '(Default)';?></legend>
	                        	<div class="form-group">
						            <label class="col-md-3 control-label" align="right">Name Surname</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_billing_address_first_name.' '.$r->member_billing_address_last_name;?>
						            </div>
						        </div>
						        <br><br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Phone Number</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_billing_address_mobile;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Email</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_billing_address_email;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Address</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_billing_address_address;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Province</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_billing_address_province;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">District</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_billing_address_district;?>
						            </div>
						        </div>
						        <br>
						        <div class="form-group">
						            <label class="col-md-3 control-label" align="right">Sub District</label>
						            <div class="col-md-9">
	                       				<?php if(!empty($row)) echo $r->member_billing_address_sub_district;?>
						            </div>
						        </div>
						        <br>	
<?php
		$i++;
	}
}
?>  
                        	</div>
					        <br>                 
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
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
	<script>
		$(document).ready(function() {
			App.init();
		});
		
		$( function() {
    		$( "#member_date_update" ).datepicker({ dateFormat: 'yy-mm-dd' });
  		} );
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.member_ckeditor.setData('');
		}
	</script>
</body>
</html>
