<?php
require_once('functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid-19 Tracker</title>
</head>
<body>
<?php
$url = "https://corona.gov.bd/";
//$url = "https://news.google.com/covid19/map?hl=en-US&mid=%2Fm%2F0162b&gl=US&ceid=US%3Aen";
//file_get_contents — Reads entire file into a string
$page = file_get_contents($url);
$doc = new DOMDocument('1.0', 'utf-8'); // Represents an entire HTML or XML document; serves as the root of the document tree.




/*
//GETTING LINKS AND VALUE OF LINKS
//HANDLING ERRORS USING @
@$dom->loadHTMLFile($url);
$links = array();
//Loop through each <a> tag in the dom and add it to the link array
foreach ($dom->getElementsByTagName('a') as $link) {
    $links[] = array('url' => $link->getAttribute('href'), 'text' => $link->nodeValue);
}
print_r($link);
echo "<br /> <br /> " . utf8_decode($link->textContent);
*/



//HANDLING ERRORS USING @
// it loads the content without adding enclosing html/body tags and also the doctype declaration
$doc->LoadHTML($page, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
//print_r(utf8_decode($doc->textContent));
//print_r($doc);
//echo dom_dump($doc->getElementsByTagName('section'));
echo getChildNodeElements($doc->getElementsByTagName('section'));
//var_dump(getAttrData('class', $doc));


?>
</body>
</html>


