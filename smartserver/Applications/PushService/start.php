<?php

use \GatewayWorker\Gateway;
use \GatewayWorker\BusinessWorker;

// gateway
$gateway = new Gateway("Text://0.0.0.0:2015");

$gateway->name = 'PushGateway';

$gateway->count = 4;

$gateway->lanIp = '127.0.0.1';

$gateway->startPort = 4000;

$gateway->pingInterval = 30;
// $gateway->pingNotResponseLimit = 2;
$gateway->pingData = array("method"=>"ping");

// bussinessWorker
$worker = new BusinessWorker();

$worker->name = 'PushBusinessWorker';

$worker->count = 4;

