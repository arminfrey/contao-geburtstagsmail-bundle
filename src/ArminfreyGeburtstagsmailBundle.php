<?php
// src/GeburtstagsmailBundle.php
namespace Arminfrey\GeburtstagsmailBundle;

use Contao\Backend;
use Contao\System;
use Contao\DataContainer;
//use Contao\Database;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Arminfrey\GeburtstagsmailBundle\DependencyInjection\ArminfreyGeburtstagsmailExtension;
/*use Arminfrey\GeburtstagsmailBundle\Model\ArminfreyGeburtstagsmailModel;*/
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ArminfreyGeburtstagsmailBundle extends Bundle
{
	public function getPath(): string
    	{
		return \dirname(__DIR__);
   	}
}
