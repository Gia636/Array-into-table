<?php
//Builder
class Grades{
	private $letter;
	private $number;
	public function __construct($letter_in, $number_in)
	{
		$this->letter = $letter_in;
		$this->number = $number_in;
	}
	public function getLetter()
	{
		return $this->letter;
		}
	public function getNumber(){
		return $this->number;
	}
	public function getLetterandNumber(){
		return $this->letter . ':' . $this->number;
	}
}
//Decorator
class GradesDecorator
{
    protected $score;
    protected $number;

    public function __construct(Grades $score)
    {
        $this->score = $score;
        $this->resetNumber();
    }

    public function resetNumber()
    {
        $this->number = $this->score->getNumber();
    }

    public function showNumber()
    {
        return $this->number;
    }
}
class GradesExclaimDecorator extends GradesDecorator
{
    private $decorator;

    public function __construct(GradesDecorator $decorator)
    {
        $this->decorator = $decorator;
    }

    public function exclaimGrade()
    {
        $this->decorator->number = "!".$this->decorator->number."!";
    }
}
//Strategy
class StrategyContext {
    private $strategy = NULL; 
    public function __construct($strategy_ind_id) {
        switch ($strategy_ind_id) {
            case "S": 
                $this->strategy = new StrategyStars();
            break;
            
        }
    }
    public function showGrades($s) {
      return $this->strategy->show($s);
    }
}	
interface StrategyInterface {
    public function show($s_in);
}
class StrategyStars implements StrategyInterface {
    
    public function show($s_in) {
      $report = $s_in->getNumber();
      
      return Str_replace(' ','*',$report);
    }
  }

$grades = new Grades('A', 90);
//decorates from the builder
$decorator = new GradesDecorator($grades);
$exclaimDecorator = new GradesExclaimDecorator($decorator);
$exclaimDecorator->exclaimGrade();
echo $decorator->showNumber();
//uses a strategy from the builder
$strategyContextS = new StrategyContext('S');
print_r($strategyContextS->showGrades($grades));
?>