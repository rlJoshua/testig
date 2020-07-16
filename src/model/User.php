<?php


class User
{

    private $lastname;

    private $firstname;

    private $email;

    private $age;

    public function __construct(string $lastname, string $firstname, string $email, int $age)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->age = $age;
    }

    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): int
    {
        return $this->age;
    }


    public function isValid()
    {
        // Check lastname
        if ($this->checkName($this->lastname)) {
            return false;
        }

        // Check firstname
        if ($this->checkName($this->firstname)) {
            return false;
        }

        // Check age
        if ($this->checkAge($this->age)) {
            return false;
        }

        // Check email
        if ($this->checkEmail($this->email)) {
            return false;
        }

        return true;
    }

    public function checkName(string $name)
    {
        if ($name === '' || $name === null ) {
            return true;
        }

        return false;
    }

    public function checkAge(int $age)
    {

        if ($age === '' || $age === null ) {
            return true;
        }

        if ($age < 12) {
            return true;
        }

        return false;
    }

    public function checkEmail(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
           return true;
        }
    }
}