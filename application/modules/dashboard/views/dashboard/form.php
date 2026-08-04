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
							<form action="<?php echo site_url('dashboard/backend/save_update/');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
					        <div class="form-group">
								<div class="col-md-3" style="height: 150px;">
									<table width="100%">
										<tr>
											<td align="left" style="color: #9900ff; font-weight: bold;"><h3 style="color: #9900ff;">Users</h3>Members Number</td>
											<td align="right" style="color: #9900ff; font-weight: bold; font-size: 24px;"><?php echo $this->model_dashboard->getCountMember();?></td>
										</tr>
									</table>
									<br>
									<a href="<?php echo site_url('member/backend/');?>" style="color: #9900ff;" target="_blank">See More</a>
									<hr>
								</div>
								<div class="col-md-3" style="height: 150px;">
									<table width="100%">
										<tr>
											<td align="left" style="color: #0066ff; font-weight: bold;"><h3 style="color: #0066ff;">Products</h3>Products Number</td>
											<td align="right" style="color: #0066ff; font-weight: bold; font-size: 24px;"><?php echo $this->model_dashboard->getCountProduct();?></td>
										</tr>
									</table>
									<br>
									<a href="<?php echo site_url('data_product/backend/product');?>" style="color: #0066ff;" target="_blank">See More</a>
									<hr>
								</div>
								<div class="col-md-3" style="height: 150px;">
									<table width="100%">
										<tr>
											<td align="left" style="color: #ff0000; font-weight: bold;"><h3 style="color: #ff0000;">Orders</h3>Orders Number</td>
											<td align="right" style="color: #ff0000; font-weight: bold; font-size: 24px;"><?php echo $this->model_dashboard->getCountOrderDetail();?></td>
										</tr>
									</table>
									<br>
									<a href="<?php echo site_url('order/backend/all');?>" style="color: #ff0000;" target="_blank">See More</a>
									<hr>
								</div>
								<div class="col-md-3" style="height: 150px;">
									<table width="100%">
										<tr>
											<td align="left" style="color: #009933; font-weight: bold;"><h3 style="color: #009933;">E-Mail</h3>E-Mail</td>
											<td align="right" style="color: #009933; font-weight: bold; font-size: 24px;"><?php echo $this->model_dashboard->getCountContact();?></td>
										</tr>
									</table>
									<br>
									<a href="<?php echo site_url('contact/backend/');?>" style="color: #009933;" target="_blank">See More</a>
									<hr>
								</div>
								<div class="col-md-3" style="height: 150px;">
									<table width="100%">
										<tr>
											<td align="left" style="color: #cc6600; font-weight: bold;"><h3 style="color: #cc6600;">New / Waiting Orders</h3>New Orders Number</td>
											<td align="right" style="color: #cc6600; font-weight: bold; font-size: 24px;"><?php echo $this->model_dashboard->getCountOrderWaiting();?></td>
										</tr>
									</table>
									<br>
									<a href="<?php echo site_url('order/backend/new_');?>" style="color: #cc6600;" target="_blank">See More</a>
									<hr>
								</div>
								<div class="col-md-9">
									<div class="col-md-12">
										<h3 align="center" style="color: #111">Sales</h3>
										<hr>
									</div>
									<div class="col-md-4" style="color: #996600;">
										<h4 style="color: #996600;">Sales total</h4>
										<br>
										<?php echo $this->model_dashboard->getOrderSaleTotal();?>
									</div>
									<div class="col-md-4" style="color: #996600;">
										<h4 style="color: #996600;">Success Earning</h4>
										<br>
										<?php echo $this->model_dashboard->getOrderSaleSuccess();?>
									</div>
									<div class="col-md-4" style="color: #996600;">
										<h4 style="color: #996600;">Waiting Earnings</h4>
										<br>
										<?php echo $this->model_dashboard->getOrderSaleWaiting();?>
									</div>
								</div>
					        </div>
					        <div class="col-md-12">
					        	<h3 style="color: #000;">Total Visits</h3>
					        </div>
					        <table class="table table-striped table-bordered">
					        	<tr>
					        		<th width="65%" style="color: #ff9900;">Category Name</th>
					        		<th width="35%" style="color: #ff9900;">Visits</th>
					        	</tr>
					        	<tr>
					        		<td style="color: #ffa31a;">Make Up</td>
					        		<td style="color: #ffa31a;"><?php echo $this->model_dashboard->getCounter(1);?></td>
					        	</tr>
					        	<tr>
					        		<td style="color: #ffa31a;">Skin Care</td>
					        		<td style="color: #ffa31a;"><?php echo $this->model_dashboard->getCounter(2);?></td>
					        	</tr>
					        	<tr>
					        		<td style="color: #ffa31a;">Hair Care</td>
					        		<td style="color: #ffa31a;"><?php echo $this->model_dashboard->getCounter(3);?></td>
					        	</tr>
					        	<tr>
					        		<td style="color: #ffa31a;">Accessories</td>
					        		<td style="color: #ffa31a;"><?php echo $this->model_dashboard->getCounter(4);?></td>
					        	</tr>
					        </table>
					        <table class="table table-striped table-bordered">
					        	<tr>
					        		<th style="color: #000;">Total Visits Today</th>
					        		<th style="color: #000;">Total Visits This Week</th>
					        		<th style="color: #000;">Total Visits This Month</th>
					        	</tr>
					        	<tr>
					        		<td style="color: #000;"><?php echo $this->model_dashboard->getCounterVisit('day');?></td>
					        		<td style="color: #000;"><?php echo $this->model_dashboard->getCounterVisit('week');?></td>
					        		<td style="color: #000;"><?php echo $this->model_dashboard->getCounterVisit('month');?></td>
					        	</tr>
					        </table>
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
			CKEDITOR.instances.ford_ckeditor.setData('');
		}
	</script>
</body>
</html>
