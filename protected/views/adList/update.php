<?php
/* @var $this AdListController */
/* @var $model AdList */

$this->breadcrumbs=array(
	'Ad Lists'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AdList', 'url'=>array('index')),
	array('label'=>'Create AdList', 'url'=>array('create')),
	array('label'=>'View AdList', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AdList', 'url'=>array('admin')),
);
?>

<h1>Update AdList <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>