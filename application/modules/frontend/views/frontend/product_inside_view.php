<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
    <script>
        $(document).ready(function() {
            $('.colorWrapper a').click(function(event) {
                var visaid = $(event.currentTarget).attr('href');
                if ($(".simplegallery" + visaid).is(":hidden")) {
                    $('.colorWrapper a').removeClass('active');
                    $(".simplegallery").hide();
                    $(".simplegallery" + visaid).fadeIn(500);
                    $(this).addClass('active');
                } else {}
                event.stopPropagation();
            });
            $(".colorWrapper a").eq(0).trigger("click");
            
            $('.picker').click(function(){
                var rel = $(this).attr('rel');
                var index = $("ul.slides li[rel='" + rel + "'][class!='clone']").index()-1;
                var slider = $('.flexslider').data('flexslider');

                slider.flexAnimate(index); 
                $('.picker').removeClass("active");
                $(this).addClass("active");
                console.log(index + " " + rel);
                return false;
            });
        });

    </script>
</head>
<style>
    .flexslider {
        background-color: #fff;
    }

    .flexslider .slides img {
        width: auto;
        text-align: center;
        margin: 0 auto;
    }

    .flex-control-nav {
        display: none;
    }

    .btn-info {
        height: 45px;
        width: 100%;
        line-height: 45px;
        padding: 0px;
    }

    .bestseller {
        padding: 0px 0px 0px 100px;
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


    button#qty-minus {
        background-color: transparent;
        height: 45px;
        width: 40px;
        border-right: none;
        border-top: 1px solid #252525;
        border-left: 1px solid #252525;
        border-bottom: 1px solid #252525;
        line-height: 0px;
        border-radius: 0px;
    }

    input#CC-prodDetails-quantity {
        height: 45px;
        text-align: center;
        border: 1px solid #252525;
        border-radius: 0px;
    }

    #qty-minus i,
    #qty-plus i {
        font-size: 0.5em;
    }

    button#qty-plus {
        background-color: transparent;
        height: 45px;
        width: 40px;
        border-left: none;
        border-top: 1px solid #252525;
        border-right: 1px solid #252525;
        border-bottom: 1px solid #252525;
        border-radius: 0px;
        line-height: 0px;
    }

    .simplegallery {
        display: none;
    }

    .pickerWrapper {
        margin-bottom: 50px;
        position: relative;
    }

    .colorPickerTitle {
        margin-bottom: 20px;
        color: #424242 !important;
        font-family: proxima-nova;
    }

    .colorPreview {
        display: block;
        float: left;
        /*            height: 105px;*/
        margin: 0 15px 0 0;
    }

    .colorPicked {
        width: 60px;
        height: 60px;
        margin: 0 0 5px 0;
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        background-color: #ffffff;
    }

    .colorPicked img {
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
    }

    .colorPickedName {
        width: auto;
        display: inline-block;
        position: absolute;
        margin-left: 55px;
        margin-top: -35px;
    }

    .colorPickedName span {
        font-size: 15px;
    }

    .colorWrapper {
        display: table;
        margin-top: 10px;
    }

    .colorPick {
        display: -moz-inline-stack;
        display: inline-block;
        vertical-align: top;
        zoom: 1;
        *display: inline;
        height: 30px;
        width: 50px;
        margin: 0 5px 5px 0;
        position: relative;
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
    }

    .colorPick:focus {
        box-shadow: 0 0 0 1px #666e75;
        border: 1px solid #666e75;
    }

    .colorPick img {
        height: 100%;
        width: 100%;
        margin: 0;
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
    }

    .colorPick span {
        display: none;
    }

    .colorPick:hover {
        cursor: pointer;
    }

    .colorPickerBottomDivider {
        display: block;
        border: 0;
        height: 1px;
        background: #d1d1c8;
    }

    .accordion {
        max-width: 100%;
        border-botton: 1px solid #ebebeb;
    }

    .accordion li {
        border-bottom: 1px solid #ebebeb;
        position: relative;
        list-style: none;
    }

    .accordion li p {
        display: none;
        color: #252525;
        font-size: 14px;
    }

    .accordion a {
        width: 100%;
        display: block;
        cursor: pointer;
        line-height: 3;
        /*        text-indent: 15px;*/
        font-weight: bold;
        user-select: none;
        color: #252525;
        text-decoration: none;
        margin-top: 10px;
    }

    .accordion a:after {
        width: 8px;
        height: 8px;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        position: absolute;
        right: 10px;
        content: " ";
        top: 17px;
        transform: rotate(-45deg);
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }


    .accordion a.active:after {
        transform: rotate(45deg);
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .side_sharelike .wishlist_product {
        top: 0px;
    }

    @media (max-width:1199px) {
        .bestseller {
            padding: 0px 0px 0px 50px;
        }
    }

    @media (max-width:991px) {
        .flexslider .slides img {
            width: 100%;
        }

        .bestseller {
            padding: 0px 0px 0px 10px;
        }

    }

</style>

<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">
        <div class="wrapper_pad">

            <div class="row">
                <div class="col">
                    <div class="crop_bread">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="product_index.php">Make up</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Semi Matte Lipstick </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-7">
                    <div class="slide_mobile">
                        <section id="color01" class="simplegallery">
                            <div class="flexslider mb-3">
                                <ul class="slides">
                                    <li rel="1">
                                        <a href="images/productinside_test.png" data-fancybox="images">
                                            <img src="images/productinside_test.png" alt="" />
                                        </a>

                                    </li>
                                    
                                    
                                    <li rel="2">
                                        <a href="images/productinside_test2.png" data-fancybox="images">
                                            <img src="images/productinside_test2.png" alt="" />
                                        </a>

                                    </li>
                     
                                   
                                    
                                    <li rel="3">
                                        <a href="images/product_size/2in1brown.png" data-fancybox="images">
                                            <img src="images/product_size/2in1brown.png" alt="" />
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="product_inside_details">
                        <div class="row">
                            <div class="col-10 col-xl-9">
                                <h2>Semi Matte Lipstick </h2>
                                <h4>$990 </h4>
                            </div>
                            <div class="col-2 col-xl-3">
                                <div class="side_sharelike">

                                    <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="images/wishlist_black.svg"></a></div>
                                </div>
                            </div>
                        </div>



                        <hr>
                        <div class="mt-3">
                            <div class="multitext_color"><b>Color :</b></div>
                            <div class="pickerWrapper">
                                <div class="colorPreview">
                                    <!--<div id="selectedColor" class="colorPicked"></div>-->
                                    <div id="colorName" class="colorPickedName"></div>
                                </div>
                                <div class="colorWrapper">
                                    <a href="#color01" class="colorPick picker" rel="1">
                                        <div class="color1"></div> <span> Maroon / No.1 47 SAR</span>
                                        <div class="numbercolor">
                                            No. 1 : Base
                                        </div>
                                    </a>
                                    <a href="#color02" class="colorPick picker" rel="2">
                                        <div class="color2"></div> <span>Red Apple / No.1 47 SAR</span>
                                         <div class="numbercolor">
                                             No. 1 : Base
                                        </div>
                                    </a>
                                    <a href="#color03" class="colorPick picker" rel="3">
                                        <div class="color3"></div><span>Cherry / No.1 47 SAR</span>
                                         <div class="numbercolor">
                                             No. 1 : Base
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="multitext_color"><b>Weight : </b> 3.5 Gram</div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="multitext_color mt-3 mb-3"><b>Qty</b></div>
                        <div class="row">
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="qty_box">
                                    <div class="input-group"> <span class="input-group-btn">
                                            <button id="qty-minus" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </span>
                                        <input id="CC-prodDetails-quantity" type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100"> <span class="input-group-btn">
                                            <button id="qty-plus" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </span> </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-6 col-xl-8 mt-3 mt-md-0">
                                <a href="#" class="btn btn-info">Add to bag</a>
                            </div>
                        </div>


                        <hr>


                        <div class="accordion">
                            <li> <a>Description</a>
                                <p>Create seductive, dramatic lips with the matte texture of the Semi Matte Lip. The highly pigmented formula is water-resistant for longer wear and infused rich formula to nourish and repair lips.</p>
                            </li>
                            <li> <a>Ingredient</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                            </li>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col">
                    <div class="title_section">
                        You may also like
                    </div>
                </div>
            </div>

        </div>

        <div class="row  mb-5">
            <div class="col">
                <div class="bestseller wrapper  owl-carousel owl-theme">
                    <div class="item box">
                        <div class="box_bestseller product">
                            <div class="picbest">
                                <img src="images/product_test.png" class="img-fluid">
                                <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="images/wishlist_black.svg"></a></div>
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
                                <img src="images/product_test3.png" class="img-fluid">
                                <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="images/wishlist_black.svg"></a></div>
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
                                <img src="images/product_test1.png" class="img-fluid">
                                <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="images/wishlist_black.svg"></a></div>
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
                                <img src="images/product_test1.png" class="img-fluid">
                                <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="images/wishlist_black.svg"></a></div>
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
                                <img src="images/product_test1.png" class="img-fluid">
                                <div class="wishlist_product"><a href="#" class="tooltip-bottom" data-tooltip="Add to Favorite"><img src="images/wishlist_black.svg"></a></div>
                            </div>
                            <div class="product_details_box">
                                <h4>Buate Hair conditioner</h4>
                                <h3>$28.00</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require('inc_footer.php'); ?>

    <script>
        $(window).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(){},// Fires when the slider loads the first slide
                before: function(){},// Fires asynchronously with each slider animation
                after: function(e){
                    var rel = $('.flex-active-slide').attr("rel");
                    $('.picker').removeClass("active");
                    $('.picker[rel="' + rel + '"]').addClass("active");
                },
            });
        });

    </script>
    <script>
        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        $('.btn-number').click(function(e) {
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {
                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }
                } else if (type == 'plus') {
                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }
                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').change(function() {
            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());
            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }
        });

    </script>
    <script>
        (function($) {
            $('.accordion > li:eq(0) a').addClass('active').next().slideDown();
            $('.accordion a').click(function(j) {
                var dropDown = $(this).closest('li').find('p');
                $(this).closest('.accordion').find('p').not(dropDown).slideUp();
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                } else {
                    $(this).closest('.accordion').find('a.active').removeClass('active');
                    $(this).addClass('active');
                }
                dropDown.stop(false, true).slideToggle();
                j.preventDefault();
            });
        })(jQuery);

    </script>

    <script>
        $(document).ready(function() {
            $('.bestseller').owlCarousel({
                center: false,
                stagePadding: 50,
                margin: 10,
                loop: false,
                item: 2,
                autoplay: false,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 2000,
                nav: true,
                dots: false,
                navText: ['<img src="images/arrow_left.png">', '<img src="images/arrow_right.png">'],
                navClass: ['owl-prev', 'owl-next'],
                responsive: {

                    0: {
                        items: 2,
                        slideBy: 1,
                        nav: false,
                        margin: 5,
                        stagePadding: 5,

                    },
                    600: {
                        items: 3,
                        slideBy: 1,
                        nav: false,

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

    </script>

</body>

</html>
