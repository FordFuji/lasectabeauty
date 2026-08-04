<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .whitebg {
        background-color: white;
        box-shadow: 0 5px 14px -1px rgba(55, 65, 67, .2);

        padding: 30px;
        margin-top: -80px;
    }

    .form_contact {
        padding: 10px;
    }

    .form_contact label {
        color: #292929;
        font-size: 1em;
        margin-top: 10px;

    }

    .redsymbol {
        color: darkred;
    }

    .btnbook {
        margin-top: 7em;
        text-align: right;
    }

    .form_contact .custom-select,
    .form_contact .form-control {
        background-color: transparent;
        border-left: none;
        border-right: none;
        border-top: none;
        border-radius: 0px;
        padding: 5px 0px;
        font-size: 14px;
    }
    
    @media (max-width:767px){
        .whitebg{
            padding: 10px;
            margin-top: 0px;
        }
    }

    
</style>

<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">
        <div class="row">
            <div class="col">
                <div class="banner_contact">
                    <div class="wrapper_pad">
                        <div class="banner_faqstxt">
                            <h1><?php echo get2Lang($this->session->userdata('lang'), 'Contact', 'تواصل معنا');?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_pad mb-5">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact_info">
                        <h2><?php echo get2Lang($this->session->userdata('lang'), 'LA SECTA BEAUTY CO.,LTD.', 'لاسكتا بيوتي المحدودة');?></h2>
                        <p>
                            <?php echo get2Lang($this->session->userdata('lang'), '47/156 Moo 2 Lampakchee, Nongjok, <br>
                            Bangkok 10530 Thailand', '47/156 Moo 2 Lampakchee, Nongjok, <br>
                            Bangkok 10530 Thailand(Ar)');?></p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="whitebg">
                    	<form action="" method="post">
                        <div class="form_contact">
                            <h2 class="text-center"><?php echo get2Lang($this->session->userdata('lang'), 'Get in touch', 'ابقى على اتصال');?></h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label><?php echo get2Lang($this->session->userdata('lang'), 'Full name', 'الاسم بالكامل');?> <span class="redsymbol">*</span></label>
                                    <input type="text" class="form-control" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Full name', 'الاسم بالكامل');?>" name="contact_full_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label><?php echo get2Lang($this->session->userdata('lang'), 'Phone number', 'رقم الجوال');?> <span class="redsymbol">*</span></label>
                                    <input type="text" class="form-control" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Phone number', 'رقم الجوال');?>" name="contact_phone_number" required>
                                </div>
                                
                                <div class="col-md-12">
                                    <label><?php echo get2Lang($this->session->userdata('lang'), 'Email', 'البريد الإلكتروني');?> <span class="redsymbol">*</span></label>
                                    <input type="text" class="form-control" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Email', 'البريد الإلكتروني');?>" name="contact_email" required>
                                </div>

                                <div class="col-md-12">
                                    <label><?php echo get2Lang($this->session->userdata('lang'), 'Subject', 'الموضوع');?></label>
                                    <input type="text" class="form-control" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Subject', 'الموضوع');?>" name="contact_subject" required>
                                </div>
                                <div class="col-md-12">
                                    <label><?php echo get2Lang($this->session->userdata('lang'), 'Message', 'رسالة');?></label>
                                    <textarea name="contact_message" id="" cols="30" rows="10" class="form-control" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Message', 'رسالة');?>" required></textarea>
                                </div>


                            </div>
                            <br>
                            <div class="btnblack">
                                 <input type="submit" class="btn btn-info" name="submit" value="<?php echo get2Lang($this->session->userdata('lang'), 'Submit', 'تأكيد');?>">
                            </div>
                        </div>
                        </form>
                    </div>
                    <p>&nbsp;</p>
                    <p align="center"><?php echo get2Lang($this->session->userdata('lang'), 'Want to be Distributer please contact ( whatsApp’chat )', 'هل تريد أن تكون أحد موزعينا؟ من فضلك راسلنا عن طريق (الواتساب)');?>
                     	<a href="https://wa.me/66639788708"><img src="<?php echo base_frontend('S__12181549.jpg');?>" width="75"></a> 
                     </p>                    
                </div>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>


</body>

</html>
