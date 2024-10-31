<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2015 Leo Feyer
 * @author     Cliff Parnitzky
 * @package    GeburtstagsmailerBundle
 * @license    LGPL
 */

/**
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'birthdayMailerDeveloperMode';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{birthdayMailer_legend},birthdayMailerAllowDuplicates, birthdayMailerLogDebugInfo, birthdayMailerDeveloperMode;';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['birthdayMailerDeveloperMode'] = 'birthdayMailerDeveloperModeEmail, birthdayMailerDeveloperModeIgnoreDate';

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['birthdayMailerAllowDuplicates'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerAllowDuplicates'],
	'inputType' => 'checkbox',
	'eval'      => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['birthdayMailerLogDebugInfo'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerLogDebugInfo'],
	'inputType' => 'checkbox',
	'eval'      => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['birthdayMailerDeveloperMode'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerDeveloperMode'],
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 clr')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['birthdayMailerDeveloperModeEmail'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerDeveloperModeEmail'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'rgxp'=>'email', 'tl_class'=>'w50 clr')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['birthdayMailerDeveloperModeIgnoreDate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['birthdayMailerDeveloperModeIgnoreDate'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50')
);

?>