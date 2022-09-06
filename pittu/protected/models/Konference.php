<?php

/**
 * This is the model class for table "konference".
 *
 * The followings are the available columns in table 'konference':
 * @property integer $id_konf
 * @property string $tj_tema
 * @property string $ru_tema
 * @property string $en_tema
 * @property string $tj_adres
 * @property string $ru_adres
 * @property string $en_adres
 */
class Konference extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Konference the static model class
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
		return 'konference';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tj_tema, ru_tema, en_tema, tj_adres, ru_adres, en_adres', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_konf, tj_tema, ru_tema, en_tema, tj_adres, ru_adres, en_adres', 'safe', 'on'=>'search'),
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
			'id_konf' => 'Id Konf',
			'tj_tema' => 'Tj Tema',
			'ru_tema' => 'Ru Tema',
			'en_tema' => 'En Tema',
			'tj_adres' => 'Tj Adres',
			'ru_adres' => 'Ru Adres',
			'en_adres' => 'En Adres',
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

		$criteria->compare('id_konf',$this->id_konf);
		$criteria->compare('tj_tema',$this->tj_tema,true);
		$criteria->compare('ru_tema',$this->ru_tema,true);
		$criteria->compare('en_tema',$this->en_tema,true);
		$criteria->compare('tj_adres',$this->tj_adres,true);
		$criteria->compare('ru_adres',$this->ru_adres,true);
		$criteria->compare('en_adres',$this->en_adres,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}