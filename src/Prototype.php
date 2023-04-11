<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\Prototype;

class Prototype extends AbstractPrototype
{
    /**
     * Increments $count when an object is cloned
     * ------------------------------------------
     * Инкрементирует $count при клонировании объекта
     *
     * @return void
     */
    public function __clone()
    {
        Prototype::$count++;
    }
}
