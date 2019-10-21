<?php


namespace App\Domain\Context\Claim\Entity;


use App\Domain\Context\Claim\VO\PaymentType;
use App\Domain\Context\Claim\VO\ClaimType;
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

    /** @var ClaimType */
    private $claimType;

    /**
     * @var Item[]
     */
    private $items = [];

    public function __construct(int $id, ClaimType $claimType, Manager $manager, DateTimeImmutable $date = null)
    {
        $this->id = $id;
        $this->claimType = $claimType;
        $this->date = $date ?? new DateTimeImmutable();
        $this->manager = $manager;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }

    public function setManager(Manager $manager): Claim
    {
        $this->manager = $manager;
        return $this;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(DateTimeImmutable $date): Claim
    {
        $this->date = $date;
    }

    /**
     * @return PaymentType
     */
    public function getPaymentType(): PaymentType
    {
        return $this->paymentType;
    }

    public function setPaymentType(PaymentType $paymentType): Claim
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return ClaimType
     */
    public function getClaimType(): ClaimType
    {
        return $this->claimType;
    }

    public function addItem(Item $newItem)
    {
        foreach ($this->items as $i => $item) {
            if ($item->equal($newItem)) {
                $this->items[$i] = $newItem;
                return $this;
            }
        }

        $this->items[] = $newItem;
        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}