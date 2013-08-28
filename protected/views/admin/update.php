<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'会员'=>array('admin'),
	'修改',
);

$this->menu=Admin::$base_menus;
?>

<h1>修改会员信息 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>