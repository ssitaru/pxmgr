<?php
namespace PXMgr\Controller\Admin;

use PXMgr\Controller\AppController;

class AdminController extends AppController 
{
	public function index()
	{
		$this->render('/Admin/index');
	}
}
?>