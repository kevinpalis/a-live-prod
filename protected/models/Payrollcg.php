<?php

/**
 * This is the model class for table "payrollcg".
 *
 * The followings are the available columns in table 'payrollcg':
 * @property string $id
 * @property string $caregiverId
 * @property string $clientId
 * @property string $dateStart
 * @property string $dateEnd
 * @property double $amountPaid
 * @property string $payType
 * @property string $dateCreated
 *
 * The followings are the available model relations:
 * @property Caregiver $caregiver
 * @property Client $client
 */
class Payrollcg extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Payrollcg the static model class
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
		return 'payrollcg';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('caregiverId, clientId', 'required'),
			array('amountPaid', 'numerical'),
			array('caregiverId, clientId', 'length', 'max'=>10),
			array('payType', 'length', 'max'=>1),
			array('dateStart, dateEnd, dateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, caregiverId, clientId, dateStart, dateEnd, amountPaid, payType, dateCreated', 'safe', 'on'=>'search'),
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
			'caregiver' => array(self::BELONGS_TO, 'Caregiver', 'caregiverId'),
			'client' => array(self::BELONGS_TO, 'Client', 'clientId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'caregiverId' => 'Caregiver',
			'clientId' => 'Client',
			'dateStart' => 'Date Start',
			'dateEnd' => 'Date End',
			'amountPaid' => 'Amount Paid',
			'payType' => 'Pay Type',
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
		$criteria->compare('caregiverId',$this->caregiverId,true);
		$criteria->compare('clientId',$this->clientId,true);
		$criteria->compare('dateStart',$this->dateStart,true);
		$criteria->compare('dateEnd',$this->dateEnd,true);
		$criteria->compare('amountPaid',$this->amountPaid);
		$criteria->compare('payType',$this->payType,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}