<?php

/**
 * Info file for RedBeanPHP module
 * 
 * @copyright Copyright (c) 2015, Teppo Koivula
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License, version 2
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
