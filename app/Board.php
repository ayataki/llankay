<?php

namespace Llankay;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function context () {
        return $this->belongsTo('Llankay\Context');
    }

    public function tasks () {
        return $this->hasMany('Llankay\Task');
    }
}
