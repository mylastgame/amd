<?php


namespace App\Domain\Context\Claim\Repository;


use App\Domain\Context\Claim\Entity\Claim;

interface ClaimRepositoryInterface
{
    public function getById(int $claimId): Claim;
}