<?php

namespace Newride\Normalizer;

class Convertible
{
    public $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function toFloat(): float
    {
        return floatval($this->value);
    }
}
