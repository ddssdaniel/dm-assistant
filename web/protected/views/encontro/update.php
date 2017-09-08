<?php
/* @var $this EncontroController */
/* @var $model Encontro */

$this->breadcrumbs=array(
	'Encontros'=>array('index'),
	$model->id_encontro=>array('view','id'=>$model->id_encontro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Encontro', 'url'=>array('index')),
	array('label'=>'Create Encontro', 'url'=>array('create')),
	array('label'=>'View Encontro', 'url'=>array('view', 'id'=>$model->id_encontro)),
	array('label'=>'Manage Encontro', 'url'=>array('admin')),
);
?>

<h1>Update Encontro <?php echo $model->id_encontro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>