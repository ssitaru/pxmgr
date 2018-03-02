<?= $this->element('admin_menu'); ?>
<div class="col s12">
<h4>Users Overview</h4>
<table class="tblUsers highlight">
	<thead>
		<th>ID</th>
		<th>Username</th>
		<th>Full Name</th>
		<th>E-Mail</th>
		<th></th>
	</thead>
	<tbody>
	<?php
		foreach($users as $u):
	?>
		<tr>
			<td><?= $u->id ?></td>
			<td><?= $u->username ?></td>
			<td><?= $u->fullname ?></td>
			<td><?= $u->email ?></td>
			<td>
				<?=$this->Html->link('<i class="material-icons left">edit</i>', ['action' => 'edit', $u->id], ['escape' => false]);?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<a class="btn btn-floating"><i class="material-icons">add</i></a>
</div>