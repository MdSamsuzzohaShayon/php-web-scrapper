<!-- https://www.youtube.com/watch?v=3wrQHBlmaDo&t=6s -->
<?php

$ch = curl_init();
// $fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_URL, "https://corona.gov.bd/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HEADER, 0);

$html = curl_exec($ch);

$dom = new DOMDocument();

@ $dom->loadHTML($html);

/*
$h2s = $dom->getElementsByTagName('h2');

//var_dump($h2s);
print_r($h2s[0]);
print_r($h2s[0]->nodeName);
*/

/*
// GETTING VALUE OF H2
//print_r($h2s[0]);
//echo $h2s[0]->textContent;

for ($i = 0; $i < 5; $i++){
    echo "<h2 class='ui header green'>" .utf8_decode($h2s[$i]->textContent) . "</h2> <br />";
}
exit();


$h2_array = array();
foreach($h2s as $h2){
  $title_text = $h2->textContent;
  $h2_array[] = $title_text;
  echo "<h2 class='ui header green'>" . utf8_decode( $title_text) . " </h2> <br />";
}
*/



$h1s = $dom->getElementsByTagName('h1');
$h3s = $dom->getElementsByTagName('h3');

//echo count($h4s);
//echo count($h3s);


//PRINTING ALL ELEMENTS
/*
for ($i =0 ; $i< count($h4s); $i++){
    for($j = 0 ; $j < count($h3s); $j++){
        echo "<div class='ui segment'>" . utf8_decode( $h4s[$i]->textContent) . " <br>" . utf8_decode( $h3s[$j]->textContent) . "</div><br/>";
    }
}
*/

?>

<div class="ui grid">
    <div class="four column row">
        <div class="column">
            <div class="ui segment blue">
                <h2 class="ui header dividing blue">New Affected</h2>
                <div class="ui two column grid">
                    <div class="column">
                        <h4 class='ui header green'> Last 24 Hours </h4>
                        <h3 class='ui header blue'> <?php echo utf8_decode($h3s[1]->textContent); ?> </h3>
                    </div>
                    <div class="column">
                        <h4 class='ui header green'> Total </h4>
                        <h3 class='ui header blue'> <?php echo utf8_decode($h3s[2]->textContent); ?> </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="ui segment blue">
                <h2 class="ui header dividing blue">Death</h2>
                <div class="ui two column grid">
                    <div class="column">
                        <h4 class='ui header green'> Last 24 Hours </h4>
                        <h3 class='ui header blue'> <?php echo utf8_decode($h1s[0]->textContent); ?> </h3>
                    </div>
                    <div class="column">
                        <h4 class='ui header green'> Total </h4>
                        <h3 class='ui header blue'> <?php echo utf8_decode($h1s[1]->textContent); ?> </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="ui segment blue">
                <h2 class="ui header dividing blue">Recover</h2>
                <div class="ui two column grid">
                    <div class="column">
                        <h4 class='ui header green'> Last 24 Hours </h4>
                        <h3 class='ui header blue'> <?php echo utf8_decode($h3s[3]->textContent); ?> </h3>
                    </div>
                    <div class="column">
                        <h4 class='ui header green'> Total </h4>
                        <h3 class='ui header blue'> <?php echo utf8_decode($h3s[4]->textContent); ?> </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="ui segment blue">
                <h2 class="ui header dividing blue">Test</h2>
                <div class="ui two column grid">
                    <div class="column">
                        <h4 class='ui header green'> Last 24 Hours </h4>
                        <h3 class='ui header blue'> <?php echo utf8_decode($h3s[5]->textContent); ?> </h3>
                    </div>
                    <div class="column">
                        <h4 class='ui header green'> Total </h4>
                        <h3 class='ui header blue'> <?php echo utf8_decode($h3s[6]->textContent); ?> </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



