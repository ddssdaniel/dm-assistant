<?php

/**
 * This is the model class for table "aventura".
 *
 * The followings are the available columns in table 'aventura':
 * @property integer $id_aventura
 * @property string $nome_aventura
 * @property string $inicio
 * @property string $fim
 * @property string $ativa
 *
 * The followings are the available model relations:
 * @property Encontro[] $encontros
 * @property Personagem[] $personagems
 */
class Aventura extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aventura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_aventura, inicio', 'required'),
			array('nome_aventura', 'length', 'max'=>128),
			array('ativa', 'length', 'max'=>1),
			array('fim', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_aventura, nome_aventura, inicio, fim, ativa', 'safe', 'on'=>'search'),
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
			'encontros' => array(self::HAS_MANY, 'Encontro', 'id_aventura'),
			'personagems' => array(self::HAS_MANY, 'Personagem', 'id_aventura'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_aventura' => 'Id Aventura',
			'nome_aventura' => 'Nome Aventura',
			'inicio' => 'Inicio',
			'fim' => 'Fim',
			'ativa' => 'Ativa',
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

		$criteria->compare('id_aventura',$this->id_aventura);
		$criteria->compare('nome_aventura',$this->nome_aventura,true);
		$criteria->compare('inicio',$this->inicio,true);
		$criteria->compare('fim',$this->fim,true);
		$criteria->compare('ativa',$this->ativa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aventura the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
