<?php

/**
 * This is the model class for table "Donation".
 *
 * The followings are the available columns in table 'Donation':
 * @property integer $ID
 * @property integer $EntityID
 * @property integer $PersonID
 * @property string $DonationDate
 * @property double $Amount
 * @property integer $ReasonID
 * @property string $IsThanked
 * @property string $Comments
 *
 * The followings are the available model relations:
 * @property Entity $entity
 * @property Person $person
 * @property DonationReason $reason
 */
class Donation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Donation the static model class
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
		return 'Donation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EntityID, DonationDate, Amount, ReasonID', 'required'),
			array('EntityID, PersonID, ReasonID', 'numerical', 'integerOnly'=>true),
			array('Amount', 'numerical'),
			array('IsThanked', 'length', 'max'=>32),
			array('Comments', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, EntityID, PersonID, DonationDate, Amount, ReasonID, IsThanked, Comments', 'safe', 'on'=>'search'),
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
			'person' => array(self::BELONGS_TO, 'Person', 'PersonID'),
			'reason' => array(self::BELONGS_TO, 'DonationReason', 'ReasonID'),
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
			'PersonID' => 'Person',
			'DonationDate' => 'Donation Date',
			'Amount' => 'Amount',
			'ReasonID' => 'Reason',
			'IsThanked' => 'Is Thanked',
			'Comments' => 'Comments',
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
		$criteria->compare('PersonID',$this->PersonID);
		$criteria->compare('DonationDate',$this->DonationDate,true);
		$criteria->compare('Amount',$this->Amount);
		$criteria->compare('ReasonID',$this->ReasonID);
		$criteria->compare('IsThanked',$this->IsThanked,true);
		$criteria->compare('Comments',$this->Comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}