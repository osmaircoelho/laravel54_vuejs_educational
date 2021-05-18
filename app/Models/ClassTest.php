<?php

namespace SON\Models;

use Illuminate\Database\Eloquent\Model;

class ClassTest extends Model
{
    protected $fillable = [
        'date_start',
        'date_end',
        'name',
        'class_teaching_id'
    ];

    public function classTeaching()
    {
    	return $this->belongsTo(ClassTeaching::class);
    }

    public function questions()
    {
    	return $this->hasMany(Question::class);
    }

    public function scopebyTeacher($query, $teacherId){
        return $query->whereHas('classTeaching', function ($query) use ($teacherId) {
            $query->where('teacher_id', $teacherId);
        });
    }
}
