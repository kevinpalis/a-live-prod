<?php

/**
 * This is the model class for table "materialmaster".
 *
 * The followings are the available columns in table 'materialmaster':
 * @property string $id
 * @property string $productName
 * @property string $productDesc
 * @property string $quantityTotal
 * @property double $unitPrice
 * @property string $unitOfMeasure
 * @property string $createdBy
 * @property string $dateCreated
 * @property string $countPerUOM
 * @property string $parentID
 * @property string $materialType
 * @property string $bestBefore
 *
 * The followings are the available model relations:
 * @property Materialassignment[] $materialassignments
 */
class Materialmaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Materialmaster the static model class
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
		return 'materialmaster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('unitPrice', 'numerical'),
			array('productName, productDesc, createdBy', 'length', 'max'=>50),
			array('quantityTotal, countPerUOM, parentID', 'length', 'max'=>10),
			array('unitOfMeasure', 'length', 'max'=>3),
			array('materialType', 'length', 'max'=>1),
			array('dateCreated, bestBefore', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, productName, productDesc, quantityTotal, unitPrice, unitOfMeasure, createdBy, dateCreated, countPerUOM, parentID, materialType, bestBefore', 'safe', 'on'=>'search'),
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
			'materialassignments' => array(self::HAS_MANY, 'Materialassignment', 'materialmasterId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'productName' => 'Product Name',
			'productDesc' => 'Product Desc',
			'quantityTotal' => 'Quantity Total',
			'unitPrice' => 'Unit Price',
			'unitOfMeasure' => 'Unit Of Measure',
			'createdBy' => 'Created By',
			'dateCreated' => 'Date Created',
			'countPerUOM' => 'Count Per Uom',
			'parentID' => 'Parent',
			'materialType' => 'Material Type',
			'bestBefore' => 'Best Before',
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
		$criteria->compare('productName',$this->productName,true);
		$criteria->compare('productDesc',$this->productDesc,true);
		$criteria->compare('quantityTotal',$this->quantityTotal,true);
		$criteria->compare('unitPrice',$this->unitPrice);
		$criteria->compare('unitOfMeasure',$this->unitOfMeasure,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('countPerUOM',$this->countPerUOM,true);
		$criteria->compare('parentID',$this->parentID,true);
		$criteria->compare('materialType',$this->materialType,true);
		$criteria->compare('bestBefore',$this->bestBefore,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}