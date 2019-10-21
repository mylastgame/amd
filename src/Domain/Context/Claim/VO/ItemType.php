<?php


namespace App\Domain\Context\Claim\VO;


class ItemType
{
    /**
     * @var int
     */
    private $type;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $abbreviation;

    public function __construct(int $type, string $title, string $abbreviation)
    {

        $this->type = $type;
        $this->title = $title;
        $this->abbreviation = $abbreviation;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }


}