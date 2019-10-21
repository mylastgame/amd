<?php


namespace App\Domain\Context\Claim\Entity;


use App\Domain\Context\Claim\VO\ItemType;
use Money\Money;

class Item
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var ItemType
     */
    private $itemType;
    /**
     * @var int
     */
    private $amount;
    /**
     * @var int
     */
    private $weight;
    /**
     * @var int
     */
    private $boxes;

    /**
     * @var Money
     */
    private $price;

    public function __construct(int $id, ItemType $itemType, int $amount, int $weight, int $boxes)
    {
        $this->id = $id;
        $this->itemType = $itemType;
        $this->amount = $amount;
        $this->weight = $weight;
        $this->boxes = $boxes;
    }

    public function equal(Item $otherItem)
    {
        return $this->id === $otherItem->getId();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return ItemType
     */
    public function getItemType(): ItemType
    {
        return $this->itemType;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getBoxes(): int
    {
        return $this->boxes;
    }

    /**
     * @return Money
     */
    public function getPrice(): Money
    {
        return $this->price;
    }

    /**
     * @param Money $price
     * @return Item
     */
    public function setPrice(Money $price): Item
    {
        $this->price = $price;
        return $this;
    }




}