<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<body>
    <style>
        .box_bestseller {

            margin: 20px 10px;

        }

        .flexslider {
            margin: 0;
            padding: 0;
            border: none;
            box-shadow: none;
            background: none;
            top: 0;
            z-index: 0;
        }

        .flex-direction-nav {
            display: none;
        }

        .flex-control-nav {
            bottom: 10px;
            z-index: 9;
        }

        .flex-control-paging li a.flex-active {
            background-color: white;
        }

        .flex-control-paging li a {
            background-color: transparent;
            width: 10px;
            height: 10px;
            border: 1px solid white;
            box-shadow: none;
        }

        .flex-control-paging li a:hover {
            background: white;
            transition: ease .5s;
        }

        .bestseller .owl-prev {
            position: absolute;
            top: -15%;
            right: 5%;
        }

        .bestseller .owl-next {
            position: absolute;
            right: 0%;
            top: -15%;
        }

        .owl-theme .owl-nav [class*=owl-]:hover {
            background-color: transparent;
        }


        @media (max-width: 767px) {
            .box_bestseller {
                margin: 0px 2px;
                padding: 10px;
            }

            .bestseller .owl-prev {
                top: -18%;
                right: 10%;
            }

            .bestseller .owl-next {
                right: 0%;
                top: -18%;
            }
        }

        @media (max-width: 575px) {
            .bestseller .owl-prev {
                top: -25%;
                right: 15%;
            }

            .bestseller .owl-next {
                right: 0%;
                top: -25%;
            }
        }

    </style>
    <?php require('inc_topmenu.php'); ?>
    <div class="container-fluid nopad">
        <div class="row no-gutters">
            <div class="col-6 col-lg-6">
                <div class="bannertop">
                    <div class="flexslider">
                        <ul class="slides">
<?php
if(!empty($banner1Left)) {
    foreach($banner1Left as $r) {
?>
                            <li>
                                <img src="<?php echo base_url('uploads/banner/'.$r->banner_image);?>" />
                            </li>
<?php
    }
}
?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-6">
                <div class="bannertop">
                    <div class="flexslider">
                        <ul class="slides">
                        <?php
if(!empty($banner1Right)) {
    foreach($banner1Right as $r) {
?>
                            <li>
                                <img src="<?php echo base_url('uploads/banner/'.$r->banner_image);?>" />
                            </li>
<?php
    }
}
?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="bg_marble">
                    <div class="bgopac">
                        <div class="row">
                            <div class="col">
                                <div class="new_marble">
                                    <h2><?php if(!empty($textCtrl)) echo get2Lang($this->session->userdata('lang'), $textCtrl->text_text1, $textCtrl->text_text1_ar);?></h2>
                                    <h1><?php if(!empty($textCtrl)) echo get2Lang($this->session->userdata('lang'), $textCtrl->text_text2, $textCtrl->text_text2_ar);?></h1>
                                    <a href="<?php echo site_frontend('new_arrivals.php');?>"><?php if(!empty($textCtrl)) echo get2Lang($this->session->userdata('lang'), $textCtrl->text_text3, $textCtrl->text_text3_ar);?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   PC     -->
        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="single wow fadeInLeft">
                        <a href="<?php echo site_url('frontend/path/product_index/1');?>">
                            <div class='overlay'> <span>
                                    <h3><?php if(!empty($category1)) echo get2Lang($this->session->userdata('lang'), $category1->category_name, $category1->category_name_ar);?></h3>
                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Discover more', 'اكتشفي المزيد
');?></p>
                                </span> </div>
                            <div class='img img1'></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single wow fadeInLeft">
                        <a href="<?php echo site_url('frontend/path/product_index/2');?>">
                            <div class='overlay'> <span>
                                    <h3><?php if(!empty($category2)) echo get2Lang($this->session->userdata('lang'), $category2->category_name, $category2->category_name_ar);?></h3>
                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Discover more', 'اكتشفي المزيد
');?></p>
                                </span> </div>
                            <div class='img img2'></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single wow fadeInLeft">
                        <a href="<?php echo site_url('frontend/path/product_index/3');?>">
                            <div class='overlay'> <span>
                                    <h3><?php if(!empty($category3)) echo get2Lang($this->session->userdata('lang'), $category3->category_name, $category3->category_name_ar);?></h3>
                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Discover more', 'اكتشفي المزيد
');?></p>
                                </span> </div>
                            <div class='img img3'></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="single2 wow fadeInLeft">
                        <a href="<?php echo site_url('frontend/path/product_index/4');?>">
                            <div class='overlay'> <span>
                                    <h3><?php if(!empty($category4)) echo get2Lang($this->session->userdata('lang'), $category4->category_name, $category4->category_name_ar);?></h3>
                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Discover more', 'اكتشفي المزيد
