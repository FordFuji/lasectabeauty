<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .sidemember_menu ul li:nth-child(4) a {
        font-family: 'brandon_grotesquebold';
    }

</style>

<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">
        <div class="row">
            <div class="col">
                <div class="banner_member">
                    <div class="wrapper_pad">
                        <div class="banner_faqstxt">
                            <h1><?php echo get2Lang($this->session->userdata('lang'), 'My Account', 'حسابي');?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_pad mt-lg-5 mb-lg-5">
            <div class="row">
                <div class="col-lg-3 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="bgwhite_shadow">
                        <div class="title_section_cart">
                            <h5><?php echo get2Lang($this->session->userdata('lang'), 'My Account', 'حسابي');?></h5>
                        </div>
                        <div class="upload_pic">
                            <div class="avatar"><img src="<?php echo base_frontend('images/member_profile.png');?>" class="img-fluid">
                                <input type="button" class="upload" value="Edit" onClick="document.getElementById('to-hide').click()">
                            </div>

                        </div>

                        <div class="details_member">
                            <h3><?php if(!empty($row)) echo $row->member_first_name;?></h3>
                            <p><?php if(!empty($row)) echo $row->member_email;?></p>
                        </div>
                        <hr>
                        <div class="sidemember_menu">
                            <ul>
                                <li><a href="<?php echo site_frontend('member_account.php');?>"><img src="<?php echo base_frontend('images/member_06.png');?>"> <?php echo get2Lang($this->session->userdata('lang'), 'Account Information', 'معلومات الحساب');?></a></li>
                                <li><a href="<?php echo site_frontend('member_wishlist.php');?>"><img src="<?php echo base_frontend('images/member_09.png');?>"> <?php echo get2Lang($this->session->userdata('lang'), 'Wishlist', 'قائمة الأمنيات');?></a></li>
                                <li><a href="<?php echo site_frontend('member_order.php');?>"><img src="<?php echo base_frontend('images/member_11.png');?>"> <?php echo get2Lang($this->session->userdata('lang'), 'Orders', 'الطلبات');?></a></li>
                                <li><a href="<?php echo site_frontend('member_address.php');?>"><img src="<?php echo base_frontend('images/member_13.png');?>"> <?php echo get2Lang($this->session->userdata('lang'), 'Address', 'العنوان');?></a></li>
                                <li><a href="<?php echo site_url('frontend/path/logout');?>"><img src="<?php echo base_frontend('images/member_15.png');?>"> <?php echo get2Lang($this->session->userdata('lang'), 'Log out', 'تسجيل الخروج');?></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="backlink d-block d-sm-block d-md-block d-lg-none d-xl-none">
                        <a href="<?php echo site_frontend('member_account.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Your order details', 'تفاصيل طلبك');?></a>
                    </div>
                    <div class="title_section_cart">
                        <h5><?php echo get2Lang($this->session->userdata('lang'), 'My Address Book', 'دليل العناوين');?></h5>
                    </div>
                    <div class="bgwhite_shadow2">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5><?php echo get2Lang($this->session->userdata('lang'), 'Shipping Address', 'عنوان الشحن');?></h5>
