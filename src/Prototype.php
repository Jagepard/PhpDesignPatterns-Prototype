<?php
/**
 * Date: 29.03.18
 * Time: 12:00
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\Prototype;


/**
 * Class Prototype
 * @package Creational\Prototype
 */
abstract class Prototype
{

    /**
     * @var int
     */
    public static $count = 0;

    abstract public function __clone();

    /**
     * @return mixed
     */
    public function getPrototype(): Prototype
    {
        return clone $this;
    }
}