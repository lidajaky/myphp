<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property string $id
 * @property string $login_name
 * @property string $password
 * @property string $user_name
 * @property string $email
 * @property string $mobile
 * @property integer $role
 * @property string $insert_time
 * @property string $update_time
 * @property integer $status
 */
class Admin extends CActiveRecord
{
	public static $status=array(0=>"关闭",1=>"开启");
	public static $base_menus=array(
		array('label'=>'管理员列表', 'url'=>array('admin/admin')),	
		array('label'=>'一级分类', 'url'=>array('category1/admin')),
		array('label'=>'二级分类', 'url'=>array('category2/admin')),
		array('label'=>'三级分类', 'url'=>array('category3/admin')),
		array('label'=>'创建管理员', 'url'=>array('admin/create')),
		array('label'=>'创建一级分类', 'url'=>array('category1/create')),
		array('label'=>'创建二级分类', 'url'=>array('category2/create')),
		array('label'=>'创建三级分类', 'url'=>array('category3/create')),
	);
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login_name, password, user_name, email, mobile,status', 'required'),
			array('role, status', 'numerical', 'integerOnly'=>true),
			array('login_name, password, user_name, email, mobile', 'length', 'max'=>255),
			array('insert_time, update_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, login_name, password, user_name, email, mobile, role, insert_time, update_time, status', 'safe', 'on'=>'search'),
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
			'login_name' => '登录名',
			'password' => '密码',
			'user_name' => '真是姓名',
			'email' => '电子邮件',
			'mobile' => '手机号',
			'role' => 'Role',
			'insert_time' => 'Insert Time',
			'update_time' => 'Update Time',
			'status' => '状态',
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
		$criteria->compare('login_name',$this->login_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('role',$this->role);
		$criteria->compare('insert_time',$this->insert_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
