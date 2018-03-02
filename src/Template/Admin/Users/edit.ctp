<?= $this->Form->create($user); ?>
<?= $this->Form->control('username', ['type' => 'text']); ?>
<?= $this->Form->control('password'); ?>
<?= $this->Form->control('fullname', ['type' => 'text']); ?>
<?= $this->Form->control('email'); ?>
<?php
	if($user->isNew()):
		echo $this->Form->button('add');
	else:
		echo $this->Form->button('save');
	endif;
?>
<?= $this->Form->end(); ?>

