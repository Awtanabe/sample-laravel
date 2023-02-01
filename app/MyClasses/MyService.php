<?php


namespace App\MyClasses;

class MyService implements MyServiceInterface
{

    private $serial;
    private $id = -1;
    private $msg = 'Hello this is my service';
    private $data = ['hello', 'yahoo', 'bye'];

    public function __construct(int $id = -1)
    {
        $this->serial = rand();
        // echo "「".$this->serial. "」";
    }

    public function say()
    {
        return $this->msg;
    }

    public function setId(int $id)
    {
        $this->id = $id;

        if ($id >= 0 && $id < count($this->data))
        {
            $this->msg = "select id:". $id.'data:'.$this->data[$id];

        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function data(int $id)
    {
        return $this->data;
    }

    public function alldata()
    {
        return $this->data;
    }
}