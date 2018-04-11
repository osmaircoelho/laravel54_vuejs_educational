<?php

namespace SON\Http\Controllers\Admin;

use Kris\LaravelFormBuilder\Form;
use SON\Forms\UserForm;
use SON\Models\User;
use Illuminate\Http\Request;
use SON\Http\Controllers\Controller;

/**
 * Class UsersController
 * @package SON\Http\Controllers\Admin
 */
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $form = \FormBuilder::create(UserForm::class, [
        	'url' => route('admin.users.store'),
            'method' => 'POST'
        ]);

       //return view('admin.users.create',['form' => $form] );
       return view('admin.users.create',['form'=>$form] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		/** @var Form $form */
    	$form = \FormBuilder::create(UserForm::class);

    	if(!$form->isValid()){
    		return redirect()
			    ->back()
			    ->withErrors($form->getErrors())
			    ->withInput();
	    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \SON\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SON\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SON\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SON\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
