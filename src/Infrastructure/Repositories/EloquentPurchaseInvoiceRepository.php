<?php

declare(strict_types=1);


namespace Src\Infrastructure\Repositories;

use Illuminate\Support\Facades\DB;
use Src\Domain\Contracts\PurchaseInvoiceRepository;
use Src\Domain\Entity\PurchaseInvoice;

final class EloquentPurchaseInvoiceRepository implements PurchaseInvoiceRepository
{
    public function save(PurchaseInvoice $purchaseInvoice): void
    {
        DB::transaction(function () use ($purchaseInvoice) {
            DB::table('purchase_invoices')->insert(
                [
                    "id" => $purchaseInvoice->getId(),
                    "supplier" => $purchaseInvoice->getSupplier(),
                    "payTerm" => $purchaseInvoice->getPayTerm(),
                    "date" => $purchaseInvoice->getDate(),
                    "createdBy" => $purchaseInvoice->getCreatedBy(),
                    "status" => $purchaseInvoice->getStatus(),
                    "observations" => $purchaseInvoice->getObservations()
                ]
            );
        });
    }
}



