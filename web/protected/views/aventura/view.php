<?php
/* @var $this AventuraController */
/* @var $model Aventura */

$this->breadcrumbs=array(
	'Aventuras'=>array('index'),
	$model->id_aventura,
);

$this->menu=array(
	array('label'=>'List Aventura', 'url'=>array('index')),
	array('label'=>'Create Aventura', 'url'=>array('create')),
	array('label'=>'Update Aventura', 'url'=>array('update', 'id'=>$model->id_aventura)),
	array('label'=>'Delete Aventura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_aventura),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Aventura', 'url'=>array('admin')),
);
?>

<h1>View Aventura #<?php echo $model->id_aventura; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_aventura',
		'nome_aventura',
		'inicio',
		'fim',
		'ativa',
	),
)); ?>
