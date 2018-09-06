@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h3>View discipline</h3>
            @php
                $linkEdit = route('admin.subjects.edit',['subject' => $subject->id]);
                $linkDelete = route('admin.subjects.destroy',['subject' => $subject->id]);
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
                    <td>{{$subject->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{$subject->name}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection