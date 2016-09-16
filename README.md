# Word Frequency

#### An application that compares a word against a string of words and returns how frequently the word appears in the string. 09.16.2016

#### By **Lisa MacCarrigan**

## Description

This is a website in Silex that returns how frequently a word appears in a given string. The user inputs both the word and the string of words to check. The application checks for full word matches only.

## Specifications

#### 1. The program returns a message if a word (i.e. the word to search for) is not entered.

* Example Input: _Word_ ""  |
                 _String of Words_ "go there"
* Example Output: "Please enter a word to check"

#### 2. The program returns a message if a string of words (i.e. the sentence to check) is not entered.

* Example Input: _Word_ "go"  |
                 _String of Words_ ""
* Example Output: "Please enter a string of words"

#### 3. The program returns a message if the word (i.e. the word to search for) contains a space.

* Example Input: _Word_ "g o"  |
                 _String of Words_ "go there"
* Example Output: "Please enter a single word that contains no spaces"

#### 4. When the word to search for is a full word match one time in the string of words, the match count is returned.

* Example Input: _Word_ "go"  |
                 _String of Words_ "go there"
* Example Output: 1

#### 5. When the word to search for is a full word match more than one time in the string of words, the match count is returned.

* Example Input #1: _Word_ "go"  |
                 _String of Words_ "go, go there"
* Example Output #1: 2

* Example Input #2: _Word_ "go"  |
                 _String of Words_ "go, go there. Go!"
* Example Output #2: 3

#### 6. When the word to search for is not a full word match in the string of words, the match count is returned.

* Example Input #1: _Word_ "go"  |
                 _String of Words_ "not here"
* Example Output #1: 0

* Example Input #1: _Word_ "go"  |
                 _String of Words_ "g o, there"
* Example Output #1: 0

## Setup/Installation Requirements

If editing:
* Clone this repository: https://github.com/LisaMacCarrigan/WordFrequency-PHP.git
* OPEN project folder ('PHP-AddressBook') in Code Editor of choice
* Install and Configure PHP development environment - Please visit http://goo.gl/JDBJ0p for easy-to-follow instructions by Epicodus. In general, you will need to:
    * Download and Install 'MAMP' by visiting: https://www.mamp.info/en/downloads/. (Note: 'MAMP' comes pre-installed on MAC OS X)
    * Download and Install PHP package manager called 'Composer'
    * Inside of Terminal window, from the top level of your project folder, RUN the install command: > composer install
    * Inside of Terminal window, within the project's "web" folder, RUN the command: > php -S localhost:8000. Then, in a web browser, visit: http://localhost:8000/

## Known Bugs

No known bugs.

## Support and contact details

For comments or questions, please email Lisa.MacCarrigan@gmail.com

## Technologies Used

* HTML
* PHP
* Silex (PHP micro-framework)
* Twig (PHP template engine)
* Bootstrap CDN

### License

*This application is licensed under the MIT license*

Copyright (c) 2016 **Lisa MacCarrigan**
