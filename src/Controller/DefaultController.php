<?php


namespace App\Controller;


use App\Domain\Context\Claim\Repository\ClaimRepositoryInterface;
use App\Dto\Claim\ClaimDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index()
    {
        return new Response('It works');
    }

    public function claim(ClaimRepositoryInterface $claimRepository, $claimId)
    {
        $claim = $claimRepository->getById($claimId);
        new ClaimDto(
            $claim->getId(),
            $claim->getClaimType()->getType(),
            $claim->getClaimType()->getTitle(),
            $claim->getDate(),
            $claim->getPaymentType()->getType(),
            $claim->getPaymentType()->getTitle()
        );

        $response = [
            'id' => $claim->getId(),
            'type' => $claim->getClaimType()->getType(),
            'typeTitle' => $claim->getClaimType()->getTitle(),
            'date' => $claim->getDate(),
            'paymentType' => $claim->getPaymentType()->getType(),
            'paymentTypeTitle' => $claim->getPaymentType()->getTitle()
        ];

        return new Response(json_encode($response));

    }
}