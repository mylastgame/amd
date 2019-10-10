<?php


namespace App\Domain\Context\User\VO;


class Name
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $lastName;
    /**
     * @var string
     */
    private $middleName;

    public function __construct(string $name, string $lastName, string $middleName = '')
    {

        $this->name = $name;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function getFullName(): string
    {
        return "{$this->lastName} {$this->name} {$this->middleName}";
    }
}