<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\Prototype;

class Prototype extends AbstractPrototype
{
    public function __clone()
    {
        Prototype::$count++;
    }
}
