<?php


namespace App\Domain\Context\Claim\Entity;


use App\Domain\Context\Claim\VO\PaymentType;
use DateTimeImmutable;

class Claim
{
    /**
     * @var int
     */
    private $id;

    /** @var Manager */
    private $manager;

    /** @var DateTimeImmutable */
    private $date;

    /**
     * @var PaymentType
     */
    private $paymentType;
}