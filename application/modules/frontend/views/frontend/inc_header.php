<?php
	if(empty($_title)) 			$_title ='La secta Beauty';
	if(empty($_keywords)) 		$_keywords ='La secta Beauty';
	if(empty($_description)) 	$_description ='La secta Beauty';
?>
    <title>
        <?php echo $_title;?>
    </title>
    <meta name="keywords" content="<?php echo $_keywords;?>" />
    <meta name="description" content="<?php echo $_description;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="Brackets">
    <meta name='copyright' content='Orange Technology Solution co.,ltd.'>
    <meta name='designer' content='Netthakan O.'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css" href="<?php echo base_frontend('css/bootstrap.min.css');?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_frontend('css/layout.css');?>" />
    <link type="image/ico" rel="shortcut icon" href="<?php echo base_frontend('images/favicon.ico');?>">
    <link rel="stylesheet" href="<?php echo base_frontend('woocommerce-FlexSlider-0690ec2/flexslider.css');?>">
    <link rel="stylesheet" href="<?php echo base_frontend('OwlCarousel/dist/assets/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_frontend('OwlCarousel/dist/assets/owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_frontend('css/jquery-ui.css');?>">
    <link rel="stylesheet" href="<?php echo base_frontend('fancybox-master/dist/jquery.fancybox.css');?>" />
    <link rel="stylesheet" href="<?php echo base_frontend('css/menu_nav.css');?>">
    <link rel="stylesheet" href="<?php echo base_frontend('css/input-radio-style.css');?>">
    <link rel="stylesheet" href="<?php echo base_frontend('scrollbar-plugin/jquery.mCustomScrollbar.css');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/v4-shims.css">

    
    <script src="<?php echo base_frontend('js/jquery-3.3.1.slim.min.js');?>"></script>
    <script src="<?php echo base_frontend('js/jquery.min.js');?>"></script>
    <script src="<?php echo base_frontend('js/jquery-ui.js');?>"></script>
    <script src="<?php echo base_frontend('js/popper.min.js');?>"></script>
    <script src="<?php echo base_frontend('js/bootstrap.min.js');?>"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.12.0/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.12.0/js/v4-shims.js"></script>
    <script src="<?php echo base_frontend('woocommerce-FlexSlider-0690ec2/jquery.flexslider.js');?>"></script>
    <script src="<?php echo base_frontend('woocommerce-FlexSlider-0690ec2/demo/js/modernizr.js');?>"></script>
    <script src="<?php echo base_frontend('OwlCarousel/dist/owl.carousel.min.js');?>"></script>
    <script src="<?php echo base_frontend('fancybox-master/dist/jquery.fancybox.min.js');?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<?php $scrollbar = base_frontend('scrollbar-plugin/js/minified/jquery-1.11.0.min.js');?>
    <script>
        window.jQuery || document.write('<script src="<?php echo $scrollbar;?>"><\/script>')
    </script>
    <script src="<?php echo base_frontend('scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js');?>"></script>
	 <script>
        (function ($) {
            $(window).load(function () {

                $("a[rel='load-content']").click(function (e) {
                    e.preventDefault();
                    var url = $(this).attr("href");
                    $.get(url, function (data) {
                        $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
                        //scroll-to appended content 
                        $(".content").mCustomScrollbar("scrollTo", "h2:last");
                    });
                });

                $(".content").delegate("a[href='top']", "click", function (e) {
                    e.preventDefault();
                    $(".content").mCustomScrollbar("scrollTo", $(this).attr("href"));
                });

            });
        })(jQuery);
    </script>
 <script>
  $(document).ready(function() {
   // Show or hide the sticky footer button
   $(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
     $('.go-top').fadeIn(300);
    } else {
     $('.go-top').fadeOut(300);
    }
   });

   // Animate the scroll to top
   $('.go-top').click(function(event) {
    event.preventDefault();

    $('html, body').animate({
     scrollTop: 0
    }, 800);
   })
  });

 </script>
 
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161829637-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161829637-1');
</script>

 <a href="#" class="go-top">  <span><i class="fas fa-angle-up"></i></span>  <br> TOP </a>