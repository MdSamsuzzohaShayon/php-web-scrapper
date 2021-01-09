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
//$html = file_get_html('https://www.google.com');
$html = file_get_html('https://www.marriott.com/reservation');
//$html = file_get_html('https://www.marriott.com/reservation/rateListMenu.mi');



//TITLE
echo $html->find('title', 0)->plaintext;

?>
</body>
</html>
