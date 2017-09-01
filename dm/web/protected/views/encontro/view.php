<?php
/* @var $this EncontroController */
/* @var $model Encontro */

$this->breadcrumbs=array(
	'Encontros'=>array('index'),
	$model->id_encontro,
);

$this->menu=array(
	array('label'=>'List Encontro', 'url'=>array('index')),
	array('label'=>'Create Encontro', 'url'=>array('create')),
	array('label'=>'Update Encontro', 'url'=>array('update', 'id'=>$model->id_encontro)),
	array('label'=>'Delete Encontro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_encontro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Encontro', 'url'=>array('admin')),
);
?>

<h1>View Encontro #<?php echo $model->id_encontro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_encontro',
		'descricao',
		'dificuldade',
		'id_aventura',
		'ativo',
	),
)); ?>
