<?php
/* @var $this Category1Controller */
/* @var $model Category1 */

$this->breadcrumbs=array(
	'一级分类'=>array('admin'),
	'管理',
);

$this->menu=Admin::$base_menus;

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#category1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>一级分类管理</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		array("name"=>"status","value"=>'Admin::$status[$data->status]','filter'=>Admin::$status),
		array(
			'class'=>'CButtonColumn',
			'template' => '{update}',
            /*'buttons' => array(
                'viewsubcat' => array(
                    'label' => '查看子类',
                    'visible' => '$data->visible == "yes"',
                    'url' => 'Yii::app()->controller->createUrl("index", array("CatRelat[parent_id]"=>$data->cat_id))',
                    'options' => array('class' => 'viewsubcat')
                ),
            ),*/
		),
	),
)); ?>
