<?php

namespace Tests\Unit\PurchaseInvoice;

use Mockery;
use Mockery\Matcher\MatcherAbstract;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Src\Application\PurchaseInvoiceCreator;
use Src\Domain\Contracts\PurchaseInvoiceRepository;
use Src\Domain\Entity\PurchaseInvoice;

class CreatePurchaseInvoiceTest extends TestCase
{
    private $repository;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_should_create_a_new_purchase_invoice()
    {
        $request = PurchaseInvoiceCreatorRequestMother::random();
        $invoice = PurchaseInvoiceMother::fromRequest($request);
        $this->shouldCreate($invoice);

        $creator = new PurchaseInvoiceCreator($this->repository());

        $response = ($creator)($request);

        self::assertNull($response);

        Mockery::close();
    }

    private function shouldCreate(PurchaseInvoice $invoice)
    {
        $this->repository()
            ->shouldReceive("save")
            ->with($this->similarTo($invoice))
            ->once()
            ->andReturnNull();
    }

    private function repository()
    {
        return $this->repository = $this->repository ?? $this->mock(PurchaseInvoiceRepository::class);
    }

    private function mock(string $className): MockInterface
    {
        return Mockery::mock($className);
    }

    private function similarTo($value, $delta = 0.0): MatcherAbstract
    {
        return new MatcherIsSimilar($value, $delta);
    }


}

