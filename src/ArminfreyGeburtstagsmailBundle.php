<?php
// src/GeburtstagsmailBundle.php
namespace Arminfrey\GeburtstagsmailBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;



class ArminfreyGeburtstagsmailBundle extends Bundle
{
	public function getPath(): string
    	{
		return \dirname(__DIR__);
   	}
}
