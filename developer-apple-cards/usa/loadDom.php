<?php

try{
    use Sunra\PhpSimple\HtmlDomParser;
    $dom = HtmlDomParser::file_get_html( $url );
} catch(Exception $e){
    var_dump($e);
}
?>

<iframe src=<?=$url?>
</iframe>

