<?php
/* @var $this RacaController */
/* @var $model Raca */

$this->breadcrumbs=array(
	'Racas'=>array('index'),
	$model->id_raca=>array('view','id'=>$model->id_raca),
	'Update',
);

$this->menu=array(
	array('label'=>'List Raca', 'url'=>array('index')),
	array('label'=>'Create Raca', 'url'=>array('create')),
	array('label'=>'View Raca', 'url'=>array('view', 'id'=>$model->id_raca)),
	array('label'=>'Manage Raca', 'url'=>array('admin')),
);
?>

<h1>Update Raca <?php echo $model->id_raca; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>