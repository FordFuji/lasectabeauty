<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<style>
    body{
        background-image: url(<?php echo base_frontend('images/marble1.png');?>);
        width: 100%;
        background-size: cover;
    }    
</style>

<body>
    <?php require('inc_topmenu.php'); ?>
<?php
if($this->session->userdata('lang') == 'en') {
?>
    <div class="container-fluid nopad">
        <div class="row">
            <div class="col-lg-6 wrapper_pad">
                <div class="pic_abt1">
                    <img src="<?php echo base_frontend('images/about_05.png');?>" class="img-fluid">
                </div>
                <div class="bg_abt_pic"></div>
<!--
                <div class="vert_box">
                    <div class="vert_text">
                        A b o u t   L a   s e c t a   B e a u t y
                    </div>
                </div>
-->
            </div>
            <div class="col-lg-6">
                <div class="maskbg"><img src="<?php echo base_frontend('images/watermask_1.png');?>"></div>
                <div class="content_abt">
                   <img src="<?php echo base_frontend('images/logo_abt.png');?>" class="img-fluid"> <br><br>
                    <p>La Secta is a multi-brand skin care and cosmetics store committed to the idea that a woman should be empowered to define her individual beauty ideal. We make it our job to discover the hidden gems in the world of beauty. 

 

</p>
                </div>
            </div>
        </div>
        <div class="wrapper_pad">
        <div class="row">
            <div class="col">
               <div class="pic_abt2">
                <img src="<?php echo base_frontend('images/about_10.png');?>" class="img-fluid"> 
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                 <div class="content_abt">
                    <p>Gems like Butae, a cosmetic brand that has been around since 1957. Butae is a face powder pioneer, innovating the first face powder compact in Asia in the 1950’s and they introduced pink luminescent loose face powder to the market ahead of designer brands.

 

</p>
                </div>
            </div>
        </div>
        </div>
         <div class="row">
            <div class="col">
               <div class="pic_abt3">
                <img src="<?php echo base_frontend('images/about_13.png');?>" class="img-fluid"> 
                </div>
            </div>
        </div>
         <div class="row mb-5">
            <div class="col">
                 <div class="content_abt">
                    <p>At La Secta we know that a famous brand name doesn’t always mean top quality. Finding the best quality products takes a lot of research, testing, and evaluation, especially in an oversaturated cosmetics market, and at La Secta we are doing it on your behalf, to .find the diamonds in the rough.

 

</p>
                </div>
            </div>
        </div>
   </div>
<?php
} elseif($this->session->userdata('lang') == 'ar') {
?>
   		<div class="wrapper_pad mb-5">
   			<div class="row">
                <div class="col">
                   	<div class="text_content">
                    	<div class="content mCustomScrollbar">
	تعتبر لاسكتا بيوتي ماركة متعددة فهي تهتم بالجمال والعناية بالبشرة لتمكين المرأة من اكتشاف جمالها المثالي والمتفرد. نحن نبذل كل مانملك لاكتشاف جواهر عالم الجمال المختبئة. حيث أن الجوهرة الثمينة في عالم الجمال مثل ماركة بوتيه Butaé قد تم تأسيسها عام 1957 . تُعد بوتيه رائدة في إنتاج مسحوق بودرة الوجه حيث أنها ابتكرت أولى أنواع مساحيق بودرة الوجه في آسيا في خمسينيات القرن الماضي بالإضافة إلى تقديمها وتعريفها لمصممي الماركات الأخرى بمسحوق بودرة الوجه ذو اللمعة الوردية الانسيابي. نحن نعلم جيدا هنا أن الاسم المشهور وحده لا يكفي فالجودة أهم من كل شيء. يحتاج الحصول على الجودة الأفضل الكثير من البحث والاختبار والتطوير خاصة في حالة سوق ومجال الجمال المفرط في التشبع . لذا نحن هنا في لاسكتا بيوتي نبذل ما بوسعنا نيابة عنك للعثور على الجواهر الثمينة في عالم الجمال وصقلها.
<br>
المملكة العربية السعودية.
<br>
الرقم الضريبي: 3000809133800003.
<br>
رقم خدمة العملاء: 920027712.
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
}
?>
    <?php require('inc_footer.php'); ?>

  
</body>

</html>
