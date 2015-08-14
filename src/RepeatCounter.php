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
                if ($word === $text) {
                    //add 1 to score
                    $score = $score + 1;
                    }
            }
            //end foreach loop

            //This isn't working right now but it is supposed to check if $word is empty and if it is to return "Please enter a word". Currently if $word is empty and $string_of_words is empty it returns 1 match which isn't correct. For some reason it  is passing the 7th test??
            $empty_word = " ";
            if($word === $empty_word) {
                $empty = "Please enter a word";
                return $empty;

            } else {
            // strval() converts the score number into a string
            $score = strval($score);
            //return the total number of matching words
            return $score;
        }
        }
    }
?>
