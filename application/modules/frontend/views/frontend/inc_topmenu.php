<style>
    .search_showproductbar {
        border-top: 1px solid #ddd;
    }

    .search_showproductbar .item_listproducts {
        margin: 30px 30px 0;
    }

    .search_seemoreproduct {
        text-align: center;
    }

    .search_seemoreproduct a {
        display: inline-block;
        text-decoration: underline;
        color: #000;
        font-size: 15px;
        margin-bottom: 30px;
    }

    .close_search {
        position: absolute;
        right: 20px;
        top: 0;
        width: 30px;
        height: 30px;
        cursor: pointer;
        padding: 14px;
    }

    .close_search img {
        display: block;
        width: 100%;
        height: auto;
    }

    .wrap_search_form {
        z-index: 9996;
        position: relative;
    }

    .wrap_search_form input {
        height: 50px;
        width: 100%;
        padding: 8px 15px;
        font-size: 1rem;
        vertical-align: top;
        border: 0;
        border-radius: 0;
        background-color: #FFF;
        font-size: 1rem;
        outline: 0;
        padding-right: 60px;

    }


    .searchbox {
        position: fixed;
        top: 13%;
        left: 20px;
        right: 20px;
        padding: 0;
        background-color: #FFF;
        display: none;
        z-index: 9998;
        margin-top: 5px;
        border: 1px solid #ddd;
    }

    .main_menu {
        margin: 12% 0%;
        text-align: center;
    }

    .main_menu li {
        display: inline-block;
        padding: 0px 20px;
    }

    .main_menu a {
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .right_menu {
        margin: 20% 0%;
        float: right;
        transition: 0.45s all ease;
    }

    .right_menu li {
        display: inline-block;
        padding: 0px 10px;
    }



    .main_logo {
        text-align: center;
        margin: 20px 0px;
    }

    #nav {
        margin-top: 80px;
        text-align: center;
    }


    .main_logo a>img {
        width: 50%;
        transition: 0.35s all ease;
    }

    .wrap_menu {
        background-color: black;
        position: fixed;
       z-index: 98;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        width: 100%;
    }

    .wrap_menu.sticky {
        z-index: 98;
        background-color: black;
        right: 0;
        top: 0;
        left: 0;
/*        padding: 0 1%;*/
        height: 100px;
    }

    .wrap_menu.sticky #nav {
        margin-top: 40px;
    }

    .wrap_menu.sticky .right_menu {
        margin-top: 30px;
    }

    .wrap_menu.sticky .main_logo {
        margin-top: 5px;
    }

    .wrap_menu.sticky .main_logo a>img {
        width: 23%;
    }

    .wrap_menu.sticky .search-container {
        margin-top: 15px;
    }



    .wrap_menu.sticky .main_menu li {
        font-size: 1em;
    }

    .wrap_menu.sticky .langchange{
        top: 0px;
    }


    .sublist-title {
        color: #fff;
    }

    .dropdown-container {
        position: absolute;
        top: 100%;
        height: auto;
        background-color: #000;
        left: 0;
        right: 0;
        z-index: 9;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        border-top: 1px solid #eeeeee;
        box-shadow: 0 5px 14px -1px rgba(55, 65, 67, .3);
        padding: 0px 40px;
        overflow: hidden;
    }

    #nav ul li:hover div.dropdown-container {
        opacity: 1;
        visibility: visible;
    }




    .modal.right .modal-dialog {
        position: fixed;
        margin: auto;
        width: 420px;
        height: 100%;
        -webkit-transform: translate3d(0%, 0, 0);
        -ms-transform: translate3d(0%, 0, 0);
        -o-transform: translate3d(0%, 0, 0);
        transform: translate3d(0%, 0, 0);


    }

    .modal.right .modal-content {
        height: 100%;
        overflow-y: auto;
    }

    .modal.right .modal-body {
        padding: 15px 15px 80px;
    }

    .modal-backdrop {
        z-index: 0;
    }

    .modal-header .close {
        margin: -14px;
    }

    .close {
        text-shadow: none;
        opacity: 1;
    }

    .close:hover,
    .close:focus,
    button.close {
        color: white;
    }

    /*Right*/

    .modal.right.fade .modal-dialog {
        right: -320px;
        -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
        -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
        -o-transition: opacity 0.3s linear, right 0.3s ease-out;
        transition: opacity 0.3s linear, right 0.3s ease-out;

    }

    .modal.right.fade.show .modal-dialog {
        right: 0;
    }

    /* ----- MODAL STYLE ----- */
    .modal-content {
        border-radius: 0;
        border: none;
    }

    .modal-header {
        border-bottom-color: #080808;
        background-color: black;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0px;
    }

    .modal-title {
        text-transform: uppercase;
        font-family: 'AvenirHeavy';
        letter-spacing: 1px;
        font-size: 1em;
        padding-top: 7px;
    }

    .bot_bag {
        position: fixed;
        bottom: 10px;
        width: 94%;
        border-top: 1px solid #eeeeee;
        padding-top: 15px;
    }

    .cart_mobile {
        margin-top: 25px;
        text-align: right;
        1 color: white;
        cursor: pointer;
    }

    .btn_selectlang button {
        background: none;
        font-size: 1em;
        border: 0;
        color: white;
        cursor: pointer;
    }

    .btn_selectlang .dropdown-item {
        font-size: 0.8em;
        color: white;
        padding: 0 10px;
        vertical-align: top;
    }

    .btn_selectlang .dropdown-item:hover {
        background-color: #000;
        color: white;
        opacity: 0.9;
    }

    .btn_selectlang .dropdown-menu {
        background-color: rgba(000, 000, 000, 0.8);
        width: auto;
        min-width: auto;
    }

    .join_us {
        display: none;
    }
    .searchbtn a img{
        width: 20px;
    }
    .lang_change{
        position: absolute;
        right: 0;
        top: 30px;
    }

    .lang_change li{ 
        list-style: none;
        display: inline-block;
    }
    
    .lang_mobile{
        margin-left: 20px;
        margin-top: 20px;
    }
    
      .langchange{
        position: absolute;
         right: 30px;
        top: 30px;
          transition: 0.45s all ease;
        }
        .langchange li {
        display: inline-block;
        list-style: none;
    }



