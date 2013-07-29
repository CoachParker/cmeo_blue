<?php

/**
 * This is the model class for table "Membership".
 *
 * The followings are the available columns in table 'Membership':
 * @property integer $ID
 * @property integer $EntityID
 * @property string $StartDate
 * @property string $EndDate
 * @property integer $TypeID
 * @property double $AmountPaid
 * @property string $EnteredBy
 * @property string $CreateDate
 * @property string $Comments
 * @property string $Other
 *
 * The followings are the available model relations:
 * @property Entity $entity
 * @property Membership $type
 * @property Membership[] $memberships
 */
class Membership extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Membership the static model class
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
		return 'Membership';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EntityID, StartDate, EndDate, TypeID, AmountPaid, EnteredBy, CreateDate', 'required'),
			array('EntityID, TypeID', 'numerical', 'integerOnly'=>true),
			array('AmountPaid', 'numerical'),
			array('EnteredBy', 'length', 'max'=>50),
			array('Comments, Other', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, EntityID, StartDate, EndDate, TypeID, AmountPaid, EnteredBy, CreateDate, Comments, Other', 'safe', 'on'=>'search'),
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
			'entity' => array(self::BELONGS_TO, 'Entity', 'EntityID'),
			'type' => array(self::BELONGS_TO, 'Membership', 'TypeID'),
			'memberships' => array(self::HAS_MANY, 'Membership', 'TypeID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'EntityID' => 'Entity',
			'StartDate' => 'Start Date',
			'EndDate' => 'End Date',
			'TypeID' => 'Type',
			'AmountPaid' => 'Amount Paid',
			'EnteredBy' => 'Entered By',
			'CreateDate' => 'Create Date',
			'Comments' => 'Comments',
			'Other' => 'Other',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('EntityID',$this->EntityID);
		$criteria->compare('StartDate',$this->StartDate,true);
		$criteria->compare('EndDate',$this->EndDate,true);
		$criteria->compare('TypeID',$this->TypeID);
		$criteria->compare('AmountPaid',$this->AmountPaid);
		$criteria->compare('EnteredBy',$this->EnteredBy,true);
		$criteria->compare('CreateDate',$this->CreateDate,true);
		$criteria->compare('Comments',$this->Comments,true);
		$criteria->compare('Other',$this->Other,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}