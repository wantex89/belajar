<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet(
    "/users",
    [
        "controller"        => "users",
        "action"            => "index"
    ]
);

$router->handle();
