<?php

namespace App\Models\Laravel6BasicShoda;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $table = 'restdata';
    protected $guarded = ['id'];

    public static $rules = [
        'message' => 'required',
        'url' => 'required',
    ];

    public function getData()
    {
        return $this->id . ':' . $this->message . '(' . $this->url . ')';
    }
}
