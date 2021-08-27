<?php

declare(strict_types=1);

namespace Tests\Unit\PurchaseInvoice;

use Src\Domain\Contracts\PurchaseInvoiceRepository;
use Tests\TestCase;

final class PurchaseInvoiceTest extends TestCase
{
    /** @test */
    public function it_should_save_a_purchase_invoice(): void
    {
        $request = PurchaseInvoiceCreatorRequestMother::random();
        $invoice = PurchaseInvoiceMother::fromRequest($request);

        $this->repository()->save($invoice);
        $this->assertTrue(true);
    }

    private function repository()
    {
        return $this->service(PurchaseInvoiceRepository::class);
    }

    private function service(string $id)
    {
        return app()->make($id);
    }
}
