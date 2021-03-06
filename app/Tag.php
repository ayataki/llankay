<?php

namespace Llankay;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function tasks () {
        return $this->belongsToMany('Llankay\Task');
    }
}
