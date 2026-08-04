<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .smsize3{
        width: 200px;
        position: absolute;
        top: -20px;
        margin-left: 10px;
    }
    /*subscribe*/


    .promotion-code {
        overflow: hidden;
        width: 100%;
        position: relative;
        margin-top: 10px;
        margin-left: 0px;
    }

    .promotion-code input {
        width: 100%;
        height: 55px;
        padding: 10px 0 10px 15px;
        background-color: white;
        border: 1px solid #eeeeee;
        border-radius: 0px;
    }

    .promotion-code input:focus+button {
        background-color: black;
        color: white;
    }

    .promotion-code-text {
        font-size: 16px;
        font-weight: bold;
    }

    .promotion-code button {
        position: absolute;
        z-index: 1;
        right: 0px;
        /*        top: 0px;*/
        height: 55px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border: none;
        background-color: #252525;
        -moz-transition: background-color 0.3s ease, width 0.3s ease;
        -o-transition: background-color 0.3s ease, width 0.3s ease;
        -webkit-transition: background-color 0.3s ease, width 0.3s ease;
        transition: background-color 0.3s ease, width 0.3s ease;
        color: white;
        padding: 0;
        margin: 0;
        font-weight: bold;
        width: 100px;
        font-size: 1em;
        text-align: center;
        cursor: pointer;
        @inlude transform(translateZ(0));
    }

    .promotion-code button:hover {
        width: 80px;
        color: white;
    }

    .summarycart_inside thead th {
        border-top: none;
        border-bottom: 1px solid #dee2e6;
    }

    .summarycart_inside td {
        border-top: none;
    }

    .box02 {
        padding: 20px;
    }



    .title_section_cart h3 {
        font-size: 1.2em;
        padding: 5px;
    }

    .checkboxsw {
        margin-top: -20px;
        float: right;
    }

    .checkboxsw input[type=checkbox] {
        height: 0;
        width: 0;
        visibility: hidden;
    }

    .checkboxsw label {
        cursor: pointer;
        text-indent: -9999px;
        width: 60px;
        height: 30px;
        background: grey;
        display: block;
        border-radius: 100px;
        position: relative;
    }

    .checkboxsw label:after {
        content: '';
        position: absolute;
        top: 5px;
        left: 5px;
        width: 20px;
        height: 20px;
        background: #fff;
        border-radius: 90px;
        transition: 0.3s;
    }

    .checkboxsw input:checked+label {
        background: #252525;
    }

    .checkboxsw input:checked+label:after {
        left: calc(100% - 5px);
        transform: translateX(-100%);
    }

    .checkboxsw label:active:after {
        width: 30px;
    }

    .box01 {
        display: none;
    }

    .ui-widget {
        font-size: 1.1em;
    }

    .ui-widget .ui-widget {
        font-size: 1em;
    }

    .ui-widget input,
    .ui-widget select,
    .ui-widget textarea,
    .ui-widget button {
        font-size: 1em;
    }

    .ui-widget-content {
        border: 1px solid #555555;
        background: white;
        color: black;
    }

    .ui-widget-content a {
        color: black;
    }

    .ui-datepicker .ui-datepicker-title {
        color: white;
    }

    .ui-widget-header {
        border: 1px solid #fac4c7;
        background-color: black;
        font-weight: bold;
        background-image: none;
    }

    .ui-widget-header a {
        color: black;
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default {
        border: 1px solid #444444;
        background: white;
        font-weight: normal;
        color: black;
    }

    .ui-state-default a,
    .ui-state-default a:link,
    .ui-state-default a:visited {
        color: black;
        text-decoration: none;
    }

    .ui-state-hover,
    .ui-widget-content .ui-state-hover,
    .ui-widget-header .ui-state-hover,
    .ui-state-focus,
    .ui-widget-content .ui-state-focus,
    .ui-widget-header .ui-state-focus {
        border: 1px solid #858585;
        background: #858585;
        font-weight: normal;
        color: #ffffff;
    }

    .ui-state-hover a,
    .ui-state-hover a:hover {
        color: black;
        text-decoration: none;
    }

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active {
        border: 1px solid #858585;
        background: #858585 font-weight: normal;
        color: black;
    }

    .ui-state-active a,
    .ui-state-active a:link,
    .ui-state-active a:visited {
        color: black;
        text-decoration: none;
    }

    .ui-widget:active {
        outline: none;
    }


    .arrows {
        white-space: nowrap;
    }

    .arrows li {
        display: inline-block;
        line-height: 26px;
        /*    margin: 0 9px 0 -10px;*/
        padding: 0 50px 0px 20px;
        position: relative;
    }

    .arrows li.active:after {
        border-top: 1px solid #252525;
        content: '';
        display: block;
        height: 50%;
        width: 20%;
        position: absolute;
        right: -10px;
        top: 15px;
        z-index: -1;
    }

    .arrows li.active a {
        color: #252525;
    }

    .arrows li::after {
        bottom: 0;
        top: auto;
        /*    transform: skewX(-45deg);*/
    }

    .arrows li:last-of-type::before,
    .arrows li:last-of-type::after {
        display: none;
    }

    .arrows li a {
        font-size: 13px;
        letter-spacing: 1px;
        text-decoration: none;
        color: #a8a8a8;
    }

    .styled-checkbox {
        position: absolute;
        opacity: 0;
    }

    .styled-checkbox+label {
        position: relative;
        cursor: pointer;
        padding: 0;
        font-size: 14px;
        color: #676767;
    }

    .styled-checkbox+label:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        width: 18px;
        height: 18px;
        background: white;
        border: 1px solid #252525;
        border-radius: 3px;
    }

    .styled-checkbox:disabled+label {
        color: #b8b8b8;
        cursor: auto;
    }

    .styled-checkbox:disabled+label:before {
        box-shadow: none;
        background: #252525;
    }

    .styled-checkbox:checked+label:before {
        background-color: #252525;
    }

    .styled-checkbox:checked+label:after {
        content: '';
        position: absolute;
        left: 4px;
        top: 9px;
        background: #ffffff;
        width: 3px;
        height: 3px;
        box-shadow: 2px 0 0 #ffffff, 4px 0 0 #ffffff, 4px -2px 0 #ffffff, 4px -4px 0 #ffffff, 4px -6px 0 #ffffff, 4px -8px 0 #ffffff;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }


    .form_bill,
    .formaddress {
        padding: 20px;
    }

    .box02 .form-control,
    .form_bill .form-control,
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

    .summarycart {
        position: relative;
    }


    .border_black h4 {
        font-size: 20px;
        font-weight: 600;
    }
    .md-radio.md-radio-inline{
        height: 55px;
    }

   
    @media (max-width: 991px) {
        .btn-info {
            margin-top: 20px;
        }

        .btn-warning {
            margin-top: 20px;
        }

        .border_black {
            margin-top: 40px;
        }

        .smsize3 {
            width: 40%;
            position: relative;
            top: 0px;
            margin-left: -5px; 
        }     

        .checkboxsw {
            float: left;
        }
        .md-radio.md-radio-inline{
            height: 100px;
        }
        .righttxt{
            text-align: left;
        }
        


    } 
      @media (max-width: 767px) {
         .smsize3 {
            width: 60%;
          
            margin-left: -10px; 
        }     

    }
  
    @media (max-width: 575px) {
         .smsize3 {
            width: 80%;
          
            margin-left: -10px; 
        }     

    }

</style>

<body class="loading_lasecta working">
    <?php require('inc_topmenu.php'); ?>
	
    <div class="container-fluid nopad mb-5">
         <div class="row">
            <div class="col">
                <div class="banner_cart">
                    <div class="wrapper_pad">
                        <div class="banner_faqstxt">
                            <h1><?php echo get2Lang($this->session->userdata('lang'), 'Shopping Bag', 'سلة التسوق');?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_pad">
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="bgwhite_shadow">
                        <div class="title_section_cart">

                            <div class="row">
                                <div class="col-lg-7">
                                    <h3>
                                        <?php echo get2Lang($this->session->userdata('lang'), 'Shipping Address', 'عنوان الشحن');?>
                                    </h3>
                                </div>
                                <div class="col-lg-5">
                                    <div class="righttxt">
                                        <?php echo get2Lang($this->session->userdata('lang'), 'Already have an account?', 'لديك حساب بالفعل؟');?> <a href="<?php echo site_frontend('login_register.php');?>" class="linkcolor"><?php echo get2Lang($this->session->userdata('lang'), 'Log in', 'تسجيل الدخول');?></a>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="formaddress">
                            <div class="row">
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'First Name - Last Name', 'الاسم الأول - الاسم الأخير');?></span>
                                    <input id="order_detail_shipping_first_name_last_name" name="order_detail_shipping_first_name_last_name" type="text" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_shipping_address_first_name.' '.$address->member_shipping_address_last_name;?>" required></div>
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Phone Number', 'رقم الجوال');?></span>
                                    <input id="order_detail_shipping_phone_number" name="order_detail_shipping_phone_number" type="text" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_shipping_address_mobile;?>" required></div>
                            </div> 
                            <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Address', 'العنوان');?></span>
                            <textarea class="form-control" id="order_detail_shipping_address" name="order_detail_shipping_address" placeholder="Address" rows="3" required><?php if(!empty($address)) echo $address->member_shipping_address_address;?></textarea>
                            <div class="row">
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'State/District', 'الولاية/المقاطعة');?></span>
                                    <input type="text" name="order_detail_shipping_district" id="order_detail_shipping_district" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_shipping_address_district;?>" required>
                                </div>
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'City/Province', 'المدينة/المنطقة');?></span>
                                    <input type="text" name="order_detail_shipping_province" id="order_detail_shipping_province" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_shipping_address_province;?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Postal Code', 'الرمز البريدي');?></span>
                                    <input id="order_detail_shipping_postal_code" name="order_detail_shipping_postal_code" type="text" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_shipping_postal_code;?>" required>
                                </div>
                                <div class="col"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Country', 'الدولة');?> *</span>
                                    <select id="order_detail_shipping_country" name="order_detail_shipping_country" class="form-control input-md" onchange="change_shipping_method();" required>
                                    	<option value=""><?php echo get2Lang($this->session->userdata('lang'), 'Please Select', 'من فضلك اختر');?></option>
