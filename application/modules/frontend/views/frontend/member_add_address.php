<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .sidemember_menu ul li:nth-child(4) a {
        font-family: 'brandon_grotesquebold';
    }

    .formaddress .form-control {
        border-radius: 0px;
        border-color: #000;
    }

    .labelname {
        padding-top: 10px;
        padding-bottom: 10px;
        position: relative;
        display: block;
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
                        <a href="<?php echo site_frontend('member_address.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Back', 'معودة');?></a>
                    </div>
                    <form action="" method="post">
                    <div class="title_section_cart">

                        <div class="row">
                            <div class="col-lg-8">
                                <h5><?php if(!empty($member_address_id)) echo get2Lang($this->session->userdata('lang'), 'Edit New Address', 'Edit New Address(Ar)'); else echo get2Lang($this->session->userdata('lang'), 'Add New Address', 'إضافة عنوان جديد');?></h5>
                            </div>
                            <div class="col-lg-4 d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                <div class="backlink">
                                    <a href="<?php echo site_frontend('member_account.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Back', 'معودة');?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bgwhite_shadow2">
                        <div class="formaddress">
                              <div class="row">
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'First Name', 'الاسم الأول');?> </span>
                                    <input id="member_address_first_name" name="member_address_first_name" type="text" class="form-control input-md" value="<?php if(!empty($shipping)) echo $shipping->member_shipping_address_first_name; elseif(!empty($billing)) echo $billing->member_billing_address_first_name;?>" required> </div>
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Last Name', 'الاسم الأخير');?></span>
                                    <input id="member_address_last_name" name="member_address_last_name" type="text" class="form-control input-md" value="<?php if(!empty($shipping)) echo $shipping->member_shipping_address_last_name; elseif(!empty($billing)) echo $billing->member_billing_address_last_name;?>" required> </div>
                            </div> 
                            <div class="row">
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Email', 'البريد الإلكتروني');?> </span>
                                    <input id="member_address_email" name="member_address_email" type="email" class="form-control input-md" value="<?php if(!empty($shipping)) echo $shipping->member_shipping_address_email; elseif(!empty($billing)) echo $billing->member_billing_address_email;?>" required> </div>
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Mobile', 'الجوال');?></span>
                                    <input id="member_address_mobile" name="member_address_mobile" type="text" class="form-control input-md" value="<?php if(!empty($shipping)) echo $shipping->member_shipping_address_mobile; elseif(!empty($billing)) echo $billing->member_billing_address_mobile;?>" required> </div>
                            </div>
                            <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Address', 'العنوان');?></span>
                            <textarea class="form-control" id="member_address_address" name="member_address_address" rows="3" required><?php if(!empty($shipping)) echo $shipping->member_shipping_address_address; elseif(!empty($billing)) echo $billing->member_billing_address_address;?></textarea>
                            <div class="row">
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Province', 'المنطقة');?></span>
                                	<input id="member_address_province" name="member_address_province" type="text" class="form-control input-md" value="<?php if(!empty($shipping)) echo $shipping->member_shipping_address_province; elseif(!empty($billing)) echo $billing->member_billing_address_province;?>" required>
                                    <!-- <select id="member_address_province_id" name="member_address_province_id" class="form-control arrow_down" onchange="changeProvince(this.value);" required>
                                        <option value="">Please select</option>
<?php
if(!empty($provinceCtrl)) {
	foreach($provinceCtrl as $r) {
		
?>
                                        <option value="<?php echo $r->PROVINCE_ID;?>" <?php if(!empty($shipping) and $shipping->member_shipping_address_province_id == $r->PROVINCE_ID) echo 'selected'; elseif(!empty($billing) and $billing->member_billing_address_province_id == $r->PROVINCE_ID) echo 'selected';?>><?php echo $r->PROVINCE_NAME_ENG;?></option>
<?php
	}
}

