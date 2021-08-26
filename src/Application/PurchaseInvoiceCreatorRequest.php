<?php

declare(strict_types=1);


namespace Src\Application;

final class PurchaseInvoiceCreatorRequest
{

    private $id;
    private $supplier;
    private $payTerm;
    private $date;
    private $createdBy;
    private $status;
    private $observations;

    public function __construct(
        string $id,
        string $supplier,
        string $payTerm,
        string $date,
        string $createdBy,
        string $status,
        string $observations
    )
    {
        $this->id = $id;
        $this->supplier = $supplier;
        $this->payTerm = $payTerm;
        $this->date = $date;
        $this->createdBy = $createdBy;
        $this->status = $status;
        $this->observations = $observations;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSupplier(): string
    {
        return $this->supplier;
    }


    public function getPayTerm(): string
    {
        return $this->payTerm;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }


    public function getStatus(): string
    {
        return $this->status;
    }

    public function getObservations(): string
    {
        return $this->observations;
    }

}
