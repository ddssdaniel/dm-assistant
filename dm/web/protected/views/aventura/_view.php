<?php
/* @var $this AventuraController */
/* @var $data Aventura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aventura')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_aventura), array('view', 'id'=>$data->id_aventura)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_aventura')); ?>:</b>
	<?php echo CHtml::encode($data->nome_aventura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio')); ?>:</b>
	<?php echo CHtml::encode($data->inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fim')); ?>:</b>
	<?php echo CHtml::encode($data->fim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ativa')); ?>:</b>
	<?php echo CHtml::encode($data->ativa); ?>
	<br />


</div>