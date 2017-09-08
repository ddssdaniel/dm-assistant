<?php
/* @var $this AventuraController */
/* @var $model Aventura */

$this->breadcrumbs=array(
	'Aventuras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Aventura', 'url'=>array('index')),
	array('label'=>'Manage Aventura', 'url'=>array('admin')),
);
?>

<h1>Create Aventura</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>