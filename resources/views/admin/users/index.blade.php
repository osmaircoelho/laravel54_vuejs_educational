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
             return Button::success('Edit')->asLinkTo($linkEdit)->extraSmall() . ' ' .
                    Button::primary('View')->asLinkTo($linkShow)->extraSmall() .' '.
                    Button::danger('Delete')->extraSmall();
             })
            !!}
            {!! $users->links() !!}
        </div>
    </div>
@endsection