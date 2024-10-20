<?php

session_start();

if (!isset($_SESSION['cards'] )){
    $cards = ["img/balai.png" ,"img/citrouille.png","img/fantome.png","img/franky.png","img/scream.png","img/vampire.png"];
    $_SESSION['cards'] = array_merge($cards,$cards);
    $_SESSION['flipped'] = [];
    $_SESSION['matched'] = [];
    shuffle($_SESSION['cards']);
}

$cards = $_SESSION['cards'];
$flipped = $_SESSION['flipped'];
$matched = $_SESSION['matched'];
$hidden = [] ;

?>