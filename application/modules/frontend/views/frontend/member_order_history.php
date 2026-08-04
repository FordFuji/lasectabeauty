<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .sidemember_menu ul li:nth-child(3) a {
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
    <?php require('inc_topmenu.php');?>

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
                        <a href="<?php echo site_frontend('member_mobile.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Back', 'معودة');?></a>
                    </div>
                    <div class="title_section_cart">

                        <div class="row">
                            <div class="col-lg-8">
                                <h5><?php echo get2Lang($this->session->userdata('lang'), 'Your order details', 'تفاصيل طلبك');?></h5>
                            </div>
                            <div class="col-lg-4">
                                <div class="backlink">
                                    <a href="<?php echo site_frontend('member_account.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Back', 'معودة');?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bgwhite_shadow2">
                        <div class="row mt-3">
                            <div class="col">
                                <div class="title_gray">
                                    <h4><?php echo get2Lang($this->session->userdata('lang'), 'Order information', 'معلومات الطلب');?> </h4>
                                </div>
                                <div class="content_order">
                                    <div class="row">
                                        <div class="col"> <?php echo get2Lang($this->session->userdata('lang'), 'Order No.', 'رقم الطلب');?> </div>
                                        <div class="col text-right"> <?php if(!empty($orderDetail)) echo $orderDetail->order_no;?> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col"> <?php echo get2Lang($this->session->userdata('lang'), 'Order Date', 'تاريخ الطلب');?> </div>
                                        <div class="col text-right"> <?php if(!empty($orderDetail)) echo $orderDetail->order_detail_datetime_create;?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col"> <?php echo get2Lang($this->session->userdata('lang'), 'Status', 'الحالة');?></div>
                                        <div class="col text-right"> <b><?php if(!empty($orderDetail)) echo $orderDetail->order_detail_status;?></b> </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <div class="title_gray">
                                    <h4><?php echo get2Lang($this->session->userdata('lang'), 'Shipping Address', 'عنوان الشحن');?> </h4>
                                </div>
                                <div class="content_order">
                                    <!-- <b>Orange Technoly Solution</b> <br> -->
                                    <?php if(!empty($orderDetail)) echo $orderDetail->order_detail_shipping_first_name_last_name.'<br>'.$orderDetail->order_detail_shipping_address.'<br>'.$orderDetail->order_detail_shipping_district.' '.$orderDetail->order_detail_shipping_province.' '.$orderDetail->order_detail_shipping_country.' '.$orderDetail->order_detail_shipping_postal_code;?>
                                    <br><br>
                                </div>


                            </div>

                        </div>
                        <br>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="title_gray">
                                    <h4><?php echo get2Lang($this->session->userdata('lang'), 'Billing Address', 'عنوان الشحن');?> </h4>
                                </div>
                                <div class="content_order">
                                    <?php if(!empty($orderDetail)) echo $orderDetail->order_detail_billing_first_name_last_name.'<br>'.$orderDetail->order_detail_billing_address.'<br>'.$orderDetail->order_detail_billing_district.' '.$orderDetail->order_detail_billing_province.' '.$orderDetail->order_detail_billing_country.' '.$orderDetail->order_detail_billing_postal_code;?>
                                    <br><br>
                                </div>


                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <div class="title_gray">
                                    <h4><?php echo get2Lang($this->session->userdata('lang'), 'Items in my order', 'العناصر في طلبي');?> </h4>
                                </div>

                                <br>

                                <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                    <table class="table shoppingcart-page2">

                                        <tbody>
<?php
if(!empty($order)) {
	foreach($order as $r) {
		
?>
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-2 shoppic"> <img src="<?php echo base_url('uploads/product/'.$r->order_image);?>" class="img-fluid"> </div>
                                                        <div class="col-lg-10">
                                                            <div class="new_item">
                                                                <h5><?php echo $r->order_category;?></h5>
                                                                <h2 class="mt-1"><?php echo $r->order_name;?></h2>
                                                                <li class="smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Color', 'اللون');?> : <?php echo $r->order_color;?></li>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right">$<?php echo number_format($r->order_price, 2, '.', ',');?>

                                                </td>



                                            </tr>
<?php

	}
}
/*
?>                        
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-2 shoppic"> <img src="<?php echo base_frontend('images/product_test3.png');?>" class="img-fluid"> </div>
                                                        <div class="col-lg-10">
                                                            <div class="new_item">
                                                                <h5>Make up</h5>
                                                                <h2 class="mt-1">Semi lip matte</h2>
                                                                <li class="smtxt">Color : Maroon</li>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    $2,690

                                                </td>



                                            </tr>
*/
?>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none mb-3">
<?php
if(!empty($order)) {
	foreach($order as $r) {
		
?>
                                    <div class="row cartmobile-detail">
                                        <div class="col-4">
                                            <div class="pichisres"> <img src="<?php echo base_url('uploads/product/'.$r->order_image);?>" class="img-fluid"> </div>
                                        </div>
                                        <div class="col-4" style="padding:0px;">
                                            <div class="new_item">
                                                <h5><?php echo $r->order_category;?></h5>
                                                <h3 class="mt-1"><?php echo $r->order_name;?></h3>

                                                <li class="smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Color', 'اللون');?> : <span class="lightgray"><?php echo $r->order_name;?></span></li>
                                                <li class="smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Qty', 'الكمية');?> : <span class="lightgray"><?php echo $r->order_qty;?></span></li>
                                            </div>


                                        </div>
                                        <div class="col-4 text-right">
                                            <b>
                                                <span class="actual-price"><?php echo number_format($r->order_price, 2, '.', ',');?></span>
                                            </b>
                                        </div>
                                    </div>
                                    <hr>
<?php
	}
}
/*
?>
                                    <div class="row cartmobile-detail">
                                        <div class="col-4">
                                            <div class="pichisres"> <img src="<?php echo base_frontend('images/product_test3.png');?>" class="img-fluid"> </div>
                                        </div>
                                        <div class="col-4" style="padding:0px;">
                                            <div class="new_item">
                                                <h5>Make up</h5>
                                                <h3 class="mt-1">Semi Lipstick</h3>

                                                <li class="smtxt">Color : <span class="lightgray">Light Pink</span></li>
                                                <li class="smtxt">Qty : <span class="lightgray">1</span></li>
                                            </div>


                                        </div>
                                        <div class="col-4 text-right">
                                            <b>
                                                <span class="actual-price">3,500</span>
                                               

                                            </b>
                                        </div>
                                    </div>
                                    <hr>
*/
?>
                                </div>




                                <div class="row">
                                    <div class="col"> <?php echo get2Lang($this->session->userdata('lang'), 'Subtotal', 'الإجمالي');?> </div>
                                    <div class="col text-right"> <?php if(!empty($orderDetail)) echo number_format($orderDetail->order_detail_sub_total, 2, '.', ',');?> </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"> <?php echo get2Lang($this->session->userdata('lang'), 'Discount', 'Discount(Ar)');?> </div>
                                    <div class="col text-right"> <?php if(!empty($orderDetail)) echo number_format($orderDetail->order_detail_discount, 2, '.', ',');?></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"> <?php echo get2Lang($this->session->userdata('lang'), 'Shipping', 'الشحن');?> </div>
                                    <div class="col text-right"> <?php if(!empty($orderDetail)) echo number_format($orderDetail->order_detail_shipping, 2, '.', ',');?></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col"> <?php echo get2Lang($this->session->userdata('lang'), 'Total', 'الإجمالي');?> </div>
                                    <div class="col text-right"> <b><?php if(!empty($orderDetail)) echo number_format($orderDetail->order_detail_total, 2, '.', ',');?></b> </div>
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
