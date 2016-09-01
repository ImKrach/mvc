<?php 

class PageController extends Controller
{

	public function run()
	{
		$this->view->title = "Page";
	}

	public function indexAction()
	{
		$this->view->title = "Page";
	}
}