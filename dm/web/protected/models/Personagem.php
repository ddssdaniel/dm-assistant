<?php

/**
 * This is the model class for table "personagem".
 *
 * The followings are the available columns in table 'personagem':
 * @property integer $id_personagem
 * @property string $nome_personagem
 * @property string $descricao
 * @property integer $hp_total
 * @property integer $hp_atual
 * @property integer $nivel
 * @property integer $id_aventura
 * @property string $npc
 * @property integer $id_raca
 * @property integer $id_classe
 *
 * The followings are the available model relations:
 * @property Aventura $idAventura
 * @property Classe $idClasse
 * @property Raca $idRaca
 * @property Encontro[] $encontros
 */
class Personagem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personagem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_personagem, id_raca, id_classe', 'required'),
			array('hp_total, hp_atual, nivel, id_aventura, id_raca, id_classe', 'numerical', 'integerOnly'=>true),
			array('nome_personagem', 'length', 'max'=>256),
			array('npc', 'length', 'max'=>1),
			array('descricao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_personagem, nome_personagem, descricao, hp_total, hp_atual, nivel, id_aventura, npc, id_raca, id_classe', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idAventura' => array(self::BELONGS_TO, 'Aventura', 'id_aventura'),
			'idClasse' => array(self::BELONGS_TO, 'Classe', 'id_classe'),
			'idRaca' => array(self::BELONGS_TO, 'Raca', 'id_raca'),
			'encontros' => array(self::MANY_MANY, 'Encontro', 'personagem_encontro(id_personagem, id_encontro)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_personagem' => 'Id Personagem',
			'nome_personagem' => 'Nome Personagem',
			'descricao' => 'Descricao',
			'hp_total' => 'Hp Total',
			'hp_atual' => 'Hp Atual',
			'nivel' => 'Nivel',
			'id_aventura' => 'Id Aventura',
			'npc' => 'Npc',
			'id_raca' => 'Id Raca',
			'id_classe' => 'Id Classe',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_personagem',$this->id_personagem);
		$criteria->compare('nome_personagem',$this->nome_personagem,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('hp_total',$this->hp_total);
		$criteria->compare('hp_atual',$this->hp_atual);
		$criteria->compare('nivel',$this->nivel);
		$criteria->compare('id_aventura',$this->id_aventura);
		$criteria->compare('npc',$this->npc,true);
		$criteria->compare('id_raca',$this->id_raca);
		$criteria->compare('id_classe',$this->id_classe);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personagem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
