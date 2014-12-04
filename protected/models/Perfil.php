<?php

/**
 * This is the model class for table "perfil".
 *
 * The followings are the available columns in table 'perfil':
 * @property integer $IdPerfil
 * @property integer $IdRol
 * @property string $Usuario
 * @property string $Clave
 * @property string $Estado
 * @property string $ultimoIngreso
 * @property integer $enSesion
 */
class Perfil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdRol, Usuario, Clave, Estado, ultimoIngreso, enSesion', 'required'),
			array('IdRol, enSesion', 'numerical', 'integerOnly'=>true),
			array('Usuario, Clave', 'length', 'max'=>20),
			array('Estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IdPerfil, IdRol, Usuario, Clave, Estado, ultimoIngreso, enSesion', 'safe', 'on'=>'search'),
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
			'IdPerfil' => 'Id Perfil',
			'IdRol' => 'Id Rol',
			'Usuario' => 'Usuario',
			'Clave' => 'Clave',
			'Estado' => 'Estado',
			'ultimoIngreso' => 'Ultimo Ingreso',
			'enSesion' => 'En Sesion',
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

		$criteria->compare('IdPerfil',$this->IdPerfil);
		$criteria->compare('IdRol',$this->IdRol);
		$criteria->compare('Usuario',$this->Usuario,true);
		$criteria->compare('Clave',$this->Clave,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('ultimoIngreso',$this->ultimoIngreso,true);
		$criteria->compare('enSesion',$this->enSesion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perfil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
