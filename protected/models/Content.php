<?php

/**
 * This is the model class for table "content".
 *
 * The followings are the available columns in table 'content':
 * @property string $id
 * @property string $uid
 * @property integer $type
 * @property string $category_3_id
 * @property string $province_id
 * @property string $city_id
 * @property string $title
 * @property string $cotent
 * @property string $pic_url
 * @property string $view_num
 * @property string $insert_time
 * @property string $time
 * @property string $place
 * @property integer $group_id
 * @property string $price
 * @property string $shop_url
 * @property integer $uptimes
 * @property string $tel
 * @property string $traffic
 */
class Content extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, type, category_3_id, province_id, city_id, title, cotent, pic_url, view_num, insert_time, time, place, group_id, price, shop_url, uptimes, tel, traffic', 'required'),
			array('type, group_id, uptimes', 'numerical', 'integerOnly'=>true),
			array('uid, category_3_id, province_id, city_id, view_num', 'length', 'max'=>11),
			array('title, pic_url, place, shop_url, tel, traffic', 'length', 'max'=>255),
			array('price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, uid, type, category_3_id, province_id, city_id, title, cotent, pic_url, view_num, insert_time, time, place, group_id, price, shop_url, uptimes, tel, traffic', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'type' => 'Type',
			'category_3_id' => 'Category 3',
			'province_id' => 'Province',
			'city_id' => 'City',
			'title' => 'Title',
			'cotent' => 'Cotent',
			'pic_url' => 'Pic Url',
			'view_num' => 'View Num',
			'insert_time' => 'Insert Time',
			'time' => 'Time',
			'place' => 'Place',
			'group_id' => 'Group',
			'price' => 'Price',
			'shop_url' => 'Shop Url',
			'uptimes' => 'Uptimes',
			'tel' => 'Tel',
			'traffic' => 'Traffic',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('category_3_id',$this->category_3_id,true);
		$criteria->compare('province_id',$this->province_id,true);
		$criteria->compare('city_id',$this->city_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('cotent',$this->cotent,true);
		$criteria->compare('pic_url',$this->pic_url,true);
		$criteria->compare('view_num',$this->view_num,true);
		$criteria->compare('insert_time',$this->insert_time,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('shop_url',$this->shop_url,true);
		$criteria->compare('uptimes',$this->uptimes);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('traffic',$this->traffic,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Content the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
