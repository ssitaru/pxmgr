<?php
namespace PXMgr\Controller\Admin;

use Cake\ORM\TableRegistry;

class UsersController extends AdminController 
{
	/**
	 * Index
	 */
	public function index()
	{
		$usersTable = TableRegistry::get('Users');
		$this->set("users", $usersTable->find('all'));	
		
		// for JSON output
		$this->set('_serialize', 'users');
	}
	
	/**
	 * Edit User
	 */
	public function edit($id = null)
	{
	 	if (empty($id)) {
        	throw new NotFoundException;
		}
		$user = $this->Users->get($id);
		$this->set('user', $user);

		// for JSON output
		$this->set('_serialize', 'user');
		
		// if we want to save from Form
		if($this->request->is('get'))
		{
			// password field = empty
			//$user->password = '';
			$this->render('edit', 'ajax');
		}
		else
		{
			$this->Users->patchEntity($user, $this->request->getData());
			$this->Users->save($user);
			if(empty($user->errors))
			{
				$this->set('success', true);
			}
			else
			{
				$this->set('success', false);
				$this->set('message', debug($user->errors));
			}
			
			$this->render('/Element/ajax_response', 'ajax');
		}
		
	}
	
	/**
	 * Add User
	 */
	public function add()
	{
		// if we want to save from Form
		if($this->request->is('post'))
		{
			$usersTable = TableRegistry::get('Users');
			$user = $usersTable->newEntity($this->request->getData());
			$usersTable->save($user);
			
			$this->redirect(['action' => 'index']);
		}
		else
		{
			$this->set('user', $this->Users->newEntity());
			$this->render('edit');
		}
	}
}