.langchange li a {
    color: white;
    font-size: 1em;
    vertical-align: middle;
}

.selectlang {
    color: #282828;
}

.selectlang a {
    display: block;
    color: #282828;
    font-size: 0.8em;
    line-height: 30px;
}

.selectlang h2 {
    font-size: 1.3em;
    border-bottom: 1px solid #eeeeee;
    padding-bottom: 10px;
}

.selectlang h3 {
    font-size: 1em;
    padding-bottom: 5px;
    padding-top: 10px;
    font-weight: bold;
}


    
    
    /*  RESPONSIVE  */
    @media (max-width: 1919px) {
        #nav {
            margin-top: 105px;
        }

        .right_menu {
            margin: 40% 0%;
        }

    }


    @media (max-width: 1699px) {
        .right_menu {
            margin: 30% 0%;
        }
        .wrap_menu.sticky .main_logo a>img{
            width: 26%;
        }
        .wrap_menu.sticky .main_logo{
            margin-top: 8px;
        }

    }
  
    @media (max-width: 1500px) {
        .wrap_menu.sticky .main_logo {
            margin-top: 5px;
        }

        .wrap_menu.sticky .main_logo a>img {
            width: 35%;
        }

        .right_menu {
            margin: 35% 0%;
        }

        .wrap_menu.sticky {
            height: 115px;
        }

    }

    @media (max-width: 1300px) {
        .main_menu li {
            padding: 0px 10px;
        }

        .right_menu {
            margin: 40% 0%;
        }

        .right_menu li {
            padding: 0px 6px;
        }
    }

    @media (max-width: 1199px) {
        .right_menu li {
            padding: 0px 3px;
        }

        .right_menu {
            margin: 50% 0%;
        }

        .wrap_menu.sticky {
            height: 120px;
        }

        .main_menu li {
            padding: 0px 5px;
        }

        #nav {
            margin-top: 100px;
        }

        .main_logo a>img {
            width: 80%;
        }
        .wrap_menu.sticky .main_logo a>img {
            width: 50%;
        }
    }



    @media (max-width: 991px) {
          .main_logo a>img {
            width: 40%;
        }
        .numbercart{
            color: white;
            font-size: 0.9em;
        }
        .wrap_menu.sticky {
            height: 100px;
        }

        .img_s {
            width: 20px;
        }

        .user_mobile {
            position: absolute;
            right: 65px;
            top: 30px;

        }

        .search_mobile_1 {
            top: 25px;
            position: absolute;
            left: 50px;
        }


        .modal-body .row {
            flex-wrap: inherit;
        }

        .mainlogo_mobile a img {
            width: 40%;
        }

        .wrap_menu.sticky .mainlogo_mobile a img {
            width: 24%;
        }

        .mainlogo_mobile,
        .wrap_menu.sticky .mainlogo_mobile {
            text-align: center;
            padding-top: 5px;
        }

        .menumobileslide {
            display: inline-block;
        }

        .cart_mobile,
        .menumobileslide {
            margin-top: 30px;
        }

        .wrap_menu.sticky .cart_mobile,
        .wrap_menu.sticky .menumobileslide {
            margin-top: 15px;
        }

        .modal.right .modal-dialog {
            width: 320px;
        }

        .modal.left .modal-dialog {
            position: fixed;
            margin: auto;
            width: 320px;
            height: 100%;
            -webkit-transform: translate3d(0%, 0, 0);
            -ms-transform: translate3d(0%, 0, 0);
            -o-transform: translate3d(0%, 0, 0);
            transform: translate3d(0%, 0, 0);
        }

        .modal.left .modal-content {
            height: 100%;
            overflow-y: auto;
        }

        .modal.left .modal-body {
            padding: 15px 15px 80px;
        }

        /*Left*/
        .modal.left.fade .modal-dialog {
            left: -320px;
            -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
            -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
            -o-transition: opacity 0.3s linear, left 0.3s ease-out;
            transition: opacity 0.3s linear, left 0.3s ease-out;
        }

        .modal.left.fade.show .modal-dialog {
            left: 0;
        }


        .wrap_menu.sticky .user_mobile,
        .wrap_menu.sticky .search_mobile_1 {
            top: 13px;
        }

    }
    @media (max-width: 991px) {
        .wrap_menu{
            position: relative;
        }
                .langchange{
            position: relative;
            right: 0;
            top: 5px;
            float: right;
        }
        .langchange li a{
            font-size: 0.85em;
        }

    }
    @media (max-width: 767px) {

        .user_mobile,
        .search_mobile_1 {
            top: 15px;

        }

        .wrap_menu.sticky .user_mobile,
        .wrap_menu.sticky .search_mobile_1 {
            top: 15px;
        }


        .mainlogo_mobile a img {
            width: 50%;
        }

        .wrap_menu.sticky .mainlogo_mobile a img {
            width: 50%;
        }

/*
        .wrap_menu.sticky {
            height: auto;
        }
*/

        .cart_mobile,
        .menumobileslide {
            margin-top: 15px;
        }

        .wrap_menu.sticky .cart_mobile,
        .wrap_menu.sticky .menumobileslide {
            margin-top: 15px;
        }




        /* ----- MODAL STYLE ----- */
        .modal-content {
            border-radius: 0;
            border: none;
        }



    }
    
    
  


