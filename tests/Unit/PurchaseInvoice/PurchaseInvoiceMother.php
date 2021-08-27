<?php

declare(strict_types=1);

namespace Tests\Unit\PurchaseInvoice;

use Src\Application\PurchaseInvoiceCreatorRequest;
use Src\Domain\Entity\PurchaseInvoice;

final class PurchaseInvoiceMother
{
    public static function fromRequest(PurchaseInvoiceCreatorRequest $request): PurchaseInvoice
    {
        return new PurchaseInvoice(
            $request->getId(),
            $request->getSupplier(),
            $request->getPayTerm(),
            $request->getDate(),
            $request->getCreatedBy(),
            $request->getStatus(),
            $request->getObservations()
        );
    }
}
