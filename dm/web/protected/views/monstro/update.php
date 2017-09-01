<?php
/* @var $this MonstroController */
/* @var $model Monstro */

$this->breadcrumbs=array(
	'Monstros'=>array('index'),
	$model->id_monstro=>array('view','id'=>$model->id_monstro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Monstro', 'url'=>array('index')),
	array('label'=>'Create Monstro', 'url'=>array('create')),
	array('label'=>'View Monstro', 'url'=>array('view', 'id'=>$model->id_monstro)),
	array('label'=>'Manage Monstro', 'url'=>array('admin')),
);
?>

<h1>Update Monstro <?php echo $model->id_monstro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>