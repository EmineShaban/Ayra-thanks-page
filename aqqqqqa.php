<?php 
file_exists("/home/campaign/campaign/active/cdn/forms/onycostop-nailner/language-$lang.php") ? include_once("/home/campaign/campaign/active/cdn/forms/onycostop-nailner/language-$lang.php") : include_once("/home/campaign/campaign/active/cdn/forms/onycostop-nailner/language-en.php");

include_once ("/home/campaign/campaign/active/cdn/onycostop-nailner/inc/pixels/$lang-w-status.php");

include_once("/home/campaign/campaign/active/cdn/forms/status-functions.php");

?>

<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--   <base href="/cdn/onycostop/<?php echo $lang?>/"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $LANG['product_name'] ?></title>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="/cdn/onycostop/assets2/images/favicon_grey.png" type="image/png">
    <link rel="stylesheet" href="/cdn/onycostop/inc/assets-b-2.0/css/reset.css">
    <link rel="stylesheet" href="/cdn/onycostop-nailner/inc/assets-general/status.css">
    <link rel="stylesheet" href="/cdn/onycostop-nailner/inc/assets-general/status-upsels.css">

</head>

<body>
	
	<?php $trackEvent='purchase'; include_once ("/home/campaign/campaign/active/cdn/onycostop-nailner/inc/tags/$lang-w.php");?>

    <header>
        <img class="logo" src="/cdn/onycostop/inc/assets-general/img/status/LOGO FULL 1.png" alt="">
    </header>

    <?php if($form_data['billing_payment_method'] === 'cod' || $submission['paid_online'] == 1){ ?>
    <div class="status-blue">
        <h1><?php echo $LANG['thank_you_order_success'] ?></h1>
        <p><?php echo $LANG['thank_you'] ?></p>
    </div>
  <div class="thank-you-offer">
        <h2 class="promo-title"> <?php echo $LANG['thank_you_page_offer_spray_title'] ?></h2>
        
    </div>
     <div class="upsales">
           
            <?php $product = getProduct(218,0); ?>
            <div class="product-box spray" id="218">
                <div>
                    <img src="https://lesthe.com/cdn/onycostop/assets_v.4.0/images/CROSS_SPRAY.webp" alt="">
                </div>
                <h3>OnycoStop <b>Spray</b>
                </h3>
              
                <div class="product-prices">

                    <div class="price-new">
                        <?php echo $product['prices']['info_disc_pr'] ?>
                        <?php echo $LANG['billing_currency_local'] ?>
                    </div>
                </div>
                <a href="/wordpress/wp-admin/admin-post.php?action=faform_add_product&id=<?php echo $submission_id ?>&hash=<?php echo $hash ?>&product_id=218&quantity=1"
                    class="cta">
                    <?php echo $LANG['order_now'] ?>
                </a>
            </div>

            <?php $product = getProduct(215,0); ?>
            <div class="product-box cream" id="215">
                <div>
                    <img src="https://lesthe.com/cdn/onycostop/assets_v.4.0/images/CROSS_CREAM.webp" alt="">
                </div>
                <h3>OnycoStop <b> Cream</b>
                </h3>
                 
                <div class="product-prices">

                    <div class="price-new">
                        <?php echo $product['prices']['info_disc_pr'] ?>
                        <?php echo $LANG['billing_currency_local'] ?>
                    </div>
                </div>
                <a href="/wordpress/wp-admin/admin-post.php?action=faform_add_product&id=<?php echo $submission_id ?>&hash=<?php echo $hash ?>&product_id=215&quantity=1"
                    class="cta">
                    <?php echo $LANG['order_now'] ?>
                </a>
            </div>
        </div>

  

    <div class="thank-you-offer-success">
        <h2 class="highlight"><?php echo $LANG['thank_you_page_offer_spray_success'] ?></h2>
        <img class="check-ico" src="/cdn/onycostop/inc/assets-general/img/status/check-04.png" alt="">
    </div><!-- END .thank-you-offer-success -->

    <div class="order-info">
        <p><?php echo $LANG['thank_you_order_info_title'] ?></p>
        <p><?php echo $LANG['thank_you_confirmation_mail_sent'] ?></p>

        <ul>
            <li><?php echo $LANG['thank_you_order_process_time'] ?></li>
            <li><?php echo $LANG['thank_you_order_delivery_hours'] ?></li>
            <li><?php echo $LANG['thank_you_delivery_free'] ?></li>
        </ul>

        <?php } else { ?>
        <!-- Submission is paid by card/pp -->
        <div class="status-orange">
            <h1><?php echo $LANG['thank_you_order_saved'] ?></h1>
            <p><?php echo $LANG['thank_you_order_processing'] ?></p>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <?php } ?>

        <div class="table-grid">
            <fieldset class="customer-details">
                <h2><?php echo $LANG['thank_you_customer_details'] ?></h2>
                <table>
                    <tr>
                        <th><?php echo $LANG['order_form_name'] ?></th>
                        <td><?php echo $form_data['billing_fname']?></td>
                    </tr>
                    <tr>
                        <th><?php echo $LANG['order_form_city'] ?>, <?php echo $LANG['order_form_zip'] ?></th>
                        <td><?php echo $form_data['billing_city'] .  " , " . $form_data['billing_zip'] ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $LANG['order_form_address'] ?></th>
                        <td><?php echo $form_data['billing_address']?></td>
                    </tr>
                    <tr>
                        <th><?php echo $LANG['order_form_phone'] ?></th>
                        <td><?php echo $form_data['billing_phone']?></td>
                    </tr>
                    <tr>
                        <th><?php echo $LANG['order_form_email'] ?></th>
                        <td><?php echo $form_data['billing_email']?></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
                <h2><?php echo $LANG['thank_you_cart_details'] ?></h2>
                <table class="summary">
                    <tr>
                        <th> <?php echo $LANG['thank_you_product'] ?> </th>
                        <th class="center"> <?php echo $LANG['quantity'] ?> </th>
                        <th class="center"><?php echo $LANG['thank_you_your_price'] ?> </th>
                    </tr>

                    <?php 
			      foreach( $cart_data as $k=>$item ){
			        if($k !== "total" && isset($item['price']) ){
			          $prices = getProduct($item['product_id'],0);
			          echo "<tr><td>".$PRODUCTS[$item["product_id"]]->name."</td><td>".$item['quantity']."</td><td>".($item['price']-$item['coupon-discount'])."</td></tr>";			        }
			      }
	                  ?>
                    <tr class="total">
                        <th> <?php echo $LANG['price_total'] ?> </th>
                        <th></th>
                        <th><?php echo $cart_data['total']['price'] ?> <?php echo $LANG['billing_currency_local'] ?>
                        </th>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>

    <footer>
        <img class="logo" src="https://lesthe.com//cdn/onycostop/assets_v.4.0/images/white_logo_onyco.svg" alt="">
        <p class="all_rights">All rights reserved © OnycoStop Pro </p>

    </footer>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>






    <script src="/cdn/ayra/inc/assets-general/js/timer.js"></script>


    <script src='/cdn/js/fa_events.js'></script>
    <script>
        fa_get_data('Lead');
    </script>

</body>

</html>