<?php

/**
 * This is the model class for table "monstro".
 *
 * The followings are the available columns in table 'monstro':
 * @property integer $id_monstro
 * @property string $nome_monstro
 * @property integer $id_tipo_monstro
 * @property string $conteudo
 * @property string $customizado
 * @property string $dificuldade
 *
 * The followings are the available model relations:
 * @property TipoMonstro $idTipoMonstro
 * @property MonstroEncontro[] $monstroEncontros
 */
class Monstro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'monstro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_monstro, id_tipo_monstro, dificuldade', 'required'),
			array('id_tipo_monstro', 'numerical', 'integerOnly'=>true),
			array('nome_monstro', 'length', 'max'=>128),
			array('dificuldade', 'length', 'max'=>10),
			array('conteudo, customizado', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_monstro, nome_monstro, id_tipo_monstro, conteudo, customizado, dificuldade', 'safe', 'on'=>'search'),
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
			'idTipoMonstro' => array(self::BELONGS_TO, 'TipoMonstro', 'id_tipo_monstro'),
			'monstroEncontros' => array(self::HAS_MANY, 'MonstroEncontro', 'id_mosntro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_monstro' => 'Id Monstro',
			'nome_monstro' => 'Nome Monstro',
			'id_tipo_monstro' => 'Id Tipo Monstro',
			'conteudo' => 'Conteudo',
			'customizado' => 'Customizado',
			'dificuldade' => 'Dificuldade',
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

		$criteria->compare('id_monstro',$this->id_monstro);
		$criteria->compare('nome_monstro',$this->nome_monstro,true);
		$criteria->compare('id_tipo_monstro',$this->id_tipo_monstro);
		$criteria->compare('conteudo',$this->conteudo,true);
		$criteria->compare('customizado',$this->customizado,true);
		$criteria->compare('dificuldade',$this->dificuldade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Monstro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
