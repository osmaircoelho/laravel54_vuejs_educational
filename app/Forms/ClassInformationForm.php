<?php

namespace SON\Forms;

use Carbon\Carbon;
use Kris\LaravelFormBuilder\Form;

class ClassInformationForm extends Form
{
    public function buildForm()
    {
    	$formatDate = function($value){
    		return ($value && $value instanceof Carbon)?$value->format('Y-m-d'):$value;
	    };

	    $this
		    ->add('date_start', 'date', [
			    'label' => 'Date Start',
			    'rules' => 'required|date',
			    'value' => $formatDate
		    ])
		    ->add('date_end', 'date', [
			    'label' => 'Date End',
			    'rules' => 'required|date',
			    'value' => $formatDate
		    ])
		    ->add('cycle', 'number', [
			    'label' => 'Cyclo',
			    'rules' => 'required|integer'
		    ])
		    ->add('subdivision', 'number', [
			    'label' => 'Subdivision',
			    'rules' => 'integer'
		    ])
		    ->add('semester', 'number', [
			    'label' => 'Semester (1 or 2)',
			    'rules' => 'required|in:1,2'
		    ])
		    ->add('year', 'number', [
			    'label' => 'Year',
			    'rules' => 'required|integer'
		    ]);
    }
}
