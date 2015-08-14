<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase {

        //1. User enters word: "a" and a string of words: "a" and gets back "1". This checks that the app works correctly for one word.
        function test_countsRepeats_oneWordSame () {
            $test_RepeatCounter = new RepeatCounter;
            $word = "a";
            $string_of_words = "a";

            $result = $test_RepeatCounter->countsRepeats($word, $string_of_words);

            $this->assertEquals("1", $result);
        }

        //2. User enters word: "a" and a string of words: "ba" and gets back "0". This checks that the app returns "0" for no matching words.
        function test_countsRepeats_oneWordDifferent () {
            $test_RepeatCounter = new RepeatCounter;
            $word = "a";
            $string_of_words = "ba";

            $result = $test_RepeatCounter->countsRepeats($word, $string_of_words);

            $this->assertEquals("0", $result);
        }

    }


?>
