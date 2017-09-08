<?php

/**
 * This is the model class for table "monstro_encontro".
 *
 * The followings are the available columns in table 'monstro_encontro':
 * @property integer $id_encontro
 * @property integer $seq
 * @property integer $id_mosntro
 * @property string $customizado
 * @property integer $hp
 * @property string $bonus
 * @property integer $iniciativa
 *
 * The followings are the available model relations:
 * @property Encontro $idEncontro
 * @property Monstro $idMosntro
 */
class MonstroEncontro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'monstro_encontro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_encontro, seq, id_mosntro, iniciativa', 'required'),
			array('id_encontro, seq, id_mosntro, hp, iniciativa', 'numerical', 'integerOnly'=>true),
			array('bonus', 'length', 'max'=>512),
			array('customizado', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_encontro, seq, id_mosntro, customizado, hp, bonus, iniciativa', 'safe', 'on'=>'search'),
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
			'idEncontro' => array(self::BELONGS_TO, 'Encontro', 'id_encontro'),
			'idMosntro' => array(self::BELONGS_TO, 'Monstro', 'id_mosntro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_encontro' => 'Id Encontro',
			'seq' => 'Seq',
			'id_mosntro' => 'Id Mosntro',
			'customizado' => 'Customizado',
			'hp' => 'Hp',
			'bonus' => 'Bonus',
			'iniciativa' => 'Iniciativa',
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
		$criteria->compare('seq',$this->seq);
		$criteria->compare('id_mosntro',$this->id_mosntro);
		$criteria->compare('customizado',$this->customizado,true);
		$criteria->compare('hp',$this->hp);
		$criteria->compare('bonus',$this->bonus,true);
		$criteria->compare('iniciativa',$this->iniciativa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MonstroEncontro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
