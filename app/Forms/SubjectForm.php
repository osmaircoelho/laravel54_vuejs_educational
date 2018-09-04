<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class SubjectForm extends Form
{
    public function buildForm()
    {
	    $this
		    ->add('name', 'text', [
			    'label' => 'Name',
			    'rules' => 'required|max:255'
		    ]);
    }
}
