<!--WEB SCRAPPING START -->
<?php
include "simple_html_dom.php";


//https://www.php.net/manual/en/book.curl.php
//curl_init — Initialize a cURL session
$curl_handler = curl_init();

//curl_setopt — Set an option for a cURL transfer
curl_setopt($curl_handler, CURLOPT_URL, 'https://instatrip.net/');
//curl_setopt($curl_handler, CURLOPT_URL, 'https://www.marriott.com/reservation/rateListMenu.mi?defaultTab=standard');
curl_setopt($curl_handler, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, true);


//SETUP CURL FOR POST REQUEST
curl_setopt($curl_handler, CURLOPT_POST, true);
$form_fields = array(
    "someInputField" => "someInputValue",
    "someAotherInputField" => "someAnotherInputValue"
);
curl_setopt($curl_handler, CURLOPT_POSTFIELDS, http_build_query($form_fields));

//curl_exec — Perform a cURL session
$response = curl_exec($curl_handler);

//curl_close — Close a cURL session
curl_close($curl_handler);

//    RESPONSE WHOLE PAGE
echo $response;
exit();


//https://simplehtmldom.sourceforge.io/manual.htm
//SEARCH  FOR TITLE
$html = new simple_html_dom();
$html->load($response);


?>
<!--WEB SCRAPPING ENDS -->
