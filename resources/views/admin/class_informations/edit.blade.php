@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit class</h3>
            {!!
            form($form->add('edit','submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => Icon::create('floppy-disk').'&nbsp;&nbsp;Edit'
            ]))
            !!}
        </div>
    </div>
    </div>
@endsection