<?php
/* @var $this TipoMonstroController */
/* @var $model TipoMonstro */

$this->breadcrumbs=array(
	'Tipo Monstros'=>array('index'),
	$model->id_tipo_monstro,
);

$this->menu=array(
	array('label'=>'List TipoMonstro', 'url'=>array('index')),
	array('label'=>'Create TipoMonstro', 'url'=>array('create')),
	array('label'=>'Update TipoMonstro', 'url'=>array('update', 'id'=>$model->id_tipo_monstro)),
	array('label'=>'Delete TipoMonstro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_monstro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoMonstro', 'url'=>array('admin')),
);
?>

<h1>View TipoMonstro #<?php echo $model->id_tipo_monstro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_monstro',
		'nome_tipo_monstro',
	),
)); ?>
