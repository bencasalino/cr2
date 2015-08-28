<?php
    // links back to the class in the src folder
    require_once "src/RepeatCounter.php";

    // actually needed so you can run phpunit tests
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
      //Test 1
      function test_countRepeats_sameWordCount()
      {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $word = "piano";
        $string = "piano":

        //Act
        $test_RepeatCounter->countRepeats($word, $string);
        $result =

        //Assert
        $this->assertEquals(1, $result);

      }

      //Test 2 are the words not the same???
      function test_countRepeats_differentWord()
      {
          //Arrange
          $test_RepeatCounter = new RepeatCounter;
          $word = "piano";
          $string = "pianos";

          //Act
          $test_RepeatCounter->countRepeats($word, $string);
          $result =

          //Assert
          $this->assertEquals(" Output word isnt the same as the input word", $result);

      }



?>
