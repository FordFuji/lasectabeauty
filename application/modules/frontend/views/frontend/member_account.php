<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .sidemember_menu ul li:nth-child(1) a {
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
                        <a href="<?php echo site_frontend('member_mobile.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Back', 'عودة');?></a>
                    </div>
                    <div class="title_section_cart">
                        <h5><?php echo get2Lang($this->session->userdata('lang'), 'My Account Details', 'تفاصيل الحساب');?></h5>
                    </div>
                    <div class="bgwhite_shadow2">
                        <div class="border_black">

                            <b><?php if(!empty($row)) echo $row->member_first_name.' '.$row->member_last_name;?></b> <br>
                            <?php if(!empty($row)) echo $row->member_phone_number;?><br>
                            <?php if(!empty($row)) echo $row->member_email;?>

                            <br><br>
                            <a href="<?php echo site_frontend('member_account_info.php');?>" class="removeitem"><?php echo get2Lang($this->session->userdata('lang'), 'Edit', 'تعديل');?></a>
                            <a href="<?php echo site_frontend('member_password.php');?>" class="removeitem"><?php echo get2Lang($this->session->userdata('lang'), 'Change Password', 'تغيير كلمة السر');?></a>

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
