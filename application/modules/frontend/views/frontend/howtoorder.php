<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><?php require('inc_header.php'); ?>
</head>


<body>
    <?php require('inc_topmenu.php'); ?>

    <div class="container-fluid nopad">
        <div class="wrapper_pad mb-5">
            <div class="row mt-5 mb-5">
                <div class="col">
                    <div class="title_section">
                     <?php echo get2Lang($this->session->userdata('lang'), 'How to order', 'كيف تطلب');?>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                   <div class="text_content">
                    <div class="content mCustomScrollbar">
                       <?php if(!empty($row)) echo get2Lang($this->session->userdata('lang'), $row->how_to_order_detail, $row->how_to_order_detail_ar);?>
                       <!-- You are provided with the content and services available on the Site in accordance with the following terms and conditions, our Privacy Policy, and other terms and policies that you may find through our Site on certain functions, features, offers or customer services, all of which are part of these Terms and Conditions.
<br><br>
Please read these Terms and any other terms of use posted on the Platform as together they form our Platform Terms governing your utilization of our Platform and Platform services. We may change these Platform Terms from time to time without notice to you by posting the updated Platform Terms on the Platform, so please be sure to check regularly for updates. When you place an Order through our Platform or the Platform Call Centre, you are deemed to have consented to the latest version of the Platform Terms then posted on our Platform. If a change in law means that we have to change our Platform Terms after you have placed an Order but before it has been fulfilled, we are obliged to apply that change to your Order. In all other cases, the version posted at the time your Order was placed will apply. If you do not agree to be bound by the Platform Terms, you should not use the Platform.
<br><br>
<b>Intellectual property :</b>
<br><br>
We grant you personal, non-transferable and revocable power to use the services we provide to you as part of the Website for the sole purpose of enabling you to use and enjoy our Services, as set forth by us and in the manner permitted by the Terms and Conditions.
<br><br>
Commercial use or use on behalf of third parties is prohibited unless expressly permitted in writing in advance. Any breach of these terms and conditions will result in the immediate cancellation of the license granted under this paragraph without notice to you and without prejudice to any other rights.
<br><br>
All copyrights, trademarks, trade names, trade appearance, designs, "features" of the website and any other form of intellectual property, materials and other rights associated with the site, including HTML code and other codes used on the website, page or image titles, Texts, illustrations, formats, logos, designs, icons, images, downloads or videos (collectively, "intellectual property") are - and remain at all times - the true ownership and right of La Secta Beauty and / or its owners For each of them, as they are protected by Saudi Arabia and the laws of trademarks and international copyright.
<br><br>
Intellectual property and all other materials displayed on our website may be accessed, displayed, downloaded and printed solely for personal, non-commercial use, as expressly authorized by us and / or licensors as third parties by La Secta Beauty.
<br><br>
But (i) provided that no modification or change of intellectual property is made in any way,
<br><br>
And (ii) not provide or provide intellectual property to any third party as a trade. No copyrights, trademarks or other proprietary rights shall be acquired at all in relation to intellectual property. You shall not be entitled to any license, right or interest in any materials or programs as an effect of your use of this website or your access to, display, download or print the intellectual property.
<br><br>
Your IP can only be used as a shopping resource. Any other use of intellectual property, including copying, editing, distribution, transmission, republishing, presentation or performance of intellectual property, is strictly prohibited.
<br><br>
La Secta Beauty is the exclusive or exclusive owner of intellectual property (as appropriate) and is exclusively licensed to the domain name saudi.lasectabeauty.com.
<br><br>
La Secta Beauty may provide content owned by third parties ("third party content") or links to third party websites ("third party websites") as a service to those interested in such information. La Secta Beauty does not monitor or endorse the content of third parties or third party sites and does not have any control over them. The inclusion of links to the content of third parties or third party sites does not imply the existence of any link or relationship between La Secta Beauty and the relevant third parties.
<br><br>
La Secta Beauty does not guarantee or endorse the accuracy or completeness of any third party content or any third party websites and does not endorse its accuracy or completeness. We are not responsible for updating or reviewing the content of third parties or third party sites. Your use of third party content and third party sites is at your own risk. And does not necessarily reflect the content of third parties, including comments by users of third party content received by La Secta Beauty , the views of the particular trustee.
<br><br>
In the light of the above, La Secta Beauty will not be liable for any reason whatsoever for third party content and / or third party websites, including but not limited to the provision of external sources, content, commercials, products, services, or any information or data Others are available on the website or from external sources.

 <br><br>

<b>Terms of Sale :</b>

 <br><br>

