<?php

namespace Newride\Normalizer;

use Illuminate\Support\Str;

class Normalizer
{
    public static function percentage($value): Convertible
    {
        if (Str::endsWith($value, '%')) {
            $value = rtrim($value, '%');
        }
        if (Str::contains($value, ',')) {
            $value = str_replace(',', '.', $value);
        }

        return new Convertible($value);
    }
}
