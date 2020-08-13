<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Prototype;

abstract class AbstractPrototype
{
    public static int $count = 0;

    abstract public function __clone();

    public function getPrototype(): AbstractPrototype
    {
        return clone $this;
    }
}
