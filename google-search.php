<!--WEB SCRAPPING START -->
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


//GETTING ALL ELEMENT EXCEPT ONE
function allElementExceptOne()
{
    $element = '';
    global $html;
    //    PRINT EVERYTHING EXCEPT A SPECEFIC ELEMENT
    foreach ($html->find('a[href^=/url?]') as $link) {
//    strpos — Find the position of the first occurrence of a substring in a string
//    IF WE CAN NOT FIND THIS URL
        if (strpos($link->href, "www.flymango.com") === false) {
            $element .= "<h5 class='ui header purple'>" . $link->plaintext . "</h5><br />";
        }

    }
    return $element;
}


//FINDING SPECIFIC ELEMENT
function speceficElement()
{
    $element = '';
    global $html;
    foreach ($html->find('a[href^=/url?]') as $link) {
        echo "<hr />";
//    IF WE CAN FIND THIS URL
        if (!strpos($link->href, "www.flymango.com") === false) {
            $element .= "<h5 class='ui header purple'>" . $link->plaintext . "</h5><br />";
        }
    }
    return $element;

}


?>
<!--WEB SCRAPPING ENDS -->
