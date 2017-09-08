<?php
/* @var $this MonstroController */
/* @var $model Monstro */

$this->breadcrumbs=array(
	'Monstros'=>array('index'),
	$model->id_monstro,
);

$this->menu=array(
	array('label'=>'List Monstro', 'url'=>array('index')),
	array('label'=>'Create Monstro', 'url'=>array('create')),
	array('label'=>'Update Monstro', 'url'=>array('update', 'id'=>$model->id_monstro)),
	array('label'=>'Delete Monstro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_monstro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Monstro', 'url'=>array('admin')),
);
?>

<h1>View Monstro #<?php echo $model->id_monstro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_monstro',
		'nome_monstro',
		'id_tipo_monstro',
		array('value' => 'Helper::parse($data->conteudo)'),
		'customizado',
		'dificuldade',
	),
)); ?>
