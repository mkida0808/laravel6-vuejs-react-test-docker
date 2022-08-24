<?php

namespace App\Models\Laravel6AdvancedShoda;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Person extends Model
{
    public function newCollection(array $models = [])
    {
        return new MyCollection($models);
    }
}

class MyCollection extends Collection
{
    public function fields()
    {
        $item = $this->first();
        return array_keys($item->toArray());
    }
}
