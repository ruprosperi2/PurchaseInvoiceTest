<?php

declare(strict_types=1);

namespace Src\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Application\PurchaseInvoiceCreator;
use Src\Application\PurchaseInvoiceCreatorRequest;
use Symfony\Component\HttpFoundation\Response;

final class PurchaseInvoicePostController
{
    private $creator;

    public function __construct(PurchaseInvoiceCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(Request $request): JsonResponse
    {
        ($this->creator)(new PurchaseInvoiceCreatorRequest(
            $request->id,
            $request->supplier,
            $request->payTerm,
            $request->date,
            $request->createdBy,
            $request->status,
            $request->observations
        ));

        return new JsonResponse([], Response::HTTP_CREATED);
    }
}