</style>

       <!-- Modal -->
        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel2"><?php echo get2Lang($this->session->userdata('lang'), 'Shopping Bag', 'سلة التسوق');?></h4>
                    </div>

                    <div class="modal-body" id="menu_side_bar">
<?php
$sub_total = 0;
foreach($this->cart->contents() as $items) {
	$price = $items['price'] * $items['qty'];
	$sub_total += $price;
?>
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="bag_produt">
                                    <img src="<?php echo base_url('uploads/product/'.$items['options']['image']);?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-6 col-md-5 col-lg-6" style="padding-left:0px;">
                                <div class="new_item">
                                    <h5><?php echo $items['options']['category'];?></h5>
                                    <h2 class="mt-1"><?php echo $items['name'];?></h2>
                                    <li class="smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Color', 'اللون');?> : <?php echo $items['options']['color'];?></li>
                                </div>
                                <br>
                                <select class="custom-select arrow_down" id="qty_<?php echo $items['rowid'];?>" onchange="updateCart('<?php echo $items['rowid'];?>');">
<?php
	for($qty = 1; $qty <= 100; $qty++) {
?>
									<option value="<?php echo $qty;?>" <?php if($items['qty'] == $qty) echo 'selected';?>><?php echo $qty;?></option>
<?php
	}
?>
                                </select>

                                <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none mt-2">
                                    <p><?php echo number_format($items['price'], 2, '.', ',');?> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?></p>
									<a href="javascript:deleteCart('<?php echo $items["rowid"];?>');" class="removeitem" onclick="return confirm('Confirm Delete');"><?php echo get2Lang($this->session->userdata('lang'), 'Remove', 'حذف/إزالة');?></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 text-lg-right d-none d-sm-none d-md-block d-lg-block d-xl-block">
                                <p><?php echo number_format($items['price'], 2, '.', ',');?> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?></p>
								<a href="javascript:deleteCart('<?php echo $items["rowid"];?>');" class="removeitem" onclick="return confirm('Confirm Delete');"><?php echo get2Lang($this->session->userdata('lang'), 'Remove', 'حذف/إزالة');?></a>
                            </div>
                        </div>
                        <hr>
<?php
}
/*
?>
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="bag_produt">
                                    <img src="<?php echo base_frontend('images/product_test3.png');?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-6 col-md-6" style="padding-left:0px;">
                                <div class="new_item">
                                    <h5>Make up</h5>
                                    <h2 class="mt-1">Semi lip matte</h2>
                                    <li class="smtxt">Color : Maroon</li>
                                </div>

                                <br>
                                <select class="custom-select arrow_down">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                                <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none mt-2">
                                    <p>1,110 USD</p>
                                    <a href="#" class="removeitem">Remove</a>
                                </div>
                            </div>
                            <div class="col-md-3 text-lg-right d-none d-sm-none d-md-block d-lg-block d-xl-block">
                                <p>1,110 USD</p>
                                <a href="#" class="removeitem">Remove</a>
                            </div>
                        </div>

                        <hr>
<?php
*/
?>            
                        <div class="bot_bag">
                            <div class="row">
                                <div class="col-md-3">
                                    <?php echo get2Lang($this->session->userdata('lang'), 'Total Price', 'المبلغ الإجمالي');?>
                                </div>

                                <div class="col-md-9 text-right">
                                    <span id="total_price"><?php echo number_format($sub_total, 2, '.', ',');?></span> <?php echo get2Lang($this->session->userdata('lang'), 'USD', 'دولار أمريكي');?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6" style="padding-right:0px;">
                                    <a href="<?php echo site_url();?>" class="btn btn-warning"><?php echo get2Lang($this->session->userdata('lang'), 'Continue Shopping', 'متابعة التسوق');?> </a>
                                </div>
                                <div class="col-md-6" style="padding-left:0px;">
                                    <a href="<?php echo site_frontend('cart.php');?>" class="btn btn-info"><?php echo get2Lang($this->session->userdata('lang'), 'Checkout', 'الدفع');?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->
