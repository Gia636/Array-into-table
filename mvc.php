<?php
class Model
{
    public $string;

    public function __construct(){
        $this->string = "This is a sample MVC Program";
    }
}
class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
	
    public function output(){
		return "<h><b>" . $this->model->string . "</b></h>";
        
    }
}
class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();
?>