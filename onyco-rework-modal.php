<?php include_once ("/home/campaign/campaign/active/cdn/forms/form-functions.php");?>
 <link rel="stylesheet" href="/cdn/onycostop/inc/assets-general/rework/style/offer-modal-order.css">
<style>
    <?php echo $LANG['custom_style_bundles'] ?>
    <?php echo $LANG['custom_style'] ?>
    
    .notification-selected {
	    border: 1px solid #305086!important;
	    background-color: #36508836;
	    box-shadow: 0 31px 54px rgb(0 0 0/7%), 0 15.6938px 23.5406px rgb(0 0 0/5%), 0 6.2px 8.775px rgb(0 0 0/4%), 0 1.35625px 3.12188px rgb(0 0 0/2%);
	}
</style>

<div class="promo-bar">
    <p><?php echo $LANG['hurry_up_message'] ?> </p>
</div>
<div class="container">
    <div class="badges">
        <p><?php echo $LANG['free_delivery_badge'] ?>
            <span class="material-symbols-outlined">
                local_shipping
            </span>
        </p>
        <p><?php echo $LANG['fast_delivery_badge'] ?> <span class="material-symbols-outlined">
                acute
            </span> </p>
        <p><?php echo $LANG['secure_payment_badge'] ?> <span class="material-symbols-outlined">
                lock
            </span></p>

    </div>
