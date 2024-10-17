<?php
//namespace Arminfrey\GeburtstagsmailBundle\ArminfreyGeburtstagsmailBundle;

//use Arminfrey\GeburtstagsmailBundle\ArminfreyGeburtstagsmailBundle;
//use Arminfrey\GeburtstagsmailBundle\Model\ArminfreyGeburtstagsmailModel;
use Arminfrey\GeburtstagsmailBundle\Service\SendMailService;

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

// Add configuration to Backend
$GLOBALS['BE_MOD']['Geburtstagsmail']['Geburtstagsmail'] = array
(
	'tables'           => array('tl_geburtstagsmail'),
	'icon'             => '../assets/icon.png',
	'sendBirthdayMail' => array(SendMailService::class, 'sendBirthdayMailManually'), 
);


//$GLOBALS['TL_MODELS']['tl_geburtstagsmail'] = ArminfreyGeburtstagsmailModel::class;

/**
 * -------------------------------------------------------------------------
 * CRON
 * -------------------------------------------------------------------------
 */
// Daily cron job to send birthday mails
$GLOBALS['TL_CRON']['daily'][] = array(SendMailService::class, 'sendBirthdayMail');

