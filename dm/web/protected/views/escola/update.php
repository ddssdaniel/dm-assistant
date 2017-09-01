<?php
/* @var $this EscolaController */
/* @var $model Escola */

$this->breadcrumbs=array(
	'Escolas'=>array('index'),
	$model->id_escola=>array('view','id'=>$model->id_escola),
	'Update',
);

$this->menu=array(
	array('label'=>'List Escola', 'url'=>array('index')),
	array('label'=>'Create Escola', 'url'=>array('create')),
	array('label'=>'View Escola', 'url'=>array('view', 'id'=>$model->id_escola)),
	array('label'=>'Manage Escola', 'url'=>array('admin')),
);
?>

<h1>Update Escola <?php echo $model->id_escola; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>