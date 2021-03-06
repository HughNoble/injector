<?php

namespace Injector\Test\Stub;

class ClassA implements ClassAInterface
{
    private $classB;

    public function __construct(ClassB $classB)
    {
        $this->classB = $classB;
    }

    public function getClassB(): ClassB
    {
        return $this->classB;
    }
}
