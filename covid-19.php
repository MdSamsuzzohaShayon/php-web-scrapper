<?php


$url = "https://corona.gov.bd/";
//$url = "https://news.google.com/covid19/map?hl=en-US&mid=%2Fm%2F0162b&gl=US&ceid=US%3Aen";
//file_get_contents — Reads entire file into a string
//$page = file_get_contents($url);




$doc = new DOMDocument('1.0', 'utf-8'); // Represents an entire HTML or XML document; serves as the root of the document tree.
// We need to validate our document before referring to the id
$doc->validateOnParse = true;
//$doc->preserveWhiteSpace = true;





//GETTING LINKS AND VALUE OF LINKS
//HANDLING ERRORS USING @
//DOMDocument::loadHTMLFile — Load HTML from a file
@$doc->loadHTMLFile($url);
//@$doc->load($url);




echo "<div class='ui segment purple'><h2>Element DOM start </h2></div>";


$sections = array();


//Loop through each <a> tag in the dom and add it to the link array
foreach ($doc->getElementsByTagName('section') as $sec) {
    $sections[] = array('url' => $sec->getAttribute('class'), 'text' => $sec->nodeValue);
}
//echo "<pre/>";
//print_r($sections);
//print_r($sections[0]);
//print_r($sections[0]['text']);

//DOMDocument::loadHTML — Load HTML from a string
$page = utf8_decode($sections[3]['text']);


echo "<div class='ui segment'> <p class='ui header tiny green'>" . utf8_decode($sections[3]['text']) .  "</p></div>";







/*
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
echo "<br /> <br /> <div class='ui blue segment' ><h2 class='massive ui header inverted blue'> Text Content: " . utf8_decode($link->textContent) . "</h2> </div> ";
echo "<br /> <br /> <h2 class='massive ui header inverted blue'> Node Value: " . utf8_decode($link->nodeValue) . "</h2>";
*/






