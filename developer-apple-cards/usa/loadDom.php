<?php
include '..\..\php-simple-html-dom-parser\Src\Sunra\PhpSimple\HtmlDomParser.php';

use Sunra\PhpSimple\HtmlDomParser;

try{
    $dom = HtmlDomParser::file_get_html( $url );
} catch(Exception $e){
    var_dump($e);
}
?>

