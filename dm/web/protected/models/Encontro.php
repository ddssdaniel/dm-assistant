<?php

/**
 * This is the model class for table "encontro".
 *
 * The followings are the available columns in table 'encontro':
 * @property integer $id_encontro
 * @property string $descricao
 * @property integer $dificuldade
 * @property integer $id_aventura
 * @property string $ativo
 *
 * The followings are the available model relations:
 * @property Aventura $idAventura
 * @property MonstroEncontro[] $monstroEncontros
 * @property Personagem[] $personagems
 */
class Encontro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'encontro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao', 'required'),
			array('dificuldade, id_aventura', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>1024),
			array('ativo', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_encontro, descricao, dificuldade, id_aventura, ativo', 'safe', 'on'=>'search'),
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
			'monstroEncontros' => array(self::HAS_MANY, 'MonstroEncontro', 'id_encontro'),
			'personagems' => array(self::MANY_MANY, 'Personagem', 'personagem_encontro(id_encontro, id_personagem)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_encontro' => 'Id Encontro',
			'descricao' => 'Descricao',
			'dificuldade' => 'Dificuldade',
			'id_aventura' => 'Id Aventura',
			'ativo' => 'Ativo',
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

		$criteria->compare('id_encontro',$this->id_encontro);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('dificuldade',$this->dificuldade);
		$criteria->compare('id_aventura',$this->id_aventura);
		$criteria->compare('ativo',$this->ativo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Encontro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
