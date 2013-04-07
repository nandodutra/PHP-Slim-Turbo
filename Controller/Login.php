<?php 

namespace Controller;

use \Nettuts\Controller;

class Login extends Controller {

	public function index() {

		$this->render('login/index', array('title'=>'teste'));
	}

}