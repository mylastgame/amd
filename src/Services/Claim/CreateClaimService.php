<?php


namespace App\Services\Claim;


use App\Domain\Context\Claim\Entity\Claim;

class CreateClaimService
{
    public function __construct()
    {

    }

    public function createNewClaim(int $type)
    {

    }

    public function addItemToClaim(int $claimId, int $itemId, int $amount)
    {
        $depot->createNewLocking($itemId,$amount, $claimId);






        /** @var Claim */
        $claim;
        $claim->addItem($item);
    }

    public function closeClaimService(ClaimDto $claimDto)
    {

    }
}