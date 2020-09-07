<?php

namespace App\src\constraint;

class Constraint
{
    public function notBlank($name, $value)
    {
        if (empty($value)) {
            return '<p class="alert alert-danger" role="alert">Le champ ' . $name . ' saisi est vide</p>';
        }
    }

    public function minLength($name, $value, $minSize)
    {
        if (strlen($value) < $minSize) {
            return '<p class="alert alert-danger" role="alert">Le champ ' . $name . ' doit contenir au moins ' . $minSize . ' caractères</p>';
        }
    }

    public function maxLength($name, $value, $maxSize)
    {
        if (strlen($value) > $maxSize) {
            return '<p class="alert alert-danger" role="alert">Le champ ' . $name . ' doit contenir au maximum ' . $maxSize . ' caractères</p>';
        }
    }

    public function email($name, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return '<p class="alert alert-danger" role="alert">Le mail' . $name . 'est considéré comme invalide.</p>';
        }

    }
}

