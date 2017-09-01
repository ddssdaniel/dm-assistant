<?php
/* @var $this ItemController */
/* @var $data Item */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_item')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_item), array('view', 'id'=>$data->id_item)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_item')); ?>:</b>
	<?php echo CHtml::encode($data->nome_item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_item')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raridade')); ?>:</b>
	<?php echo CHtml::encode($data->raridade); ?>
	<br />


</div>