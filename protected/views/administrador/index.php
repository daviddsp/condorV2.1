<?php

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links' => array(
        'Administrador' => 'Administrador',
    ),
));

$this->menu = array(
    array('label' => 'Create Capitulos', 'url' => array('create')),
    array('label' => 'Manage Capitulos', 'url' => array('admin')),
);
?>
<?php

// Set up several flashes
// (this should be done somewhere in controller, of course).
$user = Yii::app()->getComponent('user');
$user->setFlash(
        'success', "<strong>Bienvenido al administrador de Cóndor.!</strong> "
);


// Render them all with single `TbAlert`
$this->widget('bootstrap.widgets.TbAlert', array(
    'block' => true,
    'fade' => true,
    'closeText' => '&times;', // false equals no close link
    'events' => array(),
    'htmlOptions' => array(),
    'userComponentId' => 'user',
    'alerts' => array(// configurations per alert type
        // success, info, warning, error or danger
        'success' => array('block' => 'true', 'closeText' => '&times;', 'closeText' => false, 'htmlOptions' => array('style' => 'text-align:center; color:#000000')),
    ),
));
?>

<?php

$this->widget('bootstrap.widgets.TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
