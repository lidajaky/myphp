<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'会员'=>array('admin'),
	'管理',
);

$this->menu=Admin::$base_menus;

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#admin-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理员列表</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'admin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'login_name',
		//'password',
		'user_name',
		'email',
		'mobile',
		/*
		'role',
		
		'update_time:date',
		'',
		*/
		'insert_time:date',
		array("name"=>"status","value"=>'Admin::$status[$data->status]','filter'=>Admin::$status),
		
		array(
			'class'=>'CButtonColumn',
			'template' => '{update}{delete}',
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
