<?php

use Sunra\PhpSimple\HtmlDomParser;
$dom = HtmlDomParser::file_get_html( $url );
?>

<iframe src="$url">
</iframe>