<div class="pc_menu d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <div class="navbg wrap_menu">

    
        <div class="wrapper_pad  d-none d-sm-none d-md-none d-lg-block d-xl-block">
            <div class="row">
                <div class="col-lg-3">
                    <div class="main_logo">
                        <a href="<?php echo site_frontend('index.php');?>"><img src="<?php echo base_frontend('images/Logo.svg');?>" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-6 posstatic">
                    <div id="nav">
                        <ul class="main_menu">
                            <li> <a href="#"><?php echo get2Lang($this->session->userdata('lang'), 'Shop', 'تسوق');?> <i class="fas fa-chevron-down"></i></a>
                                <div class="dropdown-container">
                                    <ul class="submenudrop">
                                        <div class="row mt-4">
<?php
$category = $this->model_frontend->getCategoryResult();
if(!empty($category)) {
	foreach($category as $c) {
?>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <h2 class="sublist-title"><a href="<?php echo site_url('frontend/path/product_index/'.$c->category_id);?>"><b> <?php echo get2Lang($this->session->userdata('lang'), $c->category_name, $c->category_name_ar);?></b></a></h2>
                                                    </div>
                                                </div>
                                                <!-- <div class="row">
                                                    <div class="col">
                                                        <ul class="sub-list-cl">
                                                            <div class="left-bb">
<?php
		$sub_category = $this->model_frontend->getSubCategoryResult($c->category_id);
		if(!empty($sub_category)) {
			foreach($sub_category as $s) {
				
?>
                                                                <li><a href="<?php echo site_url('frontend/path/product_index/'.$c->category_id.'/'.$s->sub_category_id);?>"> <?php echo $s->sub_category_name;?></a></li>
<?php
			}
		}
/*  
                                                                <li><a href="#">Best Sellers</a></li>
                                                                <li><a href="#">New Arrival</a></li>
                                                                <li><a href="#">Lipstick</a></li>
                                                                <li><a href="#">Conpact / Powder / Cousion</a></li>
*/
?>
                                                            </div>
                                                        </ul>
                                                    </div>

                                                </div> -->
                                            </div>
<?php
	}
}

/*
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <h2 class="sublist-title"><b>Skin care</b></h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="sub-list-cl">
                                                            <div class="left-bb">
                                                                <li><a href="<?php echo site_frontend('product_index_skincare.php');?>"> Shop all Skin care</a></li>
                                                                <li><a href="#">Best Sellers</a></li>
                                                                <li><a href="#">New Arrival</a></li>
                                                                <li><a href="#">Lipstick</a></li>
                                                                <li><a href="#">Conpact / Powder / Cousion</a></li>

                                                            </div>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <h2 class="sublist-title"><b>Hair care</b></h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="sub-list-cl">
                                                            <div class="left-bb">
                                                                <li><a href="<?php echo site_frontend('product_index_haircare.php');?>"> Shop all Haircare</a></li>
                                                                <li><a href="#">Best Sellers</a></li>
                                                                <li><a href="#">New Arrival</a></li>
                                                                <li><a href="#">Shampoo</a></li>
                                                                <li><a href="#">Conditioner</a></li>
                                                                <li><a href="#">Treatment</a></li>

                                                            </div>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <h2 class="sublist-title"><b>Accessories</b></h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <ul class="sub-list-cl">
                                                            <div class="left-bb">
                                                                <li><a href="<?php echo site_frontend('product_index_accessories.php');?>"> Shop all Accessories</a></li>
                                                                <li><a href="#">Best Sellers</a></li>
                                                                <li><a href="#">New Arrival</a></li>
                                                                <li><a href="#">Brush</a></li>

                                                            </div>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
*/
?>
                                        </div>
                                    </ul>
                                    <div class="headdrop mt-3"> <?php echo get2Lang($this->session->userdata('lang'), 'Weekly New Arrivals', 'وصل حديثاً هذا الأسبوع');?> </div>
                                </div>
                            </li>
                            <li><a href="<?php echo site_frontend('news_tips.php');?>"> <?php echo get2Lang($this->session->userdata('lang'), 'News & Tips', 'اخبار ونصائح');?></a></li>
                            <li><a href="<?php echo site_frontend('about.php');?>"> <?php echo get2Lang($this->session->userdata('lang'), 'About', 'من نحن');?></a></li>
                            <li><a href="<?php echo site_frontend('contact.php');?>"> <?php echo get2Lang($this->session->userdata('lang'), 'Contact', 'تواصل معنا');?> </a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="langchange">
                                    <li> <a data-fancybox data-src="#hidden-content" href="javascript;"><i class="fas fa-globe-asia"></i> <?php if($this->session->userdata('lang') == 'en') echo 'English'; elseif($this->session->userdata('lang') == 'ar') echo 'اللغة العربية';?> </a></li>

                                    <div style="display:none;" id="hidden-content">
                                        <div class="selectlang">
                                            <h2><?php echo get2Lang($this->session->userdata('lang'), 'Please select your preferred language', 'إختر لغتك');?></h2>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="<?php echo site_url($this->uri->uri_string());?>?lang=en">English</a>
                                                    <a href="<?php echo site_url($this->uri->uri_string());?>?lang=ar">     اللغة العربية</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                             
                                   </div>
                            
                
