<?php

namespace SON\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class ClassInformation extends Model implements TableInterface
{
	protected $fillable = [
		'date_start',
		'date_end',
		'cycle',
		'subdivision',
		'semester',
		'year'
	];

	protected $dates = [
		'date_start', //Carbon wrapper \DateTime
		'date_end'
	];

	public function students()
	{
		return $this->belongsToMany(Student::class);
	}

	public function teachings()
	{
		return $this->hasMany(ClassTeaching::class);
	}

	public function scopeByTeacher($query, $teacherId)
	{

		return $query->whereHas('teachings', function ($query) use($teacherId){
			$query->where('teacher_id', $teacherId);

		});
	}
	public function scopeByStudent($query, $studentId)
	{
		return $query->whereHas('students', function ($query) use($studentId){
			$query->where('student_id', $studentId);
		});
	}

	/**
	 * A list of headers to be used when a table is displayed
	 *
	 * @return array
	 */
	public function getTableHeaders()
	{
		return [
			'ID',
			'Date Start',
			'Date End',
			'Cyclo',
			'Subdivision',
			'Semester',
			'Year'
		];
	}

	/**
	 * Get the value for a given header. Note that this will be the value
	 * passed to any callback functions that are being used.
	 *
	 * @param string $header
	 * @return mixed
	 */
	public function getValueForHeader($header)
	{
		switch ($header) {
			case 'ID':
				return $this->id;
			case 'Date Start':
				return $this->date_start->format('d/m/Y'); //Carbon
			case 'Date End':
				return $this->date_end->format('d/m/Y');
			case 'Cyclo':
				return $this->cycle;
			case 'Subdivision':
				return $this->subdivision;
			case 'Semester':
				return $this->semester;
			case 'Year':
				return $this->year;
		}
	}
}