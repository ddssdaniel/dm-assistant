<?php

/**
 * This is the model class for table "magia".
 *
 * The followings are the available columns in table 'magia':
 * @property integer $id_magia
 * @property string $nome_magia
 * @property integer $ciclo
 * @property integer $id_escola
 * @property string $conteudo
 *
 * The followings are the available model relations:
 * @property Escola $idEscola
 * @property Classe[] $classes
 */
class Magia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'magia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_magia, id_escola', 'required'),
			array('ciclo, id_escola', 'numerical', 'integerOnly'=>true),
			array('nome_magia', 'length', 'max'=>256),
			array('conteudo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_magia, nome_magia, ciclo, id_escola, conteudo', 'safe', 'on'=>'search'),
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
			'idEscola' => array(self::BELONGS_TO, 'Escola', 'id_escola'),
			'classes' => array(self::MANY_MANY, 'Classe', 'magia_classe(id_magia, id_classe)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_magia' => 'Id Magia',
			'nome_magia' => 'Nome Magia',
			'ciclo' => 'Ciclo',
			'id_escola' => 'Id Escola',
			'conteudo' => 'Conteudo',
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

		$criteria->compare('id_magia',$this->id_magia);
		$criteria->compare('nome_magia',$this->nome_magia,true);
		$criteria->compare('ciclo',$this->ciclo);
		$criteria->compare('id_escola',$this->id_escola);
		$criteria->compare('conteudo',$this->conteudo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Magia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
