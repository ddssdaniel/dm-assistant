<?php
/* @var $this TipoItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Items',
);

$this->menu=array(
	array('label'=>'Create TipoItem', 'url'=>array('create')),
	array('label'=>'Manage TipoItem', 'url'=>array('admin')),
);
?>

<h1>Tipo Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