<?php
if(!empty($countryCtrl)) {
	foreach($countryCtrl as $r) {
?>
											<option value="<?php echo $r->country_name;?>" <?php if(!empty($address)) { if($address->member_shipping_address_country == $r->country_name) echo 'selected'; }?>><?php echo $r->country_name;?></option>
<?php		
	}
}
?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Email Address', 'عنوان البريد الإلكتروني');?> *</span>
                                    <input id="order_detail_shipping_email" name="order_detail_shipping_email" type="email" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_shipping_address_email;?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bgwhite_shadow  mt-4">
                        <div class="title_section_cart">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3 class="font-weight-bold">
                                        <?php echo get2Lang($this->session->userdata('lang'), 'Billing to a different address?', 'الشحن إلى حساب آخر؟');?>
                                    </h3>
                                </div>
                                <div class="col-lg-4 float-md-right">
                                    <div class="checkboxsw">
                                        <input type="checkbox" name="switch" id="switch" value="switch" onclick="checkAddressBilling();" /><label for="switch"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
						
                        <div class="row">
                            <div class="col">
                                <div class="box01">
                                    <div class="form_bill">
                                        <div class="row">
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'First Name - Last Name', 'الاسم الأول - الاسم الأخير');?></span>
                                                <input id="order_detail_billing_first_name_last_name" name="order_detail_billing_first_name_last_name" type="text" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_billing_address_first_name.' '.$address->member_billing_address_last_name;?>"> </div>
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Phone Number', 'رقم الجوال');?></span>
                                                <input id="order_detail_billing_phone_number" name="order_detail_billing_phone_number" type="text" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_billing_address_mobile;?>"> </div>
                                            <div class="col-12 col-lg-12">
		                                        <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Address', 'العنوان');?></span>
		                                        <textarea class="form-control" id="order_detail_billing_address" name="order_detail_billing_address" placeholder="Address" rows="3"><?php if(!empty($address)) echo $address->member_billing_address_address;?></textarea>
		                                    </div>
                                        	<div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'State/District', 'الولاية/المقاطعة');?></span>
                                            	<input id="order_detail_billing_district" name="order_detail_billing_district" type="text" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_billing_address_district;?>"> </div>
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'City/Province', 'المدينة/المنطقة');?></span>
                                                <input id="order_detail_billing_province" name="order_detail_billing_province" type="text" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_billing_address_province;?>"> </div>
	                                        <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Postal Code', 'الرمز البريدي');?>Postal Code</span>
	                                            <input id="order_detail_billing_postal_code" name="order_detail_billing_postal_code" type="text" class="form-control input-md">
	                                        </div>
	                                        <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Country', 'الدولة');?></span>
	                                            <select id="order_detail_billing_country" name="order_detail_billing_country" class="form-control input-md">
