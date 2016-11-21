<?php
namespace LettersNumbers;
	class vowels{
		public function lowercase($l){
			$lo = array('a', 'e', 'i', 'o', 'u');
			if(in_array($l, $lo)){
				echo "The letter is a lowercase vowel.";
			 }
			else{
				echo "The letter is not a lowercase vowel.";
			
			}
		}
		public function Capital($C){
			$Ca = array('A', 'E', 'I', 'O', 'U');
			if(in_array($C, $Ca)){
				echo "The letter is an uppercase vowel.";
			}
			else{
				echo "The letter is not an uppercase vowel.";
			
			}
		}
	}
	class digits{
		public function odd($o){
			$odd = array(1, 3, 5, 7, 9);
			if(in_array($o, $odd)){
				echo "The number is odd.";}
			else{
				echo "The number is not odd.";
			}
		}
		public function even($e){
			$even = array(2, 4, 6, 8);
			if(in_array($e, $even)){
				echo "The number is even.";}
			else{
				echo "The number is not even.";
			}
		}
	}
			
$n = new namespace\vowels;
$n->lowercase('i');
$n->Capital('J');
$p = new namespace\digits;
$p->odd(1);
$p->even(3);
$p->odd(2);
$p->even(4);
?>