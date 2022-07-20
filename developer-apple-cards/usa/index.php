<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: 'POST, GET, OPTIONS'");
header('Access-Control-Allow-Methods: Content-Type');
$url    =   'https://developer.apple.com/apple-pay/sandbox-testing/';
include 'loadDom.php';
include './amex.php';
include './discover.php';
include './master.php';
include './visa.php';