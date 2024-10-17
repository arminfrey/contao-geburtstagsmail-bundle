<?php
// src/GeburtstagsmailBundle.php
namespace Arminfrey\ArminfreyGeburtstagsmailBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ArminfreyGeburtstagsmailBundle extends Bundle
{
	public function getPath(): string
    	{
		return \dirname(__DIR__);
   	}
}
