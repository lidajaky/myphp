<?php
/* @var $this Category1Controller */
/* @var $model Category1 */

$this->breadcrumbs=array(
	'一级分类'=>array('admin'),
	'修改',
);

$this->menu=Admin::$base_menus;
?>

<h1>修改以及分类 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>