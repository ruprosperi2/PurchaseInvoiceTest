<?php

declare(strict_types=1);


namespace Src\Domain\Contracts;

use Src\Domain\Entity\PurchaseInvoice;

interface PurchaseInvoiceRepository
{
    public function save(PurchaseInvoice $purchaseInvoice): void;
}
