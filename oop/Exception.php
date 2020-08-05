<?php
//
//function aad($one, $two)
//{
//    if(! is_float($one) || ! is_string($two))
//    {
//    throw new Exception("please provide a float.");
//    }
//    return $one + $two;
//}
//
//try {
//    echo add(2,[]);
//}catch (Exception $e){
//    echo "Oh well.";
//}

//class Video
//{
//
//}
//class User
//{
//    public function download(Video $video)
//    {
//        if(! $this->subscribed()) {
//            throw new Exception('You must be subscribed to download videos.');
//        }
//
//    }
//    public function subscribed()
//    {
//        return false;
//    }
//}
//
//class UserDownloadsController
//{
//public function show()
//{
//    try {
//    (new User)->download(new Video);
//    }catch ()
//}
//
//}
class TeamException extends Exception {

    public static function fromToManyMembers(){
        return new static('You may not add more than 3 team members');

    }
    //mozes da gi cuvas vo property ili
    //vo static method
   // protected $message ='You may not add more than 3 team members';
}
class Member {
    public $name;

    /**
     * Member constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
class Team {

    protected $members = [];
    public function add(Member $member) {

        if(count($this->members) === 3)
        {
            throw TeamException::fromToManyMembers();
        }
        $this->members[]= $member;
    }
    public function members()
    {
        return $this->members;
    }
}
class TeamMembersController
{
    public function store()
    {
        $team = new Team(); // has a maximum of three members
        try {

    $team->add(new Member('Jane Doe'));
    $team->add(new Member('John Doe'));
    $team->add(new Member('Frank Doe'));
    $team->add(new Member('Susan Doe'));
        }catch (TeamException $e){
            var_dump($e->getMessage());
        }

    var_dump($team->members());
    }
}

(new TeamMembersController())->store();