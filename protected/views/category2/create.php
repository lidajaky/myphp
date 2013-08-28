<?php
/* @var $this Category2Controller */
/* @var $model Category2 */

$this->breadcrumbs=array(
	'二级分类'=>array('admin'),
	'创建',
);

$this->menu=Admin::$base_menus;

<h1>创建二级分类</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>