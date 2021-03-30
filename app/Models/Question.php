<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question'
    ];

    protected $appends = ['number_of_answers'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function getNumberOfAnswersAttribute()
    {
        return $this->answers()->count();
    }
}
