<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Prototype;

abstract class AbstractPrototype
{
    /**
     * @var int
     */
    public static $count = 0;

    abstract public function __clone();

    /**
     * @return mixed
     */
    public function getPrototype(): AbstractPrototype
    {
        return clone $this;
    }
}
