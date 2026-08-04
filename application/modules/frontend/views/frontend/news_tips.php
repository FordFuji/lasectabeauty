<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>


<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">
        <div class="row">
            <div class="col">
                <div class="banner_tips">
                    <div class="wrapper_pad">
                        <div class="banner_text">
                            <h1><?php echo get2Lang($this->session->userdata('lang'), 'News & Tips', 'الأخبار والنصائح');?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_pad mb-5">
            <div class="row">
<?php
if(!empty($newsCtrl)) {
	foreach($newsCtrl as $r) {
		
?>
                <div class="col-md-6 col-lg-4">
                    <div class="box_newstip mt-5">
                        <div class="newstip_pic">
                            <div class="hoverstyle">
                                <figure>
                                    <a href="<?php echo site_url('frontend/path/newstips_inside/'.$r->news_tips_data_id);?>">
                                        <img src="<?php echo base_url('uploads/news_tips_data/'.$r->news_tips_data_image);?>" class="img-fluid">
                                        <span class="tag_new"><?php echo $r->news_tips_data_type;?></span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="news_title mt-4">
                            <h2><?php echo $r->news_tips_data_name;?></h2>
                            <p><?php echo $r->news_tips_data_description;?></p>
                            <a href="<?php echo site_url('frontend/path/newstips_inside/'.$r->news_tips_data_id);?>" class="readmore">Read more</a>
                        </div>
                    </div>
                </div>
<?php
	}
}

/*
?>
                <div class="col-md-6 col-lg-4">
                    <div class="box_newstip mt-5">
                        <div class="newstip_pic">
                            <div class="hoverstyle">
                                <figure>
                                    <a href="<?php echo site_frontend('newstips_inside.php');?>">
                                        <img src="<?php echo base_frontend('images/newsandtips_05.png');?>" class="img-fluid">
                                        <span class="tag_new">NEWS</span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="news_title mt-4">
                            <h2>The edit tips</h2>
                            <p>All the handbag styles you need to rock this fall. </p>
                            <a href="<?php echo site_frontend('newstips_inside.php');?>" class="readmore">Read more</a>
                        </div>
                    </div>

                </div>
       
                <div class="col-md-6 col-lg-4">
                    <div class="box_newstip mt-5">
                        <div class="newstip_pic">
                            <div class="hoverstyle">
                                <figure>
                                    <a href="<?php echo site_frontend('newstips_inside.php');?>">
                                        <img src="<?php echo base_frontend('images/newsandtips_05.png');?>" class="img-fluid">
                                        <span class="tag_new">NEWS</span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="news_title mt-4">
                            <h2>The edit tips</h2>
                            <p>All the handbag styles you need to rock this fall. </p>
                            <a href="<?php echo site_frontend('newstips_inside.php');?>" class="readmore">Read more</a>
                        </div>
                    </div>

                </div>
       
                <div class="col-md-6 col-lg-4">
                    <div class="box_newstip mt-5">
                        <div class="newstip_pic">
                            <div class="hoverstyle">
                                <figure>
                                    <a href="<?php echo site_frontend('newstips_inside.php');?>">
                                        <img src="<?php echo base_frontend('images/newsandtips_05.png');?>" class="img-fluid">
                                        <span class="tag_new">NEWS</span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="news_title mt-4">
                            <h2>The edit tips</h2>
                            <p>All the handbag styles you need to rock this fall. </p>
                            <a href="<?php echo site_frontend('newstips_inside.php');?>" class="readmore">Read more</a>
                        </div>
                    </div>

                </div>
       
                <div class="col-md-6 col-lg-4">
                    <div class="box_newstip mt-5">
                        <div class="newstip_pic">
                            <div class="hoverstyle">
                                <figure>
                                    <a href="<?php echo site_frontend('newstips_inside.php');?>">
                                        <img src="<?php echo base_frontend('images/newsandtips_05.png');?>" class="img-fluid">
                                        <span class="tag_new">TIPS</span>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="news_title mt-4">
                            <h2>The edit tips</h2>
                            <p>All the handbag styles you need to rock this fall. </p>
                            <a href="<?php echo site_frontend('newstips_inside.php');?>" class="readmore">Read more</a>
                        </div>
                    </div>

                </div>
       
                <div class="col-md-6 col-lg-4">
                    <div class="box_newstip mt-5">
                        <div class="newstip_pic">
                             <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
                                <button id="play" class="play-btn"> <i class="fas fa-play"></i> </button> <img class="card-img-top img-fluid" src="<?php echo base_frontend('images/newsandtips_07.png');?>" />
                            </a>
                        </div>
                        <div class="news_title mt-4">
                            <h2>The edit tips</h2>
                            <p>All the handbag styles you need to rock this fall. </p>
                            <a href="<?php echo site_frontend('newstips_inside.php');?>" class="readmore">Read more</a>
                        </div>
                    </div>

                </div>
<?php
*/
?>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>


</body>

</html>
