<?php


$url = "https://corona.gov.bd/";
//$url = "https://news.google.com/covid19/map?hl=en-US&mid=%2Fm%2F0162b&gl=US&ceid=US%3Aen";
//file_get_contents — Reads entire file into a string
$page = file_get_contents($url);
$doc = new DOMDocument('1.0', 'utf-8'); // Represents an entire HTML or XML document; serves as the root of the document tree.





//GETTING LINKS AND VALUE OF LINKS
//HANDLING ERRORS USING @
@$doc->loadHTMLFile($url);
$links = array();
echo "<pre/>";
print_r($doc);
echo "<br> <br> <hr >";
//Loop through each <a> tag in the dom and add it to the link array
foreach ($doc->getElementsByTagName('a') as $link) {
    $links[] = array('url' => $link->getAttribute('href'), 'text' => $link->nodeValue);
}
echo "<pre/>";
print_r($link);
echo "<br /> <br /> <h2 class='massive ui header inverted blue'> Text Content: " . utf8_decode($link->textContent) . "</h2>";
echo "<br /> <br /> <h2 class='massive ui header inverted blue'> Node Value: " . utf8_decode($link->nodeValue) . "</h2>";






/*
//HANDLING ERRORS USING @
// it loads the content without adding enclosing html/body tags and also the doctype declaration
$doc->LoadHTML($page, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
//print_r(utf8_decode($doc->textContent));
//print_r($doc);
//echo dom_dump($doc->getElementsByTagName('section'));
echo getChildNodeElements($doc->getElementsByTagName('section'));
//var_dump(getAttrData('class', $doc));
*/