</div>
<hr>
<div class="main-grid">
    <img class="on-desktop"
        src="<?php echo $LANG['order_gallery_img_1'] ?>"
        alt="">
    <div class="container options">
        <h1>OnycoStop Pro</h1>
        <p class="sub"><?php echo $LANG['natural_and_effective'] ?>

        </p>
        <div class="rating">
            <img src="/cdn/onycostop/inc/assets-general/rework/images/stars.png" alt="">
            <p><b>(4.6/5) </b><?php echo $LANG['number_of_reviews'] ?></p>
        </div>

        <h2><?php echo $LANG['select_your_option'] ?></h2>
        <div class="packs">

            <?php $product = getProduct(240,0); ?>
            <!-- BEGIN Product Box 1-->
            <label for="q1">
                <div class="pBox single-product" data-product="0" data-optional=1 <?php echo $product['meta'] ?>>
                    <input id="pbox-1" type="radio" name="pbox" />
                    <label for="pbox-1">
                        <img src="/cdn/onycostop/inc/assets-general/rework/images/1.webp"
                            alt="">
                        <div class="pack-info">
                            <div class="">
                                <div>
                                    <p><?php echo $LANG['spray'] ?></p>
                                </div>
                                <div class="price-per-day">
                                    <span><?php echo $LANG['qty_ml_1'] ?></span>
                                </div>
                            </div>

                            <div class="prices">
                                <span class="old-price"><?php echo $product['prices']['full_price'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></span>
                                <span class="price"><?php echo $product['prices']['info_disc_pr'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></span>
                            </div>
                        </div>
                    </label>
                </div>
            </label>

            <?php $product = getProduct(3,0); ?>
            <!-- BEGIN Product Box 2-->
            <label for="q2">
                <div class="pBox pBoxActive" data-product="1" data-optional=1 <?php echo $product['meta'] ?>>
                    <input id="pbox-3" type="radio" name="pbox" checked />
                    <h3><?php echo $LANG['best_offer'] ?></h3>
                    <label for="pbox-3">
                        <img src="/cdn/onycostop/inc/assets-general/rework/images/3.webp"
                            alt="">
                        <div class="pack-info">
                            <div>
                                <div>
                                    <p><?php echo $LANG['pay_2_get_3'] ?></p>
                                </div>
                                <div class="price-per-day">
                                    <span><?php echo $LANG['qty_ml_3'] ?></span>
                                </div>
                            </div>

                            <div class="prices">
                                <span class="old-price"><?php echo $product['prices']['full_price'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></span>
                                <span class="price"><?php echo $product['prices']['info_disc_pr'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></span>
                            </div>
                        </div>
                    </label>
                    <span class="per-day"><?php echo $LANG['price_per_product_3'] ?></span>
                    <p class="free-shipping">+ <?php echo $LANG['free_shipping'] ?></p>
                </div>
            </label>

            <?php $product = getProduct(4,0); ?>
            <label for="q3">
                <div class="pBox " data-product="2" data-optional=1 <?php echo $product['meta'] ?>>
                    <input id="pbox-5" type="radio" name="pbox" />
                    <h3><?php echo $LANG['best_seller'] ?></h3>
                    <label for="pbox-5">
                        <img src="/cdn/onycostop/inc/assets-general/rework/images/5.webp"
                            alt="">
                        <div class="pack-info">
                            <div class="">
                                <div>
                                    <p><?php echo $LANG['pay_3_get_5'] ?></p>
                                </div>
                                <div class="price-per-day">
                                    <span><?php echo $LANG['qty_ml_5'] ?></span>

                                </div>
                            </div>

                            <div class="prices">
                                <span class="old-price"><?php echo $product['prices']['full_price'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></span>
                                <span class="price"><?php echo $product['prices']['info_disc_pr'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></span>
                            </div>
                        </div>
                    </label>
                    <span class="per-day"> <?php echo $LANG['price_per_product_5'] ?></span>
                    <p class="free-shipping">+ <?php echo $LANG['free_shipping'] ?></p>
                </div>
            </label>
        </div>
    </div>
</div>

<div class="addon-products container">
    <h2><?php echo $LANG['enhance_your_care'] ?></h2>

    <div class="box-grid">
        <div class="box product-container">
            <?php $product = getProduct(6,0); ?>
                <p><b> <?php echo $LANG['antifungal_cream'] ?></b></p>
				<input type="checkbox" id="addon_cream" name="addon_cream" class="addonBox" data-cart-position=2 data-cart-toggle=2 data-optional=1 <?php echo $product['meta'] ?> />


                <div class="addon-box cream">
                    <span class="i" id="cream">&#x2139;</span>
                    <img src="/cdn/onycostop/inc/assets-general/rework/images/cream1.webp" alt="">
                    <div></div>
                    <div class="box-i">
                        <p> <?php echo $LANG['antifungal_cream_content'] ?></p>
                        <span class="sm-badge"> <?php echo $LANG['best_seller'] ?></span>
                    </div>
                        <?php
	                    $minVal=0;
	                    $maxVal=3;
                    ?>
                        <?php include ("/home/campaign/campaign/active/cdn/components/quantity/quantity.php");?>
                </div>
        </div>

        <!-- cream modal -->
        <div id="cream_modal" class="modal">
            <div class="popup-content">
                <img src="/cdn/onycostop/inc/assets-general/rework/images/500-500-max.png" alt="">
                <div class="modal-header">
                    <h3><?php echo $LANG['antifungal_cream'] ?></h3>
                    <span class="close">&times;</span>
                </div>
                <div class="price-ml">
                    <span>75ml</span>
                    <span><?php echo $product['prices']['info_disc_pr'] ?>
                    <?php echo $LANG['billing_currency_local'] ?></span>
                </div>
            </div>
        </div>
        <!--end cream modal  -->

        <div class="box product-container">
            <?php $product = getProduct(28,0); ?>
                <p><b><?php echo $LANG['exfoliating_scrub'] ?></b></p>
				<input type="checkbox" id="addon-scrub" name="addon-scrub" class="addonBox" data-cart-position=3 data-cart-toggle=3 data-optional=1 <?php echo $product['meta'] ?> />


                <div class="addon-box scrub">
                    <span class="i" id="scrub">&#x2139;</span>
                    <img src="/cdn/onycostop/inc/assets-general/rework/images/scrub.webp" alt="">
                    <div></div>
                    <div class="box-i">
                        <p><?php echo $LANG['exfoliating_scrub_content'] ?> </p>
                        <span class="sm-badge"><?php echo $LANG['recommended'] ?> </span>
                    </div>
                        <?php
	                    $minVal=0;
	                    $maxVal=3;
                    ?>
                        <?php include ("/home/campaign/campaign/active/cdn/components/quantity/quantity.php");?>
                </div>
        </div>

        <!-- scrub modal -->
        <div id="scrub_modal" class="modal">
            <div class="popup-content">
                <img src="/cdn/onycostop/inc/assets-general/rework/images/600-600-max (1).png" alt="">
                <div class="modal-header">
                    <h3><?php echo $LANG['exfoliating_scrub'] ?></h3>
                    <span class="close">&times;</span>
                </div>
                <div class="price-ml">
                    <span>100ml</span>
                    <span><?php echo $product['prices']['info_disc_pr'] ?>
                    <?php echo $LANG['billing_currency_local'] ?></span>

                </div>
            </div>
        </div>
        <!--end scrub modal  -->


        <div class="box product-container">
            <?php $product = getProduct(156,0); ?>
                        <p><b> <?php echo $LANG['cracked_heel_cream'] ?> </b></p>

		<input type="checkbox" id="heel-cream" name="heel-cream" class="addonBox" data-cart-position=4
                        data-cart-toggle=4 data-optional=1 <?php echo $product['meta'] ?> />

                <div class="addon-box heel">
                    <span class="i" id="heel">&#x2139;</span>
                    <img src="/cdn/onycostop/inc/assets-general/rework/images/healcream.webp" alt="">
                    <div></div>
                    <div class="box-i">
                        <p><?php echo $LANG['cracked_heel_cream_content'] ?> </p>
                        <span class="sm-badge"><?php echo $LANG['new'] ?></span>
                    </div>
                        <?php
	                    $minVal=0;
	                    $maxVal=3;
                    ?>
                        <?php include ("/home/campaign/campaign/active/cdn/components/quantity/quantity.php");?>


                </div>
        </div>

        <!-- heel modal -->
        <div id="heel_modal" class="modal">
            <div class="popup-content">
                <img src="/cdn/onycostop/inc/assets-general/rework/images/600-600-max.png" alt="">

                <div class="modal-header">
                    <h3>Cracked
                        <span>Heel Cream</span></h3>
                    <span class="close">&times;</span>
                </div>
                <div class="price-ml">
                    <span>150ml</span>
                    <span><?php echo $product['prices']['info_disc_pr'] ?>
                     <?php echo $LANG['billing_currency_local'] ?></span>

                </div>
            </div>
        </div>
        <!--end heel modal  -->
    </div>
</div>

<!-- FINAL STEP  -->
<section class="last-steps-wrapper">
    <div class="container">
        <div class="cart">
            <h2><?php echo $LANG['your_cart_details'] ?></h2>
            <div class="summary-cart-bg">
                <div class='fa-cart summary-cart'>

                    <div class="" id="fa-cart-items">
                        <div class="card card-body fa-cart-items"></div>
                    </div>
                    <table id="showProductSelect" class="summary-table prices-table">
                        <tbody>
                            <tr class="old-price">
                                <td><?php echo $LANG['price_old'] ?>:</td>
                                <td id="full_price"> <span class="symbol">
                                        <?php echo $LANG['billing_currency_local'] ?></span></td>
                            </tr>
                            <tr class="discount">
                                <td><?php echo $LANG['price_discount'] ?></td>
                                <td id="discount"><span
                                        class="symbol"><?php echo $LANG['billing_currency_local'] ?></span>
                                </td>
                            </tr>
                        <tr class="delivery">
                            <td><?php echo $LANG['price_delivery'] ?></td>
                            <td id="delivery"><?php echo $LANG['fa_free_delivery'] ?></td>

                        </tr>

                            <tr id="totalStep2">
                                <td><?php echo $LANG['price_total'] ?>:</td>
                                <td class="total"> <span
                                        class="symbol"><?php echo $LANG['billing_currency_local'] ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form class="coupon-section">
                        <div class="input-group">
                            <input id='fa_coupon' class="form-control coupon" type='text' size=10
                                value="<?php echo $_REQUEST['coupon']?>"
                                placeholder="<?php echo $LANG['coupon_apply'] ?>">
                            <button class="btn coupon"
                                onclick='FA_validateCoupon(event)'><?php echo $LANG['coupon_apply_button'] ?></button>
                            <script>
                                $(document).ready(function () {
                                    FA_validateCoupon(new Event('click'));
                                });
                            </script>
                        </div>
                        <span id='fa_coupon_status'></span>
                    </form>
                </div>
            </div>
        </div>
                <form class="user-info" name="orderform" id="orderform"
                    action="/wordpress/wp-admin/admin-post.php?action=faform_submit&fa_form_id=<?php echo $_GET['form_id']?>"
                    method="post" data-lang="<?php echo $lang ?>">

        <div class="order-details">
            <div class="order-details-title">
                <h2><?php echo $LANG['your_order_details'] ?></h2>
            </div>
            <div class="personal-info">
                    <input type="hidden" value="1" id="product_selection" name="product_selection" />
                    <input type="hidden" value="<?php echo $LANG['product_name'] ?>" id="info_product"
                        name="info_product">
                    <input type="hidden" value="<?php echo $LANG['info_sku'] ?>" name="info_sku">
                    <input type='hidden' name='billing_currency' value='<?php echo $LANG['billing_currency'] ?>'>

                    <h3><?php echo $LANG['delivery_address'] ?></h3>
                    <div>
                        <input class="input-field" id="billing_email"
                            placeholder="<?php echo $LANG['order_form_email'] ?>" type="email" name="billing_email"
                            value="" required="required" autocomplete="email"
                            data-extra-validation="fa_live_check" /><i class="fa-regular fa-circle-xmark"></i><i
                            class="fa-solid fa-circle-check"></i>
                    </div>
                    <div>
                        <input class="input-field field" id="billing_fname" type="text" name="billing_fname"
                            placeholder="<?php echo $LANG['order_form_name'] ?>" required="required" autocomplete="name"
                            data-extra-validation="fa_live_check" />
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>
                    <div>
                        <input class="input-field field" id="billing_city" type="text" name="billing_city"
                            placeholder="<?php echo $LANG['order_form_city'] ?>" value="" required="required"
                            autocomplete="locality" data-extra-validation="fa_live_check" />
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>
                    <div>
                        <input class="input-field field" id="billing_zip" type="text" name="billing_zip"
                            placeholder="<?php echo $LANG['order_form_zip'] ?>" value="" required="required"
                            autocomplete="postal-code" maxlength="20" data-extra-validation="fa_live_check" />
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>
                    <div>
                        <textarea class="input-field" id="billing_address" style="resize: none;"
                            placeholder="<?php echo $LANG['order_form_address'] ?>" type="text" name="billing_address"
                             minlength="6" required="required" autocomplete="street-address"
                            data-extra-validation="fa_live_check"></textarea><i class="fa-solid fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>
                    <div>
                        <input class="input-field" id="billing_phone" type="tel" name="billing_phone"
                            placeholder="<?php echo $LANG['order_form_phone'] ?>"
                            value="<?php echo $LANG['order_form_country_code'] ?>" minlength="5" required="required"
                            autocomplete="tel" data-extra-validation="fa_live_check" />
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>

                    <script>
                        function fa_live_check(el){
							
							if(el.validity.valid !== true){
								console.log("Field is invalid",el.closest("div"));
								 el.classList.add("incorrect");
		                         el.classList.remove("correct");
								 el.closest("div").classList.remove("correct-field");
								 el.closest("div").classList.add("incorrect-field");
							}
							else{
								el.classList.remove("incorrect");
                                el.classList.add("correct");
                                el.closest("div").classList.add("correct-field");
							}
						}
                    </script>

                    <div class="payment-method">
                        <h3><?php echo $LANG['order_form_payment_method'] ?></h3>
                        <ul>
                            <?php echo $LANG['billing_payment_methods'] ?>
                        </ul>
                        <!-- END .payment-methods -->
                    </div>
                    <div class="button-container">
                        <button  type="submit" id="btnDisable" class="submit-button-form order-btn"><?php echo $LANG['order_now'] ?></button>
                        <span><?php echo $LANG['your_information_is_secured'] ?></span>
                    </div>

            </div>
        </div>

<style>
 .is-visible{
 animation: 2s slide-right;
}
@keyframes slide-right {
  from {
    margin-left: -100%;
  }
  to {
    margin-left: 0%;
  }
}
</style>

        <div class="offers-modal-container" id="offers_modal">
                    <span class="close">&times;</span>

            <div class="offers-modal">

	   <div class="summary-cart-bg">
                <div class='fa-cart summary-cart'>

                    <div class="" id="fa-cart-items">
                        <div class="card card-body fa-cart-items"></div>
                    </div>
                    <table id="showProductSelect" class="summary-table prices-table">
                        <tbody>
                           <tr class="delivery">
                            <td><?php echo $LANG['price_delivery'] ?></td>
                            <td id="delivery"><?php echo $LANG['fa_free_delivery'] ?></td>
                        </tr>

                            <tr id="totalStep2">
                                <td><?php echo $LANG['price_total'] ?>:</td>
                                <td class="total"> <span
                                        class="symbol"><?php echo $LANG['billing_currency_local'] ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                 </div>
            </div>

                <h2 class="upsales-text"><?php echo $LANG['two_exclusive_offers'] ?></h2>

                <p class="timer"><?php echo $LANG['limited_time_deals'] ?> <br>
                    <span id="minutes"></span>:<span id="seconds"></span> <span> minutes</span> </p>

                <div class="upsales">
                    <?php $product = getProduct(215,0); ?>
                    <div class="product-box cream" id="215">

                        <div>
                            <img src="https://lesthe.com/cdn/onycostop/assets_v.4.0/images/CROSS_CREAM.webp" alt="">
                            <img class="off-img" src="/cdn/onycostop/inc/assets-general/img/status/30_percent.png"
                                alt="">
                        </div>
                        <div>
                            <h3>Onycostop Pro <b>CREAM</b></h3>
                            <p><?php echo $LANG['upsale_cream_description'] ?></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae numquam ex aut tenetur
                                distinctio
                                quasi quod vero magnam natus molestiae.</p>
                            <div class="product-prices">
                                <div class="price-old"><?php echo $product['prices']['full_price'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></div>

                                <div class="price-new"><?php echo $product['prices']['info_disc_pr'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></div>

                            </div>
                <label for="upsale_cream">
                    <input type="checkbox" id="upsale_cream" name="upsale_cream" class="upsale-checkbox" data-cart-position=2 data-cart-toggle=1 data-optional=1 <?php echo $product['meta'] ?> />
                    <div class="add-to-cart upsale_cream"><?php echo $LANG['add_to_cart'] ?></div>
                    <div class="remove-from-cart upsale_cream"> <?php echo $LANG['remove_from_cart'] ?></div>
                </label>
                        </div>
                    </div>

                    <?php $product = getProduct(136,0); ?>
                    <div class="product-box scrub" id="136">
                        <div>
                            <img src="https://lesthe.com/cdn/onycostop/assets_v.4.0/images/CROSS_SCRUB.webp" alt="">
                            <img class="off-img" src="/cdn/onycostop/inc/assets-general/img/status/25_percent.png"
                                alt="">
                        </div>
                        <div>
                            <h3>Onycostop Pro <b>SCRUB</b></h3>
                            <p><?php echo $LANG['upsale_scrub_description'] ?></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae numquam ex aut tenetur
                                distinctio
                                quasi quod vero magnam natus molestiae.</p>

                            <div class="product-prices">
                                <div class="price-old"><?php echo $product['prices']['full_price'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></div>
                                <div class="price-new"><?php echo $product['prices']['info_disc_pr'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></div>

                            </div>
                <label for="upsale_scrub">
                    <input type="checkbox" id="upsale_scrub" name="upsale_scrub" class="upsale-checkbox" data-cart-position=3 data-cart-toggle=1 data-optional=1 <?php echo $product['meta'] ?> />
                    <div class="add-to-cart upsale_scrub"><?php echo $LANG['add_to_cart'] ?></div>
                    <div class="remove-from-cart upsale_scrub"> <?php echo $LANG['remove_from_cart'] ?></div>
                </label>

                        </div>
                    </div>

                    <?php $product = getProduct(216,0); ?>
                    <div class="product-box heel" id="216">
                        <div>
                            <img src="https://lesthe.com/cdn/onycostop-nailner/assets-w/images/napukopetin.webp" alt="">
                            <img class="off-img" src="/cdn/onycostop/inc/assets-general/img/status/20_percent.png"
                                alt="">
                        </div>
                        <div>
                            <h3>Onycostop Pro <b>Heel Cream</b></h3>
                            <p><?php echo $LANG['upsale_heel_description'] ?></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae numquam ex aut tenetur
                                distinctio
                                quasi quod vero magnam natus molestiae.</p>

                            <div class="product-prices">
                                <div class="price-old"><?php echo $product['prices']['full_price'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></div>

                                <div class="price-new"><?php echo $product['prices']['info_disc_pr'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></div>
                            </div>
                          <!--  <a href="/wordpress/wp-admin/admin-post.php?action=faform_add_product&id=<?php echo $submission_id ?>&hash=<?php echo $hash ?>&product_id=216&quantity=1"
                                class="a-offer"><?php echo $LANG['thank_you_page_offer_scrub_add_to_basket'] ?></a> -->

                <label for="upsale_heel">
                    <input type="checkbox" id="upsale_heel" name="upsale_heel" class="upsale-checkbox" data-cart-position=4 data-cart-toggle=1 data-optional=2 <?php echo $product['meta'] ?> />
                    <div class="add-to-cart upsale_heel"><?php echo $LANG['add_to_cart'] ?></div>
                    <div class="remove-from-cart upsale_heel"> <?php echo $LANG['remove_from_cart'] ?></div>
                </label>

                        </div>
                    </div>

                    <?php $product = getProduct(218,0); ?>
                    <div class="product-box spray" id="218">
                        <div>
                            <img src="/cdn/onycostop/assets_v.4.0/images/CROSS_SPRAY.webp" alt="">
                            <img class="off-img" src="/cdn/onycostop/inc/assets-general/img/status/30_percent.png"
                                alt="">
                        </div>
                        <div>
                            <h3>Onycostop Pro <b>SPRAY</b></h3>
                            <p><?php echo $LANG['upsale_spray_description'] ?></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae numquam ex aut tenetur
                                distinctio
                                quasi quod vero magnam natus molestiae.</p>

                            <div class="product-prices">
                                <div class="price-old"><?php echo $product['prices']['full_price'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></div>

                                <div class="price-new"><?php echo $product['prices']['info_disc_pr'] ?>
                                    <?php echo $LANG['billing_currency_local'] ?></div>

                            </div>
                <label for="upsale_spray">
                	<input type="checkbox" id="upsale_spray" name="upsale_spray" class="upsale-checkbox" data-cart-position=5 data-cart-toggle=1 data-optional=1 <?php echo $product['meta'] ?> />
                    <div class="add-to-cart upsale_spray"><?php echo $LANG['add_to_cart'] ?></div>
                    <div class="remove-from-cart upsale_spray"> <?php echo $LANG['remove_from_cart'] ?></div>
                </label>
                        </div>
                    </div>
                </div>
                <button class="proceed-to-checkout" type="submit" id="btnDisable">Proceed to
                    checkout</button>
            </div>
        </div>
                </form>
                
                
                
    </div>
    <img class="pp-badges" src="/cdn/onycostop/inc/assets-general/rework/images/pp-badges.jpg" alt="">
</section>

<?php include_once ("/home/campaign/campaign/active/cdn/plugins/payment-popup/payment-popup.php");?>
 <script>
    $('input:radio:checked').parent().addClass("checked");
    $('input:radio').click(function () {
        $('input:not(:checked)').parent().removeClass("checked");
        $('input:checked').parent().addClass("checked");
    });
</script>


<script type="text/javascript">
    fa_billing_currency = '<?php echo $LANG['billing_currency_local']?>';
    fa_free_delivery = '<?php echo $LANG['fa_free_delivery']?>';
    jQuery(function ($) {

        $('.pBox').on('click', function () {
            $('.pBox').removeClass('pBoxActive');
            $(this).addClass('pBoxActive');
            $('.pBox .selectP').html('<?php echo $LANG['select_this_pack'] ?>');
            $(this).find('.selectP').html('<?php echo $LANG['selected_pack'] ?>');
            $("#product_selection").val($(this).attr("data-product"));
            FA_addToCart(this);

        });
        
        $('.addonBox').on('change',function(){
            checkbox = $(this);
            if(checkbox.prop("checked") != false){
                FA_addToCart(this);   
            }
            else{
                FA_removeFromCart(this);
            }
        });

        $('.upsale-checkbox').on('change',function(){
            checkbox = $(this);
            if(checkbox.prop("checked") != false){
                FA_addToCart(this);   
            }
            else{
                FA_removeFromCart(this);
            }
        });

        

        $(".pBox[data-product=1]").trigger("click");
        //$(".addonBox").trigger("click");
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#upsale_cream').change(function () {
            if ($(this).is(":checked")) {
                $(".remove-from-cart.upsale_cream").show();
                $(".add-to-cart.upsale_cream").hide();
            } else {
                $(".remove-from-cart.upsale_cream").hide();
                $(".add-to-cart.upsale_cream").show();
            }
        });

        $('#upsale_heel').change(function () {
            if ($(this).is(":checked")) {
                $(".remove-from-cart.upsale_heel").show();
                $(".add-to-cart.upsale_heel").hide();
            } else {
                $(".remove-from-cart.upsale_heel").hide();
                $(".add-to-cart.upsale_heel").show();
            }
        });

        $('#upsale_scrub').change(function () {
            if ($(this).is(":checked")) {
                $(".remove-from-cart.upsale_scrub").show();
                $(".add-to-cart.upsale_scrub").hide();
            } else {
                $(".remove-from-cart.upsale_scrub").hide();
                $(".add-to-cart.upsale_scrub").show();
            }
        });

        $('#upsale_spray').change(function () {
            if ($(this).is(":checked")) {
                $(".remove-from-cart.upsale_spray").show();
                $(".add-to-cart.upsale_spray").hide();
            } else {
                $(".remove-from-cart.upsale_spray").hide();
                $(".add-to-cart.upsale_spray").show();
            }
        });


    });
</script>


<script type='text/javascript' src="https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js"></script>

<script type="text/javascript">
var FA_product_deselected = '<?php echo $LANG['select_this_pack'] ?>';
var FA_product_selected = '<?php echo $LANG['selected_pack'] ?>';
function setTemplateFields(e){
	values = {
    	template_regular_pr : $(".pBoxActive").data('full-price') + ' <?php echo $LANG['billing_currency']?>',
    	template_disc_pr: $(".pBoxActive").data('price') + ' <?php echo $LANG['billing_currency']?>',
    	template_quantity: $(".pBoxActive").data('quantity'),
    	template_saved: $(".pBoxActive").data('discount') + ' <?php echo $LANG['billing_currency']?>',
    	info_disc_pr:  $(".pBoxActive").data('price'),
    	info_quantity: $(".pBoxActive").data('quantity')
	}
    if (document.cookie && document.cookie != '') {
        var split = document.cookie.split(';');
        for (var i = 0; i < split.length; i++) {
            var name_value = split[i].split("=");
            name_value[0] = name_value[0].replace(/^ /, '');
            if(name_value[0].indexOf('get_') == 0){
                values[decodeURIComponent(name_value[0])] = decodeURIComponent(name_value[1]);
            }
        }
    }
	for(key in values){
	    $("#orderform").append("<input type='hidden' name='"+key+"' value='"+values[key]+"'>");
	}
	return true;
	}
$("button[type=submit]").click(setTemplateFields);	
</script>

<script type="text/javascript">
fa_billing_currency = '<?php echo $LANG['billing_currency_local']?>';
</script>

<script type="text/javascript" src="/cdn/js/form-validator.js"></script>
<script type="text/javascript" src="/cdn/onycostop/inc/assets-general/rework/js/timer.js"></script>
<script type="text/javascript" src="/cdn/onycostop/inc/assets-general/rework/js/popups-addons.js"></script>
<!-- BEGIN QUANTITY COMPONENT RESOURCES -->
<link rel="stylesheet" href="/cdn/components/quantity/css/style.css">
<script type="text/javascript" src="/cdn/components/quantity/js/selector.js"></script>
<!-- END QUANTITY COMPONENT RESOURCES -->

<?php $trackEvent='view_item_list'; include_once ("/home/campaign/campaign/active/cdn/onycostop/inc/tags/$lang-w.php");?>

<footer style="margin-top: 30px; background-image: url(/cdn/onycostop/assets_v.4.0/images/BG_SPRAY_HERO_D.webp); background-size: cover; padding: 30px 0px;">
    <div class="container">
        <div class="footer_grid_links">
            <div class="links">
                <ul>
                    <li><a href="<?php echo $LANG['link_to_homepage'] ?>">OnycoStop Pro</a></li>
                    <li><a
                            href="<?php echo $LANG['header_link_mechanism'] ?>"><?php echo $LANG['header_nav_mechanism'] ?></a>
                    </li>
                    <li><a
                            href="<?php echo $LANG['header_link_benefits'] ?>"><?php echo $LANG['header_nav_benefits'] ?></a>
                    </li>
                    <a class="logo hidden_on_mobile" href="<?php echo $LANG['header_link_home'] ?>"><img
                            src="/cdn/onycostop/assets_v.4.0/images/white_logo_onyco.svg" alt=""></a>
                </ul>

                <ul>
                    <li><a
                            href="<?php echo $LANG['link_to_contact'] ?>"><?php echo $LANG['footer_link_contact'] ?></a>
                    </li>
                    <li><a href="mailto: support@onycostoppro.com">support@onycostoppro.com </a></li>
                    <div class="socials">
                        <a href="<?php echo $LANG['fb_link'] ?>"><img
                                src="/cdn/onycostop/assets_v.4.0/images/iCONS/FB_ICON.webp" alt=""></a>
                        <a href="<?php echo $LANG['instagram_link'] ?>"><img
                                src="/cdn/onycostop/assets_v.4.0/images/iCONS/INSTAGRAM_ICON.webp" alt=""></a>
                    </div>
                    <a class=" hidden_on_desktop logo" href="<?php echo $LANG['header_link_home'] ?>"><img
                            src="/cdn/onycostop/assets_v.4.0/images/white_logo_onyco.svg" alt=""></a>
                </ul>
            </div>
            <div class="links">
                <ul>
                    <li><a
                            href="<?php echo $LANG['link_to_disclaimer'] ?>"><?php echo $LANG['footer_link_disclaimer'] ?></a>
                    </li>
                    <li><a
                            href="<?php echo $LANG['link_to_privacy'] ?>"><?php echo $LANG['footer_link_privacy'] ?></a>
                    </li>
                    <li><a href="<?php echo $LANG['link_to_terms'] ?>"><?php echo $LANG['footer_link_terms'] ?></a>
                    </li>
                    <li><a
                            href="<?php echo $LANG['link_to_delivery'] ?>"><?php echo $LANG['footer_link_delivery'] ?></a>
                    </li>
                    <li><a href="<?php echo $LANG['link_to_safety'] ?>"><?php echo $LANG['footer_link_safety'] ?></a>
                    </li>
                    <li><a href="<?php echo $LANG['link_to_return'] ?>"><?php echo $LANG['footer_link_return'] ?></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <hr>
    <p class="all_rights">All rights reserved © OnycoStop Pro </p>
</footer>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
    integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Swiper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="/cdn/onycostop/inc/assets-general/img/new_orderform/js/gallery.js"></script>

<!-- <script type="text/javascript" src="/cdn/onycostop/inc/assets-general/rework/js/upsales.js"></script> -->


<script src="/cdn/onycostop/assets2/js/vendor/modernizr-3.7.1.min.js"></script>

<script type="text/javascript" src="/cdn/js/form-validator.js"></script>
<script src='/cdn/js/fa_events.js'></script>

<script>
    let spray = {
        240: '218',
        1: '218',
        3: '218',
        4: '218'
    }

    let scrub = {
        28: '136'
    }

    let cream = {
        6: '215'
    }
    let heel_cream = {
        156: '216'
    }

    let products_in_cart = [];
    // push product id's in array
    $.each(fa_cart, function (i, elem) {
        if (elem.product_id) {
            products_in_cart.push(elem.product_id);
        }
    });
    let cart_length = products_in_cart.length;
            console.log(cart_length);
  console.log("fa cart", fa_cart);


    $("button.submit-button-form").click(function (e) {
            e.preventDefault();

            console.log(cart_length);


        if (cart_length <= 3) {

        $('button.submit-button-form').attr({
            type: "",
            id: "offers"
        });
            show_modal(e);
            console.log("show moldal")

        } else {

	$("#orderform").submit();
      //  $('button.submit-button-form').attr({
      //      type: "submit",
       //     id: "btnDisable"
     //   });

            console.log("finish")
        }

    });

    function show_modal(e) {

        e.preventDefault();
        check_fa_cart();
        $("#offers_modal").toggleClass('is-visible');
    }


    $(document).click(function (e) {
        if (($(e.target).is('.offers-modal-container')) || $(e.target).is('.close')) {
            $(".offers-modal-container").removeClass('is-visible');
        }
    });

    function check_fa_cart() {

        // convert id's product in string 
        products_in_cart = products_in_cart.map(String);

        // check which ids are in cart and call function
        $.each(spray, function (index, value) {


            if (products_in_cart.indexOf(index) > -1 || products_in_cart.indexOf(value) > -1) {
                $('#' + value).css("display", "none");
                return false;
            } else {
                $('#' + value).css("display", "grid");
            }
        });

        $.each(cream, function (index, value) {

            if (products_in_cart.indexOf(index) > -1 || products_in_cart.indexOf(value) > -1) {
                $('#' + value).css("display", "none");
            } else {
                $('#' + value).css("display", "grid");
            }
        });


        $.each(scrub, function (index, value) {

            if (products_in_cart.indexOf(index) > -1 || products_in_cart.indexOf(value) > -1) {
                $('#' + value).css("display", "none");
            } else {
                $('#' + value).css("display", "grid");
            }
        });

        $.each(heel_cream, function (index, value) {
            if (products_in_cart.indexOf(index) > -1 || products_in_cart.indexOf(value) > -1) {
                $('#' + value).css("display", "none");
            } else {
                $('#' + value).css("display", "grid");
            }
        });

        let hidden_boxes = $('.product-box[style*="display: none"]');
        // console.log(hidden_boxes.length);

    }
</script>

</body>

</html>
