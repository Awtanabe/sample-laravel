<?php

namespace App\MyClasses;

class PowerMyService implements MyServiceInterface
{
    private $id = -1;
    private $msg = 'no id...';
    private $data = ['りんご', 'いちご', 'バナナ'];

    function __construct()
    {
        $this ->setId(rand(0, count($this->data)));
    }

    public function setId(int $id)
    {
        $this->id = $id;

        if ($id >= 0 && $id < count($this->data))
        {
            $this->msg = 'あなたが好きなのは'. $id .'番の' . $this->data[$id].'ですね';

        }
    }

    public function say()
    {
        return $this->msg;
    }

    public function data(int $id)
    {
        return $this->data[$id];
    }

    public function alldata()
    {
        return $this->data;
    }


}