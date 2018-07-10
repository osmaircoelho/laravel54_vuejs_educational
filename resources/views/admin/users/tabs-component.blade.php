@php
    $tabs = [
       ['title' => 'Information','link' => route('admin.users.edit',['user' => $user->id])],
       ['title' => 'Profile','link' => route('admin.users.profile.edit',['user' => $user->id])],
    ]
@endphp

<h3>Manage user</h3>
<div class="text-right">
    {!! Button::link('List Users')->asLinkTo(route('admin.users.index')) !!}
</div>
{!! \Navigation::tabs($tabs) !!}
<div>
    {!! $slot !!}
</div>