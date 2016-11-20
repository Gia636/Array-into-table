<?php
namespace HTMLcreations;
	class Table{
		public function ST(){
			return "<table>";
		}
		public function ET(){
			return "</table>";
		}
		public function D($d){
			foreach ($d as $data){
				echo "<td>{$data}</td>";
			
			}
		}
		public function R($r){
			return '<tr></tr>';
		}
		public function H($h){
			foreach ($h as $head){
			echo "<th>{$head}</th>";
			}
		}
	}
	class Link{
		public function L($url, $link){
			return "<a href=$url>$link</a>";
		}
	}
	class Heading{
		public function Head($heading){
			return "<heading>{$heading}</heading>";
		}
	}
	class Paragraph{
		public function P($paragraph){
			return "<p>{$paragraph}</p>";
		}
}
	class NextLine{
		public function B(){
			return "<br />";
		}
}
	class Bold{
		public function startbold(){
			return "<b>";
		}
		public function endbold(){
			return "</b>";
		}
}
$h = new namespace\Heading;
$b = new namespace\Bold;
$p = new namespace\Paragraph;
$li = new namespace\Link;
$br = new namespace\NextLine;
$t = new namespace\Table;
echo $b->startbold();
echo $h->Head("NY Yankees 2016!");
echo $b->endbold();
echo $br->B();
echo $p->P("This table shows the 2016 win/loss record for the NY Yankees.");
echo $br->B();
$headings = array('Team', 'Wins', 'Losses');
$Y = array('Yankees', '84', '78');
echo $t->ST();
echo $t->R();
echo $t->H($headings);
echo $t->R();
echo $t->D($Y);
echo $t->ET();
echo $br->B();
echo $p->P("Below is a link to the code for this page in GitHub.");
echo $br->B();
$u = '"https://github.com/Gia636/Homework/blob/master/HTML.php"';
$g = 'GitHub Code';
echo $li->L($u, $g);
?>