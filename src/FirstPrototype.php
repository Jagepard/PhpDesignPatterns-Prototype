<?php
/**
 * Date: 29.03.18
 * Time: 12:25
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\Prototype;


/**
 * Class FirstPrototype
 * @package Creational\Prototype
 */
class FirstPrototype extends Prototype
{

    public function __clone()
    {
        FirstPrototype::$count++;
    }
}