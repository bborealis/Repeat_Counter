<?php
    Class RepeatCounter {

        function countsRepeats($word, $string_of_words) {

            //use strtoupper on $word and $string_of_words to match case type regardless of input.
            $word = strtoupper($word);
            $string_of_words = strtoupper($string_of_words);
            //use preg_split to seperate sentences entered in by users. This will check for spaces, periods, commas, semi-colons, parenthesis, exclamation marks, and question marks.
            $seperated_string_of_words = preg_split("/[\s,!?.;()]+/", $string_of_words);
            //set $score counter to 0
            $score = 0;
            //begin foreach loop
            foreach ($seperated_string_of_words as $text) {
                //if $text equals the original $word...
                if($word === $text) {
                    //add 1 to score
                    $score = $score + 1;
                }
            }
            //end foreach loop
            // strval() converts the score number into a string
            $score = strval($score);
            //return the total number of matching words
            return $score;
        }
    }
?>
