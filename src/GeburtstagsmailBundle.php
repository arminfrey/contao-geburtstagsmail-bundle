<?php
// src/GeburtstagsmailBundle.php
namespace Arminfrey\GeburtstagsmailBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GeburtstagsmailBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
