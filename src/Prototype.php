<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Prototype;

class Prototype extends AbstractPrototype
{
    public function __clone()
    {
        Prototype::$count++;
    }
}
