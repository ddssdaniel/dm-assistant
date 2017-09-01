<?php
/* @var $this MonstroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Monstros',
);

$this->menu=array(
	array('label'=>'Create Monstro', 'url'=>array('create')),
	array('label'=>'Manage Monstro', 'url'=>array('admin')),
);
?>

<h1>Monstros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
