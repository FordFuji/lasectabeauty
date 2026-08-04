<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>

<style>
    .border_black {
        padding: 20px;
        border: 1px solid #252525;
        position: relative;
        background-color: white;
    }
    @media (max-width:767px){
        .btn-info,
        .btn-warning{
            width: 100%;
        }
    }

</style>

<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">
        <div class="row">
            <div class="col">
                <div class="banner_cart2">
                    <div class="wrapper_pad">
                        <div class="banner_text">
                            <h1>Order confirmation</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_pad">
            <div class="row mt-5 mt-lg-0 mt-lg-5">
                <div class="col">
                    <div class="border_black">
                        <div class="ty_bg">
                            <h1>Thank you for your order</h1><br>
                            <h3>Your order number : <?php if(!empty($orderDetailCtrl)) echo $orderDetailCtrl->order_no;?></h3><br>
                            <p><!-- Please make your payment within 24 hours. <br>
                                Once you have made the payment or after you have sent us the bank transfer receipt, <br>
                                you should receive the tracking number from us once the package is shipped. Thank you. -->
                                You should receive the tracking number from La Secta Beauty by email once the package is shipped . Thank you        
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <center>
            <div class="btn_cart mt-5 mb-5">
                <div class="row">
                    <div class="col">
                        <a href="<?php echo site_url();?>" class="btn btn-warning">Continue Shopping</a>
<?php
if($this->session->userdata('member_id') != '') {
?>
                        <a href="<?php echo site_frontend('member_order.php');?>" class="btn btn-info mt-3 mt-md-0">View my order</a>
<?php
}
?>
                    </div>

                </div>


            </div>
            </center>

        </div>
    </div>

    <?php require('inc_footer.php'); ?>


</body>

</html>
