<?php

use Arminfrey\Geburtstagsmail\Model\ArminfreyGeburtstagsmailModel;
/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

// Add configuration to Backend -> Accounts
$GLOBALS['BE_MOD']['accounts']['Geburtstagsmail'] = array
(
	'tables'           => array('tl_geburtstagsmail'),
	'icon'             => '../assets/icon.png',
	'sendBirthdayMail' => array('ArminfreyGeburtstagsmailBundle', 'sendBirthdayMailManually'), 
);


$GLOBALS['TL_MODELS']['tl_geburtstagsmail'] = ArminfreyGeburtstagsmailModel::class;

/**
 * -------------------------------------------------------------------------
 * CRON
 * -------------------------------------------------------------------------
 */
// Daily cron job to send birthday mails
$GLOBALS['TL_CRON']['daily'][] = array('ArminfreyGeburtstagsmailBundle', 'sendBirthdayMail');

