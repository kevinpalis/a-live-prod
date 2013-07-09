<?php

/**
 * This is the model class for table "materialassignment".
 *
 * The followings are the available columns in table 'materialassignment':
 * @property string $id
 * @property string $materialmasterId
 * @property string $employeeId
 * @property string $assignedBy
 * @property string $quantityAssigned
 * @property string $dateCreated
 *
 * The followings are the available model relations:
 * @property Materialmaster $materialmaster
 * @property Employee $employee
 */
class Materialassignment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Materialassignment the static model class
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
		return 'materialassignment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('materialmasterId, employeeId', 'required'),
			array('materialmasterId, employeeId, quantityAssigned', 'length', 'max'=>10),
			array('assignedBy', 'length', 'max'=>50),
			array('dateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, materialmasterId, employeeId, assignedBy, quantityAssigned, dateCreated', 'safe', 'on'=>'search'),
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
			'materialmaster' => array(self::BELONGS_TO, 'Materialmaster', 'materialmasterId'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employeeId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'materialmasterId' => 'Materialmaster',
			'employeeId' => 'Employee',
			'assignedBy' => 'Assigned By',
			'quantityAssigned' => 'Quantity Assigned',
			'dateCreated' => 'Date Created',
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
		$criteria->compare('materialmasterId',$this->materialmasterId,true);
		$criteria->compare('employeeId',$this->employeeId,true);
		$criteria->compare('assignedBy',$this->assignedBy,true);
		$criteria->compare('quantityAssigned',$this->quantityAssigned,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}