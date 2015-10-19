<?php

/**
 * Configuration for RedBeanPHP module
 *
 * @copyright Copyright (c) 2015, Teppo Koivula
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License, version 2
 * 
 * RedBeanPHP Easy ORM for PHP (c) 2015 Gabor de Mooij (gabor@redbeanphp.com)
 * and the RedBeanPHP community (http://www.redbeanphp.com/credits). Licensed
 * under New BSD and GPLv2 (dual license).
 */

class RedBeanPHPConfig extends ModuleConfig {
    public function __construct() {
        $this->add(array(
            array(
                'name' => 'autoload',
                'type' => 'checkbox',
                'label' => $this->_('Autoload'),
                'description' => $this->_('Is this module automatically loaded at runtime?'),
                'value' => 'true',
            ),
            array(
                'name' => 'autoResolve',
                'type' => 'checkbox',
                'label' => $this->_('Auto Resolve'),
                'description' => $this->_('Set this true to use automatic resolvement of aliased parent beans.'),
                'value' => 'true',
            ),
            array(
                'name' => 'freeze',
                'type' => 'checkbox',
                'label' => $this->_('Freeze'),
                'description' => $this->_('Toggle between fluid and frozen mode. In fluid mode database structure is auto-adjusted to accommodate your objects.'),
                'value' => 'true',
            ),
        ));
    }
}
