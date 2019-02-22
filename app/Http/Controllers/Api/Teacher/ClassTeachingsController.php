<?php

namespace SON\Http\Controllers\Api\Teacher;

use SON\Http\Controllers\Controller;
use SON\Models\ClassTeaching;

class ClassTeachingsController extends Controller
{
	public function index() {
		$results = ClassTeaching::
		where( 'teacher_id', \Auth::user()->userable->id )
		                        ->get()
		                        ->toArray();

		return array_map( function ( $item ) {
			unset( $item['teacher'] );

			return $item;
		}, $results );
	}
	public function show($id)
	{
		$result = ClassTeaching::
		where('teacher_id',\Auth::user()->userable->id)
		->findOrFail($id)
		->toArray();

		unset($result['teacher']);
		return $result;
	}


}