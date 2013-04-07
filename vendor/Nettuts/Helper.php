<?php

namespace Nettuts;

use Symfony\Component\Yaml\Yaml;

class Helper {

	static function getRoutes() {

		$array = Yaml::parse(file_get_contents('../config/routing.yml'));

		return $array;

	}

	static function getViewInfo() {
		$array = Yaml::parse(file_get_contents('../config/view.yml'));

		return $array;
	}

}