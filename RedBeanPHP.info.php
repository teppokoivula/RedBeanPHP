<?php

/**
 * Module info file for the RedBeanPHP module
 * 
 */

$info = array(
    "title" => "RedBeanPHP",
    "version" => "1.0.0",
    "author" => "Teppo Koivula",
    "summary" => "Light-weight loader for the RedBeanPHP ORM",
    "requires" => "ProcessWire>=2.5.5",
    "autoload" => function() {
        $config = wire('modules')->getModuleConfigData("RedBeanPHP");
        return (bool) $config['autoload'];
    },
    "singular" => true,
);
