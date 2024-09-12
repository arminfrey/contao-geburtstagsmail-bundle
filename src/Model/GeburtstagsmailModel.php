<?php

declare(strict_types=1);

/*
 * This file is part of GeburtstagsmailBundle.
 * 
 * (c) Armin Frey 2022 <webmaster@krettenweiber.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/arminfrey/BirthdayMailer
 */

namespace Arminfrey\GeburtstagsmailBundle\Model;

use Contao\Model;

/**
 * Class GeburtstagsmailModel
 *
 * @package Arminfrey\GeburtstagsmailBundle\Model
 */
class GeburtstagsmailModel extends Model
{
    protected static $strTable = 'tl_geburtstagsmail';

}
