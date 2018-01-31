<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{
	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->show(2);
	}

}
