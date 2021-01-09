<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Scrapping</title>
</head>
<body>
<?php

include('simple_html_dom.php');

//https://www.marriott.com/reservation/rateListMenu.mi?defaultTab=prepay






//TITLE
//$html = file_get_html('https://www.google.com');
//$html = file_get_html('https://www.marriott.com/reservation');
//echo $html->find('title', 0)->plaintext;




//GETTING A DIV SECTION
/*
$html = file_get_html('https://www.marriott.com');
echo $html->find('div.tile-hsearch-homepage', 0)->plaintext;
?>
<pre />
<?php

print_r($html->find('div.tile-hsearch-homepage', 0)->plaintext);
*/


//results-container
$html = file_get_html('https://www.marriott.com');
$text_result = $html->find('div.tile-hsearch-homepage', 0)->plaintext;
?>
<pre />
<?php
print_r($text_result);



?>
<br><br>
<?php

//INNER TEXT
$inner_text_result = $html->find('div.tile-hsearch-homepage', 0)->innertext;
echo($inner_text_result);


//Learn more
//https://simplehtmldom.sourceforge.io/manual.htm

?>
</body>
</html>
