<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    private $stock;
    /**
     * @var string
     */
    private $charge=0;
    /**
     * @var string
     */
    private $energy;

    /**
     * @var string
     */
    private $isFull;



    public function __construct(string $color, int $nbSeats, string $energy, int $stock)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStock($stock);
    }


    /**
     * @return string
     */
    public function getIsFull(): string
    {
        if($this->getStock() > $this->getCharge()){
            return 'in filling';
        } else {
            return 'full';
        }
    }

    /**
     * @param string $isFull
     */
    public function setIsFull(string $isFull): void
    {
        $this->isFull = $isFull;
    }



    /**
     * @return string
     */
    public function getStock(): string
    {
        return $this->stock;
    }

    /**
     * @param string $stock
     */
    public function setStock(string $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return string
     */
    public function getCharge(): string
    {
        return $this->charge;
    }

    /**
     * @param int $charge
     */
    public function setCharge(int $charge): void
    {
        $this->charge = $charge;
    }

    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

}
