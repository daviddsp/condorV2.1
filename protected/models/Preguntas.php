<?php

/**
 * This is the model class for table "condor.preguntas".
 *
 * The followings are the available columns in table 'condor.preguntas':
 * @property integer $id_pregunta
 * @property string $p_pregunta
 * @property integer $id_evaluacion
 * @property integer $id_ponderacion
 *
 * The followings are the available model relations:
 * @property Evaluaciones $idEvaluacion
 * @property Ponderaciones $idPonderacion
 * @property Respuestas[] $respuestases
 */
class Preguntas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condor.preguntas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_evaluacion, id_ponderacion', 'required'),
			array('id_evaluacion, id_ponderacion', 'numerical', 'integerOnly'=>true),
			array('p_pregunta', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pregunta, p_pregunta, id_evaluacion, id_ponderacion', 'safe', 'on'=>'search'),
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
			'idEvaluacion' => array(self::BELONGS_TO, 'Evaluaciones', 'id_evaluacion'),
			'idPonderacion' => array(self::BELONGS_TO, 'Ponderaciones', 'id_ponderacion'),
			'respuestases' => array(self::HAS_MANY, 'Respuestas', 'id_pregunta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pregunta' => 'Id Pregunta',
			'p_pregunta' => 'P Pregunta',
			'id_evaluacion' => 'Id Evaluacion',
			'id_ponderacion' => 'Id Ponderacion',
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

		$criteria->compare('id_pregunta',$this->id_pregunta);
		$criteria->compare('p_pregunta',$this->p_pregunta,true);
		$criteria->compare('id_evaluacion',$this->id_evaluacion);
		$criteria->compare('id_ponderacion',$this->id_ponderacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Preguntas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
