<?php
/* @var $this AdListController */
/* @var $model AdList */

$this->breadcrumbs=array(
	'Ad Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AdList', 'url'=>array('index')),
	array('label'=>'Manage AdList', 'url'=>array('admin')),
);
?>

<h1>Create AdList</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>