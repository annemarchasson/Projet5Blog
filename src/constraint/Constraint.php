<?php

namespace App\src\constraint;

class Constraint
{
    public function notBlank($name, $value)
    {
        if (empty($value)) {
            return '<p>Le champ ' . $name . ' saisi est vide</p>';
        }
    }

    public function minLength($name, $value, $minSize)
    {
        if (strlen($value) < $minSize) {
            return '<p>Le champ ' . $name . ' doit contenir au moins ' . $minSize . ' caractères</p>';
        }
    }

    public function maxLength($name, $value, $maxSize)
    {
        if (strlen($value) > $maxSize) {
            return '<p>Le champ ' . $name . ' doit contenir au maximum ' . $maxSize . ' caractères</p>';
        }
    }

    public function email($name, $filter)
    {
        if (!filter_var($name, FILTER_VALIDATE_EMAIL)) {
            return '<p>Le mail' . $name . 'est considéré comme invalide.</p>';
        }

    }
}