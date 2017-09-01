<?php
/* @var $this EscolaController */
/* @var $model Escola */

$this->breadcrumbs=array(
	'Escolas'=>array('index'),
	$model->id_escola,
);

$this->menu=array(
	array('label'=>'List Escola', 'url'=>array('index')),
	array('label'=>'Create Escola', 'url'=>array('create')),
	array('label'=>'Update Escola', 'url'=>array('update', 'id'=>$model->id_escola)),
	array('label'=>'Delete Escola', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_escola),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Escola', 'url'=>array('admin')),
);
?>

<h1>View Escola #<?php echo $model->id_escola; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_escola',
		'nome_escola',
	),
)); ?>
