<?php
namespace PXMgr\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Groups');
    }
    
    public function validationDefault(Validator $validator)
    {
		$validator->requirePresence('username')->notEmpty('username'); 
		$validator->requirePresence('password')->minLength('password', 8); 
		
		return $validator;
	}
}