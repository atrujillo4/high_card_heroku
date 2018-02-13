<?php
    function play() {
            $randomValueSuit = rand(0,3);
            $randomValueCard = rand(0,4);
            $randomValueSuitDealer = rand(0,3);
            $randomValueCardDealer = rand(0,4);
            
            displayCard(${"randomValueCard" . $i }, ${"randomValueSuit" . $i }, 1);
            displayCard(${"randomValueCardDealer" . $i }, ${"randomValueSuitDealer" . $i }, 2);
            score($randomValueCard, $randomValueCardDealer);
    }
    function score($randomValueCard, $randomValueCardDealer) {
        echo "<div id='output'>";
        if($randomValueCard == $randomValueCardDealer){
            echo "<h2>Tie</h2>";
        }
        else if($randomValueCard > $randomValueCardDealer){
            echo "<h2>Player won</h2>";
        }
        else {
            echo "<h2>Dealer won</h2>";
        }
        echo "</div>";
    }
    function displayCard($randomValueCard, $randomValueSuit, $pos){
        switch($randomValueSuit){
            case 0: $suit = "clubs";
                break;
            case 1: $suit = "diamonds";
                break;
            case 2: $suit = "hearts";
                break;
            case 3: $suit = "spades";
                break;
        } 
        switch($randomValueCard){
            case 0: $symbol = "ten";
                break;
            case 1: $symbol = "jack";
                break;
            case 2: $symbol = "queen";
                break;
            case 3: $symbol = "king";
                break;
            case 4: $symbol = "ace";
        }
        echo "<img id='reel$pos' src ='cards/$suit/$symbol.png' alt='$symbol'  title='".ucfirst($symbol)."' width='70' >";
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Cards</title>
    </head>
    <body>
        <?php
       play();
       ?>
    </body>
</html>