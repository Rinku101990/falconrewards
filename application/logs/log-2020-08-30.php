<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2020-08-30 00:30:44 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
ERROR - 2020-08-30 00:30:44 --> Query error: Query execution was interrupted - Invalid query: SELECT `pro`.`p_id`, `pro`.`p_name`, `pro`.`p_category`, `pro`.`p_sku`, `pro`.`p_aed`, `pro`.`p_inr`, `pro`.`p_omr`, `pro`.`p_kwd`, `pro`.`p_bhd`, `pro`.`p_usd`, `pro`.`p_qty`, `pro`.`p_sold_plus`, `pro`.`p_ticket`, `pro`.`p_picture`, `pro`.`p_description`, `rwd`.`r_title`, `rwd`.`r_url`, `rwd`.`r_category`, `rwd`.`image`, `rwd`.`r_short_description`, `camp`.`id`, `camp`.`product`, `camp`.`reward`, `camp`.`img`
FROM `tbl_campaign` `camp`
LEFT JOIN `tbl_product` `pro` ON `camp`.`product`=`pro`.`p_id`
LEFT JOIN `tbl_reward` `rwd` ON `camp`.`reward`=`rwd`.`r_id`
ORDER BY `camp`.`product` ASC
DEBUG - 2020-08-30 00:32:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 00:32:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 00:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 00:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 00:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 00:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 00:32:52 --> Total execution time: 11.6363
DEBUG - 2020-08-30 00:40:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 00:40:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 00:40:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 00:40:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 00:40:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 00:40:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 00:40:45 --> Total execution time: 0.0656
DEBUG - 2020-08-30 00:41:09 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 00:41:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 00:41:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 00:41:09 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 00:41:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 00:41:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 00:41:09 --> Total execution time: 0.0711
DEBUG - 2020-08-30 00:41:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 00:41:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 00:41:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 00:41:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 00:41:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 00:41:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 00:41:32 --> Total execution time: 0.0738
DEBUG - 2020-08-30 00:41:58 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 00:41:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 00:41:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 00:41:58 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 00:41:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 00:41:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 00:41:58 --> Total execution time: 0.0676
DEBUG - 2020-08-30 00:43:57 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 00:43:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 00:43:57 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 00:43:57 --> Total execution time: 0.1593
DEBUG - 2020-08-30 01:28:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 01:28:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 01:28:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 01:28:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 01:28:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 01:28:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 01:28:37 --> Total execution time: 0.4219
DEBUG - 2020-08-30 01:28:39 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 01:28:39 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 01:28:39 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 01:28:39 --> Total execution time: 0.1474
DEBUG - 2020-08-30 00:05:16 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 00:05:19 --> No URI present. Default controller set.
DEBUG - 2020-08-30 00:05:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 00:05:19 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 00:05:19 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 01:35:20 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 01:35:20 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 01:35:20 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 01:35:20 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 01:35:20 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 01:35:20 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 01:35:20 --> Total execution time: 3.2793
DEBUG - 2020-08-30 00:05:22 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 00:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 00:05:22 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 00:05:22 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 01:35:22 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 01:35:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 01:35:23 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 01:35:23 --> Total execution time: 0.6298
DEBUG - 2020-08-30 00:05:34 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 00:05:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 00:05:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 00:05:35 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 01:35:35 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 01:35:35 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 01:35:35 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 01:35:35 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 01:35:35 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 01:35:35 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 01:35:35 --> Total execution time: 0.0936
DEBUG - 2020-08-30 00:05:35 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 00:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 00:05:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 00:05:35 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 01:35:35 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 01:35:35 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 01:35:35 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 01:35:35 --> Total execution time: 0.0559
DEBUG - 2020-08-30 00:05:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 00:05:37 --> No URI present. Default controller set.
DEBUG - 2020-08-30 00:05:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 00:05:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 00:05:37 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 01:35:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 01:35:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 01:35:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 01:35:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 01:35:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 01:35:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 01:35:38 --> Total execution time: 0.0994
DEBUG - 2020-08-30 00:05:38 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 00:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 00:05:38 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 00:05:38 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 01:35:38 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 01:35:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 01:35:38 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 01:35:38 --> Total execution time: 0.0794
DEBUG - 2020-08-30 02:56:39 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 02:56:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 02:56:39 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 02:56:39 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 02:56:42 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 02:56:42 --> No URI present. Default controller set.
DEBUG - 2020-08-30 02:56:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 02:56:42 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 02:56:42 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 04:26:42 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 04:26:42 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 04:26:42 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 04:26:42 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 04:26:42 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 04:26:42 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 04:26:42 --> Total execution time: 0.2192
DEBUG - 2020-08-30 02:58:04 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 02:58:04 --> No URI present. Default controller set.
DEBUG - 2020-08-30 02:58:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 02:58:04 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 02:58:04 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 04:28:04 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 04:28:04 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 04:28:04 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 04:28:04 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 04:28:04 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 04:28:04 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 04:28:04 --> Total execution time: 0.1279
DEBUG - 2020-08-30 03:24:10 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 03:24:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 03:24:11 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 03:24:11 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 03:24:11 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 03:24:11 --> No URI present. Default controller set.
DEBUG - 2020-08-30 03:24:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 03:24:11 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 03:24:11 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 04:54:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 04:54:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 04:54:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 04:54:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 04:54:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 04:54:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 04:54:11 --> Total execution time: 0.1743
DEBUG - 2020-08-30 05:20:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 05:20:29 --> No URI present. Default controller set.
DEBUG - 2020-08-30 05:20:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 05:20:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 05:20:29 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 06:50:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 06:50:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 06:50:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 06:50:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 06:50:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 06:50:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 06:50:29 --> Total execution time: 0.3537
DEBUG - 2020-08-30 05:20:36 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 05:20:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 05:20:36 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 05:20:36 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 06:50:36 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 06:50:36 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 06:50:36 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 06:50:36 --> Total execution time: 0.1813
DEBUG - 2020-08-30 05:59:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 05:59:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 05:59:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 05:59:56 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 06:00:27 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 06:00:27 --> No URI present. Default controller set.
DEBUG - 2020-08-30 06:00:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 06:00:27 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 06:00:27 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 07:30:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 07:30:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 07:30:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 07:30:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 07:30:28 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 07:30:28 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 07:30:28 --> Total execution time: 0.1645
DEBUG - 2020-08-30 07:03:57 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:03:57 --> No URI present. Default controller set.
DEBUG - 2020-08-30 07:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:03:57 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:03:57 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 08:33:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 08:33:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 08:33:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 08:33:58 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 08:33:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 08:33:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 08:33:58 --> Total execution time: 1.0588
DEBUG - 2020-08-30 07:04:14 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:04:14 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:04:14 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 08:34:14 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 08:34:14 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 08:34:14 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 08:34:14 --> Total execution time: 0.1326
DEBUG - 2020-08-30 07:25:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:25:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:25:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:25:47 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 08:55:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 08:55:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 08:55:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 08:55:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/views/loginPage.php
DEBUG - 2020-08-30 08:55:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 08:55:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 08:55:47 --> Total execution time: 0.4167
DEBUG - 2020-08-30 07:30:16 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:30:16 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:30:16 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 09:00:16 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 09:00:16 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 09:00:16 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 09:00:16 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/about.php
DEBUG - 2020-08-30 09:00:16 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 09:00:16 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 09:00:16 --> Total execution time: 0.1268
DEBUG - 2020-08-30 07:33:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:33:47 --> No URI present. Default controller set.
DEBUG - 2020-08-30 07:33:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:33:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:33:47 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 09:03:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 09:03:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 09:03:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 09:03:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 09:03:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 09:03:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 09:03:47 --> Total execution time: 0.3360
DEBUG - 2020-08-30 07:42:17 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:42:17 --> No URI present. Default controller set.
DEBUG - 2020-08-30 07:42:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:42:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:42:18 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 09:12:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 09:12:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 09:12:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 09:12:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 09:12:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 09:12:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 09:12:18 --> Total execution time: 1.3883
DEBUG - 2020-08-30 07:42:21 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:42:21 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:42:21 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 09:12:21 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 09:12:21 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 09:12:21 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 09:12:21 --> Total execution time: 0.3501
DEBUG - 2020-08-30 07:42:33 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:42:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:42:34 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:42:34 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 09:12:34 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 09:12:34 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 09:12:34 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 09:12:34 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 09:12:34 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 09:12:34 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 09:12:34 --> Total execution time: 0.4205
DEBUG - 2020-08-30 07:42:35 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 07:42:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 07:42:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 07:42:36 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 09:12:36 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 09:12:36 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 09:12:36 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 09:12:36 --> Total execution time: 0.0850
DEBUG - 2020-08-30 08:09:40 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 08:09:40 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 08:09:40 --> No URI present. Default controller set.
DEBUG - 2020-08-30 08:09:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 08:09:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 08:09:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 08:09:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 08:09:41 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 08:09:41 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/about.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 09:39:41 --> Total execution time: 0.8917
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 09:39:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 09:39:41 --> Total execution time: 0.9116
DEBUG - 2020-08-30 08:09:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 08:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 08:09:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 08:09:43 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 09:39:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 09:39:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 09:39:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 09:39:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/contact.php
DEBUG - 2020-08-30 09:39:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 09:39:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 09:39:43 --> Total execution time: 0.0882
DEBUG - 2020-08-30 08:18:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 08:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 08:18:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 08:18:30 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 08:18:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 08:18:31 --> No URI present. Default controller set.
DEBUG - 2020-08-30 08:18:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 08:18:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 08:18:31 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 09:48:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 09:48:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 09:48:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 09:48:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 09:48:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 09:48:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 09:48:31 --> Total execution time: 0.1759
DEBUG - 2020-08-30 08:50:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 08:50:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 08:50:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 08:50:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 08:50:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 08:50:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 08:50:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 08:50:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 08:50:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 08:50:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 08:50:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 08:50:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 08:50:26 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 08:50:26 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 08:50:26 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 10:20:26 --> Total execution time: 1.4528
DEBUG - 2020-08-30 10:20:26 --> Total execution time: 1.4513
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 10:20:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 10:20:26 --> Total execution time: 1.4941
DEBUG - 2020-08-30 09:37:10 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 09:37:10 --> No URI present. Default controller set.
DEBUG - 2020-08-30 09:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 09:37:10 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 09:37:10 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 11:07:10 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 11:07:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 11:07:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 11:07:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 11:07:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 11:07:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 11:07:11 --> Total execution time: 1.0778
DEBUG - 2020-08-30 09:37:12 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 09:37:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 09:37:12 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 09:37:12 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 11:07:12 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 11:07:12 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 11:07:13 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 11:07:13 --> Total execution time: 0.4196
DEBUG - 2020-08-30 09:37:41 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 09:37:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 09:37:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 09:37:41 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 11:07:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 11:07:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 11:07:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 11:07:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/winners.php
DEBUG - 2020-08-30 11:07:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 11:07:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 11:07:41 --> Total execution time: 0.1361
DEBUG - 2020-08-30 09:37:41 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 09:37:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 09:37:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 09:37:41 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 11:07:41 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 11:07:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 11:07:41 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 11:07:41 --> Total execution time: 0.0815
DEBUG - 2020-08-30 09:38:05 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 09:38:05 --> No URI present. Default controller set.
DEBUG - 2020-08-30 09:38:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 09:38:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 09:38:05 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 11:08:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 11:08:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 11:08:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 11:08:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 11:08:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 11:08:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 11:08:05 --> Total execution time: 0.0902
DEBUG - 2020-08-30 09:38:05 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 09:38:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 09:38:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 09:38:05 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 11:08:05 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 11:08:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 11:08:05 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 11:08:05 --> Total execution time: 0.0806
DEBUG - 2020-08-30 10:30:34 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:30:34 --> No URI present. Default controller set.
DEBUG - 2020-08-30 10:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:30:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:30:35 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 12:00:35 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 12:00:35 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 12:00:35 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 12:00:35 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 12:00:35 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 12:00:35 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 12:00:35 --> Total execution time: 0.9530
DEBUG - 2020-08-30 10:30:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:30:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:30:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:30:47 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 12:00:47 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 12:00:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 12:00:47 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 12:00:47 --> Total execution time: 0.3422
DEBUG - 2020-08-30 10:35:13 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:35:13 --> No URI present. Default controller set.
DEBUG - 2020-08-30 10:35:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:35:13 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:35:13 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 12:05:13 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 12:05:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 12:05:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 12:05:13 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 12:05:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 12:05:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 12:05:13 --> Total execution time: 0.1046
DEBUG - 2020-08-30 10:35:15 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:35:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:35:15 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:35:15 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 12:05:15 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 12:05:15 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 12:05:15 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 12:05:15 --> Total execution time: 0.0798
DEBUG - 2020-08-30 10:35:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:35:43 --> No URI present. Default controller set.
DEBUG - 2020-08-30 10:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:35:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:35:43 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 12:05:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 12:05:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 12:05:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 12:05:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 12:05:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 12:05:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 12:05:43 --> Total execution time: 0.0794
DEBUG - 2020-08-30 10:35:48 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:35:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:35:48 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 12:05:48 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 12:05:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 12:05:48 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 12:05:48 --> Total execution time: 0.0738
DEBUG - 2020-08-30 10:40:01 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:40:01 --> No URI present. Default controller set.
DEBUG - 2020-08-30 10:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:40:01 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:40:01 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 12:10:01 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 12:10:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 12:10:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 12:10:01 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 12:10:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 12:10:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 12:10:01 --> Total execution time: 0.1063
DEBUG - 2020-08-30 10:40:03 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:40:04 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:40:04 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 12:10:04 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 12:10:04 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 12:10:04 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 12:10:04 --> Total execution time: 0.0638
DEBUG - 2020-08-30 10:40:06 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:40:06 --> No URI present. Default controller set.
DEBUG - 2020-08-30 10:40:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:40:06 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:40:06 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 12:10:06 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 12:10:06 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 12:10:06 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 12:10:06 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 12:10:06 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 12:10:06 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 12:10:06 --> Total execution time: 0.0980
DEBUG - 2020-08-30 10:40:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 10:40:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 10:40:07 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 10:40:07 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 12:10:07 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 12:10:07 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 12:10:07 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 12:10:07 --> Total execution time: 0.0569
DEBUG - 2020-08-30 11:04:14 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:04:15 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 11:04:15 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 11:04:16 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:04:16 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:04:16 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:04:16 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 12:34:16 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 12:34:16 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 12:34:16 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 12:34:16 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 12:34:16 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 12:34:16 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 12:34:16 --> Total execution time: 0.2333
DEBUG - 2020-08-30 11:33:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:33:52 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:33:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:33:52 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:03:52 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:03:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:03:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:03:52 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:03:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:03:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:03:52 --> Total execution time: 0.9018
DEBUG - 2020-08-30 11:45:55 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:45:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:45:57 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 13:15:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 13:15:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:15:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:15:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/about.php
DEBUG - 2020-08-30 13:15:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:15:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:15:57 --> Total execution time: 1.7764
DEBUG - 2020-08-30 11:45:58 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:45:59 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:45:59 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 13:15:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 13:15:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:15:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:15:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/contact.php
DEBUG - 2020-08-30 13:15:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:15:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:15:59 --> Total execution time: 0.0928
DEBUG - 2020-08-30 11:46:01 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:46:01 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:46:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:46:01 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:46:01 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:16:01 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:16:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:16:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:16:01 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:16:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:16:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:16:01 --> Total execution time: 0.1335
DEBUG - 2020-08-30 11:55:12 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:55:12 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:55:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:55:12 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:55:12 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:25:13 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:25:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:25:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:25:13 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:25:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:25:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:25:13 --> Total execution time: 2.1381
DEBUG - 2020-08-30 11:56:10 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:56:10 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:56:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:56:10 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:56:10 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:26:10 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:26:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:26:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:26:10 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:26:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:26:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:26:10 --> Total execution time: 0.0732
DEBUG - 2020-08-30 11:56:45 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:56:45 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:56:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:56:45 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:26:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:26:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:26:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:26:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:26:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:26:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:26:45 --> Total execution time: 0.0903
DEBUG - 2020-08-30 11:56:53 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:56:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:56:53 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:56:53 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:56:53 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:56:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:56:53 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:56:53 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:26:53 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:26:53 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:26:53 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:26:53 --> Total execution time: 0.3314
DEBUG - 2020-08-30 11:56:53 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:26:53 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:26:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:26:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:26:54 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:26:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:26:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:26:54 --> Total execution time: 0.3482
DEBUG - 2020-08-30 11:56:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:56:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:56:56 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:26:56 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:26:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:26:56 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:26:56 --> Total execution time: 0.0778
DEBUG - 2020-08-30 11:59:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:02 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:59:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:02 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:29:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:29:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:29:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:29:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:29:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:29:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:29:02 --> Total execution time: 0.0702
DEBUG - 2020-08-30 11:59:05 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:05 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:29:05 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:29:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:29:05 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:29:05 --> Total execution time: 0.0577
DEBUG - 2020-08-30 11:59:14 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:14 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:15 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 13:29:15 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 13:29:15 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:29:15 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:29:15 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/how_it_works.php
DEBUG - 2020-08-30 13:29:15 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:29:15 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:29:15 --> Total execution time: 0.0713
DEBUG - 2020-08-30 11:59:20 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:20 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:20 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:29:20 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:29:20 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:29:20 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:29:20 --> Total execution time: 0.0902
DEBUG - 2020-08-30 11:59:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:31 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:59:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:31 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:29:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:29:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:29:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:29:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:29:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:29:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:29:31 --> Total execution time: 0.0495
DEBUG - 2020-08-30 11:59:34 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:34 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:34 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:29:34 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:29:34 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:29:34 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:29:34 --> Total execution time: 0.0820
DEBUG - 2020-08-30 11:59:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:37 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 13:29:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 13:29:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:29:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:29:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/views/loginPage.php
DEBUG - 2020-08-30 13:29:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:29:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:29:37 --> Total execution time: 0.0982
DEBUG - 2020-08-30 11:59:41 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:41 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:29:41 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:29:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:29:41 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:29:41 --> Total execution time: 0.0803
DEBUG - 2020-08-30 11:59:49 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:49 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:49 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 13:29:49 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 13:29:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:29:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:29:49 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/charities.php
DEBUG - 2020-08-30 13:29:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:29:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:29:49 --> Total execution time: 0.0695
DEBUG - 2020-08-30 11:59:50 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:50 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:50 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:29:50 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:29:50 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:29:50 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:29:50 --> Total execution time: 0.0849
DEBUG - 2020-08-30 11:59:59 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 11:59:59 --> No URI present. Default controller set.
DEBUG - 2020-08-30 11:59:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 11:59:59 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 11:59:59 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:29:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:29:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:29:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:29:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:29:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:29:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:29:59 --> Total execution time: 0.0965
DEBUG - 2020-08-30 12:00:00 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:00:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:00:00 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:00:00 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:30:00 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:30:00 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:30:00 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:30:00 --> Total execution time: 0.0621
DEBUG - 2020-08-30 12:02:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:02:30 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:02:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:02:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:02:32 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:32:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:32:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:32:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:32:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:32:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:32:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:32:32 --> Total execution time: 2.0020
DEBUG - 2020-08-30 12:02:35 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:02:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:02:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:02:35 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:32:35 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:32:35 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:32:35 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:32:35 --> Total execution time: 0.7092
DEBUG - 2020-08-30 12:03:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:03:02 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:03:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:03:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:03:02 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:33:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:33:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:33:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:33:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:33:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:33:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:33:02 --> Total execution time: 0.1453
DEBUG - 2020-08-30 12:03:03 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:03:03 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:03:03 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:33:03 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:33:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:33:03 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:33:03 --> Total execution time: 0.0795
DEBUG - 2020-08-30 12:07:42 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:07:42 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:07:42 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:07:43 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:37:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:37:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:37:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:37:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:37:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:37:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:37:43 --> Total execution time: 1.4431
DEBUG - 2020-08-30 12:07:44 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:07:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:07:44 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:07:45 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:37:45 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:37:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:37:45 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:37:45 --> Total execution time: 0.4406
DEBUG - 2020-08-30 12:26:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:26:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:26:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:26:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:26:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:26:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:26:26 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 12:26:26 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:56:26 --> Total execution time: 0.9268
DEBUG - 2020-08-30 13:56:26 --> Total execution time: 0.9352
DEBUG - 2020-08-30 12:26:26 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:26:26 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:26:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:26:26 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 12:26:26 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 12:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:56:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:56:26 --> Total execution time: 0.1216
DEBUG - 2020-08-30 12:26:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:26:27 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:56:27 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:56:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:56:27 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:56:27 --> Total execution time: 0.3550
DEBUG - 2020-08-30 12:26:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:26:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:26:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:26:31 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:56:31 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:56:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:56:31 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:56:31 --> Total execution time: 0.0813
DEBUG - 2020-08-30 12:26:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:26:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:26:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:26:32 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:56:32 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:56:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:56:32 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:56:32 --> Total execution time: 0.0731
DEBUG - 2020-08-30 12:28:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:28:29 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:28:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:28:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:28:29 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:58:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:58:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:58:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:58:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:58:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:58:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:58:29 --> Total execution time: 0.0885
DEBUG - 2020-08-30 12:28:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:28:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:28:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:28:30 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:58:30 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:58:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:58:30 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:58:30 --> Total execution time: 0.0833
DEBUG - 2020-08-30 12:28:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:28:31 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:28:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:28:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:28:32 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:58:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 13:58:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 13:58:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 13:58:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 13:58:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 13:58:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 13:58:32 --> Total execution time: 0.0546
DEBUG - 2020-08-30 12:28:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:28:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:28:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:28:32 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 13:58:32 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 13:58:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 13:58:32 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 13:58:32 --> Total execution time: 0.0605
DEBUG - 2020-08-30 12:36:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:36:37 --> No URI present. Default controller set.
DEBUG - 2020-08-30 12:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:36:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:36:38 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 14:06:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 14:06:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 14:06:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 14:06:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 14:06:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 14:06:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 14:06:38 --> Total execution time: 0.9080
DEBUG - 2020-08-30 12:36:40 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:36:40 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 12:36:40 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 14:06:40 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 14:06:40 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 14:06:40 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 14:06:40 --> Total execution time: 0.3037
DEBUG - 2020-08-30 12:57:42 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 12:57:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 12:57:42 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 12:57:43 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 13:47:19 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:47:27 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:47:28 --> No URI present. Default controller set.
DEBUG - 2020-08-30 13:47:28 --> No URI present. Default controller set.
DEBUG - 2020-08-30 13:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:47:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:47:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:47:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:47:32 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 13:47:32 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 15:17:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 15:17:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 15:17:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:17:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:17:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:17:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:17:33 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 15:17:33 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 15:17:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:17:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:17:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:17:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:17:33 --> Total execution time: 14.4512
DEBUG - 2020-08-30 15:17:33 --> Total execution time: 13.0757
DEBUG - 2020-08-30 13:50:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:50:26 --> No URI present. Default controller set.
DEBUG - 2020-08-30 13:50:36 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:50:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:50:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2020-08-30 13:50:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2) /home/cik5kk55xha6/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2020-08-30 13:50:38 --> Unable to connect to the database
ERROR - 2020-08-30 13:50:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2) /home/cik5kk55xha6/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2020-08-30 13:50:38 --> Unable to connect to the database
DEBUG - 2020-08-30 13:51:48 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:51:48 --> No URI present. Default controller set.
DEBUG - 2020-08-30 13:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:51:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:51:49 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 15:21:49 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 15:21:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:21:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:21:49 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 15:21:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:21:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:21:49 --> Total execution time: 0.8506
DEBUG - 2020-08-30 13:51:51 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:51:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:51:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:51:51 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 15:21:51 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 15:21:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 15:21:51 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 15:21:51 --> Total execution time: 0.3863
DEBUG - 2020-08-30 13:51:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:51:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:51:53 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:51:53 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 15:21:53 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 15:21:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:21:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:21:53 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/views/loginPage.php
DEBUG - 2020-08-30 15:21:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:21:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:21:53 --> Total execution time: 0.1429
DEBUG - 2020-08-30 13:51:53 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:52:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:52:00 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:52:00 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 15:22:00 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 15:22:00 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 15:22:00 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 15:22:00 --> Total execution time: 6.7706
DEBUG - 2020-08-30 13:52:20 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:52:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:52:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:52:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:52:29 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 13:52:29 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 15:22:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 15:22:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 15:22:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:22:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:22:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/views/loginPage.php
DEBUG - 2020-08-30 15:22:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:22:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:22:29 --> Total execution time: 7.7806
DEBUG - 2020-08-30 15:22:29 --> Total execution time: 8.7887
DEBUG - 2020-08-30 13:52:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:52:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:52:40 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 15:22:40 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 13:52:41 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:52:41 --> No URI present. Default controller set.
DEBUG - 2020-08-30 13:52:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:52:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:52:51 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 15:22:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 15:22:51 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:22:51 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:22:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 15:22:51 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:22:51 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:22:51 --> Total execution time: 10.0268
DEBUG - 2020-08-30 13:52:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:52:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:52:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:52:52 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 15:22:52 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 15:22:52 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 15:22:52 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 15:22:52 --> Total execution time: 0.1779
DEBUG - 2020-08-30 13:53:16 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:53:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:53:18 --> Account MX_Controller Initialized
DEBUG - 2020-08-30 15:23:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/account/models/Account_model.php
DEBUG - 2020-08-30 15:23:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:23:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:23:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/account/views/right_sidebar.php
DEBUG - 2020-08-30 15:23:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/account/views/activeTickets.php
DEBUG - 2020-08-30 15:23:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:23:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:23:18 --> Total execution time: 1.8996
DEBUG - 2020-08-30 13:53:19 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:53:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:53:24 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:53:24 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 15:23:24 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 15:23:24 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 15:23:24 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 15:23:24 --> Total execution time: 5.0077
DEBUG - 2020-08-30 13:53:42 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:53:43 --> No URI present. Default controller set.
DEBUG - 2020-08-30 13:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:53:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:53:43 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 15:23:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 15:23:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:23:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:23:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 15:23:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:23:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:23:43 --> Total execution time: 1.0722
DEBUG - 2020-08-30 13:53:44 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:53:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:53:46 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 15:23:46 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 15:23:46 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 15:23:46 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 15:23:46 --> Total execution time: 1.4405
DEBUG - 2020-08-30 13:57:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 13:57:02 --> No URI present. Default controller set.
DEBUG - 2020-08-30 13:57:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 13:57:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 13:57:02 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 15:27:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 15:27:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:27:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:27:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 15:27:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:27:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:27:02 --> Total execution time: 0.4043
DEBUG - 2020-08-30 14:21:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 14:21:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 14:21:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 14:21:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 14:21:26 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 15:51:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 15:51:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 15:51:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:51:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 15:51:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 15:51:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 15:51:27 --> Total execution time: 1.5020
DEBUG - 2020-08-30 14:21:27 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 14:21:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 14:21:27 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 14:21:27 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 15:51:27 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 15:51:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 15:51:27 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 15:51:27 --> Total execution time: 0.1646
DEBUG - 2020-08-30 14:33:44 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 14:33:44 --> No URI present. Default controller set.
DEBUG - 2020-08-30 14:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 14:33:44 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 14:33:44 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 16:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 16:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 16:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 16:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 16:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 16:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 16:03:44 --> Total execution time: 0.0997
DEBUG - 2020-08-30 14:33:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 14:33:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 14:33:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 14:33:48 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 16:03:48 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 16:03:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 16:03:48 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 16:03:48 --> Total execution time: 0.0451
DEBUG - 2020-08-30 15:01:22 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:01:23 --> No URI present. Default controller set.
DEBUG - 2020-08-30 15:01:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:01:23 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:01:23 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 16:31:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 16:31:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 16:31:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 16:31:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 16:31:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 16:31:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 16:31:23 --> Total execution time: 0.9352
DEBUG - 2020-08-30 15:21:16 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:21:16 --> No URI present. Default controller set.
DEBUG - 2020-08-30 15:21:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:21:17 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:21:17 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 16:51:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 16:51:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 16:51:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 16:51:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 16:51:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 16:51:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 16:51:17 --> Total execution time: 1.2214
DEBUG - 2020-08-30 15:27:27 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:27:27 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:27:27 --> No URI present. Default controller set.
DEBUG - 2020-08-30 15:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:27:27 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:27:27 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 15:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 15:27:27 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 16:57:27 --> Total execution time: 0.1190
DEBUG - 2020-08-30 15:27:27 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 16:57:27 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 16:57:27 --> Total execution time: 0.4115
DEBUG - 2020-08-30 15:27:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:27:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:27:30 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 16:57:30 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 16:57:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 16:57:30 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 16:57:30 --> Total execution time: 0.2788
DEBUG - 2020-08-30 15:27:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:27:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:27:30 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 16:57:30 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 16:57:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 16:57:30 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 16:57:30 --> Total execution time: 0.0957
DEBUG - 2020-08-30 15:34:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:34:29 --> No URI present. Default controller set.
DEBUG - 2020-08-30 15:34:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:34:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:34:30 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 17:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 17:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 17:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 17:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 17:04:30 --> Total execution time: 1.8720
DEBUG - 2020-08-30 15:34:34 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:34:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:34:34 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:34:34 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 17:04:34 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 17:04:34 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 17:04:35 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 17:04:35 --> Total execution time: 0.6330
DEBUG - 2020-08-30 15:54:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:54:02 --> No URI present. Default controller set.
DEBUG - 2020-08-30 15:54:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:54:03 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:54:03 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 17:24:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:24:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 17:24:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:24:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 17:24:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 17:24:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 17:24:03 --> Total execution time: 0.5794
DEBUG - 2020-08-30 15:54:20 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:54:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:54:20 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:54:20 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 17:24:20 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 17:24:20 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 17:24:20 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 17:24:20 --> Total execution time: 0.2799
DEBUG - 2020-08-30 15:57:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:57:30 --> No URI present. Default controller set.
DEBUG - 2020-08-30 15:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:57:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:57:30 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 17:27:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:27:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 17:27:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:27:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 17:27:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 17:27:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 17:27:30 --> Total execution time: 0.0951
DEBUG - 2020-08-30 15:57:39 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 15:57:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 15:57:39 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 15:57:39 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 17:27:39 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 17:27:39 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 17:27:39 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 17:27:39 --> Total execution time: 0.0789
DEBUG - 2020-08-30 16:02:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:02:52 --> No URI present. Default controller set.
DEBUG - 2020-08-30 16:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:02:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:02:52 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 17:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 17:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 17:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 17:32:52 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 17:32:52 --> Total execution time: 0.0887
DEBUG - 2020-08-30 16:02:54 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:02:54 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:02:54 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 17:32:54 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 17:32:54 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 17:32:54 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 17:32:54 --> Total execution time: 0.0647
DEBUG - 2020-08-30 16:07:08 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:07:08 --> No URI present. Default controller set.
DEBUG - 2020-08-30 16:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:07:08 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:07:08 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 17:37:08 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:37:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 17:37:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:37:08 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 17:37:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 17:37:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 17:37:08 --> Total execution time: 0.0972
DEBUG - 2020-08-30 16:07:11 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:07:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:07:11 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:07:11 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 17:37:11 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 17:37:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 17:37:11 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 17:37:11 --> Total execution time: 0.0462
DEBUG - 2020-08-30 16:09:04 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:09:04 --> No URI present. Default controller set.
DEBUG - 2020-08-30 16:09:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:09:04 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:09:04 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 17:39:04 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:39:04 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 17:39:04 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:39:04 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 17:39:04 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 17:39:04 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 17:39:04 --> Total execution time: 0.0954
DEBUG - 2020-08-30 16:10:06 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:10:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:10:06 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 16:10:06 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 16:10:08 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:10:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:10:08 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 16:10:08 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 16:10:09 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:10:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:10:09 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 16:10:09 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 16:10:12 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:10:12 --> No URI present. Default controller set.
DEBUG - 2020-08-30 16:10:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:10:12 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:10:12 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 17:40:12 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:40:12 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 17:40:12 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:40:12 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 17:40:12 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 17:40:12 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 17:40:12 --> Total execution time: 0.0824
DEBUG - 2020-08-30 16:32:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:32:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:32:44 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 16:32:44 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 16:32:45 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:32:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:32:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 16:32:45 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 16:32:45 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:32:45 --> No URI present. Default controller set.
DEBUG - 2020-08-30 16:32:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:32:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:32:45 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:02:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 18:02:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:02:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 18:02:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:02:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:02:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:02:46 --> Total execution time: 0.1547
DEBUG - 2020-08-30 16:50:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:50:47 --> No URI present. Default controller set.
DEBUG - 2020-08-30 16:50:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:50:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:50:48 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:20:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 18:20:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:20:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 18:20:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:20:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:20:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:20:48 --> Total execution time: 1.0603
DEBUG - 2020-08-30 16:50:50 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:50:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:50:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:50:51 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 18:20:51 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 18:20:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 18:20:51 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 18:20:51 --> Total execution time: 0.2926
DEBUG - 2020-08-30 16:57:42 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:57:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:57:42 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 16:57:42 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 16:57:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 16:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 16:57:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 16:57:43 --> Cart MX_Controller Initialized
DEBUG - 2020-08-30 18:27:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/cart/models/Cart_model.php
DEBUG - 2020-08-30 18:27:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:27:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 18:27:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/cart/views/viewCartPage.php
DEBUG - 2020-08-30 18:27:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:27:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:27:43 --> Total execution time: 0.1157
DEBUG - 2020-08-30 17:03:17 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:03:17 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:03:17 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:03:17 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:33:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 18:33:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:33:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 18:33:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:33:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:33:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:33:17 --> Total execution time: 0.1148
DEBUG - 2020-08-30 17:03:17 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:03:17 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:03:17 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:03:17 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:33:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:03:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:03:18 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:33:18 --> Total execution time: 0.1503
DEBUG - 2020-08-30 17:03:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:03:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:03:18 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:03:18 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:03:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:33:18 --> Total execution time: 0.1775
DEBUG - 2020-08-30 17:03:18 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:03:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:03:18 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 17:03:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 17:03:18 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:33:18 --> Total execution time: 0.2187
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:33:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:33:18 --> Total execution time: 0.1969
DEBUG - 2020-08-30 17:16:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:16:30 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:16:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:16:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:16:30 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 18:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 18:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:46:30 --> Total execution time: 0.9703
DEBUG - 2020-08-30 17:16:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:16:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:16:32 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 18:46:32 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 18:46:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 18:46:32 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 18:46:32 --> Total execution time: 0.2513
DEBUG - 2020-08-30 17:27:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:27:56 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:27:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:27:56 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:57:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 18:57:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:57:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 18:57:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:57:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:57:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:57:56 --> Total execution time: 0.0695
DEBUG - 2020-08-30 17:27:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:27:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:27:56 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 18:57:56 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 18:57:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 18:57:56 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 18:57:56 --> Total execution time: 0.0689
DEBUG - 2020-08-30 17:27:58 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:27:58 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:27:58 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:27:58 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 18:57:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 18:57:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 18:57:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 18:57:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 18:57:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 18:57:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 18:57:59 --> Total execution time: 0.0638
DEBUG - 2020-08-30 17:27:59 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:27:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:27:59 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:27:59 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 18:57:59 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 18:57:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 18:57:59 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 18:57:59 --> Total execution time: 0.0424
DEBUG - 2020-08-30 17:34:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:34:30 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:34:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:34:30 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 19:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:04:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:04:30 --> Total execution time: 0.0780
DEBUG - 2020-08-30 17:34:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:34:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:34:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:34:32 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 19:04:32 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 19:04:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 19:04:32 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 19:04:32 --> Total execution time: 0.0875
DEBUG - 2020-08-30 17:34:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:34:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:34:37 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 19:04:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 19:04:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:04:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:04:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 19:04:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:04:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:04:37 --> Total execution time: 0.1472
DEBUG - 2020-08-30 17:34:38 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:34:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:34:38 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:34:38 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 19:04:38 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 19:04:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 19:04:38 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 19:04:38 --> Total execution time: 0.0767
DEBUG - 2020-08-30 17:38:46 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:38:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:38:46 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:38:46 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 19:08:46 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 19:08:46 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
DEBUG - 2020-08-30 19:08:46 --> Total execution time: 0.0878
DEBUG - 2020-08-30 17:40:28 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:40:28 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:40:28 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:40:28 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:10:28 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:10:28 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:10:28 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:10:28 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 19:10:28 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:10:28 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:10:28 --> Total execution time: 0.0859
DEBUG - 2020-08-30 17:40:35 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:40:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:40:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:40:35 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 19:10:35 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 19:10:35 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 19:10:35 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 19:10:35 --> Total execution time: 0.1032
DEBUG - 2020-08-30 17:40:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:40:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:40:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:40:37 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 19:10:37 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 19:10:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
DEBUG - 2020-08-30 19:10:37 --> Total execution time: 0.0852
DEBUG - 2020-08-30 17:41:06 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:41:06 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:41:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:41:06 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:41:06 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:11:06 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:11:06 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:11:06 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:11:06 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 19:11:06 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:11:06 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:11:06 --> Total execution time: 0.0944
DEBUG - 2020-08-30 17:41:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:41:07 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:41:07 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 19:11:07 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 19:11:07 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 19:11:07 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 19:11:07 --> Total execution time: 0.0543
DEBUG - 2020-08-30 17:41:49 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:41:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:41:49 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:41:49 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 19:11:49 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 19:11:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:11:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:11:49 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/charities.php
DEBUG - 2020-08-30 19:11:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:11:49 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:11:49 --> Total execution time: 0.0805
DEBUG - 2020-08-30 17:43:45 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:43:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:43:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:43:45 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 19:13:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 19:13:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:13:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:13:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/about.php
DEBUG - 2020-08-30 19:13:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:13:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:13:45 --> Total execution time: 0.1043
DEBUG - 2020-08-30 17:43:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:43:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:43:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:43:47 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 19:13:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 19:13:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:13:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:13:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/contact.php
DEBUG - 2020-08-30 19:13:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:13:47 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:13:47 --> Total execution time: 0.0753
DEBUG - 2020-08-30 17:57:53 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:57:53 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:57:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:57:54 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:57:54 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:27:54 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:27:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:27:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:27:54 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 19:27:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:27:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:27:54 --> Total execution time: 0.9528
DEBUG - 2020-08-30 17:58:48 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:58:48 --> No URI present. Default controller set.
DEBUG - 2020-08-30 17:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:58:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:58:48 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:28:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:28:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:28:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:28:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 19:28:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:28:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:28:48 --> Total execution time: 0.0549
DEBUG - 2020-08-30 17:58:50 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 17:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 17:58:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 17:58:51 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 19:28:51 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 19:28:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 19:28:51 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 19:28:51 --> Total execution time: 0.2574
DEBUG - 2020-08-30 18:11:59 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:11:59 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:11:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:11:59 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:11:59 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:41:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:41:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:41:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:41:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 19:41:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:41:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:41:59 --> Total execution time: 0.8792
DEBUG - 2020-08-30 18:12:44 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:12:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:12:44 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 18:12:44 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 18:28:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:28:02 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:28:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:28:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:28:02 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:58:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:58:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:58:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:58:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 19:58:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:58:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:58:03 --> Total execution time: 0.8966
DEBUG - 2020-08-30 18:28:20 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:28:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:28:20 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:28:20 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 19:58:20 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 19:58:20 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 19:58:20 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 19:58:20 --> Total execution time: 0.3240
DEBUG - 2020-08-30 18:28:41 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:28:41 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:28:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:28:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:28:41 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:58:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:58:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 19:58:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:58:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 19:58:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 19:58:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 19:58:41 --> Total execution time: 0.0961
DEBUG - 2020-08-30 18:31:05 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:31:05 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:31:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:31:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:31:05 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:01:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:01:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:01:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:01:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:01:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:01:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:01:05 --> Total execution time: 0.1011
DEBUG - 2020-08-30 18:39:23 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:39:23 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:39:23 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:39:23 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:09:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:09:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:09:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:09:24 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:09:24 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:09:24 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:09:24 --> Total execution time: 0.1284
DEBUG - 2020-08-30 18:39:28 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:39:28 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:39:28 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:09:28 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:09:28 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:09:28 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:09:28 --> Total execution time: 0.0865
DEBUG - 2020-08-30 18:41:17 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:41:17 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:41:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:41:17 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:41:17 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:11:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:11:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:11:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:11:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:11:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:11:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:11:17 --> Total execution time: 0.0931
DEBUG - 2020-08-30 18:41:21 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:41:21 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:41:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:41:21 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:41:21 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:11:21 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:11:21 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:11:21 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:11:21 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:11:21 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:11:21 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:11:21 --> Total execution time: 0.0499
DEBUG - 2020-08-30 18:41:44 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:41:44 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:41:44 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:41:44 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:11:44 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:11:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:11:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:11:44 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:11:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:11:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:11:44 --> Total execution time: 0.1046
DEBUG - 2020-08-30 18:41:46 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:41:46 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:41:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:41:46 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:41:46 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:11:46 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:11:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:11:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:11:46 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:11:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:11:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:11:46 --> Total execution time: 0.1279
DEBUG - 2020-08-30 18:41:46 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:41:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:41:46 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:41:46 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:11:46 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:11:46 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:11:46 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:11:46 --> Total execution time: 0.0494
DEBUG - 2020-08-30 18:41:55 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:41:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:41:55 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:41:55 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 20:11:55 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 20:11:55 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:11:55 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:11:55 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 20:11:55 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:11:55 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:11:55 --> Total execution time: 0.0966
DEBUG - 2020-08-30 18:41:55 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:41:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:41:55 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:41:55 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:11:55 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:11:55 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:11:55 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:11:55 --> Total execution time: 0.0429
DEBUG - 2020-08-30 18:41:59 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:41:59 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:41:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:41:59 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:41:59 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:11:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:11:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:11:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:11:59 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:11:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:11:59 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:11:59 --> Total execution time: 0.0979
DEBUG - 2020-08-30 18:42:04 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:42:04 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:42:04 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:12:04 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:12:04 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:12:04 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:12:04 --> Total execution time: 0.0437
DEBUG - 2020-08-30 18:42:05 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:42:05 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:42:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:42:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:42:05 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:12:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:12:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:12:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:12:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:12:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:12:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:12:05 --> Total execution time: 0.0878
DEBUG - 2020-08-30 18:42:06 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:42:06 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:42:06 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:12:06 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:12:06 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:12:06 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:12:06 --> Total execution time: 0.0775
DEBUG - 2020-08-30 18:42:17 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:42:17 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:42:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:42:17 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:42:17 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:12:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:12:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:12:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:12:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:12:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:12:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:12:17 --> Total execution time: 0.0719
DEBUG - 2020-08-30 18:42:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:42:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:42:18 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:12:18 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:12:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:12:18 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:12:18 --> Total execution time: 0.0474
DEBUG - 2020-08-30 18:42:46 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:42:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:42:46 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 18:42:46 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 18:42:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:42:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:42:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 18:42:47 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 18:50:12 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:50:13 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:50:13 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:50:13 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:20:13 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:20:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:20:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:20:13 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:20:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:20:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:20:13 --> Total execution time: 0.6007
DEBUG - 2020-08-30 18:50:16 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:50:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:50:16 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:50:16 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:20:16 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:20:16 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:20:16 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:20:16 --> Total execution time: 0.0813
DEBUG - 2020-08-30 18:51:05 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:05 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 20:21:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 20:21:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:21:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:21:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 20:21:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:21:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:21:05 --> Total execution time: 0.0615
DEBUG - 2020-08-30 18:51:06 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:06 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:06 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:21:06 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:21:06 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:21:06 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:21:06 --> Total execution time: 0.0439
DEBUG - 2020-08-30 18:51:23 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:23 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:23 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:23 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:21:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:21:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:21:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:21:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:21:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:21:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:21:23 --> Total execution time: 0.0627
DEBUG - 2020-08-30 18:51:24 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:24 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:24 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:21:24 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:21:24 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:21:24 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:21:24 --> Total execution time: 0.0688
DEBUG - 2020-08-30 18:51:33 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:33 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:33 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:33 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:21:33 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:21:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:21:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:21:33 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:21:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:21:33 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:21:33 --> Total execution time: 0.0540
DEBUG - 2020-08-30 18:51:35 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:35 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:21:35 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:21:35 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:21:35 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:21:35 --> Total execution time: 0.2390
DEBUG - 2020-08-30 18:51:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:37 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 20:21:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 20:21:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:21:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:21:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 20:21:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:21:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:21:37 --> Total execution time: 0.2077
DEBUG - 2020-08-30 18:51:38 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:38 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:38 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:21:38 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:21:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:21:38 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:21:38 --> Total execution time: 0.0645
DEBUG - 2020-08-30 18:51:48 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:48 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 20:21:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 20:21:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:21:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:21:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/views/loginPage.php
DEBUG - 2020-08-30 20:21:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:21:48 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:21:48 --> Total execution time: 0.0964
DEBUG - 2020-08-30 18:51:48 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:51:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:51:48 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:21:48 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:21:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:21:48 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:21:48 --> Total execution time: 0.0989
DEBUG - 2020-08-30 18:52:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:52:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:52:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:52:02 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:22:02 --> Total execution time: 0.0444
DEBUG - 2020-08-30 18:52:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:52:02 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:52:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:52:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:52:02 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:22:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:22:02 --> Total execution time: 0.0594
DEBUG - 2020-08-30 18:53:01 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:53:01 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:53:01 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:53:01 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:23:01 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:23:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:23:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:23:01 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:23:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:23:01 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:23:01 --> Total execution time: 0.0587
DEBUG - 2020-08-30 18:53:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:53:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:53:02 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:23:02 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:23:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:23:02 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:23:02 --> Total execution time: 0.0634
DEBUG - 2020-08-30 18:54:22 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:54:22 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:54:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:54:22 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:54:22 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:24:22 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:24:22 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:24:22 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:24:22 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:24:22 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:24:22 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:24:22 --> Total execution time: 0.0615
DEBUG - 2020-08-30 18:54:23 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:54:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:54:23 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:54:23 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:24:23 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:24:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:24:23 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:24:23 --> Total execution time: 0.0819
DEBUG - 2020-08-30 18:54:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:54:30 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:54:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:54:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:54:30 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:24:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:24:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:24:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:24:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:24:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:24:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:24:30 --> Total execution time: 0.0529
DEBUG - 2020-08-30 18:54:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:54:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:54:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:54:31 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:24:31 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:24:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:24:31 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:24:31 --> Total execution time: 0.0769
DEBUG - 2020-08-30 18:54:55 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:54:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:54:55 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:54:55 --> Cart MX_Controller Initialized
DEBUG - 2020-08-30 20:24:55 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/cart/models/Cart_model.php
DEBUG - 2020-08-30 20:24:55 --> Total execution time: 0.0882
DEBUG - 2020-08-30 18:55:23 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:55:23 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:55:23 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 20:25:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 20:25:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:25:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:25:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 20:25:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:25:23 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:25:23 --> Total execution time: 0.0522
DEBUG - 2020-08-30 18:55:24 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:55:24 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:55:24 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:25:24 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:25:24 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:25:24 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:25:24 --> Total execution time: 0.0773
DEBUG - 2020-08-30 18:58:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 18:58:43 --> No URI present. Default controller set.
DEBUG - 2020-08-30 18:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 18:58:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 18:58:43 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:28:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:28:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:28:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:28:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:28:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:28:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:28:43 --> Total execution time: 0.1087
DEBUG - 2020-08-30 19:03:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:03:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:03:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:03:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:03:56 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:03:56 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:03:56 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:03:56 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:03:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:03:56 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:03:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:03:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:03:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:03:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:03:56 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:03:56 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:03:56 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 19:03:56 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 19:03:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 19:03:56 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:33:56 --> Total execution time: 0.4496
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:33:56 --> Total execution time: 0.4633
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:33:56 --> Total execution time: 0.4719
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:33:56 --> Total execution time: 0.4902
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:33:56 --> Total execution time: 0.4829
DEBUG - 2020-08-30 19:06:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:06:30 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:06:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:06:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:06:30 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:36:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:36:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:36:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:36:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:36:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:36:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:36:30 --> Total execution time: 0.0965
DEBUG - 2020-08-30 19:06:34 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:06:34 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:06:34 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:36:34 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:36:34 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:36:34 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:36:34 --> Total execution time: 0.1019
DEBUG - 2020-08-30 19:12:05 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:12:05 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:12:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:12:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:12:05 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:42:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:42:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:42:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:42:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:42:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:42:05 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:42:05 --> Total execution time: 0.0585
DEBUG - 2020-08-30 19:12:11 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:12:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:12:11 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:12:11 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:42:11 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:42:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:42:11 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:42:11 --> Total execution time: 0.0773
DEBUG - 2020-08-30 19:12:13 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:12:13 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:12:13 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:12:13 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:42:13 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:42:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:42:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:42:13 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:42:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:42:13 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:42:13 --> Total execution time: 0.0878
DEBUG - 2020-08-30 19:12:14 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:12:14 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:12:14 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:42:14 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:42:14 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:42:14 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:42:14 --> Total execution time: 0.0449
DEBUG - 2020-08-30 19:12:19 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:12:19 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:12:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:12:19 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:12:19 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:42:19 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:42:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:42:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:42:19 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:42:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:42:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:42:19 --> Total execution time: 0.0866
DEBUG - 2020-08-30 19:12:23 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:12:23 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:12:23 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:42:23 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:42:23 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:42:23 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:42:23 --> Total execution time: 0.0748
DEBUG - 2020-08-30 19:17:11 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:17:11 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:17:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:17:11 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:17:11 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:47:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:47:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:47:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:47:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:47:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:47:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:47:11 --> Total execution time: 0.1032
DEBUG - 2020-08-30 19:17:14 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:17:14 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:17:14 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:47:14 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:47:14 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:47:14 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:47:14 --> Total execution time: 0.0502
DEBUG - 2020-08-30 19:17:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:17:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:17:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:17:30 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 20:47:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 20:47:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:47:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:47:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 20:47:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:47:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:47:30 --> Total execution time: 0.1332
DEBUG - 2020-08-30 19:17:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:17:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:17:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:17:31 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:47:31 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:47:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:47:31 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:47:31 --> Total execution time: 0.1137
DEBUG - 2020-08-30 19:18:34 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:18:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:18:34 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:18:34 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 20:48:34 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 20:48:35 --> Total execution time: 0.6825
DEBUG - 2020-08-30 19:19:14 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:19:14 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:19:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:19:14 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:19:14 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:49:14 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:49:14 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:49:14 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:49:14 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:49:14 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:49:14 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:49:14 --> Total execution time: 0.0871
DEBUG - 2020-08-30 19:19:15 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:19:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:19:15 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:19:15 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:49:15 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:49:15 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:49:15 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:49:15 --> Total execution time: 0.0568
DEBUG - 2020-08-30 19:20:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:20:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:20:18 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 20:50:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 20:50:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:50:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:50:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/winners.php
DEBUG - 2020-08-30 20:50:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:50:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:50:18 --> Total execution time: 0.1073
DEBUG - 2020-08-30 19:20:19 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:20:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:20:20 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:20:20 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:50:20 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:50:20 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:50:20 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:50:20 --> Total execution time: 0.0899
DEBUG - 2020-08-30 19:21:09 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:21:09 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:21:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:21:09 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:21:09 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:51:09 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:51:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:51:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:51:09 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:51:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:51:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:51:09 --> Total execution time: 0.0697
DEBUG - 2020-08-30 19:21:09 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:21:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:21:09 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:21:10 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:51:10 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:51:10 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:51:10 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:51:10 --> Total execution time: 0.0846
DEBUG - 2020-08-30 19:22:58 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:22:58 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:22:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:22:58 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:22:58 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:52:58 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:52:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:52:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:52:58 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:52:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:52:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:52:58 --> Total execution time: 0.0855
DEBUG - 2020-08-30 19:23:00 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:23:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:23:00 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:23:00 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 20:53:00 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 20:53:01 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 20:53:01 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 20:53:01 --> Total execution time: 0.0800
DEBUG - 2020-08-30 19:28:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:28:31 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:28:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:28:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:28:31 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 20:58:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 20:58:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 20:58:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 20:58:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 20:58:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 20:58:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 20:58:31 --> Total execution time: 0.1064
DEBUG - 2020-08-30 19:44:41 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:44:41 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:44:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:44:41 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:14:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:14:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:14:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:14:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:14:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:14:41 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:14:41 --> Total execution time: 0.1945
DEBUG - 2020-08-30 19:44:42 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:44:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:44:42 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:44:42 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 21:14:42 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 21:14:42 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 21:14:42 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 21:14:42 --> Total execution time: 0.1411
DEBUG - 2020-08-30 19:45:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:45:31 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:45:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:45:31 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:15:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:15:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:15:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:15:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:15:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:15:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:15:31 --> Total execution time: 0.0884
DEBUG - 2020-08-30 19:48:26 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:48:26 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:48:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:48:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:48:26 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:18:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:18:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:18:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:18:26 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:18:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:18:26 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:18:26 --> Total execution time: 0.1545
DEBUG - 2020-08-30 19:48:30 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:48:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:48:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:48:30 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 21:18:30 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 21:18:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 21:18:30 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 21:18:30 --> Total execution time: 0.0461
DEBUG - 2020-08-30 19:49:21 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:49:21 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:49:21 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:49:21 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:19:21 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:19:21 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:19:21 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:19:21 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:19:21 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:19:21 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:19:21 --> Total execution time: 0.0920
DEBUG - 2020-08-30 19:52:11 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:52:11 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:52:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:52:11 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:52:11 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:22:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:22:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:22:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:22:11 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:22:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:22:11 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:22:11 --> Total execution time: 0.1201
DEBUG - 2020-08-30 19:52:12 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:52:12 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:52:12 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 21:22:12 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 21:22:12 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 21:22:12 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 21:22:12 --> Total execution time: 0.0583
DEBUG - 2020-08-30 19:57:46 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 19:57:46 --> No URI present. Default controller set.
DEBUG - 2020-08-30 19:57:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 19:57:46 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 19:57:46 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:27:46 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:27:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:27:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:27:46 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:27:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:27:46 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:27:46 --> Total execution time: 0.1220
DEBUG - 2020-08-30 20:04:49 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:04:49 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:04:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:04:50 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:04:50 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:34:50 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:34:50 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:34:50 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:34:50 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:34:50 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:34:50 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:34:50 --> Total execution time: 0.0602
DEBUG - 2020-08-30 20:04:51 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:04:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:04:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:04:51 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 21:34:51 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 21:34:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 21:34:51 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 21:34:51 --> Total execution time: 0.0473
DEBUG - 2020-08-30 20:11:38 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:11:38 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:11:38 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 21:41:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 21:41:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:41:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:41:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/about.php
DEBUG - 2020-08-30 21:41:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:41:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:41:38 --> Total execution time: 0.1150
DEBUG - 2020-08-30 20:11:40 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:11:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:11:40 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:11:40 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 21:41:40 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 21:41:40 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:41:40 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:41:40 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/contact.php
DEBUG - 2020-08-30 21:41:40 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:41:40 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:41:40 --> Total execution time: 0.0752
DEBUG - 2020-08-30 20:13:09 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:13:09 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:13:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:13:09 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:13:09 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:43:09 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:43:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:43:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:43:09 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:43:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:43:09 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:43:09 --> Total execution time: 0.1014
DEBUG - 2020-08-30 20:13:11 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:13:11 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:13:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:13:12 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:13:12 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:43:12 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:43:12 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:43:12 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:43:12 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:43:12 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:43:12 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:43:12 --> Total execution time: 0.0873
DEBUG - 2020-08-30 20:13:20 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:13:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:13:20 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:13:20 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 21:43:20 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 21:43:20 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 21:43:20 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 21:43:20 --> Total execution time: 0.0629
DEBUG - 2020-08-30 20:13:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:13:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:13:31 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 21:43:31 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 21:43:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 21:43:31 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 21:43:31 --> Total execution time: 0.0785
DEBUG - 2020-08-30 20:13:50 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:13:50 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:13:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:13:50 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:13:50 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:43:50 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:43:50 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:43:50 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:43:50 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:43:50 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:43:50 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:43:50 --> Total execution time: 0.1009
DEBUG - 2020-08-30 20:20:08 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:20:08 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:20:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:20:08 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:20:08 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:50:08 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:50:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:50:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:50:08 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:50:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:50:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:50:08 --> Total execution time: 0.0835
DEBUG - 2020-08-30 20:21:08 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:21:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:21:08 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:21:08 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 21:51:08 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 21:51:08 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 21:51:08 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 21:51:08 --> Total execution time: 0.0813
DEBUG - 2020-08-30 20:24:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:24:18 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:24:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:24:19 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:24:19 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:54:19 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:54:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:54:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:54:19 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:54:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:54:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:54:19 --> Total execution time: 0.0789
DEBUG - 2020-08-30 20:26:38 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:26:38 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:26:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:26:38 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:26:38 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:56:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 21:56:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 21:56:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:56:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 21:56:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 21:56:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 21:56:38 --> Total execution time: 0.1228
DEBUG - 2020-08-30 20:26:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:26:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:26:43 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 21:56:43 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 21:56:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 21:56:43 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 21:56:43 --> Total execution time: 0.0814
DEBUG - 2020-08-30 20:33:03 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:33:03 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:33:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:33:03 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:33:03 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:03:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:03:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:03:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:03:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:03:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:03:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:03:03 --> Total execution time: 0.0989
DEBUG - 2020-08-30 20:33:12 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:33:12 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:33:12 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:03:12 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:03:12 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:03:12 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:03:12 --> Total execution time: 0.0805
DEBUG - 2020-08-30 20:34:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:34:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:34:25 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:34:25 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:04:25 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:04:25 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:04:25 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:04:25 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:04:25 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:04:25 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:04:25 --> Total execution time: 0.0955
DEBUG - 2020-08-30 20:34:27 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:34:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:34:27 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:34:27 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:04:27 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:04:27 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:04:27 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:04:27 --> Total execution time: 0.0797
DEBUG - 2020-08-30 20:43:14 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:43:14 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:43:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:43:14 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:43:14 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:13:14 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:13:14 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:13:14 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:13:14 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:13:14 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:13:14 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:13:14 --> Total execution time: 0.0819
DEBUG - 2020-08-30 20:43:16 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:43:16 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:43:16 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:13:16 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:13:16 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:13:16 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:13:16 --> Total execution time: 0.0652
DEBUG - 2020-08-30 20:43:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:43:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:43:25 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:43:25 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 22:13:25 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 22:13:25 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:13:25 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:13:25 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 22:13:25 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:13:25 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:13:25 --> Total execution time: 0.1302
DEBUG - 2020-08-30 20:43:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:43:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:43:25 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:43:25 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:13:25 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:13:25 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:13:25 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:13:25 --> Total execution time: 0.0887
DEBUG - 2020-08-30 20:44:24 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:44:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:44:24 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:44:24 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 22:14:24 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 22:14:25 --> Total execution time: 0.6339
DEBUG - 2020-08-30 20:44:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:44:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:44:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:44:37 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 22:14:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 22:14:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:14:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:14:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/views/loginPage.php
DEBUG - 2020-08-30 22:14:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:14:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:14:37 --> Total execution time: 0.0864
DEBUG - 2020-08-30 20:44:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:44:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:44:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:44:37 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:14:37 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:14:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:14:37 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:14:37 --> Total execution time: 0.0778
DEBUG - 2020-08-30 20:44:45 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:44:45 --> No URI present. Default controller set.
DEBUG - 2020-08-30 20:44:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:44:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:44:45 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:14:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:14:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:14:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:14:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:14:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:14:45 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:14:45 --> Total execution time: 0.1444
DEBUG - 2020-08-30 20:44:51 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:44:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:44:51 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 22:14:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 22:14:51 --> Total execution time: 0.0544
DEBUG - 2020-08-30 20:46:00 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:46:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:46:00 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:46:00 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 22:16:00 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 22:16:00 --> Total execution time: 0.0667
DEBUG - 2020-08-30 20:46:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:46:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:46:08 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:46:08 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 22:16:08 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 22:16:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:16:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:16:08 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/how_it_works.php
DEBUG - 2020-08-30 22:16:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:16:08 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:16:08 --> Total execution time: 0.0630
DEBUG - 2020-08-30 20:46:08 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:46:08 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:46:08 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:16:08 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:16:08 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:16:08 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:16:08 --> Total execution time: 0.0781
DEBUG - 2020-08-30 20:46:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:46:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:46:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:46:29 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 22:16:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 22:16:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:16:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:16:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/winners.php
DEBUG - 2020-08-30 22:16:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:16:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:16:29 --> Total execution time: 0.0876
DEBUG - 2020-08-30 20:46:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:46:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:46:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 20:46:29 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:16:29 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:16:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:16:29 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:16:29 --> Total execution time: 0.0747
DEBUG - 2020-08-30 20:54:01 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 20:54:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 20:54:01 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 20:54:01 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 21:02:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:02:43 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:02:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:02:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:02:43 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:32:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:32:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:32:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:32:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:32:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:32:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:32:43 --> Total execution time: 0.0918
DEBUG - 2020-08-30 21:02:48 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:02:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:02:48 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:32:48 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:32:48 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:32:48 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:32:48 --> Total execution time: 0.0671
DEBUG - 2020-08-30 21:03:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:03:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:03:56 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 22:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 22:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 22:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:33:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:33:56 --> Total execution time: 0.0489
DEBUG - 2020-08-30 21:03:57 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:03:57 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:03:57 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:33:57 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:33:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:33:57 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:33:57 --> Total execution time: 0.0542
DEBUG - 2020-08-30 21:04:00 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:04:00 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:04:00 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 22:34:00 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 22:34:00 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:34:00 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:34:00 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/views/loginPage.php
DEBUG - 2020-08-30 22:34:00 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:34:00 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:34:00 --> Total execution time: 0.0695
DEBUG - 2020-08-30 21:04:01 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:04:01 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:04:01 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:34:01 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:34:01 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:34:01 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:34:01 --> Total execution time: 0.0713
DEBUG - 2020-08-30 21:04:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:04:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:04:18 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 22:34:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 22:34:18 --> Total execution time: 0.0590
DEBUG - 2020-08-30 21:04:19 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:04:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:04:19 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:04:19 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 22:34:19 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 21:04:19 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:04:19 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:04:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:04:19 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:04:19 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:34:19 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:34:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:34:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:34:19 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:34:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:34:19 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:34:19 --> Total execution time: 0.0962
DEBUG - 2020-08-30 21:04:20 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:04:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:04:20 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:04:20 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:34:20 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:34:20 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:34:20 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:34:20 --> Total execution time: 0.0915
DEBUG - 2020-08-30 21:04:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:04:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:04:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:04:32 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 22:34:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 22:34:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:34:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:34:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/how_it_works.php
DEBUG - 2020-08-30 22:34:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:34:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:34:32 --> Total execution time: 0.0607
DEBUG - 2020-08-30 21:04:33 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:04:33 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:04:33 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:34:33 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 22:34:33 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 22:34:33 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 22:34:33 --> Total execution time: 0.0811
DEBUG - 2020-08-30 21:10:39 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:10:39 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:10:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:10:39 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:10:39 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:40:39 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:40:39 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:40:39 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:40:39 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:40:39 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:40:39 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:40:39 --> Total execution time: 0.1020
DEBUG - 2020-08-30 21:14:58 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:14:58 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:14:58 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:14:58 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:44:58 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:44:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:44:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:44:58 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:44:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:44:58 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:44:58 --> Total execution time: 0.0981
DEBUG - 2020-08-30 21:15:57 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:15:57 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:15:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:15:57 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:15:57 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:15:57 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:15:57 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:15:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:45:57 --> Total execution time: 0.0730
DEBUG - 2020-08-30 21:15:57 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:15:57 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:15:57 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:15:57 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:15:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:15:57 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:15:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:15:57 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 21:15:57 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:15:57 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:45:57 --> Total execution time: 0.1388
DEBUG - 2020-08-30 21:15:57 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 21:15:57 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:45:57 --> Total execution time: 0.1366
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:45:57 --> Total execution time: 0.1592
DEBUG - 2020-08-30 21:15:57 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:15:57 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:15:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:15:57 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:15:57 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:45:57 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:45:57 --> Total execution time: 0.0803
DEBUG - 2020-08-30 21:21:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:21:56 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:21:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:21:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:21:56 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:51:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:51:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:51:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:51:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:51:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:51:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:51:56 --> Total execution time: 0.1008
DEBUG - 2020-08-30 21:27:24 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:27:24 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:27:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:27:24 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:27:24 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:57:24 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 22:57:24 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 22:57:24 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 22:57:24 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 22:57:24 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 22:57:24 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 22:57:24 --> Total execution time: 0.0719
DEBUG - 2020-08-30 21:31:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:31:43 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:31:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:31:43 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:01:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:01:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:01:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:01:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:01:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:01:43 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:01:43 --> Total execution time: 0.0982
DEBUG - 2020-08-30 21:31:45 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:31:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:31:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:31:45 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:01:45 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:01:45 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:01:45 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:01:45 --> Total execution time: 0.1905
DEBUG - 2020-08-30 21:31:51 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:31:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:31:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:31:51 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 23:01:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 23:01:51 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:01:51 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:01:51 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 23:01:51 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:01:51 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:01:51 --> Total execution time: 0.0752
DEBUG - 2020-08-30 21:31:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:31:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:31:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:31:52 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:01:52 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:01:52 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:01:52 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:01:52 --> Total execution time: 0.0713
DEBUG - 2020-08-30 21:32:33 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:32:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:32:33 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:32:33 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 23:02:33 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 23:02:33 --> Total execution time: 0.4434
DEBUG - 2020-08-30 21:32:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:32:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:32:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:32:37 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 23:02:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 23:02:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:02:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:02:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/views/loginPage.php
DEBUG - 2020-08-30 23:02:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:02:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:02:37 --> Total execution time: 0.0628
DEBUG - 2020-08-30 21:32:38 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:32:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:32:38 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:32:38 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:02:38 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:02:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:02:38 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:02:38 --> Total execution time: 0.0782
DEBUG - 2020-08-30 21:32:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:32:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:32:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:32:47 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 23:02:47 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/login/models/Login_model.php
DEBUG - 2020-08-30 23:02:47 --> Total execution time: 0.0594
DEBUG - 2020-08-30 21:33:42 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:33:42 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:33:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:33:42 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:33:42 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:03:42 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:03:42 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:03:42 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:03:42 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:03:42 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:03:42 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:03:42 --> Total execution time: 0.0586
DEBUG - 2020-08-30 21:33:44 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:33:44 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:33:44 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:03:44 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:03:44 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:03:44 --> Total execution time: 0.0880
DEBUG - 2020-08-30 21:33:44 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:33:44 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:33:44 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:33:44 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:03:44 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:03:44 --> Total execution time: 0.0939
DEBUG - 2020-08-30 21:34:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:34:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:34:02 --> Cart MX_Controller Initialized
DEBUG - 2020-08-30 23:04:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/cart/models/Cart_model.php
DEBUG - 2020-08-30 23:04:02 --> Total execution time: 0.1018
DEBUG - 2020-08-30 21:34:17 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:34:17 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:34:17 --> Cart MX_Controller Initialized
DEBUG - 2020-08-30 23:04:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/cart/models/Cart_model.php
DEBUG - 2020-08-30 23:04:17 --> Total execution time: 0.0652
DEBUG - 2020-08-30 21:34:38 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:34:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:34:38 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:34:38 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 23:04:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 23:04:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:04:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:04:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 23:04:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:04:38 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:04:38 --> Total execution time: 0.0538
DEBUG - 2020-08-30 21:34:39 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:34:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:34:39 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:34:39 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:04:39 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:04:39 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:04:39 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:04:39 --> Total execution time: 0.0575
DEBUG - 2020-08-30 21:36:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:36:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:36:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:36:32 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:06:32 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:06:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:06:32 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:06:32 --> Total execution time: 0.0714
DEBUG - 2020-08-30 21:36:34 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:36:34 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:36:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:36:34 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:36:34 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:06:34 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:06:34 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:06:34 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:06:34 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:06:34 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:06:34 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:06:34 --> Total execution time: 0.0997
DEBUG - 2020-08-30 21:36:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:36:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:36:43 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:06:43 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:06:43 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:06:43 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:06:43 --> Total execution time: 0.0820
DEBUG - 2020-08-30 21:40:14 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:40:14 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:40:14 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:10:14 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:10:14 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
DEBUG - 2020-08-30 23:10:14 --> Total execution time: 0.0857
DEBUG - 2020-08-30 21:41:41 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:41:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:41:41 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:41:41 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:11:41 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:11:41 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
DEBUG - 2020-08-30 23:11:41 --> Total execution time: 0.0520
DEBUG - 2020-08-30 21:52:10 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:52:10 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:52:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:52:10 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:52:10 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:22:10 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:22:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:22:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:22:10 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:22:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:22:10 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:22:10 --> Total execution time: 0.0917
DEBUG - 2020-08-30 21:59:17 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:59:17 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:59:17 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:59:17 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:29:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:29:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:29:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:29:17 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:29:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:29:17 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:29:17 --> Total execution time: 0.1071
DEBUG - 2020-08-30 21:59:40 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 21:59:40 --> No URI present. Default controller set.
DEBUG - 2020-08-30 21:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 21:59:40 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 21:59:40 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:29:40 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:29:40 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:29:40 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:29:40 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:29:40 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:29:40 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:29:40 --> Total execution time: 0.0520
DEBUG - 2020-08-30 22:07:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:07:32 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:07:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:07:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:07:32 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:37:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:37:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:37:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:37:32 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:37:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:37:32 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:37:32 --> Total execution time: 0.0757
DEBUG - 2020-08-30 22:08:03 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:08:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:08:03 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:08:03 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:38:03 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:38:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:38:03 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:38:03 --> Total execution time: 0.1140
DEBUG - 2020-08-30 22:10:02 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:10:02 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:10:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:10:02 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:10:02 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:40:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:40:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:40:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:40:02 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:40:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:40:02 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:40:02 --> Total execution time: 0.1848
DEBUG - 2020-08-30 22:10:04 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:10:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:10:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:10:05 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:40:05 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:40:05 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:40:05 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:40:05 --> Total execution time: 0.3444
DEBUG - 2020-08-30 22:10:37 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:10:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:10:37 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:10:37 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 23:40:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/models/Register_model.php
DEBUG - 2020-08-30 23:40:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:40:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:40:37 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/register/views/registerPage.php
DEBUG - 2020-08-30 23:40:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:40:37 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:40:37 --> Total execution time: 0.0859
DEBUG - 2020-08-30 22:10:38 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:10:38 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:10:38 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:40:38 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:40:38 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:40:38 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:40:38 --> Total execution time: 0.0844
DEBUG - 2020-08-30 22:10:54 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:10:54 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:10:54 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:10:54 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:40:54 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:40:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:40:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:40:54 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:40:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:40:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:40:54 --> Total execution time: 0.1011
DEBUG - 2020-08-30 22:11:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:11:29 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:11:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:11:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:11:29 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:41:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:41:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:41:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:41:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:41:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:41:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:41:29 --> Total execution time: 0.0952
DEBUG - 2020-08-30 22:11:53 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:11:53 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:11:53 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:11:53 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:41:53 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:41:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:41:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:41:53 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:41:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:41:53 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:41:53 --> Total execution time: 0.0957
DEBUG - 2020-08-30 22:11:54 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:11:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:11:54 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:11:54 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 23:41:54 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 23:41:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:41:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:41:54 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/about.php
DEBUG - 2020-08-30 23:41:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:41:54 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:41:54 --> Total execution time: 0.0979
DEBUG - 2020-08-30 22:11:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:11:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:11:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:11:56 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 23:41:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/models/Page_model.php
DEBUG - 2020-08-30 23:41:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:41:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:41:56 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/page/views/contact.php
DEBUG - 2020-08-30 23:41:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:41:56 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:41:56 --> Total execution time: 0.0559
DEBUG - 2020-08-30 22:16:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:16:29 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:16:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:16:30 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:16:30 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:46:30 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:46:30 --> Total execution time: 0.1560
DEBUG - 2020-08-30 22:18:03 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:18:03 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:18:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:18:03 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:18:03 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:48:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:48:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:48:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:48:03 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:48:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:48:03 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:48:03 --> Total execution time: 0.0915
DEBUG - 2020-08-30 22:18:03 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:18:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:18:03 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:18:04 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:48:04 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:48:04 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:48:04 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:48:04 --> Total execution time: 0.1219
DEBUG - 2020-08-30 22:18:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:18:18 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:18:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:18:18 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:48:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:48:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:48:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:48:18 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:48:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:48:18 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:48:18 --> Total execution time: 0.0964
DEBUG - 2020-08-30 22:18:19 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:18:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:18:19 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:18:19 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:48:19 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:48:19 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:48:19 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:48:19 --> Total execution time: 0.0893
DEBUG - 2020-08-30 22:20:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:20:31 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:20:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:20:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:20:31 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:50:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:50:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:50:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:50:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:50:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:50:31 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:50:31 --> Total execution time: 0.0945
DEBUG - 2020-08-30 22:27:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:27:29 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:27:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:27:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:27:29 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:57:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/models/Home_model.php
DEBUG - 2020-08-30 23:57:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/header.php
DEBUG - 2020-08-30 23:57:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/topbar.php
DEBUG - 2020-08-30 23:57:29 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/home/views/home.php
DEBUG - 2020-08-30 23:57:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/include/footer.php
DEBUG - 2020-08-30 23:57:29 --> File loaded: /home/cik5kk55xha6/public_html/application/views/layout.php
DEBUG - 2020-08-30 23:57:29 --> Total execution time: 0.1086
DEBUG - 2020-08-30 22:27:31 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:27:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:27:31 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:27:31 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:57:31 --> Config file loaded: /home/cik5kk55xha6/public_html/application/config/rest.php
DEBUG - 2020-08-30 23:57:31 --> File loaded: /home/cik5kk55xha6/public_html/application/modules/api/models/Api_model.php
ERROR - 2020-08-30 23:57:31 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api' does not have a method 'index_get' /home/cik5kk55xha6/public_html/application/libraries/REST_Controller.php 739
DEBUG - 2020-08-30 23:57:31 --> Total execution time: 0.0541
DEBUG - 2020-08-30 22:33:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:33:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 22:33:52 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 22:34:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:34:29 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:34:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:34:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:34:29 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:44:05 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:44:05 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:44:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:44:05 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:44:05 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:44:39 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:44:39 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:44:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:44:39 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:44:39 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:51:58 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:51:58 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:51:58 --> Account MX_Controller Initialized
DEBUG - 2020-08-30 22:51:59 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:51:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:51:59 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:51:59 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 22:52:01 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:52:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:52:01 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:52:01 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 22:56:46 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:56:46 --> No URI present. Default controller set.
DEBUG - 2020-08-30 22:56:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:56:46 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:56:46 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 22:56:53 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 22:56:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 22:56:53 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 22:56:53 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:00:19 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:00:19 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:00:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:00:19 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:00:19 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:00:21 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:00:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:00:22 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:00:22 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:02:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:02:52 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:02:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:02:52 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:05:08 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:05:08 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:05:08 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:05:08 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:05:11 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:05:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:05:11 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:05:11 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:05:33 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:05:33 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:05:33 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 23:05:39 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:05:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:05:39 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:05:39 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:13:29 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:13:29 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:13:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:13:29 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:13:30 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:13:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:13:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:13:32 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:27:11 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:27:11 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:27:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:27:14 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:27:15 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:27:17 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:27:17 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:27:17 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:37:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:37:47 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:37:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:37:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:37:47 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:37:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:37:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:37:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:37:47 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:37:50 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:37:50 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:37:50 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:37:51 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:37:51 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:37:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 23:37:51 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 23:37:51 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:37:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 23:37:51 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 23:37:51 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:37:51 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 23:37:51 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 23:37:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:37:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:37:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
ERROR - 2020-08-30 23:37:52 --> 404 Page Not Found: /index
DEBUG - 2020-08-30 23:38:21 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:38:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:38:21 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:38:21 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 23:38:22 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:38:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:38:22 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:38:22 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:38:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:38:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:38:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:38:25 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:38:25 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:38:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:38:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:38:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:38:32 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 23:38:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:38:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:38:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:38:32 --> Login MX_Controller Initialized
DEBUG - 2020-08-30 23:38:32 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:38:32 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:38:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:38:32 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:38:32 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:38:34 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:38:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:38:34 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:38:34 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:38:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:38:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:38:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:38:52 --> Cart MX_Controller Initialized
DEBUG - 2020-08-30 23:39:15 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:39:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:39:15 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:39:15 --> Cart MX_Controller Initialized
DEBUG - 2020-08-30 23:39:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:39:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:39:25 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:39:25 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 23:39:26 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:39:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:39:26 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:39:26 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:39:44 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:39:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:39:44 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:39:44 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 23:39:46 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:39:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:39:46 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:39:46 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:39:47 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:39:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:39:47 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:39:47 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 23:39:48 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:39:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:39:48 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:39:48 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 23:39:50 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:39:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:39:50 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:39:50 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:40:06 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:40:06 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:40:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:40:06 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:40:06 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:40:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:40:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:40:07 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:40:07 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:40:35 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:40:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:40:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:40:35 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:40:36 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:40:36 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:40:36 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:40:40 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:40:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:40:40 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:40:40 --> Cart MX_Controller Initialized
DEBUG - 2020-08-30 23:40:56 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:40:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:40:56 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:40:56 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:40:57 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:40:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:40:57 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:40:57 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:41:06 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:06 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:41:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:06 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:06 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:41:06 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:06 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:41:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:06 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:06 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:07 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:07 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:07 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:07 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:07 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:07 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:41:07 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:07 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:07 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:41:07 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:07 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:41:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:18 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 23:41:18 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:18 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:18 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:41:45 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:45 --> Page MX_Controller Initialized
DEBUG - 2020-08-30 23:41:45 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:41:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:41:45 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:41:45 --> Api MX_Controller Initialized
DEBUG - 2020-08-30 23:47:07 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:47:07 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:47:07 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:47:07 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:47:22 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:47:22 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:47:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:47:22 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:47:22 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:47:52 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:47:52 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:47:52 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 23:48:25 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:48:25 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:48:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:48:25 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:48:25 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:48:40 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:48:40 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:48:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:48:40 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:48:40 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:48:43 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:48:43 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:48:43 --> Register MX_Controller Initialized
DEBUG - 2020-08-30 23:51:13 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:51:13 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:51:13 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:51:13 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:51:27 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:51:27 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:51:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:51:27 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:51:27 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:53:35 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:53:35 --> No URI present. Default controller set.
DEBUG - 2020-08-30 23:53:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:53:35 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:53:35 --> Home MX_Controller Initialized
DEBUG - 2020-08-30 23:53:39 --> UTF-8 Support Enabled
DEBUG - 2020-08-30 23:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2020-08-30 23:53:39 --> Session: "sess_save_path" is empty; using BC fallback to "sess_table_name".
DEBUG - 2020-08-30 23:53:39 --> Api MX_Controller Initialized
