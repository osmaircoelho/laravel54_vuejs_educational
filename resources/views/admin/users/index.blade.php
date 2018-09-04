@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>User listing</h3>
            {!! Button::primary('New User')->asLinkTo(route('admin.users.create')) !!}

        </div>

        <div class="row">
            {!!
            Table::withContents($users->items())
             ->striped()
             ->callback('Actions', function($field, $model){
             $linkEdit = route('admin.users.edit', ['user' => $model->id]);
             $linkShow = route('admin.users.show', ['user' => $model->id]);
            // $linkDelete = route('admin.users.destroy', ['user'=> $model->id]);
             return Button::success(Icon::create('pencil'). ' Edit')->asLinkTo($linkEdit)->extraSmall() . ' ' .
                    Button::primary(Icon::create('eye-open'). ' View')->asLinkTo($linkShow)->extraSmall();
                   // Button::danger(Icon::create('').' Delete')->asLinkTo($linkDelete)->extraSmall();
             })
            !!}
            {!! $users->links() !!}
        </div>
    </div>
@endsection