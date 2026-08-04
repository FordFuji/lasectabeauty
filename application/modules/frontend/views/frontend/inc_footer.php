<style>
    .footer_logo {
        font-family: 'baskervvilleregular';
        color: #ffffff;
        text-transform: uppercase;
    }

    .footer_menu {
        margin-top: 30px;
    }

    .footer_menu ul h4 {
        color: #ffffff;
        text-transform: uppercase;
        font-size: 0.9em;
        letter-spacing: 2px;
    }

    .footer_menu li {
        list-style: none;
        display: block;
        text-transform: uppercase;
        font-size: 0.8em;
        letter-spacing: 1px;
        padding-top: 7px;
    }

    .footer_menu a {
        color: #b8b8b8;
    }

    .copyr {
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.8em;
    }

    .privacy ul li {
        list-style: none;
        display: inline-block;
        padding-right: 20px;
        font-size: 0.8em;
        letter-spacing: 2px;

    }

    .privacy {
        float: right;
    }

    .footer_social a,
    .privacy a {
        color: #ffffff;
    }

    .footer_social li {
        display: inline-block;
        list-style: none;
        padding-right: 20px;
    }

    .footer_social {
        margin-top: 30px;
    }


    @media (max-width: 991px) {
        .privacy {
            float: left;
        }

        .privacy ul li {
            display:block;
            padding-top: 7px;
         
        }
        .footer_logo{
            font-size: 1.5em;
        }
    }

</style>

<div class="container-fluid nopad">
    <div class="row">
        <div class="col">
            <div class="footerbg">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col">
                            <h2 class="footer_logo"><?php echo get2Lang($this->session->userdata('lang'), 'La Secta Beauty', 'لاسكتا بيوتي');?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer_menu">
                                <ul>
                                    <h4 class="text_bold"><?php echo get2Lang($this->session->userdata('lang'), 'Shop', 'تسوق
');?></h4>
                                    <li><a href="<?php echo site_url('frontend/path/product_index/1');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Make up', 'المكياج
');?></a></li>
                                    <li><a href="<?php echo site_url('frontend/path/product_index/2');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Skin care', 'العناية بالبشرة
');?></a></li>
                                    <li><a href="<?php echo site_url('frontend/path/product_index/3');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Hair care', 'العناية بالشعر');?></a></li>
                                    <li><a href="<?php echo site_url('frontend/path/product_index/4');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Accessories', 'اكسسوارات');?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer_menu">
                                <ul>
                                    <h4 class="text_bold"><?php echo get2Lang($this->session->userdata('lang'), 'About La Secta beauty', 'من نحن');?></h4>
                                    <li><a href="<?php echo site_frontend('about.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Our story', 'قصتنا');?></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer_menu">
                                <ul>
                                    <h4 class="text_bold"><?php echo get2Lang($this->session->userdata('lang'), 'Customer Care', 'خدمة العملاء');?></h4>
                                    <li><a href="<?php echo site_frontend('howtoorder.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'How to order', 'كيفية الطلب
');?></a></li>
                                    <li><a href="<?php echo site_frontend('shipping.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Shipping', 'الشحن');?></a></li>
                                    <li><a href="<?php echo site_frontend('faqs.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'FAQs', 'أسئلة وأجوبة');?></a></li>
                                    <li><a href="<?php echo site_frontend('contact.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Contact', 'تواصل معنا');?></a></li>
                                    <li><a href="<?php echo site_frontend('payment_confirm.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'Payment Confirm', 'تأكيد عملية الدفع');?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer_social">
                                <ul>
                                    <li><a href="https://www.facebook.com/lasectabeauty/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/lasectabeauty/" target="_blank"> <i class="fab fa-instagram"></i></a></li>
                                    <!-- <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li> -->
                                    <li><a href="https://www.youtube.com/channel/UCaunxdBxEX3W1EQX-3yYdK" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 ">
                         <div class="col d-block d-sm-block d-md-block d-lg-none d-xl-none">
                            <div class="privacy">
                                <ul>
                                    <li><a href="<?php echo site_frontend('privacy.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'PRIVACY POLICY', 'سياسة الخصوصية');?></a></li>
                                    <li><a href="<?php echo site_frontend('terms.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'TERMS OF USE', 'شروط الاستخدام');?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 mt-lg-5">
                        <div class="col-lg-7 copyr">
                            <?php echo get2Lang($this->session->userdata('lang'), '©2019 La Secta beauty ALL RIGHTS RESERVED', 'لاسكتا بيوتي 2019© جميع الحقوق محفوظة');?>
                        </div>
                        <div class="col-lg-5">
                        	
                            <div class="privacy d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                <ul>
                                    <li><a href="<?php echo site_frontend('privacy.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'PRIVACY POLICY', 'سياسة الخصوصية');?></a></li>
                                    <li><a href="<?php echo site_frontend('terms.php');?>"><?php echo get2Lang($this->session->userdata('lang'), 'TERMS OF USE', 'شروط الاستخدام');?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
