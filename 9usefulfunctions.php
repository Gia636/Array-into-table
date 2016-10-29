<?php
// example 1
function words($word1 = '', $word2 = '') {
 
    echo "word1: $word1\n";
    echo "word2: $word2\n";
 
}
words('my','words');
words();

// example 2
function morewords() {
    $words = func_get_args();
 
    foreach ($words as $k => $v) {
        echo "word".($k+1).": $v\n";
    }
 
}
 
morewords();
 
morewords('hi');
 
morewords('these', 'are', 'words');

// example 3
$files1 = glob('*.php');
 print_r($files);

// example 4
$files2 = glob('*.{php,txt}', GLOB_BRACE);
 print_r($files);

// example 5
$files3 = glob('../images/a*.jpg');
 print_r($files);

// example 6
$files4 = glob('../images/a*.jpg');
$files4 = array_map('realpath',$files);
 
print_r($files);

// example 7
echo "Initial: ".memory_get_usage()." bytes \n";
for ($i = 0; $i < 100000; $i++) {
    $array []= md5($i);
}
for ($i = 0; $i < 100000; $i++) {
    unset($array[$i]);
}
 
echo "Final: ".memory_get_usage()." bytes \n";
echo "Peak: ".memory_get_peak_usage()." bytes \n";

// example 8
print_r(getrusage());

// example 9
sleep(3);
 
$data = getrusage();
echo "Time of user: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "Time of system: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);

// example 10
for($i=0;$i<10000000;$i++) {
 
}
 
$data = getrusage();
echo "Time of user: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "Time of system: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);

// example 11
$begin = microtime(true);
while(microtime(true) - $begin < 3) {
 
}
 
$data = getrusage();
echo "Time of user: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "Time of system: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);

// example 12
require_once('config/database.php');
require_once(dirname(__FILE__) . '/config/database.php');

// example 13
my_debug("some debug message", __LINE__);
my_debug("another debug message", __LINE__);
function my_debug($msg, $line) {
    echo "Line $line: $msg\n";
}

// example 14
echo md5(time() . mt_rand(1,1000000));

// example 15
echo uniqid();
echo uniqid();

// example 16
echo uniqid('cat_');
echo uniqid('',dog);
echo uniqid('pets_',true);

// example 17
$var = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);
$string = serialize($var);
 
echo $string;
$newvar = unserialize($string);
 
print_r($newvar);

// example 18
$var2 = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);
$string2 = json_encode($var2);
 
echo $string2;
$newvar2 = json_decode($string2);
 
print_r($newvar2);

// example 19
$string = "This is a string being used as an example.";
$compressed = gzcompress($string);
 
echo "Original size: ". strlen($string)."\n";
echo "Compressed size: ". strlen($compressed)."\n";
$original = gzuncompress($compressed);

// example 20
$starttime = microtime(true);
echo "execution took: ".
        (microtime(true) - $starttime).
        " seconds.";

// example 21
$starttime2 = microtime(true);
 
register_shutdown_function('my_shutdown');

function my_shutdown() {
    global $start_time;
 
    echo "execution took: ".
            (microtime(true) - $starttime2).
            " seconds.";
}
?>