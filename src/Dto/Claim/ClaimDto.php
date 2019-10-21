<?php


namespace App\Dto\Claim;


use DateTimeImmutable;

class ClaimDto
{
    /**
     * @var int
     */
    protected $claimId;
    /**
     * @var int
     */
    protected $type;
    /**
     * @var array
     */
    protected $items;
    /**
     * @var string
     */
    private $typeTitle;
    /**
     * @var DateTimeImmutable
     */
    private $date;
    /**
     * @var int
     */
    private $paymentType;
    /**
     * @var string
     */
    private $paymentTypeTitle;

    public function __construct(
        int $claimId,
        int $type,
        string $typeTitle,
        DateTimeImmutable $date,
        int $paymentType,
        string $paymentTypeTitle
    )
    {
        $this->claimId = $claimId;
        $this->type = $type;
        $this->typeTitle = $typeTitle;
        $this->date = $date;
        $this->paymentType = $paymentType;
        $this->paymentTypeTitle = $paymentTypeTitle;
    }

    /**
     * @return int
     */
    public function getClaimId(): int
    {
        return $this->claimId;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return string
     */
    public function getTypeTitle(): string
    {
        return $this->typeTitle;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getPaymentType(): int
    {
        return $this->paymentType;
    }

    /**
     * @return string
     */
    public function getPaymentTypeTitle(): string
    {
        return $this->paymentTypeTitle;
    }


}