<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-15 00:05:27 --> Could not find the language line ""
ERROR - 2023-09-15 00:05:27 --> Could not find the language line ""
ERROR - 2023-09-15 06:38:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2023-09-15 12:04:36 --> Could not find the language line "_expenses_for"
ERROR - 2023-09-15 12:04:45 --> Could not find the language line "_expenses_for"
ERROR - 2023-09-15 12:05:10 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 12:05:20 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 12:05:28 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 12:05:38 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 12:37:05 --> Could not find the language line ""
ERROR - 2023-09-15 12:37:06 --> Could not find the language line ""
ERROR - 2023-09-15 12:46:03 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 12:46:25 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 12:47:23 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 12:47:43 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 12:58:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:05 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:05 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:05 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:58:05 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:58:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:07 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:07 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:07 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:58:07 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:58:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:08 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:08 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:08 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:58:08 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:58:10 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:10 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:10 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:10 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:10 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:58:10 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:58:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:11 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:11 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:11 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:58:11 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:58:25 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:25 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:25 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:58:25 --> Unable to connect to the database
ERROR - 2023-09-15 12:58:25 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:58:25 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:59:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:05 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:05 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:05 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:59:05 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:59:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:08 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:08 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:08 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:59:08 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:59:10 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:10 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:10 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:10 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:10 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:59:10 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:59:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:34 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:34 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:34 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:59:34 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 12:59:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:35 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 12:59:35 --> Unable to connect to the database
ERROR - 2023-09-15 12:59:35 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 12:59:35 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:00:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:00:17 --> Unable to connect to the database
ERROR - 2023-09-15 13:00:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:00:17 --> Unable to connect to the database
ERROR - 2023-09-15 13:00:17 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:00:17 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:00:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:00:19 --> Unable to connect to the database
ERROR - 2023-09-15 13:00:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:00:19 --> Unable to connect to the database
ERROR - 2023-09-15 13:00:19 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:00:19 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:00:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:00:48 --> Unable to connect to the database
ERROR - 2023-09-15 13:00:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:00:48 --> Unable to connect to the database
ERROR - 2023-09-15 13:00:48 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:00:48 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:01:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:01:07 --> Unable to connect to the database
ERROR - 2023-09-15 13:01:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:01:07 --> Unable to connect to the database
ERROR - 2023-09-15 13:01:07 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:01:07 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:01:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:01:08 --> Unable to connect to the database
ERROR - 2023-09-15 13:01:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:01:08 --> Unable to connect to the database
ERROR - 2023-09-15 13:01:08 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:01:08 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:01:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:01:12 --> Unable to connect to the database
ERROR - 2023-09-15 13:01:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:01:12 --> Unable to connect to the database
ERROR - 2023-09-15 13:01:12 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:01:12 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:01:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:01:14 --> Unable to connect to the database
ERROR - 2023-09-15 13:01:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1102): Incorrect database name 'u623942019_ksmbbv    ' /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:01:14 --> Unable to connect to the database
ERROR - 2023-09-15 13:01:14 --> Query error: Incorrect database name 'u623942019_ksmbbv    ' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:01:14 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:03:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'u623942019_ksmbbv'@'localhost' (using password: YES) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:03:03 --> Unable to connect to the database
ERROR - 2023-09-15 13:03:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'u623942019_ksmbbv'@'localhost' (using password: YES) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:03:03 --> Unable to connect to the database
ERROR - 2023-09-15 13:03:03 --> Query error: Access denied for user 'u623942019_ksmbbv'@'localhost' (using password: YES) - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:03:03 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:03:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'u623942019_ksmbbv'@'localhost' (using password: YES) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:03:05 --> Unable to connect to the database
ERROR - 2023-09-15 13:03:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'u623942019_ksmbbv'@'localhost' (using password: YES) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2023-09-15 13:03:05 --> Unable to connect to the database
ERROR - 2023-09-15 13:03:05 --> Query error: Access denied for user 'u623942019_ksmbbv'@'localhost' (using password: YES) - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-09-15 13:03:05 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-09-15 13:09:16 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 13:09:28 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 13:14:58 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 13:16:15 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 13:24:13 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:28:17 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:28:22 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:28:32 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:29:32 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:29:49 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:30:37 --> Could not find the language line "_expenses_for"
ERROR - 2023-09-15 14:30:42 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:30:55 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:56:33 --> Could not find the language line "_expenses_for"
ERROR - 2023-09-15 14:56:39 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:56:50 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:58:09 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:58:22 --> Could not find the language line "filter_by_name1"
ERROR - 2023-09-15 14:59:11 --> Could not find the language line "student1"
ERROR - 2023-09-15 14:59:31 --> Could not find the language line "student1"
ERROR - 2023-09-15 14:59:36 --> Could not find the language line "student1"
ERROR - 2023-09-15 14:59:42 --> Could not find the language line "student1"
ERROR - 2023-09-15 14:59:51 --> Could not find the language line "student1"
ERROR - 2023-09-15 15:04:07 --> Could not find the language line "student1"
ERROR - 2023-09-15 15:04:12 --> Could not find the language line "student1"
ERROR - 2023-09-15 15:31:05 --> Could not find the language line "student_fee1"
ERROR - 2023-09-15 15:31:16 --> Could not find the language line "student_fee1"
