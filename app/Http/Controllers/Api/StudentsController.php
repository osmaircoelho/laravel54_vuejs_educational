<?php

namespace SON\Http\Controllers\Api;

use Illuminate\Http\Request;
use SON\Http\Controllers\Controller;
use SON\Models\Student;

class StudentsController extends Controller {
	public function index() {
		return Student::all();
	}
}