<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-16 02:09:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2023-08-16 08:21:30 --> Could not find the language line ""
ERROR - 2023-08-16 14:09:53 --> Could not find the language line "_expenses_for"
ERROR - 2023-08-16 14:12:13 --> Query error: MySQL server has gone away - Invalid query: SELECT 
            concat(round((sum( case when `attendence_type_id`=1 then 1 else 0 end)*100/1213),2),'%') as present, concat(round((sum( case when `attendence_type_id`=3 then 1 else 0 end)*100/1213),2),'%') as late,
            concat(round((sum( case when `attendence_type_id`=4 then 1 else 0 end)*100/1213),2),'%') as absent,concat(round((sum( case when `attendence_type_id`=6 then 1 else 0 end)*100/1213),2),'%') as half_day,sum( case when `attendence_type_id`=1 then 1 else 0 end) as total_present,sum( case when `attendence_type_id`=3 then 1 else 0 end) as total_late,sum( case when `attendence_type_id`=4 then 1 else 0 end) as total_absent,sum( case when `attendence_type_id`=6 then 1 else 0 end) as total_half_day FROM `student_attendences` inner join student_session on student_attendences.student_session_id=student_session.id where date_format(date,'%Y-%m-%d')='2023-08-16' and student_session.session_id='18'
ERROR - 2023-08-16 14:12:13 --> Severity: error --> Exception: Call to a member function row_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Stuattendence_model.php 135
ERROR - 2023-08-16 14:12:35 --> Could not find the language line "_expenses_for"
ERROR - 2023-08-16 14:12:41 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:12:52 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:13:03 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:13:03 --> Could not find the language line "detail"
ERROR - 2023-08-16 14:13:03 --> Could not find the language line "file"
ERROR - 2023-08-16 14:13:03 --> Could not find the language line "upload_documents1"
ERROR - 2023-08-16 14:13:03 --> Could not find the language line "Save"
ERROR - 2023-08-16 14:13:10 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:17:16 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:23:49 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:23:52 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:23:52 --> Could not find the language line "detail"
ERROR - 2023-08-16 14:23:52 --> Could not find the language line "file"
ERROR - 2023-08-16 14:23:52 --> Could not find the language line "upload_documents1"
ERROR - 2023-08-16 14:23:52 --> Could not find the language line "Save"
ERROR - 2023-08-16 14:23:55 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:24:35 --> Could not find the language line "student1"
ERROR - 2023-08-16 14:29:55 --> Could not find the language line "_expenses_for"
ERROR - 2023-08-16 14:31:44 --> Query error: MySQL server has gone away - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-08-16 14:31:44 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-08-16 14:31:44 --> Query error: MySQL server has gone away - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-08-16 14:31:44 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-08-16 14:31:44 --> Query error: MySQL server has gone away - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`class_teacher`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`biometric`, `sch_settings`.`biometric_device`, `sch_settings`.`time_format`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`attendence_type`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`currency_place`, `sch_settings`.`start_month`, `sch_settings`.`session_id`, `sch_settings`.`fee_due_days`, `sch_settings`.`image`, `sch_settings`.`theme`, `sessions`.`session`, `sch_settings`.`online_admission`, `sch_settings`.`is_duplicate_fees_invoice`, `sch_settings`.`is_student_house`, `sch_settings`.`is_blood_group`, `sch_settings`.`admin_logo`, `sch_settings`.`admin_small_logo`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `sch_settings`.`app_logo`
FROM `sch_settings`
JOIN `sessions` ON `sessions`.`id` = `sch_settings`.`session_id`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2023-08-16 14:31:44 --> Severity: error --> Exception: Call to a member function result_array() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Setting_model.php 43
ERROR - 2023-08-16 15:19:29 --> Could not find the language line "student_fees1"
ERROR - 2023-08-16 15:19:29 --> Could not find the language line "array_search(needle, haystack)"
ERROR - 2023-08-16 15:19:47 --> Could not find the language line "student_fees1"
ERROR - 2023-08-16 15:19:47 --> Could not find the language line "array_search(needle, haystack)"
ERROR - 2023-08-16 15:20:07 --> Could not find the language line "student_fees1"
ERROR - 2023-08-16 15:20:07 --> Could not find the language line "array_search(needle, haystack)"
ERROR - 2023-08-16 15:20:25 --> Could not find the language line "_expenses_for"
ERROR - 2023-08-16 15:24:55 --> Could not find the language line "_expenses_for"
ERROR - 2023-08-16 15:27:00 --> Could not find the language line "_expenses_for"
ERROR - 2023-08-16 22:28:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2023-08-16 22:28:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u623942019/domains/ksmbbv.com/public_html/application/views/themes/default/pages/page.php 111
