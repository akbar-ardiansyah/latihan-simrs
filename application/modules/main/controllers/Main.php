<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends App
{
	public function index()
	{
		$this->template('main_page');
	}
}
