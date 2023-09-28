<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-01-18 09:02:49 --> Could not find the language line ""
ERROR - 2023-01-18 09:28:30 --> Could not find the language line "_expenses_for"
ERROR - 2023-01-18 09:28:33 --> Could not find the language line "_expenses_for"
ERROR - 2023-01-18 09:30:22 --> Could not find the language line "_expenses_for"
ERROR - 2023-01-18 09:30:33 --> Could not find the language line "student1"
ERROR - 2023-01-18 09:32:04 --> Could not find the language line "student1"
ERROR - 2023-01-18 09:32:12 --> Could not find the language line "student1"
ERROR - 2023-01-18 09:38:14 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `classes`.`id` IS NULL
GROUP BY `class_batches`.`class_section_id`
ORDER BY `class_batches`.`id`
ERROR - 2023-01-18 09:38:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 353
ERROR - 2023-01-18 09:38:15 --> Query error: Table 'u623942019_ksmbbv.class_batches' doesn't exist - Invalid query: SELECT `class_batches`.*, `classes`.`id` as `class_id`, `class_sections`.`id` as `class_section_id`, `classes`.`class`, `sections`.`section`, `batch`.`name` as `batch_name`
FROM `class_batches`
JOIN `class_sections` ON `class_batches`.`class_section_id` = `class_sections`.`id`
JOIN `batch` ON `batch`.`id` = `class_batches`.`batch_id`
JOIN `classes` ON `classes`.`id` = `class_sections`.`class_id`
JOIN `sections` ON `sections`.`id` = `class_sections`.`section_id`
WHERE `class_batches`.`class_section_id` IS NULL
ORDER BY `class_batches`.`id`
ERROR - 2023-01-18 09:38:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/u623942019/domains/ksmbbv.com/public_html/application/models/Batchsubject_model.php 370
ERROR - 2023-01-18 10:21:02 --> Could not find the language line ""
ERROR - 2023-01-18 10:21:03 --> Could not find the language line ""
ERROR - 2023-01-18 13:15:07 --> Could not find the language line ""
ERROR - 2023-01-18 14:20:29 --> Could not find the language line ""
ERROR - 2023-01-18 16:23:56 --> Could not find the language line "_expenses_for"
ERROR - 2023-01-18 16:24:14 --> Could not find the language line "student1"
ERROR - 2023-01-18 16:24:24 --> Could not find the language line "student1"
ERROR - 2023-01-18 16:24:27 --> Could not find the language line "student1"
ERROR - 2023-01-18 16:24:28 --> Could not find the language line "detail"
ERROR - 2023-01-18 16:24:28 --> Could not find the language line "file"
ERROR - 2023-01-18 16:24:28 --> Could not find the language line "upload_documents1"
ERROR - 2023-01-18 16:24:28 --> Could not find the language line "Save"
ERROR - 2023-01-18 16:24:33 --> Could not find the language line "student1"
ERROR - 2023-01-18 16:26:29 --> Could not find the language line "student1"
ERROR - 2023-01-18 16:46:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2023-01-18 19:07:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/u623942019/domains/ksmbbv.com/public_html/application/controllers/Welcome.php 64
ERROR - 2023-01-18 19:07:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u623942019/domains/ksmbbv.com/public_html/application/views/themes/default/pages/page.php 93
