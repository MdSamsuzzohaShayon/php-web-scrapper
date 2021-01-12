<?php

//ob_start — Turn on output buffering
ob_start();

include_once ('templates/shop.html');

//ob_get_clean — Get current buffer contents and delete current output buffer
$html = ob_get_clean();


$dom = new DOMDocument();
@$dom->loadHTML($html, LIBXML_HTML_NODEFDTD | LIBXML_HTML_NOIMPLIED);

$product_list = $dom->getElementById('product-list');
//echo "<pre />";
//print_r($product_list);

$xpath = new DOMXPath($dom);
//DOUBLE SLASH SELECT ALL THE CHILDS ELEMENTS
$products = $xpath->query("//div[@id='product-list']/div");
// css selector equivalent = div#product-list > div



//CREATE A NEW ELEMENT
$count = $products->length;
$new_element = $dom->createElement("div", "no. of products: " . $count);
$product_list->parentNode->insertBefore($new_element, $product_list);

$new_element->setAttribute("class", "ui header blue");




//DELETE AN ELEMENT
$title = $xpath->query("//div[@class='']");


//SAVE THE MODIFIED ELEMENT
$html = @ $dom->saveHTML();

echo $html;
