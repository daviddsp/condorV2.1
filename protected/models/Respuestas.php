<?php

/**
 * This is the model class for table "condor.respuestas".
 *
 * The followings are the available columns in table 'condor.respuestas':
 * @property integer $id_respuesta
 * @property string $resp_respuesta
 * @property boolean $tp_respuesta
 * @property integer $id_pregunta
 *
 * The followings are the available model relations:
 * @property Preguntas $idPregunta
 */
class Respuestas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condor.respuestas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tp_respuesta, id_pregunta', 'required'),
			array('id_pregunta', 'numerical', 'integerOnly'=>true),
			array('resp_respuesta', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_respuesta, resp_respuesta, tp_respuesta, id_pregunta', 'safe', 'on'=>'search'),
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
			'idPregunta' => array(self::BELONGS_TO, 'Preguntas', 'id_pregunta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_respuesta' => 'Id Respuesta',
			'resp_respuesta' => 'Resp Respuesta',
			'tp_respuesta' => 'Tp Respuesta',
			'id_pregunta' => 'Id Pregunta',
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

		$criteria->compare('id_respuesta',$this->id_respuesta);
		$criteria->compare('resp_respuesta',$this->resp_respuesta,true);
		$criteria->compare('tp_respuesta',$this->tp_respuesta);
		$criteria->compare('id_pregunta',$this->id_pregunta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Respuestas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