<?php
if (!empty($countryCtrl)) {
	foreach ($countryCtrl as $r) {
?>
													<option value="<?php echo $r->country_name;?>" <?php if(!empty($address) and $address->member_billing_address_country == $r->country_name) echo 'selected';?>><?php echo $r->country_name; ?></option>
<?php
	}
}
?>
	                                            </select>
	                                        </div>
	                                        <div class="col-12 col-lg-12"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Email Address', 'عنوان البريد الإلكتروني');?></span>
	                                            <input id="order_detail_billing_email" name="order_detail_billing_email" type="email" class="form-control input-md" value="<?php if(!empty($address)) echo $address->member_billing_postal_code;?>">
	                                        </div>
                                    	</div>
                                	</div>
                                	<div class="box02"><input id="order_detail_note" name="order_detail_note" type="text" class="form-control input-md" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Order Notes (Optional)', 'Order Notes (Optional)(Ar)');?>"></div>
                            	</div>
                        	</div>
                    	</div>
					</div>


                    <div class="bgwhite_shadow mt-4">

                        <div class="title_section_cart">

                            <h3 class="font-weight-bold"><?php echo get2Lang($this->session->userdata('lang'), 'Payment Method', 'طريقة الدفع');?></h3>
                        </div>
                        <div class="accordion divradio">
                            <div class="md-radio md-radio-inline radiocheck">
                                <input id="credit_card" type="radio" name="order_detail_payment_method" value="Credit Card" />
                                <label for="credit_card" style="height: auto;">
                                    <h5 class="styethis"><?php echo get2Lang($this->session->userdata('lang'), 'Credit Card', 'بطاقة ائتمانية');?> <img src="<?php echo base_frontend('images/secure_03.png');?>" class="smsize3"><!-- <img src="<?php echo base_frontend('images/apple_pay.jpg');?>" class="smsize3"> --></h5>
                                </label>
                            </div>
                            <div class="md-radio md-radio-inline radiocheck">
                                <input id="paypal" type="radio" name="order_detail_payment_method" value="Paypal" />
                                <label for="paypal" style="height: auto;">
                                    <h5 class="styethis"><?php echo get2Lang($this->session->userdata('lang'), 'Paypal', 'باي بال');?> <img src="<?php echo base_frontend('images/secure_06.png');?>" class="smsize3"></h5>
                                </label>
                            </div>
                            <!-- <div class="md-radio md-radio-inline radiocheck">
                                <input id="bank_transfer" type="radio" name="order_detail_payment_method" value="Bank Transfer" />
                                <label for="bank_transfer">
                                    <h5 class="styethis">Bank Transfer</h5>
                                </label>
                            </div> -->
                        </div>

                    </div>
                    <div class="bgwhite_shadow mt-4">
                        <div class="title_section_cart mt-4">
                            <h3 class="font-weight-bold"><?php echo get2Lang($this->session->userdata('lang'), 'Shipping Method', 'طريقة الشحن');?></h3>
                        </div>
                        <div class="accordion divradio">
                            <!-- <div class="md-radio md-radio-inline radiocheck">   
                                <input id="shipping_normal" type="radio" name="order_detail_shipping_method" onclick="checkShippingExpressOrNormal('normal');" value="Delivery" />
                                <label for="shipping_normal" style="height: auto;">
                                    <div id="txt_normal">
                                        <h5 class="styethis"> <?php echo get2Lang($this->session->userdata('lang'), 'Delivery', 'التوصيل');?></h5>
                                    </div>

                                </label>
                            </div> -->
                            <div class="md-radio md-radio-inline radiocheck">
                                <input id="shipping_express" type="radio" name="order_detail_shipping_method" onclick="checkShippingExpressOrNormal('express');" value="Express" />
                                <label for="shipping_express" style="height: auto;">
                                    <div id="txt_express">
                                        <h5 class="styethis"> <?php echo get2Lang($this->session->userdata('lang'), 'Express', 'سريع');?></h5>
                                    </div>

                                </label>
                            </div> 
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="bgwhite_shadow">
                        <div class="title_section_cart">
                            <div class="row">
                                <div class="col-6 col-md-9">
                                    <h3><?php echo get2Lang($this->session->userdata('lang'), 'Your order', 'طلبك');?> </h3>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="righttxt text-right">
                                        <a href="#" class="linkcolor"><?php echo get2Lang($this->session->userdata('lang'), 'Edit', 'تعديل');?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cropcart">
                            <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                <table class="table summarycart_inside">
                                    <thead>
                                        <th><?php echo get2Lang($this->session->userdata('lang'), 'Product', 'المنتج');?></th>
                                        <th class="text-center"><?php echo get2Lang($this->session->userdata('lang'), 'Qty', 'الكمية');?></th>
                                        <th class="text-right"><?php echo get2Lang($this->session->userdata('lang'), 'Price', 'السعر');?></th>
                                    </thead>
                                    <tbody id="inc_cart">
