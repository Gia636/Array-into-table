<?php
// Observer design pattern
abstract class AbstractObserver {
    abstract function update(AbstractSubject $subject_in);
}

abstract class AbstractSubject {
    abstract function attach(AbstractObserver $observer_in);
    abstract function detach(AbstractObserver $observer_in);
    abstract function notify();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

class PatternObserver extends AbstractObserver {
    public function __construct() {
    }
    public function update(AbstractSubject $subject) {
      writeln('*NEW SCORE*');
      writeln(' updated score: '.$subject->getScores());
      writeln('*NEW SCORE UPDATED*');      
    }
}

class PatternSubject extends AbstractSubject {
    private $scores = NULL;
    private $observers = array();
    function __construct() {
    }
    function attach(AbstractObserver $observer_in) {
      
      $this->observers[] = $observer_in;
    }
    function detach(AbstractObserver $observer_in) {
      
      foreach($this->observers as $okey => $oval) {
        if ($oval == $observer_in) { 
          unset($this->observers[$okey]);
        }
      }
    }
    function notify() {
      foreach($this->observers as $obs) {
        $obs->update($this);
      }
    }
    function updateScores($newScores) {
      $this->scores = $newScores;
      $this->notify();
    }
    function getScores() {
      return $this->scores;
    }
}
// Builder design pattern
class Scores{
	private $points;
	public function __construct($number){
		$this->points = $number;
	}
	public function getNumber()
	{
		return 'Score: ' . $this->points;
	}
}
//Factory design pattern using builder
class ScoresFactory{
	public static function create($number){
		return new Scores($number);
	}
}
$run = ScoresFactory::create(1);
$run2 = ScoresFactory::create(2);
$update = $run->getNumber();
$update2 = $run2->getNumber();

  $scoring = new PatternSubject();
  $scorekeeper = new PatternObserver();
  $scoring->attach($scorekeeper);
//using the factory to update the score
  $scoring->updateScores($update);
  $scoring->updateScores($update2);
  $scoring->detach($scorekeeper);
 
?>