<?php
 
namespace Nettuts;

use \Nettuts\Helper;
 
class Controller extends \Slim\Slim
{
    protected $data;
 
    public function __construct()
    {
        $settings = require("../settings.php");
   
        if (isset($settings['model'])) {
            $this->data = $settings['model'];
        }
        parent::__construct($settings);
    }

    public function render($name, $data = array(), $status = null)
	{
		$viewInfo = Helper::getViewInfo($name);

		foreach ($viewInfo as $key => $value) {
			$data[$key] = $value;
		}

	    if (strpos($name, ".php") === false) {
	        $name = $name . ".php";
	    }

	    parent::render($name, $data, $status);
	}

	public function notFound()
	{
	    $this->render('errors/error', array(), 404);
	}
}