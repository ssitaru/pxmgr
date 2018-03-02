<?php
namespace PXMgr\Model\Table;

use Cake\ORM\Table;

class PatientsTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('PatientFiles');
    }
    
        public function beforeSave($event, $entity, $options)
    {
	    if($entity->isNew())
	    {
		    $entity->setXid(substr(md5(rand()), 0, 16));
	    }
    }
}