<?php

namespace SON\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionChoice extends Model
{
    protected $fillable = [
        'choice',
        'true',
        'class_question_id'
    ];
}
