<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://lesthe.com/cdn/onycostop/inc/assets-b-2.0/css/reset.css">
    <link rel="stylesheet" href="./style/status-rework.css">
    <title>Document</title>
</head>

<body>

    <header>
        <img class="logo" src="https://lesthe.com/cdn/ayra/inc/assets-general/images/logo.png" alt="">
    </header>

    <div class="status-blue">
        <h1>
            <?php echo $LANG['thank_you'] ?>
        </h1>

    </div>
    <div class="successful-order">
        <img class="check-ico" src="./check-icon-check-mark-icon-vector.jpg" alt="">
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
        <!-- <p><?php echo $LANG['thank_you_order_info_title'] ?></p> -->
        <!-- <p>We would like to inform you that</p> -->

        <!-- <p><?php echo $LANG['thank_you_confirmation_mail_sent'] ?></p> -->
        <!-- <p>An order confirmation letter has been sent to your email.</p> -->

        <div class="table-grid">
            <fieldset class="customer-details">
                <h2>Customer details</h2>
                <table>
                    <tr>
                        <th>Full name</th>
                        <td>Iva Radeva</td>
                    </tr>
                    <tr>
                        <th>City, postal code</th>
                        <td>Sofia</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>teftftgs</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>85444254</td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="9ef7b0ecfffafbe8ffdeedb3faf7f9f7eafff2b0fbeb">[email&#160;protected]</a>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
                <!-- <legend><?php echo $LANG['thank_you_cart_details'] ?></legend> -->
                <h2>Cart details</h2>
                <table class="summary">
                    <tr>
                        <th>
                            <!-- <?php echo $LANG['thank_you_product'] ?> -->
                            Product
                        </th>
                        <th class="center">
                            <!-- <?php echo $LANG['quantity'] ?> -->
                            Quantity
                        </th>
                        <!-- <th> <?php echo $LANG['price_old'] ?> </th> -->
                        <!-- <th><?php echo $LANG['price_discount'] ?></th> -->
                        <th class="center">
                            <!-- <?php echo $LANG['thank_you_your_price'] ?> -->
                            Price
                        </th>
                    </tr>
                    <!-- <?php 
			      foreach( $cart_data as $k=>$item ){
			        if($k !== "total" && isset($item['price']) ){
			          $prices = getProduct($item['product_id'],0);
			          echo "<tr><td>".$PRODUCTS[$item["product_id"]]->name."</td><td>".$item['quantity']."</td><td>".$item['full-price']."</td><td>".($item['discount']+$item['coupon-discount'])."</td><td>".($item['price']-$item['coupon-discount'])."</td></tr>";
			        }
			      }
			    ?> -->
                    <tr>
                        <td>Ayra Synergy Face Serum x 3 </td>
                        <td class="center"> 1 </td>
                        <td class="center">75.8 </td>
                    </tr>
                    <tr>
                        <td>Ayra Synergy Eye Cream x 3 </td>
                        <td class="center"> 1 </td>
                        <td class="center">14.9 </td>
                    </tr>

                    <tr>
                        <td>Delivery</td>
                        <td class="center"> </td>
                        <td class="center">Free </td>
                    </tr>
                    <tr class="total">
                        <th>
                            <!-- <?php echo $LANG['price_total'] ?> -->
                            Total
                        </th>
                        <th></th>
                        <th>
                            <!-- <?php echo $cart_data['total']['price'] ?> <?php echo $LANG['billing_currency_local'] ?> -->
                            90.7€
                        </th>
                    </tr>
                </table>
            </fieldset>
        </div>

    </div>


    <div class="thank-you-offer-success">
        <!-- <h2 class="highlight"><?php echo $LANG['thank_you_page_offer_vitamin_e_success'] ?></h2> -->
        <h2 class="highlight">OnycoStop Pro Scrub has been <span>successfully</span> added to your order.</h2>
        <img class="check-ico" src="https://lesthe.com/cdn/onycostop/inc/assets-general/img/status/check-04.png" alt="">
    </div><!-- END .thank-you-offer-success -->



    <footer>
        <img class="logo" src="https://lesthe.com/cdn/ayra/inc/assets-w-2.0/img/ayra_logo.webp" alt="">
        <p class="all_rights">All rights reserved © AYRA Synergy </p>

    </footer>
    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(".a-offer").click(function (e) {
            e.preventDefault()
            $(".thank-you-offer").slideUp("slow")
            $(".thank-you-offer-success").slideDown("slow");
        });
    </script>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://lesthe.com//cdn/ayra/inc/assets-general/js/timer.js"></script>
    <script>
        $(document).ready(function () {

            // products in cart 
            let products_in_cart = <? php echo json_encode($cart_data); ?>;
            let depil = {
                245: '303',
                248: '303',
                251: '303'
            }

            let scrub = {
                272: '298'
            }

            let milk = {
                275: '300'
            }
            let wash = {
                279: '302'
            }

            let extra_marblelous = {
                295: '303',
                2955: '302',
            }

            let super_marblelous = {
                292: '303',
                2922: '302',
                29222: '298',
            }

            let prime_marblelous = {
                289: '303',
                2899: '302',
                28999: '298',
                289999: '300',
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

            // check which ids are in cart and call function
            $.each(depil, function (index, value) {

                if (id_in_cart.indexOf(index) > -1) {
                    hide_box(value)
                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });

            $.each(scrub, function (index, value) {

                if (id_in_cart.indexOf(index) > -1) {
                    hide_box(value)
                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });


            $.each(milk, function (index, value) {

                if (id_in_cart.indexOf(index) > -1) {
                    hide_box(value)
                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });

            $.each(wash, function (index, value) {
                if (id_in_cart.indexOf(index) > -1) {
                    hide_box(value)

                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });

            $.each(extra_marblelous, function (index, value) {
                if (id_in_cart.indexOf(index) > -1) {

                    for (const property in extra_marblelous) {
                        hide_box(`${extra_marblelous[property]}`);
                    }
                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });

            $.each(super_marblelous, function (index, value) {
                if (id_in_cart.indexOf(index) > -1) {

                    for (const property in super_marblelous) {
                        hide_box(`${super_marblelous[property]}`);
                    }
                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });

            $.each(prime_marblelous, function (index, value) {
                if (id_in_cart.indexOf(index) > -1) {

                    for (const property in prime_marblelous) {
                        hide_box(`${prime_marblelous[property]}`);
                    }
                } else if (id_in_cart.indexOf(value) > -1) {
                    hide_box(value)
                }
            });



            // hide existing products 
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











    <!--  -->
    <script src='/cdn/js/fa_events.js'></script>
    <script>
        fa_get_data('Lead');
    </script>

</body>

</html>