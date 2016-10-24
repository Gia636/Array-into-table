<?php
// 1. array_keys
$sportarray = array("sport" => "baseball", "team" => "Yankees");
print_r(array_keys($array));

// 2. array_search
$petarray = array("pet" => "cat", "number" => 2);
$key = array_search("cat", $petarray);

// 3. array_walk
$examarray = array("exam" => "midterm", "grade" => 85);
function test_alter($item1, $key, $prefix)
{
	$item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
	echo "key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($examarray, 'test_print');

array_walk($examarray, 'test_alter', 'fruit');
echo "... and after:\n";

// 4. array_pop
$animals = array("cat", "mouse", "hamster", "elephant");
$largeanimals = array_pop($animals);
print_r($animals);

// 5. array_push
$numbers = array("one", "two");
array_push($numbers, "three", "four");
print_r($numbers);

// 6. array_combine
$teams = ('Yankees', 'Red Sox', 'Orioles');
$wins = (84, 93, 89);
$standings = array_combine($teams, $wins);
print_r($standings);

// 7. fgetcsv
$row = 1;
if (($cvs = fopen("file.csv", "r")) ! == FALSE) {
	while (($data = fgetcsv($csv, 1000, ",")) == FALSE {
		$num = count($data);
		echo "<p> $num fields in line $row: <br> /></p>\n";
		$row++;
		for ($c=0; $c < $num; $c++) {
			echo $data[$c] . "br />\n";
		}
	}
	fclose($csv);
}

// 8. implode
$info = array('name', 'age', 'gender');
$commas = implode(",", $info);
echo $commas;

// 9. explode
$quarters = "section1 section2 section3 section4";
$sections = explode(" ", $quarters);
echo $sections[0];
echo $sections[1];

// 10. array_intersect
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("e" => "apple", "banana", "orange");
$result = array_intersect($array1, $array2);
print_r($result);

// 11. array_fill
$a = array_fill(1, 2, 'cat');
$b = array_fill(-1, 3, 'dog');
print_r($a);
print_r($b);

// 12. array_merge
$before = array("grade" => 80, 90, 85);
$average = array("grade" => 85, "final" => "B", "A", "B+");
$final = array_merge($before, $after);
print_r($final);

// 13. array_shift
$numbers = array(1, 2, 3, 4, 5);
$one = array_shift($numbers);
print_r($numbers);

// 14. array_sum
$digits = array(1, 3, 5, 7);
echo "sum(digits) = " . array_sum($digits) . "\n";

// 15. array_unique
$values = array("a", 2, "b" => 2, 3, 4, 3);
$result = array_unique($values);
print_r($result);

?>