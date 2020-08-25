<?php

namespace Creational\Prototype;

require_once "vendor/autoload.php";

$prototype = new Prototype();

$prototype->getPrototype();
printf("%s \n", Prototype::$count);

$prototype->getPrototype();
printf("%s \n", Prototype::$count);

$prototype->getPrototype();
printf("%s \n", Prototype::$count);
