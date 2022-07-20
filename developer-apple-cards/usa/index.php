<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: 'POST, GET, OPTIONS'");
header('Content-Type');
$url    =   'https://developer.apple.com/apple-pay/sandbox-testing/';
include '..\..\php-simple-html-dom-parser\Src\Sunra\PhpSimple\HtmlDomParser.php';
include 'loadDom.php';
include './amex.php';
include './discover.php';
include './master.php';
include './visa.php';