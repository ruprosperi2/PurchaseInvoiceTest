<?php

namespace Tests\Unit\PurchaseInvoice;

use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Src\Application\PurchaseInvoiceCreator;
use Src\Domain\Contracts\PurchaseInvoiceRepository;

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
        $creator = new PurchaseInvoiceCreator($this->repository());

        $this->shouldCreate();

        $response = ($creator)(PurchaseInvoiceCreatorRequestMother::random());

        self::assertNull($response);

        Mockery::close();
    }

    private function shouldCreate()
    {
        $this->repository()
            ->shouldReceive("save")
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


}

