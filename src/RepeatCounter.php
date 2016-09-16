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
            if ($sentence !== "") {
                $sentence_split = explode(" ", $sentence);
                $this->search_sentence = $sentence_split;
            }

        }

        function getSearchWord()
        {
            return $this->search_word;
        }

        function setSearchWord($word)
        {
            if ($word !== "") {
                $this->search_word = (string) $word;

            // if ($the_search_word) {
            //     return true;
            // }
            // else {
            //     return "Please enter a word to check";
            // }
            }

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

            // $split_sentence = explode(" ", $this->getSearchSentence());
            $split_sentence = $this->getSearchSentence();
            $the_search_word = $this->getSearchWord();
            $word_count = $this->setCount(0);


            if ($this->getSearchWord() && $this->getSearchSentence()) {
                //run the word count
            }
            else {
                return "Please enter a single search word and string of words to search";
            }


            // if ($split_sentence) {
            //     return true;
            // }
            // else {
            //     return "Please enter a string of words";
            // }

            // foreach ($split_sentence as $char) {
            //     if (empty($char)) {
            //         return "Please enter a string of words";
            //     }
            //     else {
            //
            //     }
            // }

        }

    }

?>
