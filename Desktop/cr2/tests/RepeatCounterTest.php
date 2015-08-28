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

      //Test 3  how many words are inside this string?
      function test_countRepeats_countWordsInString()
      {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $word = "piano";
        $string = "I like to play piano";
        // count should be 1!!!
        // " lets play piano at the piano store"
        // count should be 2!!

        //Act
        $result = $test_RepeatCounter->countRepeats($word, $string);

        //Assert
        $this->assertEquals(1, $result);
      }

      //Test4 how many words dont match in a string?
      // words that are not in the sentence?
      function  test_countRepeats_compareDifferentWordsInString()
      {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $word = "drums";
        $string = "Let's go play guitar and piano.";
        // count = 0

        //Act
        $result = $test_RepeatCounter->countRepeats($word, $string);

        //Assert
        $this->assertEquals("Words do NOT match input word!", $result);
      }
    }

?>