<?php
if(!empty($addressShipping)) {
	foreach($addressShipping as $r) {
?>
                                <div class="border_black">
                                    <b><?php echo $r->member_shipping_address_first_name.' '.$r->member_shipping_address_last_name;?></b><br>
                                    <?php echo $r->member_shipping_address_address;?><br>
                                    <?php echo $r->member_shipping_address_country;?><br>
                                    <?php echo $r->member_shipping_address_mobile;?><br>
                                    <?php echo $r->member_shipping_address_email;?>

                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <a href="<?php echo site_url('frontend/path/member_add_address/shipping/'.$r->member_shipping_address_id);?>" class="removeitem"><?php echo get2Lang($this->session->userdata('lang'), 'Edit', 'تعديل');?></a>
                                            <a href="<?php echo site_url('frontend/path/member_delete_address/shipping/'.$r->member_shipping_address_id);?>" class="removeitem"><?php echo get2Lang($this->session->userdata('lang'), 'Remove Address', 'إزالة العنوان');?></a>

                                        </div>
                                        <div class="col-md-3 text-right" id="shipping_<?php echo $r->member_shipping_address_id;?>">
<?php
		if($row->member_shipping_address_id == $r->member_shipping_address_id) {
?>
                                            <a href="#" class="blacktxt smtxt font-weight-bold"><?php echo get2Lang($this->session->userdata('lang'), 'Default', 'Default(Ar)');?></a>
<?php			
		} else {
?>                                            
                                            <a href="javascript:checkDefaultShippingAddress('<?php echo $r->member_shipping_address_id;?>');" class="lightgray smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Set as Default', 'إعداد كإفتراضي');?></a>
<?php			
		}
?>
                                        </div>
                                    </div>

                                </div>
                                <br>
<?php
	}
}
/*
?>
                                <div class="border_black">
                                    <b>Orange Technology Solution </b><br>
                                    Netthakan Ornnorm <br>
                                    +6681-4499-488 <br>
                                    netthakan@orange-thailand.com

                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <a href="<?php echo site_frontend('member_add_address.php');?>" class="removeitem">Edit</a>
                                            <a href="#" class="removeitem">Remove Address</a>

                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="#" class="lightgray smtxt">Set as Default</a>
                                        </div>
                                    </div>

                                </div>
                                <br>
<?php
*/
?>
                                <div class="btn_addaddress">
                                    <a href="<?php echo site_url('frontend/path/member_add_address/shipping');?>" class="btn btn-info"><?php echo get2Lang($this->session->userdata('lang'), 'Add new address', 'إضافة عنوان جديد');?></a>
                                </div>


                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <h5><?php echo get2Lang($this->session->userdata('lang'), 'Billing Address', 'عنوان الشحن');?></h5>
<?php
if(!empty($addressBilling)) {
	foreach($addressBilling as $r) {
?>
                                <div class="border_black">
                                    <b><?php echo $r->member_billing_address_first_name.' '.$r->member_billing_address_last_name;?></b><br>
                                    <?php echo $r->member_billing_address_address;?><br>
                                    <?php echo $r->member_billing_address_country;?><br>
                                    <?php echo $r->member_billing_address_mobile;?><br>
                                    <?php echo $r->member_billing_address_email;?>

                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <a href="<?php echo site_url('frontend/path/member_add_address/billing/'.$r->member_billing_address_id);?>" class="removeitem"><?php echo get2Lang($this->session->userdata('lang'), 'Edit', 'تعديل');?></a>
                                            <a href="<?php echo site_url('frontend/path/member_delete_address/billing/'.$r->member_billing_address_id);?>" class="removeitem"><?php echo get2Lang($this->session->userdata('lang'), 'Remove Address', 'إزالة العنوان');?></a>

                                        </div>
                                        <div class="col-md-3 text-right">
<?php
		if($row->member_billing_address_id == $r->member_billing_address_id) {
?>
                                            <a href="#" class="blacktxt smtxt font-weight-bold"><?php echo get2Lang($this->session->userdata('lang'), 'Default', 'Default(Ar)');?></a>
<?php			
		} else {
?>                                            
                                            <a href="javascript:checkDefaultBillingAddress('<?php echo $r->member_billing_address_id;?>');" class="lightgray smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Set as Default', 'إعداد كإفتراضي');?></a>
<?php			
		}
?>
                                        </div>
                                    </div>

                                </div>
                                <br>
<?php
	}
}
?>
                                <div class="btn_addaddress">
                                    <a href="<?php echo site_url('frontend/path/member_add_address/billing');?>" class="btn btn-info"><?php echo get2Lang($this->session->userdata('lang'), 'Add new address', 'إضافة عنوان جديد');?></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>

    <script>
    	function checkDefaultShippingAddress(member_address_id) {
			$.post('<?php echo site_url("frontend/path/ajaxDefaultShippingAddress");?>', { member_shipping_address_id: member_address_id }, function(data) {
				window.location.href = '<?php echo site_url("frontend/path/member_address");?>';
			});
		}
		
    	function checkDefaultBillingAddress(member_address_id) {
			$.post('<?php echo site_url("frontend/path/ajaxDefaultBillingAddress");?>', { member_billing_address_id: member_address_id }, function(data) {
				window.location.href = '<?php echo site_url("frontend/path/member_address");?>';	
			});
		}
    
        function previewFile() {
            var preview = document.querySelector('img'); //selects the query named img
            var file = document.querySelector('input[type=file]').files[0]; //sames as here
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file); //reads the data as a URL
            } else {
                preview.src = "https://i.redd.it/62fgxocnur901.jpg";
            }
        }

        previewFile(); //calls the function named previewFile()    

    </script>
</body>

</html>
