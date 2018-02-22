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

    public static function polishcurrency($value): Convertible
    {
        if (Str::endsWith($value, 'gr')) {
           $value = rtrim($value, 'gr');
        }

        if (Str::contains($value, 'zł') || Str::contains($value, 'zl')) {
            $value = str_replace('zl', '.', $value);
            $value = str_replace('zł', '.', $value);
            $value = str_replace(' ', '', $value);
        }

        return new Convertible($value);
    }
}
