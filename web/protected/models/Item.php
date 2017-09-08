<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $id_item
 * @property string $nome_item
 * @property integer $id_tipo_item
 * @property string $conteudo
 * @property string $raridade
 *
 * The followings are the available model relations:
 * @property TipoItem $idTipoItem
 */
class Item extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_item, id_tipo_item', 'required'),
			array('id_tipo_item', 'numerical', 'integerOnly'=>true),
			array('nome_item', 'length', 'max'=>256),
			array('raridade', 'length', 'max'=>128),
			array('conteudo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_item, nome_item, id_tipo_item, conteudo, raridade', 'safe', 'on'=>'search'),
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
			'idTipoItem' => array(self::BELONGS_TO, 'TipoItem', 'id_tipo_item'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_item' => 'Id Item',
			'nome_item' => 'Nome Item',
			'id_tipo_item' => 'Id Tipo Item',
			'conteudo' => 'Conteudo',
			'raridade' => 'Raridade',
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

		$criteria->compare('id_item',$this->id_item);
		$criteria->compare('nome_item',$this->nome_item,true);
		$criteria->compare('id_tipo_item',$this->id_tipo_item);
		$criteria->compare('conteudo',$this->conteudo,true);
		$criteria->compare('raridade',$this->raridade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Item the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
