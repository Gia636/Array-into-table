<?php

// 1. chunk_split
$split = chunk_split($string, $l, ".");

// 2. count_chars
$line = "Two a's and one f.";
foreach (count_chars($line, 1) as $i => $value) {
	echo "The values are $val \"" , chr($i) , "\" in the string. \n";
}

// 3. explode
$values = "dog:*3:100::/cat/mouse:/horse/a";
list($animal, $age, $number, $pet, $pest, $large, $letter) = explode(":", $values);
echo $animal;
echo $age;

// 4. htmlentities
$line = "This 'line' is <b>bold</b>";
echo htmlentities($line);
echo htmlentities($line, ENT_QUOTES);

// 5. htmlspecialchars_decode
$string = "<p>this -&gt; &quote;</p>\n";
echo htmlspecialchars_decode($string);
echo htmlspecialchars_decode($string, ENT_NOQUOTES);

// 6. htmlspecialchars
$chars = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new

// 7. implode
$array = array('name', 'number', 'age');
$commas = implode(",", $array);
echo $commas;
var_dump(implode('hello', array()));

// 8. lcfirst
$phrase = 'Hello';
$phrase = lcfirst($phrase);

// 9. ltrim
$words = "These are words. :"
$words2 = "\aThese are more words."
$words3 = "Even more words."
var_dump($words, $words2, $words3);
print "\n";

$trim = ltrim($words);
var_dump($trim);

$trim = ltrim($words2, " \a.");
var_dump($trim);

$trim = ltrim($words3, "Emw");
var_dump($trim);

// 10. md5
$word = 'apple';
if (md5($word) === '1f3870be274f6c49b3e31a0c6728957f') {
	echo "What kind of apple do you want?";
}

// 11. rtrim
$text = "\t\tThese are words :) ... ";
var_dump($text);
print "\n";
$trimmed = rtrim($text);
var_dump($trimmed);

// 12. str_replace
$numbers = ('one, 'two', 'three');
$a = str_replace($numbers, 'a', 'one two three'); 
print_r $a;

// 13. str_split
$str = "This is a line";
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
print_r($arr1);
print_r($arr2);

// 14. stripos
$character = 'a';
$mystring = 'a cat';
$pos1 = stripos($mystring, $character);

// 15. strtolower
$theStr = "This is a sentence";
$theStr = strtolower(theStr);
echo $theStr;

// 16. trim
$thePhrase = "\t\tThe are words :) ... ";
var_dump($thePhrase);
print "\n";
$trimmer = trim($thePhrase, " \t.");
var_dump($trimmer);
?>