<?php
foreach($this->cart->contents() as $items) {
?>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-6 shoppic pr-0"> <img src="<?php echo base_url('uploads/product/'.$items['options']['image']);?>" class="img-fluid"> </div>
                                                    <div class="col-lg-12 col-xl-6 pr-0">
                                                        <div class="new_item">
                                                            <h5><?php echo $items['options']['category'];?></h5>
                                                            <h2 class="mt-1"><?php echo $items['name'];?></h2>
                                                            <li class="smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Color', 'اللون');?> : <?php echo $items['options']['color'];?></li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><?php echo $items['qty'];?></td>
                                            <td class="text-right"><?php echo number_format($items['price'], 2, '.', ',');?>
                                                <div class="btinrela">
                                                    <div class="bin"><a href="javascript:deleteCart('<?php echo $items["rowid"];?>');"><img src="<?php echo base_frontend('images/bin.svg');?>"></a></div>
                                                </div>

                                            </td>
                                        </tr>
<?php
}
?>
                                    </tbody>
                                </table>


                            </div>
                            <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none" id="cart_mobile">
<?php
$sub_total = 0;
foreach($this->cart->contents() as $items) {
	$price = $items['qty'] * $items['price'];
	
	$sub_total += $price;
?>                                
                                <div class="row">
                                    <div class="col">

                                       <div class="row cartmobile-detail">
                                        <div class="col-4">
                                            <div class="pichisres"> <img src="<?php echo base_url('uploads/product/'.$items['options']['image']);?>" class="img-fluid"> </div>
                                        </div>
                                        <div class="col-4" style="padding:0px;">
                                            <div class="new_item">
                                                <h5><?php echo $items['options']['category'];?></h5>
                                                <h3 class="mt-1"><?php echo $items['name'];?></h3>

                                                <li class="smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Color', 'اللون');?> : <span class="lightgray"><?php echo $items['options']['color'];?></span></li>
                                                <li class="smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Qty', 'الكمية');?> : <span class="lightgray"><?php echo $items['qty'];?></span></li>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <b>
                                                <span class="actual-price"><?php echo number_format($items['price'] * $items['qty'], 2, '.', ',');?></span>
                                               

                                            </b>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <hr>
<?php
}
?>
                            </div>





                           <div class="padlr">
                            <div class="row">
                                <div class="col">
                                    <h4><?php echo get2Lang($this->session->userdata('lang'), 'Shipping Address', 'عنوان الشحن');?></h4>
                                    <hr>
<?php
if(!empty($address)) {
?>
									<p><?php echo $address->member_shipping_address_first_name.' '.$address->member_shipping_address_last_name; ?> (<?php echo get2Lang($this->session->userdata('lang'), 'Tel', 'Tel(Ar)');?> : <?php echo $address->member_shipping_address_mobile;?>) <br>
										<?php echo $address->member_shipping_address_address;?><br>
										<?php echo $address->member_shipping_address_district.' '.$address->member_shipping_address_province.' '.$address->member_shipping_address_country.' '.$address->member_shipping_postal_code;?>
									</p>
<?php
}
?>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <h4><?php echo get2Lang($this->session->userdata('lang'), 'Billing Address', 'عنوان الشحن');?></h4>
                                    <hr>
