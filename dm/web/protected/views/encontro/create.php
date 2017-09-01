<?php
/* @var $this EncontroController */
/* @var $model Encontro */

$this->breadcrumbs=array(
	'Encontros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Encontro', 'url'=>array('index')),
	array('label'=>'Manage Encontro', 'url'=>array('admin')),
);
?>

<h1>Create Encontro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>