<!--
                   <div class="lang_change">
                       <li><a href="<?php echo site_url($this->uri->uri_string());?>?lang=en"><img src="<?php echo base_frontend('images/flag_en.png');?>"></a></li>
                       <li><a href="<?php echo site_url($this->uri->uri_string());?>?lang=ar"><img src="<?php echo base_frontend('images/flag_arab.png');?>"></a></li>
                   </div>
-->

                    <div class="right_menu">
                        <ul>
                            <li>

                                <div class="wrap_searchbox">
                                    <div class="searchbtn"><a href="#"><img src="<?php echo base_frontend('images/search_white.svg');?>"></a></div>
                                    <div class="searchbox">
                                        <div class="wrap_search_form">
                                            <input type="text" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Search', 'بحث');?>..." autofocus id="inc_keyword">
                                            <div class="close_search">X</div>
                                        </div>
                                        <div class="search_showproductbar">
                                            <div class="row">
<?php
/*
?>
                                                <div class="col-12 col-sm-6 col-lg-4">
                                                    <div class="item_listproducts">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-6 col-lg-5 col-xl-4">
                                                                <a href="">
                                                                    <figure>
                                                                        <img src="<?php echo base_url('uploads/product/'.$items['options']['image']);?>" alt="" class="img-fluid">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="col-8 col-sm-6 col-lg-7 col-xl-8">
                                                                <a href="">
                                                                    <div class="product_details_box">
                                                                        <h4>Buate Hair conditioner</h4>
                                                                        <h3>$28.00</h3>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<?php
*/
/*
?>
                                                <div class="col-12 col-sm-6 col-lg-4">
                                                    <div class="item_listproducts">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-6 col-lg-5 col-xl-4">
                                                                <a href="">
                                                                    <figure>
                                                                        <img src="<?php echo base_frontend('images/product_test3.png');?>" alt="" class="img-fluid">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="col-8 col-sm-6 col-lg-7 col-xl-8">
                                                                <a href="">
                                                                    <div class="product_details_box">
                                                                        <h4>Buate Hair conditioner</h4>
                                                                        <h3>$28.00</h3>

                                                                    </div>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-4">
                                                    <div class="item_listproducts">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <a href="">
                                                                    <figure>
                                                                        <img src="<?php echo base_frontend('images/product_test3.png');?>" alt="" class="img-fluid">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="col-8">
                                                                <a href="">
                                                                    <div class="product_details_box">
                                                                        <h4>Buate Hair conditioner</h4>
                                                                        <h3>$28.00</h3>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-4">
                                                    <div class="item_listproducts">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <a href="">
                                                                    <figure>
                                                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" alt="" class="img-fluid">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="col-8">
                                                                <a href="">
                                                                    <div class="product_details_box">
                                                                        <h4>Buate Hair conditioner</h4>
                                                                        <h3>$28.00</h3>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-4">
                                                    <div class="item_listproducts">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <a href="">
                                                                    <figure>
                                                                        <img src="<?php echo base_frontend('images/product_test.png');?>" alt="" class="img-fluid">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="col-8">
                                                                <a href="">
                                                                    <div class="product_details_box">
                                                                        <h4>Buate Hair conditioner</h4>
                                                                        <h3>$28.00</h3>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-4">
                                                    <div class="item_listproducts">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <a href="">
                                                                    <figure>
                                                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" alt="" class="img-fluid">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="col-8">
                                                                <a href="">
                                                                    <div class="product_details_box">
                                                                        <h4>Buate Hair conditioner</h4>
                                                                        <h3>$28.00</h3>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
*/
?>
                                                <div class="col-12">
                                                    <div class="search_seemoreproduct"><a href="javascript:productSearch();"><?php echo get2Lang($this->session->userdata('lang'), 'see more', 'رؤية المزيد');?></a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>




                            <li><a href="<?php echo site_frontend('login_register.php');?>"><img src="<?php echo base_frontend('images/user_icon.png');?>"></a></li>
                            <li><a href="<?php echo site_frontend('member_wishlist.php');?>"><img src="<?php echo base_frontend('images/wishlist_icon.png');?>"></a></li>

                            <li><a href="#">
                                    <div data-toggle="modal" data-target="#myModal2" style=" cursor: pointer; color:white;">
                                        <img src="<?php echo base_frontend('images/cart_icon.png');?>"> <span id="inc_cart_amount">
