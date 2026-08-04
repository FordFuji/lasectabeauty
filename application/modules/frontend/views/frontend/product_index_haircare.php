<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .custom-select {
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: 1px solid #252525;
        border-radius: 0px;
        padding-left: 0px;
        width: 80%;
        background-color: transparent;
    }

    .box_bestseller {
        background-color: #ffffff;
        box-shadow: 0 5px 14px -1px rgba(55, 65, 67, .2);
        margin: 10px 0px;
    }

    .box_bestseller:hover {
        box-shadow: 0 15px 14px -1px rgba(55, 65, 67, .0);
    }

</style>

<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">
        <div class="row">
            <div class="col">
                <div class="banner_product3">
                    <div class="wrapper_pad">
                        <div class="banner_faqstxt">
                            <h1>Hair care</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_pad mt-5 mb-5">
            <div class="row">
                <div class="col-lg-3">
                    <?php require('inc_filter.php'); ?>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="title_section">
                                Hair care
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <select class="custom-select arrow_down">
                                <option selected>Sort by</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                     <div class="row mt-3 content_wrap">
                        <div class="col-6 col-lg-4">
                            <a href="<?php echo site_frontend('product_inside.php');?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
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
                            <a href="<?php echo site_frontend('product_inside.php');?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
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
                            <a href="<?php echo site_frontend('product_inside.php');?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
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
                            <a href="<?php echo site_frontend('product_inside.php');?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
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
                            <a href="<?php echo site_frontend('product_inside.php');?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
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
                            <a href="<?php echo site_frontend('product_inside.php');?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
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
                            <a href="<?php echo site_frontend('product_inside.php');?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_frontend('images/product_test1.png');?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
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
                    </div>
                    <div class="row mt-5">
                        <div class="col">

                            <nav data-pagination>
                                <a href=# disabled><i class="fas fa-chevron-left"></i></a>
                                <ul>
                                    <li class=current><a href=#1>1</a>
                                    <li><a href=#2>2</a>
                                    <li><a href=#3>3</a>
                                    <li><a href=#4>4</a>

                                    <li><a href=#5>5</a>
                                    <li><a href=#10>…</a>
                                    <li><a href=#10>10</a>
                                </ul>
                                <a href=#2><i class="fas fa-chevron-right"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>



</body>

</html>
