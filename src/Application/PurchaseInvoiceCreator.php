<?php

declare(strict_types=1);


namespace Src\Application;

use Src\Domain\Contracts\PurchaseInvoiceRepository;
use Src\Domain\Entity\PurchaseInvoice;

final class PurchaseInvoiceCreator
{
    private $repository;

    public function __construct(PurchaseInvoiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(PurchaseInvoiceCreatorRequest $request)
    {
        $purchaseInvoice = PurchaseInvoice::create(
            $request->getId(),
            $request->getSupplier(),
            $request->getPayTerm(),
            $request->getDate(),
            $request->getCreatedBy(),
            $request->getStatus(),
            $request->getObservations()
        );

        $this->repository->save($purchaseInvoice);
    }
}
