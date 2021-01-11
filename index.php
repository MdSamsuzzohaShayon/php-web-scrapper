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
    <link rel="stylesheet" href="css/semantic.min.css">
</head>
<body>
<div class="ui container">
    <?php
    require_once("covid-19.php");
    ?>
</div>

</body>
</html>


