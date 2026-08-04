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
                        <form action="" method="post">
                        <div class="panel-body">
<?php
if(!empty($row)) {
?>                      
                        	<div align="right"><input type="button" value="Print" onclick="window.print();"></div>
<?php
}
?>                         	
					        <legend>Data</legend>
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Order No</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_no;?>
					            </div>
					        </div>
					        <br>
					        <br>
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Datetime Create</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_datetime_create;?>
					            </div>
					        </div>
					        <br>
					        <br>
					        <legend>Shipping</legend>
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Name</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_shipping_first_name_last_name;?>
					            </div>
					        </div>
					        <br>
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Phone Number</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_shipping_phone_number;?>
					            </div>
					        </div>
					        <br>  
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Email</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_shipping_email;?>
					            </div>
					        </div>
					        <br>  
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Address</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_shipping_address.'<br>'.$row->order_detail_shipping_district.' '.$row->order_detail_shipping_province.' '.$row->order_detail_shipping_country.' '.$row->order_detail_shipping_country.' '.$row->order_detail_shipping_postal_code;?>
					            </div>
					        </div>
					        <br>  
					        <legend>Billing</legend>
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Name</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_billing_first_name_last_name;?>
					            </div>
					        </div>
					        <br>
					        <br>
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Phone Number</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_billing_phone_number;?>
					            </div>
					        </div>
					        <br>  
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Email</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_billing_email;?>
					            </div>
					        </div>
					        <br>  
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Address</label>
					            <div class="col-md-9">
                       				<?php if(!empty($row)) echo $row->order_detail_billing_address.'<br>'.$row->order_detail_billing_district.' '.$row->order_detail_billing_province.' '.$row->order_detail_billing_country.' '.$row->order_detail_billing_country.' '.$row->order_detail_billing_postal_code;?>
					            </div>
					        </div>
					        <br>
					        <legend>Status</legend>
					        <div class="form-group">
					            <label class="col-md-3 control-label" align="right">Status</label>
					            <div class="col-md-9">
                       				<select name="order_detail_status" id="order_detail_status" class="form-control">
                       					<option value="">Please Select</option>
                       					<option value="Waiting" <?php if(!empty($row) and $row->order_detail_status == 'Waiting') echo 'selected';?>>Waiting payment</option>
                       					<option value="Shipping" <?php if(!empty($row) and $row->order_detail_status == 'Shipping') echo 'selected';?>>Waiting shipping</option>
                       					<option value="Success" <?php if(!empty($row) and $row->order_detail_status == 'Success') echo 'selected';?>>Accepted Orders</option>
                       					<option value="Cancel" <?php if(!empty($row) and $row->order_detail_status == 'Cancel') echo 'selected';?>>Reject Orders</option>
                       				</select>
                       				<br>
                       				<input type="submit" name="submit" value="Save">
					            </div>
					        </div>
					        <br>
					        <legend>Order</legend>
					        <div class="form-group">
					            <div class="col-md-12">
									<table class="table table-striped table-bordered">
										<tr>
											<th>Image</th>
											<th>Category</th>
											<th>Name</th>
											<th>Color</th>
											<th>Qty</th>
											<th>Price</th>
											<th>Sub Total</th>
										</tr>
<?php
if(!empty($order)) {
	foreach($order as $r) {
		$price = $r->order_price * $r->order_qty;
?>
										<tr>
											<td><img src="<?php echo base_url('uploads/product/'.$r->order_image);?>" width="150"></td>
											<td><?php echo $r->order_category;?></td>
											<td><?php echo $r->order_name;?></td>
											<td><?php echo $r->order_color;?></td>
											<td><?php echo number_format($r->order_qty, 0, '.', ',');?></td>
											<td><?php echo number_format($r->order_price, 2, '.', ',');?></td>
											<td><?php echo number_format($price, 2, '.', ',');?></td>
										</tr>
<?php
	}
}
?>
										<tr>
											<td colspan="6">Sub Total</td>
											<td><?php if(!empty($row)) echo number_format($row->order_detail_sub_total, 2, '.', ',');?></td>
										</tr>
										<tr>
											<td colspan="6">Discount</td>
											<td><?php if(!empty($row)) echo number_format($row->order_detail_discount, 2, '.', ',');?></td>
										</tr>
										<tr>
											<td colspan="6">Shipping</td>
											<td><?php if(!empty($row)) echo number_format($row->order_detail_shipping, 2, '.', ',');?></td>
										</tr>
										<tr>
											<td colspan="6">Total</td>
											<td><?php if(!empty($row)) echo number_format($row->order_detail_total, 2, '.', ',');?></td>
										</tr>
									</table>
					            </div>
					        </div>
					        <br>                 
                        </div>
					    </form>
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
    		$( "#order_date_update" ).datepicker({ dateFormat: 'yy-mm-dd' });
  		} );
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.order_ckeditor.setData('');
		}
	</script>
</body>
</html>
