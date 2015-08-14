<?php
    Class RepeatCounter {

        function countsRepeats($word, $string_of_words) {

            $score = 0;

            if($word == $string_of_words) {
                $score = $score + 1;
            }

            $score = strval($score);
            return $score;


        }
    }


?>
