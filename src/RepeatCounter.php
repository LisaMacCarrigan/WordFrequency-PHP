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

            $split_sentence = explode(" ", $this->getSearchSentence());
            $the_search_word = $this->getSearchWord();
            $word_count = $this->setCount(0);

            if ($the_search_word) {
                return true;
            }
            else {
                return "Please enter a word";
            }


        }

    }

?>
