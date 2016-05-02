<?php

include_once "model/Request.php";
include_once "control/UserController.php";
include_once "control/UberController.php";
include_once "control/CarpoolController.php";

class ResourceController{
	
	private $ResourceMap = [
		"carpool" 	=> "CarpoolController",
		"user"		=> "UserController",
		"uber"		=> "UberController"
	];

	public function createResource($request){



	return (new $this->ResourceMap[$request->getResource()]())->register($request);

		//new $this->ResourceMap[$request->getResource()]($request);
	}

}