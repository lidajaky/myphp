<?php
/* @var $this Category3Controller */
/* @var $model Category3 */

$this->breadcrumbs=array(
	'Category3s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Category3', 'url'=>array('index')),
	array('label'=>'Manage Category3', 'url'=>array('admin')),
);
?>

<h1>Create Category3</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>