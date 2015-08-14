<?php
    Class RepeatCounter {

        function countsRepeats($word, $string_of_words) {

            $word = strtoupper($word);
            $string_of_words = strtoupper($string_of_words);

            $score = 0;
            $characters = array();
            $new_characters = array();

            $seperated_string_of_words = explode(" ", $string_of_words);
            $ignore_characters = array(".", "!");



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
