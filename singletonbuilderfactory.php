<?php
//Singleton design pattern
class Singleton
{

    private static $single;
    
    public static function getSingle()
    {
        if (null === static::$single) {
            static::$single = new static();
        }
        
        return static::$single;
    }

    protected function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
//Builder
class statement{
	private $line;
	public function __construct($sentence){
		$this->line = $sentence;	
	}
	public function getSentence(){
		return $this->line;
	}
}
//Factory
class statementFactory{
	public static function create($sentence){	

		return new statement($sentence);
	}
}
//uses singleton
$obj = Singleton::getSingle();
var_dump($obj === Singleton::getSingle());  
//uses the builder to make $design
$design = statementFactory::create('This is a singleton design pattern.');
//uses factory to create a sentence explaining the use of the singleton design pattern.
print_r($design->getSentence());


?>