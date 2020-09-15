@extends('layouts.app')

@section('title','Change Password')
    
@section('content')

@livewire('user.headings', ['heading_name'=>'Change Password', 'page_name'=>'Change Password'])

<livewire:user.changepassword />
    
@endsection
