<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
    'hostname' => 'localhost',
	'username' => 'u623942019_ksmbbvu',//'u623942019_ksmbbv_new', u623942019_ksmbbvu
	'password' =>  'Reset$123',//'R$t6+!YlH',   Reset$123    
	'database' => 'u623942019_ksmbbv', //'u623942019_ksmbbv_new', u623942019_ksmbbv
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'prodcution'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
