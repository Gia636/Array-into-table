<?php
//Strategy Design Pattern
class StrategyContext {
    private $strategy = NULL; 
    public function __construct($strategy_ind_id) {
        switch ($strategy_ind_id) {
            case "C": 
                $this->strategy = new StrategyCaps();
            break;
            
        }
    }
    public function showTeamName($name) {
      return $this->strategy->showName($name);
    }
}

interface StrategyInterface {
    public function showName($name_in);
}
 
class StrategyCaps implements StrategyInterface {
    public function showName($name_in) {
        $team = $name_in->getTeam();
        
        return strtoupper ($team);
    }
}
//Builder Design Pattern
class Baseball {
    private $team;
    private $wins;
	private $losses;
    function __construct($team_in, $wins_in, $losses_in) {
        $this->team = $team_in;
        $this->wins = $wins_in;
		$this->losses = $losses_in;
    }
    function getTeam() {
        return $this->team;
    }
    function getWins() {
        return $this->wins;
    }
	function getLosses() {
		return $this->losses;
	}
    function getTWL() {
        return $this->getTeam() . ' ' . $this->getWins() . ' ' . $this->getLosses();
    }
}
//Factory Design Pattern
class BaseballFactory{
	public static function create($team_in, $wins_in, $losses_in)
	{
		return new Baseball($team_in, $wins_in, $losses_in);
	
	}}
//Using factory to create $NY from the Builder Strategy
$NY = BaseballFactory::create('Yankees', 84, 78);
$strategyContextC = new StrategyContext('C');
//Using $NY from the factory to use the strategy
print_r($strategyContextC->showTeamName($NY));


?>