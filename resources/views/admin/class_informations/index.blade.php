@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Class Listing</h3>
            {!! Button::primary('New Class')->asLinkTo(route('admin.class_informations.create')) !!}
        </div>
        <div class="row">
            {!!
            Table::withContents($class_informations->items())
            ->striped()
            ->callback('Actions', function($field,$model){

                $linkEdit = route('admin.class_informations.edit',['class_information' => $model->id]);
                $linkShow = route('admin.class_informations.show',['class_information' => $model->id]);
                $linkStudents = route('admin.class_informations.students.index',['class_information' => $model->id]);
                $linkTeachings = route('admin.class_informations.teachings.index',['class_information' => $model->id]);

                return Button::link(Icon::create('pencil').' Edit')->asLinkTo($linkEdit).'|'.
                       Button::link(Icon::create('folder-open').'&nbsp;&nbsp;View')->asLinkTo($linkShow).'|'.
                       Button::link(Icon::create('home').'&nbsp;&nbsp;Students')->asLinkTo($linkStudents).'|'.
                       Button::link(Icon::create('blackboard').'&nbsp;&nbsp;Teaching')->asLinkTo($linkTeachings);
            });
            !!}
        </div>

        {!! $class_informations->links() !!}
    </div>
@endsection