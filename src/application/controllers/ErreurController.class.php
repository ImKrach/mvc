<?php 

class ErreurController extends Controller
{
	
	public function run()
	{
		$this->view->title = "Erreur";
	}

	public function indexAction()
	{
		$this->view->title = "Erreur";
	}

}