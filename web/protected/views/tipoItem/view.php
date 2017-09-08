<?php
/* @var $this TipoItemController */
/* @var $model TipoItem */

$this->breadcrumbs=array(
	'Tipo Items'=>array('index'),
	$model->id_tipo_item,
);

$this->menu=array(
	array('label'=>'List TipoItem', 'url'=>array('index')),
	array('label'=>'Create TipoItem', 'url'=>array('create')),
	array('label'=>'Update TipoItem', 'url'=>array('update', 'id'=>$model->id_tipo_item)),
	array('label'=>'Delete TipoItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_item),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoItem', 'url'=>array('admin')),
);
?>

<h1>View TipoItem #<?php echo $model->id_tipo_item; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_item',
		'nome_tipo_item',
	),
)); ?>
