<?php
namespace Acme;

class AuthController implements RespondsToUserRegistration
{
    /**
     * @var RegisterUser
     */
    public RegisterUser $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register()
    {
        //stava referenca na objectot $this i array of data
       $this->registration->execute([],$this);
    }
    //messages
    public function userRegisteredSuccessfully()
    {
        var_dump('Created successfully, redirect somewhere.');
    }
    public function userRegisteredFailed()
    {
        var_dump('Created unsuccessfully, redirect back.');

    }
}

//authomatic MI
//ne traba da pravis
//(new AuthController)->register(new RegisterUser);

//Ako se koristi samo vo eden kontroller metod vo toj slucaj
//se koristi method injection

//Megjutoa ako go referenciras toj objekt na povekje mesta vo klasata
//togas se koristi konstructor injection