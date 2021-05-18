<?php

namespace SON\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassTeaching extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'subject_id',
		'class_information_id',
		'teacher_id'
	];

	public function classTests(): HasMany
    {
		return $this->hasMany(ClassTest::class);
	}

	public function subject(): BelongsTo
    {
		return $this->belongsTo(Subject::class);
	}

	public function classInformation(): BelongsTo
    {
		return $this->belongsTo(ClassInformation::class);
	}

	public function teacher(): BelongsTo
    {
		return $this->belongsTo(Teacher::class);
	}

	public function toArray(): array
    {
		$data = parent::toArray();
		$data['teacher'] = $this->teacher;
		$data['subject'] = $this->subject;
		$data['class_information'] = $this->classInformation;
		return $data;
	}

}
