<?php

declare(strict_types=1);

/*
 * This file is part of GeburtstagsmailBundle.
 * 
 * (c) Armin Frey 2024 <webmaster@krettenweiber.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/freyar/contao-jugend-bundle
 */

namespace Arminfrey\GeburtstagsmailBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Arminfrey\GeburtstagsmailBundle\GeburtstagsmailBundle;

/**
 * Class Plugin
 */
class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create('ArminfreyGeburtstagsmailBundle')
                ->setLoadAfter(['ContaoCoreBundle']),
        ];
    }
}
