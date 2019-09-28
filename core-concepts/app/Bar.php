<?php


namespace App;


class Bar
{

    private $foo;

    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }
}
