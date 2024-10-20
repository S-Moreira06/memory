<?php


session_start();

class Cards {
    // private $size;
    private $cards;
    private $grid;

    public function __construct(){
        // $this->size=$size;
        $this->startGame();
    }
    public function onClik($cardIndex) {
            $id = $cardIndex ;
            array_push($_SESSION['flipped'],$id);
            header("Location:index.php");
    }

    public function startGame() {
        $this->cards = ["img/balai.png" ,"img/citrouille.png","img/fantome.png","img/franky.png","img/scream.png","img/vampire.png"];
        $this->grid = array_merge($this->cards,$this->cards);
        $_SESSION['cards'] = $this->grid;
        $_SESSION['flipped'] = [];
        $_SESSION['matched'] = [];
        shuffle($this->grid);
    }
}



// if (isset($_GET['clik'])){
//     $id = $_GET['clik'] ;
//     array_push($_SESSION['flipped'],$id);
//     header("Location:index.php");
// }

// if (count($_SESSION['flipped']) == 2) {
//     if ($_SESSION['flipped'][0] == $_SESSION['flipped'][1]){
//         array_push($_SESSION['matched'],$_SESSION['flipped'][0]);
//         array_push($_SESSION['matched'],$_SESSION['flipped'][1]);
//         $_SESSION['flipped'] = [];
//     } else {
//         $_SESSION['flipped'] = [];
//     }
// }

?>