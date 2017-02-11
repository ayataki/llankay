<?php

namespace Llankay;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'body', 'description', 'priority', 'difficulty', 'due', 'start_date', 'completion_date', 'completed'
    ];

    public function tags () {
        return $this->belongsToMany('Llankay\Tag');
    }

    public function board () {
        return $this->belongsTo('Llankay\Board');
    }
}
