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
                <div class="banner_product1">
                    <div class="wrapper_pad">
                        <div class="banner_faqstxt">
                            <h1></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_pad mt-5 mb-5">
            <div class="row">
                <?php
                /*
                <div class="col-lg-3">
                    <?php //require('inc_filter.php'); ?>
                </div>
                */
                ?>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="title_section">
                               <?php echo get2Lang($this->session->userdata('lang'), 'Search', '');?> "<?php echo urldecode($search);?>" <?php echo get2Lang($this->session->userdata('lang'), '', 'ن البحث');?>                            
                           </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- <select class="custom-select arrow_down" id="sort_by" onchange="filterProduct();">
                                <option value="">Sort by</option>
                                <option value="alphabet_a_z">Alphabet (A-Z)</option>
                                <option value="alphabet_z_a">Alphabet (Z-A)</option>
                                <option value="price_a_z">Price (A-Z)</option>
                                <option value="price_z_a">Price (Z-A)</option>
                            </select> -->
                        </div>
                    </div>
                    <div class="row mt-3 content_wrap">
<?php
if(!empty($productCtrl)) {
	foreach($productCtrl as $r) {
		
?>
                        <div class="col-6 col-lg-3">
                            <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>">
                                <div class="box_bestseller product">
                                    <div class="picbest">
                                        <img src="<?php echo base_url('uploads/product/'.$r->product_image);?>" class="img-fluid">
                                        <div class="wishlist_product"><a href="javascript:addWishList('<?php echo $r->product_id;?>');" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="<?php echo base_frontend('images/wishlist_black.svg');?>"></a></div>
                                    </div>
                                    <div class="product_details_box">
                                        <a href="<?php echo site_url('frontend/path/product_inside/'.$r->product_id);?>">
                                            <h4><?php echo get2Lang($this->session->userdata('lang'), $r->product_name, $r->product_name_ar);?></h4>
                                            <h3><?php echo number_format($r->product_price, 2, '.', ',');?></h3>
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
                            <a href="<?php echo site_frontend('prpduct_inside.php');?>">
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
                            <a href="<?php echo site_frontend('prpduct_inside.php');?>">
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
                            <a href="<?php echo site_frontend('prpduct_inside.php');?>">
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
                            <a href="<?php echo site_frontend('prpduct_inside.php');?>">
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
                            <a href="<?php echo site_frontend('prpduct_inside.php');?>">
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
                            <a href="<?php echo site_frontend('prpduct_inside.php');?>">
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
*/
?>
                    </div>
<?php
/*
                  <div class="row mt-5">
                        <div class="col">

                            <nav data-pagination id="pagination">
                                <!-- <a href=# disabled><i class="fas fa-chevron-left"></i></a>
                                <ul>
                                    <li class=current><a href=#1>1</a></li>
                                    <li><a href=#2>2</a></li>
                                    <li><a href=#3>3</a></li>
                                    <li><a href=#4>4</a></li>

                                    <li><a href=#5>5</a></li>
                                    <li><a href=#10>…</a></li>
                                    <li><a href=#10>10</a></li>
                                </ul> 
                                <a href=#2><i class="fas fa-chevron-right"></i></a> -->
                                <?php echo $pagination;?>
                            </nav>
                        </div>
*/
?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>
	<script>
		function addWishList(product_id) {
			$.post('<?php echo site_url("frontend/path/ajaxWishlist");?>', { product_id: product_id }, function(data) {
				if(data == true) {
					alert('Add Wishlist Success');
				} else {
					alert('Please Login');
				}
			});
		}
	</script>


</body>

</html>
