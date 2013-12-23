<?php

/**
 * This is the model class for table "condor.evaluaciones".
 *
 * The followings are the available columns in table 'condor.evaluaciones':
 * @property integer $id_evaluacion
 * @property string $fech_evaluacion
 * @property integer $id_leccion
 * @property integer $result_evaluacion
 * @property integer $id_ponderacion
 *
 * The followings are the available model relations:
 * @property Lecciones $idLeccion
 * @property Ponderaciones $idPonderacion
 * @property Preguntas[] $preguntases
 */
class Evaluaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condor.evaluaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_leccion, id_ponderacion', 'required'),
			array('id_leccion, result_evaluacion, id_ponderacion', 'numerical', 'integerOnly'=>true),
			array('fech_evaluacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_evaluacion, fech_evaluacion, id_leccion, result_evaluacion, id_ponderacion', 'safe', 'on'=>'search'),
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
			'idLeccion' => array(self::BELONGS_TO, 'Lecciones', 'id_leccion'),
			'idPonderacion' => array(self::BELONGS_TO, 'Ponderaciones', 'id_ponderacion'),
			'preguntases' => array(self::HAS_MANY, 'Preguntas', 'id_evaluacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_evaluacion' => 'Id Evaluacion',
			'fech_evaluacion' => 'Fech Evaluacion',
			'id_leccion' => 'Id Leccion',
			'result_evaluacion' => 'Result Evaluacion',
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

		$criteria->compare('id_evaluacion',$this->id_evaluacion);
		$criteria->compare('fech_evaluacion',$this->fech_evaluacion,true);
		$criteria->compare('id_leccion',$this->id_leccion);
		$criteria->compare('result_evaluacion',$this->result_evaluacion);
		$criteria->compare('id_ponderacion',$this->id_ponderacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evaluaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
