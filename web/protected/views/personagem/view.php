<?php
/* @var $this PersonagemController */
/* @var $model Personagem */

$this->breadcrumbs=array(
	'Personagems'=>array('index'),
	$model->id_personagem,
);

$this->menu=array(
	array('label'=>'List Personagem', 'url'=>array('index')),
	array('label'=>'Create Personagem', 'url'=>array('create')),
	array('label'=>'Update Personagem', 'url'=>array('update', 'id'=>$model->id_personagem)),
	array('label'=>'Delete Personagem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_personagem),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personagem', 'url'=>array('admin')),
);
?>

<h1>View Personagem #<?php echo $model->id_personagem; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_personagem',
		'nome_personagem',
		'descricao',
		'hp_total',
		'hp_atual',
		'nivel',
		'id_aventura',
		'npc',
		'id_raca',
		'id_classe',
	),
)); ?>
