<?php
require_once __DIR__ . '/vendor/autoload.php';

use Yjk\Test\service;
$obj = new Service();
$msg = $obj->hello();
var_dump($msg);exit;
