<?php
/* @var $this EncontroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encontros',
);

$this->menu=array(
	array('label'=>'Create Encontro', 'url'=>array('create')),
	array('label'=>'Manage Encontro', 'url'=>array('admin')),
);
?>

<h1>Encontros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
