<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-12-22 05:14:05 --> Could not find the language line ""
ERROR - 2022-12-22 05:39:52 --> Could not find the language line ""
ERROR - 2022-12-22 10:20:48 --> Could not find the language line "export"
ERROR - 2022-12-22 10:20:48 --> Could not find the language line "sample"
ERROR - 2022-12-22 10:20:48 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 10:24:04 --> Could not find the language line "export"
ERROR - 2022-12-22 10:24:04 --> Could not find the language line "sample"
ERROR - 2022-12-22 10:24:04 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 10:35:10 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`, `batch`.`name` as `batch_name`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `batch` ON `batch`.`id` = `class_batches`.`batch_id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `class_batches`.`class_section_id` IS NULL
ORDER BY `class_batches`.`id`
ERROR - 2022-12-22 10:35:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 370
ERROR - 2022-12-22 10:35:10 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `classes`.`id` IS NULL
GROUP BY `class_batches`.`class_section_id`
ORDER BY `class_batches`.`id`
ERROR - 2022-12-22 10:35:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 353
ERROR - 2022-12-22 10:35:50 --> Could not find the language line "export"
ERROR - 2022-12-22 10:35:50 --> Could not find the language line "sample"
ERROR - 2022-12-22 10:35:50 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 11:17:00 --> Could not find the language line "export"
ERROR - 2022-12-22 11:17:00 --> Could not find the language line "sample"
ERROR - 2022-12-22 11:17:00 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 11:27:03 --> Could not find the language line "export"
ERROR - 2022-12-22 11:27:03 --> Could not find the language line "sample"
ERROR - 2022-12-22 11:27:03 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 11:38:05 --> Could not find the language line "export"
ERROR - 2022-12-22 11:38:05 --> Could not find the language line "sample"
ERROR - 2022-12-22 11:38:05 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 11:57:07 --> Could not find the language line "_expenses_for"
ERROR - 2022-12-22 11:57:40 --> Could not find the language line "export"
ERROR - 2022-12-22 11:57:40 --> Could not find the language line "sample"
ERROR - 2022-12-22 11:57:40 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 11:58:39 --> Could not find the language line "export"
ERROR - 2022-12-22 11:58:39 --> Could not find the language line "sample"
ERROR - 2022-12-22 11:58:39 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 12:03:59 --> Could not find the language line "_expenses_for"
ERROR - 2022-12-22 12:04:04 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:04:11 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:04:24 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:04:34 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:04:49 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:04:57 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:04:57 --> Could not find the language line "detail"
ERROR - 2022-12-22 12:04:57 --> Could not find the language line "file"
ERROR - 2022-12-22 12:04:57 --> Could not find the language line "upload_documents1"
ERROR - 2022-12-22 12:04:57 --> Could not find the language line "Save"
ERROR - 2022-12-22 12:05:01 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:05:01 --> Could not find the language line "detail"
ERROR - 2022-12-22 12:05:01 --> Could not find the language line "file"
ERROR - 2022-12-22 12:05:01 --> Could not find the language line "upload_documents1"
ERROR - 2022-12-22 12:05:01 --> Could not find the language line "Save"
ERROR - 2022-12-22 12:05:06 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:09:30 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:10:37 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:10:37 --> Could not find the language line "detail"
ERROR - 2022-12-22 12:10:37 --> Could not find the language line "file"
ERROR - 2022-12-22 12:10:37 --> Could not find the language line "upload_documents1"
ERROR - 2022-12-22 12:10:37 --> Could not find the language line "Save"
ERROR - 2022-12-22 12:10:41 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:11:13 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:11:53 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:11:53 --> Could not find the language line "detail"
ERROR - 2022-12-22 12:11:53 --> Could not find the language line "file"
ERROR - 2022-12-22 12:11:53 --> Could not find the language line "upload_documents1"
ERROR - 2022-12-22 12:11:53 --> Could not find the language line "Save"
ERROR - 2022-12-22 12:11:57 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:12:11 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:12:14 --> Could not find the language line "student1"
ERROR - 2022-12-22 12:33:40 --> Could not find the language line "_expenses_for"
ERROR - 2022-12-22 12:33:41 --> Could not find the language line "_expenses_for"
ERROR - 2022-12-22 13:20:42 --> Could not find the language line "export"
ERROR - 2022-12-22 13:20:42 --> Could not find the language line "sample"
ERROR - 2022-12-22 13:20:42 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 13:38:01 --> Could not find the language line "export"
ERROR - 2022-12-22 13:38:01 --> Could not find the language line "sample"
ERROR - 2022-12-22 13:38:01 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 14:48:12 --> Could not find the language line "export"
ERROR - 2022-12-22 14:48:12 --> Could not find the language line "sample"
ERROR - 2022-12-22 14:48:12 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 14:50:37 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:50:40 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:51:02 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:52:34 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:52:38 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:54:20 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:54:23 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:54:39 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:54:42 --> Could not find the language line "_expenses_for"
ERROR - 2022-12-22 14:55:19 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:55:22 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:55:25 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:55:29 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:55:45 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:55:48 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 14:56:33 --> Could not find the language line "export"
ERROR - 2022-12-22 14:56:33 --> Could not find the language line "sample"
ERROR - 2022-12-22 14:56:33 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 14:57:41 --> Could not find the language line "export"
ERROR - 2022-12-22 14:57:41 --> Could not find the language line "sample"
ERROR - 2022-12-22 14:57:41 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:10:20 --> Could not find the language line ""
ERROR - 2022-12-22 15:11:57 --> Could not find the language line "export"
ERROR - 2022-12-22 15:11:57 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:11:57 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:12:18 --> Could not find the language line "export"
ERROR - 2022-12-22 15:12:18 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:12:18 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:12:34 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:12:37 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:21:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2022-12-22 15:21:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u623942019/domains/ksmbbv.com/public_html/application/views/themes/default/pages/page.php 93
ERROR - 2022-12-22 15:23:48 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:23:55 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:24:52 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:24:57 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:27:13 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:27:37 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:27:44 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:28:03 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:28:07 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:28:54 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:28:57 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:29:44 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:29:49 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:29:49 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:29:59 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 8388616 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/DB_result.php 304
ERROR - 2022-12-22 15:30:40 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:30:46 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:31:18 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:31:26 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:31:38 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:31:43 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:32:19 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:32:39 --> Could not find the language line "export"
ERROR - 2022-12-22 15:32:39 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:32:39 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:32:46 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:32:51 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:32:51 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:32:58 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:33:13 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:33:30 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:33:39 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:36:31 --> Could not find the language line "export"
ERROR - 2022-12-22 15:36:31 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:36:31 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:38:52 --> Could not find the language line "export"
ERROR - 2022-12-22 15:38:52 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:38:52 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:40:17 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:40:21 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:40:23 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:41:44 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:41:48 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:41:53 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:41:55 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 8388616 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/DB_result.php 304
ERROR - 2022-12-22 15:41:58 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 15:42:44 --> Could not find the language line "export"
ERROR - 2022-12-22 15:42:44 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:42:44 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:43:31 --> Could not find the language line "export"
ERROR - 2022-12-22 15:43:31 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:43:31 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:46:02 --> Could not find the language line "export"
ERROR - 2022-12-22 15:46:02 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:46:02 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:51:05 --> Could not find the language line "export"
ERROR - 2022-12-22 15:51:05 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:51:05 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:52:14 --> Could not find the language line "export"
ERROR - 2022-12-22 15:52:14 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:52:14 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:55:55 --> Could not find the language line "export"
ERROR - 2022-12-22 15:55:55 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:55:55 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 15:57:07 --> Could not find the language line "export"
ERROR - 2022-12-22 15:57:07 --> Could not find the language line "sample"
ERROR - 2022-12-22 15:57:07 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 16:00:21 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:00:25 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:02:58 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:03:02 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:12:09 --> Could not find the language line "export"
ERROR - 2022-12-22 16:12:09 --> Could not find the language line "sample"
ERROR - 2022-12-22 16:12:09 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 16:13:52 --> Could not find the language line "export"
ERROR - 2022-12-22 16:13:52 --> Could not find the language line "sample"
ERROR - 2022-12-22 16:13:52 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 16:23:26 --> Could not find the language line "export"
ERROR - 2022-12-22 16:23:26 --> Could not find the language line "sample"
ERROR - 2022-12-22 16:23:26 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 16:24:10 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:24:13 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:25:00 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:25:05 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:25:18 --> Severity: Error --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 20480 bytes) /home/u623942019/domains/ksmbbv.com/public_html/system/database/drivers/mysqli/mysqli_result.php 222
ERROR - 2022-12-22 16:28:13 --> Could not find the language line "export"
ERROR - 2022-12-22 16:28:13 --> Could not find the language line "sample"
ERROR - 2022-12-22 16:28:13 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 16:47:45 --> Could not find the language line "_expenses_for"
ERROR - 2022-12-22 16:54:57 --> Could not find the language line "_expenses_for"
ERROR - 2022-12-22 16:59:33 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:00:25 --> Could not find the language line "payment_mode"
ERROR - 2022-12-22 17:00:25 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:02:11 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:02:45 --> Could not find the language line "payment_mode"
ERROR - 2022-12-22 17:02:46 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:04:46 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:05:23 --> Could not find the language line "payment_mode"
ERROR - 2022-12-22 17:05:23 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:06:35 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:07:01 --> Could not find the language line "payment_mode"
ERROR - 2022-12-22 17:07:01 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:07:20 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/u623942019/domains/ksmbbv.com/public_html/application/views/studentfee/studentfeeSearch.php 128
ERROR - 2022-12-22 17:07:20 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/u623942019/domains/ksmbbv.com/public_html/application/views/studentfee/studentfeeSearch.php 128
ERROR - 2022-12-22 17:07:31 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:07:58 --> Could not find the language line "payment_mode"
ERROR - 2022-12-22 17:07:59 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:08:31 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:08:59 --> Could not find the language line "payment_mode"
ERROR - 2022-12-22 17:09:00 --> Could not find the language line "student_fee"
ERROR - 2022-12-22 17:09:24 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/u623942019/domains/ksmbbv.com/public_html/application/views/studentfee/studentfeeSearch.php 128
ERROR - 2022-12-22 17:09:24 --> Severity: Warning --> date() expects parameter 2 to be int, string given /home/u623942019/domains/ksmbbv.com/public_html/application/views/studentfee/studentfeeSearch.php 128
ERROR - 2022-12-22 17:27:41 --> Could not find the language line "export"
ERROR - 2022-12-22 17:27:41 --> Could not find the language line "sample"
ERROR - 2022-12-22 17:27:41 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 17:51:31 --> Could not find the language line "export"
ERROR - 2022-12-22 17:51:31 --> Could not find the language line "sample"
ERROR - 2022-12-22 17:51:31 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 17:53:23 --> Could not find the language line "export"
ERROR - 2022-12-22 17:53:23 --> Could not find the language line "sample"
ERROR - 2022-12-22 17:53:23 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 18:07:27 --> Could not find the language line "export"
ERROR - 2022-12-22 18:07:27 --> Could not find the language line "sample"
ERROR - 2022-12-22 18:07:27 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 18:10:06 --> Could not find the language line ""
ERROR - 2022-12-22 18:22:58 --> Could not find the language line "export"
ERROR - 2022-12-22 18:22:58 --> Could not find the language line "sample"
ERROR - 2022-12-22 18:22:58 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 18:38:54 --> Could not find the language line "export"
ERROR - 2022-12-22 18:38:54 --> Could not find the language line "sample"
ERROR - 2022-12-22 18:38:54 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 18:50:23 --> Could not find the language line "export"
ERROR - 2022-12-22 18:50:23 --> Could not find the language line "sample"
ERROR - 2022-12-22 18:50:23 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 18:51:20 --> Could not find the language line "export"
ERROR - 2022-12-22 18:51:20 --> Could not find the language line "sample"
ERROR - 2022-12-22 18:51:20 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 20:17:11 --> Could not find the language line "export"
ERROR - 2022-12-22 20:17:11 --> Could not find the language line "sample"
ERROR - 2022-12-22 20:17:11 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2022-12-22 22:47:14 --> Could not find the language line ""
ERROR - 2022-12-22 23:49:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2022-12-22 23:49:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u623942019/domains/ksmbbv.com/public_html/application/views/themes/default/pages/page.php 111
ERROR - 2022-12-22 23:49:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2022-12-22 23:49:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u623942019/domains/ksmbbv.com/public_html/application/views/themes/default/pages/page.php 93
ERROR - 2022-12-22 23:49:41 --> Could not find the language line ""
