<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    
    <?= $this->Html->css('bootstrap.min.css'); ?>
    <?= $this->Html->css('material-icons.min.css'); ?>
    <?= $this->Html->script('jquery.js'); ?>
    <?= $this->Html->script('popper.min.js'); ?>
    <?= $this->Html->script('bootstrap.min.js'); ?>
    
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<div class="container">
    <?= $this->fetch('content') ?>
	</div>
</body>
</html>
