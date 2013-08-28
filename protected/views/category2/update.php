<?php
/* @var $this Category2Controller */
/* @var $model Category2 */

$this->breadcrumbs=array(
	'二级分类'=>array('admin'),
	'修改',
);

$this->menu=Admin::$base_menus;
?>

<h1>修改二级分类 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>