<?php
    
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => "localhost",
        'database'  => "eltabu_smartboard",
        'username'  => "eltabu_334",
        'password'  => "0926070929",
        'charset'   => 'utf8',
        'prefix'    => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

?>