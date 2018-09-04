@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>View class</h3>
            @php
                $linkEdit = route('admin.class_students.edit',['class_students' => $class_information->id]);
                $linkDelete = route('admin.class_students.destroy',['class_students' => $class_information->id]);
            @endphp
            {!! Button::primary(Icon::pencil().' Edit')->asLinkTo($linkEdit) !!}
            {!!
            Button::danger(Icon::remove().' Delete')->asLinkTo($linkDelete)
                ->addAttributes([
                    'onclick' => "event.preventDefault();document.getElementById(\"form-delete\").submit();"
                ])
            !!}
            @php
                $formDelete = FormBuilder::plain([
                    'id' => 'form-delete',
                    'url' => $linkDelete,
                    'method' => 'DELETE',
                    'style' => 'display:none'
                ])
            @endphp
            {!! form($formDelete) !!}
            <br/><br/>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{$class_information->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Date Start</th>
                    <td>{{$class_information->date_start->format('d/m/Y')}}</td>
                </tr>
                <tr>
                    <th scope="row">Date End</th>
                    <td>{{$class_information->date_start->format('d/m/Y')}}</td>
                </tr>
                <tr>
                    <th scope="row">Cyclo</th>
                    <td>{{$class_information->cycle}}</td>
                </tr>
                <tr>
                    <th scope="row">Subdvision</th>
                    <td>{{$class_information->subdivision}}</td>
                </tr>
                <tr>
                    <th scope="row">Semester</th>
                    <td>{{$class_information->year}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection