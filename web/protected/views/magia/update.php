<?php
/* @var $this MagiaController */
/* @var $model Magia */

$this->breadcrumbs=array(
	'Magias'=>array('index'),
	$model->id_magia=>array('view','id'=>$model->id_magia),
	'Update',
);

$this->menu=array(
	array('label'=>'List Magia', 'url'=>array('index')),
	array('label'=>'Create Magia', 'url'=>array('create')),
	array('label'=>'View Magia', 'url'=>array('view', 'id'=>$model->id_magia)),
	array('label'=>'Manage Magia', 'url'=>array('admin')),
);
?>

<h1>Update Magia <?php echo $model->id_magia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>