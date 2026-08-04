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
                     
                    $.ajax('login_face.php', {
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
                            location.reload();
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

<a href="javascript:void(0)" onclick="fbLogin();">
    <i class="fa fa-facebook fa-lg"></i> Login with facebook
</a>