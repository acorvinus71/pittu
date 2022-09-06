<?php

/**
 * This is the model class for table "tehn".
 *
 * The followings are the available columns in table 'tehn':
 * @property integer $id_tehn
 * @property string $tj_zagalovok
 * @property string $ru_zagalovok
 * @property string $en_zagalovok
 * @property string $tj_text1
 * @property string $ru_text1
 * @property string $en_text1
 * @property string $img1
 * @property string $tj_text2
 * @property string $ru_text2
 * @property string $en_text2
 * @property string $img2
 * @property string $tj_text3
 * @property string $ru_text3
 * @property string $en_text3
 * @property string $img3
 * @property string $tj_text4
 * @property string $ru_text4
 * @property string $en_text4
 * @property string $img4
 * @property string $tj_text5
 * @property string $ru_text5
 * @property string $en_text5
 */
class Tehn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tehn the static model class
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
		return 'tehn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tj_zagalovok, ru_zagalovok, en_zagalovok, tj_text1, ru_text1, en_text1, img1, tj_text2, ru_text2, en_text2, img2, tj_text3, ru_text3, en_text3, img3, tj_text4, ru_text4, en_text4, img4, tj_text5, ru_text5, en_text5', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tehn, tj_zagalovok, ru_zagalovok, en_zagalovok, tj_text1, ru_text1, en_text1, img1, tj_text2, ru_text2, en_text2, img2, tj_text3, ru_text3, en_text3, img3, tj_text4, ru_text4, en_text4, img4, tj_text5, ru_text5, en_text5', 'safe', 'on'=>'search'),
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
			'id_tehn' => 'Id Tehn',
			'tj_zagalovok' => 'Tj Zagalovok',
			'ru_zagalovok' => 'Ru Zagalovok',
			'en_zagalovok' => 'En Zagalovok',
			'tj_text1' => 'Tj Text1',
			'ru_text1' => 'Ru Text1',
			'en_text1' => 'En Text1',
			'img1' => 'Img1',
			'tj_text2' => 'Tj Text2',
			'ru_text2' => 'Ru Text2',
			'en_text2' => 'En Text2',
			'img2' => 'Img2',
			'tj_text3' => 'Tj Text3',
			'ru_text3' => 'Ru Text3',
			'en_text3' => 'En Text3',
			'img3' => 'Img3',
			'tj_text4' => 'Tj Text4',
			'ru_text4' => 'Ru Text4',
			'en_text4' => 'En Text4',
			'img4' => 'Img4',
			'tj_text5' => 'Tj Text5',
			'ru_text5' => 'Ru Text5',
			'en_text5' => 'En Text5',
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

		$criteria->compare('id_tehn',$this->id_tehn);
		$criteria->compare('tj_zagalovok',$this->tj_zagalovok,true);
		$criteria->compare('ru_zagalovok',$this->ru_zagalovok,true);
		$criteria->compare('en_zagalovok',$this->en_zagalovok,true);
		$criteria->compare('tj_text1',$this->tj_text1,true);
		$criteria->compare('ru_text1',$this->ru_text1,true);
		$criteria->compare('en_text1',$this->en_text1,true);
		$criteria->compare('img1',$this->img1,true);
		$criteria->compare('tj_text2',$this->tj_text2,true);
		$criteria->compare('ru_text2',$this->ru_text2,true);
		$criteria->compare('en_text2',$this->en_text2,true);
		$criteria->compare('img2',$this->img2,true);
		$criteria->compare('tj_text3',$this->tj_text3,true);
		$criteria->compare('ru_text3',$this->ru_text3,true);
		$criteria->compare('en_text3',$this->en_text3,true);
		$criteria->compare('img3',$this->img3,true);
		$criteria->compare('tj_text4',$this->tj_text4,true);
		$criteria->compare('ru_text4',$this->ru_text4,true);
		$criteria->compare('en_text4',$this->en_text4,true);
		$criteria->compare('img4',$this->img4,true);
		$criteria->compare('tj_text5',$this->tj_text5,true);
		$criteria->compare('ru_text5',$this->ru_text5,true);
		$criteria->compare('en_text5',$this->en_text5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}