<?php

declare(strict_types=1);


namespace Src\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;

final class CreatePurchaseInvoicerController
{
    public function __invoke()
    {
        return new JsonResponse(null, JsonResponse::HTTP_CREATED);
    }
}
