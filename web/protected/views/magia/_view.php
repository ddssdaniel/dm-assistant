<?php
/* @var $this MagiaController */
/* @var $data Magia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_magia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_magia), array('view', 'id'=>$data->id_magia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_magia')); ?>:</b>
	<?php echo CHtml::encode($data->nome_magia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciclo')); ?>:</b>
	<?php echo CHtml::encode($data->ciclo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_escola')); ?>:</b>
	<?php echo CHtml::encode($data->id_escola); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />


</div>