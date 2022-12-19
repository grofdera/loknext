<?php /* Template Name: CustomPageT1 */ ?>
<?php
$json = "https://8cb27030581d.ngrok.io/api/articles/access_key=8%7Ccgb7EDk6MLv4EGBCOTZG6jhTCQdoVBea1fBMKVUm";
$response = file_get_contents($json);
$mydecode = json_decode($response);
print_r($mydecode->articles[0]->slug);
$title = $mydecode[0]->slug;
print_r($title);
?>