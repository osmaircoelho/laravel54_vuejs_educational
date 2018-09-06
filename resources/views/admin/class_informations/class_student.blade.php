@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Administration of students on class</h3>
            {{-- <class-student class-information="{{$class_information->id}}"></class-student>--}}

            <class-student class-information="{{$class_information->id}}"></class-student>

        </div>
    </div>
@endsection
