<?php  return array(     'service_manager' => array(         'factories' => array(             'Zend\Db\Adapter\Adapter' => function ($sm) {                 return new Zend\Db\Adapter\Adapter(array(                     'driver' => 'PDO_SQLITE',                     'dsn' => 'sqlite:/var/www/zhorty.dev/module/Zhorty/data/zhorty.db'                 ));             },         ),     ), );