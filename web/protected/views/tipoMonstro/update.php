<?php
/* @var $this TipoMonstroController */
/* @var $model TipoMonstro */

$this->breadcrumbs=array(
	'Tipo Monstros'=>array('index'),
	$model->id_tipo_monstro=>array('view','id'=>$model->id_tipo_monstro),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoMonstro', 'url'=>array('index')),
	array('label'=>'Create TipoMonstro', 'url'=>array('create')),
	array('label'=>'View TipoMonstro', 'url'=>array('view', 'id'=>$model->id_tipo_monstro)),
	array('label'=>'Manage TipoMonstro', 'url'=>array('admin')),
);
?>

<h1>Update TipoMonstro <?php echo $model->id_tipo_monstro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>