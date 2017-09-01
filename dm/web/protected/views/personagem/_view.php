<?php
/* @var $this PersonagemController */
/* @var $data Personagem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_personagem')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_personagem), array('view', 'id'=>$data->id_personagem)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->nome_personagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hp_total')); ?>:</b>
	<?php echo CHtml::encode($data->hp_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hp_atual')); ?>:</b>
	<?php echo CHtml::encode($data->hp_atual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel')); ?>:</b>
	<?php echo CHtml::encode($data->nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aventura')); ?>:</b>
	<?php echo CHtml::encode($data->id_aventura); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('npc')); ?>:</b>
	<?php echo CHtml::encode($data->npc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_raca')); ?>:</b>
	<?php echo CHtml::encode($data->id_raca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_classe')); ?>:</b>
	<?php echo CHtml::encode($data->id_classe); ?>
	<br />

	*/ ?>

</div>