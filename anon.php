<?php

$html = file_get_contents('https://anonfiles.com/qdS0rae9z1');
$dom = new DOMDocument();
libxml_use_internal_errors(true);

$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

// find the element whose href value you want by XPath
$nodes = $xpath->query('//*[@class="btn btn-primary btn-block"]');

foreach($nodes as $href) {
    // print out the href value
     echo $href->getAttribute( 'href' );
}
?>
