<?php
namespace App\MyClasses\Laravel6AdvancedShoda;

class PowerMyService implements MyServiceInterface
{
    private $id = -1;
    private $msg = 'No id...';
    private $data = ['いちご', 'りんご', 'ばなな', 'みかん', 'ぶどう'];

    public function __construct()
    {
        $this->setId(rand(0, count($this->data)));
    }

    public function setId($id)
    {
        $this->id = $id;
        if ($id >= 0 && $id < count($this->data)) {
            $this->msg = 'あなたが好きなのは、' . $id . '個の' . $this->data[$id] . 'ですね！';
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
