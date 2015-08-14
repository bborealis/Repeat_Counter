<?php
    Class RepeatCounter {

        function countsRepeats($word, $string_of_words) {

            $score = 0;

            $seperated_string_of_words = explode(" ", $string_of_words);

            foreach ($seperated_string_of_words as $text) {

                if($word === $text) {
                    $score = $score + 1;
                }
            }

            $score = strval($score);
            return $score;


        }
    }


?>
