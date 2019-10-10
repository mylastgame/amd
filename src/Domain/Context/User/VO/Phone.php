<?php


namespace App\Domain\Context\User\VO;


class Phone
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var int
     */
    private $typeId;

    /**
     * @var string
     */
    private $type;

    public function __construct(string $number, int $typeId, string $type)
    {
        $this->number = $number;
        $this->typeId = $typeId;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function isEqual(Phone $otherPhone)
    {
        return $this->number === $otherPhone->getNumber();
    }
}