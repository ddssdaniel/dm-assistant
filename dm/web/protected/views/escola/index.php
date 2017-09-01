<?php
/* @var $this EscolaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Escolas',
);

$this->menu=array(
	array('label'=>'Create Escola', 'url'=>array('create')),
	array('label'=>'Manage Escola', 'url'=>array('admin')),
);
?>

<h1>Escolas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
