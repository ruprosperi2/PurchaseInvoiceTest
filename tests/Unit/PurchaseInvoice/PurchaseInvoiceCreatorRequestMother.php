<?php

declare(strict_types=1);


namespace Tests\Unit\PurchaseInvoice;

use Faker\Factory;
use Src\Application\PurchaseInvoiceCreator;
use Src\Application\PurchaseInvoiceCreatorRequest;

final class PurchaseInvoiceCreatorRequestMother
{
    public static function random()
    {
        $faker = Factory::create();

        $id = $faker->uuid;
        $supplier = $faker->name;
        $payTerm = $faker->name;
        $date = $faker->date("2021-05-01");
        $createdBy = $faker->name;
        $status = $faker->name;
        $observations = $faker->name;

        return new PurchaseInvoiceCreatorRequest(
            $id,
            $supplier,
            $payTerm,
            $date,
            $createdBy,
            $status,
            $observations
        );
    }
}
