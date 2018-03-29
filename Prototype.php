<?php namespace Prototype;

/**
 * Date: 11.08.2015
 * Time: 8:30
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2015, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

/**
 * Class Prototype
 * @package Prototype  /home/d/projects/PHPDesignPatterns/Creational/Prototype
 */
class Prototype
{
    private $_instance;
    private $_objectName;

    /**
     * @param $object
     */
    public function __construct($object)
    {
        $this->_getObjectName($object);
        if (!isset($this->_instance[$this->_objectName])) {
            if (class_exists($this->_objectName)) {
                $this->_instance[$this->_objectName] = new $this->_objectName;
            }
        }
    }

    /**
     * @param $object
     * @return mixed
     */
    public function getObject($object)
    {
        $this->_getObjectName($object);
        if (isset($this->_instance[$this->_objectName])) {
            if (class_exists($this->_objectName)) {
                return clone $this->_instance[$this->_objectName];
            }
        }
    }

    /**
     * @param $object
     */
    private function _getObjectName($object)
    {
        $this->_objectName = __NAMESPACE__ . '\\' . $object;
    }
}

/**
 * Class Product
 * @package Prototype
 */
trait Product
{
    public $var;

    public function getName()
    {
        echo __CLASS__ . ' ' . $this->var . "\n";
    }
}

/**
 * Class FirstProduct
 * @package Prototype
 */
class FirstProduct
{
    use Product;
}

/**
 * Class SecondProduct
 * @package Prototype
 */
class SecondProduct
{
    use Product;
}

$prototype                   = new Prototype('FirstProduct');
$firstPrototypeFirstProduct  = $prototype->getObject('FirstProduct');
$secondPrototypeFirstProduct = $prototype->getObject('FirstProduct');
$thirdPrototypeFirstProduct  = $prototype->getObject('FirstProduct');

$firstPrototypeFirstProduct->var  = 1;
$secondPrototypeFirstProduct->var = 2;
$thirdPrototypeFirstProduct->var  = 3;

$firstPrototypeFirstProduct->getName();
$secondPrototypeFirstProduct->getName();
$thirdPrototypeFirstProduct->getName();

echo '<hr>';

$prototype                    = new Prototype('SecondProduct');
$firstPrototypeSecondProduct  = $prototype->getObject('SecondProduct');
$secondPrototypeSecondProduct = $prototype->getObject('SecondProduct');
$thirdPrototypeSecondProduct  = $prototype->getObject('SecondProduct');

$firstPrototypeSecondProduct->var  = 1;
$secondPrototypeSecondProduct->var = 2;
$thirdPrototypeSecondProduct->var  = 3;

$firstPrototypeSecondProduct->getName();
$secondPrototypeSecondProduct->getName();
$thirdPrototypeSecondProduct->getName();

/**
 * End of file ../Prototype.php
 */ 