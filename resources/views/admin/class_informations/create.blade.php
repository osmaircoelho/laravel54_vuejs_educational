@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h3>New Class</h3>
            {!!
            form($form->add('insert','submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => Icon::create('floppy-disk').'&nbsp;&nbsp;Insert'
            ]))
            !!}
        </div>
    </div>
@endsection