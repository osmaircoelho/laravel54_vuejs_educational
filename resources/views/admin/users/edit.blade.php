@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @component('admin.users.tabs-component',['user' => $form->getModel()])
                <div class="col-md-12">
                    <h3>User edit</h3>
                    {!!
                    form($form->add('edit','submit', [
                        'attr' => ['class' => 'btn btn-primary btn-block'],
                        'label' => Icon::create('floppy-disk').'&nbsp;&nbsp;Edit'
                    ]))
                    !!}
                </div>
            @endcomponent
        </div>
    </div>
@endsection