');?></p>
                                </span> </div>
                            <div class='img img4'></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--    END    -->

        <!--   MOBILE     -->

        <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="row no-gutters">
                <div class="col-6">
                    <div class="single wow fadeInLeft">
                        <a href="<?php echo site_url('frontend/path/product_index/1');?>">
                            <div class='overlay'> <span>
                                    <h3><?php if(!empty($category1)) echo get2Lang($this->session->userdata('lang'), $category1->category_name, $category1->category_name_ar);?></h3>
                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Discover more', 'اكتشفي المزيد
');?></p>
                                </span> </div>
                            <div class='img img1'></div>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single wow fadeInLeft">
                        <a href="<?php echo site_url('frontend/path/product_index/2');?>">
                            <div class='overlay'> <span>
                                    <h3><?php if(!empty($category2)) echo get2Lang($this->session->userdata('lang'), $category2->category_name, $category2->category_name_ar);?></h3>
                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Discover more', 'اكتشفي المزيد
');?></p>
                                </span> </div>
                            <div class='img img2'></div>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single wow fadeInLeft">
                        <a href="<?php echo site_url('frontend/path/product_index/3');?>">
                            <div class='overlay'> <span>
                                    <h3><?php if(!empty($category3)) echo get2Lang($this->session->userdata('lang'), $category3->category_name, $category3->category_name_ar);?></h3>
                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Discover more', 'اكتشفي المزيد
');?></p>
                                </span> </div>
                            <div class='img img3'></div>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="single2 wow fadeInLeft">
                        <a href="<?php echo site_url('frontend/path/product_index/4');?>">
                            <div class='overlay'> <span>
                                    <h3><?php if(!empty($category4)) echo get2Lang($this->session->userdata('lang'), $category4->category_name, $category4->category_name_ar);?></h3>
                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Discover more', 'اكتشفي المزيد
');?></p>
                                </span> </div>
                            <div class='img img4'></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- END -->

        <div class="bg_white">
            <div class="wrapper_pad mb-3">
                <div class="row pt-5">
                    <div class="col">
                        <div class="title_section">
                            <?php echo get2Lang($this->session->userdata('lang'), 'Best Seller', 'الأكثر مبيعاً');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="bestseller wrapper  owl-carousel owl-theme">
<?php
$r = $product1Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" id="product_wishlist_id_<?php echo $r->product_id;?>" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?>
                                    </div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product2Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product3Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product4Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product5Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product6Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product7Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product8Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product9Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

$r = $product10Ctrl;
if(!empty($r)) {
    $wishlist = $this->model_frontend->getWishlistRecord($r->product_id);
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
                                    <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid"></a>
                                    <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="<?php echo get2Lang($this->session->userdata('lang'), 'Add to Favorite', 'Add to Favorite(Ar)');?>" id="wishlist_product_id_<?php echo $r->product_id;?>">
<?php
    if($wishlist == true) {
?>
                                            <img src="<?php echo base_frontend('images/heart_red.svg');?>">
<?php
    } else {
?>
                                            <img src="<?php echo base_frontend('images/wishlist_black.svg');?>">
<?php
    }
?></a></div>
                                </div>
                                <div class="product_details_box">
                                	<a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>" class="tooltip-bottom">
	                                    <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
	                                    <h3><?php if($r->product_before_discount_price != $r->product_price) { ?><s>$<?php echo number_format($r->product_before_discount_price, 2, '.', ',');?></s>&nbsp;&nbsp;&nbsp;<?php } ?><span style="color: <?php if($r->product_before_discount_price != $r->product_price) echo 'red'; else 'black';?>;">$<?php echo number_format($r->product_price, 2, '.', ',');?></span></h3>
									</a>
                                </div>
                            </div>
                        </div>
<?php
}

