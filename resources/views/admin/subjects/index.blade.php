@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>List of courses</h3>
            {!! Button::primary('New discipline')->asLinkTo(route('admin.subjects.create')) !!}
        </div>
        <div class="row">
            {!!
            Table::withContents($subjects->items())
            ->striped()
            ->callback('Actions', function($field,$model){

                $linkEdit = route('admin.subjects.edit',['subject' => $model->id]);
                $linkShow = route('admin.subjects.show',['subject' => $model->id]);

                return Button::link(Icon::create('pencil').' Edit')->asLinkTo($linkEdit).'|'.
                    Button::link(Icon::create('folder-open').'&nbsp;&nbsp;View')->asLinkTo($linkShow);
            })
            !!}
        </div>

        {!! $subjects->links() !!}
    </div>
@endsection