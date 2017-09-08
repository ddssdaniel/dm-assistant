<?php
/* @var $this TipoItemController */
/* @var $model TipoItem */

$this->breadcrumbs=array(
	'Tipo Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoItem', 'url'=>array('index')),
	array('label'=>'Manage TipoItem', 'url'=>array('admin')),
);
?>

<h1>Create TipoItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>