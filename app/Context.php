<?php

namespace Llankay;

use Illuminate\Database\Eloquent\Model;

class Context extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function boards () {
        return $this->hasMany('Llankay\Boards');
    }

    public function tasks () {
        return $this->hasManyThrough('Llankay\Tasks', 'Llankay\Board');
    }
}
