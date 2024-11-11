<?php
//namespace Arminfrey\GeburtstagsmailBundle\contao\config;

use Arminfrey\GeburtstagsmailBundle\ArminfreyGeburtstagsmailBundle;
use Arminfrey\GeburtstagsmailBundle\Model\ArminfreyGeburtstagsmailModel;
use Arminfrey\GeburtstagsmailBundle\Service\SendMailService;

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

// Add configuration to Backend
$GLOBALS['BE_MOD']['Geburtstagsmail']['Geburtstagsmail'] = [
	'tables'		=> ['tl_geburtstagsmail'],
	'icon'             => \dirname(__DIR__) . '/../../assets/icon.png',
	//'icon'			=> '/../../src/assets/icon.png',
	'sendBirthdayMail'	=> [SendMailService::class, 'sendBirthdayMailManually'], 
];


$GLOBALS['TL_MODELS']['tl_geburtstagsmail'] = ArminfreyGeburtstagsmailModel::class;

/**
 * -------------------------------------------------------------------------
 * CRON
 * -------------------------------------------------------------------------
 */
// Daily cron job to send birthday mails
$GLOBALS['TL_CRON']['daily'][] = [SendMailService::class, 'sendBirthdayMail'];

