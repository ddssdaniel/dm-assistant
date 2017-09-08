<?php
/* @var $this TipoMonstroController */
/* @var $model TipoMonstro */

$this->breadcrumbs=array(
	'Tipo Monstros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoMonstro', 'url'=>array('index')),
	array('label'=>'Manage TipoMonstro', 'url'=>array('admin')),
);
?>

<h1>Create TipoMonstro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>