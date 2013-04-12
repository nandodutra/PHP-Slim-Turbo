<?php
 
namespace Controller;
 
class Main extends \Nettuts\Controller
{
    public function index($id)
	{
		$pessoa = \Models\User::find($id);

	    $this->render("inicio/test", array(
	    
	    		"name" => "Home"
	    	));
	}
 
    public function test($title)
	{
	    $this->render("inicio/test", array("title" => $title, "name" => "Test"));
	}

}