<?php
/* @var $this EncontroController */
/* @var $data Encontro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_encontro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_encontro), array('view', 'id'=>$data->id_encontro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dificuldade')); ?>:</b>
	<?php echo CHtml::encode($data->dificuldade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aventura')); ?>:</b>
	<?php echo CHtml::encode($data->id_aventura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ativo')); ?>:</b>
	<?php echo CHtml::encode($data->ativo); ?>
	<br />


</div>