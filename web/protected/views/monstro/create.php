<?php
/* @var $this MonstroController */
/* @var $model Monstro */

$this->breadcrumbs=array(
	'Monstros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Monstro', 'url'=>array('index')),
	array('label'=>'Manage Monstro', 'url'=>array('admin')),
);
?>

<h1>Create Monstro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>