<?php
/* @var $this Category2Controller */
/* @var $model Category2 */

$this->breadcrumbs=array(
	'二级分类'=>array('admin'),
	'管理',
);

$this->menu=Admin::$base_menus;

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#category2-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>二级分类列表</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category2-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pid',
		'name',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
