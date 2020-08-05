<?php
class UsersController {
    protected $userService;
    protected $mailer;
    protected $logger;

    public function __construct(
        UserService $userService,//tend to avoid, it's too general
        RegistrationService $registrationService,//new controller
       // UserRepository $userRepository,//accessing db in the same class is weird
       // Strip $stripe, regiester/signup
        Mailer $mailer, //events and listeners
     //   UserEventRepository $userEventRepository,
        Logger $logger) ////events and listeners
    {

    }
}

class AuthController {

    private Stripe $stripe;
    private RegistrationService $registrationService;

    public function __construct(RegistrationService $registrationService, Stripe $stripe)
    {
        $this->registrationService = $registrationService;
        $this->stripe = $stripe;
    }
}


class UserService {

    protected $userRepository;
    protected $userEventRepository;

    public function __construct(UserRepository $userRepository, UserEventRepository $userEventRepository)
    {
        $this->userRepository = $userRepository;
        $this->userEventRepository = $userEventRepository;
    }
}