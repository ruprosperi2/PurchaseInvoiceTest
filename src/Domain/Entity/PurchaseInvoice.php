<?php

declare(strict_types=1);


namespace Src\Domain\Entity;

final class PurchaseInvoice
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $supplier;
    /**
     * @var string
     */
    private $payTerm;
    /**
     * @var string
     */
    private $date;
    /**
     * @var string
     */
    private $createdBy;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
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

    public static function create(
        string $id,
        string $supplier,
        string $payTerm,
        string $date,
        string $createdBy,
        string $status,
        string $observations
    ): self
    {
        return new self(
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