<b>1. Eligibility</b>
<br><br>
The purchase of products through the website is limited exclusively to parties who can legally conclude contracts on the Internet in accordance with the laws of the Saudi Arabia Kingdom.
<br><br>
In order to make purchases on the Website, you must provide your personal data, including your true name and surname, a valid mobile phone number, a valid email address, payment details, a valid billing address and other required information as scheduled. You acknowledge and warrant that the payment details you provide are valid, complete and correct, and confirm that you are the person referred to in the billing information provided.
<br><br>
The website is available only to people who meet the eligibility and e-payment requirements of those who have a valid credit card issued by a bank accepted by La Secta Beauty , and those who have authorized us to debit their credit cards for the total value of the products they purchase, including any taxes or connection charges, if any. Products purchased for personal use are to be presented as a gift only and may not be resold or used for commercial purposes or for any other commercial gain.
<br><br>
When you request the purchase of a product (s), you expressly authorize La Secta Beauty to verify your credit card and to transfer, transmit or obtain your credit card information or credit reporting information (including any updated information) to or from third parties to verify your identity and verify The validity of your credit card and the initial authorization to use the card and / or authorize individual purchases, as we deem necessary. You agree that we may use personal information you provide for the purpose of conducting the necessary checks against fraud and that such personal information may be disclosed to a credit reference or fraud and fraud agency, which may retain a record of such information.
<br>
Please refer to our Privacy Policy for information on how we use your data.

 
<br>
<b>2. Order products</b>
<br><br>
Products available on the website, including any samples or gifts with purchases that may be offered by you, are for personal use or for gifts only. You may not sell or resell any Products you buy.
<br><br>
Products for sale are subject to acceptance and availability. If, for any reason, we are unable to provide a product, we will notify you as soon as possible and we will cancel your order in full.
<br><br>
All applications are subject to acceptance. We reserve the right to refuse or cancel the request for any reason, including inaccuracies, product errors or pricing information, inability to obtain price authorization, or restrictions on delivery applicable to a particular piece, or because The requested item(s) does not meet the quality control standards we apply and is being withdrawn, or because you do not meet the eligibility criteria set out in the Terms and Conditions or any other problem we discover.
<br><br>
La Secta Beauty will keep a record of your transactions for at least ten years and will keep that record for a reasonable period.
<br><br>
Once your order is placed, you will receive an email with your order details. This email is not an acceptance of your request, but is an assurance that we have received your request.
<br><br>
One of our agents will contact you to confirm your request and if our agent cannot reach you on the number you provided upon registration you will receive an email asking you to respond to your order. Even in the absence of confirmation, the initial request will also be processed.
<br><br>
If you do not cancel your order, your application will be accepted when we have completed it. At this moment you will receive a second email to confirm that your application has been accepted and sent. Therefore, the sale contract is concluded in Saudi Arabia at the moment of approval, and the language of the contract will be Arabic. It is not the power of the payment processor, which represents a third party we use, and the carrier we nominate to accept a request on behalf of La Secta Beauty .
<br><br>
We may refuse to process a transaction for any reason and we may refuse to send to any person at any time in our sole and absolute discretion. We will not be liable to you or to any third party for withdrawing any product, including any samples or gifts, from the Website, whether or not you sell this product, nor to be responsible for our deletion, testing, review or editing. Any material or content on the Website, or we refuse to process a transaction, or to revoke or suspend any transaction after proceeding with the processing process.
<br><br>
We do everything in our power to ensure that all details on the website are accurate, but we may occasionally discover a product price error. If we detect an error in the price of a product listed in your order, we will notify you as soon as possible. We will not be obliged to accept or execute an order for an advertised product at an incorrect price, and reserve the right to cancel this order that has already been accepted or is on its way to you. If you order a product with a wrong price, we will send an email to you or call you to inform you that we have not accepted your request and / or your order has been canceled. In case you have already paid for the product (s), we will refund the full amount as soon as we can. If these products are returned and are on their way, we will process the refund as soon as we receive the products.
<br><br>
By confirming your purchase at the end of processing the order, you agree to accept and pay the full amount due for the product (s) as indicated in your order, including any delivery charges applicable to that order.

 
<br>
<b>3. Prices and payment policy</b>
<br><br>
Prices include the VAT applied on the day of your order. Any change in the applicable VAT rate will be automatically reflected in the price of the products sold by La Secta Beauty via its website.

 

VAT : <br>

