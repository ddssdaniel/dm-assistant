<?php
/* @var $this MagiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Magias',
);

$this->menu=array(
	array('label'=>'Create Magia', 'url'=>array('create')),
	array('label'=>'Manage Magia', 'url'=>array('admin')),
);
?>

<h1>Magias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
