<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends App
{
    public function index()
    {
        $this->load->view('index');
    }
}
