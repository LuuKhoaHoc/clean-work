<?php
$service = 'Kitchen-Cleaning';
$service = ucwords(str_replace('-', ' ', $service));
echo $service . '<br>';

$model = new Content_Model();
var_dump($model->getSerFromDB($service)['price']);