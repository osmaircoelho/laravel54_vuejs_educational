<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
            	'rules' => 'required|max:255'
            ])
            ->add('email', 'email',[
				'rules' => 'required|max:255|unique'
            ]);
    }
}
