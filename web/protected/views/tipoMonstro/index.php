<?php
/* @var $this TipoMonstroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Monstros',
);

$this->menu=array(
	array('label'=>'Create TipoMonstro', 'url'=>array('create')),
	array('label'=>'Manage TipoMonstro', 'url'=>array('admin')),
);
?>

<h1>Tipo Monstros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
