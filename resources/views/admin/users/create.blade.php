@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>New User</h3>
            {!!
            form($form->add('insert','submit',[
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => Icon::create('floppy-disk') . ' Insert',
            ]))
            !!}
        </div>
    </div>
@endsection