<?php
if (!empty($address)) {
?>
									<p><?php echo $address->member_billing_address_first_name.' '.$address->member_billing_address_last_name; ?> (<?php echo get2Lang($this->session->userdata('lang'), 'Tel', 'Tel(Ar)');?> : <?php echo $address->member_billing_address_mobile; ?>) <br>
										<?php echo $address->member_billing_address_address; ?><br>
										<?php echo $address->member_billing_address_district.' '.$address->member_billing_address_province.' '.$address->member_billing_address_country.' '.$address->member_billing_postal_code; ?>
									</p>
<?php
}
?>
                                </div>

                            </div>
                            
                            <br>
                            
                        <div class="promotion-code">
                            <h3 class="promotion-code-text"><?php echo get2Lang($this->session->userdata('lang'), 'Promotion Code', 'الرمز الترويجي');?></h3>
                            <input type="text" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Enter your code here', 'أدخل الرمز هنا');?>" id="influencer_code" value="<?php echo $this->session->userdata('influencer_code');?>">

                            <input type="button" class="icon-sub-m" style="background-color: #000; color: #fff;" onclick="checkInfluencer();" value="<?php echo get2Lang($this->session->userdata('lang'), 'Save', 'حفظ');?>">
                        </div>
     
                            
                            </div>

                            <br>

                          

                            <table class="table shoppingcart2">
                                <tr class="subtotal-table">
                                    <td class="font-weight-bold"><?php echo get2Lang($this->session->userdata('lang'), 'Subtotal', 'الإجمالي');?></td>
                                    <td class="text-right"><span id="cart_sub_total"><?php echo number_format($sub_total, 2, '.', ',');?></span> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?></td>
                                </tr>
                                <!-- <tr>
                                    <td class="font-weight-bold"> Points </td>
                                    <td class="text-right"> 50 </td>
                                </tr> -->
<?php 
if($this->session->userdata('member_id') != '') {
	$discount = $sub_total * 5 / 100;
	if($this->session->userdata('influencer_type') == 'US') {
		$result = $discount + $this->session->userdata('influencer_price');
		
		$discount = $result;
	} elseif($this->session->userdata('influencer_type') == '%') {
		$result = (($sub_total - $discount) * $this->session->userdata('influencer_price') / 100) + $discount;
		
		$discount = $result;
	}	
} else {
	$discount = 0;	
	if($this->session->userdata('influencer_type') == 'US') {
		$result = $discount + $this->session->userdata('influencer_price');
		
		$discount = $result;
	} elseif($this->session->userdata('influencer_type') == '%') {
		$result = (($sub_total - $discount) * $this->session->userdata('influencer_price') / 100) + $discount;
		
		$discount = $result;
	}
}

$shipping = 0;

$total = $sub_total + $shipping - $discount;
?>
                                <tr>
                                    <td class="font-weight-bold"> <?php echo get2Lang($this->session->userdata('lang'), 'Discount', 'خصم');?> </td>
                                    <td class="text-right"> <span id="cart_discount"><?php echo number_format($discount, 2, '.', ',');?></span> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?> </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold"> <?php echo get2Lang($this->session->userdata('lang'), 'Shipping', 'الشحن');?> </td>
                                    <td class="text-right"> <span id="cart_shipping"><?php echo number_format($shipping, 2, '.', ',');?></span> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?> </td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold"> <?php echo get2Lang($this->session->userdata('lang'), 'Total', 'الإجمالي');?> </td>
                                    <td class="text-right"> <b><span id="cart_total"><?php echo number_format($total, 2, '.', ',');?></span> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?></b> </td>
                                </tr>

                            </table>

                        </div>
                        <br>


                    </div>
                </div>
            </div>
<?php
$data_total = array(
	'total' => $total
);

