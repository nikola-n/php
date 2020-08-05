<?php

//blueprint of the codebase

class Task
{
    //with what is associated
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $completed = false;

    /**
     * @var string
     */
    private $title;

    /**
     * Task constructor.
     *
     * @param        $title
     * @param string $description
     */
    public function __construct(string $title, string $description)
    {
        $this->description = $description;
        $this->title       = $title;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'The teacher bla bla bla...');
$task->complete();

var_dump($task);