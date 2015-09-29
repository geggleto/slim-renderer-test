<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-09-29
 * Time: 1:27 PM
 */

use Renderer\SlimRenderer;

include "vendor/autoload.php";

$app = new Slim\App();
$container = $app->getContainer();
$container['renderer'] = new SlimRenderer("./templates");

$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->renderer->render($response, "/hello.php", $args);
});

$app->run();