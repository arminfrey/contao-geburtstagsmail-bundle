<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package BirthdayMailer
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'BirthdayMailer',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'BirthdayMailer\BirthdayMailSender' => 'system/modules/BirthdayMailer/classes/BirthdayMailSender.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_birthday-mailer' => 'system/modules/BirthdayMailer/templates/backend',
));
