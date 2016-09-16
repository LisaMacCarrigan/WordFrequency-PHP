<?php

    class RepeatCounter
    {
        private $search_sentence;
        private $search_word;
        private $count;

        function __construct($sentence, $word)
        {
            $this->search_sentence = $sentence;
            $this->search_word = $word;
            $this->count = 0;
        }

 //----------------------------Getters & Setters----------------------------//

        function getSearchSentence()
        {
            return $this->search_sentence;
        }

        function setSearchSentence($sentence)
        {
            $this->search_sentence = (string) $sentence;
        }

        function getSearchWord()
        {
            return $this->search_word;
        }

        function setSearchWord($word)
        {
            $this->search_word = (string) $word;
        }

        function getCount()
        {
            return $this->count;
        }

        function setCount($word_count) {
            $this->count = (int) $word_count;
        }

//------------------------------Count Function------------------------------//

        function countRepeats() {

        }

    }

?>
