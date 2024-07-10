<?php 
file_exists("/home/campaign/campaign/active/cdn/forms/ayra/language-$lang.php") ? include_once("/home/campaign/campaign/active/cdn/forms/ayra/language-$lang.php") : include_once("/home/campaign/campaign/active/cdn/forms/ayra/language-en.php");

include_once("/home/campaign/campaign/active/cdn/forms/status-functions.php");

?>

<!DOCTYPE html>

<html lang="<?php echo $LANG['lang'] ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/cdn/ayra/inc/assets-order-v2/css/reset.css">
    <link rel="stylesheet" href="/cdn/ayra/inc/assets-general/css/status-v2.css">

    <link rel="icon" type="image/x-icon" href="/cdn/ayra/inc/assets-w-1.0/img/favicon.png">

    <title><?php echo $LANG['product_name'] ?></title>
</head>

<body>
	<?php $trackEvent='purchase'; include_once ("/home/campaign/campaign/active/cdn/ayra/inc/tags/$lang-w.php");?>
	
	
	
    <header>
        <img class="logo" src="/cdn/ayra/inc/assets-general/images/logo.png" alt="">
    </header>

    <?php if($form_data['billing_payment_method'] === 'cod' || $submission['paid_online'] == 1){ ?>
    <div class="status-grey">
        <h1><?php echo $LANG['thank_you'] ?></h1>
        <p><?php echo $LANG['thank_you_order_success'] ?></p>
    </div>

    <div class="order-info">
        <img src="/cdn/ayra/inc/assets-general/images//hands-ico.png" alt="">
        <p><?php echo $LANG['thank_you_order_info_title'] ?></p>

        <p><?php echo $LANG['thank_you_confirmation_mail_sent'] ?> <img src="/cdn/ayra/inc/assets-general/images/check-ico.png" alt=""></p>

         <ul>
            <li>&#x2022; <?php echo $LANG['thank_you_order_process_time'] ?></li>
            <li>&#x2022; <?php echo $LANG['thank_you_order_delivery_hours'] ?></li>
            <li>&#x2022; <?php echo $LANG['thank_you_delivery_free'] ?></li>
        </ul>

    	<?php } else { ?>
	    <!-- Submission is paid by card/pp -->
    	    <div class="status-orange">
    			<h1><?php echo $LANG['thank_you_order_saved'] ?></h1>
    			<p><?php echo $LANG['thank_you_order_processing'] ?></p>
    			<div class="clear"></div>
    		</div>  		
    		
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
                        <th><?php echo $LANG['thank_you_product'] ?></th>
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
                        <th> <?php echo $LANG['price_total'] ?></th>
                        <th></th>
                        <th><?php echo $cart_data['total']['price'] ?> <?php echo $LANG['billing_currency_local'] ?>
                        </th>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>

    <footer>
       <img class="logo" src="/cdn/ayra/inc/assets-general/images//logo.png" alt="">
    </footer>

    <script src='/cdn/js/fa_events.js'></script>
    <script>
        fa_get_data('Lead');
    </script>
</body>

</html>