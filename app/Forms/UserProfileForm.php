<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class UserProfileForm extends Form
{
    public function buildForm()
    {
	    $this
		    ->add('address', 'text', [
			    'label' => 'Address',
			    'rules' => 'required|max:255'
		    ])
		    ->add('cep', 'text', [
			    'label' => 'CEP',
			    'rules' => 'required|max:8'
		    ])
		    ->add('number', 'text', [
			    'label' => 'Number',
			    'rules' => 'required|max:255'
		    ])
		    ->add('complement', 'text', [
			    'label' => 'Complement',
			    'rules' => 'max:255'
		    ])
		    ->add('city', 'text', [
			    'label' => 'City',
			    'rules' => 'required|max:255'
		    ])
		    ->add('neighborhood', 'text', [
			    'label' => 'Neighborhood',
			    'rules' => 'required|max:255'
		    ])
		    ->add('state', 'text', [
			    'label' => 'State',
			    'rules' => 'required|max:255'
		    ]);
    }
}
