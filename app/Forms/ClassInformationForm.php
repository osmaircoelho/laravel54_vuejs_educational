<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class ClassInformationForm extends Form
{
    public function buildForm()
    {
	    $this
		    ->add('date_start', 'date', [
			    'label' => 'Date Start',
			    'rules' => 'required|date',
		    ])
		    ->add('date_end', 'date', [
			    'label' => 'Date End',
			    'rules' => 'required|date',
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
