<?php


namespace App\MyClasses;

class MyService
{

    private $id = -1;
    private $msg;
    private $data;

    public function __construct()
    {
        $this->msg = 'Hello this is my service';
        $this->data = ['hello', 'yahoo', 'bye'];
    }

    public function say()
    {
        return $this->msg;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function data()
    {
        return $this->data;
    }
}