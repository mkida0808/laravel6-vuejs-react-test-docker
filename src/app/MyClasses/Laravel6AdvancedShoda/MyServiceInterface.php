<?php
namespace App\MyClasses\Laravel6AdvancedShoda;

interface MyServiceInterface
{
    public function setId(int $id);
    public function say();
    public function alldata();
    public function data(int $id);
}
