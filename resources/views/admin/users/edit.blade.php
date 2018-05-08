@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>User edit</h3>
            {!!
            form($form->add('edit', 'submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => Icon::create('floppy-disk'). ' Edit',
            ]))
             !!}
        </div>
    </div>
@endsection