<?php
namespace PXMgr\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Security');
        //$this->loadComponent('Csrf');
        /*$this->loadComponent('Auth', [
        	'authenticate' => [
        		'Form' => [
        			'fields' => ['username' => 'username', 'password' => 'password']
        		]
			]
        ]);*/
    }
}
