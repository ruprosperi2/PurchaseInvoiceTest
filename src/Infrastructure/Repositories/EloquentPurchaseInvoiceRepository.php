<?php

declare(strict_types=1);


namespace Src\Infrastructure\Repositories;

use Src\Domain\Entity\PurchaseInvoice;

final class EloquentPurchaseInvoiceRepository
{
    public function save(PurchaseInvoice $purchaseInvoice): void
    {
        dd($purchaseInvoice);
    }
}
