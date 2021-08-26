<?php

declare(strict_types=1);


namespace Shared\Domain\ValuesObjects;

abstract class StringsValuesObjects
{
    /**
     * @var string
     */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function value()
    {
        return $this->string;
    }
}
