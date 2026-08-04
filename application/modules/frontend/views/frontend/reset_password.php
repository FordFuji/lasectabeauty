<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>


    .left_vertical {
        transform: rotate(-90deg);
        transform-origin: left center 0;
        white-space: nowrap;
        position: absolute;
        top: 60%;
        left: -5%;
        letter-spacing: 5px;
        font-family: 'Poppins';
        text-transform: uppercase;
        font-size: 0.7em;
        font-weight: 600;

    }

    .border_black {
        position: relative;
        padding: 50px;
    }


    .formaddress {
        padding: 0px;
        margin-top: 10px;
    }


    .btn-info{
        width: 30%;
    }
    @media (max-width: 767px) {

        .border_black {
            position: relative;
            padding: 20px;
        }
        .btn-info {
            width: 100%;
        }
    }

</style>

<body>

    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <div class="title_section text-center">
                        <h2> Reset your password</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
					<form action="" method="post">
                    <div class="border_black">
                        <!--
                         <div class="left_vertical">
                       Confirm Payment
                   </div>
-->
                        Type in your email address below and we'll send you an email with <br> instructions on how to create a new password
                        <div class="formaddress">
                            <div class="row">
                                <div class="col"> <span class="labelname">Email Address</span>
                                    <input id="member_email" name="member_email" type="email" class="form-control input-md" placeholder="Type you email address" required> 
                                </div>
                            </div>
                        </div>



                        <br>

                        <input type="submit" name="submit_forgot_password" class="btn btn-info" value="Reset your password">

                    </div>
                    </form>
                </div>

            </div>


        </div>

    </div>
    <?php require('inc_footer.php'); ?>

    <script>
        $(document).ready(function() {
            $(function() {
                $('.datepicker').datepicker({
                    dateFormat: 'dd/mm/yy',
                    showButtonPanel: false,
                    changeMonth: false,
                    changeYear: false,
                    /*showOn: "button",
                                                                                                     buttonImage: "images/calendar.gif",
                                                                                                     buttonImageOnly: true,
                                                                                                     minDate: '+1D',
                                                                                                     maxDate: '+3M',*/
                    inline: true
                });
            });
            $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['January', 'Februaly', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Sathurday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thr', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);
        });

    </script>



</body>

</html>
