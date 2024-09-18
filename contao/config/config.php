<?php
namespace Arminfrey\GeburtstagsmailBundle\ArminfreyGeburtstagsmailBundle;

use Arminfrey\Geburtstagsmail\Model\ArminfreyGeburtstagsmailModel;
//use Arminfrey\Geburtstagsmail\ArminfreyGeburtstagsmailBundle;

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

// Add configuration to Backend
$GLOBALS['BE_MOD']['Geburtstagsmail']['Geburtstagsmail'] = array
(
	'tables'           => array('tl_geburtstagsmail'),
	'icon'             => '../src/assets/icon.png',
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

