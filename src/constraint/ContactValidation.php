<?php

namespace App\src\constraint;

use App\config\Parameter;

class ContactValidation extends Validation
{
    private $errors = [];
    private $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }

    public function check(Parameter $post)
    {
        foreach ($post->all() as $key => $value) {
            $this->checkField($key, $value);
        }
        return $this->errors;
    }

    private function checkField($name, $value)
    {
        if($name === 'firstname') {
            $error = $this->checkFirstname($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'lastname'){
            $error = $this->checkLastname($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'message'){
            $error = $this->checkMessage($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'email'){
            $error = $this->checkMail($name, $value);
            $this->addError($name,$error);
        }
    }

    private function addError($name, $error) {
        if($error) {
            $this->errors += [
                $name => $error
            ];
        }
    }

    private function checkFirstname($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('prénom', $value);
        }
    }
    private function checkLastname($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('nom', $value);
        }
    }

    private function checkMessage($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('message', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('message', $value, 2);
        }
    }
    private function checkMail ($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
        return $this->constraint->notBlank('email', $value);
    }
        if ($this->constraint->email($name,$value)){
            return $this->constraint->email('email',$value);
        }
    }
}