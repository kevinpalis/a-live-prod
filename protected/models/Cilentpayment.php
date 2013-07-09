<?php

/**
 * This is the model class for table "cilentpayment".
 *
 * The followings are the available columns in table 'cilentpayment':
 * @property string $id
 * @property string $clientId
 * @property string $caregiverId
 * @property string $amountDebit
 * @property string $amountCredit
 * @property string $invoiceDue
 * @property string $invoiceCreationDate
 * @property string $invoiceType
 * @property string $invoiceNotes
 *
 * The followings are the available model relations:
 * @property Client $client
 * @property Caregiver $caregiver
 */
class Cilentpayment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cilentpayment the static model class
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
		return 'cilentpayment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientId, caregiverId', 'required'),
			array('clientId, caregiverId, invoiceType, invoiceNotes', 'length', 'max'=>10),
			array('amountDebit, amountCredit', 'length', 'max'=>15),
			array('invoiceDue, invoiceCreationDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, clientId, caregiverId, amountDebit, amountCredit, invoiceDue, invoiceCreationDate, invoiceType, invoiceNotes', 'safe', 'on'=>'search'),
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
			'client' => array(self::BELONGS_TO, 'Client', 'clientId'),
			'caregiver' => array(self::BELONGS_TO, 'Caregiver', 'caregiverId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'clientId' => 'Client',
			'caregiverId' => 'Caregiver',
			'amountDebit' => 'Amount Debit',
			'amountCredit' => 'Amount Credit',
			'invoiceDue' => 'Invoice Due',
			'invoiceCreationDate' => 'Invoice Creation Date',
			'invoiceType' => 'Invoice Type',
			'invoiceNotes' => 'Invoice Notes',
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
		$criteria->compare('clientId',$this->clientId,true);
		$criteria->compare('caregiverId',$this->caregiverId,true);
		$criteria->compare('amountDebit',$this->amountDebit,true);
		$criteria->compare('amountCredit',$this->amountCredit,true);
		$criteria->compare('invoiceDue',$this->invoiceDue,true);
		$criteria->compare('invoiceCreationDate',$this->invoiceCreationDate,true);
		$criteria->compare('invoiceType',$this->invoiceType,true);
		$criteria->compare('invoiceNotes',$this->invoiceNotes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}