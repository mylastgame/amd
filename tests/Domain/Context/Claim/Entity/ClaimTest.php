<?php


namespace App\Tests\Domain\Context\Claim\Entity;


use App\Domain\Context\Claim\Entity\Claim;
use App\Domain\Context\Claim\Entity\Product;
use DateTimeImmutable;

class ClaimTest
{
    public function ClaimTest()
    {
        $claim = new Claim();

        $product = new Product();


        $blockedProduct = $depot->blockProduct($productId, $amount);
        $claim->addProduct($blockedProduct);
        $claim->setProductPrice($productNumber, 100);
        $claim->setDelivery(new Delivery());
        $claim->setPaymentType(new PaymentType());
        $claim->setManager(new User());
        $claim->setDate(new DateTimeImmutable());
        $claim->setInvoice(new Invoice());

        $claim->toNextStatus();
        $claim->toStatus(new Status());

    }
}