<!-- https://www.youtube.com/watch?v=3wrQHBlmaDo&t=6s -->
<?php

$ch = curl_init();
// $fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_URL, "https://blog.fiverr.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HEADER, 0);

$html = curl_exec($ch);

$dom = new DOMDocument();

@ $dom->loadHTML($html);







/*

$h3s = $dom->getElementsByTagName('h3');

////var_dump($h2s);
//echo "<pre />";
//print_r($h3s);
//print_r($h2s[0]->nodeName);
//FINDS ALL H3 TAGS IN PAGE
echo "<h2 class='ui header blue'> Get all text from h3 tag</h2> <hr />";
$h3_array = array();
foreach($h3s as $h3){
  $title_text = $h3->textContent;
  $h3_array[] = $title_text;
  echo "<p class='ui tiny header green'>" .  $title_text . " </p>";
}
*/



//GET ALL LINKS
echo "<h2 class='ui header blue'> Get all links from a tag</h2>  <hr />";
$articles = $dom->getElementsByTagName('h3');
// print_r($articles);
$article = $articles->item(0);  // GET THE FIRST ELEMENT
// echo "<pre />";
// print_r($article);
$links = $article->getElementsByTagName('a');

//echo "<pre />";
// print_r($links);
foreach ($links as $link) {
  // code...
  echo "<div class='ui segment blue'>" . $link->textContent . " | <p class='ui tiny header teal' > <u> " . $link->getAttribute('href') . " </u> </p> </div>";
}


/*
 * //FILE IS NOT CREATING
$fh = fopen("./links.txt", "a");
foreach ($links as $link) {
  // code...
  fwrite($fh, "something" );

}
fclose($fh);
*/

//foreach ($links)







?>
