<?php
date_default_timezone_set( 'America/Chicago' );
require('./setup.php');

$smarty = new Smarty();

$smarty->setCaching(false);

$smarty = new Smarty_CV3Setup();

$placed = unserialize('a:9:{s:4:"cart";a:1:{i:0;a:68:{s:7:"prod_id";s:4:"4094";s:3:"cat";s:1:"h";s:6:"parent";N;s:8:"all_cats";a:1:{i:0;s:1:"h";}s:3:"sku";s:3:"WGU";s:3:"qty";s:1:"1";s:6:"ext_id";s:0:"";s:6:"cust_1";b:0;s:6:"cust_2";b:0;s:6:"cust_3";b:0;s:6:"cust_4";b:0;s:6:"cust_5";b:0;s:6:"cust_6";b:0;s:6:"cust_7";b:0;s:6:"cust_8";b:0;s:6:"cust_9";b:0;s:7:"cust_10";b:0;s:7:"cust_11";b:0;s:7:"cust_12";b:0;s:12:"manufacturer";s:0:"";s:16:"gift_certificate";s:1:"n";s:29:"gift_certificate_message_code";s:0:"";s:8:"url_name";s:8:"wgu-test";s:12:"discount_qty";i:0;s:14:"discount_price";i:0;s:22:"google_checkout_exempt";s:1:"n";s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";s:13:"shipper_prefs";a:4:{s:7:"Default";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:9:"AK/HI/APO";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:4:"INTL";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:6:"Canada";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}}s:10:"tax_exempt";s:0:"";s:13:"actual_weight";s:5:"0.000";s:7:"own_box";s:1:"n";s:6:"vendor";s:0:"";s:14:"package_length";s:4:"0.00";s:13:"package_width";s:4:"0.00";s:14:"package_height";s:4:"0.00";s:15:"shipping_weight";s:0:"";s:4:"unit";s:0:"";s:15:"special_ongoing";s:1:"n";s:13:"special_start";s:19:"0000-00-00 00:00:00";s:12:"special_stop";s:19:"0000-00-00 00:00:00";s:12:"subscription";s:1:"n";s:6:"is_kit";s:1:"n";s:9:"kit_prods";s:0:"";s:12:"stock_status";s:8:"In Stock";s:7:"min_qty";s:1:"0";s:7:"max_qty";s:1:"0";s:10:"qty_in_set";s:1:"0";s:18:"num_sets_displayed";s:1:"0";s:16:"requires_freight";s:0:"";s:13:"freight_class";s:0:"";s:21:"freight_handling_type";s:3:"LOO";s:22:"freight_packaging_type";s:3:"BOX";s:17:"inventory_control";s:1:"0";s:18:"out_of_stock_point";s:1:"0";s:8:"on_order";s:1:"0";s:18:"inv_control_exempt";s:1:"n";s:11:"is_donation";s:1:"n";s:16:"backordered_date";s:0:"";s:4:"name";s:10:"##WGU Test";s:9:"web_image";s:0:"";s:6:"prices";a:1:{i:1;a:3:{s:14:"price_category";s:6:"Retail";s:14:"standard_price";s:4:"9.00";s:13:"special_price";s:4:"0.00";}}s:10:"unit_price";s:4:"9.00";s:10:"real_price";s:4:"9.00";s:5:"price";s:4:"9.00";s:5:"total";s:4:"9.00";s:8:"group_id";s:1:"0";}}s:5:"order";a:4:{s:2:"id";i:241912;s:3:"bid";i:544711;s:8:"shipping";a:1:{i:1;i:291131;}s:3:"sid";a:1:{i:0;s:1:"1";}}s:5:"recip";a:1:{i:0;s:31:"Malcolm Lee (11905 ARABIAN TRL)";}s:8:"mappings";a:1:{i:0;a:1:{i:0;s:1:"1";}}s:4:"info";a:21:{s:8:"order_id";i:241912;s:7:"billing";a:31:{s:7:"user_id";s:6:"544711";s:10:"first_name";s:7:"Malcolm";s:9:"last_name";s:3:"Lee";s:7:"company";s:17:"NewHaven Software";s:5:"title";s:0:"";s:16:"billing_address1";s:13:"7810 Brown St";s:16:"billing_address2";s:9:"Suite 301";s:12:"billing_city";s:7:"Redmond";s:13:"billing_state";s:2:"WA";s:11:"billing_zip";s:5:"98052";s:15:"billing_country";s:13:"United States";s:9:"member_id";s:6:"165804";s:5:"email";s:28:"malcolm@newhavensoftware.com";s:5:"phone";s:17:"42586171208717120";s:14:"payment_method";s:15:"giftcertificate";s:9:"last_four";N;s:5:"token";N;s:7:"billing";s:0:"";s:14:"purchase_order";N;s:11:"source_code";s:3:"Web";s:8:"cat_code";N;s:6:"optout";N;s:11:"cat_opt_out";s:1:"n";s:11:"echeck_info";N;s:12:"failed_count";N;s:6:"cctype";s:0:"";s:6:"ccname";N;s:6:"has_ed";s:1:"n";s:17:"has_subscriptions";s:1:"n";s:8:"comments";s:78:"Thanks for ordering HWT materials. Please tell your friends about the program.";s:13:"full_order_id";i:241912;}s:8:"shipping";a:1:{i:0;a:23:{s:7:"ship_id";s:6:"291131";s:11:"s_firstname";s:7:"Malcolm";s:10:"s_lastname";s:3:"Lee";s:9:"s_company";s:17:"NewHaven Software";s:7:"s_title";s:0:"";s:10:"s_address1";s:17:"11905 ARABIAN TRL";s:10:"s_address2";s:0:"";s:6:"s_city";s:6:"AUSTIN";s:7:"s_state";s:2:"TX";s:5:"s_zip";s:5:"78759";s:9:"s_country";s:13:"United States";s:8:"pri_ship";N;s:7:"s_phone";s:0:"";s:7:"s_email";s:0:"";s:12:"s_email_send";s:0:"";s:8:"giftwrap";s:0:"";s:10:"s_comments";s:78:"Thanks for ordering HWT materials. Please tell your friends about the program.";s:8:"s_method";s:7:"Default";s:8:"s_shipon";s:19:"As soon as possible";s:12:"gift_message";s:0:"";s:5:"alias";s:0:"";s:14:"s_address_type";s:0:"";s:5:"prods";a:1:{i:0;a:70:{s:7:"prod_id";s:4:"4094";s:3:"cat";s:1:"h";s:6:"parent";N;s:8:"all_cats";a:1:{i:0;s:1:"h";}s:3:"sku";s:3:"WGU";s:3:"qty";s:1:"1";s:6:"ext_id";s:0:"";s:6:"cust_1";b:0;s:6:"cust_2";b:0;s:6:"cust_3";b:0;s:6:"cust_4";b:0;s:6:"cust_5";b:0;s:6:"cust_6";b:0;s:6:"cust_7";b:0;s:6:"cust_8";b:0;s:6:"cust_9";b:0;s:7:"cust_10";b:0;s:7:"cust_11";b:0;s:7:"cust_12";b:0;s:12:"manufacturer";s:0:"";s:16:"gift_certificate";s:1:"n";s:29:"gift_certificate_message_code";s:0:"";s:8:"url_name";s:8:"wgu-test";s:12:"discount_qty";i:0;s:14:"discount_price";i:0;s:22:"google_checkout_exempt";s:1:"n";s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";s:13:"shipper_prefs";a:4:{s:7:"Default";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:9:"AK/HI/APO";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:4:"INTL";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:6:"Canada";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}}s:10:"tax_exempt";s:0:"";s:13:"actual_weight";s:5:"0.000";s:7:"own_box";s:1:"n";s:6:"vendor";s:0:"";s:14:"package_length";s:4:"0.00";s:13:"package_width";s:4:"0.00";s:14:"package_height";s:4:"0.00";s:15:"shipping_weight";s:0:"";s:4:"unit";s:0:"";s:15:"special_ongoing";s:1:"n";s:13:"special_start";s:19:"0000-00-00 00:00:00";s:12:"special_stop";s:19:"0000-00-00 00:00:00";s:12:"subscription";s:1:"n";s:6:"is_kit";s:1:"n";s:9:"kit_prods";s:0:"";s:12:"stock_status";s:8:"In Stock";s:7:"min_qty";s:1:"0";s:7:"max_qty";s:1:"0";s:10:"qty_in_set";s:1:"0";s:18:"num_sets_displayed";s:1:"0";s:16:"requires_freight";s:0:"";s:13:"freight_class";s:0:"";s:21:"freight_handling_type";s:3:"LOO";s:22:"freight_packaging_type";s:3:"BOX";s:17:"inventory_control";s:1:"0";s:18:"out_of_stock_point";s:1:"0";s:8:"on_order";s:1:"0";s:18:"inv_control_exempt";s:1:"n";s:11:"is_donation";s:1:"n";s:16:"backordered_date";s:0:"";s:4:"name";s:10:"##WGU Test";s:9:"web_image";s:0:"";s:6:"prices";a:1:{i:1;a:3:{s:14:"price_category";s:6:"Retail";s:14:"standard_price";s:4:"9.00";s:13:"special_price";s:4:"0.00";}}s:10:"unit_price";s:4:"9.00";s:10:"real_price";s:4:"9.00";s:5:"price";s:4:"9.00";s:5:"total";s:4:"9.00";s:8:"group_id";s:1:"0";s:7:"cart_id";i:0;s:14:"gift_wrap_info";a:1:{s:5:"total";i:0;}}}}}s:6:"totals";a:17:{s:6:"totals";a:1:{i:0;a:20:{s:8:"subtotal";s:4:"9.00";s:13:"subtotal_ship";d:9;s:12:"subtotal_tax";d:9;s:6:"weight";d:0;s:3:"tax";s:4:"1.23";s:8:"shipping";s:4:"5.95";s:16:"pre_api_shipping";s:4:"5.95";s:5:"total";s:5:"14.95";s:8:"giftwrap";s:4:"0.00";s:17:"gift_certificates";s:4:"0.00";s:9:"sgroupadd";s:4:"0.00";s:9:"total_qty";i:1;s:13:"addcharge_qty";i:1;s:7:"own_box";a:0:{}s:14:"package_length";i:0;s:13:"package_width";i:0;s:14:"package_height";i:0;s:5:"prods";a:1:{i:4094;i:1;}s:13:"exclude_prods";i:0;s:12:"reward_total";i:0;}}s:10:"grandtotal";s:5:"16.18";s:9:"shiptotal";s:4:"5.95";s:17:"pre_api_shiptotal";s:4:"5.95";s:8:"taxtotal";s:4:"1.23";s:13:"subtotal_ship";d:9;s:6:"weight";d:0;s:9:"sgroupadd";s:4:"0.00";s:14:"shipserviceadd";s:4:"0.00";s:8:"subtotal";s:4:"9.00";s:9:"gifttotal";s:4:"0.00";s:17:"gift_certificates";s:4:"0.00";s:7:"own_box";a:0:{}s:15:"total_addcharge";i:1;s:15:"total_total_qty";i:1;s:13:"exclude_prods";i:0;s:12:"reward_total";i:0;}s:6:"has_ed";s:1:"n";s:17:"has_subscriptions";s:1:"n";s:23:"rewards_points_redeemed";i:0;s:21:"rewards_points_earned";i:0;s:13:"currency_type";s:1:"$";s:15:"payment_methods";a:10:{s:10:"creditcard";s:11:"Credit Card";s:6:"paypal";s:6:"PayPal";s:14:"paypal_express";s:23:"PayPal Express Checkout";s:13:"purchaseorder";s:14:"Purchase Order";s:6:"onfile";s:19:"Credit Card on File";s:7:"invoice";s:10:"Invoice Me";s:6:"echeck";s:16:"Electronic Check";s:5:"check";s:10:"Send Check";s:4:"call";s:17:"Call with Payment";s:15:"giftcertificate";s:16:"Gift Certificate";}s:4:"cart";a:1:{i:0;a:68:{s:7:"prod_id";s:4:"4094";s:3:"cat";s:1:"h";s:6:"parent";N;s:8:"all_cats";a:1:{i:0;s:1:"h";}s:3:"sku";s:3:"WGU";s:3:"qty";s:1:"1";s:6:"ext_id";s:0:"";s:6:"cust_1";b:0;s:6:"cust_2";b:0;s:6:"cust_3";b:0;s:6:"cust_4";b:0;s:6:"cust_5";b:0;s:6:"cust_6";b:0;s:6:"cust_7";b:0;s:6:"cust_8";b:0;s:6:"cust_9";b:0;s:7:"cust_10";b:0;s:7:"cust_11";b:0;s:7:"cust_12";b:0;s:12:"manufacturer";s:0:"";s:16:"gift_certificate";s:1:"n";s:29:"gift_certificate_message_code";s:0:"";s:8:"url_name";s:8:"wgu-test";s:12:"discount_qty";i:0;s:14:"discount_price";i:0;s:22:"google_checkout_exempt";s:1:"n";s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";s:13:"shipper_prefs";a:4:{s:7:"Default";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:9:"AK/HI/APO";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:4:"INTL";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}s:6:"Canada";a:3:{s:9:"ship_pref";s:1:"0";s:14:"fixed_shipping";s:4:"0.00";s:20:"promo_fixed_shipping";s:4:"0.00";}}s:10:"tax_exempt";s:0:"";s:13:"actual_weight";s:5:"0.000";s:7:"own_box";s:1:"n";s:6:"vendor";s:0:"";s:14:"package_length";s:4:"0.00";s:13:"package_width";s:4:"0.00";s:14:"package_height";s:4:"0.00";s:15:"shipping_weight";s:0:"";s:4:"unit";s:0:"";s:15:"special_ongoing";s:1:"n";s:13:"special_start";s:19:"0000-00-00 00:00:00";s:12:"special_stop";s:19:"0000-00-00 00:00:00";s:12:"subscription";s:1:"n";s:6:"is_kit";s:1:"n";s:9:"kit_prods";s:0:"";s:12:"stock_status";s:8:"In Stock";s:7:"min_qty";s:1:"0";s:7:"max_qty";s:1:"0";s:10:"qty_in_set";s:1:"0";s:18:"num_sets_displayed";s:1:"0";s:16:"requires_freight";s:0:"";s:13:"freight_class";s:0:"";s:21:"freight_handling_type";s:3:"LOO";s:22:"freight_packaging_type";s:3:"BOX";s:17:"inventory_control";s:1:"0";s:18:"out_of_stock_point";s:1:"0";s:8:"on_order";s:1:"0";s:18:"inv_control_exempt";s:1:"n";s:11:"is_donation";s:1:"n";s:16:"backordered_date";s:0:"";s:4:"name";s:10:"##WGU Test";s:9:"web_image";s:0:"";s:6:"prices";a:1:{i:1;a:3:{s:14:"price_category";s:6:"Retail";s:14:"standard_price";s:4:"9.00";s:13:"special_price";s:4:"0.00";}}s:10:"unit_price";s:4:"9.00";s:10:"real_price";s:4:"9.00";s:5:"price";s:4:"9.00";s:5:"total";s:4:"9.00";s:8:"group_id";s:1:"0";}}s:5:"custf";s:50:"<br /><h3>Custom Fields:</h3>customerNotes: <br />";s:20:"cust_checkout_fields";a:1:{s:13:"customerNotes";s:0:"";}s:3:"url";s:21:"hwtinc.commercev3.com";s:10:"custfields";a:1:{s:17:"customerNotes_db1";s:0:"";}s:17:"gift_certificates";a:2:{s:5:"codes";a:1:{i:0;a:4:{s:4:"code";s:14:"WGU123Malcolm1";s:6:"amount";s:5:"16.18";s:9:"remaining";s:4:"3.82";s:12:"one_time_use";s:1:"n";}}s:6:"totals";a:3:{s:5:"total";s:5:"16.18";s:7:"gctotal";s:5:"16.18";s:9:"remaining";s:4:"0.00";}}s:22:"gift_certificate_delay";s:1:"n";s:8:"settings";a:429:{s:2:"id";s:3:"720";s:4:"name";s:6:"hwtinc";s:11:"config_file";s:17:"hwtinc_config.php";s:12:"date_created";N;s:7:"is_live";s:1:"y";s:9:"date_live";N;s:14:"bigadmin_limit";s:1:"n";s:11:"export_type";s:1:"3";s:10:"export_pdf";s:1:"y";s:13:"shipping_type";s:2:"in";s:9:"ship_type";s:1:"r";s:9:"ship_calc";s:4:"ship";s:16:"ship_territories";s:1:"n";s:6:"status";s:1:"1";s:10:"quote_date";N;s:13:"currency_type";s:1:"$";s:8:"api_calc";s:1:"n";s:8:"ship_url";s:0:"";s:14:"ship_post_type";s:3:"get";s:9:"rate_calc";s:1:"n";s:9:"calc_type";s:5:"order";s:11:"num_per_box";s:1:"0";s:7:"min_ups";s:4:"0.00";s:13:"ship_from_zip";s:0:"";s:17:"prod_display_type";s:8:"category";s:13:"category_sort";s:6:"sorted";s:26:"category_sort_user_defined";s:6:"cust_1";s:11:"search_sort";s:12:"user_defined";s:24:"search_sort_user_defined";s:6:"cust_3";s:15:"subproduct_sort";s:6:"sorted";s:14:"attribute_sort";s:6:"sorted";s:20:"recently_viewed_sort";s:6:"random";s:18:"child_display_type";s:1:"1";s:28:"additional_prod_display_type";s:1:"1";s:13:"checkout_type";s:1:"1";s:21:"checkout_product_desc";s:9:"prod_name";s:13:"secure_domain";s:20:"shopping.hwtears.com";s:6:"domain";s:20:"shopping.hwtears.com";s:8:"ps_start";s:0:"";s:6:"ps_end";s:0:"";s:10:"ps_shipper";s:1:"0";s:7:"ps_rate";s:4:"0.00";s:9:"ps_exempt";s:0:"";s:9:"sps_start";s:0:"";s:7:"sps_end";s:0:"";s:11:"sps_shipper";s:1:"0";s:8:"sps_rate";s:4:"0.00";s:10:"sps_exempt";s:0:"";s:7:"ps_type";s:4:"none";s:15:"payment_methods";s:26:"creditcard,giftcertificate";s:20:"payment_members_only";s:0:"";s:12:"credit_cards";s:5:"VI,MC";s:18:"private_label_name";s:0:"";s:11:"daily_sales";N;s:17:"daily_sales_email";N;s:11:"wrap_amount";s:4:"0.00";s:17:"inventory_control";s:1:"n";s:16:"verify_inventory";s:1:"n";s:10:"service_id";s:10:"d297cefea3";s:20:"sub_category_display";s:1:"y";s:16:"prod_cat_display";s:1:"y";s:16:"featured_display";s:3:"all";s:11:"new_display";s:4:"none";s:16:"specials_display";s:3:"all";s:21:"featured_cats_display";s:3:"all";s:24:"featured_reviews_display";s:1:"n";s:10:"store_cvv2";s:1:"n";s:17:"sitemap_invisible";s:1:"n";s:15:"sitemap_display";s:6:"random";s:12:"display_cvv2";s:1:"n";s:19:"interactive_pricing";s:1:"n";s:12:"tax_api_calc";s:1:"y";s:7:"tax_url";s:44:"shopping.hwtears.com/services/hwtinc/tax.php";s:12:"tax_discount";s:1:"y";s:16:"rating_usegroups";s:0:"";s:13:"rating_add_cg";s:1:"y";s:9:"rating_cg";s:3:"176";s:13:"rating_thanks";s:1:"y";s:12:"rating_email";s:1:"n";s:14:"rating_subject";s:0:"";s:11:"rating_from";s:0:"";s:13:"rating_groups";s:0:"";s:11:"rating_auto";s:1:"n";s:10:"rating_max";s:1:"5";s:16:"order_management";s:3:"cms";s:16:"om_auto_download";s:1:"n";s:17:"om_auto_inventory";s:1:"n";s:16:"om_auto_shipping";s:1:"n";s:24:"om_auto_shipping_history";s:1:"n";s:24:"om_last_shipping_history";N;s:10:"om_keycode";s:0:"";s:14:"om_cat_keycode";s:0:"";s:17:"om_use_cat_source";s:1:"n";s:18:"om_sourcetokeycode";s:1:"n";s:16:"om_promotosource";s:0:"";s:10:"om_version";s:4:"1.00";s:13:"om_store_code";s:0:"";s:6:"om_pin";s:0:"";s:6:"om_dob";s:1:"0";s:12:"om_httpbizid";s:0:"";s:17:"om_paymentech_pad";s:1:"n";s:15:"om_gc_processor";s:1:"n";s:10:"rep_filter";a:6:{i:0;s:0:"";i:1;s:13:"71.53.195.211";i:2;s:13:"192.168.0.101";i:3;s:13:"67.130.119.98";i:4;s:13:"64.241.27.130";i:5;s:0:"";}s:10:"cms_import";s:8:"products";s:12:"cms_lineitem";s:8:"combined";s:14:"cms_ord_prefix";s:0:"";s:14:"cms_tax_insure";s:0:"";s:15:"cms_use_att_sku";s:1:"n";s:14:"aero_client_id";s:0:"";s:17:"aero_order_prefix";s:0:"";s:16:"aero_error_email";s:0:"";s:12:"cart_abandon";s:1:"y";s:17:"cart_abandon_days";s:1:"1";s:17:"cart_abandon_from";s:48:"Handwriting Without Tears<weborders@hwtears.com>";s:20:"cart_abandon_subject";s:0:"";s:19:"cart_abandon_remove";s:5:"never";s:18:"admin_search_boxes";s:1:"n";s:17:"admin_append_name";s:1:"n";s:15:"fedex_rate_calc";s:1:"n";s:12:"fedex_server";s:4:"test";s:17:"fedex_account_num";s:0:"";s:15:"fedex_meter_num";s:0:"";s:16:"fedex_from_state";s:2:"AL";s:19:"fedex_ship_from_zip";s:0:"";s:18:"fedex_from_country";s:2:"US";s:9:"fedex_min";s:4:"0.00";s:15:"fedex_calc_type";s:5:"order";s:17:"fedex_num_per_box";s:1:"0";s:15:"fedex_ship_type";s:1:"r";s:9:"not_found";s:5:"index";s:15:"not_found_start";s:19:"2012-08-14 09:16:55";s:16:"affiliate_report";s:1:"n";s:22:"affiliate_report_email";s:0:"";s:24:"affiliate_report_subject";s:0:"";s:21:"affiliate_report_from";s:0:"";s:24:"affiliate_forgot_subject";s:0:"";s:21:"affiliate_forgot_from";s:0:"";s:18:"affiliate_override";s:1:"n";s:15:"paypal_business";s:0:"";s:11:"paypal_skip";s:1:"y";s:19:"paypal_exp_username";s:0:"";s:19:"paypal_exp_password";s:0:"";s:20:"paypal_exp_signature";s:0:"";s:16:"paypal_exp_image";s:0:"";s:14:"usps_rate_calc";s:1:"n";s:12:"usps_user_id";s:0:"";s:9:"usps_live";s:1:"n";s:18:"usps_ship_from_zip";s:0:"";s:14:"usps_calc_type";s:5:"order";s:16:"usps_num_per_box";s:1:"0";s:8:"usps_min";s:4:"0.00";s:16:"in_auto_download";s:1:"n";s:10:"in_db_user";s:0:"";s:10:"in_db_host";s:0:"";s:10:"in_db_name";s:0:"";s:10:"in_db_pass";s:0:"";s:10:"in_db_port";s:0:"";s:13:"in_owner_code";s:0:"";s:14:"in_order_class";s:0:"";s:16:"in_campaign_code";s:0:"";s:8:"in_st_ip";s:0:"";s:10:"in_st_port";s:0:"";s:22:"gift_certificate_delay";s:1:"n";s:27:"gift_certificate_fee_amount";s:4:"0.00";s:25:"gift_certificate_fee_type";s:1:"%";s:30:"gift_certificate_applyshipping";s:1:"y";s:25:"gift_certificate_applytax";s:1:"y";s:15:"google_checkout";s:0:"";s:18:"google_merchant_id";s:0:"";s:19:"google_merchant_key";s:0:"";s:22:"google_checkout_button";s:5:"small";s:17:"google_beacon_url";s:0:"";s:12:"search_prods";s:0:"";s:17:"search_match_type";s:12:"partial_word";s:24:"recipe_search_match_type";s:10:"whole_word";s:10:"batch_size";s:3:"100";s:17:"new_products_days";s:2:"15";s:14:"gc_maxlifetime";s:6:"345600";s:16:"mom_giftwrap_sku";s:0:"";s:24:"mom_prod_import_subprods";s:1:"n";s:21:"mom_xml_gift_location";s:8:"greeting";s:14:"mom_xml_ctype1";N;s:17:"mom_xml_ordertype";s:3:"NET";s:16:"mom_xml_sales_id";s:3:"NET";s:14:"mom_xml_inpart";s:3:"NET";s:15:"mom_xml_oper_id";s:3:"NET";s:18:"mom_xml_cat_source";s:3:"NET";s:14:"product_notify";s:1:"n";s:22:"product_notify_subject";s:0:"";s:20:"product_notify_email";s:0:"";s:18:"new_product_notify";s:1:"n";s:26:"new_product_notify_subject";s:0:"";s:24:"new_product_notify_email";s:0:"";s:26:"gift_certificate_processor";s:1:"n";s:26:"st_gift_certificate_create";s:1:"n";s:25:"gift_certificate_merchant";s:0:"";s:25:"gift_certificate_terminal";s:0:"";s:13:"gcv_processor";s:1:"n";s:12:"gcv_terminal";s:0:"";s:10:"gcv_server";s:0:"";s:15:"gcwtg_processor";s:1:"n";s:14:"gcwtg_merchant";s:0:"";s:10:"gcwtg_user";s:0:"";s:8:"gcwtg_pw";s:0:"";s:26:"arroweye_gift_certificates";s:1:"n";s:19:"arroweye_greet_card";s:1:"0";s:18:"arroweye_gift_card";s:1:"0";s:15:"product_mapping";s:8:"checkout";s:15:"display_cgroups";s:1:"y";s:15:"ship_calculator";s:1:"n";s:12:"best_sellers";s:0:"";s:20:"best_sellers_display";s:4:"none";s:16:"vendor_ship_calc";s:1:"n";s:13:"captcha_forms";s:0:"";s:14:"captcha_method";s:1:"1";s:14:"member_approve";s:1:"n";s:19:"member_approve_from";s:0:"";s:20:"member_change_notify";s:1:"n";s:26:"member_change_notify_email";s:0:"";s:28:"member_change_notify_subject";s:0:"";s:17:"member_approve_to";s:0:"";s:17:"referafriend_from";s:0:"";s:20:"referafriend_subject";s:0:"";s:17:"referafriend_type";s:5:"visit";s:23:"referafriend_commission";s:5:"0.000";s:23:"referafriend_expiration";s:1:"0";s:23:"referafriend_firstorder";s:1:"n";s:27:"referafriend_sample_subject";s:0:"";s:11:"eparty_from";s:0:"";s:14:"eparty_subject";s:0:"";s:11:"eparty_type";s:5:"visit";s:17:"eparty_firstorder";s:1:"n";s:17:"eparty_commission";s:5:"0.000";s:21:"eparty_sample_subject";s:0:"";s:13:"abf_rate_calc";s:1:"n";s:12:"abf_acct_num";s:0:"";s:8:"abf_pass";s:0:"";s:13:"abf_from_city";s:0:"";s:14:"abf_from_state";s:2:"AL";s:12:"abf_from_zip";s:0:"";s:16:"abf_from_country";s:2:"US";s:7:"abf_min";s:4:"0.00";s:12:"cw_rate_calc";s:1:"n";s:7:"cw_pass";s:0:"";s:7:"cw_user";s:0:"";s:15:"cw_customer_num";s:0:"";s:11:"cw_from_zip";s:0:"";s:15:"cw_from_country";s:2:"US";s:6:"cw_min";s:4:"0.00";s:17:"exactor_rate_calc";s:1:"y";s:11:"exactor_cv3";s:1:"n";s:17:"exactor_send_skus";s:1:"y";s:21:"exactor_send_shipping";s:1:"y";s:19:"exactor_merchant_id";s:8:"10005022";s:15:"exactor_user_id";s:6:"CV3HWT";s:17:"exactor_from_name";s:23:"No Tears Learning, Inc.";s:20:"exactor_from_address";s:14:"9 Jay Gould Ct";s:17:"exactor_from_city";s:7:"Waldorf";s:18:"exactor_from_state";s:2:"MD";s:16:"exactor_from_zip";s:5:"20602";s:20:"exactor_from_country";s:2:"US";s:14:"exactor_states";s:3:"ALL";s:22:"exactor_tax_states_alt";s:0:"";s:22:"exactor_send_exemption";s:1:"n";s:16:"vi_auto_download";s:1:"n";s:9:"vi_web_id";s:0:"";s:13:"vi_identifier";s:0:"";s:14:"vi_error_email";s:0:"";s:14:"vi_environment";s:4:"test";s:11:"use_ship_on";s:1:"n";s:18:"blast_unresponsive";s:2:"10";s:9:"se_coupon";s:1:"n";s:11:"se_discount";s:1:"n";s:10:"se_user_id";s:1:"n";s:20:"se_custnum_webcustid";s:1:"n";s:25:"se_paypalexp_copyshipbill";s:1:"n";s:14:"url_split_char";s:1:"/";s:21:"reminder_service_from";s:0:"";s:24:"reminder_service_subject";s:0:"";s:11:"no_activity";s:1:"n";s:16:"no_activity_date";N;s:21:"show_checkout_display";s:1:"y";s:6:"echeck";s:1:"n";s:11:"echeck_user";s:0:"";s:16:"echeck_trans_key";s:0:"";s:14:"encrypt_orders";s:1:"n";s:21:"encrypt_orders_status";s:5:"enter";s:13:"search_fields";s:63:"prod_name,sku,keywords,desc_header,cust_1,cust_2,cust_3,cust_12";s:12:"search_ready";s:1:"n";s:22:"allow_marketing_import";s:1:"y";s:18:"allow_email_blasts";s:1:"y";s:19:"use_category_filter";s:1:"y";s:21:"search_redirect_andor";s:3:"and";s:30:"display_default_featured_prods";s:1:"y";s:16:"sp_auto_download";s:1:"n";s:16:"sp_auto_tracking";s:1:"n";s:19:"sp_service_location";s:0:"";s:12:"uri_redirect";s:1:"y";s:20:"use_suggested_search";s:1:"n";s:23:"suggested_search_update";s:4:"auto";s:20:"suggested_search_num";s:2:"10";s:13:"upsells_prods";s:0:"";s:12:"report_value";s:7:"product";s:14:"request_review";s:1:"y";s:19:"request_review_days";s:2:"14";s:19:"request_review_from";s:48:"Handwriting Without Tears<weborders@hwtears.com>";s:22:"request_review_subject";s:35:"Please review your recent purchase.";s:16:"avatax_rate_calc";s:1:"n";s:14:"avatax_account";s:0:"";s:14:"avatax_license";s:0:"";s:19:"avatax_company_code";s:0:"";s:20:"avatax_customer_code";s:0:"";s:19:"avatax_from_address";s:0:"";s:16:"avatax_from_city";s:0:"";s:17:"avatax_from_state";s:2:"AL";s:15:"avatax_from_zip";s:0:"";s:13:"avatax_states";s:3:"ALL";s:21:"avatax_tax_states_alt";s:0:"";s:7:"use_cdn";s:1:"y";s:14:"cdn_access_key";s:4:"aws1";s:10:"cdn_bucket";s:15:"cdn.hwtears.com";s:16:"google_analytics";s:1:"y";s:21:"google_analytics_acct";s:12:"UA-1811419-1";s:16:"session_location";s:7:"db-core";s:14:"max_comparable";s:1:"4";s:20:"orderpdf_print_ccnum";s:1:"y";s:15:"use_ups_freight";s:1:"n";s:21:"member_birthday_email";s:1:"n";s:26:"member_birthday_from_email";s:0:"";s:23:"member_birthday_subject";s:0:"";s:16:"ups_freight_user";s:0:"";s:20:"ups_freight_password";s:0:"";s:22:"ups_freight_access_key";s:0:"";s:18:"taxvista_rate_calc";s:0:"";s:20:"ship_address_confirm";s:1:"n";s:19:"ups_time_in_transit";s:1:"n";s:12:"hide_cc_list";s:1:"n";s:16:"elavon_processor";s:1:"n";s:18:"elavon_environment";s:4:"test";s:14:"elavon_reg_key";s:0:"";s:13:"elavon_vendor";s:0:"";s:15:"elavon_terminal";s:0:"";s:15:"elavon_bank_num";s:0:"";s:17:"elavon_record_nbr";s:3:"001";s:18:"elavon_record_date";N;s:15:"amazon_checkout";s:1:"n";s:20:"amazon_checkout_type";s:1:"1";s:18:"amazon_merchant_id";s:0:"";s:17:"amazon_access_key";s:0:"";s:17:"amazon_secret_key";s:0:"";s:20:"amazon_ready_to_ship";s:1:"n";s:23:"category_global_filters";s:1:"y";s:23:"tmp_cache_control_fixed";s:1:"y";s:25:"member_cart_clear_confirm";s:1:"n";s:26:"security_terminate_session";s:0:"";s:26:"security_checkout_attempts";s:1:"0";s:27:"member_wishlist_require_zip";s:1:"y";s:20:"express_order_hidden";s:1:"n";s:22:"member_incentive_login";s:1:"n";s:13:"rating_notify";s:1:"y";s:19:"rating_notify_email";s:16:"leah@hwtears.com";s:9:"save_form";s:1:"n";s:10:"save_forms";s:0:"";s:19:"checkout_quick_swap";s:1:"n";s:16:"best_seller_days";s:1:"0";s:24:"inventory_control_notify";s:1:"n";s:30:"inventory_control_notify_email";s:0:"";s:22:"customer_review_rating";s:1:"n";s:20:"sortby_review_rating";s:0:"";s:24:"prod_details_on_category";s:1:"y";s:20:"email_conf_customers";s:1:"y";s:21:"email_conf_storeowner";s:1:"y";s:20:"simple_gateway_pages";s:1:"n";s:25:"search_limit_email_notify";s:0:"";s:18:"fedex_calc_version";s:0:"";s:17:"fedex_account_key";s:0:"";s:18:"fedex_account_pass";s:0:"";s:28:"amazon_set_orders_downloaded";s:1:"n";s:15:"desc_rep_filter";a:7:{i:0;s:0:"";i:1;s:13:"71.53.195.211";i:2;s:13:"192.168.0.101";i:3;s:13:"67.130.119.98";i:4;s:13:"64.241.27.130";i:5;s:1:" ";i:6;s:0:"";}s:11:"editor_type";s:1:"1";s:15:"tracking_notify";s:1:"n";s:23:"tracking_notify_subject";s:0:"";s:20:"tracking_notify_from";s:0:"";s:13:"authorize_cim";s:0:"";s:17:"authorize_cim_env";s:1:"0";s:12:"billing_type";s:2:"in";s:16:"bill_territories";s:1:"n";s:12:"suppress_oos";s:1:"n";s:8:"in_cloud";s:1:"y";s:9:"use_token";s:1:"y";s:11:"edit_locked";s:1:"n";s:29:"tc_gift_certificate_processor";s:1:"n";s:24:"tc_gift_certificate_auth";s:0:"";s:8:"pdf_cust";s:0:"";s:10:"fix_and_or";s:2:"or";s:20:"hidden_prods_display";s:1:"n";s:13:"secure_logins";s:1:"n";s:28:"gift_certificate_applypromos";s:1:"y";s:17:"gcaloha_processor";s:1:"n";s:14:"gcaloha_wsuser";s:0:"";s:12:"gcaloha_wspw";s:0:"";s:12:"gcaloha_user";s:0:"";s:10:"gcaloha_pw";s:0:"";s:14:"gcaloha_compid";s:0:"";s:17:"gcaloha_pinverify";s:1:"n";s:21:"fedex_discount_to_net";s:1:"n";s:15:"se_product_sort";s:4:"name";s:19:"product_review_sort";s:8:"oldtonew";s:34:"inventory_control_notify_backorder";s:0:"";s:14:"giftcertws_api";s:1:"n";s:14:"giftcertws_url";s:0:"";s:26:"outofstock_bottom_category";s:1:"n";s:23:"hide_viewcart_discounts";s:1:"y";s:17:"member_email_conf";s:1:"y";s:17:"in_auto_inventory";s:1:"n";s:17:"gift_msg_separate";s:1:"n";s:18:"gift_msg_num_lines";s:1:"0";s:18:"gift_msg_num_chars";s:1:"0";s:17:"on_order_override";s:1:"n";s:13:"hubspot_leads";s:1:"n";s:14:"hubspot_apikey";N;s:16:"hubspot_portalid";N;s:23:"hubspot_createform_guid";N;s:12:"hubspot_skus";s:1:"n";s:16:"pdf_order_prefix";N;s:12:"kit_stock_st";s:1:"n";s:9:"tax_rates";a:2:{i:1;a:5:{s:2:"id";s:1:"1";s:5:"state";s:2:"MD";s:10:"tax_amount";s:5:"5.000";s:16:"include_shipping";s:1:"n";s:9:"tax_apply";s:1:"1";}i:2;a:5:{s:2:"id";s:1:"2";s:5:"state";s:2:"NC";s:10:"tax_amount";s:5:"6.750";s:16:"include_shipping";s:1:"y";s:9:"tax_apply";s:1:"1";}}s:10:"tax_states";a:2:{s:2:"MD";s:1:"1";s:2:"NC";s:1:"2";}s:15:"rewards_program";N;}s:16:"customer_cgroups";a:14:{i:32;s:6:"Orders";i:46;s:11:"Member List";i:47;s:13:"Member List 2";i:48;s:26:"Virtual Registration Admin";i:49;s:3:"DTT";i:50;s:9:"Workshops";i:51;s:3:"GSS";i:59;s:9:"Workbooks";i:67;s:5:"Music";i:177;s:19:"REVIEWS - CUSTOMERS";i:178;s:16:"Cart Abandonment";i:180;s:13:"ALL CUSTOMERS";i:181;s:2:"LN";i:389;s:19:"  Workshops 8.16.12";}s:12:"transit_time";a:0:{}s:5:"promo";a:3:{s:4:"code";s:0:"";s:4:"desc";s:0:"";s:4:"used";s:1:"n";}}s:6:"totals";a:17:{s:6:"totals";a:1:{i:0;a:20:{s:8:"subtotal";s:4:"9.00";s:13:"subtotal_ship";d:9;s:12:"subtotal_tax";d:9;s:6:"weight";d:0;s:3:"tax";s:4:"1.23";s:8:"shipping";s:4:"5.95";s:16:"pre_api_shipping";s:4:"5.95";s:5:"total";s:5:"14.95";s:8:"giftwrap";s:4:"0.00";s:17:"gift_certificates";s:4:"0.00";s:9:"sgroupadd";s:4:"0.00";s:9:"total_qty";i:1;s:13:"addcharge_qty";i:1;s:7:"own_box";a:0:{}s:14:"package_length";i:0;s:13:"package_width";i:0;s:14:"package_height";i:0;s:5:"prods";a:1:{i:4094;i:1;}s:13:"exclude_prods";i:0;s:12:"reward_total";i:0;}}s:10:"grandtotal";s:5:"16.18";s:9:"shiptotal";s:4:"5.95";s:17:"pre_api_shiptotal";s:4:"5.95";s:8:"taxtotal";s:4:"1.23";s:13:"subtotal_ship";d:9;s:6:"weight";d:0;s:9:"sgroupadd";s:4:"0.00";s:14:"shipserviceadd";s:4:"0.00";s:8:"subtotal";s:4:"9.00";s:9:"gifttotal";s:4:"0.00";s:17:"gift_certificates";s:4:"0.00";s:7:"own_box";a:0:{}s:15:"total_addcharge";i:1;s:15:"total_total_qty";i:1;s:13:"exclude_prods";i:0;s:12:"reward_total";i:0;}s:21:"rewards_points_earned";i:0;s:23:"rewards_points_redeemed";i:0;s:17:"gift_certificates";a:2:{s:5:"codes";a:1:{i:0;a:4:{s:4:"code";s:14:"WGU123Malcolm1";s:6:"amount";s:5:"16.18";s:9:"remaining";s:4:"3.82";s:12:"one_time_use";s:1:"n";}}s:6:"totals";a:3:{s:5:"total";s:5:"16.18";s:7:"gctotal";s:5:"16.18";s:9:"remaining";s:4:"0.00";}}}');
$js = json_encode( $placed );
$smarty->assign('js', $js);
$smarty->assign('placed', $placed);
$smarty->assign('info', $placed['info']);
$smarty->assign('gift_certificates', $placed['gift_certificates']);
$smarty->assign('order', $placed['order']);
$smarty->assign('totals', $placed['totals']);
$smarty->assign('recip', $placed['recip']);
$smarty->assign('mappings', $placed['mappings']);
$smarty->assign('cart', $placed['cart']);
$smarty->assign('currency_type', '$');
$smarty->assign('name', 'Ned');

$smarty->display('test.tpl');


?>
