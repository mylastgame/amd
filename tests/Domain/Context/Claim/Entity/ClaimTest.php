<?php


namespace App\Tests\Domain\Context\Claim\Entity;


use App\Domain\Context\Claim\Entity\Claim;
use App\Domain\Context\Claim\Entity\Item;
use App\Domain\Context\Claim\Entity\Manager;
use App\Domain\Context\Claim\VO\ClaimType;
use App\Domain\Context\Claim\VO\ItemType;
use Money\Money;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class ClaimTest extends TestCase
{
    public function testCreateClaim()
    {
        $claimType = new ClaimType(1, 'Приход');

        $manager = new Manager(1, 'Менеджер 1');

        $claim = new Claim(1, $claimType, $manager);

        $this->assertInstanceOf(Claim::class, $claim);
        $this->assertEquals(1, $claim->getId());

        $this->assertInstanceOf(ClaimType::class, $claim->getClaimType());
        $this->assertEquals(1, $claim->getClaimType()->getType());
        $this->assertEquals('Приход', $claim->getClaimType()->getTitle());

        $this->assertInstanceOf(Manager::class, $claim->getManager());
        $this->assertEquals(1, $claim->getManager()->getId());
        $this->assertEquals('Менеджер 1', $claim->getManager()->getName());

        $this->assertEquals('2019-10-21', $claim->getDate()->format('Y-m-d'));

        return $claim;
    }

    /**
     * @depends testCreateClaim
     * @param Claim $claim
     */
    public function testAddItems(Claim $claim)
    {
        $amountType = new ItemType(1, 'Штучный', 'шт.');
        $weightType = new ItemType(2, 'Весовой', 'кг.');
        $item1 = new Item(1, $amountType, 1000, 30, 10);
        $item1->setPrice(Money::RUB(500));

        $item2 = new Item(2, $weightType, 200, 200, 40);
        $item2->setPrice(Money::RUB(75000));

        $claim->addItem($item1);
        $claim->addItem($item2);

        $items = $claim->getItems();
        $this->assertEquals(2, count($items));
        $this->assertInstanceOf(Item::class, $items[0]);
        $this->assertInstanceOf(Item::class, $items[1]);


    }
}