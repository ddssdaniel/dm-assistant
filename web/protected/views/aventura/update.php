<?php
/* @var $this AventuraController */
/* @var $model Aventura */

$this->breadcrumbs=array(
	'Aventuras'=>array('index'),
	$model->id_aventura=>array('view','id'=>$model->id_aventura),
	'Update',
);

$this->menu=array(
	array('label'=>'List Aventura', 'url'=>array('index')),
	array('label'=>'Create Aventura', 'url'=>array('create')),
	array('label'=>'View Aventura', 'url'=>array('view', 'id'=>$model->id_aventura)),
	array('label'=>'Manage Aventura', 'url'=>array('admin')),
);
?>

<h1>Update Aventura <?php echo $model->id_aventura; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>