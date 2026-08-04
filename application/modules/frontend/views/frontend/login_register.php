<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .formaddress .form-control {
        border-radius: 0px;
        border-color: #000;
    }

    /*Tabs Plugin*/

    .tab-container {
        -webkit-animation: grow 0.8s cubic-bezier(0, 0.69, 0.39, 1) both;
        animation: grow 0.8s cubic-bezier(0, 0.69, 0.39, 1) both;
        position: relative;
        margin: 30px auto;
        width: 100%;
        background-color: white;
    }

    .tab-container * {
        box-sizing: border-box;

    }

    .tab-container label {
        font-family: 'baskervvilleregular';
        font-variant: lining-nums;
        display: inline-block;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        height: auto;
        line-height: 50px;
        border-radius: 0px;
        padding: 10px 40px;
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
        -webkit-tap-highlight-color: transparent;
        -webkit-user-select: none;
    }

    .tab-container label>img {
        width: 30px;
        margin-top: -10px;
    }

    .tab-container label:not([for='tab-1']) {
        margin-left: -8px;
    }

    input[name='tabs'] {
        display: none;
    }

    section[id^='content-tab'] {
        clear: both;
        padding-top: 10px;
    }

    [id^="tab"]:not(:checked)+label {



        color: #303030;
        background-color: #d6d6d6;
        font-size: 1.1em;

    }

    [id^="tab"]:checked+label {
        font-size: 1.1em;
        color: white;
        background-color: #000;

    }

    /*Placeholders*/

    #tab-1:checked~#content-tab-1,
    #tab-1:checked~#content-tab-1 .content-wrapper,
    #tab-1:not(:checked)~#content-tab-1,
    #tab-2:checked~#content-tab-2,
    #tab-2:checked~#content-tab-2 .content-wrapper,
    #tab-2:not(:checked)~#content-tab-2,
    #tab-3:checked~#content-tab-3,
    #tab-3:checked~#content-tab-3 .content-wrapper,
    #tab-3:not(:checked)~#content-tab-3,
    #tab-4:checked~#content-tab-4,
    #tab-4:checked~#content-tab-4 .content-wrapper,
    #tab-4:not(:checked)~#content-tab-4 {
        will-change: transform, opacity;
        line-height: 30px;
    }

    #tab-1~#content-tab-1,
    #tab-2~#content-tab-2,
    #tab-3~#content-tab-3,
    #tab-3~#content-tab-4 {
        height: 100%;
        visibility: visible;
        display: block;
        padding: 10px;
        border-radius: 0px;
        margin-top: -5px;
    }

    #tab-1:checked~#content-tab-1,
    #tab-2:checked~#content-tab-2,
    #tab-3:checked~#content-tab-3,
    #tab-4:checked~#content-tab-4 {
        height: auto;
        -webkit-animation: grow 0.5s ease both;
        animation: grow 0.5s ease both;
        border-top: 1px solid white;
    }

    #tab-1:checked~#content-tab-1 .content-wrapper,
    #tab-2:checked~#content-tab-2 .content-wrapper,
    #tab-3:checked~#content-tab-3 .content-wrapper,
    #tab-4:checked~#content-tab-4 .content-wrapper {
        -webkit-animation: enter 0.8s ease both;
        animation: enter 0.8s ease both;
        background-color: white;
        margin: -10px;
        margin-top: -17px;
        padding: 20px;
        box-shadow: 0 5px 14px -1px rgba(55, 65, 67, .2);

    }

    #tab-1:not(:checked)~#content-tab-1,
    #tab-2:not(:checked)~#content-tab-2,
    #tab-3:not(:checked)~#content-tab-3,
    #tab-4:not(:checked)~#content-tab-4 {
        top: 40px;
        position: absolute;
        -webkit-animation: leave 0.5s ease both, hide 0.6s ease both;
        animation: leave 0.5s ease both, hide 0.6s ease both;
    }

    /*Each Content Tab*/
    /*Keyframes*/

    @-webkit-keyframes hide {
        0% {
            height: auto;
            visibility: visible;
        }

        99% {
            height: auto;
        }

        100% {
            height: 0;
            visibility: hidden;
        }
    }

    @keyframes hide {
        0% {
            height: auto;
            visibility: visible;
        }

        99% {
            height: auto;
        }

        100% {
            height: 0;
            visibility: hidden;
        }
    }

    @-webkit-keyframes leave {
        0% {
            -webkit-transform: translate(0);
            transform: translate(0);
            opacity: 1;
        }

        100% {
            -webkit-transform: translate(0, 10px);
            transform: translate(0, 10px);
            opacity: 0;
        }
    }

    @keyframes leave {
        0% {
            -webkit-transform: translate(0);
            transform: translate(0);
            opacity: 1;
        }

        100% {
            -webkit-transform: translate(0, 10px);
            transform: translate(0, 10px);
            opacity: 0;
        }
    }

    @-webkit-keyframes grow {

        0%,
        30% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            opacity: 0;
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes grow {

        0%,
        30% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            opacity: 0;
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @-webkit-keyframes shrink {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            opacity: 0;
        }
    }

    @keyframes shrink {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            opacity: 0;
        }
    }

    @-webkit-keyframes enter {

        0%,
        60% {
            -webkit-transform: translate(0, -5px);
            transform: translate(0, -5px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translate(0);
            transform: translate(0);
            opacity: 1;
        }
    }

    @keyframes enter {

        0%,
        60% {
            -webkit-transform: translate(0, -5px);
            transform: translate(0, -5px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translate(0);
            transform: translate(0);
            opacity: 1;
        }
    }

    @-webkit-keyframes fade-in {

        0%,
        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes fade-in {

        0%,
        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes display-none {

        0%,
        100% {
            display: none;
        }
    }

    @keyframes display-none {

        0%,
        100% {
            display: none;
        }
    }

    [data-toggle="collapse"] .fa:before {
        content: "\f139";
    }

    [data-toggle="collapse"].collapsed .fa:before {
        content: "\f13a";
    }



    .bg-white {
        padding: 20px;
    }

    .form_select label {
        padding-top: 20px;
        line-height: 10px;
        padding-left: 8px;
    }

    .styled-checkbox {
        position: absolute;
        opacity: 0;
    }

    .styled-checkbox+label {
        position: relative;
        cursor: pointer;
        padding: 0;
        font-size: 1em;
        font-family: 'brandon_grotesqueregular';

    }

    .styled-checkbox+label:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        width: 18px;
        height: 18px;
        background: #ebebeb;
        border-radius: 3px;
    }

    .styled-checkbox:disabled+label {
        color: #b8b8b8;
        cursor: auto;
    }

    .styled-checkbox:disabled+label:before {
        box-shadow: none;
        background: #000;

    }

    .styled-checkbox:checked+label:before {
        background-color: #000;

    }

    .styled-checkbox:checked+label:after {
        content: '';
        position: absolute;
        left: 4px;
        top: 21px;
        background: #ffffff;
        width: 3px;
        height: 3px;
        box-shadow: 2px 0 0 #ffffff, 4px 0 0 #ffffff, 4px -2px 0 #ffffff, 4px -4px 0 #ffffff, 4px -6px 0 #ffffff, 4px -8px 0 #ffffff;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .content_intab h2 {
        font-family: 'baskervvilleregular';

    }

    .labelname {
        padding-top: 10px;
        padding-bottom: 10px;
        position: relative;
        display: block;
    }

    .content_intab .btn-info {
       
    }

    .content_intab .btn-success {
        background-color: #3b5998;
        border-color: #3b5998;
        border-radius: 0px;
        font-family: 'brandon_grotesquebold';
        text-transform: uppercase;
        font-size: 1em;
        padding: 15px 45px;
        letter-spacing: 2px;
    }

</style>

<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">

        <div class="wrapper_pad">

            <div class="row">
                <div class="col">
                    <div class="tab-container">
                        <input id="tab-1" type="radio" name="tabs" checked="" />
                        <label for="tab-1" onclick=""><?php echo get2Lang($this->session->userdata('lang'), 'Login', 'تسجيل الدخول');?></label>
                        <input id="tab-2" type="radio" name="tabs" />
                        <label for="tab-2" onclick=""><?php echo get2Lang($this->session->userdata('lang'), 'Register', 'إنشاء حساب');?></label>

                        <section class="tab-content" id="content-tab-1">
                            <div class="content-wrapper">
                                <div class="content_intab">
                                	<form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col">
                                                    <h2><?php echo get2Lang($this->session->userdata('lang'), 'Login', 'تسجيل الدخول');?></h2>
                                                    <p><?php echo get2Lang($this->session->userdata('lang'), 'Log in to check out faster and track your orders in My Account.', 'قم بتسجيل الدخول للدفع بشكل أسرع وتتبع شحنتك في (حسابي)');?></p>
                                                    <div class="formaddress">
                                                        <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Email Address', 'عنوان البريد الإلكتروني');?></span>
                                                        <input id="member_email" name="member_email" type="email" class="form-control input-md" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Type you email address', 'Type you email address(Ar)');?>" required>
                                                        <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Password', 'كلمة السر');?></span>
                                                        <input type="password" class="form-control" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'Password', 'كلمة السر');?>" aria-label="Password" aria-describedby="basic-addon2" name="member_password" id="member_password" required>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <input class="styled-checkbox" id="styled-checkbox-1" name="remember" type="checkbox" value="value1">
                                                    <label for="styled-checkbox-1" style="margin-left:0px;"><?php echo get2Lang($this->session->userdata('lang'), 'Remember', 'تذكر');?></label>
                                                </div>
                                                <div class="col-md-6 text-md-right">
                                                    <a href="<?php echo site_frontend('reset_password.php');?>" class="resetpass smtxt"><?php echo get2Lang($this->session->userdata('lang'), 'Forget your password ?', 'هل نسيت كلمة السر؟');?> </a>
                                                </div>
                                            </div>

                                            <input type="submit" name="login_member" class="btn btn-info" style="width:100%;" value="<?php echo get2Lang($this->session->userdata('lang'), 'Login', 'تسجيل الدخول');?>">
                                            <br>
                                            <span class="orsign"><?php echo get2Lang($this->session->userdata('lang'), 'or sign in with', 'أو تسجيل الدخول باستخدام');?></span>
                                            <br>
                                            <a href="javascript:fbLogin();" class="btn btn-success" style="width:100%;"><i class="fab fa-facebook" style="font-size:1.5em;"></i> <?php echo get2Lang($this->session->userdata('lang'), 'Facebook', 'Facebook');?></a>

                                        </div>
                                        <div class="col-lg-6 mt-4 mt-lg-0 text-center">
                                            <img src="<?php echo base_frontend('images/login_pic.png');?>" class="img-fluid">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <section class="tab-content" id="content-tab-2">
                            <div class="content-wrapper">
                                <div class="content_intab">
                                    <div class="row">
                                        <div class="col">
                                            <h2><?php echo get2Lang($this->session->userdata('lang'), 'Register', 'إنشاء حساب');?></h2>
                                            <p>
                                                <?php echo get2Lang($this->session->userdata('lang'), 'Please register below to create an account', 'من فضلك سجل بالأسفل لإنشاء حساب جديد');?></p>
                                        </div>
                                    </div>

									<form action="" method="post" onsubmit="return confirmPassword();">
                                    <div class="formaddress">
                                        <div class="row">
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'First Name', 'الاسم الأول');?> </span>
                                                <input id="textinput" name="member_first_name" type="text" class="form-control input-md" required> </div>
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Last Name', 'الاسم الأخير');?></span>
                                                <input id="textinput" name="member_last_name" type="text" class="form-control input-md" required> </div>
                                        </div> 
                                       
                                        <div class="row">
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Phone Number', 'رقم الجوال');?></span>
                                                <input id="textinput" name="member_phone_number" type="text" class="form-control input-md" required>
                                            </div>
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Email Address', 'عنوان البريد الإلكتروني');?></span>
                                                <input id="textinput" name="member_email" type="email" class="form-control input-md" required>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Password', 'كلمة السر');?></span>
                                                <input name="member_password" id="member_password" type="password" class="form-control input-md" required>
                                            </div>
                                            <div class="col-12 col-lg-6"> <span class="labelname"><?php echo get2Lang($this->session->userdata('lang'), 'Password Confirmation', 'تأكيد كلمة السر');?></span>
                                                <input name="member_confirm_password" id="member_confirm_password" type="password" class="form-control input-md" required>
                                            </div>
                                        </div>


                                        <br>
                                        <input class="styled-checkbox" id="non-disabled" type="checkbox" value="value2" onclick="showButton();">
                                        <label for="non-disabled" style="margin-left:0px;"><?php echo get2Lang($this->session->userdata('lang'), 'Accept', 'موافق/موافقة');?> <a href="#" class="removeitem"><?php echo get2Lang($this->session->userdata('lang'), 'Terms and Conditions', 'أوافق على الشروط والأحكام'
);?></a></label>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                 <input type="submit" name="register_submit" id="register_submit" class="btn btn-info" style="width:100%; display: none;" value="<?php echo get2Lang($this->session->userdata('lang'), 'Register', 'إنشاء حساب');?>">
                                            <br>
                                            <span class="orsign"><?php echo get2Lang($this->session->userdata('lang'), 'or register with', 'أو إنشاء حساب باستخدام');?></span>
                                            <br>
                                            <a href="javascript:fbLogin();" class="btn btn-success" style="width:100%;"><i class="fab fa-facebook" style="font-size:1.5em;"></i> <?php echo get2Lang($this->session->userdata('lang'), 'Facebook', 'Facebook');?></a>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </section>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php require('inc_footer.php'); ?>

	<script>
		function showButton() {
			if($("#non-disabled").is(':checked') == true) {
				$("#register_submit").show();
			}
		}
	
		function confirmPassword() {
			if($("#member_password").val() != '' && $("#member_confirm_password").val() != '') {
				if($("#member_password").val() != $("#member_confirm_password").val()) {
					alert('<?php echo get2Lang($this->session->userdata("lang"), "Incorrect Confirm Password", "Incorrect Confirm Password(Ar)");?>');
					
					$("#member_password").val('');
					$("#member_confirm_password").val('');
				
					return false;
				} else {
					return true;
				}
			}
		}
	</script>

    <script type="text/javascript">
    var token = "";
        var userId = "";

        window.fbAsyncInit = function(){
            FB.init({
                // ใส่่ App ID
                appId: '1553004638212957',
                status: false,
                cookie: false,
                xfbml: true
            });
            FB.Event.subscribe('auth.authResponseChange',function(response){
                console.log(response);
                //Logout-unauthen
                if(response.authResponse == null | response.status == "unknow"){
                    return;
                }
                token = response.authResponse.accessToken;
                userId = response.authResponse.userID;
                if(response.status === 'connected'){

                }else if(response.status === 'not_authorized'){
                    FB.login(function() { scope: 'pubile_actions'});
                }else{
                    FB.login(function() { scope: 'pubile_actions'});
                }
            });
        };
        // Load the SDK asynchronously
        (function(d){
            var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if(d.getElementById(id)){
                //console.log(7);
                return;
            }
            js = d.createElement('script');
            js.id = id; js.async = true;
            js.src = "https://connect.facebook.net/en_US/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));

        var loginProfile = {};
        
        // เรียกใช้ function fbLogin ตรงคลิกลิงก์
        function fbLogin(){
            FB.login(function(response){
                if(response.authResponse){
                    access_token = response.authResponse.accessToken;
                    user_id = response.authResponse.user_ID;
                    FB.api('/me', { locale: 'en_US', fields: 'name, email, gender,locale,picture' },
                        function(response){
                        console.log('EMAIL : '+response.email);
                        console.log(response);
                        var id      = response.id;
                        var name    = response.name;
                        var email   = response.email;
                        var gender  = response.gender;
                        var locale  = response.locale;
                        var picture = response.picture['data']['url'];
                        
                        // ใช้เป็น ajax
                        $.ajaxSetup({
                            async: true
                        });
                         
                        $.ajax('<?php echo site_url("frontend/path/ajaxLoginFacebook");?>', {
                            type: 'POST',
                            data: {
                                'id'            : id,
                                'name'          : name,
                                'email'         : email,
                                'gender'        : gender,
                                'locale'        : locale,
                                'picture'       : picture
                            },
                            dataType: 'html',
                            success: function(data) {
                                window.location.href = '<?php echo site_url('frontend/path/member_account');?>';
                            }
                        });
                        // End ใช้เป็น ajax
                    });
                }else{

                }
            },{
                scope: 'public_profile, email'
            }); 
        }
    </script>
</body>

</html>
