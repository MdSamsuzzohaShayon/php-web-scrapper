<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Scraping</title>
</head>
<body>
<div class="yuRUbf">
    <a href="https://shop.mango.com/us" data-ved="2ahUKEwjyuofF4JHuAhX1X3wKHdlkBMkQFjAAegQIAhAC">
        <br>
        <h3 class="LC20lb DKV0Md"><span>Mango USA | Online fashion</span></h3>
    </a>
</div>

</body>
</html>
<?php
include "simple_html_dom.php";


//https://www.php.net/manual/en/book.curl.php
//curl_init — Initialize a cURL session
$curl_handler = curl_init();

//curl_setopt — Set an option for a cURL transfer
curl_setopt($curl_handler, CURLOPT_URL, 'https://www.google.com/search?q=mango');
//curl_setopt($curl_handler, CURLOPT_URL, 'https://www.marriott.com/reservation/rateListMenu.mi?defaultTab=standard');
curl_setopt($curl_handler, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, true);

//curl_exec — Perform a cURL session
$response = curl_exec($curl_handler);

//curl_close — Close a cURL session
curl_close($curl_handler);

//    RESPONSE WHOLE PAGE
//    echo $response;


//https://simplehtmldom.sourceforge.io/manual.htm
//SEARCH  FOR TITLE
$html = new simple_html_dom();
$html->load($response);
foreach ($html->find('a[href^=/url?]') as $link ){
    echo $link->plaintext . "<br />";
}


?>

