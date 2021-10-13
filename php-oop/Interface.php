<?php

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    //    protected $apiKey;
    //    public function __construct($apiKey)
    //    {
    //        $this->apiKey = $apiKey;
    //    }

    public function subscribe($email)
    {
        die('subscribing with campaign monitor');
        //request will be sent to this to add the user to the main list
    }
}

//switch to a different newsletter provider
class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with drip');
    }
}

class NewsletterSubscriptionsController
{
    //mora i vo store da se smeni klasata
    public function store(Newsletter $newsletter)
    {
        $email = 'joe@example.com';
        $newsletter->subscribe($email);

        //vo laravel
        //$newsletter = new CampaignMonitor(config('services.cm.key'));
        //$newsletter->subscribe(auth()->user()->email);
        //add email address to Campaign Monitor
    }
}

$controller = new NewsletterSubscriptionsController();
$controller->store(new Drip());




