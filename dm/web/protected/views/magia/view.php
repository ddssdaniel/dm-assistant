<?php
/* @var $this MagiaController */
/* @var $model Magia */

$this->breadcrumbs=array(
	'Magias'=>array('index'),
	$model->id_magia,
);

$this->menu=array(
	array('label'=>'List Magia', 'url'=>array('index')),
	array('label'=>'Create Magia', 'url'=>array('create')),
	array('label'=>'Update Magia', 'url'=>array('update', 'id'=>$model->id_magia)),
	array('label'=>'Delete Magia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_magia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Magia', 'url'=>array('admin')),
);
?>

<h1>View Magia #<?php echo $model->id_magia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_magia',
		'nome_magia',
		'ciclo',
		'id_escola',
		'conteudo',
	),
)); ?>
