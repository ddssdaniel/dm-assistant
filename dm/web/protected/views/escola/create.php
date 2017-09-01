<?php
/* @var $this EscolaController */
/* @var $model Escola */

$this->breadcrumbs=array(
	'Escolas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Escola', 'url'=>array('index')),
	array('label'=>'Manage Escola', 'url'=>array('admin')),
);
?>

<h1>Create Escola</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>