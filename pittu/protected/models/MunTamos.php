<?php

/**
 * This is the model class for table "mun_tamos".
 *
 * The followings are the available columns in table 'mun_tamos':
 * @property integer $id_tam
 * @property string $nom
 * @property string $idora
 * @property string $email
 * @property string $tel
 * @property string $dop
 */
class MunTamos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MunTamos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mun_tamos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom, email', 'length', 'max'=>200),
			array('idora', 'length', 'max'=>500),
			array('tel', 'length', 'max'=>50),
			array('dop', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tam, nom, idora, email, tel, dop', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tam' => 'Id Tam',
			'nom' => 'Nom',
			'idora' => 'Idora',
			'email' => 'Email',
			'tel' => 'Tel',
			'dop' => 'Dop',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_tam',$this->id_tam);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('idora',$this->idora,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('dop',$this->dop,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}