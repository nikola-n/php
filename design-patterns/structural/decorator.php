<?php

interface CarService
{
    public function getCost();

    public function getDescription();
}

class BasicInspection implements CarService
{

    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Basic inspection';
    }
}

class OilChange implements CarService
{

    public function __construct(protected CarService $carService)
    {
    }

    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and oil changed.';
    }
}

class TireRotation implements CarService
{

    public function __construct(protected CarService $carService)
    {
    }

    public function getCost()
    {
        return 89 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and tire rotation';
    }
}

$cost = (new TireRotation(new OilChange(new BasicInspection())));

echo $cost->getCost();
echo $cost->getDescription();

//-------------------------------------------------------------

interface Booking
{
    public function calculatePrice(): int;

    public function getDescriptions(): string;
}


abstract class BookingDecorator implements Booking
{
    public function __construct(protected Booking $booking)
    {
    }
}

class DoubleRoomBooking implements Booking
{
    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescriptions(): string
    {
        return 'double room';
    }
}

class ExtraBed extends BookingDecorator
{
    private const PRICE = 30;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescriptions(): string
    {
        return $this->booking->getDescriptions() . ' with extra bed';
    }
}

class WiFi extends BookingDecorator
{
    private const PRICE = 2;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescriptions(): string
    {
        return $this->booking->getDescriptions() . ' with wifi';
    }
}