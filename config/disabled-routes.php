<?php
/**
 * Created by PhpStorm.
 * User: nerd
 * Date: 10/04/2018
 * Time: 07:15
 */

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controller\PaceController;
use App\Controller\FormController;

$routes = new RouteCollection();
$routes->add(
  'pace_show',
  new Route('/pace/{gender}/{slug}.{_format}/', array(
    '_controller' => [PaceController::class, 'show'],
    '_format'     => 'html'
  ), array(
    'gender' => 'male|female',
    '_format' => 'html'
  ))
);
$routes->add(
  'form_gather',
  new Route('/{slug}/', array(
    '_controller' => [FormController::class, 'gather'],
    'slug' => ''
  ))
);


return $routes;