<?php namespace ProcessWire;

/**
 * Info file for RedBeanPHP module
 * 
 * @copyright 2015-2019 Teppo Koivula
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License, version 2
 */

$info = [
    'title' => 'RedBeanPHP',
    'version' => '2.0.0',
    'author' => 'Teppo Koivula',
    'summary' => 'Light-weight loader for the RedBeanPHP ORM',
    'requires' => [
        'ProcessWire>=3.0.0',
        'PHP>=5.4',
    ],
    'autoload' => function() {
        $config = wire('modules')->getModuleConfigData('RedBeanPHP');
        return (bool) $config['autoload'];
    },
    'singular' => true,
];
