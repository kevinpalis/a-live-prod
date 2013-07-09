<?php

/**
 * This is the model class for table "equipmentlist".
 *
 * The followings are the available columns in table 'equipmentlist':
 * @property string $id
 * @property string $equipmentName
 * @property string $equipmentType
 */
class Equipmentlist extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Equipmentlist the static model class
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
		return 'equipmentlist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('equipmentName', 'length', 'max'=>100),
			array('equipmentType', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, equipmentName, equipmentType', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'equipmentName' => 'Equipment Name',
			'equipmentType' => 'Equipment Type',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('equipmentName',$this->equipmentName,true);
		$criteria->compare('equipmentType',$this->equipmentType,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function getTypeName(){
		
		$typeString="";
		switch ($this->equipmentType) {
			case '0':
				$typeString = "Mobility";
				return $typeString;

			case '1':
				$typeString = "Apparatus";
				return $typeString;

					
			default:
					return $typeString;
		

		}

	}

	public static function getArrayEquipment(){
		$allEquipments = $this->findAll();

		


	}
}