/*
?>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                    <img src="<?php echo base_frontend('images/product_test3.png');?>" class="img-fluid">
                                    <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
                                </div>
                                <div class="product_details_box">
                                    <h4>Buate Hair conditioner</h4>
                                    <h3>$28.00</h3>

                                </div>
                            </div>
                        </div>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                    <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                    <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
                                </div>
                                <div class="product_details_box">
                                    <h4>Buate Hair conditioner</h4>
                                    <h3>$28.00</h3>

                                </div>
                            </div>
                        </div>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                    <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                    <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
                                </div>
                                <div class="product_details_box">
                                    <h4>Buate Hair conditioner</h4>
                                    <h3>$28.00</h3>

                                </div>
                            </div>
                        </div>
                        <div class="item box">
                            <div class="box_bestseller product">
                                <div class="picbest">
                                    <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                    <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
                                </div>
                                <div class="product_details_box">
                                    <h4>Buate Hair conditioner</h4>
                                    <h3>$28.00</h3>

                                </div>
                            </div>
                        </div>
*/
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg_vid">
            <div class="wrapper_pad">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="vid_details">
                            <h1><?php if(!empty($banner2_1)) echo get2Lang($this->session->userdata('lang'), $banner2_1->banner_2_name, $banner2_1->banner_2_name_ar);?></h1>
                            <h4><?php if(!empty($banner2_1)) echo get2Lang($this->session->userdata('lang'), $banner2_1->banner_2_description, $banner2_1->banner_2_description_ar);?></h4>
                        </div>
                        <div class="video_clip mt-5">
                            <a data-fancybox href="<?php if(!empty($banner2_1)) echo $banner2_1->banner_2_embed_youtube;?>">
                                <button id="play" class="play-btn"> <i class="fas fa-play"></i> </button> <img class="card-img-top img-fluid" src="<?php if(!empty($banner2_1)) echo base_url('uploads/banner/'.$banner2_1->banner_2_image);?>" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg_white">
            <div class="row">
                <div class="col">
                    <div class="ig_feeds"><i class="fab fa-instagram"></i> <?php echo get2Lang($this->session->userdata('lang'), 'Instagram', 'Instagram');?>
                        <div class="middleline"></div>#<?php if(!empty($instagramCtrl)) echo strtoupper($instagramCtrl->instagram_name);?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- <div class="igslide owl-carousel owl-theme">
                    <div class="item">
                        <div class="ig-box">
                        
                        </div>
                    </div>
                </div> -->
                <div>
                	<div class="item">
                		<div class="ig-box">
                			<div class="instagram_gallery">
                				
                			</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>
	<style>
		.instagram_gallery img {
		    display: inline-block;
		    width: 24%;
		}
		
	</style>
    <script src="<?php echo base_url('asset/frontend/instagram/jquery.instagramFeed.min.js');?>"></script>
    <script>
        $(window).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });

            $.instagramFeed({
                'username': '<?php if(!empty($instagram)) echo $instagram->instagram_name;?>',
                'container': ".ig-box",
                'display_profile': false,
                'display_biography': false,
                'display_gallery': true,
                'display_igtv': false,
                'callback': null,
                'styling': false,
                'items': 4,
            });
        });

    </script>
    <?php $left = base_frontend('images/arrow_left.png');?>
    <?php $right = base_frontend('images/arrow_right.png');?>
    <script>
        $(document).ready(function() {
            $('.bestseller').owlCarousel({
                center: true,
                margin: 10,
                loop: true,
                item: 2,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 2000,
                nav: true,
                dots: false,
                navText: ['<img src="<?php echo $left;?>">', '<img src="<?php echo $right;?>">'],
                navClass: ['owl-prev', 'owl-next'],
                responsive: {

                    0: {
                        items: 2,
                        slideBy: 1,
                        nav: true,
                        center: false,
                        loop: false,
                        margin: 2,

                    },
                    600: {
                        items: 2,
                        slideBy: 1,
                        nav: true,
                        center: false,
                        loop: false,

                    },
                    1024: {
                        items: 3,
                        slideBy: 1
                    },
                    1200: {
                        items: 4,
                        slideBy: 1
                    }
                }
            })
            $('.igslide').owlCarousel({
                margin: 0,
                loop: true,
                item: 2,
                autoplay: false,
                touchDrag: false,
                mouseDrag: false,
                smartSpeed: 2000,
                nav: false,
                dots: false,
                navText: ['<img src="<?php echo $left;?>">', '<img src="<?php echo $right;?>">'],
                navClass: ['owl-prev', 'owl-next'],
                responsive: {
                    0: {
                        items: 2,
                        slideBy: 1,
                        nav: false,
                        touchDrag: true,
                        mouseDrag: true,
                    },

                    600: {
                        items: 3,
                        slideBy: 1,
                        nav: false,
                        touchDrag: true,
                        mouseDrag: true,

                    },
                    1024: {
                        items: 3,
                        slideBy: 1
                    },
                    1200: {
                        items: 4,
                        slideBy: 1
                    }
                }
            })
        });
        
        function addWishList(product_id) {
			$.post('<?php echo site_url("frontend/path/ajaxWishlist");?>', { product_id: product_id }, function(data) {
				if(data == true) {
					$("#wishlist_product_id_" + product_id).html('<img src="<?php echo base_frontend('images/heart_red.svg');?>">');
				} else {
					alert('<?php echo get2Lang($this->session->userdata("lang"), "Please Login", "Please Login(Ar)");?>');
				}
			});
		}

    </script>
</body>

</html>
