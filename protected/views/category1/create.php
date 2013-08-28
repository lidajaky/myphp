<?php
/* @var $this Category1Controller */
/* @var $model Category1 */

$this->breadcrumbs=array(
	'一级分类'=>array('admin'),
	'创建',
);

$this->menu=Admin::$base_menus;
?>

<h1>创建一级分类</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>