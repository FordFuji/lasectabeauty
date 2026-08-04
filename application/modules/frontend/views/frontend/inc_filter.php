<style>

   
    .panel-group {
        position: relative;
    }

    .panel-heading .accordion-toggle:after {
        width: 8px;
        height: 8px;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        position: absolute;
        top: 5px;
        right: 10px;
        content: " ";
        transform: rotate(-45deg);
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .panel-heading .accordion-toggle.collapsed:after {
        transform: rotate(45deg);
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .accordion-toggle {
        color: #252525;
    }

    .accordion-toggle h3 {
        font-size: 1em;
        margin-bottom: 10px;
        margin-top: 10px;
        font-family: 'brandon_grotesquemedium';

    }

    .accordion-toggle h3:hover {
        color: #252525;
    }

    .scroll-box {
        width: 100%;
        height: 230px;
        overflow-y: scroll;
    }

    .scroll-box::-webkit-scrollbar {
        width: .2em;
        background-color: #ebebeb;
    }

    .scroll-box::-webkit-scrollbar,
    .scroll-box::-webkit-scrollbar-thumb {
        overflow: visible;
        border-radius: 4px;
    }

    .scroll-box::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, .2);
    }

    .cover-bar {
        position: absolute;
        background: #ebebeb;
        height: 100%;
        top: 0;
        right: 0;
        width: .2em;
        -webkit-transition: all .5s;
        opacity: 1;
    }

    /* MAGIC HAPPENS HERE */

    .scroll-bar-wrap:hover .cover-bar {
        opacity: 0;
        -webkit-transition: all .5s;
    }


    /*  MOBILE  */

    .sliding-panel-content {
        position: fixed;
        top: 0px;
        right: auto;
        bottom: 0px;
        left: 0px;
        height: 100%;
        width: 280px;
        -webkit-transform: translateX(-280px);
        -moz-transform: translateX(-280px);
        -ms-transform: translateX(-280px);
        -o-transform: translateX(-280px);
        transform: translateX(-280px);
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        transition: all 0.25s linear;
        background: white;
        z-index: 999999;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
    }

    .sliding-panel-content ul {
        padding: 0;
        margin: 0;
    }

    .sliding-panel-content li {
        list-style: none;
        padding: 5px 10px;
    }

    .sliding-panel-content li a {
        border-bottom: 1px solid #eeeeee;
        color: black;
        display: block;
        /*        padding: 1em;*/
        text-decoration: none;
        font-size: 0.9em;
    }

    .sliding-panel-content li a:focus {
        background-color: #4d4d4d;
    }

    .sliding-panel-content li a:hover {
        background-color: #477DCA;
        color: #fff;
    }

    .sliding-panel-content.is-visible {
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
    }

    .sliding-panel-fade-screen {
        position: fixed;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        -webkit-transition: all 0.15s ease-out 0s;
        -moz-transition: all 0.15s ease-out 0s;
        transition: all 0.15s ease-out 0s;
        background: black;
        opacity: 0;
        visibility: hidden;
        z-index: 999998;
    }

    .sliding-panel-fade-screen.is-visible {
        opacity: 0.4;
        visibility: visible;
    }

    .sliding-panel-button {
        display: inline-block;
        cursor: pointer;
        position: relative;
        outline: none;
        background-color: transparent;
        border: 1px solid #252525;
        color: #252525;
        padding: 10px;
        font-size: 1em;
        letter-spacing: 1px;
        vertical-align: middle;
        width: 100%;
        margin-bottom: 30px;
    }

    .filter-pink {
        background-color: #252525;
        color: white;
        padding: 10px;
        font-size: 1em;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding-left: 25px;
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

    .panel-body li {
        list-style: none;
    }

    .side-product-menu {
        margin-bottom: 20px;
    }




    .filter_left {
        border: 1px solid #252525;
        background-color: #ffffff;
        
    }

    .borderside {
     padding: 0px 20px;

    }

    .seemore {
        color: #676767;
        text-decoration: underline;
        font-size: 12px;
        margin-bottom: 20px;
        margin-top: 10px;
        display: block;
    }

  
    .title_section h3{
        background-color: #000000;
        color: white;
        padding: 10px;
    }
    .borderbot{
        border-bottom: 1px solid #000000;
    }
</style>
<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <div class="filter_left">
        <div class="title_section">
            <h3><?php echo get2Lang($this->session->userdata('lang'), 'Filter', 'ب تصفية');?></h3>
        </div>
        <div class="borderside">
            <ul class="side-product-menu">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <h3><?php echo get2Lang($this->session->userdata('lang'), 'Category', 'القسم');?></h3>
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapsed in">
                            <div class="panel-body">
                                <li>
                                    <input class="styled-checkbox" id="category_id1" type="checkbox" value="1" onclick="filterProduct();">
                                    <label for="category_id1"><?php echo get2Lang($this->session->userdata('lang'), 'Make up', 'االمكياج');?> <span class="lightgray">(<?php echo $this->model_frontend->sumProductByCategory(1);?>)</span></label>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="category_id2" type="checkbox" value="2" onclick="filterProduct();">
                                    <label for="category_id2"><?php echo get2Lang($this->session->userdata('lang'), 'Skin care', 'العناية بالبشرة');?> <span class="lightgray">(<?php echo $this->model_frontend->sumProductByCategory(2);?>)</span></label>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="category_id3" type="checkbox" value="3" onclick="filterProduct();">
                                    <label for="category_id3"><?php echo get2Lang($this->session->userdata('lang'), 'Hair care', 'لعناية بالشعر');?> <span class="lightgray">(<?php echo $this->model_frontend->sumProductByCategory(3);?>)</span></label>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="category_id4" type="checkbox" value="4" onclick="filterProduct();">
                                    <label for="category_id4"><?php echo get2Lang($this->session->userdata('lang'), 'Accessories', 'اكسسوارات');?> <span class="lightgray">(<?php echo $this->model_frontend->sumProductByCategory(4);?>)</span></label>
                                </li>


                            </div>
                        </div>
                        <div class="borderbot"></div>
                    </div>
                </div>
            </ul>
        </div>
        <div class="borderside">
            <ul class="side-product-menu">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                <h3><?php echo get2Lang($this->session->userdata('lang'), 'Price Range', 'حدود السعر');?></h3>
                            </a>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <li>
                                    <input class="styled-checkbox" id="price_1_100" type="checkbox" value="1-500" onclick="filterProduct();">
                                    <label for="price_1_100">1 - 500 <span class="lightgray">(<?php echo $this->model_frontend->sumProductByPrice('1-500');?>)</span></label>
                                </li>
                                <li>
                                    <input class="styled-checkbox" id="price_500_100" type="checkbox" value="500-1000" onclick="filterProduct();">
                                    <label for="price_500_100">500 - 1,000 <span class="lightgray">(<?php echo $this->model_frontend->sumProductByPrice('500-1000');?>)</span></label>
                                </li>
								<li>
                                    <input class="styled-checkbox" id="price_1000" type="checkbox" value="1000" onclick="filterProduct();">
                                    <label for="price_1000">< 1,000 <span class="lightgray">(<?php echo $this->model_frontend->sumProductByPrice('1000');?>)</span></label>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>

    </div>

</div>

<!-- <div class="mobilefilter d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <button type="button" class="js-menu-trigger sliding-panel-button"> <i class="fas fa-filter"></i> Filter search </button>
    <nav class="js-menu sliding-panel-content">
        <div class="filter-pink">Shop by category</div>
        <li>
            <input class="styled-checkbox" id="mobile_category_id1" type="checkbox" value="1" onclick="filterProduct();">
            <label for="mobile_category_id1">Make up <span class="lightgray">(<?php echo $this->model_frontend->sumProductByCategory(1);?>)</span></label>
        </li>
        <li>
            <input class="styled-checkbox" id="mobile_category_id2" type="checkbox" value="2" onclick="filterProduct();">
            <label for="mobile_category_id2">Skin care <span class="lightgray">(<?php echo $this->model_frontend->sumProductByCategory(2);?>)</span></label>
        </li>
        <li>
            <input class="styled-checkbox" id="mobile_category_id3" type="checkbox" value="3" onclick="filterProduct();">
            <label for="mobile_category_id3">Hair care <span class="lightgray">(<?php echo $this->model_frontend->sumProductByCategory(3);?>)</span></label>
        </li>
        <li>
            <input class="styled-checkbox" id="mobile_category_id4" type="checkbox" value="4" onclick="filterProduct();">
            <label for="mobile_category_id4">Accessories <span class="lightgray">(<?php echo $this->model_frontend->sumProductByCategory(4);?>)</span></label>
        </li>
       
        <div class="filter-pink">Price range</div>
        <li>
            <input class="styled-checkbox" id="mobile_price_1_500" type="checkbox" value="1-500" onclick="filterProduct();">
            <label for="mobile_price_1_500">1 - 500 <span class="lightgray">(<?php echo $this->model_frontend->sumProductByPrice('1-500');?>)</span></label>
        </li>
        <li>
            <input class="styled-checkbox" id="mobile_price_500_1000" type="checkbox" value="500-1000" onclick="filterProduct();">
            <label for="mobile_price_500_1000">500 - 1,000 <span class="lightgray">(<?php echo $this->model_frontend->sumProductByPrice('500-1000');?>)</span></label>
        </li>
        <li>
            <input class="styled-checkbox" id="mobile_price_1000" type="checkbox" value="1000" onclick="filterProduct();">
            <label for="mobile_price_1000">500 - 1,000 <span class="lightgray">(<?php echo $this->model_frontend->sumProductByPrice('1000');?>)</span></label>
        </li>


    </nav>
    <div class="js-menu-screen sliding-panel-fade-screen"></div>
</div> -->



<script>
    $(document).ready(function() {
        $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart', function(e) {
            $('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
            e.preventDefault();
        });
    });

	function filterProduct(offset = '') {
		if($("#category_id1").is(':checked') == true) {
			category_id1 = 'true';
		} else {
			category_id1 = false;	
		}
		
		if($("#category_id2").is(':checked') == true) {
			category_id2 = 'true';
		} else {
			category_id2 = false;	
		}
		
		if($("#category_id3").is(':checked') == true) {
			category_id3 = 'true';
		} else {
			category_id3 = false;	
		}
		
		if($("#category_id4").is(':checked') == true) {
			category_id4 = 'true';
		} else {
			category_id4 = false;	
		}
		
		if($("#mobile_category_id1").is(':checked') == true) {
			mobile_category_id1 = 'true';
		} else {
			mobile_category_id1 = false;	
		}
		
		if($("#mobile_category_id2").is(':checked') == true) {
			mobile_category_id2 = 'true';
		} else {
			mobile_category_id2 = false;	
		}
		
		if($("#mobile_category_id3").is(':checked') == true) {
			mobile_category_id3 = 'true';
		} else {
			mobile_category_id3 = false;	
		}
		
		if($("#mobile_category_id4").is(':checked') == true) {
			mobile_category_id4 = 'true';
		} else {
			mobile_category_id4 = false;	
		}
		
		if($("#price_1_500").is(':checked') == true) {
			price_1_500 = 'true';
		} else {
			price_1_500 = false;	
		}
		
		if($("#price_500_100").is(':checked') == true) {
			price_500_100 = 'true';
		} else {
			price_500_100 = false;	
		}
		
		if($("#price_1000").is(':checked') == true) {
			price_1000 = 'true';
		} else {
			price_1000 = false;	
		}
		
		if($("#mobile_price_1_500").is(':checked') == true) {
			mobile_price_1_500 = 'true';
		} else {
			mobile_price_1_500 = false;	
		}
		
		if($("#mobile_price_500_1000").is(':checked') == true) {
			mobile_price_500_1000 = 'true';
		} else {
			mobile_price_500_1000 = false;	
		}
		
		if($("#mobile_price_1000").is(':checked') == true) {
			mobile_price_1000 = 'true';
		} else {
			mobile_price_1000 = false;	
		}
		
		$.post('<?php echo site_url("frontend/path/ajaxFilterProduct");?>', { category_id1: category_id1, category_id2: category_id2, category_id3: category_id3, category_id4: category_id4, mobile_category_id1: mobile_category_id1, mobile_category_id2: mobile_category_id2, mobile_category_id3: mobile_category_id3, mobile_category_id4: mobile_category_id4, price_1_500: price_1_500, price_500_100: price_500_100, price_1000: price_1000, mobile_price_1_500: mobile_price_1_500, mobile_price_500_1000: mobile_price_500_1000, mobile_price_1000: mobile_price_1000, offset: offset, order_by: $("#sort_by").val(), category_id: '<?php echo $category_id;?>' }, function(data) {
			var data_split = data.split('!@#$%^&*()');
			
			$("#ajaxProductFilter").html(data_split[0]);
			$("#pagination").html(data_split[1]);	
		});
	}
</script>
