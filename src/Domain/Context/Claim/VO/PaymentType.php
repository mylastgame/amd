<?php


namespace App\Domain\Context\Claim\VO;


class PaymentType
{
    private $type;

    public function __construct(int $type)
    {
        $this->type = $type;
    }

    public function getType(): int
    {
        return $this->type;
    }
}