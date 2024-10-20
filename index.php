<?php

include_once "card.php";
if (!isset($_SESSION['cards'])){
    $game = new Cards();
}

$cards = $_SESSION['cards'];
$flipped = $_SESSION['flipped'];
$matched = $_SESSION['matched'];
$hidden = [] ;

if (isset($_GET['clik'])){
    $game->onClik($_GET['clik']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main-container {
            display: flex;
        }
        .card {
            height: 100px;
            margin: 10px;
            border: 1px solid black;
            border-radius: 10px;
        }
        .hidden {
            background-color: black;
            height: 100px;
            margin: 10px;
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Jeu de la mémoire</h1>
    <div class="main-container">
        <?php
            foreach ($cards as $index => $card) { 
        ?>
                <div class="<?php if (!in_array($index, $_SESSION['flipped'])&&!in_array($index, $_SESSION['matched'])){echo "hidden";}?>"> 
                    <a href="index.php?clik=<?=$index?>">
                        <img src="<?php if (in_array($index, $_SESSION['flipped']) || in_array($index, $_SESSION['matched'])){echo $card;}?>" alt=""  class="card">
                    </a>
                </div>
        <?php    
            }
        ?>
    </div>
    <a href="reset.php">RaZ</a>
    <br>
            <?php print_r($cards); ?>
            <br>
            <?php print_r($game); ?>
            <br>
            <?php print_r($flipped); ?>

</body>
</html>