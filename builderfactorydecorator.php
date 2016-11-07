<?php
//Builder Design Pattern
class BaseballBuilder
{
	private $team;
	private $division;
	
	public function __construct($team, $division)
	{
		$this->team = $team;
		$this->division = $division;
	}
	public function getTeam()
	{
		return $this->team;}
	public function getDivision()
	{
		return $this->division;}
	public function getTeamAndDivision()
	{
		return $this->getTeam(). ' in ' . $this->getDivision();
	}
}
//Factory Design Pattern
// using the builder design pattern to make the factory design pattern
class BaseballFactory
{
    public static function create($team, $division)
    {
        return new BaseballBuilder($team, $division);
    }
}
//Decorator design pattern (used to not alter original)
class BaseballDecorator
{
	protected $state;
	protected $division;
	
	public function __construct(BaseballBuilder $state)
	{
		$this->state = $state;
		$this->resetDivision();
	}
	public function resetDivision()
	{
		$this->division = $this->state->getDivision();
	}
	public function showDivision()
	{
		return $this->division;
	}
}
//Decorates with !
class BaseballExclaimDecorator extends BaseballDecorator
{
    private $decorator;

    public function __construct(BaseballDecorator $decorator)
    {
        $this->decorator = $decorator;
    }

    public function exclaimDivision()
    {
        $this->decorator->division = "!".$this->decorator->division."!";
    }
}
// Using the factory to create $NY
$NY = BaseballFactory::create('Yankees', 'AL East');
print_r($NY->getTeamAndDivision());
// Works with factory to decorate $NY
$decorator = new BaseballDecorator($NY);
$exclaimDecorator = new BaseballExclaimDecorator($decorator);
$exclaimDecorator->exclaimDivision();
echo $decorator->showDivision();
// resets to original division
$decorator->resetDivision();
echo $decorator->showDivision();
?>