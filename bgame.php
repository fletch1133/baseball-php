<?php

class baseballGameGen {
    private $home = 0;
    private $away = 0; 

    public function startThisGame() {
        echo "Baseball Game Simulation\n";

        for ($inning = 1; $inning <= 9; $inning++) {
            $homeScore = rand(0, 5);
            $awayScore = rand(0, 5); 

            $this->home += $homeScore;
            $this->away += $awayScore;

            echo "Inning $inning - Home: $homeScore, Away: $awayScore\n"; 
        }

        echo "\nFinal Score:\nHome Team: {$this->home}\nAway Team: {$this->away}";

        if ($this->home > $this->away) {
            echo " Hooray! The home team won!\n"; 
        } elseif ($this->away > $this->home) {
            echo " BOOOO! The away team won :( \n";
        } else {
            echo " It was a preaseaon game so it tied.\n"; 
        }
    }
}

$game = new baseballGameGen();
$game->startThisGame();


?>




<?php

// A Tie cannot occur


class baseballGameGens {   //Defining class
    private $homes = 0;   //Private property to store scores
    private $aways = 0;   //Same as above

    public function startThisGames() {   //declares pub method--func assoc. with class
        echo "Here is the box score of the game, folks!\n";   //prints to console

        $innings = 1;  //initalizes var to 1


        while ($innings <= 9 || $this->homes == $this->aways) {   //initiates loop to cont as long as innings is <= 9 or scores r =
            $homeScores = rand(0, 2);   //Gens rand scores between nums
            $awayScores = rand(0, 2);   //Same as above

            $this->homes += $homeScores;    //Adds generated score to cumlative score
            $this->aways += $awayScores;    //Same as above

            echo "Inning $innings - Home: $homeScores, Away: $awayScores\n";   //prints to console curr inning and scores

            $innings++;  //Increments var to proceed next inning
        }

        echo "\n Final Score:\n  Home Team: {$this->homes}\n  Away Team: {$this->aways}";  //prints final scores to console

        if ($this->homes > $this->aways) {     //Checks if home team score is > than away
            echo " Hooray! The home team won!\n";
        } else {
            echo " BOOOO! The away team won :( \n";    //Does the opposite as ln 68
        }
    }
}

$games = new baseballGameGens();  //Creates instance of baseballGameGens class
$games->startThisGames();  //calls startThisGames method on created obj to start simulation


?>