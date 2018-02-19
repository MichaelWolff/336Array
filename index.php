<?php
include 'inc/functions.php';
?>
<!DOCTYPE html>
<!--The function of this assignment will be to calculate numbers-->
<html>
    
    <head>
        <title> SILVERJACK </title>
        <style>
            /*@import url("css/styles.css");*/
        </style>
        
        CALCULATOR
    </head>
    <body>
        <div id="main">
        <!--<img src="img/cherry.png" alt="cherry" title="Cherry" width="70" />-->
        <?php
        $playerList = array("");
        $deck = array("hearts" => $hearts);
        $deck = array("diamonds" => $diamonds);
        $deck = array("spades" => $spades);
        $deck = array("clubs" => $clubs);

        $deck["hearts"] = array('1','2','3','4','5','6','7','8','9','11','12','13');
        $deck["diamonds"] = array('1','2','3','4','5','6','7','8','9','11','12','13');
        $deck["spades"] = array('1','2','3','4','5','6','7','8','9','11','12','13');
        $deck["clubs"] = array('1','2','3','4','5','6','7','8','9','11','12','13');
        
       for ($i = 0; $i < count($deck); $i++) {
                    echo "<li>Card ($i): ".$deck[$i]."</li>";
       }
        
        ?>
        <form>
            
            <input type="checkbox" name="replay" value="Replay"> Replay 


        </form>
        </div>
    </body>
</html>