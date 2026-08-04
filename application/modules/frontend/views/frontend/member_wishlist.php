<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .sidemember_menu ul li:nth-child(2) a {
        font-family: 'brandon_grotesquebold';
    }
    @media (max-width:991px){
        .box_bestseller{
            margin: 20px 0px;
            padding: 10px;
        }
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
                        <a href="<?php echo site_frontend('member_mobile.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Back', 'عودة');?></a>
                    </div>
                    <div class="title_section_cart">

                        <div class="row">
                            <div class="col-lg-8">
                                <h5><?php echo get2Lang($this->session->userdata('lang'), 'Wishlist', 'قائمة الأمنيات');?></h5>
                            </div>
                            <div class="col-lg-4 d-none">
                                <div class="backlink">
                                    <a href="<?php echo site_frontend('member_account.php');?>">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bgwhite_shadow2">
                        <div class="row">
<?php
if(!empty($wishlistCtrl)) {
	foreach($wishlistCtrl as $r) {
		
?>
                            <div class="col-6 col-lg-4">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>">
                                    <div class="box_bestseller product">
                                        <div class="picbest">
                                            <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid">
                                            <div class="remove_wistlist"><a href="javascript:removeWishlist('<?php echo $r->wishlist_id;?>')" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Remove from wishlist', 'منيات قائمة من ح  ');?>"><i class="fas fa-times-circle"></i></a></div>
                                        </div>
                                        <div class="product_details_box">
                                            <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>">
                                                <h4><?php echo $r->product_name;?></h4>
                                                <h3>$<?php echo number_format($r->product_price, 2, '.', ',');?></h3>
                                            </a>

                                        </div>
                                    </div>
                                </a>
                            </div>
<?php

	}
}
/*
?>
                            <div class="col-6 col-lg-4">
                                <a href="#">
                                    <div class="box_bestseller product">
                                        <div class="picbest">
                                            <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                            <div class="remove_wistlist"><a href="#" class="tooltip-bottom" data-tooltip="Remove from wishlist"><i class="fas fa-times-circle"></i></a></div>
                                        </div>
                                        <div class="product_details_box">
                                            <a href="">
                                                <h4>Buate Hair conditioner</h4>
                                                <h3>$28.00</h3>
                                            </a>

                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="col-6 col-lg-4">
                                <a href="#">
                                    <div class="box_bestseller product">
                                        <div class="picbest">
                                            <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                            <div class="remove_wistlist"><a href="#" class="tooltip-bottom" data-tooltip="Remove from wishlist"><i class="fas fa-times-circle"></i></a></div>
                                        </div>
                                        <div class="product_details_box">
                                            <a href="">
                                                <h4>Buate Hair conditioner</h4>
                                                <h3>$28.00</h3>
                                            </a>

                                        </div>
                                    </div>
                                </a>

                            </div>
*/
?>
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
        
        function removeWishlist(wishlist_id) {
			//alert(wishlist_id);
			$.post('<?php echo site_url("frontend/path/ajaxRemoveWishlist");?>', { wishlist_id: wishlist_id }, function(data) {
				window.location.href = '<?php echo site_url("frontend/path/member_wishlist");?>';	
			});
		}

    </script>
</body>

</html>
