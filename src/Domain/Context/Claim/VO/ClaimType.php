<?php


namespace App\Domain\Context\Claim\VO;


class ClaimType
{
    private $type;
    private $title;

    public function __construct(int $type, string $title)
    {
        $this->type = $type;
        $this->title = $title;
    }

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


}