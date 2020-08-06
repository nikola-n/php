<?php
class Subscription
//compose the subscription class with constructor
{
    /**
     * @var Gateway
     */
    protected Gateway $gateway;
    //pointer

//Subscription e komponiran so samo eden billing provider
//no sto ako sakame da da koristime drug provider
//Na tehnicko nivo isto taka ne e dobro generic Subscirption da znae
//specificni podacoti za Billing provider.
//Ne mu e gajle za toa, samo treba interfej, getway do billing Provider

//Gateway interface
    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {

    }
    public function cancel()
    {
       $this->gateway->findCustomer();
        //api request
        //find stripe customer
// $this->gateway->findStripeCustomer();
        //find stripe subscription by customer
    }
    public function invoice()
    {

    }
    public function swap($newPlan)
    {

    }

}
interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}
class StripeGateway implements Gateway
{
    public function findCustomer()
    {
    }
    public function findSubscriptionByCustomer()
    {
    }

}

class BraintreeGateway implements Gateway
{
    public function findCustomer()
    {
    }
    public function findSubscriptionByCustomer()
    {
    }
}
new Subscription(new StripeGateway());