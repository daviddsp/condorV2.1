<?php

/**
 * This is the model class for table "condor.capitulos".
 *
 * The followings are the available columns in table 'condor.capitulos':
 * @property integer $id_capitulo
 * @property string $nb_capitulo
 * @property string $desc_capitulo
 *
 * The followings are the available model relations:
 * @property Lecciones[] $lecciones
 */
class Capitulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condor.capitulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_capitulo, desc_capitulo', 'required'),
			array('nb_capitulo', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_capitulo, nb_capitulo, desc_capitulo', 'safe', 'on'=>'search'),
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
			'lecciones' => array(self::HAS_MANY, 'Lecciones', 'id_capitulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_capitulo' => 'Id Capitulo',
			'nb_capitulo' => 'Nb Capitulo',
			'desc_capitulo' => 'Desc Capitulo',
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

		$criteria->compare('id_capitulo',$this->id_capitulo);
		$criteria->compare('nb_capitulo',$this->nb_capitulo,true);
		$criteria->compare('desc_capitulo',$this->desc_capitulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Capitulos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
