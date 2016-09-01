<?php 

class HomeController extends Controller
{
	
	public function run()
	{
		$this->view->title = "Home";
	}

	public function indexAction()
	{
		$this->view->title = "Home";
	}
	
}