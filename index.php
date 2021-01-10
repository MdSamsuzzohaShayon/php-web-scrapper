<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Scraping</title>
    <link rel="stylesheet" href="css/semantic.min.css">
</head>
<body>
<!--<div class="yuRUbf">-->
<!--    <a href="https://shop.mango.com/us" data-ved="2ahUKEwjyuofF4JHuAhX1X3wKHdlkBMkQFjAAegQIAhAC">-->
<!--        <br>-->
<!--        <h3 class="LC20lb DKV0Md"><span>Mango USA | Online fashion</span></h3>-->
<!--    </a>-->
<!--</div>-->

<div class="ui stackable inverted secondary massive purple menu">
    <div class="ui container">
        <li class="item"><a href="#" class="link">Home</a></li>
        <li class="item"><a href="#" class="link">About</a></li>
        <li class="item"><a href="#" class="link">Contact</a></li>
    </div>
</div>

<div class="ui container">
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
//    PRINT EVERYTHING EXCEPT A SPECEFIC ELEMENT
    foreach ($html->find('a[href^=/url?]') as $link ){
        echo "<hr />";
//    strpos — Find the position of the first occurrence of a substring in a string
//    IF WE CAN NOT FIND THIS URL
        if(strpos($link->href, "www.flymango.com") === false){
            echo "<h5 class='ui header purple'>" . $link->plaintext . "</h5><br />";
        }

    }


    echo "<br /> <h1>Break</h1>";


    //FINDING SPECIFIC ELEMENT
    foreach ($html->find('a[href^=/url?]') as $link ){
        echo "<hr />";
//    IF WE CAN FIND THIS URL
        if(!strpos($link->href, "www.flymango.com") === false){
            echo "<h5 class='ui header purple'>" . $link->plaintext . "</h5><br />";
        }
    }




    ?>
    <!--WEB SCRAPPING ENDS -->
</div>


</body>
</html>


