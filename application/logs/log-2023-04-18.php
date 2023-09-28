<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-18 03:30:40 --> Could not find the language line ""
ERROR - 2023-04-18 03:30:41 --> Could not find the language line ""
ERROR - 2023-04-18 07:09:05 --> Could not find the language line ""
ERROR - 2023-04-18 08:05:55 --> Could not find the language line ""
ERROR - 2023-04-18 09:31:36 --> Could not find the language line "_expenses_for"
ERROR - 2023-04-18 09:32:39 --> Severity: Warning --> file(): Filename cannot be empty /home/u623942019/domains/ksmbbv.com/public_html/application/libraries/Smsgateway.php 353
ERROR - 2023-04-18 09:41:10 --> Severity: Warning --> file(): Filename cannot be empty /home/u623942019/domains/ksmbbv.com/public_html/application/libraries/Smsgateway.php 353
ERROR - 2023-04-18 10:17:26 --> Could not find the language line ""
ERROR - 2023-04-18 10:48:58 --> Severity: Warning --> file(): Filename cannot be empty /home/u623942019/domains/ksmbbv.com/public_html/application/libraries/Smsgateway.php 353
ERROR - 2023-04-18 10:48:58 --> Severity: Warning --> file(): Filename cannot be empty /home/u623942019/domains/ksmbbv.com/public_html/application/libraries/Smsgateway.php 353
ERROR - 2023-04-18 11:44:47 --> Could not find the language line "export"
ERROR - 2023-04-18 11:44:47 --> Could not find the language line "sample"
ERROR - 2023-04-18 11:44:47 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 11:53:14 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `classes`.`id` IS NULL
GROUP BY `class_batches`.`class_section_id`
ORDER BY `class_batches`.`id`
ERROR - 2023-04-18 11:53:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 353
ERROR - 2023-04-18 11:53:14 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`, `batch`.`name` as `batch_name`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `batch` ON `batch`.`id` = `class_batches`.`batch_id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `class_batches`.`class_section_id` IS NULL
ORDER BY `class_batches`.`id`
ERROR - 2023-04-18 11:53:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 370
ERROR - 2023-04-18 11:53:40 --> Could not find the language line "export"
ERROR - 2023-04-18 11:53:40 --> Could not find the language line "sample"
ERROR - 2023-04-18 11:53:40 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 11:54:02 --> Could not find the language line "export"
ERROR - 2023-04-18 11:54:02 --> Could not find the language line "sample"
ERROR - 2023-04-18 11:54:02 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 11:59:43 --> Could not find the language line "export"
ERROR - 2023-04-18 11:59:43 --> Could not find the language line "sample"
ERROR - 2023-04-18 11:59:43 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 15:47:04 --> Could not find the language line "export"
ERROR - 2023-04-18 15:47:04 --> Could not find the language line "sample"
ERROR - 2023-04-18 15:47:04 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 15:53:27 --> Could not find the language line "export"
ERROR - 2023-04-18 15:53:27 --> Could not find the language line "sample"
ERROR - 2023-04-18 15:53:27 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 15:57:48 --> Could not find the language line "export"
ERROR - 2023-04-18 15:57:48 --> Could not find the language line "sample"
ERROR - 2023-04-18 15:57:48 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 16:00:02 --> Could not find the language line "export"
ERROR - 2023-04-18 16:00:02 --> Could not find the language line "sample"
ERROR - 2023-04-18 16:00:02 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 16:02:26 --> Could not find the language line "export"
ERROR - 2023-04-18 16:02:26 --> Could not find the language line "sample"
ERROR - 2023-04-18 16:02:26 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 16:05:19 --> Could not find the language line "export"
ERROR - 2023-04-18 16:05:19 --> Could not find the language line "sample"
ERROR - 2023-04-18 16:05:19 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 17:27:18 --> Could not find the language line "export"
ERROR - 2023-04-18 17:27:18 --> Could not find the language line "sample"
ERROR - 2023-04-18 17:27:18 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 17:36:41 --> Could not find the language line "export"
ERROR - 2023-04-18 17:36:41 --> Could not find the language line "sample"
ERROR - 2023-04-18 17:36:41 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 20:41:15 --> Could not find the language line "export"
ERROR - 2023-04-18 20:41:15 --> Could not find the language line "sample"
ERROR - 2023-04-18 20:41:15 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-04-18 22:34:44 --> Could not find the language line ""
