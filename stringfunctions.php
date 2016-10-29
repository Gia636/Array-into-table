<?php
// 1. chunk_split
$string = 'hello world';
echo chunk_split($string,1,".");

// 2. explode
$items = "item1 item2 item3";
$parts = explode(" ", $items);
echo $parts[0]; 
echo $parts[1];

// 3. count_chars and chr
$data = "Three ns and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}

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
echo $chars;

// 7. implode
$array = array('name', 'number', 'age');
$commas = implode(",", $array);
echo $commas;
var_dump(implode('hello', array()));

// 8. lcfirst
$phrase = 'Hello';
$phrase = lcfirst($phrase);

// 9. ltrim
$words = "These are words. :";
$words2 = "\aThese are more words.";
$words3 = "Even more words.";
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
print_r($trimmed);

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

// 15. addslashes
$str = "This is a string.";
echo addslashes($str);

// 16. strip_tags
$text = '<p>This is a paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');

// 17. strlen
$string = 'helloworld';
echo strlen($string);

// 18. str_getcsv
$file = fopen('baseballstats.csv', 'r');
while(! feof($file)){
print_r(str_getcsv($file));}

?>