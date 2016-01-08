<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mytest extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * 		http://example.com/mytest
	 *
	 */
	public function index()
	{
		$this->load->view('mytest_message');
	}

	public function test()
	{
		echo "here";
	}
}
