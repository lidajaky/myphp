<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'会员'=>array('admin'),
	'创建',
);

$this->menu=Admin::$base_menus;
?>

<h1>创建会员</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>