<?php
/* @var $this SomeController */

$this->breadcrumbs=array(
	'Some',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<dl>
	<dt>id</dt>
	<dd><?php echo $userModel->id; ?></dd>
	<dt>username</dt>
	<dd><?php echo $userModel->username; ?></dd>
	<dt>email</dt>
	<dd><?php echo $userModel->email; ?></dd>
</dl>