$this->session->set_userdata($data_total);
?>
            <div class="row mt-5">
                <div class="col-12 col-lg-8">
                    <div class="btn_cart">
                        <div class="row">
                            <div class="col">
                                <input type="button" class="btn btn-info" id="payment_all" name="submit" value="<?php echo get2Lang($this->session->userdata('lang'), 'Place order', 'تقديم الطلب');?>" onclick="checkout();">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Paypal -->
			<form id="payment_paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="hces.thai@gmail.com">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="item_name" value="Order Lasecta Beauty">
				<input type="hidden" name="amount" id="amount_paypal" value="<?php echo $this->session->userdata('total');?>">
				<input type="hidden" name="return" id="return_paypal">
                <input type="hidden" name="notify_url" id="notify_url">
				<!-- <input type="image" src="https://www.paypalobjects.com/en_GB/TH/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal คือ วิธีชำระเงินออนไลน์ที่ปลอดภัยและง่ายยิ่งขึ้น!">
				<img alt="" border="0" src="https://www.paypalobjects.com/th_TH/i/scr/pixel.gif" width="1" height="1"> -->
			</form>
			<!-- Credit Card GBPrime -->
			<form id="payment_gbprime" action="https://api.gbprimepay.com/gbp/gateway/pay" method="post">
				<input type="hidden" name="token" value="AJVqeTGVyWOtxR2XHiw1hYxmq1Ntk+ikqhjudqyPk2uvefyK+htn7hcPO8nhfd8vrncP2V7fEl7t1gp95iJZ5hLolzoIv/retEmK1THhKkx2tdi0RAdDvDx0AKjHNXBtJBoMzsrTBSuevMRJ/zxQXgxn3JU=" />
				<input type="hidden" name="amount" id="amount_gbprime" value="<?php echo $this->session->userdata('total');?>" />
				<input type="hidden" name="responseUrl" id="responseUrl" value="" />
				<input type="hidden" name="detail" value="money" />
				<input type="hidden" name="referenceNo" id="referenceNo" value="<?php echo $this->model_frontend->genOrderNo();?>" />
				<input type="hidden" name="payType" value="F" />
				<input type="hidden" name="currencyCode" value="840" />
				<input type="hidden" name="backgroundUrl" id="backgroundUrl" value="" />
			</form>
		</div>
    </div>
    
    <?php require('inc_footer.php'); ?>
    
    <link rel="stylesheet" href="<?php echo base_frontend('waitMe-31.10.17/waitMe.min.css');?>">
	<script src="<?php echo base_frontend('waitMe-31.10.17/waitMe.min.js');?>"></script>
	
    <script>
        $(document).ready(function() {
            $(function() {
                $('.datepicker').datepicker({
                    dateFormat: 'dd/mm/yy',
                    showButtonPanel: false,
                    changeMonth: false,
                    changeYear: false,
                    /*showOn: "button",
	                 buttonImage: "images/calendar.gif",
	                 buttonImageOnly: true,
	                 minDate: '+1D',
	                 maxDate: '+3M',*/
                    inline: true
                });
            });
            $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['January', 'Februaly', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Sathurday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thr', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);
            
            shipping_method();
        });

    </script>
    <script>
        $('#switch').on("change", function() {
            if ($('#switch').is(':checked')) {
                $('.box01').slideDown();
            } else {
                $('.box01').slideUp();
            }
        });
        
        function deleteCart(rowid) {
			$.post('<?php echo site_url("frontend/path/ajaxDeleteCart");?>', { rowid: rowid }, function(data) {
				var data_split = data.split('!@#$%^&*()');

				$("#inc_cart_amount").html(data_split[0]);
				$("#menu_side_bar").html(data_split[1]);
				$("#inc_cart").html(data_split[2]);
				$("#cart_mobile").html(data_split[3]);
				$("#inc_cart_amount_mobile").html(data_split[0]);
				$("#cart_sub_total").html(data_split[4]);
				$("#cart_discount").html(data_split[5]);
				$("#cart_shipping").html(data_split[6]);
				
				var replace_total = data_split[7].replace(",", "");
				
				$("#cart_total").html(replace_total);
				$("#amount_paypal").val(replace_total);
				$("#amount_gbprime").val(replace_total);
				/*if(data_split[8] == 'true') {
						
				} else {
					alert('Incorrect Promotion Code');
					$("#influencer_code").val('');
				}*/
				
				$("#txt_express").html(data_split[9]);
				$("#txt_normal").html(data_split[10]);	
				
			});
		}

		function checkInfluencer() {
			if($("#influencer_code").val() != '') {
				$.post('<?php echo site_url("frontend/path/ajaxInfluencer");?>', { influencer_code: $("#influencer_code").val() }, function(data) {
					var data_split = data.split('!@#$%^&*()');

					$("#inc_cart_amount").html(data_split[0]);
					$("#menu_side_bar").html(data_split[1]);
					$("#inc_cart").html(data_split[2]);
					$("#cart_mobile").html(data_split[3]);
					$("#inc_cart_amount_mobile").html(data_split[0]);
					$("#cart_sub_total").html(data_split[4]);
					$("#cart_discount").html(data_split[5]);
					$("#cart_shipping").html(data_split[6]);
					var replace_total = data_split[7].replace(",", "");
				
					$("#cart_total").html(replace_total);
					$("#amount_paypal").val(replace_total);
					$("#amount_gbprime").val(replace_total);
					
					if(data_split[8] == 'true') {
						
					} else {
						alert('Incorrect Promotion Code');
						$("#influencer_code").val('');
					}
					
					$("#txt_express").html(data_split[9]);
					$("#txt_normal").html(data_split[10]);
					
				});
				
				return false;	
			}
		}
		
		function shipping_method() {
			//alert('abc');
			$.post('<?php echo site_url("frontend/path/ajaxShipping");?>', { order_detail_shipping_country: $("#order_detail_shipping_country").val() }, function(data) {
				//console.log(data);
				var data_split = data.split('!@#$%^&*()');

				$("#inc_cart_amount").html(data_split[0]);
				$("#menu_side_bar").html(data_split[1]);
				$("#inc_cart").html(data_split[2]);
				$("#cart_mobile").html(data_split[3]);
				$("#inc_cart_amount_mobile").html(data_split[0]);
				$("#cart_sub_total").html(data_split[4]);
				$("#cart_discount").html(data_split[5]);
				$("#cart_shipping").html(data_split[6]);
				var replace_total = data_split[7].replace(",", "");
				
				$("#cart_total").html(replace_total);
				$("#amount_paypal").val(replace_total);
				$("#amount_gbprime").val(replace_total);
				/*if(data_split[8] == 'true') {
					
				} else {
					alert('Incorrect Promotion Code');
					$("#influencer_code").val('');
				}*/
				
				$("#txt_express").html(data_split[9]);		
				$("#txt_normal").html(data_split[10]);				
			});
		}
		
		function change_shipping_method() {
			$("#shipping_express").attr('checked', false);
			$("#shipping_normal").attr('checked', false);
			//alert('abc');
			$.post('<?php echo site_url("frontend/path/ajaxShipping");?>', { order_detail_shipping_country: $("#order_detail_shipping_country").val() }, function(data) {
				//console.log(data);
				var data_split = data.split('!@#$%^&*()');

				$("#inc_cart_amount").html(data_split[0]);
				$("#menu_side_bar").html(data_split[1]);
				$("#inc_cart").html(data_split[2]);
				$("#cart_mobile").html(data_split[3]);
				$("#inc_cart_amount_mobile").html(data_split[0]);
				$("#cart_sub_total").html(data_split[4]);
				$("#cart_discount").html(data_split[5]);
				$("#cart_shipping").html(data_split[6]);
				var replace_total = data_split[7].replace(",", "");
				
				$("#cart_total").html(replace_total);
				$("#amount_paypal").val(replace_total);
				$("#amount_gbprime").val(replace_total);
				/*if(data_split[8] == 'true') {
					
				} else {
					alert('Incorrect Promotion Code');
					$("#influencer_code").val('');
				}*/
				
				$("#txt_express").html(data_split[9]);		
				$("#txt_normal").html(data_split[10]);				
			});
		}
		
		function checkShippingExpressOrNormal(expressOrNormal) {
			$.post('<?php echo site_url("frontend/path/ajaxShippingExpressOrNormal");?>', { order_detail_shipping_country: $("#order_detail_shipping_country").val(), type: expressOrNormal }, function(data) {
				var data_split = data.split('!@#$%^&*()');

				$("#inc_cart_amount").html(data_split[0]);
				$("#menu_side_bar").html(data_split[1]);
				$("#inc_cart").html(data_split[2]);
				$("#cart_mobile").html(data_split[3]);
				$("#inc_cart_amount_mobile").html(data_split[0]);
				$("#cart_sub_total").html(data_split[4]);
				$("#cart_discount").html(data_split[5]);
				$("#cart_shipping").html(data_split[6]);
				var replace_total = data_split[7].replace(",", "");
				
				$("#cart_total").html(replace_total);
				$("#amount_paypal").val(replace_total);
				$("#amount_gbprime").val(replace_total);
				/*if(data_split[8] == 'true') {
					
				} else {
					alert('Incorrect Promotion Code');
					$("#influencer_code").val('');
				}*/
				
				$("#txt_express").html(data_split[9]);		
				$("#txt_normal").html(data_split[10]);
			});
		}
		
		function checkout() {
			if($("#order_detail_shipping_first_name_last_name").val() == '') {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Shipping First Name - Last Name", "من فضلك أدخل الاسم الأول - الاسم الأخير الذي تريد إرسال الشحنة إليه");?>');
				
				$("#order_detail_shipping_first_name_last_name").focus();
			} else if($("#order_detail_shipping_phone_number").val() == '') {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Shipping Phone Number", "من فضلك أدخل رقم الجوال الذي سنتواصل معه عند وصول الشحنة");?>');
				
				$("#order_detail_shipping_phone_number").focus();
			} else if($("#order_detail_shipping_address").val() == '') {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Shipping Address", "من فضلك أدخل عنوان وصول الشحنة");?>');
				
				$("#order_detail_shipping_address").focus();
			} else if($("#order_detail_shipping_district").val() == '') {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Shipping State/District", "من فضلك أدخل ولاية/مقاطعة وصول الشحنة");?>');
				
				$("#order_detail_shipping_district").focus();
			} else if($("#order_detail_shipping_province").val() == '') {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Shipping City/Province", "من فضلك أدخل مدينة/منطقة وصول الشحنة");?>');
				
				$("#order_detail_shipping_province").focus();
			} else if($("#order_detail_shipping_postal_code").val() == '') {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Shipping Postal Code", "من فضلك أدخل الرمز البريدي الخاص بعنوان وصول الشحنة");?>');
				
				$("#order_detail_shipping_postal_code").focus();
			} else if($("#order_detail_shipping_country").val() == '') {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Select Shipping Country", "من فضلك اختر دولة وصول الشحنة");?>');				
				$("#order_detail_shipping_country").focus();
			} else if($("#order_detail_shipping_email").val() == '') {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Shipping Email", "من فضلك أدخل البريد الإلكتروني الخاص بعملية الشحن");?>');
				
				$("#order_detail_shipping_email").focus();
			} else if(!isEmail($("#order_detail_shipping_email").val())) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Incorrect Shipping Email", "البريد الإلكتروني الخاص بعملية الشحن غير صحيح");?>');
				
				$("#order_detail_shipping_email").val('');
				
				$("#order_detail_shipping_email").focus();
			} else if($("#order_detail_billing_first_name_last_name").val() == '' && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Billing First Name - Last Name", "من فضلك أدخل الاسم الأول - الاسم الأخير الذي تريد إرسال الفاتورة إليه");?>');
				
				$("#order_detail_billing_first_name_last_name").focus();
			} else if($("#order_detail_billing_phone_number").val() == '' && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Billing Phone Number", "من فضلك أدخل رقم الجوال الخاص بالفاتورة");?>');
				
				$("#order_detail_billing_phone_number").focus();
			} else if($("#order_detail_billing_address").val() == '' && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Billing Address", "من فضلك أدخل عنوان وصول الفاتورة");?>');
				
				$("#order_detail_billing_address").focus();
			} else if($("#order_detail_billing_district").val() == '' && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Billing State/District", "من فضلك أدخل ولاية/مقاطعة وصول الفاتورة");?>');
				
				$("#order_detail_billing_district").focus();
			} else if($("#order_detail_billing_province").val() == '' && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Billing City/Province", "من فضلك أدخل مدينة/منطقة وصول الفاتورة");?>');
				
				$("#order_detail_billing_province").focus();
			} else if($("#order_detail_billing_postal_code").val() == '' && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Billing Postal Code", "من فضلك أدخل الرمز البريدي الخاص بعنوان وصول الفاتورة");?>');
				
				$("#order_detail_billing_postal_code").focus();
			} else if($("#order_detail_billing_country").val() == '' && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Select Billing Country", "من فضلك اختر دولة وصول الفاتورة");?>');
				alert('');
				
				$("#order_detail_billing_country").focus();
			} else if($("#order_detail_billing_email").val() == '' && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Billing Email", "من فضلك أدخل البريد الإلكتروني الخاص بالفاتورة");?>');
				
				$("#order_detail_billing_email").focus();
			} else if(!isEmail($("#order_detail_billing_email").val()) && $("#switch").is(":checked") == true) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Incorrect Billing Email", "البريد الإلكتروني الخاص بالفاتورة غير صحيح");?>');
				
				$("#order_detail_billing_email").val('');
				
				$("#order_detail_billing_email").focus();
			//} else if($("#credit_card").is(":checked") == false && $("#paypal").is(":checked") == false && $("#bank_transfer").is(":checked") == false) {
			} else if($("#credit_card").is(":checked") == false && $("#paypal").is(":checked") == false) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Enter Payment Method", "من فضلك أدخل طريقة الدفع");?>');
				
				$("#credit_card").focus();
			} else if($("#shipping_express").is(":checked") == false && $("#shipping_normal").is(":checked") == false) {
				alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Select Shipping Method", "من فضلك اختر طريقة الشحن");?>');
				
				$("#shipping_express").focus();
			} else {
				$("#payment_all").hide();

				waitMelasecta();
				
				if($("#credit_card").is(":checked") == true) {
					payment_method = 'Credit Card';
				} else if($("#paypal").is(":checked") == true) {
					payment_method = 'Paypal';
				}/* else if($("#bank_transfer").is(":checked") == true) {
					payment_method = 'Bank Transfer';
				}*/
				
				if($("#shipping_express").is(":checked") == true) {
					shipping_method = 'Express';
				} else if($("#shipping_normal").is(":checked") == true) {
					shipping_method = 'Delivery';
				}
				
				if($("#switch").is(":checked") == true) {
					same = 'true';
				} else if($("#switch").is(":checked") == false) {
					same = 'false';
				}
				
				$.post('<?php echo site_url("frontend/path/ajaxCheckout");?>', { order_detail_shipping_first_name_last_name: $("#order_detail_shipping_first_name_last_name").val(), order_detail_shipping_phone_number: $("#order_detail_shipping_phone_number").val(), order_detail_shipping_address: $("#order_detail_shipping_address").val(), order_detail_shipping_district: $("#order_detail_shipping_district").val(), order_detail_shipping_province: $("#order_detail_shipping_province").val(), order_detail_shipping_postal_code: $("#order_detail_shipping_postal_code").val(), order_detail_shipping_country: $("#order_detail_shipping_country").val(), order_detail_shipping_email: $("#order_detail_shipping_email").val(), order_detail_billing_first_name_last_name: $("#order_detail_billing_first_name_last_name").val(), order_detail_billing_phone_number: $("#order_detail_billing_phone_number").val(), order_detail_billing_address: $("#order_detail_billing_address").val(), order_detail_billing_district: $("#order_detail_billing_district").val(), order_detail_billing_province: $("#order_detail_billing_province").val(), order_detail_billing_postal_code: $("#order_detail_billing_postal_code").val(), order_detail_billing_country: $("#order_detail_billing_country").val(), order_detail_billing_email: $("#order_detail_billing_email").val(), order_detail_note: $("#order_detail_note").val(), same: same, order_detail_payment_method: payment_method, order_detail_shipping_method: shipping_method }, function(data) {				
					//$('#elem').waitMe({})
					
					if($("#credit_card").is(":checked") == true) {
						$("#responseUrl").val("<?php echo site_url('frontend/path/payment_success/credit_card');?>/" + data);
						
						$("#backgroundUrl").val("<?php echo site_url('frontend/path/payment_success/credit_card');?>/" + data);
						
						$("#payment_gbprime").submit();
					} else if($("#paypal").is(":checked") == true) {
						$("#return_paypal").val("<?php echo site_url('frontend/path/payment_success/paypal/');?>/" + data + '/return');
						$("#notify_url").val("<?php echo site_url('frontend/path/payment_success/paypal');?>/" + data + '/notify');
                        //console.log(data);
						$("#payment_paypal").submit();
					}/* else if($("#bank_transfer").is(":checked") == true) {
						window.location.href = '<?php echo site_url("frontend/path/cart_summary");?>/' + data;
					}*/
				});	
			}
		}
		
		function checkAddressBilling() {
			if($("#switch").is(":checked") == true) {
				// ที่อยุ่ Shipping Billing เหมือนกัน
				/*$("#order_detail_billing_first_name_last_name").val($("#order_detail_shipping_first_name_last_name").val());
				$("#order_detail_billing_phone_number").val($("#order_detail_shipping_phone_number").val());
				$("#order_detail_billing_address").val($("#order_detail_shipping_address").val());
				$("#order_detail_billing_district").val($("#order_detail_shipping_district").val());
				$("#order_detail_billing_province").val($("#order_detail_shipping_province").val());
				$("#order_detail_billing_postal_code").val($("#order_detail_shipping_postal_code").val());
				$("#order_detail_billing_country").val($("#order_detail_shipping_country").val());
				$("#order_detail_billing_email").val($("#order_detail_shipping_email").val());*/
			}
		}
		
		function isEmail(email) {
  			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  			return regex.test(email);
		}
	
		function waitMelasecta() {
			$('.loading_lasecta').waitMe({
				effect : 'bounce',
				text : 'loading',
				bg : '#ddd',
				color : '#000',
				maxSize : '',
				waitTime : -1,
				textPos : 'vertical',
				fontSize : '',
				source : '',
				onClose : function() {}
			});	
		}
    </script>
    
</body>

</html>
