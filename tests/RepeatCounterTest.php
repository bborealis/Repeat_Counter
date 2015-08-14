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

        //3. User enters word: "a" and a string of words: "a ba" and gets back "1". This check that the app can evaluate two different words.
        function test_countsRepeats_twoWordDifferent () {
            $test_RepeatCounter = new RepeatCounter;
            $word = "a";
            $string_of_words = "a ba";

            $result = $test_RepeatCounter->countsRepeats($word, $string_of_words);

            $this->assertEquals("1", $result);
        }

        //4. User enters word: "a" and a string of words: "a ba a" and gets back "2". This checks that the app can evaluate three different words.
        function test_countsRepeats_threeWordDifferent () {
            $test_RepeatCounter = new RepeatCounter;
            $word = "a";
            $string_of_words = "a ba a";

            $result = $test_RepeatCounter->countsRepeats($word, $string_of_words);

            $this->assertEquals("2", $result);
        }
        //5. User enters word: "a" and a string of words: "a!" and gets back "1". This checks that the app can sperate certain characters from a word so that it would be able to correctly evaluate a sentence.
        function test_countsRepeats_specialCharacters () {
            $test_RepeatCounter = new RepeatCounter;
            $word = "a";
            $string_of_words = "a!";

            $result = $test_RepeatCounter->countsRepeats($word, $string_of_words);

            $this->assertEquals("1", $result);
        }

        //6. User enters word: "A" and a string of words: "a A" and gets back "2". This checks that the app can work for uppercase and lower case.
        function test_countsRepeats_cases () {
            $test_RepeatCounter = new RepeatCounter;
            $word = "A";
            $string_of_words = "a A";

            $result = $test_RepeatCounter->countsRepeats($word, $string_of_words);

            $this->assertEquals("2", $result);
        }

        //7. User enters nothing and a string of words: "a A" and gets back "Please enter a valid word.". This validates the search.
        function test_countsRepeats_emptyWord () {
            $test_RepeatCounter = new RepeatCounter;
            $word = " ";
            $string_of_words = "a A";

            $result = $test_RepeatCounter->countsRepeats($word, $string_of_words);

            $this->assertEquals("Please enter a word", $result);
        }


    }
?>
