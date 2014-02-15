<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Monitoring
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Monitoring',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Monitoring\Monitoring'     => 'system/modules/Monitoring/classes/Monitoring.php',
	'Monitoring\MonitoringHook' => 'system/modules/Monitoring/classes/MonitoringHook.php',
));
