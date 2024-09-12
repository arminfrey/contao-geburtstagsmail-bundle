<?php

use Arminfrey\GeburtstagsmailBundle\Model\GeburtstagsmailModel;
/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

// Add configuration to Backend -> Accounts
$GLOBALS['BE_MOD']['accounts']['Geburtstagsmail'] = array
(
	'tables'           => array('tl_geburtstagsmail'),
	'icon'             => '/assets/icon.png',
	'sendBirthdayMail' => array('GeburtstagsmailBundle', 'sendBirthdayMailManually'), 
);


$GLOBALS['TL_MODELS']['tl_geburtstagsmail'] = GeburtstagsmailModel::class;

/**
 * -------------------------------------------------------------------------
 * CRON
 * -------------------------------------------------------------------------
 */
// Daily cron job to send birthday mails
$GLOBALS['TL_CRON']['daily'][] = array('GeburtstagsmailBundle', 'sendBirthdayMail');

