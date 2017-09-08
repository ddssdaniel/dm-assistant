<?php
/* @var $this MagiaController */
/* @var $model Magia */

$this->breadcrumbs=array(
	'Magias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Magia', 'url'=>array('index')),
	array('label'=>'Manage Magia', 'url'=>array('admin')),
);
?>

<h1>Create Magia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>