<?php
$i = 0;
foreach($this->cart->contents() as $items) {
	$i++;
}

echo $i;
?>
                                        </span>
                                    </div>
                                </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="mobile_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">

    <div class="border_mid"></div>
    <div class="navbg">
        <div class="container-fluid">
           <div class="row">
               <div class="col">
                    <div class="langchange">
                                    <li> <a data-fancybox data-src="#hidden-content" href="javascript;"><i class="fas fa-globe-asia"></i> <?php if($this->session->userdata('lang') == 'en') echo 'English'; elseif($this->session->userdata('lang') == 'ar') echo 'اللغة العربية';?> </a></li>

                                    <div style="display:none;" id="hidden-content">
                                        <div class="selectlang">
                                            <h2><?php echo get2Lang($this->session->userdata('lang'), 'Please select your preferred language', 'إختر لغتك');?></h2>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a href="<?php echo site_url($this->uri->uri_string());?>?lang=en">English</a>
                                                    <a href="<?php echo site_url($this->uri->uri_string());?>?lang=ar">اللغة العربية</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             
                                   </div>
                      
               </div>
           </div>
            <div class="row">
                <div class="col-3">
                    <div data-toggle="modal" data-target="#myModal" class="menumobileslide">
                        <img src="<?php echo base_frontend('images/icon_menu.svg');?>" class="img_s">
                    </div>
                    <!-- Modal -->
                    <div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="modal-title" id="myModalLabel"><?php echo get2Lang($this->session->userdata('lang'), 'La secta Beauty', 'لاسكتا بيوتي');?></div>
                                </div>

                                <div class="modal-body" style="padding:0px;">
                                    <div id="menu" class="">
                                        <div class="menu-box">
                                            <div class="menu-wrapper-inner">
                                                <div class="menu-wrapper">
                                                    <div class="menu-slider">
                                                        <div class="menu">
                                                            <ul>
                                                                <li>
                                                                    <div class="menu-item"><a href="#" class="menu-anchor" data-menu="1"><?php echo get2Lang($this->session->userdata('lang'), 'Shop', 'تسوق');?></a>
                                                                    <i class="fas fa-chevron-right detail"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('news_tips.php');?>" class=""><?php echo get2Lang($this->session->userdata('lang'), 'News & Tips', 'اخبار ونصائح');?></a></div>
                                                                </li>


                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('about.php');?>" class=""><?php echo get2Lang($this->session->userdata('lang'), 'About', 'من نحن');?></a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('contact.php');?>" class=""><?php echo get2Lang($this->session->userdata('lang'), 'Contact', 'تواصل معنا');?></a></div>
                                                                </li>
                                                                <div class="tab_help">
                                                                    <?php echo get2Lang($this->session->userdata('lang'), 'Help & Information', 'مركز المساعدة');?>
                                                                </div>

                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('howtoorder.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'How to order', 'مركز المساعدة');?> </a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('shipping.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Shipping', 'الشحن');?> </a></div>
                                                                </li>
                                                               
                                                            </ul>
                                                        </div>
                                                        <div class="submenu menu" data-menu="1">
                                                            <div class="submenu-back">
                                                                <div class="menu-item">
                                                                
                                                                <i class="fas fa-chevron-left detail back"></i>
                                                                <a href="#" class="menu-back"><?php echo get2Lang($this->session->userdata('lang'), 'Back', 'عودة');?></a></div>
                                                            </div>
                                                            <ul>
                                                                <!-- <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('new_arrivals.php');?>">New Arrivals</a></div>
                                                                </li> -->
<?php
$category = $this->model_frontend->getCategoryResult();
$c_no = 4;
if(!empty($category)) {
	foreach($category as $c) {
		$c_no++;
?>
																<li>
                                                                    <div class="menu-item"><a href="<?php echo site_url('frontend/path/product_index/'.$c->category_id);?>"><?php echo get2Lang($this->session->userdata('lang'), ucfirst(strtolower($c->category_name)), ucfirst(strtolower($c->category_name_ar)));?></a><!-- <img class="detail" src="https://cdn.flaticon.com/svg/32/32213.svg"> --></div>
                                                                </li>
<?php		
	}
}

/*
?>
                                                                
                                                                
                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('product_index_skincare.php');?>" class="menu-anchor" data-menu="6">Skin care</a><img class="detail" src="https://cdn.flaticon.com/svg/32/32213.svg"></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('product_index_haircare.php');?>" class="menu-anchor" data-menu="7">Hair care</a><img class="detail" src="https://cdn.flaticon.com/svg/32/32213.svg"></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_frontend('product_index_accessories.php');?>" class="menu-anchor" data-menu="8">Accessories</a><img class="detail" src="https://cdn.flaticon.com/svg/32/32213.svg"></div>
                                                                </li>
*/
?>
                                                            </ul>
                                                        </div>
<?php
/*
$category = $this->model_frontend->getCategoryResult();
$c_no = 4;
if(!empty($category)) {
	foreach($category as $c) {
?>
                                                        <div class="submenu menu" data-menu="<?php echo $c_no;?>">
                                                            <div class="submenu-back">
                                                                <div class="menu-item"><img class="detail back" src="https://cdn.flaticon.com/svg/32/32542.svg"><a href="#" class="menu-back">Make up</a></div>
                                                            </div>
                                                            <ul>
<?php
		$sub_category = $this->model_frontend->getSubCategoryResult($c->category_id);
		if(!empty($sub_category)) {
			foreach($sub_category as $s) {
				
?>
                                                                <li>
                                                                    <div class="menu-item"><a href="<?php echo site_url('frontend/path/product_index/'.$c->category_id.'/'.$s->sub_category_id);?>"><?php echo $s->sub_category_name;?></a></div>
                                                                </li>
<?php
			}
		}

/*
?>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Lipstick</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Cousion / Powder / Foundation</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Eyebrow</a></div>
                                                                </li>
<?php
*/
/*
?>
                                                            </ul>
                                                        </div>
<?php
		$c_no++;
	}
}*/
/*
?>
                                                        <div class="submenu menu" data-menu="6">
                                                            <div class="submenu-back">
                                                                <div class="menu-item"><img class="detail back" src="https://cdn.flaticon.com/svg/32/32542.svg"><a href="#" class="menu-back">Skin care</a></div>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Shop all skin care</a></div>
                                                                </li>

                                                                <li>
                                                                    <div class="menu-item"><a href="#">Body Lotion</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Body Mist</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Hand Cream</a></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="submenu menu" data-menu="7">
                                                            <div class="submenu-back">
                                                                <div class="menu-item"><img class="detail back" src="https://cdn.flaticon.com/svg/32/32542.svg"><a href="#" class="menu-back">Hair care</a></div>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Shop all hair care</a></div>
                                                                </li>

                                                                <li>
                                                                    <div class="menu-item"><a href="#">Body Lotion</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Body Mist</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Hand Cream</a></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="submenu menu" data-menu="8">
                                                            <div class="submenu-back">
                                                                <div class="menu-item"><img class="detail back" src="https://cdn.flaticon.com/svg/32/32542.svg"><a href="#" class="menu-back">Accessories</a></div>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Shop all accessories</a></div>
                                                                </li>

                                                                <li>
                                                                    <div class="menu-item"><a href="#">Body Lotion</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Body Mist</a></div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item"><a href="#">Hand Cream</a></div>
                                                                </li>
                                                            </ul>
                                                        </div>
*/
?>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="lang_mobile"><a href="<?php echo site_url($this->uri->uri_string());?>?lang=en"><img src="<?php echo base_frontend('images/flag_en.png');?>"></a> <a href="<?php echo site_url($this->uri->uri_string());?>?lang=ar"><img src="<?php echo base_frontend('images/flag_arab.png');?>"></a></div> -->
                                        </div>
                                    </div>
                                </div>

                            </div><!-- modal-content -->
                        </div><!-- modal-dialog -->
                    </div><!-- modal -->


                    <div class="search_mobile_1">
                        <div class="wrap_searchbox">
                            <div class="searchbtn"><a href="#"><img src="<?php echo base_frontend('images/search_white.svg');?>" class="img_s"></a></div>
                            <div class="searchbox">
                                <div class="wrap_search_form">
                                    <input type="text" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Search', 'بحث');?>..." autofocus id="inc_keyword_mobile">
                                    <div class="close_search">X</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6">
                    <div class="mainlogo_mobile">
                        <a href="<?php echo site_frontend('index.php');?>"> <img src="<?php echo base_frontend('images/Logo.svg');?>"></a>
                    </div>

                </div>
                <div class="col-3">
                    <div class="user_mobile">
                        <a href="<?php echo site_frontend('login_register.php');?>"><img src="<?php echo base_frontend('images/user.svg');?>" class="img_s"></a>
                    </div>


                    <div data-toggle="modal" data-target="#myModal2" class="cart_mobile">
                        <img src="<?php echo base_frontend('images/cart.svg');?>" class="img_s"> <span class="numbercart" id="inc_cart_amount_mobile"><?php echo $i;?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('.wrap_menu').addClass("sticky");
        } else {
            $('.wrap_menu').removeClass("sticky");
        }
    });

