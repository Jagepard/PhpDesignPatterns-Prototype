<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Prototype;

/**
 * Class AbstractPrototype
 * @package Creational\Prototype
 */
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
