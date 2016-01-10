<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Test to see if board exists
        if (isset($_GET['board'])) 
        {

            //obtain board
            $squares = $_GET['board'];

            //Check to see who wins
            $game = new Game($squares);
            if ($game->winner('x'))
                {echo 'You win. Lucky guesses!';}
            else if ($game->winner('o'))
                {echo 'I win. Muahahahaha';}
            else 
                {echo 'No winner yet, but you are losing.';}
        }
        else
        {echo 'No board!';}
        
        
        ?>
    </body>
</html>

<?php

//Game class
class Game {
    
    //class attribute 
    var $position;

    
    //constructor
    function __construct($squares) {
        $this->position = str_split($squares);
    }

    //function to determine if there is a winner
    function winner($token) {
        $won = false;
        if (($this->position[0] == $token) &&
            ($this->position[1] == $token) &&
            ($this->position[2] == $token))  {

          $won = true;  
        } else if (($this->position[3] == $token) &&
            ($this->position[4] == $token)  &&
            ($this->position[5] == $token)) {
           $won = true; 
        } else if (($this->position[6] == $token) &&
            ($this->position[7] == $token)  &&
            ($this->position[8] == $token)) {
           $won = true;
        } else if (($this->position[0] == $token) &&
            ($this->position[4] == $token)  &&
            ($this->position[8] == $token)) {
           $won = true; 
        } else if (($this->position[2] == $token) &&
            ($this->position[4] == $token)  &&
            ($this->position[6] == $token)) {
           $won = true; 
        }else if (($this->position[0] == $token) &&
            ($this->position[3] == $token)  &&
            ($this->position[6] == $token)) {
           $won = true; 
        }else if (($this->position[1] == $token) &&
            ($this->position[4] == $token)  &&
            ($this->position[7] == $token)) {
           $won = true; 
        }else if (($this->position[2] == $token) &&
            ($this->position[5] == $token)  &&
            ($this->position[8] == $token)) {
           $won = true; 
        }
            return $won;
    }
}
?>