</script>


<script>
    var menu_width;

    jQuery(document).ready(
        function() {

            initMenu();

        });

    function initMenu() {
        menu_width = $("#menu .menu").width();

        $(".menu-back").click(function() {

            var _pos = $(".menu-slider").position().left + menu_width;
            var _obj = $(this).closest(".submenu");

            $(".menu-slider").stop().animate({
                left: _pos
            }, 300, function() {
                _obj.hide();
            });

            return false;
        });

        $(".menu-anchor").click(function() {
            var _d = $(this).data('menu');
            $(".submenu").each(function() {

                var _d_check = $(this).data('menu');

                if (_d_check == _d) {
                    $(this).show();
                    var _pos = $(".menu-slider").position().left - menu_width;

                    $(".menu-slider").stop(true, true).animate({
                        left: _pos
                    }, 300);
                    return false;
                }
            });

            return false;
        });

    }

</script>

<script>
    $(document).ready(function() {
        $('.btn_join_us').click(function(event) {
            $('.login').hide();
            $('.join_us').fadeIn();
            event.preventDefault();
        });
        $('.btn_login').click(function(event) {
            $('.join_us').hide();
            $('.login').fadeIn();
            event.preventDefault();
        });

        $('.searchbtn').click(function(event) {
            if ($(".searchbox").is(":hidden")) {
                $(this).addClass("active");
                $(".searchbox").fadeIn();
            } else {
                //if (Modernizr.mq('(max-width: 991px)')) {
                $('.searchbox').fadeOut();
                $(this).removeClass("active");
                //}
            }
            event.stopPropagation();
        });

        $('.close_search').click(function(event) {
            $('.searchbox').fadeOut();
            $('.searchbtn').removeClass("active");
        });

        $('.wrap_search_form').click(function(event) {
            event.stopPropagation();
        });

        $(".searchbox").css('top', $('.topbar_menu').outerHeight());
        $('.container-fluid').eq(1).css('padding-top', $('.wrap_menu').outerHeight());
    });
    
    function updateCart(rowid) {
		$.post('<?php echo site_url("frontend/path/ajaxUpdateCart");?>', { rowid: rowid, qty: $("#qty_" + rowid).val() }, function(data) {
			var data_split = data.split('!@#$%^&*()');

				$("#inc_cart_amount").html(data_split[0]);
				$("#menu_side_bar").html(data_split[1]);
				$("#inc_cart").html(data_split[2]);
				$("#cart_mobile").html(data_split[3]);
				$("#inc_cart_amount_mobile").html(data_split[0]);
				$("#cart_sub_total").html(data_split[4]);
				$("#cart_discount").html(data_split[5]);
				$("#cart_shipping").html(data_split[6]);
				$("#cart_total").html(data_split[7]);
				/*if(data_split[8] == 'true') {
						
				} else {
					alert('Incorrect Promotion Code');
					$("#influencer_code").val('');
				}*/

                $("#order_detail_shipping_country").val('');
				
				$("#txt_express").html(data_split[9]);
				$("#txt_normal").html(data_split[10]);	
		});
	}
	
	function deleteCart(rowid)
	{
		$.post('<?php echo site_url("frontend/path/ajaxUpdateCart");?>', { rowid: rowid, qty: 0 }, function(data) {
			var data_split = data.split('!@#$%^&*()');

				$("#inc_cart_amount").html(data_split[0]);
				$("#menu_side_bar").html(data_split[1]);
				$("#inc_cart").html(data_split[2]);
				$("#cart_mobile").html(data_split[3]);
				$("#inc_cart_amount_mobile").html(data_split[0]);
				$("#cart_sub_total").html(data_split[4]);
				$("#cart_discount").html(data_split[5]);
				$("#cart_shipping").html(data_split[6]);
				$("#cart_total").html(data_split[7]);
				/*if(data_split[8] == 'true') {
						
				} else {
					alert('Incorrect Promotion Code');
					$("#influencer_code").val('');
				}*/
				
				$("#txt_express").html(data_split[9]);
				$("#txt_normal").html(data_split[10]);	
		});
	}
	
	function productSearch() {
		window.location.href = '<?php echo site_url("frontend/path/product_search");?>/' + $("#inc_keyword").val();
	}
	
	$("#inc_keyword_mobile").on('keypress',function(e) {
	    if(e.which == 13) {
	        window.location.href = '<?php echo site_url("frontend/path/product_search");?>/' + $("#inc_keyword_mobile").val();
	    }
	});
	
	$("#inc_keyword").on('keypress',function(e) {
	    if(e.which == 13) {
	        window.location.href = '<?php echo site_url("frontend/path/product_search");?>/' + $("#inc_keyword").val();
	    }
	});

</script>
