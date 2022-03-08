<?php


use AbdullahRahim\GoogleScrapperPackage\SearchEngine;

require_once '../vendor/autoload.php';
$client = new SearchEngine();
$client->setEngine("google.ae");
$results = $client->search(["keyword1","keyword2"]);
print_r($results);