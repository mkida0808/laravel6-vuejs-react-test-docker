<?php

namespace App\Models\Laravel6BasicShoda;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\Laravel6BasicShoda\ScopePerson;

class Person extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150',
    ];

    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

    // public function board()
    public function boards()
    {
        // return $this->hasOne('App\Models\Laravel6BasicShoda\Board');
        return $this->hasMany('App\Models\Laravel6BasicShoda\Board');
    }

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::addGlobalScope(new ScopePerson);

    //     // static::addGlobalScope('age', function (Builder $builder) {
    //     //     $builder->where('age', '>', 20);
    //     // });
    // }
}
