<?php

namespace App\Models\Laravel6BasicShoda;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = ['id'];
    public static $rules = [
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    ];

    public function getData()
    {
        return $this->id . ': ' . $this->title . '(' . $this->person->name . ')';
    }

    public function person()
    {
        return $this->belongsTo('App\Models\Laravel6BasicShoda\Person');
    }
}
