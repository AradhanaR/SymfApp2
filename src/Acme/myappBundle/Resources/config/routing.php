<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('index', new Route('photogalleria', array(
    '_controller' => 'myappBundle:Gallery:index',
)));

$collection->add('add', new Route('photo', array(
    '_controller' => 'myappBundle:Gallery:add',
)));

return $collection;