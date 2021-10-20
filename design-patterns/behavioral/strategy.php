<?php

// Laravel is using in Translations

interface DeliveryStrategy
{
    public function deliver(Address $address);
}

class BikeDelivery implements DeliveryStrategy
{
    public function deliver(Address $address)
    {
        $route = new BikeRoute($address);

        echo $route->calculateCosts();
        echo $route->calculateDeliveryTime();
    }
}

class DronDelivery implements DeliveryStrategy
{
    public function deliver(Address $address)
    {
        $route = new DronRoute($address);

        echo $route->calculateCosts();
        echo $route->calculateDeliveryTime();
    }
}


class PizzaDelivery
{
    public function deliverPizza(DeliveryStrategy $strategy, Address $address)
    {
        return $strategy->deliver($address);
    }
}

$address = new Address('Hey');
$delivery = new PizzaDelivery();
$delivery->deliverPizza(new BikeDelivery(), $address);