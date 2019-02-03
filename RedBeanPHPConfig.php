<?php namespace ProcessWire;

/**
 * Configuration settings for RedBeanPHP module
 *
 * @copyright 2015-2019 Teppo Koivula
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License, version 2
 * 
 * RedBeanPHP Easy ORM for PHP (c) 2018 Gabor de Mooij (gabordemooij@gaborsoftware.nl) and the
 * RedBeanPHP community (https://www.redbeanphp.com/index.php?p=/credits). Licensed under New
 * BSD and GPLv2 (dual license).
 */
class RedBeanPHPConfig extends ModuleConfig {

    /**
     * Constructor
     *
     */
    public function __construct() {
        $this->add([
            [
                'name' => 'module_settings',
                'type' => 'fieldset',
                'label' => $this->_('Module settings'),
                'icon' => 'cogs',
                'children' => [
                    [
                        'name' => 'autoload',
                        'type' => 'checkbox',
                        'label' => $this->_('Autoload'),
                        'description' => $this->_('Check this setting in order to automatically load this module runtime.'),
                        'value' => 'true',
                    ],
                    [
                        'name' => 'autoSetup',
                        'type' => 'checkbox',
                        'label' => $this->_('Setup database connection automatically'),
                        'description' => $this->_('Check this setting in order to reuse ProcessWire\'s config settings for default RedBeanPHP database connection.'),
                        'value' => 'true',
                    ],
                ],
            ],
            [
                'name' => 'redbeanphp_settings',
                'type' => 'fieldset',
                'label' => $this->_('RedBeanPHP settings'),
                'icon' => 'database',
                'children' => [
                    [
                        'name' => 'autoResolve',
                        'type' => 'checkbox',
                        'label' => $this->_('Auto resolve'),
                        'description' => $this->_('Set this true to use automatic resolvement of aliased parent beans.'),
                        'value' => 'true',
                    ],
                    [
                        'name' => 'freeze',
                        'type' => 'checkbox',
                        'label' => $this->_('Frozen mode'),
                        'description' => $this->_('Toggle between fluid and frozen mode. In fluid mode database structure is auto-adjusted to accommodate your objects.'),
                        'value' => 'true',
                    ],
                ],
            ],
            [
                'name' => 'advanced_settings',
                'type' => 'fieldset',
                'label' => $this->_('Advanced settings'),
                'icon' => 'graduation-cap',
                'collapsed' => Inputfield::collapsedYes,
                'children' => [
                    [
                        'name' => 'databaseDriver',
                        'type' => 'select',
                        'label' => $this->_('Database driver'),
                        'description' => $this->_('RedBeanPHP comes with multiple database driver options. If you only require a specific driver, you can use one of the optimized packages with non-relevant drivers stripped out.'),
                        'options' => [
                            '' => $this->_('All drivers'),
                            'mysql' => $this->_('MySQL or MariaDB'),
                            'postgres' => $this->_('PostgreSQL'),
                            'sqlite' => $this->_('SQLite'),
                        ],
                        'value' => '',
                    ],
                ],
            ]
        ]);
    }

}
