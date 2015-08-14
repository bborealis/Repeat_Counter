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
    }


?>
