<?php
/* @var $this TipoItemController */
/* @var $data TipoItem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_item')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_item), array('view', 'id'=>$data->id_tipo_item)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_tipo_item')); ?>:</b>
	<?php echo CHtml::encode($data->nome_tipo_item); ?>
	<br />


</div>