@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Add discipline and teacher in class</h3>
            <class-teaching class-information="{{$class_information->id}}"></class-teaching>
            <br/><br/>
        </div>
    </div>
@endsection