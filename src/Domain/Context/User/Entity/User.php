<?php


namespace App\Domain\Context\User\Entity;


use App\Domain\Context\User\VO\Name;
use App\Domain\Context\User\VO\PhonesList;
use App\Domain\Context\User\VO\Role;
use DateTimeImmutable;

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var DateTimeImmutable
     */
    private $employmentDate;


    private $status;

    /**
     * @var DateTimeImmutable
     */
    private $dismissDate;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var Name
     */
    private $name;

    /**
     * @var Role
     */
    private $role;

    /**
     * @var PhonesList
     */
    private $phones;

    /**
     * @var
     */
    private $emails;

    /**
     * @var
     */
    private $equipment;

    

}