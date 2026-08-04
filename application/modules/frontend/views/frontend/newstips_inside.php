<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>


<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">
        <div class="wrapper_pad">
            <div class="row">
                <div class="col">
                    <div class="crop_bread">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"> <a href="<?php echo site_frontend('index.php');?>"> Home</a> </li>
                                <li class="breadcrumb-item"> <a href="<?php echo site_frontend('news_tips.php');?>"> News&Tips</a> </li>
                                <li class="breadcrumb-item active" aria-current="page"> <?php if(!empty($row)) echo $row->news_tips_data_name;?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <?php if(!empty($row)) echo $row->news_tips_data_detail;?>
            <!-- <div class="row">
                <div class="col">
                    <div class="title_news">
                        <span class="date">23 JAN 19</span>
                        <h1>20 OF THE BEST WINTER lipstick</h1>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col">
                    <div class="news_tips_content">
                        <img src="<?php echo base_frontend('images/newsandtips_inside_03.png');?>" class="img-fluid">
                        <br><br>
                        <p>Like pretty much every human on
                            >o, the planet I try to extend summer for as long as plausibility possible. Searching for cheap airfares during the middle of winter to warmer climates is pretty much my favourite past-time.
                            <br><br>
                            I also blame the fact that as autumn hits Europe, my entire Facebook feed is filled with smug status updates and photos of barbecues and trips to the beach from everyone back home. Even if I wanted escape summer (I don’t), I can’t.
                            <br><br>
                            This year we decided to squeeze the very last out of summer via the sunny Spanish isle that is Formentera. You come to this tiny island ( 83.24 square km to be exact) for pretty much one thing only; extreme relaxation. It’s mellow, the beaches are ridiculously good looking and it’s 30 degrees even in October.</p>
                        <br>
                        <div class="row">
                            <div class="col-lg-7">
                                <img src="<?php echo base_frontend('images/newsandtips_inside_07.png');?>" class="img-fluid">
                            </div>
                            <div class="col-lg-5">
                                <img src="<?php echo base_frontend('images/newsandtips_inside_10.png');?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> -->

        </div>

    </div>

    <?php require('inc_footer.php'); ?>


</body>

</html>
