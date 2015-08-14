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

// $characters = str_split($text);
// print_r ($characters);
// foreach ($characters as $character) {
//
//     if($character == $ignore_characters) {
//         $new_characters = array_pop($characters);
//         $characters = implode($new_characters);
//     }
//
//     if($character != $ignore_characters) {
//         $characters = implode($characters);
//     }
//
//
//     if($word === $characters) {
//         $score = $score + 1;
//     }
//     }
// }