Tax number: 300809133800003
<br><br>
All forms of payment by credit card are validated and authorized by the card issuer. If the credit card issuer declines the payment authorization, we will not be responsible for any delay or non-delivery. We will cancel your order and may contact you to choose an alternative payment method.
<br><br>
The data on the credit card used in the payment must match exactly the credit card holder's information, that information registered with the issuer of the card. Your payment will be approved and placed on hold when you place your order and the amount will be deducted from your account upon termination of your application. You confirm that the credit card used is your card or that you have been specifically authorized by the credit card owner to use it.
<br><br>
No credit card data will be stored, sold to or offered to or leased to any third parties except for the online payment gateway service provider we use.

 
<br>
<b>4. Delivery</b>
<br><br>
We are responsible for delivering products within Saudi Arabia, and we estimate that your order is expected to arrive within 2 to 7 business days from the day that your order is confirmed by email based on your location.
<br>
Delivery charges will be added, if any, to product prices, and will be displayed in your local currency separately on the application form during the checkout process.
<br>
If no one is available to receive the order, you will have the option to arrange an alternate delivery date or receive additional information about receiving your order from the delivery company. If you cannot receive your order on the second delivery attempt, you may have to pay an additional connection fee for any delivery attempt Other.
<br>
Orders are delivered from Saturday to Thursday, except Fridays and public holidays.

 <br><br>

<b>5. Cancellation, Return and Replacement Policy</b>
<br><br>
At La Secta Beauty, our goal is to ensure our customers' satisfaction with their purchases from us.
<br>
For the sake of your safety, La Secta Beauty does not allow the return or replacement of its products, except for products that reach you only damaged

 <br><br>

Cancellation :
<br>
We are fully aware that sometimes you may change your mind about your purchase. If you change your mind before receiving your order, you only need to contact our customer service number 00966570674043 to cancel your order, and we will do our best within reasonable limits to cancel it, provided that it has already been implemented your request.
<br><br>
If this happens, we will treat the cancellation as a return. In all cases, you can always contact our customer service, they will be happy to help you.

 <br><br>

Miscellaneous Provisions :
<br>
We reserve the right to amend these terms and conditions at any time without notice to you. Any amendments to these terms and conditions shall apply as soon as they are posted on our website. Your continued use of the Website (or any of our other websites) following such change means your consent to be bound by the modified terms and conditions. Please read the terms and conditions and see them again and again. If you do not agree to any change in the Terms and Conditions, you must immediately discontinue use of the Website.
<br><br>
These terms and conditions constitute the entire legal agreement between you and La Secta Beauty , govern and govern your use of the Website and all the services and products available to it, and supersede any previous agreements between you and La Secta Beauty on the same purpose.
<br><br>
You acknowledge and agree that the form and nature of the Services may change from time to time without prior notice to you. You may cease to provide the Services (or provide any features contained therein) to you or to users.
<br><br>
You understand and understand that La Secta Beauty grants to public search engine operators the permission to use web spiders to copy material from the site for the sole purpose of creating publicly available search engines containing the material, and La Secta Beauty reserves the right to revoke these exceptions either generally or in specific cases.
<br><br>
You understand and understand that you are solely responsible (and that La Secta Beauty is not liable to you or to any third party) for any breach of your obligations under the Terms and Conditions and the consequences (including any loss or damage you may suffer) on any such breach.
<br><br>
The failure to exercise, enforce or delay the exercise or enforcement of any right or legal remedy shall not be construed as an official waiver of the rights of nationals.
<br><br>
You and La Secta Beauty are independent contractors. These terms and conditions, including without limitation the provision, transmission, transmission or distribution of your Content, in whole or in part, do not constitute a partnership, joint venture, business, franchise or agency between you and La Secta Beauty . Neither party shall have the power to bind or charge the other party on its behalf without the prior written consent of the other party. Neither party is authorized to act as agent or representative of the other party or on behalf of the other party in any other capacity not expressly provided for in the Terms and Conditions. No party (or any of its agents) may declare that it represents the other party or is authorized to act as its representative or to consider itself as its representative. Neither party shall hold the other party any liability or obligation on its behalf or on its behalf, unless expressly provided for In these terms and conditions.
<br><br>
If any provision of these Terms and Conditions is found to be illegal or unenforceable, the other terms and conditions shall not be affected and shall remain in full force and effect.
<br><br>
These terms and conditions are available in English and Arabic. If there is any conflict between the English text and the Arabic text, the Arabic text shall prevail.
<br><br>
These terms and conditions are subject to the laws of the Kingdom of Saudi Arabia. All disputes arising from the enforcement of these Terms and Conditions shall be subject to the exclusive jurisdiction of the courts of the Kingdom of Saudi Arabia.

 
<br><br>
Your Rights :
<br>
If you have any questions about terms and conditions or any aspect of your system.
<br>
Please contact us at info@saudi.lasectabeauty.com
<br>
Customer Services : 00966570674043 -->
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc_footer.php'); ?>


</body>

</html>
