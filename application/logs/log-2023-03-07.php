<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-07 01:14:41 --> Could not find the language line ""
ERROR - 2023-03-07 01:14:42 --> Could not find the language line ""
ERROR - 2023-03-07 07:55:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2023-03-07 07:55:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u623942019/domains/ksmbbv.com/public_html/application/views/themes/default/pages/page.php 93
ERROR - 2023-03-07 12:31:13 --> Could not find the language line ""
ERROR - 2023-03-07 14:26:05 --> Could not find the language line "_expenses_for"
ERROR - 2023-03-07 16:13:51 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `classes`.`id` IS NULL
GROUP BY `class_batches`.`class_section_id`
ORDER BY `class_batches`.`id`
ERROR - 2023-03-07 16:13:51 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 353
ERROR - 2023-03-07 16:13:51 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`, `batch`.`name` as `batch_name`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `batch` ON `batch`.`id` = `class_batches`.`batch_id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `class_batches`.`class_section_id` IS NULL
ORDER BY `class_batches`.`id`
ERROR - 2023-03-07 16:13:51 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 370
ERROR - 2023-03-07 16:14:14 --> Could not find the language line "export"
ERROR - 2023-03-07 16:14:14 --> Could not find the language line "sample"
ERROR - 2023-03-07 16:14:14 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 16:21:06 --> Could not find the language line "export"
ERROR - 2023-03-07 16:21:06 --> Could not find the language line "sample"
ERROR - 2023-03-07 16:21:06 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 16:38:06 --> Could not find the language line "export"
ERROR - 2023-03-07 16:38:06 --> Could not find the language line "sample"
ERROR - 2023-03-07 16:38:06 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 16:56:36 --> Could not find the language line "export"
ERROR - 2023-03-07 16:56:36 --> Could not find the language line "sample"
ERROR - 2023-03-07 16:56:36 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 18:19:21 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `classes`.`id` IS NULL
GROUP BY `class_batches`.`class_section_id`
ORDER BY `class_batches`.`id`
ERROR - 2023-03-07 18:19:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 353
ERROR - 2023-03-07 18:19:21 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`, `batch`.`name` as `batch_name`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `batch` ON `batch`.`id` = `class_batches`.`batch_id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `class_batches`.`class_section_id` IS NULL
ORDER BY `class_batches`.`id`
ERROR - 2023-03-07 18:19:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 370
ERROR - 2023-03-07 18:19:49 --> Could not find the language line "export"
ERROR - 2023-03-07 18:19:49 --> Could not find the language line "sample"
ERROR - 2023-03-07 18:19:49 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 18:50:05 --> Could not find the language line "export"
ERROR - 2023-03-07 18:50:05 --> Could not find the language line "sample"
ERROR - 2023-03-07 18:50:05 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 18:50:37 --> Could not find the language line "export"
ERROR - 2023-03-07 18:50:37 --> Could not find the language line "sample"
ERROR - 2023-03-07 18:50:37 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:00:10 --> Could not find the language line "export"
ERROR - 2023-03-07 19:00:10 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:00:10 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:00:30 --> Could not find the language line "export"
ERROR - 2023-03-07 19:00:30 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:00:30 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:00:42 --> Could not find the language line "export"
ERROR - 2023-03-07 19:00:42 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:00:49 --> Could not find the language line "export"
ERROR - 2023-03-07 19:00:49 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:00:49 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:01:16 --> Could not find the language line "export"
ERROR - 2023-03-07 19:01:16 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:01:16 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:01:58 --> Could not find the language line "export"
ERROR - 2023-03-07 19:01:58 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:01:58 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:02:31 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `classes`.`id` IS NULL
GROUP BY `class_batches`.`class_section_id`
ORDER BY `class_batches`.`id`
ERROR - 2023-03-07 19:02:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 353
ERROR - 2023-03-07 19:02:31 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`, `batch`.`name` as `batch_name`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `batch` ON `batch`.`id` = `class_batches`.`batch_id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `class_batches`.`class_section_id` IS NULL
ORDER BY `class_batches`.`id`
ERROR - 2023-03-07 19:02:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 370
ERROR - 2023-03-07 19:02:44 --> Could not find the language line "export"
ERROR - 2023-03-07 19:02:44 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:02:44 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:09:16 --> Could not find the language line "export"
ERROR - 2023-03-07 19:09:16 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:09:16 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:21:51 --> Could not find the language line "export"
ERROR - 2023-03-07 19:21:51 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:21:51 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:29:50 --> Could not find the language line "export"
ERROR - 2023-03-07 19:29:50 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:29:50 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:30:02 --> Could not find the language line "export"
ERROR - 2023-03-07 19:30:02 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:30:02 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:30:13 --> Could not find the language line "export"
ERROR - 2023-03-07 19:30:13 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:30:20 --> Could not find the language line "export"
ERROR - 2023-03-07 19:30:20 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:30:27 --> Could not find the language line "export"
ERROR - 2023-03-07 19:30:27 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:30:54 --> Could not find the language line "export"
ERROR - 2023-03-07 19:30:54 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:30:54 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:31:18 --> Could not find the language line "export"
ERROR - 2023-03-07 19:31:18 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:31:18 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:31:39 --> Could not find the language line "export"
ERROR - 2023-03-07 19:31:39 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:31:39 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:31:55 --> Could not find the language line "export"
ERROR - 2023-03-07 19:31:55 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:31:55 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:32:29 --> Could not find the language line "export"
ERROR - 2023-03-07 19:32:29 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:32:29 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:32:58 --> Could not find the language line "export"
ERROR - 2023-03-07 19:32:58 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:32:58 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:33:35 --> Could not find the language line "export"
ERROR - 2023-03-07 19:33:35 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:33:35 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:33:52 --> Could not find the language line "export"
ERROR - 2023-03-07 19:33:52 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:33:52 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:34:13 --> Could not find the language line "export"
ERROR - 2023-03-07 19:34:13 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:34:13 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:34:38 --> Could not find the language line "export"
ERROR - 2023-03-07 19:34:38 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:34:38 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:35:08 --> Could not find the language line "export"
ERROR - 2023-03-07 19:35:08 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:35:08 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:35:17 --> Could not find the language line "export"
ERROR - 2023-03-07 19:35:17 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:35:17 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:35:23 --> Could not find the language line "export"
ERROR - 2023-03-07 19:35:23 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:35:23 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 19:35:56 --> Could not find the language line "export"
ERROR - 2023-03-07 19:35:56 --> Could not find the language line "sample"
ERROR - 2023-03-07 19:35:56 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 22:03:22 --> Could not find the language line "export"
ERROR - 2023-03-07 22:03:22 --> Could not find the language line "sample"
ERROR - 2023-03-07 22:03:22 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
ERROR - 2023-03-07 22:29:07 --> Could not find the language line "export"
ERROR - 2023-03-07 22:29:07 --> Could not find the language line "sample"
ERROR - 2023-03-07 22:29:07 --> Severity: Warning --> Use of undefined constant php - assumed 'php' (this will throw an Error in a future version of PHP) /home/u623942019/domains/ksmbbv.com/public_html/application/views/admin/examgroup/_partialstudentmarkEntry.php 71
