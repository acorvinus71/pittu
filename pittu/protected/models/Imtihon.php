<?php

/**
 * This is the model class for table "imtihon".
 *
 * The followings are the available columns in table 'imtihon':
 * @property integer $id_imtihon
 * @property string $tj_zagalovok
 * @property string $ru_zagalovok
 * @property string $en_zagalovok
 * @property string $tj_text
 * @property string $ru_text
 * @property string $en_text
 * @property string $img
 * @property string $tj_inf
 * @property string $ru_inf
 * @property string $en_inf
 */
class Imtihon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Imtihon the static model class
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
		return 'imtihon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tj_zagalovok, ru_zagalovok, en_zagalovok, tj_text, ru_text, en_text, img, tj_inf, ru_inf, en_inf', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_imtihon, tj_zagalovok, ru_zagalovok, en_zagalovok, tj_text, ru_text, en_text, img, tj_inf, ru_inf, en_inf', 'safe', 'on'=>'search'),
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
			'id_imtihon' => 'Id Imtihon',
			'tj_zagalovok' => 'Tj Zagalovok',
			'ru_zagalovok' => 'Ru Zagalovok',
			'en_zagalovok' => 'En Zagalovok',
			'tj_text' => 'Tj Text',
			'ru_text' => 'Ru Text',
			'en_text' => 'En Text',
			'img' => 'Img',
			'tj_inf' => 'Tj Inf',
			'ru_inf' => 'Ru Inf',
			'en_inf' => 'En Inf',
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

		$criteria->compare('id_imtihon',$this->id_imtihon);
		$criteria->compare('tj_zagalovok',$this->tj_zagalovok,true);
		$criteria->compare('ru_zagalovok',$this->ru_zagalovok,true);
		$criteria->compare('en_zagalovok',$this->en_zagalovok,true);
		$criteria->compare('tj_text',$this->tj_text,true);
		$criteria->compare('ru_text',$this->ru_text,true);
		$criteria->compare('en_text',$this->en_text,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('tj_inf',$this->tj_inf,true);
		$criteria->compare('ru_inf',$this->ru_inf,true);
		$criteria->compare('en_inf',$this->en_inf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}