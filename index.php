
<?php
$url = "https://corona.gov.bd/";
//$url = "https://news.google.com/covid19/map?hl=en-US&mid=%2Fm%2F0162b&gl=US&ceid=US%3Aen";
//file_get_contents — Reads entire file into a string
$html =  file_get_contents($url);
$dom = new DOMDocument; // Represents an entire HTML or XML document; serves as the root of the document tree.
//HANDLING ERRORS USING @
@$dom->loadHTML($html);
$tables = $dom->getElementsByTagName('section');
$tr = $tables->item(0)->getElementsByTagName('div');
?>
<pre />
<?php
//print_r($tables);
print_r($tr);



?>