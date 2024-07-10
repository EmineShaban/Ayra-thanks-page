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
    <link rel="stylesheet" href="https://lesthe.com/cdn/onycostop/inc/assets-b-2.0/css/reset.css">
    <link rel="stylesheet" href="https://lesthe.com/cdn/ayra/inc/assets-general/css/status-upsels.css">
    <title>
        <?php echo $LANG['product_name'] ?>
    </title>
</head>

<body>
    <?php $trackEvent='purchase'; include_once ("/home/campaign/campaign/active/cdn/ayra/inc/tags/$lang-w.php");?>


    <header>
        <img class="logo" src="https://lesthe.com/cdn/ayra/inc/assets-general/images/logo.png" alt="">
    </header>
     <div class="status-blue">
        <h1>
            <?php echo $LANG['thank_you'] ?>
        </h1>

    </div>
    <div class="successful-order">
        <img class="check-ico"
            src="https://lesthe.com/cdn/ayra/inc/assets-general/images/check-icon-check-mark-icon-vector.jpg" alt="">
        <h2>
            <?php echo $LANG['thank_you_order_success'] ?>
        </h2>
    </div>
    <div class="thank-you-offer">
        <!-- <h2 class="promo-title"> Don’t miss out on our <span> exclusive offers</span>, specially selected for YOU!</h2> -->
        <p class="timer">
            <?php echo $LANG['limited_time_deals'] ?> <br>
            <span id="minutes"></span>:<span id="seconds"></span> <span> minutes</span>
        </p>
        <!--   <h2 class="promo-title"><?php echo $LANG['thank_you_page_offer_eyecream_title'] ?></h2> -->

        <h2 class="promo-title">
            <?php echo $LANG['thank_you_page_offer_eyecream_title'] ?>
        </h2>
        <!-- <h2 class="promo-title">Don't miss our <span>exclusive offer </span> selected especially for YOU!
        </h2> -->

        <div class="upsales">
            <?php $product = getProduct(311,0); ?>
            <div class="product-box eye" id="311">
                <div>
                    <img src="https://lesthe.com/cdn/ayra/inc/assets-order-v3/images/eye-cream.png" alt="">
                </div>
                <h3>Ayra Synergy
                    <br><b> Eye Cream</b>
                </h3>
                <p>
                    <?php echo $LANG['thank_you_eye_title'] ?>
                </p>
                <div class="product-prices">

                    <div class="price-new">
                        <?php echo $product['prices']['info_disc_pr'] ?>
                        <?php echo $LANG['billing_currency_local'] ?>
                    </div>
                </div>
                <a href="/wordpress/wp-admin/admin-post.php?action=faform_add_product&id=<?php echo $submission_id ?>&hash=<?php echo $hash ?>&product_id=311&quantity=1"
                    class="a-offer">
                    <?php echo $LANG['order_now'] ?>
                </a>
            </div>

            <?php $product = getProduct(314,0); ?>
            <div class="product-box serum" id="314">
                <div>
                    <img src="https://lesthe.com/cdn/ayra/inc/assets-order-v3/images/serum.png" alt="">
                </div>
                <h3>Ayra Synergy
                    <br><b> Face Serum</b>
                </h3>
                <p>
                    <?php echo $LANG['thank_you_serum_title'] ?>
                </p>
                <div class="product-prices">

                    <div class="price-new">
                        <?php echo $product['prices']['info_disc_pr'] ?>
                        <?php echo $LANG['billing_currency_local'] ?>
                    </div>
                </div>
                <a href="/wordpress/wp-admin/admin-post.php?action=faform_add_product&id=<?php echo $submission_id ?>&hash=<?php echo $hash ?>&product_id=314&quantity=1"
                    class="a-offer">
                    <?php echo $LANG['order_now'] ?>
                </a>
            </div>

            <?php $product = getProduct(316,0); ?>
            <div class="product-box cream" id="316">
                <div>
                    <img src="https://lesthe.com/cdn/ayra/inc/assets-order-v2/img/order-v3/Ayra.png" alt="">
                </div>
                <h3>Ayra Synergy
                    <br><b> Cream</b>
                </h3>
                <p>
                    <?php echo $LANG['thank_you_cream_title'] ?>
                </p>
                <div class="product-prices">

                    <div class="price-new">
                        <?php echo $product['prices']['info_disc_pr'] ?>
                        <?php echo $LANG['billing_currency_local'] ?>
                    </div>
                </div>
                <a href="/wordpress/wp-admin/admin-post.php?action=faform_add_product&id=<?php echo $submission_id ?>&hash=<?php echo $hash ?>&product_id=316&quantity=1"
                    class="a-offer">
                    <?php echo $LANG['order_now'] ?>
                </a>
            </div>
        </div>
    </div>
 
    <div class="order-info">

        <div class="table-grid">
            <fieldset class="customer-details">
                <h2>
                    <?php echo $LANG['thank_you_customer_details'] ?>
                </h2>
                <table>
                    <tr>
                        <th>
                            <?php echo $LANG['order_form_name'] ?>
                        </th>
                        <td>
                            <?php echo $form_data['billing_fname']?>
                        </td>

                    </tr>
                    <tr>
                        <th>
                            <?php echo $LANG['order_form_city'] ?>,
                            <?php echo $LANG['order_form_zip'] ?>
                        </th>
                        <td>
                            <?php echo $form_data['billing_city'] .  " , " . $form_data['billing_zip'] ?>
                        </td>

                    </tr>
                    <tr>
                        <th>
                            <?php echo $LANG['order_form_address'] ?>
                        </th>
                        <td>
                            <?php echo $form_data['billing_address']?>
                        </td>

                    </tr>
                    <tr>
                        <th>
                            <?php echo $LANG['order_form_phone'] ?>
                        </th>
                        <td>
                            <?php echo $form_data['billing_phone']?>
                        </td>

                    </tr>
                    <tr>
                        <th>
                            <?php echo $LANG['order_form_email'] ?>
                        </th>
                        <td>
                            <?php echo $form_data['billing_email']?>
                        </td>

                    </tr>
                </table>
            </fieldset>

            <fieldset>

                <h2>
                    <?php echo $LANG['thank_you_cart_details'] ?>
                </h2>
                <table class="summary">
                    <tr>
                        <th>
                            <?php echo $LANG['thank_you_product'] ?>

                        </th>
                        <th class="center">
                            <?php echo $LANG['quantity'] ?>
                        </th>
                        <th>
                            <?php echo $LANG['price_discount'] ?>
                        </th>
                        <th class="center">
                            <?php echo $LANG['thank_you_your_price'] ?>

                        </th>
                    </tr>
                    <?php 
			      foreach( $cart_data as $k=>$item ){
			        if($k !== "total" && isset($item['price']) ){
			          $prices = getProduct($item['product_id'],0);
			          echo "<tr><td>".$PRODUCTS[$item["product_id"]]->name
                      ."</td><td>"
                      .$item['quantity']
                      ."</td><td>".$item['full-price']
                      ."</td><td>".($item['price']-$item['coupon-discount'])
                      ."</td></tr>";
			        }
			      }
			    ?>

                    <tr class="total">
                        <th>
                            <?php echo $LANG['price_total'] ?>

                        </th>
                        <th></th>
                        <th>
                            <?php echo $cart_data['total']['price'] ?>
                            <?php echo $LANG['billing_currency_local'] ?>

                        </th>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>


    <footer>
        <img class="logo" src="https://lesthe.com/cdn/ayra/inc/assets-w-2.0/img/ayra_logo.webp" alt="">
        <p class="all_rights">All rights reserved © AYRA Synergy </p>

    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $(document).ready(function () {

            // products in cart 
            let products_in_cart = <? php echo json_encode($cart_data); ?>;
            console.log(products_in_cart)
            let cream = {
                19: '316',
                22: '316',
                25: '316'
            }
            let eye = {
                36: '311'
            }
            let serum = {
                88: '314',
                122: '314',
                123: '314'
            }
            // products in cart in array
            let id_in_cart = [];

            // push product id's in array
            $.each(products_in_cart, function (i, elem) {
                if (elem.product_id) {
                    id_in_cart.push(elem.product_id);
                }
            });

            // convert id's product in string 
            id_in_cart = id_in_cart.map(String);
            console.log(id_in_cart)

            // check which ids are in cart and call function
            $.each(cream, function (index, value) {
                console.log(cream)
                if (id_in_cart.indexOf(index) > -1) {
                    hide_box(value)
                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });
            $.each(eye, function (index, value) {

                if (id_in_cart.indexOf(index) > -1) {
                    hide_box(value)
                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });

            $.each(serum, function (index, value) {
                if (id_in_cart.indexOf(index) > -1) {
                    hide_box(value)

                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });


            hide existing products 
 

            function hide_box(id) {
                $('#' + id).css("display", "none");
            }

            let hidden_boxes = $('.product-box[style*="display: none"]');

            console.log(hidden_boxes.length)
            if (hidden_boxes.length >= 4) {
                $('.thank-you-offer p').css("display", "none")
            } else if (hidden_boxes.length < 2) {

                $('.product-box').last().css("display", "none")
            }
        });
    </script>




    <script src="/cdn/ayra/inc/assets-general/js/timer.js"></script>

    <script src='/cdn/js/fa_events.js'></script>
    <script>
        fa_get_data('Lead');
    </script>
</body>

</html>