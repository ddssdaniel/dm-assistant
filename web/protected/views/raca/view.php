<?php
/* @var $this RacaController */
/* @var $model Raca */

$this->breadcrumbs=array(
	'Racas'=>array('index'),
	$model->id_raca,
);

$this->menu=array(
	array('label'=>'List Raca', 'url'=>array('index')),
	array('label'=>'Create Raca', 'url'=>array('create')),
	array('label'=>'Update Raca', 'url'=>array('update', 'id'=>$model->id_raca)),
	array('label'=>'Delete Raca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_raca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Raca', 'url'=>array('admin')),
);
?>

<h1>View Raca #<?php echo $model->id_raca; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_raca',
		'nome_raca',
		array('value' => 'Helper::parse($data->conteudo)'),
	),
)); ?>