?>
                                    </select> -->
                                </div>
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'District', 'الحي');?></span>
                                	<input id="member_address_district" name="member_address_district" type="text" class="form-control input-md" value="<?php if(!empty($shipping)) echo $shipping->member_shipping_address_district; elseif(!empty($billing)) echo $billing->member_billing_address_district;?>" required>
                                    <!-- <select id="member_address_district_id" name="member_address_district_id" class="form-control arrow_down" onchange="changeAmphur(this.value);" required>
                                        <option value="">Please select</option>
<?php
if(!empty($amphur)) {
	foreach($amphur as $r) {
?>
										<option value="<?php echo $r->AMPHUR_ID;?>" <?php if(!empty($shipping) and $shipping->member_shipping_address_district_id == $r->AMPHUR_ID) echo 'selected'; elseif(!empty($billing) and $billing->member_billing_address_district_id == $r->AMPHUR_ID) echo 'selected';?>><?php echo $r->AMPHUR_NAME_ENG;?></option>
<?php
	}
}
?>
                                    </select> -->
                                </div>
                            </div>
                            <div class="row">
<?php 
                                	/*
                                <div class="col-12 col-lg-6"> <span class="labelname">Sub District</span>
									<input id="member_address_sub_district" name="member_address_sub_district" type="text" class="form-control input-md" value="<?php if(!empty($shipping)) echo $shipping->member_shipping_address_sub_district; elseif(!empty($billing)) echo $billing->member_billing_address_sub_district;?>" required>
                                    <!-- <select id="member_address_sub_district_id" name="member_address_sub_district_id" class="form-control arrow_down" required>
                                        <option value="">Please select</option>
<?php
if(!empty($district)) {
	foreach($district as $r) {
?>
										<option value="<?php echo $r->DISTRICT_ID;?>" <?php if(!empty($shipping) and $shipping->member_shipping_address_sub_district_id == $r->DISTRICT_ID) echo 'selected'; elseif(!empty($billing) and $billing->member_billing_address_sub_district_id == $r->DISTRICT_ID) echo 'selected';?>><?php echo $r->DISTRICT_NAME_ENG;?></option>
<?php
	}
}
?>
                                    </select> -->
                                </div>
*/
?>
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Postal Code', 'الرمز البريدي');?></span>
                                    <input id="member_postal_code" name="member_postal_code" type="text" class="form-control input-md" value="<?php if(!empty($shipping)) echo $shipping->member_shipping_postal_code; elseif(!empty($billing)) echo $billing->member_billing_postal_code;?>" required>
                                </div>
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Country', 'الدولة');?></span>
                                    <select id="member_address_country" name="member_address_country" class="form-control input-md" required>
                                    	<option value=""><?php echo get2Lang($this->session->userdata('lang'), 'Please Select', 'من فضلك اختر');?></option>
<?php
if(!empty($country)) {
	foreach($country as $r) {
?>
										<option value="<?php echo $r->country_name;?>" <?php if(!empty($shipping) and $shipping->member_shipping_address_country == $r->country_name) echo 'selected'; elseif(!empty($billing) and $billing->member_billing_address_country == $r->country_name) echo 'selected';?>><?php echo $r->country_name;?></option>
<?php
	}
}
?>							
                                    </select>
                                </div>
                            </div>


                            <br>
                            <input type="submit" name="submit" class="btn btn-info" value="<?php echo get2Lang($this->session->userdata('lang'), 'Save', 'حفظ');?>">

                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>

    <script>
    	function changeProvince(member_address_province_id) {
			$.post('<?php echo site_url("frontend/path/ajaxChangeProvince");?>', { member_address_province_id: member_address_province_id }, function(data) {
				$("#member_address_district_id").html(data);	
			});
		} 
		
		function changeAmphur(member_address_district_id) {
			$.post('<?php echo site_url("frontend/path/ajaxChangeAmphur");?>', { member_address_district_id: member_address_district_id }, function(data) {
				$("#member_address_sub_district_id").html(data);	
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
