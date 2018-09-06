<?php
namespace SON\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SON\Http\Controllers\Controller;
//use SON\Http\Requests\ClassStudentRequest;
use SON\Models\ClassInformation;
use SON\Models\Student;

class ClassStudentsController extends Controller
{ 
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request, ClassInformation $class_information)
	{
		if(!$request->ajax()){
			return view('admin.class_informations.class_student', compact('class_information'));
		}else {
			return $class_information->students()->get();
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	/*public function store(ClassStudentRequest $request,ClassInformation $class_information)
	{
		//
	}*/

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	/*public function destroy(ClassInformation $class_information, Student $student)
	{
		//
	}*/
}