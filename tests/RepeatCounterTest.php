<?php

    require_once (__DIR__ . "/../src/RepeatCounter.php");

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        // function test_WordBlank() { // Spec #1
        //
        //     //ARRANGE
        //     $input_word_string_to_check = "go there";
        //     $input_word_to_check = "";
        //     $expected_output = "Please enter a word to check";
        //     $repeat_counter_instance = new RepeatCounter($input_word_string_to_check, $input_word_to_check);
        //
        //     //ACT
        //     $test_result = $repeat_counter_instance->countRepeats();
        //     echo $test_result;
        //
        //     //ASSERT
        //     $this->assertEquals($expected_output, $test_result);
        //
        // }

        // function test_StringofWordsBlank() { // Spec #2
        //
        //     //ARRANGE
        //     $input_word_string_to_check = "";
        //     $input_word_to_check = "go";
        //     $expected_output = "Please enter a string of words";
        //     $repeat_counter_instance = new RepeatCounter($input_word_string_to_check, $input_word_to_check);
        //
        //     //ACT
        //     $test_result = $repeat_counter_instance->countRepeats();
        //     echo $test_result;
        //
        //     //ASSERT
        //     $this->assertEquals($expected_output, $test_result);
        //
        // }

        // function test_WordContainsSpace() { // Spec #3
        //
        //     //ARRANGE
        //     $input_word_string_to_check = "go there";
        //     $input_word_to_check = "g o";
        //     $expected_output = "Please enter a single word that contains no spaces"
        //     $repeat_counter_instance = new RepeatCounter($input_word_string_to_check, $input_word_to_check);
        //
        //     //ACT
        //     $test_result = $repeat_counter_instance->countRepeats();
        //
        //     //ASSERT
        //     $this->assertEquals($expected_output, $test_result);
        //
        // }

        function test_OnlyOneMatch() { // Spec #4

            //ARRANGE
            $input_word_string_to_check = "go there";
            $input_word_to_check = "go";
            $expected_output = 1;
            $repeat_counter_instance = new RepeatCounter($input_word_string_to_check, $input_word_to_check);

            //ACT
            $test_result = $repeat_counter_instance->countRepeats();

            //ASSERT
            $this->assertEquals($expected_output, $test_result);

        }

        // function test_MultipleMatch() { // Spec #5
        //
        //     //ARRANGE
        //     $input_word_string_to_check =
        //     $input_word_to_check =
        //     $expected_output =
        //     $repeat_counter_instance = new RepeatCounter($input_word_string_to_check, $input_word_to_check);
        //
        //     //ACT
        //     $test_result = $repeat_counter_instance->countRepeats();
        //
        //     //ASSERT
        //     $this->assertEquals($expected_output, $test_result);
        //
        // }

        // function test_NoMatch() { // Spec #6
        //
        //     //ARRANGE
        //     $input_word_string_to_check =
        //     $input_word_to_check =
        //     $expected_output =
        //     $repeat_counter_instance = new RepeatCounter($input_word_string_to_check, $input_word_to_check);
        //
        //     //ACT
        //     $test_result = $repeat_counter_instance->countRepeats();
        //
        //     //ASSERT
        //     $this->assertEquals($expected_output, $test_result);
        //
        // }

    }

?>
