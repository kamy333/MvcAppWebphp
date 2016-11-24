<?php
/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 11/19/2016
 * Time: 8:05 AM
 */
require_once 'config/config.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule=new Capsule();

$capsule->addConnection([
    'driver'=>'mysql',
    'host'=>DB_SERVER,
    'username'=>DB_USER,
    'password'=>DB_PASS,
    'database'=>DB_NAME,
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci',
    'prefix'=>''



]);

$capsule->bootEloquent();