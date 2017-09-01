<?php
/* @var $this TipoItemController */
/* @var $model TipoItem */

$this->breadcrumbs=array(
	'Tipo Items'=>array('index'),
	$model->id_tipo_item=>array('view','id'=>$model->id_tipo_item),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoItem', 'url'=>array('index')),
	array('label'=>'Create TipoItem', 'url'=>array('create')),
	array('label'=>'View TipoItem', 'url'=>array('view', 'id'=>$model->id_tipo_item)),
	array('label'=>'Manage TipoItem', 'url'=>array('admin')),
);
?>

<h1>Update TipoItem <?php echo $model->id_tipo_item; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>