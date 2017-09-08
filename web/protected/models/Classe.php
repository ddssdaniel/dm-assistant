<?php

/**
 * This is the model class for table "classe".
 *
 * The followings are the available columns in table 'classe':
 * @property integer $id_classe
 * @property string $nome_classe
 * @property string $conteudo
 *
 * The followings are the available model relations:
 * @property Magia[] $magias
 * @property Personagem[] $personagems
 */
class Classe extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'classe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_classe', 'required'),
			array('nome_classe', 'length', 'max'=>128),
			array('conteudo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_classe, nome_classe, conteudo', 'safe', 'on'=>'search'),
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
			'magias' => array(self::MANY_MANY, 'Magia', 'magia_classe(id_classe, id_magia)'),
			'personagems' => array(self::HAS_MANY, 'Personagem', 'id_classe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_classe' => 'Id Classe',
			'nome_classe' => 'Nome Classe',
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

		$criteria->compare('id_classe',$this->id_classe);
		$criteria->compare('nome_classe',$this->nome_classe,true);
		$criteria->compare('conteudo',$this->conteudo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Classe the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
