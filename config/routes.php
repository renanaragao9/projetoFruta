<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    
    $routes->setRouteClass(DashedRoute::class);
 
    $routes->scope('/', function (RouteBuilder $builder) {

        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        $builder->connect('/login', ['controller' => 'Users', 'action' => 'login'], ['_name' => 'login']);

        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });

    $routes->scope('/admin', function(RouteBuilder $routes) {
        $routes->connect('/lista-usuarios', ['controller' => 'Users', 'action' => 'index'], ['_name' => 'users.index']);
        $routes->connect('/adicionar-usuario', ['controller' => 'Users', 'action' => 'add'], ['_name' => 'users.add']);
        $routes->connect('/editar-usuario/:id', ['controller' => 'Users', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/excluir-usuario/:id', ['controller' => 'Users', 'action' => 'delete'], ['pass' => ['id']]);
    });

    $routes->scope('/admin/frutas', function(RouteBuilder $routes) {
        $routes->connect('/lista', ['controller' => 'Frutas', 'action' => 'index'], ['_name' => 'frutas.index']);
        $routes->connect('/adicionar', ['controller' => 'Frutas', 'action' => 'add'], ['_name' => 'frutas.add']);
        $routes->connect('/editar/:id', ['controller' => 'Frutas', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/excluir/:id', ['controller' => 'Frutas', 'action' => 'delete'], ['pass' => ['id']]);
    });
};
