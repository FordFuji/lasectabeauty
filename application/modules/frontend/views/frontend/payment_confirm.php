<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>
<style>
    .checkbox input[type=checkbox],
    .checkbox-inline input[type=checkbox],
    .radio input[type=radio],
    .radio-inline input[type=radio] {
        margin-top: 1em;
    }

    input[type='radio'] {
        width: 15px;
        height: 15px;
    }

    .paymentbank {
        text-align: left;
    }

    .txtbank {
        padding-left: 25px;
    }

    .ui-widget {
        font-size: 1.1em;
    }

    .ui-widget .ui-widget {
        font-size: 1em;
    }

    .ui-widget input,
    .ui-widget select,
    .ui-widget textarea,
    .ui-widget button {
        font-size: 1em;
    }

    .ui-widget-content {
        border: 1px solid #555555;
        background: white;
        color: black;
    }

    .ui-widget-content a {
        color: black;
    }

    .ui-datepicker .ui-datepicker-title {
        color: white;
    }

    .ui-widget-header {
        border: 1px solid #fac4c7;
        background-color: black;
        font-weight: bold;
        background-image: none;
    }

    .ui-widget-header a {
        color: black;
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default {
        border: 1px solid #444444;
        background: white;
        font-weight: normal;
        color: black;
    }

    .ui-state-default a,
    .ui-state-default a:link,
    .ui-state-default a:visited {
        color: black;
        text-decoration: none;
    }

    .ui-state-hover,
    .ui-widget-content .ui-state-hover,
    .ui-widget-header .ui-state-hover,
    .ui-state-focus,
    .ui-widget-content .ui-state-focus,
    .ui-widget-header .ui-state-focus {
        border: 1px solid #858585;
        background: #858585;
        font-weight: normal;
        color: #ffffff;
    }

    .ui-state-hover a,
    .ui-state-hover a:hover {
        color: black;
        text-decoration: none;
    }

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active {
        border: 1px solid #858585;
        background: #858585 font-weight: normal;
        color: black;
    }

    .ui-state-active a,
    .ui-state-active a:link,
    .ui-state-active a:visited {
        color: black;
        text-decoration: none;
    }

    .ui-widget:active {
        outline: none;
    }

    .file-input-wrapper .file-input-button {
        color: #858585;
        background-color: #dddddd;
        box-sizing: border-box;
        display: inline;
        display: inline-block;
        font-size: 13px;
        font-weight: 400;
        padding-top: 3px;
        padding: 10px 20px;
        text-align: center;
        transition: color 500ms, background-color 500ms;
        -moz-transition: color 500ms, background-color 500ms;
        -webkit-transition: color 500ms, background-color 500ms;
        -o-transition: color 500ms, background-color 500ms;
        -ie-transition: color 500ms, background-color 500ms;
        margin-top: 20px;
    }

    .file-input-wrapper .file-input-button:hover {
        background-color: #858585;
        text-decoration: none;
        cursor: pointer;
        color: white;
    }

    .file-input-wrapper input {
        display: none;
    }

    .form_contact label {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .border_black {
        padding: 40px;
    }
    .wrap_menu{
        top: 0;
    }

</style>

<body>

    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <div class="title_section text-center">
                        <h2> <?php echo get2Lang($this->session->userdata('lang'), 'Payment Confimation Form', 'وثيقة اتمام الدفع');?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="border_black">
                        <form action="" method="post" enctype="multipart/form-data" onsubmit="return checkPaymentConfirm();">
                        <div class="formaddress">
                            <div class="row">
                                <div class="col">
                                    <label><?php echo get2Lang($this->session->userdata('lang'), 'Order No. ', 'رقم الطلب');?></label>
                                    <input id="order_no" name="order_no" type="text" class="form-control input-md" placeholder="<?php echo get2Lang($this->session->userdata('lang'), 'EX', 'السابق');?>:2001001"> </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <label><?php echo get2Lang($this->session->userdata('lang'), 'Payment Amount', 'مبلغ الدفع');?></label>
                                        <input id="payment_confirm_amount" name="payment_confirm_amount" type="number" step="0.01" class="form-control input-md" placeholder="20.05">
                                    </div>
                                </div>
                                <br>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <label><?php echo get2Lang($this->session->userdata('lang'), 'Payment Date', 'تاريخ الدفع');?></label>
                                        <input class="datepicker form-control" placeholder="YYYY-MM-DD" name="payment_confirm_date" id="payment_confirm_date">
                                </div>
                                <div class="col-12 col-lg-3"> 
                                     <label><?php echo get2Lang($this->session->userdata('lang'), 'Payment Hour', 'ساعة الدفع');?></label>
                                        <select id="payment_confirm_hour" name="payment_confirm_hour" class="form-control arrow_down">
                                        <option value=""><?php echo get2Lang($this->session->userdata('lang'), 'Please Select', 'من فضلك اختر');?></option>
<?php
for($i = 0; $i <= 23; $i++) {
    if(strlen($i) == 1) {
        $ii = '0'.$i;
    } else {
        $ii = $i;
    }
?>
                                        <option value="<?php echo $ii;?>"><?php echo $ii;?></option>
<?php
}
?>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-3"> 
                                     <label><?php echo get2Lang($this->session->userdata('lang'), 'Payment Minute', 'دقيقة الدفع');?></label>
                                     <select id="payment_confirm_minute" name="payment_confirm_minute" class="form-control arrow_down">
                                        <option value=""><?php echo get2Lang($this->session->userdata('lang'), 'Please Select', 'من فضلك اختر');?></option>
<?php
for($i = 0; $i <= 59; $i++) {
    if(strlen($i) == 1) {
        $ii = '0'.$i;
    } else {
        $ii = $i;
    }
?>
                                        <option value="<?php echo $ii;?>"><?php echo $ii;?></option>
<?php
}
?>
                                    </select>
                                </div>
                            </div>


                        </div>




                        <div class="file-input-wrapper">
                            <label for="payment_confirm_slip" class="file-input-button"><?php echo get2Lang($this->session->userdata('lang'), 'Browse file', 'تصفح الملف');?></label>
                            <input id="payment_confirm_slip" type="file" name="payment_confirm_slip">
                            <!-- <p>Please Click to Upload receipt (at Least 1) :</p> -->
                        </div>
                        <div>
                            <input type="submit" name="submit" class="btn btn-info" value="<?php echo get2Lang($this->session->userdata('lang'), 'Send', 'ارسال');?>">
                        </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>

    </div>
    <?php require('inc_footer.php'); ?>

    <script>
        $(document).ready(function() {
            $(function() {
                $('.datepicker').datepicker({
                    dateFormat: 'yy-mm-dd',
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

    <script>
        function checkPaymentConfirm() {
            if($("#order_no").val() == '') {
                alert('Please enter Order No');

                $("#order_no").focus();
                return false;
            } else if($("#payment_confirm_amount").val() == '') {
                alert('Please enter Payment Amount');

                $("#payment_confirm_amount").focus();
                return false;
            } else if($("#payment_confirm_date").val() == '') {
                alert('Please enter Payment Date');

                $("#payment_confirm_date").focus();
                return false;
            } else if($("#payment_confirm_hour").val() == '') {
                alert('Please enter Payment Hour');

                $("#payment_confirm_hour").focus();
                return false;
            } else if($("#payment_confirm_minute").val() == '') {
                alert('Please enter Payment Amount');

                $("#payment_confirm_minute").focus();
                return false;
            }/* else if($("#payment_confirm_slip").val() == '') {
                alert('Please Upload Slip');

                $("#payment_confirm_slip").focus();
                return false;
            }*/ else {
                return true;
            } 
        }
    </script>


</body>

</html>
