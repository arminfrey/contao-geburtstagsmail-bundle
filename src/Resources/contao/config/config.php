<?php

/*
 * This file is part of BirthdayMailer
 * 
 * (c) Armin Frey 2022 <webmaster@krettenweiber.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/freyar/contao-jugend-bundle
 */

use Arminfrey\BirthdayMailer\Model\BirthdayMailerModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['BirthdayMailer_module']['BirthdayMailer_collection'] = array(
    'tables' => array('tl_birthdaymailer')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_birthdaymailer'] = BirthdayMailerModel::class;
