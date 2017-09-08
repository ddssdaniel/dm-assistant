<?php
/* @var $this AventuraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aventuras',
);

$this->menu=array(
	array('label'=>'Create Aventura', 'url'=>array('create')),
	array('label'=>'Manage Aventura', 'url'=>array('admin')),
);
?>

<h1>Aventuras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
