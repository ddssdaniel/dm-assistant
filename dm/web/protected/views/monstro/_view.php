<?php
/* @var $this MonstroController */
/* @var $data Monstro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_monstro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_monstro), array('view', 'id'=>$data->id_monstro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_monstro')); ?>:</b>
	<?php echo CHtml::encode($data->nome_monstro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_monstro')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_monstro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customizado')); ?>:</b>
	<?php echo CHtml::encode($data->customizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dificuldade')); ?>:</b>
	<?php echo CHtml::encode($data->dificuldade); ?>
	<br />


</div>