<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .sidemember_menu ul li:nth-child(3) a {
        font-family: 'brandon_grotesquebold';
    }

    /*-------SEARCH BAR --------*/

    .search-container-2 {
        width: 100%;
        display: block;
        margin-bottom: 10px;
    }

    input#search-bar-2 {
        width: 100%;
        height: 45px;
        padding: 0 40px;
        font-size: 1em;
        outline: none;
        border: 1px solid #252525;
        background-color: transparent;
    }

    input#search-bar-2:focus {

        -webkit-transition: 0.35s ease;
        transition: 0.35s ease;
        color: black;
    }

    input#search-bar-2:focus::-webkit-input-placeholder {
        -webkit-transition: opacity 0.45s ease;
        transition: opacity 0.45s ease;
        opacity: 0;
    }

    input#search-bar-2:focus::-moz-placeholder {
        -webkit-transition: opacity 0.45s ease;
        transition: opacity 0.45s ease;
        opacity: 0;
    }

    input#search-bar-2:focus:-ms-placeholder {
        -webkit-transition: opacity 0.45s ease;
        transition: opacity 0.45s ease;
        opacity: 0;
    }

    .search-icon2 {
        position: relative;
        float: left;
        width: 22px;
        height: 18px;
        top: -32px;
        left:15px;
    }

    .search-container-2 a {
        color: black;
        font-size: 15px;
        color: #464646;
    }

    @media (max-width:991px){
        .btn-outline-secondary,
        .btn-outline-dark,
        .btn-info,
        .btn-outline-primary{
            width: 100%;
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
                                <input type="button" class="upload" value="<?php echo get2Lang($this->session->userdata('lang'), 'Edit', 'Edit(Ar)');?>" onClick="document.getElementById('to-hide').click()">
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
                        <h5><?php echo get2Lang($this->session->userdata('lang'), 'Your Shopping history', 'سجل مشترياتك');?></h5>
                    </div>
                    <div class="bgwhite_shadow2">
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="searchbox2">
                                    <div class="search-container-2">
                                        <input type="text" id="search-bar-2" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Search by order No.', 'بحث باستخدام رقم الطلب');?>"> <a href="#"><img src="<?php echo base_frontend('images/search_black.svg');?>" class="smsize search-icon2"></a> </div>
                                </div>
                            </div>
                        </div>
<?php
if($this->session->userdata('lang') == 'en') {
?>
                        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <table class="table shoppingcart-page">
                                <thead>
                                    <tr>
                                        <th scope="col"  style="min-width:50px;"><?php echo get2Lang($this->session->userdata('lang'), 'Order', 'طلب');?></th>
                                        <th scope="col" style="min-width:80px;"><?php echo get2Lang($this->session->userdata('lang'), 'Date', 'التاريخ');?></th>
                                        <th scope="col" style="min-width:50px;"><?php echo get2Lang($this->session->userdata('lang'), 'Items', 'العناصر');?></th>
                                        <th scope="col"><?php echo get2Lang($this->session->userdata('lang'), 'Total', 'الإجمالي');?></th>
                                        <th scope="col" ><?php echo get2Lang($this->session->userdata('lang'), 'Detail', 'التفاصيل');?></th>
                                        <th scope="col"><?php echo get2Lang($this->session->userdata('lang'), 'Status', 'الحالة');?></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
<?php
    if(!empty($orderDetail)) {
        foreach($orderDetail as $r) {
            $this->db->where('order_detail_id', $r->order_detail_id);
            $query = $this->db->get('ci_order');
            
            $rows = $query->result();
            
            $count = count($rows);
?>
                                    <tr>
                                        <td>
                                            <b><?php echo $r->order_no;?></b>
                                        </td>
                                        <td><?php echo $r->order_detail_datetime_create;?></td>
                                        <td><?php echo $count;?></td>
                                        <td>
                                          $<?php echo number_format($r->order_detail_total, 2, '.', ',');?>
                                        </td>
                                        <td class="text-center"> <a href="<?php echo site_url('frontend/path/member_order_history/'.$r->order_detail_id);?>" class="btn btn-info"><?php echo get2Lang($this->session->userdata('lang'), 'View details', 'عرض التفاصيل');?></a></td>
<?php
            if($r->order_detail_status == 'Waiting') {
?>
                                        <td><a href="#" class="btn btn-outline-primary"><?php echo get2Lang($this->session->userdata('lang'), 'Waiting', 'الإنتظار');?></a></td>
<?php
            } elseif($r->order_detail_status == 'Cancel') {
?>                                        
                                        <td><a href="#" class="btn btn-outline-dark"><?php echo get2Lang($this->session->userdata('lang'), 'Cancel', 'إلغاء');?></a></td>
<?php
            } elseif($r->order_detail_status == 'Success') {
?>
                                        <td><a href="#" class="btn btn-outline-secondary"><?php echo get2Lang($this->session->userdata('lang'), 'Success', 'نجاح');?></a></td>
<?php
            }
?>
                                    </tr>
<?php

        }
    }
?>
                               </tbody>
                            </table>

                        </div>
                        <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
<?php
    if(!empty($orderDetail)) {
        foreach($orderDetail as $r) {
            $this->db->where('order_detail_id', $r->order_detail_id);
            $query = $this->db->get('ci_order');
            
            $rows = $query->result();
            
            $count = count($rows);
?>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="box_order_mobile border_black">
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Order', 'طلب');?>
                                            </div>
                                            <div class="col-6 text-right">
                                                <?php echo $r->order_no;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Date', 'التاريخ');?>
                                            </div>
                                            <div class="col-6 text-right">
                                                <?php echo $r->order_detail_datetime_create;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Items', 'العناصر');?>
                                            </div>
                                            <div class="col-6 text-right">
                                                <?php echo $count;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Total', 'الإجمالي');?>
                                            </div>
                                            <div class="col-6 text-right">
                                                <?php echo number_format($r->order_detail_total, 2, '.', ',');?>
                                            </div>
                                        </div>
                                      
                                        <div class="row mt-2">
                                            <div class="col">
                                                <a href="<?php echo site_url('frontend/path/member_order_history/'.$r->order_detail_id);?>" class="btn btn-info"><?php echo get2Lang($this->session->userdata('lang'), 'View details', 'عرض التفاصيل');?></a>

                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <a href="#" class="btn btn-outline-dark"><?php echo get2Lang($this->session->userdata('lang'), 'Cancel', 'إلغاء');?></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
        }
    }
?>

                        </div>
<?php
} elseif($this->session->userdata('lang') == 'ar') {
?>
                        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <table class="table shoppingcart-page">
                                <thead>
                                    <tr>
                                        <th scope="col"><?php echo get2Lang($this->session->userdata('lang'), 'Status', 'الحالة');?></th>
                                        <th scope="col" ><?php echo get2Lang($this->session->userdata('lang'), 'Detail', 'التفاصيل');?></th>
                                        <th scope="col"><?php echo get2Lang($this->session->userdata('lang'), 'Total', 'الإجمالي');?></th>
                                        <th scope="col" style="min-width:50px;"><?php echo get2Lang($this->session->userdata('lang'), 'Items', 'العناصر');?></th>
                                        <th scope="col" style="min-width:80px;"><?php echo get2Lang($this->session->userdata('lang'), 'Date', 'التاريخ');?></th>
                                        <th scope="col"  style="min-width:50px;"><?php echo get2Lang($this->session->userdata('lang'), 'Order', 'طلب');?></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
<?php
    if(!empty($orderDetail)) {
        foreach($orderDetail as $r) {
            $this->db->where('order_detail_id', $r->order_detail_id);
            $query = $this->db->get('ci_order');
            
            $rows = $query->result();
            
            $count = count($rows);
?>
                                    <tr>
<?php
            if($r->order_detail_status == 'Waiting') {
?>
                                        <td><a href="#" class="btn btn-outline-primary"><?php echo get2Lang($this->session->userdata('lang'), 'Waiting', 'الإنتظار');?></a></td>
<?php
            } elseif($r->order_detail_status == 'Cancel') {
?>                                        
                                        <td><a href="#" class="btn btn-outline-dark"><?php echo get2Lang($this->session->userdata('lang'), 'Cancel', 'إلغاء');?></a></td>
<?php
            } elseif($r->order_detail_status == 'Success') {
?>
                                        <td><a href="#" class="btn btn-outline-secondary"><?php echo get2Lang($this->session->userdata('lang'), 'Success', 'نجاح');?></a></td>
<?php
            }
?>
                                        
                                        <td class="text-center"> <a href="<?php echo site_url('frontend/path/member_order_history/'.$r->order_detail_id);?>" class="btn btn-info"><?php echo get2Lang($this->session->userdata('lang'), 'View details', 'عرض التفاصيل');?></a></td>
                                        <td>
                                          $<?php echo number_format($r->order_detail_total, 2, '.', ',');?>
                                        </td>
                                        <td><?php echo $count;?></td>
                                        <td><?php echo $r->order_detail_datetime_create;?></td>
                                        <td>
                                            <b><?php echo $r->order_no;?></b>
                                        </td>
                                    </tr>
<?php

        }
    }
?>
                               </tbody>
                            </table>

                        </div>
                        <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
<?php
    if(!empty($orderDetail)) {
        foreach($orderDetail as $r) {
            $this->db->where('order_detail_id', $r->order_detail_id);
            $query = $this->db->get('ci_order');
            
            $rows = $query->result();
            
            $count = count($rows);
?>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="box_order_mobile border_black">
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Order', 'طلب');?>
                                            </div>
                                            <div class="col-6 text-right">
                                                <?php echo $r->order_no;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Date', 'التاريخ');?>
                                            </div>
                                            <div class="col-6 text-right">
                                                <?php echo $r->order_detail_datetime_create;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Items', 'العناصر');?>
                                            </div>
                                            <div class="col-6 text-right">
                                                <?php echo $count;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Total', 'الإجمالي');?>
                                            </div>
                                            <div class="col-6 text-right">
                                                <?php echo number_format($r->order_detail_total, 2, '.', ',');?>
                                            </div>
                                        </div>
                                      
                                        <div class="row mt-2">
                                            <div class="col">
                                                <a href="<?php echo site_url('frontend/path/member_order_history/'.$r->order_detail_id);?>" class="btn btn-info"><?php echo get2Lang($this->session->userdata('lang'), 'View details', 'عرض التفاصيل');?></a>

                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <a href="#" class="btn btn-outline-dark"><?php echo get2Lang($this->session->userdata('lang'), 'Cancel', 'إلغاء');?></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
        }
    }
?>

                        </div>
<?php
}
?>
                        

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
